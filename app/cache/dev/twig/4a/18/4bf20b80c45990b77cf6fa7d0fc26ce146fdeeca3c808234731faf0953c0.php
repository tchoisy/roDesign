<?php

/* ::base.html.twig */
class __TwigTemplate_4a184bf20b80c45990b77cf6fa7d0fc26ce146fdeeca3c808234731faf0953c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Ro design</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- <link href=\"css/animate.css\" rel=\"stylesheet\">  -->
    <link href=\"css/responsive.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
    <![endif]-->  
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->

<body>
    ";
        // line 28
        $this->env->loadTemplate("::header.html.twig")->display($context);
        // line 29
        echo "    ";
        $this->env->loadTemplate("::slide_home.html.twig")->display($context);
        // line 30
        echo "    

    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
   
    <section id=\"contact\">
        <div id=\"map\">
            <div id=\"gmap-wrap\">
                <div id=\"gmap\">                 
                </div>              
            </div>
        </div><!--/#map-->
        <div class=\"contact-section\">
            <div class=\"ear-piece\">
                <img class=\"img-responsive\" src=\"images/ear-piece.png\" alt=\"\">
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-sm-offset-4\">
                        <div class=\"contact-text\">
                            <h3>Contact</h3>
                            <address>
                                E-mail: rodesign@r15mamery<br>
                                Tél: +(33) 4 04157895<br>
                            </address>
                        </div>
                        <div class=\"contact-address\">
                            <h3>Contact</h3>
                            <address>
                                Quelque part<br>
                                dans une ville<br>
                                En France
                            </address>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <div id=\"contact-section\">
                            <h3>Envoyer un message</h3>
                            <div class=\"status alert alert-success\" style=\"display: none\"></div>
                            <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\" placeholder=\"Nom\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"4\" placeholder=\"Entrez votre message\"></textarea>
                                </div>                        
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary pull-right\">Envoyer</button>
                                </div>
                            </form>        
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!--/#contact-->

    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"text-center\">
                <p> Copyright  &copy;2014<a target=\"_blank\" href=\"http://tommy-choisy.fr\"> Tommy CHOISY </a>. All Rights Reserved. 
                    <br> Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\"> Evento </a>Theme &amp; Tommy CHOISY</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    
</body>
</html>";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 33,  144 => 32,  70 => 34,  67 => 33,  65 => 32,  61 => 30,  58 => 29,  56 => 28,  43 => 18,  32 => 10,  21 => 1,);
    }
}
