<?php

/* C:\laragon\www\legalita/plugins/rainlab/user/components/resetpassword/default.htm */
class __TwigTemplate_ec089ef26910da73eab436f3d43f52d523417fe63ca3d8d98cf6dde5ae7668c4 extends Twig_Template
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
        echo "<div id=\"partialUserResetForm\">
    ";
        // line 2
        if (($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "code", array()) == null)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::restore")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::reset")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/user/components/resetpassword/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="partialUserResetForm">*/
/*     {% if __SELF__.code == null %}*/
/*         {% partial __SELF__ ~ '::restore' %}*/
/*     {% else %}*/
/*         {% partial __SELF__ ~ '::reset' %}*/
/*     {% endif %}*/
/* </div>*/
