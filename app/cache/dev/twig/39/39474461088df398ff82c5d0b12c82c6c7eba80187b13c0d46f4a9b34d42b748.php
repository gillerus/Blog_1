<?php

/* default/index.html.twig */
class __TwigTemplate_1a1f1f31f3ce566adab13b1f04888b46527e228fd3345ab1bd999af1f1289b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b70f237c7612e0fe6e0bb7a6270ae6a15088c75923a445a11b05bf63943a2451 = $this->env->getExtension("native_profiler");
        $__internal_b70f237c7612e0fe6e0bb7a6270ae6a15088c75923a445a11b05bf63943a2451->enter($__internal_b70f237c7612e0fe6e0bb7a6270ae6a15088c75923a445a11b05bf63943a2451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70f237c7612e0fe6e0bb7a6270ae6a15088c75923a445a11b05bf63943a2451->leave($__internal_b70f237c7612e0fe6e0bb7a6270ae6a15088c75923a445a11b05bf63943a2451_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdf55632a2114e78fd1d2e1f2c103747a408604c3d3785e1b91445f4870815dc = $this->env->getExtension("native_profiler");
        $__internal_bdf55632a2114e78fd1d2e1f2c103747a408604c3d3785e1b91445f4870815dc->enter($__internal_bdf55632a2114e78fd1d2e1f2c103747a408604c3d3785e1b91445f4870815dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <div>
            <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lead", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
         
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bdf55632a2114e78fd1d2e1f2c103747a408604c3d3785e1b91445f4870815dc->leave($__internal_bdf55632a2114e78fd1d2e1f2c103747a408604c3d3785e1b91445f4870815dc_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 9,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Blog</h1>*/
/*     */
/*     {% for post in posts %}*/
/*         <div>*/
/*             <h2>{{post.title}}</h2>*/
/*             <p>{{post.lead}}</p>*/
/*             <p>{{post.content}}</p>*/
/*          */
/*         </div>*/
/*     {%endfor%}*/
/* {% endblock %}*/
/* */
