<?php

/* RoSiteBundle:Default:contact.html.twig */
class __TwigTemplate_4e05782852af6b9deb4e8e0b9f7a843a41ed35cdfb732d244b9464dc3622b076 extends Twig_Template
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
        ";
        // line 6
        echo "                   
    </div>     
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<section class=\"map_carte\" id=\"map_carte\" style=\"height : 350px;\"></section>
<section class=\"about\" style=\"background : rgb(25,125,120)\">
\t
</section>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\">
    var lat = 48.8430294; 
    var long = 2.2533622;
    window.onload = initialiser();
    function initialiser() {


        var latlng = new google.maps.LatLng(lat,long);
        //objet contenant des propri?s avec des identificateurs pr?finis dans Google Maps permettant
        //de d?nir des options d'affichage de notre carte
        var options = {
            center: latlng,
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };

            //constructeur de la carte qui prend en param?e le conteneur HTML
            //dans lequel la carte doit s'afficher et les options
        var carte = new google.maps.Map(document.getElementById(\"map_carte\"), options);
    \tcarte.setTilt(45);
        var mark = new google.maps.Marker({
                position: new google.maps.LatLng(lat,long), 
                //position:(marqueurs[i].latitude, marqueurs[i].longitude),
                map: carte,
                title: \":)\"
        });\t
        google.maps.event.addDomListener(window, 'load', initialiser);

    }
</script>
";
    }

    public function getTemplateName()
    {
        return "RoSiteBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
