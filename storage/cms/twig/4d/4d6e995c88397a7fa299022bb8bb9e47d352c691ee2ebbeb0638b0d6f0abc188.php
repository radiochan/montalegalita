<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/topic/pagination.htm */
class __TwigTemplate_be33f97c898f8fd63c13bd6286f4610ed8bcee5d5efd86edf84b42d82b5d3a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["paginationEnabled"] = ((($this->getAttribute(        // line 2
(isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1) || ($this->getAttribute(        // line 3
(isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) || ($this->getAttribute(        // line 4
(isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array())));
        // line 6
        echo "
<div class=\"row forum-pagination ";
        // line 7
        echo (((isset($context["paginationEnabled"]) ? $context["paginationEnabled"] : null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = (isset($context["posts"]) ? $context["posts"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::pagination-list")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/topic/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 10,  32 => 9,  27 => 7,  24 => 6,  22 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }
}
/* {% set paginationEnabled =*/
/* 	posts.currentPage > 1 or*/
/* 	posts.lastPage > 1 or*/
/* 	posts.lastPage > posts.currentPage*/
/* %}*/
/* */
/* <div class="row forum-pagination {{ paginationEnabled ? "enabled" : "disabled" }}">*/
/*     <div class="col-md-8">*/
/*         {% partial __SELF__ ~ "::pagination-list" records=posts %}*/
/*     </div>*/
/*     <div class="col-md-4 text-right posts-total-summary">*/
/*         <p>{{ posts.firstItem }}-{{ posts.lastItem }} of {{ posts.total }}</p>*/
/*     </div>*/
/* </div>*/
/* */
