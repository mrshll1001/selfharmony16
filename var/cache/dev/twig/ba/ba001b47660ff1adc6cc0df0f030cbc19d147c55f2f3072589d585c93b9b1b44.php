<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_b4607febf6cf9e55b2c94d86c5df8ad5ea8404d5c27c70de3cc3bef805267592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:default:base.html.twig", "AppBundle:default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fe09f565801a0e7cd368d407790abcef6aeea137626be07ba346212158d11f7 = $this->env->getExtension("native_profiler");
        $__internal_5fe09f565801a0e7cd368d407790abcef6aeea137626be07ba346212158d11f7->enter($__internal_5fe09f565801a0e7cd368d407790abcef6aeea137626be07ba346212158d11f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fe09f565801a0e7cd368d407790abcef6aeea137626be07ba346212158d11f7->leave($__internal_5fe09f565801a0e7cd368d407790abcef6aeea137626be07ba346212158d11f7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'AppBundle:default:base.html.twig' %}*/
/* */
