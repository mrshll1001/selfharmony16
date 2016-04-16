<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_05f2960ab52d192cb7125b1855eb8f2fbd1e7ef7b716c0620450bd4d3c0a7de6 extends Twig_Template
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
        $__internal_aea9ca20d2ebf7f026b44e6399ffc9ac06f32d8dfa54c0a663cb1c77b2b5e41a = $this->env->getExtension("native_profiler");
        $__internal_aea9ca20d2ebf7f026b44e6399ffc9ac06f32d8dfa54c0a663cb1c77b2b5e41a->enter($__internal_aea9ca20d2ebf7f026b44e6399ffc9ac06f32d8dfa54c0a663cb1c77b2b5e41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea9ca20d2ebf7f026b44e6399ffc9ac06f32d8dfa54c0a663cb1c77b2b5e41a->leave($__internal_aea9ca20d2ebf7f026b44e6399ffc9ac06f32d8dfa54c0a663cb1c77b2b5e41a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f01921bce637633de5a5a57d6395d165b011192f71862c26c741e7c14898ed10 = $this->env->getExtension("native_profiler");
        $__internal_f01921bce637633de5a5a57d6395d165b011192f71862c26c741e7c14898ed10->enter($__internal_f01921bce637633de5a5a57d6395d165b011192f71862c26c741e7c14898ed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f01921bce637633de5a5a57d6395d165b011192f71862c26c741e7c14898ed10->leave($__internal_f01921bce637633de5a5a57d6395d165b011192f71862c26c741e7c14898ed10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1e7beafd0aec3dacc40dca09db244a211aa8fc64eff8331c03c1c5cb11c7924 = $this->env->getExtension("native_profiler");
        $__internal_c1e7beafd0aec3dacc40dca09db244a211aa8fc64eff8331c03c1c5cb11c7924->enter($__internal_c1e7beafd0aec3dacc40dca09db244a211aa8fc64eff8331c03c1c5cb11c7924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1e7beafd0aec3dacc40dca09db244a211aa8fc64eff8331c03c1c5cb11c7924->leave($__internal_c1e7beafd0aec3dacc40dca09db244a211aa8fc64eff8331c03c1c5cb11c7924_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10928097beac7f9e0c60e7bb4fc37b42cd991f1dfa54ad287d451225c38e9197 = $this->env->getExtension("native_profiler");
        $__internal_10928097beac7f9e0c60e7bb4fc37b42cd991f1dfa54ad287d451225c38e9197->enter($__internal_10928097beac7f9e0c60e7bb4fc37b42cd991f1dfa54ad287d451225c38e9197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10928097beac7f9e0c60e7bb4fc37b42cd991f1dfa54ad287d451225c38e9197->leave($__internal_10928097beac7f9e0c60e7bb4fc37b42cd991f1dfa54ad287d451225c38e9197_prof);

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
