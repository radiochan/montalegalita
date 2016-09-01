<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/channel/default.htm */
class __TwigTemplate_a51202dd2f796a5dcfa65df9df1996f2024427504509fd052b6180a1b01700ad extends Twig_Template
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
        echo "<div class=\"rainlab-forum\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::title")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::topics")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["topics"]) ? $context["topics"] : null)) {
            // line 7
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::pagination")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/channel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="rainlab-forum">*/
/*     {% partial __SELF__ ~ "::title" %}*/
/* */
/*     {% partial __SELF__ ~ "::topics" %}*/
/* */
/*     {% if topics %}*/
/*         {% partial __SELF__ ~ "::pagination" %}*/
/*     {% endif %}*/
/* </div>*/
