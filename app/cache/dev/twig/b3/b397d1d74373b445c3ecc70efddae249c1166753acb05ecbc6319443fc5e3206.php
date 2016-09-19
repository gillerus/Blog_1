<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1d856887b671ba68c0851adfb94465732349ccbc2027e7e11d610e8a895b27bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c9fe783efa806016a9ec6217f5252b25f4d47ed7fd164b9a78871419b5cba23 = $this->env->getExtension("native_profiler");
        $__internal_3c9fe783efa806016a9ec6217f5252b25f4d47ed7fd164b9a78871419b5cba23->enter($__internal_3c9fe783efa806016a9ec6217f5252b25f4d47ed7fd164b9a78871419b5cba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9fe783efa806016a9ec6217f5252b25f4d47ed7fd164b9a78871419b5cba23->leave($__internal_3c9fe783efa806016a9ec6217f5252b25f4d47ed7fd164b9a78871419b5cba23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccdfc4a4933f2a561e663c0fe9f10f44b05ca20117cb2809773f7e15a41c6b49 = $this->env->getExtension("native_profiler");
        $__internal_ccdfc4a4933f2a561e663c0fe9f10f44b05ca20117cb2809773f7e15a41c6b49->enter($__internal_ccdfc4a4933f2a561e663c0fe9f10f44b05ca20117cb2809773f7e15a41c6b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ccdfc4a4933f2a561e663c0fe9f10f44b05ca20117cb2809773f7e15a41c6b49->leave($__internal_ccdfc4a4933f2a561e663c0fe9f10f44b05ca20117cb2809773f7e15a41c6b49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_185ae3ab7877d01517e3134007c018f88698e516a54b5994e8bdd84e6a599a96 = $this->env->getExtension("native_profiler");
        $__internal_185ae3ab7877d01517e3134007c018f88698e516a54b5994e8bdd84e6a599a96->enter($__internal_185ae3ab7877d01517e3134007c018f88698e516a54b5994e8bdd84e6a599a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_185ae3ab7877d01517e3134007c018f88698e516a54b5994e8bdd84e6a599a96->leave($__internal_185ae3ab7877d01517e3134007c018f88698e516a54b5994e8bdd84e6a599a96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fab278611b3c053476924842c29439ef78976b8b79d8dc520e98a8f7a2d06a6e = $this->env->getExtension("native_profiler");
        $__internal_fab278611b3c053476924842c29439ef78976b8b79d8dc520e98a8f7a2d06a6e->enter($__internal_fab278611b3c053476924842c29439ef78976b8b79d8dc520e98a8f7a2d06a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fab278611b3c053476924842c29439ef78976b8b79d8dc520e98a8f7a2d06a6e->leave($__internal_fab278611b3c053476924842c29439ef78976b8b79d8dc520e98a8f7a2d06a6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
