<?php

/**
 * @package   Buzz_Base
 * @company   Buzz
 * @author    github.com/mauricio-tonny
 * @copyright Copyright (c)
 */

namespace Buzz\Base\Block\Adminhtml\System\Config;

class Documentation extends \Magento\Config\Block\System\Config\Form\Fieldset
{
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {

        return '<p style="font-size: 18px; font-weight: 600; margin-top: 15px;">Sobre o módulo</p>
    <br>
    <p>Versão: 1.1</p>
    <br>
    <div style="padding: 20px; border: solid 1px #000; background: #eee;">
        <p style="font-size: 16px;">Esperado para as próximas versões do módulo:</p>
        <br>
        <p> - Listar módulos instalados da BUZZ,</p>
        <p> - Exibir a versão de cada módulo instalado da Buzz,</p>
        <p> - Exibir a pasta onde o Magento está instalado,</p>
        <p> - Criar menu customizado com logo (BUZZ),</p>
        <p> - Exibir o modo que a loja se encontra (desenvolvimento/produção),</p>
        <br>
    </div>
    <br>
    <p>Caso estiver com dúvidas, não se preocupe, fale com o suporte !</p>
    <br>
    <p>Desenvolvido por <a href="https://sitedabuzz.com.br" target="_blank" title="Somos apaixonados por Lojas Virtuais">Buzz</a>.</p>
    ';

    }
}
