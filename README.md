# Villela Barbearia — Tema Gutenberg

Tema de blocos para a Villela Barbearia. A home é composta por template parts e padrões estáticos montados exclusivamente com blocos core do Gutenberg. O conteúdo inicial é um ponto de partida editável no Editor do site, não um bloco HTML nem conteúdo de ACF/plugin.

## Recursos

- Header único na homepage via `parts/header.html`, compartilhando o layout e ícones SVG com `header.php` das rotas virtuais.
- Rotas virtuais `/agendar/` e `/admin/` sem alteração de banco; ao ativar o tema, as regras são registradas e os permalinks são atualizados.
- Fluxo demonstrativo de agendamento com serviço, dados, data, horário e confirmação visual.
- Carrinho básico persistido em `localStorage`, com adicionar/remover, contador e checkout direcionado à área do cliente.
- Lightbox de imagens da galeria, navegação por teclado e suporte a `prefers-reduced-motion`.
- Homepage alinhada ao React: container 1280px, fonte system UI, H1 responsivo de 48/72/96px e breakpoints de 640/768/1024/1280px.
- Reveals da seção Sobre são recortados pelo próprio bloco, como no React, e o e-mail do rodapé pode quebrar em colunas estreitas sem criar rolagem horizontal.
- Textos e imagens das seções de equipe, depoimentos, produtos e galeria acompanham a homepage React.
- Títulos, descrições, cartões, depoimentos, produtos, preços, rótulos, links e texto do rodapé são blocos core editáveis. A navegação usa os blocos Navegação/Link de navegação; logos e fotografias usam Imagem, a capa do padrão CTA usa Capa e as redes sociais usam Links sociais.
- No painel, abra **Aparência → Editor → Modelos → Página inicial** para editar a composição e os template parts Cabeçalho/Rodapé. Selecione qualquer texto para editar o bloco de parágrafo/título/botão; selecione uma imagem e use **Substituir** para enviar ou escolher mídia pela Biblioteca de mídia nativa. Links e rótulos do menu são editados no bloco Navegação.
- As seções da homepage são padrões de blocos não sincronizados incluídos pelo modelo. É possível selecionar e editar os blocos no modelo; também é possível desanexar/inserir um padrão para manter uma composição independente.
- Carrinho com quantidades por produto, persistência em `localStorage` e contador.

## Instalação

Copie `brv-theme` para `wp-content/themes/`, ative o tema e defina a página inicial. Ajuste imagens, textos e links diretamente no editor do site; os padrões podem ser desagrupados e editados como blocos.

## Limitações

O conteúdo padrão das fotografias usa URLs externas sem IDs de anexos do WordPress; cada uma continua sendo um bloco Imagem/Capa nativo e pode ser substituída ou reenviada pela Biblioteca de mídia, mas as imagens de origem não são importadas automaticamente para a instalação. As linhas do carrinho são dados dinâmicos de interface, derivados dos blocos de produtos, e não conteúdo editorial persistido. O agendamento, login e checkout são fluxos front-end demonstrativos. Para produção, conecte os formulários a um serviço com autenticação, disponibilidade e processamento de pagamentos. O carrinho usa armazenamento local e não substitui WooCommerce.
# brv_theme
