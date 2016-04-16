<?php

/* AppBundle:default:base.html.twig */
class __TwigTemplate_b00c8a55a9629fd0bd871a712c9af4a22254ff2196654f13d32c00fa031a227c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dcad52ad510b02b315b70bdb03cb7ba60666b2b9b1bf1787cdb67f4bab3a1a5 = $this->env->getExtension("native_profiler");
        $__internal_2dcad52ad510b02b315b70bdb03cb7ba60666b2b9b1bf1787cdb67f4bab3a1a5->enter($__internal_2dcad52ad510b02b315b70bdb03cb7ba60666b2b9b1bf1787cdb67f4bab3a1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title> My Story :: Self Harmony</title>
  </head>
  <body>
    ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "  </body>
</html>
";
        
        $__internal_2dcad52ad510b02b315b70bdb03cb7ba60666b2b9b1bf1787cdb67f4bab3a1a5->leave($__internal_2dcad52ad510b02b315b70bdb03cb7ba60666b2b9b1bf1787cdb67f4bab3a1a5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4bf85499b367a9e1ce7f2b24625aeef006b0fdece9eaa6937bca67c4468fedf4 = $this->env->getExtension("native_profiler");
        $__internal_4bf85499b367a9e1ce7f2b24625aeef006b0fdece9eaa6937bca67c4468fedf4->enter($__internal_4bf85499b367a9e1ce7f2b24625aeef006b0fdece9eaa6937bca67c4468fedf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>If you can see this I've not done my job</h1>
    ";
        
        $__internal_4bf85499b367a9e1ce7f2b24625aeef006b0fdece9eaa6937bca67c4468fedf4->leave($__internal_4bf85499b367a9e1ce7f2b24625aeef006b0fdece9eaa6937bca67c4468fedf4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 8,  34 => 11,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title> My Story :: Self Harmony</title>*/
/*   </head>*/
/*   <body>*/
/*     {% block content %}*/
/*     <h1>If you can see this I've not done my job</h1>*/
/*     {% endblock content %}*/
/*   </body>*/
/* </html>*/
/* */
