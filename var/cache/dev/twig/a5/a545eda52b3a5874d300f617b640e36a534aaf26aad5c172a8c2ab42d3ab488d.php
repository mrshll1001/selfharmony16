<?php

/* AppBundle:default:base.html.twig */
class __TwigTemplate_b0828d557104f5f2eca2c86ba850a6e423e2987753e90da13e69e105954d6884 extends Twig_Template
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
        $__internal_92155c35750eda358469600107bd99e56b346e99b6a49b5bfbcd30cefa5392e4 = $this->env->getExtension("native_profiler");
        $__internal_92155c35750eda358469600107bd99e56b346e99b6a49b5bfbcd30cefa5392e4->enter($__internal_92155c35750eda358469600107bd99e56b346e99b6a49b5bfbcd30cefa5392e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
  <title>My Story :: Self Harmony</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>

   <!-- Compiled and minified CSS -->
   <link href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/journal/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-r/qnS4YZBLuBSKeVc+sM4eUYUiJMFhkHfx1nwlErHhTd+NgeJlN/NiiTd6jbKJzm\" crossorigin=\"anonymous\">

   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
</head>
<body>

\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>


  </body>
</html>";
        
        $__internal_92155c35750eda358469600107bd99e56b346e99b6a49b5bfbcd30cefa5392e4->leave($__internal_92155c35750eda358469600107bd99e56b346e99b6a49b5bfbcd30cefa5392e4_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_4106fc88245ece6454b06f74a1704d6344e924c22d13731cf09c42e7188c74bf = $this->env->getExtension("native_profiler");
        $__internal_4106fc88245ece6454b06f74a1704d6344e924c22d13731cf09c42e7188c74bf->enter($__internal_4106fc88245ece6454b06f74a1704d6344e924c22d13731cf09c42e7188c74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
\t";
        
        $__internal_4106fc88245ece6454b06f74a1704d6344e924c22d13731cf09c42e7188c74bf->leave($__internal_4106fc88245ece6454b06f74a1704d6344e924c22d13731cf09c42e7188c74bf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 19,  48 => 22,  46 => 19,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>*/
/*   <title>My Story :: Self Harmony</title>*/
/* */
/*   <!-- CSS  -->*/
/*   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*   <link href="{{asset('/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>*/
/* */
/*    <!-- Compiled and minified CSS -->*/
/*    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-r/qnS4YZBLuBSKeVc+sM4eUYUiJMFhkHfx1nwlErHhTd+NgeJlN/NiiTd6jbKJzm" crossorigin="anonymous">*/
/* */
/*    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* </head>*/
/* <body>*/
/* */
/* 	{% block content %}*/
/* */
/* 	{% endblock content %}*/
/* */
/*   <!--  Scripts-->*/
/*   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* */
/* */
/*   </body>*/
/* </html>*/
