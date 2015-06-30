<?php

/* :admin:base.html.twig */
class __TwigTemplate_77f3e9901cd603ecb57d96a01a5f6121f5d97e91572468f81211995603b362a9 extends Twig_Template
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
    <title>Administration Ro design</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin-main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- <link href=\"css/animate.css\" rel=\"stylesheet\">  -->
    <link href=\"css/responsive.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
    <![endif]-->  

    <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57-precomposed.png\">

        <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href=\"http://fonts.googleapis.com/css?family=Raleway:400,300\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
</head><!--/head-->

<body>

    <!-- NAVIGATION MENU -->

    <div class=\"navbar-nav navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"\" alt=\"\"> Administration</a>
            </div> 
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"index.html\"><i class=\"icon-home icon-white\"></i> Home</a></li>                            
                    <li><a href=\"tables.html\"><i class=\"icon-th icon-white\"></i> Tables</a></li>
                    <li><a href=\"login.html\"><i class=\"icon-lock icon-white\"></i> Login</a></li>
                    <li><a href=\"user.html\"><i class=\"icon-user icon-white\"></i> User</a></li>
                </ul>
            
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Profil</a>
                          <ul class=\"dropdown-menu\" style=\"z-index: 6000;\">
                            <li><a href=\"#\">Action</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Deconnexion</a></li>
                          </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class=\"container\" style=\"margin-top:60px;\">
        


        <div class=\"row\">

          <!-- USER PROFILE BLOCK -->
            <div class=\"col-sm-3 col-lg-3\">
                <div class=\"dash-unit\">
                    <dtitle>User Profile</dtitle>
                    <hr>
                    <div class=\"thumbnail\">
                        <img src=\"http://www.prepbootstrap.com/Content/images/shared/single-page-admin/face80x80.jpg\" alt=\"Marcel Newman\" class=\"img-circle\">
                    </div><!-- /thumbnail -->
                    <h1>Marcel Newman</h1>
                    <h3>Madrid, Spain</h3>
                    <br>
                        <div class=\"info-user\">
                            <span aria-hidden=\"true\" class=\"li_user fs1\"></span>
                            <span aria-hidden=\"true\" class=\"li_settings fs1\"></span>
                            <span aria-hidden=\"true\" class=\"li_mail fs1\"></span>
                            <span aria-hidden=\"true\" class=\"li_key fs1\"></span>
                        </div>
                    </div>
            </div>

          <!-- DONUT CHART BLOCK -->
            <div class=\"col-sm-3 col-lg-3\">
                <div class=\"dash-unit\">
                    <dtitle>Site Bandwidth</dtitle>
                    <hr>
                    <div id=\"load\"></div>
                    <h2>45%</h2>
                </div>
            </div>

          <!-- DONUT CHART BLOCK -->
            <div class=\"col-sm-3 col-lg-3\">
                <div class=\"dash-unit\">
                    <dtitle>Disk Space</dtitle>
                    <hr>
                    <div id=\"space\"></div>
                    <h2>65%</h2>
                </div>
            </div>
            
            <div class=\"col-sm-3 col-lg-3\">

          <!-- LOCAL TIME BLOCK -->
                <div class=\"half-unit\">
                    <dtitle>Local Time</dtitle>
                    <hr>
                        <div class=\"clockcenter\">
                            <digiclock>12:45:25</digiclock>
                        </div>
                </div>

          <!-- SERVER UPTIME -->
                <div class=\"half-unit\">
                    <dtitle>Server Uptime</dtitle>
                    <hr>
                    <div class=\"cont\">
                        <p><img src=\"http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up.png\" alt=\"\"> <bold>Up</bold> | 356ms.</p>
                    </div>
                </div>

            </div>
        </div><!-- /row -->
      

    ";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "
    </div> <!-- /container -->
    <div id=\"footerwrap\">
        <footer class=\"clearfix\"></footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-12\">
                <p><img src=\"http://www.prepbootstrap.com/Content/images/shared/single-page-admin/logo.png\" alt=\"\"></p>
                <p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->       
    </div><!-- /footerwrap -->
   

    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"text-center\">
                <p> Copyright  &copy;2015<a target=\"_blank\" href=\"http://tommy-choisy.fr\"> Tommy CHOISY </a>. All Rights Reserved.</p>              
            </div>
        </div>
    </footer>
    <!--/#footer-->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 137,  199 => 136,  192 => 162,  166 => 138,  163 => 137,  161 => 136,  32 => 10,  21 => 1,);
    }
}
