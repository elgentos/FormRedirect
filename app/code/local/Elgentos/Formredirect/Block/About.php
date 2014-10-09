<?php

class Elgentos_Formredirect_Block_About
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $logopath    =    'http://elgentos.nl/sites/all/themes/creative/images/logo_side_white.png';
        $html = <<<HTML
        <div style="background:url('$logopath') no-repeat scroll 14px 14px #EAF0EE; border:1px solid #CCCCCC; margin-bottom:10px; padding:200px 5px 5px 14px;">
        <p>High quality Magento webshops & extensions built by professionals you can trust!</p>
        <br />
        <a href="http://www.elgentos.nl/" title="elgentos" alt="elgentos.nl" target="_blank">elgentos.nl</a>
        </div>
HTML;
        return $html;
    }
}
