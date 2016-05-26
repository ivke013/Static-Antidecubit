<?php

/* home.twig */
class __TwigTemplate_8e5baaec2ac274e3f1716ef7d1b7d032fd31e08e2bb4b4308e4d5678c67c0ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/base.twig", "home.twig", 1);
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
        echo "Početna";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <!-- Slider main container -->
    <div class=\"swiper-container\">
        <!-- Additional required wrapper -->
        <div class=\"swiper-wrapper\">
            <!-- Slides -->
            <div class=\"swiper-slide\">Slide 1</div>
            <div class=\"swiper-slide\">Slide 2</div>
            <div class=\"swiper-slide\">Slide 3</div>
            ...
        </div>

        <!-- If we need navigation buttons -->
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>

        <!-- If we need scrollbar -->
        <div class=\"swiper-scrollbar\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layouts/base.twig' %}*/
/* */
/* {% block page_title %}Početna{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <!-- Slider main container -->*/
/*     <div class="swiper-container">*/
/*         <!-- Additional required wrapper -->*/
/*         <div class="swiper-wrapper">*/
/*             <!-- Slides -->*/
/*             <div class="swiper-slide">Slide 1</div>*/
/*             <div class="swiper-slide">Slide 2</div>*/
/*             <div class="swiper-slide">Slide 3</div>*/
/*             ...*/
/*         </div>*/
/* */
/*         <!-- If we need navigation buttons -->*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/* */
/*         <!-- If we need scrollbar -->*/
/*         <div class="swiper-scrollbar"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
