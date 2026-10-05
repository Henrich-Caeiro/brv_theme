(function () {
  'use strict';

  var body = document.body;
  var header = document.querySelector('.site-header');
  var cartKey = 'brv-cart';
  var whatsappNumber = '5516997247333';
  var cart = readCart();
  var cartButton = document.querySelector('.site-action--cart .wp-block-button__link');
  var cartModal = document.querySelector('.brv-modal');
  var cartItems = document.querySelector('.brv-cart-items');
  var cartTotal = document.querySelector('.brv-cart-total');
  var emptyCartMarkup = cartItems ? cartItems.innerHTML : '';

  function readCart() {
    try {
      var stored = JSON.parse(localStorage.getItem(cartKey) || '[]');
      return Array.isArray(stored) ? stored : [];
    } catch (error) {
      return [];
    }
  }

  function persistCart() {
    localStorage.setItem(cartKey, JSON.stringify(cart));
  }

  function money(value) {
    return Number(value || 0).toLocaleString('pt-BR', {
      style: 'currency',
      currency: 'BRL'
    });
  }

  function getProductCardData(card) {
    var name = (card && card.getAttribute('data-name')) || (card && card.querySelector('h3') && card.querySelector('h3').textContent) || 'Produto';
    var category = (card && card.getAttribute('data-category')) || 'Geral';
    var priceText = (card && card.getAttribute('data-price')) || (card && card.querySelector('.brv-product-card__price') && card.querySelector('.brv-product-card__price').textContent) || '0';
    var price = Number(String(priceText).replace(/[R$\s.]/g, '').replace(',', '.')); 
    return {
      id: (card && card.getAttribute('data-product-id')) || name.toLowerCase().replace(/[^a-z0-9]+/g, '-'),
      name: name,
      category: category,
      price: Number.isFinite(price) ? price : 0
    };
  }

  function renderCart() {
    var total = cart.reduce(function (sum, item) { return sum + Number(item.price || 0) * Number(item.qty || 0); }, 0);
    if (cartButton) {
      var count = cartButton.querySelector('.brv-cart-count');
      if (!count) {
        count = document.createElement('span');
        count.className = 'brv-cart-count';
        cartButton.appendChild(count);
      }
      count.textContent = cart.reduce(function (sum, item) { return sum + Number(item.qty || 0); }, 0);
    }
    if (!cartItems) return;
    if (!cart.length) {
      cartItems.innerHTML = emptyCartMarkup;
      if (cartTotal) cartTotal.hidden = true;
      return;
    }
    cartItems.innerHTML = cart.map(function (item) {
      return '<div class="brv-cart-row"><span>' + item.name + '</span><strong>' + money(item.price * item.qty) + ' × ' + item.qty + '</strong><button type="button" data-brv-remove="' + item.id + '" aria-label="Remover ' + item.name + '">×</button></div>';
    }).join('');
    if (cartTotal) {
      cartTotal.hidden = false;
      var totalAmount = cartTotal.querySelector('strong');
      if (totalAmount) totalAmount.textContent = money(total);
    }
  }

  function renderOrder() {
    var orderRoot = document.querySelector('.brv-product-order');
    if (!orderRoot) return;
    var itemsWrap = orderRoot.querySelector('.brv-product-order__items');
    var totalNode = orderRoot.querySelector('.brv-product-order__summary strong');
    var orderButton = orderRoot.querySelector('.brv-product-order__cta');
    var total = cart.reduce(function (sum, item) { return sum + Number(item.price || 0) * Number(item.qty || 0); }, 0);
    if (!itemsWrap || !totalNode || !orderButton) return;
    if (!cart.length) {
      itemsWrap.innerHTML = '<p class="brv-product-order__empty">Nenhum produto selecionado.</p>';
      totalNode.textContent = money(0);
      orderButton.disabled = true;
      return;
    }
    itemsWrap.innerHTML = cart.map(function (item) {
      return '<div class="brv-product-order__item"><span>' + item.name + ' × ' + item.qty + '</span><strong>' + money(item.price * item.qty) + '</strong></div>';
    }).join('');
    totalNode.textContent = money(total);
    orderButton.disabled = false;
  }

  function buildWhatsAppMessage() {
    if (!cart.length) return '';
    var groups = {};
    var total = 0;
    cart.forEach(function (item) {
      var category = item.category || 'Geral';
      if (!groups[category]) groups[category] = [];
      groups[category].push(item);
      total += Number(item.price || 0) * Number(item.qty || 0);
    });
    var lines = ['Olá! Gostaria de fazer o pedido abaixo da Barbearia Roger Vilela:'];
    Object.keys(groups).forEach(function (category) {
      lines.push('');
      lines.push('*' + category + '*');
      groups[category].forEach(function (item) {
        lines.push('- ' + item.name + ' x' + item.qty + ' — ' + money(item.price * item.qty));
      });
    });
    lines.push('');
    lines.push('Total: ' + money(total));
    lines.push('Quero confirmar esse pedido.');
    return lines.join('\n');
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

  function bindProductControls() {
    document.querySelectorAll('.brv-product-card').forEach(function (card) {
      var valueNode = card.querySelector('.brv-quantity__value');
      var decrease = card.querySelector('.brv-quantity__decrease');
      var increase = card.querySelector('.brv-quantity__increase');
      var addButton = card.querySelector('.brv-product-card__add');

      if (decrease) {
        decrease.addEventListener('click', function (event) {
          event.preventDefault();
          if (!valueNode) return;
          var quantity = Number(valueNode.textContent || 0);
          valueNode.textContent = String(Math.max(0, quantity - 1));
        });
      }

      if (increase) {
        increase.addEventListener('click', function (event) {
          event.preventDefault();
          if (!valueNode) return;
          var quantity = Number(valueNode.textContent || 0);
          valueNode.textContent = String(Math.max(0, quantity + 1));
        });
      }

      if (addButton) {
        addButton.addEventListener('click', function (event) {
          event.preventDefault();
          var productData = getProductCardData(card);
          var quantity = Math.max(0, Number(valueNode && valueNode.textContent) || 0);
          if (!quantity) return;
          var existing = cart.find(function (item) { return item.id === productData.id; });
          if (existing) {
            existing.qty += quantity;
          } else {
            cart.push({ id: productData.id, name: productData.name, category: productData.category, price: productData.price, qty: quantity });
          }
          persistCart();
          if (valueNode) valueNode.textContent = '0';
          renderCart();
          renderOrder();
          setCartOpen(true);
        });
      }
    });
  }

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

    var removeId = trigger.getAttribute('data-brv-remove');
    if (removeId) {
      cart = cart.filter(function (item) { return item.id !== removeId; });
      persistCart();
      renderCart();
      renderOrder();
    }
  });

  var checkout = document.querySelector('.brv-cart-checkout .wp-block-button__link');
  if (checkout) {
    checkout.addEventListener('click', function (event) {
      event.preventDefault();
      if (!cart.length) return;
      var message = buildWhatsAppMessage();
      if (!message) return;
      window.open('https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(message), '_blank');
    });
  }

  var orderButton = document.querySelector('.brv-product-order__cta');
  if (orderButton) {
    orderButton.addEventListener('click', function (event) {
      event.preventDefault();
      var message = buildWhatsAppMessage();
      if (!message) return;
      window.open('https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(message), '_blank');
    });
  }

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

  bindProductControls();
  renderCart();
  renderOrder();
}());
