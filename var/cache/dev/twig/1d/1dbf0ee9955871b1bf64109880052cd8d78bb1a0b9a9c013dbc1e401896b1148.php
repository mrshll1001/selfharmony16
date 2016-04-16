<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63aecf28f1701e596d55f85527cf844376b705e0d6df30950cc0e862ee830844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_393a5276e96353bf7534580e8c4dd3cc30990d013fd675de0540ec64b798ccc7 = $this->env->getExtension("native_profiler");
        $__internal_393a5276e96353bf7534580e8c4dd3cc30990d013fd675de0540ec64b798ccc7->enter($__internal_393a5276e96353bf7534580e8c4dd3cc30990d013fd675de0540ec64b798ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393a5276e96353bf7534580e8c4dd3cc30990d013fd675de0540ec64b798ccc7->leave($__internal_393a5276e96353bf7534580e8c4dd3cc30990d013fd675de0540ec64b798ccc7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbea00148a27d207028bee5a3caea565dd8a641a8c4412bce6da5d6e6f4b8a88 = $this->env->getExtension("native_profiler");
        $__internal_fbea00148a27d207028bee5a3caea565dd8a641a8c4412bce6da5d6e6f4b8a88->enter($__internal_fbea00148a27d207028bee5a3caea565dd8a641a8c4412bce6da5d6e6f4b8a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbea00148a27d207028bee5a3caea565dd8a641a8c4412bce6da5d6e6f4b8a88->leave($__internal_fbea00148a27d207028bee5a3caea565dd8a641a8c4412bce6da5d6e6f4b8a88_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99c17ebcad7575ab5c97890f5bdc4f984e3afe1f7bccab239729d9fe36e13335 = $this->env->getExtension("native_profiler");
        $__internal_99c17ebcad7575ab5c97890f5bdc4f984e3afe1f7bccab239729d9fe36e13335->enter($__internal_99c17ebcad7575ab5c97890f5bdc4f984e3afe1f7bccab239729d9fe36e13335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_99c17ebcad7575ab5c97890f5bdc4f984e3afe1f7bccab239729d9fe36e13335->leave($__internal_99c17ebcad7575ab5c97890f5bdc4f984e3afe1f7bccab239729d9fe36e13335_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfaf7be58aa2535e1333e6a0b26f7f49a33bbe3b382780ff8d2efca5ba868f8c = $this->env->getExtension("native_profiler");
        $__internal_cfaf7be58aa2535e1333e6a0b26f7f49a33bbe3b382780ff8d2efca5ba868f8c->enter($__internal_cfaf7be58aa2535e1333e6a0b26f7f49a33bbe3b382780ff8d2efca5ba868f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cfaf7be58aa2535e1333e6a0b26f7f49a33bbe3b382780ff8d2efca5ba868f8c->leave($__internal_cfaf7be58aa2535e1333e6a0b26f7f49a33bbe3b382780ff8d2efca5ba868f8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
