<?php

/**
* @package   Buzz_Base
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
    <p>Versão: 1.7</p>
    <br>
    <p>Este módulo tem como objetivo centralizar todos os módulos da BUZZ.</p>
    <br>
    <div style="padding: 20px; border: solid 1px #000; background: #eee;">
        <p style="font-size: 16px;">Esperado para as próximas versões do módulo:</p>
        <br>        
        <p> - Campo para inserção de CSS customizado (Magento Backend);</p>            
        <br>
    </div>
    <br>
    <p>Caso estiver com dúvidas, não se preocupe, fale com o suporte !</p>
    <br>
    <p>Desenvolvido por <a href="https://sitedabuzz.com.br" target="_blank" title="Somos apaixonados por Lojas Virtuais">Buzz</a>.</p>
    ';

    }
}
