<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_c99e0c494a8c514b639f579695249ecec68cf9a40b5059f65ac564f17e6a240e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd02663da5834d2b3a650565f03f40ada3fc5ad98a63367965dc15b6ea67c67a = $this->env->getExtension("native_profiler");
        $__internal_bd02663da5834d2b3a650565f03f40ada3fc5ad98a63367965dc15b6ea67c67a->enter($__internal_bd02663da5834d2b3a650565f03f40ada3fc5ad98a63367965dc15b6ea67c67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
\t";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_site_1.js");
            // line 10
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 12
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c8c367_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367_part_1_site_1.css");
            // line 13
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367.css");
            echo "    \t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_bd02663da5834d2b3a650565f03f40ada3fc5ad98a63367965dc15b6ea67c67a->leave($__internal_bd02663da5834d2b3a650565f03f40ada3fc5ad98a63367965dc15b6ea67c67a_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_23fd83373f20791f93bd8c5d25a43a4e7ae0905eb7881e9c28c140df1778ad37 = $this->env->getExtension("native_profiler");
        $__internal_23fd83373f20791f93bd8c5d25a43a4e7ae0905eb7881e9c28c140df1778ad37->enter($__internal_23fd83373f20791f93bd8c5d25a43a4e7ae0905eb7881e9c28c140df1778ad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_23fd83373f20791f93bd8c5d25a43a4e7ae0905eb7881e9c28c140df1778ad37->leave($__internal_23fd83373f20791f93bd8c5d25a43a4e7ae0905eb7881e9c28c140df1778ad37_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_12f3376275f7798a990d81b44abc0a3d64bad614b02b7c9dfb69e5d08d55ab8e = $this->env->getExtension("native_profiler");
        $__internal_12f3376275f7798a990d81b44abc0a3d64bad614b02b7c9dfb69e5d08d55ab8e->enter($__internal_12f3376275f7798a990d81b44abc0a3d64bad614b02b7c9dfb69e5d08d55ab8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12f3376275f7798a990d81b44abc0a3d64bad614b02b7c9dfb69e5d08d55ab8e->leave($__internal_12f3376275f7798a990d81b44abc0a3d64bad614b02b7c9dfb69e5d08d55ab8e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0f9da44cd662aead1b0249c42df6d41587a18f965d85de1b5efd893420f11d6 = $this->env->getExtension("native_profiler");
        $__internal_e0f9da44cd662aead1b0249c42df6d41587a18f965d85de1b5efd893420f11d6->enter($__internal_e0f9da44cd662aead1b0249c42df6d41587a18f965d85de1b5efd893420f11d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0f9da44cd662aead1b0249c42df6d41587a18f965d85de1b5efd893420f11d6->leave($__internal_e0f9da44cd662aead1b0249c42df6d41587a18f965d85de1b5efd893420f11d6_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6e7efcb9195cde143c73625ddac3d46a15bd1f152b325c77393030346b765cd = $this->env->getExtension("native_profiler");
        $__internal_b6e7efcb9195cde143c73625ddac3d46a15bd1f152b325c77393030346b765cd->enter($__internal_b6e7efcb9195cde143c73625ddac3d46a15bd1f152b325c77393030346b765cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6e7efcb9195cde143c73625ddac3d46a15bd1f152b325c77393030346b765cd->leave($__internal_b6e7efcb9195cde143c73625ddac3d46a15bd1f152b325c77393030346b765cd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 21,  124 => 20,  113 => 19,  101 => 15,  92 => 22,  89 => 21,  86 => 20,  84 => 19,  78 => 16,  73 => 15,  59 => 13,  54 => 12,  40 => 10,  36 => 9,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/*     		<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* 	{% stylesheets 'bundles/app/css/*' filter='cssrewrite' %}*/
/*     		<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* 	{% block stylesheets  %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
