<?php

class Elgentos_Formredirect_Block_Instructions
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
        $html = <<<HTML
<div>
This extension has made an page in CMS > Pages. Default it's named contact-thankyou but you can name it whatever you want as long as you change the name in the config below to.
<ul style="list-style-type: disc; margin-left: 20px; ">
<li>By default the extention is active. So make sure you fill your redirect page with what ever you want
</li>
<li>If you want to redirect to another page rename the page identifier (CMS > Pages) and fill out the new name below
</li>
<li>If you have any troubles feel free to contact us: <a href="http://www.elgentos.nl/" title="elgentos" alt="elgentos.nl" target="_blank">elgentos.nl</a>
</li>
</ul>
</div>
HTML;
        return $html;
    }
}




