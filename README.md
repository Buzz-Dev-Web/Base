# Base - BUZZ

O propósito desse módulo é funcionar como um core para os módulos da BUZZ que forem sendo desenvolvidos, classes comuns a um ou mais módulos devem ser implementados aqui para que possamos ter tudo centralizado.

Instalando esse módulo no Magento, temos dois arquivos de CSS padrões implementados tanto para o admin quanto para o frontend que são carregados em todas as páginas, a tradução padrão para algumas áreas do Magento também está presente (traduções ausentes no RafaelSTZ).

## Requisitos

* Pasta BUZZ dentro da app/code (obrigatório),
* Módulo *Base* instalado (obrigatório),

## Compatibilidade

- [x] Testado em Magento 2.2.x
- [x] Testado em Magento 2.3.x
- [x] Testado em Magento 2.4.x

**ATENÇÃO:** Para Magento acima de _2.4.3_ é necessário baixar o pacote Zend, pois ele foi descontinuado a partir desta versão, para download do pacote, veja o comando abaixo:

    composer require laminas/laminas-serializer --no-update
    composer update
    bin/magento setup:upgrade
    rm -rf var/generation var/view_preprocessed/ pub/static/frontend
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy -f
    bin/magento cache:flush


## Passo a passo de instalação:


### Manual:

1 -> Certifique-se que a loja encontre-se em modo desenvolvimento,

2 -> Clone este repositório para dentro da sua pasta app/code/Buzz/;

3 -> Renomeie a pasta retirando o **Buzz-** deixando apenas **Base** no nome;

4 -> A disposição dos arquivos deve ficar dessa maneira: app/code/Buzz/Base;

5 -> Acesse o terminal *(via SSH)* e digite o seguinte comando:

```


bin/magento setup:upgrade


```

6 -> A seguir verifique se o mesmo foi instalado, digitando no terminal:

```


bin/magento module:status


```

7 -> O resultado esperado deve ser habilitado !

8 -> Feito isso proceda com os seguintes comandos na ordem apresentada neste tutorial:

```


bin/magento setup:di:compile


```

Posteriormente execute o deploy através do comando:

```


bin/magento setup:static-content:deploy


```

9 -> Pronto, módulo **BUZZ BASE** instalado com sucesso !

### Instalação via Composer:

Em desenvolvimento !


## Dúvida/Suporte:

Em caso de dúvidas entre em contato com o dept de suporte.