<?php

/* layouts/base.twig */
class __TwigTemplate_30079dc1ec22a338ff4b7ba4eee8d241ce4c220db430d598ca75a6a4b1ebfa60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('page_title', $context, $blocks);
        echo "-Antidekubit</title>

    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 15
        echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.min.js\"></script>
    <script src=\"assets/js/respond.min.js></script>
    <![endif]-->
</head>
<body class=\"background-clouds\">

<!-- Navbar -->
<nav class=\"navbar navbar-blue navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Antidekubit</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"/\">Početna</a></li>
                <li><a href=\"/\">Proizvodi</a></li>
                <li><a href=\"/\">Cenovnik</a></li>
                <li><a href=\"/\">Dostava</a></li>
                <li><a href=\"/\">Online kupovina</a></li>
                <li><a href=\"/\">Uputstvo</a></li>
                <li><a href=\"/\">Galerija</a></li>
                <li><a href=\"/\">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id=\"content-wrapper\">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>

 ";
        // line 55
        $this->displayBlock('script', $context, $blocks);
        // line 62
        echo "

</body>
</html>";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 10
        echo "        <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/swiper.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_script($context, array $blocks = array())
    {
        // line 56
        echo "    <!-- Scripts -->
    <script src=\"assets/js/jquery-2.1.3.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/swiper.jquery.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 56,  113 => 55,  108 => 52,  100 => 10,  97 => 9,  92 => 7,  85 => 62,  83 => 55,  79 => 53,  77 => 52,  38 => 15,  36 => 9,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block page_title %}{% endblock %}-Antidekubit</title>*/
/* */
/*     {% block stylesheet %}*/
/*         <link href="assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="assets/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href="assets/css/swiper.min.css" rel="stylesheet">*/
/*         <link href="assets/css/style.css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="assets/js/html5shiv.min.js"></script>*/
/*     <script src="assets/js/respond.min.js></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="background-clouds">*/
/* */
/* <!-- Navbar -->*/
/* <nav class="navbar navbar-blue navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Antidekubit</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="/">Početna</a></li>*/
/*                 <li><a href="/">Proizvodi</a></li>*/
/*                 <li><a href="/">Cenovnik</a></li>*/
/*                 <li><a href="/">Dostava</a></li>*/
/*                 <li><a href="/">Online kupovina</a></li>*/
/*                 <li><a href="/">Uputstvo</a></li>*/
/*                 <li><a href="/">Galerija</a></li>*/
/*                 <li><a href="/">Kontakt</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div id="content-wrapper">*/
/*     {% block content %}{% endblock %}*/
/* </div>*/
/* */
/*  {% block script %}*/
/*     <!-- Scripts -->*/
/*     <script src="assets/js/jquery-2.1.3.min.js"></script>*/
/*     <script src="assets/js/bootstrap.min.js"></script>*/
/*     <script src="assets/js/swiper.jquery.min.js"></script>*/
/*     <script src="assets/js/main.js"></script>*/
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
