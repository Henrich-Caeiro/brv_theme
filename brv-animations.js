(function () {
  'use strict';

  var body = document.body;
  var header = document.querySelector('.site-header');
  var cart = JSON.parse(localStorage.getItem('brv-cart') || '[]');
  var cartButton = document.querySelector('.site-action--cart .wp-block-button__link');
  var cartModal = document.querySelector('.brv-modal');
  var cartItems = document.querySelector('.brv-cart-items');
  var cartTotal = document.querySelector('.brv-cart-total');
  var emptyCartMarkup = cartItems ? cartItems.innerHTML : '';

  function renderCart() {
    var total = cart.reduce(function (sum, item) { return sum + item.price * item.qty; }, 0);
    if (cartButton) {
      var count = cartButton.querySelector('.brv-cart-count');
      if (!count) {
        count = document.createElement('span');
        count.className = 'brv-cart-count';
        cartButton.appendChild(count);
      }
      count.textContent = cart.reduce(function (sum, item) { return sum + item.qty; }, 0);
    }
    if (!cartItems) return;
    if (!cart.length) {
      cartItems.innerHTML = emptyCartMarkup;
      if (cartTotal) cartTotal.hidden = true;
      return;
    }
    cartItems.innerHTML = cart.map(function (item) {
      return '<div class="brv-cart-row"><span>' + item.name + '</span><strong>R$ ' + item.price.toFixed(2).replace('.', ',') + ' × ' + item.qty + '</strong><button type="button" data-brv-remove="' + item.id + '" aria-label="Remover ' + item.name + '">×</button></div>';
    }).join('');
    if (cartTotal) {
      cartTotal.hidden = false;
      var totalAmount = cartTotal.querySelector('strong');
      if (totalAmount) totalAmount.textContent = 'R$ ' + total.toFixed(2).replace('.', ',');
    }
  }

  function setCartOpen(open) {
    if (!cartModal) return;
    cartModal.hidden = !open;
    cartModal.classList.toggle('is-open', open);
    if (open) {
      var closeButton = cartModal.querySelector('.brv-modal__close a');
      if (closeButton) closeButton.focus();
    } else if (cartButton) {
      cartButton.focus();
    }
  }

  if (cartModal) {
    cartModal.hidden = true;
    cartModal.setAttribute('role', 'dialog');
    cartModal.setAttribute('aria-modal', 'true');
    cartModal.setAttribute('aria-labelledby', 'brv-cart-title');
  }

  window.addEventListener('scroll', function () {
    if (header) header.classList.toggle('header-scrolled', window.scrollY > 50);
  }, { passive: true });

  document.addEventListener('click', function (event) {
    var trigger = event.target.closest('a,button');
    if (!trigger) return;

    if (trigger.closest('.site-action--cart')) {
      event.preventDefault();
      renderCart();
      setCartOpen(true);
      return;
    }
    if (trigger.closest('.brv-modal__close')) {
      event.preventDefault();
      setCartOpen(false);
      return;
    }

    if (trigger.closest('.brv-quantity__decrease, .brv-quantity__increase')) {
      event.preventDefault();
      var card = trigger.closest('.brv-product-card');
      var output = card && card.querySelector('.brv-quantity__value button, .brv-quantity__value');
      if (output) {
        var quantity = Number(output.textContent || 0);
        var delta = trigger.closest('.brv-quantity__increase') ? 1 : -1;
        output.textContent = String(Math.max(0, quantity + delta));
      }
      return;
    }

    if (trigger.closest('.brv-product-card__add')) {
      event.preventDefault();
      var product = trigger.closest('.brv-product-card');
      if (!product) return;
      var name = (product.querySelector('h3') || {}).textContent || 'Produto';
      var priceText = (product.querySelector('.brv-product-card__price') || {}).textContent || '0';
      var price = parseFloat(priceText.replace(/[^\d,.-]/g, '').replace(',', '.')) || 0;
      var id = name.toLowerCase().replace(/[^a-z0-9]+/g, '-');
      var quantityOutput = product.querySelector('.brv-quantity__value button, .brv-quantity__value');
      var quantity = Math.max(1, Number(quantityOutput && quantityOutput.textContent) || 0);
      var found = cart.find(function (item) { return item.id === id; });
      if (found) found.qty += quantity; else cart.push({ id: id, name: name, price: price, qty: quantity });
      localStorage.setItem('brv-cart', JSON.stringify(cart));
      if (quantityOutput) quantityOutput.textContent = '0';
      renderCart();
      setCartOpen(true);
      return;
    }

    var remove = trigger.getAttribute('data-brv-remove');
    if (remove) {
      cart = cart.filter(function (item) { return item.id !== remove; });
      localStorage.setItem('brv-cart', JSON.stringify(cart));
      renderCart();
    }
  });

  var checkout = document.querySelector('.brv-cart-checkout .wp-block-button__link');
  if (checkout) checkout.addEventListener('click', function (event) {
    if (!cart.length) return;
    event.preventDefault();
    alert('Pedido preparado. Entre na área do cliente para concluir.');
    window.location.href = '/admin/';
  });

  var lightbox;
  function closeLightbox() {
    if (!lightbox) return;
    lightbox.remove();
    lightbox = null;
  }

  function openLightbox(event) {
    event.preventDefault();
    lightbox = document.createElement('div');
    lightbox.className = 'brv-lightbox';
    lightbox.setAttribute('role', 'dialog');
    lightbox.setAttribute('aria-modal', 'true');
    lightbox.setAttribute('aria-label', 'Imagem ampliada');
    lightbox.innerHTML = '<button type="button" aria-label="Fechar">×</button><img src="' + this.src + '" alt="' + (this.alt || '') + '">';
    lightbox.addEventListener('click', function (clickEvent) {
      if (clickEvent.target === lightbox || clickEvent.target.tagName === 'BUTTON') closeLightbox();
    });
    body.appendChild(lightbox);
    lightbox.querySelector('button').focus();
  }

  document.querySelectorAll('.wp-block-gallery img, #gallery img').forEach(function (img) {
    img.tabIndex = 0;
    img.classList.add('brv-lightbox-trigger');
    img.addEventListener('click', openLightbox);
    img.addEventListener('keydown', function (event) {
      if (event.key === 'Enter' || event.key === ' ') openLightbox.call(img, event);
    });
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeLightbox();
      if (cartModal && !cartModal.hidden) setCartOpen(false);
      var openNavigation = document.querySelector('.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-close');
      if (openNavigation) openNavigation.click();
    }
  });

  document.querySelectorAll('[data-brv-booking], [data-brv-login]').forEach(function (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var status = form.querySelector('.brv-form-status');
      if (status) status.textContent = form.hasAttribute('data-brv-booking')
        ? 'Agendamento confirmado! Enviaremos os detalhes por e-mail.'
        : 'Login demonstrativo realizado.';
      form.reset();
    });
  });

  var revealItems = document.querySelectorAll('[data-brv-reveal]');
  if (revealItems.length) {
    document.documentElement.classList.add('brv-motion-ready');
    if ('IntersectionObserver' in window) {
      var revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      revealItems.forEach(function (item) { revealObserver.observe(item); });
    } else {
      revealItems.forEach(function (item) { item.classList.add('is-visible'); });
    }
  }

  renderCart();
}());
