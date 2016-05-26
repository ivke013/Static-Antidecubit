<?php

/* about_us.twig */
class __TwigTemplate_ff5b632ef87f5098af92c41f5c8411a8d8a8887f9557892711f03618ecf488b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/base.twig", "about_us.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo gettext("About us");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>About us</h1>

";
    }

    public function getTemplateName()
    {
        return "about_us.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layouts/base.twig' %}*/
/* */
/* {% block page_title %}*/
/*     {% trans %} About us{% endtrans %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>About us</h1>*/
/* */
/* {% endblock %}*/
