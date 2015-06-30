<?php

/* RoSiteBundle::layout.html.twig */
class __TwigTemplate_dd0053573fdfb4beb8a04f38200c34c01bb6f704ef85d873b1ec3ba8475ed730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html >
  <head>
    <meta charset=\"UTF-8\">
    <title>Connexion</title>
    
    
    
    
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin-login.css"), "html", null, true);
        echo "\">

    
    
    
  </head>

  <body>

    <div class=\"wrapper\">
    <div class=\"container\">
        <h1>Connexion</h1>
        
        
           
            <div>
                
                

                ";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 30
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 31
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 32
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 33
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                ";
        }
        // line 38
        echo "                ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "            </div>
        </form>
    </div>
    
    <ul class=\"bg-bubbles\">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js.login.js"), "html", null, true);
        echo "\"></script>

    
    
    
  </body>
</html>
                            
";
    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 39
        echo "                   
                ";
    }

    public function getTemplateName()
    {
        return "RoSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  125 => 38,  112 => 60,  91 => 41,  88 => 38,  85 => 37,  79 => 36,  70 => 33,  65 => 32,  60 => 31,  55 => 30,  53 => 29,  31 => 10,  20 => 1,);
    }
}
