<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a6f6b37728f712b8f062ab2266309569dac18828dad93675d95b052e5ac4222f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430a86f829c83140ef1134b39fb4b77bdf89a32531773cbaf1c0bc4949143054 = $this->env->getExtension("native_profiler");
        $__internal_430a86f829c83140ef1134b39fb4b77bdf89a32531773cbaf1c0bc4949143054->enter($__internal_430a86f829c83140ef1134b39fb4b77bdf89a32531773cbaf1c0bc4949143054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430a86f829c83140ef1134b39fb4b77bdf89a32531773cbaf1c0bc4949143054->leave($__internal_430a86f829c83140ef1134b39fb4b77bdf89a32531773cbaf1c0bc4949143054_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a889da7cf1cffc620ff6db731273d03e8683504160e795c7b332585675a59c64 = $this->env->getExtension("native_profiler");
        $__internal_a889da7cf1cffc620ff6db731273d03e8683504160e795c7b332585675a59c64->enter($__internal_a889da7cf1cffc620ff6db731273d03e8683504160e795c7b332585675a59c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a889da7cf1cffc620ff6db731273d03e8683504160e795c7b332585675a59c64->leave($__internal_a889da7cf1cffc620ff6db731273d03e8683504160e795c7b332585675a59c64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d8b9d4124e4ef7ca7c543b2eaca45609827de57dafc8e0dc616fcca8c23b3c6 = $this->env->getExtension("native_profiler");
        $__internal_5d8b9d4124e4ef7ca7c543b2eaca45609827de57dafc8e0dc616fcca8c23b3c6->enter($__internal_5d8b9d4124e4ef7ca7c543b2eaca45609827de57dafc8e0dc616fcca8c23b3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d8b9d4124e4ef7ca7c543b2eaca45609827de57dafc8e0dc616fcca8c23b3c6->leave($__internal_5d8b9d4124e4ef7ca7c543b2eaca45609827de57dafc8e0dc616fcca8c23b3c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51ad2c6e4ff667ac8a014488a14d6f8a61b5bb3134b111d21f6b1b97e216c1a5 = $this->env->getExtension("native_profiler");
        $__internal_51ad2c6e4ff667ac8a014488a14d6f8a61b5bb3134b111d21f6b1b97e216c1a5->enter($__internal_51ad2c6e4ff667ac8a014488a14d6f8a61b5bb3134b111d21f6b1b97e216c1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51ad2c6e4ff667ac8a014488a14d6f8a61b5bb3134b111d21f6b1b97e216c1a5->leave($__internal_51ad2c6e4ff667ac8a014488a14d6f8a61b5bb3134b111d21f6b1b97e216c1a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
