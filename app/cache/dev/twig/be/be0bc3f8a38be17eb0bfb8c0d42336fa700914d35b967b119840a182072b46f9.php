<?php

/* base.html.twig */
class __TwigTemplate_86e02c4d3901470d313f83777b08694d4d6424503a9ed0b9bd5fc17215816722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7df1089c87add6aab55edbe4d364094748dbee842a3a8b812b0949823b12298 = $this->env->getExtension("native_profiler");
        $__internal_c7df1089c87add6aab55edbe4d364094748dbee842a3a8b812b0949823b12298->enter($__internal_c7df1089c87add6aab55edbe4d364094748dbee842a3a8b812b0949823b12298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c7df1089c87add6aab55edbe4d364094748dbee842a3a8b812b0949823b12298->leave($__internal_c7df1089c87add6aab55edbe4d364094748dbee842a3a8b812b0949823b12298_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed537bcd82d17386d6bb15ea246f059fec1f1cf1a1be0a21e64f2047284a401b = $this->env->getExtension("native_profiler");
        $__internal_ed537bcd82d17386d6bb15ea246f059fec1f1cf1a1be0a21e64f2047284a401b->enter($__internal_ed537bcd82d17386d6bb15ea246f059fec1f1cf1a1be0a21e64f2047284a401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed537bcd82d17386d6bb15ea246f059fec1f1cf1a1be0a21e64f2047284a401b->leave($__internal_ed537bcd82d17386d6bb15ea246f059fec1f1cf1a1be0a21e64f2047284a401b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c15011bd419e74609fd1b59a02766be3906139b1a9b28dd85abc5051893d3a7 = $this->env->getExtension("native_profiler");
        $__internal_5c15011bd419e74609fd1b59a02766be3906139b1a9b28dd85abc5051893d3a7->enter($__internal_5c15011bd419e74609fd1b59a02766be3906139b1a9b28dd85abc5051893d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c15011bd419e74609fd1b59a02766be3906139b1a9b28dd85abc5051893d3a7->leave($__internal_5c15011bd419e74609fd1b59a02766be3906139b1a9b28dd85abc5051893d3a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c61a4c8047671bdc647abd31a4b3f3a3eb7fce8b9b693e8c2c18c029cd843d51 = $this->env->getExtension("native_profiler");
        $__internal_c61a4c8047671bdc647abd31a4b3f3a3eb7fce8b9b693e8c2c18c029cd843d51->enter($__internal_c61a4c8047671bdc647abd31a4b3f3a3eb7fce8b9b693e8c2c18c029cd843d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c61a4c8047671bdc647abd31a4b3f3a3eb7fce8b9b693e8c2c18c029cd843d51->leave($__internal_c61a4c8047671bdc647abd31a4b3f3a3eb7fce8b9b693e8c2c18c029cd843d51_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20a3a40d730dbe936ed3935699e8049373bdaf982ee1e02bd129d60efc09d1ea = $this->env->getExtension("native_profiler");
        $__internal_20a3a40d730dbe936ed3935699e8049373bdaf982ee1e02bd129d60efc09d1ea->enter($__internal_20a3a40d730dbe936ed3935699e8049373bdaf982ee1e02bd129d60efc09d1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20a3a40d730dbe936ed3935699e8049373bdaf982ee1e02bd129d60efc09d1ea->leave($__internal_20a3a40d730dbe936ed3935699e8049373bdaf982ee1e02bd129d60efc09d1ea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
