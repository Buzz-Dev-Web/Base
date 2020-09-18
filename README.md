# Buzz-Base

O propósito desse módulo é funcionar como um core para futuros módulos que podem ser desenvolvidos, classes comuns a um ou mais módulos devem ser implementados aqui para que possamos ter tudo centralizado.

Instalando esse módulo no Magento, temos dois arquivos de CSS padrões implementados tanto para o admin quanto para o frontend que são carregados em todas as páginas, a tradução padrão para o Magento também está presente.

Módulo desenvolvido para que seja possível a exibição de opções de parcelamento no catalogo e visão individual dos produtos.

# Passo a passo de instalação

## Manual: 

1 -> Clone este repositório para dentro da sua pasta app/code/Buzz/

2 -> Renomeie a pasta retirando o Buzz- deixando apenas o Base no nome

3 -> A disposição dos arquivos deve ficar dessa maneira: app/code/Buzz/Base

4 -> Rode um bin/magento setup:upgrade e bin/magento setup:di:compile (bin/magento s:s:d apenas se a loja estiver em production mode)

## Composer:

#### em breve ####
