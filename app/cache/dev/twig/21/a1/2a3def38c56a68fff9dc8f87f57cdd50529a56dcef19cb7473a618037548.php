<?php

/* RoSiteBundle:Default:about.html.twig */
class __TwigTemplate_21a12a3def38c56a68fff9dc8f87f57cdd50529a56dcef19cb7473a618037548 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slider/maillot.jpg"), "html", null, true);
        echo "\" alt=\"slider\">                       
    </div>     
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<section class=\"about\" style=\"background : rgb(25,125,120)\">
\t<p>Bienvenue In my web site</p>
</section>
";
    }

    public function getTemplateName()
    {
        return "RoSiteBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  50 => 8,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
