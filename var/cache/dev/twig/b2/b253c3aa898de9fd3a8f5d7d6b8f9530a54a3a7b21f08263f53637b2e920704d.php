<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_56048faa0ac7983a6bdbd9064d557ad95cc0fdf427c3c7695f398eeaaafdefcb extends Twig_Template
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
        $__internal_266a0745cdc817b03c5a59e053efb252f24bfcb71c7d9b4bbfc1ee3e843b583e = $this->env->getExtension("native_profiler");
        $__internal_266a0745cdc817b03c5a59e053efb252f24bfcb71c7d9b4bbfc1ee3e843b583e->enter($__internal_266a0745cdc817b03c5a59e053efb252f24bfcb71c7d9b4bbfc1ee3e843b583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266a0745cdc817b03c5a59e053efb252f24bfcb71c7d9b4bbfc1ee3e843b583e->leave($__internal_266a0745cdc817b03c5a59e053efb252f24bfcb71c7d9b4bbfc1ee3e843b583e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a272e324e759a8c414f96c5cbf08004e7f89bd8b8cd34f6df2ea8585235fbd9 = $this->env->getExtension("native_profiler");
        $__internal_4a272e324e759a8c414f96c5cbf08004e7f89bd8b8cd34f6df2ea8585235fbd9->enter($__internal_4a272e324e759a8c414f96c5cbf08004e7f89bd8b8cd34f6df2ea8585235fbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a272e324e759a8c414f96c5cbf08004e7f89bd8b8cd34f6df2ea8585235fbd9->leave($__internal_4a272e324e759a8c414f96c5cbf08004e7f89bd8b8cd34f6df2ea8585235fbd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42403bcc02b5ed0159c8f00c57af0d9d7e680380069af0ea45e84fb8f4f547c8 = $this->env->getExtension("native_profiler");
        $__internal_42403bcc02b5ed0159c8f00c57af0d9d7e680380069af0ea45e84fb8f4f547c8->enter($__internal_42403bcc02b5ed0159c8f00c57af0d9d7e680380069af0ea45e84fb8f4f547c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42403bcc02b5ed0159c8f00c57af0d9d7e680380069af0ea45e84fb8f4f547c8->leave($__internal_42403bcc02b5ed0159c8f00c57af0d9d7e680380069af0ea45e84fb8f4f547c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5981963c41afa0d9780b3c9b794d0b24ac7c88b3ef587908c05ff9b8a895f80 = $this->env->getExtension("native_profiler");
        $__internal_a5981963c41afa0d9780b3c9b794d0b24ac7c88b3ef587908c05ff9b8a895f80->enter($__internal_a5981963c41afa0d9780b3c9b794d0b24ac7c88b3ef587908c05ff9b8a895f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a5981963c41afa0d9780b3c9b794d0b24ac7c88b3ef587908c05ff9b8a895f80->leave($__internal_a5981963c41afa0d9780b3c9b794d0b24ac7c88b3ef587908c05ff9b8a895f80_prof);

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
