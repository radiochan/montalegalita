<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/channel/pagination.htm */
class __TwigTemplate_17191e9c93e4e38fad6cb1e592ca17d6e655e571e61ce4d35ae9efcb6524366e extends Twig_Template
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
(isset($context["topics"]) ? $context["topics"] : null), "currentPage", array()) > 1) || ($this->getAttribute(        // line 3
(isset($context["topics"]) ? $context["topics"] : null), "lastPage", array()) > 1)) || ($this->getAttribute(        // line 4
(isset($context["topics"]) ? $context["topics"] : null), "lastPage", array()) > $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "currentPage", array())));
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
        $context['__cms_partial_params']['records'] = (isset($context["topics"]) ? $context["topics"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::pagination-list")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/channel/pagination.htm";
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
/* 	topics.currentPage > 1 or*/
/* 	topics.lastPage > 1 or*/
/* 	topics.lastPage > topics.currentPage*/
/* %}*/
/* */
/* <div class="row forum-pagination {{ paginationEnabled ? "enabled" : "disabled" }}">*/
/*     <div class="col-md-8">*/
/*         {% partial __SELF__ ~ "::pagination-list" records=topics %}*/
/*     </div>*/
/*     <div class="col-md-4 text-right posts-total-summary">*/
/*         <p>{{ topics.firstItem }}-{{ topics.lastItem }} of {{ topics.total }}</p>*/
/*     </div>*/
/* </div>*/
/* */
