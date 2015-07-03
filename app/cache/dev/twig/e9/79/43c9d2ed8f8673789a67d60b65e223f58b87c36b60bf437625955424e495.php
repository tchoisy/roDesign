<?php

/* ::slide_home.html.twig */
class __TwigTemplate_e97943c9d2ed8f8673789a67d60b65e223f58b87c36b60bf437625955424e495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"home\"> 
    <div id=\"main-slider\" class=\"carousel slide\" data-ride=\"carousel\">
        ";
        // line 8
        echo "        <div class=\"carousel-inner\">
            ";
        // line 9
        $this->displayBlock('slider', $context, $blocks);
        // line 11
        echo "      
        </div>
    </div>      
</section>";
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
        // line 10
        echo "    
            ";
    }

    public function getTemplateName()
    {
        return "::slide_home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 9,  29 => 11,  27 => 9,  24 => 8,  20 => 1,);
    }
}
