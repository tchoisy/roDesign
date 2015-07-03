<?php

/* RoSiteBundle:Default:index.html.twig */
class __TwigTemplate_c965f18429c2ccd9108549cdb8c1cbbcc31d1e3b5c5d57f185d7709a9e556abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"item active\">
        <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slider/sf.jpg"), "html", null, true);
        echo "\" alt=\"slider\">                       
        <div class=\"carousel-caption\">
            <h2>Bienvenue </h2>
            <h4>Decouvrez mes maillots et tout mon univers fhfuidhsfshdfh fhsdiuf hdsiuf hiusdgf iusd ghfyusdg figsi</h4>
            <a href=\"#contact\">Contactez-moi <i class=\"fa fa-angle-right\"></i></a>
        </div>
    </div>     
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "RoSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  55 => 13,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
