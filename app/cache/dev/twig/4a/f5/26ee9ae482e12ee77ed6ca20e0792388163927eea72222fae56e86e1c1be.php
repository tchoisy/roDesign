<?php

/* ::header.html.twig */
class __TwigTemplate_4af526ee9ae482e12ee77ed6ca20e0792388163927eea72222fae56e86e1c1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"header\" role=\"banner\">      
\t<div class=\"main-nav\">
\t    <div class=\"container\">
\t        ";
        // line 4
        $this->env->loadTemplate("::share.html.twig")->display($context);
        echo "    
\t        ";
        // line 5
        $this->env->loadTemplate("::nav.html.twig")->display($context);
        echo "    
\t        
\t    </div>
\t</div>                    
</header>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
