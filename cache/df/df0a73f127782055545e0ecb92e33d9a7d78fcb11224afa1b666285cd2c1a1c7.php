<?php

/* layouts/base.twig */
class __TwigTemplate_c1cd51be7787a9814c9e8bd0da0d0dda518dc198bab281d0c6e412243cd75a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo "-Decubit</title>

    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 14
        echo "
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.min.js\"></script>
    <script src=\"assets/js/respond.min.js></script>
    <![endif]-->
</head>
<body class=\"background-clouds\">

    <div class=\"content\">";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

    <footer>";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>

";
        // line 28
        $this->displayBlock('script', $context, $blocks);
        // line 34
        echo "</body>
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
        <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 28
    public function block_script($context, array $blocks = array())
    {
        // line 29
        echo "    <!-- Scripts -->
    <script src=\"assets/js/jquery-2.1.3.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  94 => 28,  88 => 26,  83 => 24,  76 => 10,  73 => 9,  68 => 7,  63 => 34,  61 => 28,  56 => 26,  51 => 24,  39 => 14,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block page_title %}{% endblock %}-Decubit</title>*/
/* */
/*     {% block stylesheet %}*/
/*         <link href="assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="assets/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href="assets/css/style.css" rel="stylesheet">*/
/*     {% endblock %}*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="assets/js/html5shiv.min.js"></script>*/
/*     <script src="assets/js/respond.min.js></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="background-clouds">*/
/* */
/*     <div class="content">{% block content %}{% endblock %}</div>*/
/* */
/*     <footer>{% block footer %} {% endblock %}</footer>*/
/* */
/* {% block script %}*/
/*     <!-- Scripts -->*/
/*     <script src="assets/js/jquery-2.1.3.min.js"></script>*/
/*     <script src="assets/js/bootstrap.min.js"></script>*/
/*     <script src="assets/js/main.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
