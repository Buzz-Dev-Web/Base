# Buzz-Base

O propósito desse módulo é funcionar como um core para os módulos da BUZZ que forem sendo desenvolvidos, classes comuns a um ou mais módulos devem ser implementados aqui para que possamos ter tudo centralizado.

Instalando esse módulo no Magento, temos dois arquivos de CSS padrões implementados tanto para o admin quanto para o frontend que são carregados em todas as páginas, a tradução padrão para o Magento também está presente.

**ATENÇÃO** 

*Antes de executar as tarefas abaixo, certifique-se que a loja está em modo desenvolvimento*

## Passo a passo de instalação:


### Manual: 

1 -> Clone este repositório para dentro da sua pasta app/code/Buzz/;

2 -> Renomeie a pasta retirando o **Buzz-** deixando apenas **Base** no nome;

3 -> A disposição dos arquivos deve ficar dessa maneira: app/code/Buzz/Base;

4 -> Acesse o terminal *(via SSH)* e digite o seguinte comando:

```


bin/magento: setup:upgrade


```

5 -> A seguir verifique se o mesmo foi instalado, digitando no terminal:

```


bin/magento: module:status


```

6 -> O resultado esperado deve ser habilitado !

7 -> Feito isso proceda com os seguintes comandos na ordem apresentada neste tutorial:

```


bin/magento setup:di:compile


```

Posteriormente execute o deploy através do comando:

```


bin/magento setup:static-content:deploy


```

8 -> Pronto, módulo **BUZZ BASE** instalado com sucesso !

### Instalação via Composer:

Em desenvolvimento !


## Dúvida/Suporte:

Em caso de dúvidas entre em contato com o dept de suporte.