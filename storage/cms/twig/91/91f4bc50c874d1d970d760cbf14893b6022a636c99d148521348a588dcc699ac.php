<?php

/* C:\laragon\www\legalita/themes/rainlab-vanilla/pages/forgot-password.htm */
class __TwigTemplate_1019b4ebde1ea0e81b9bf2771f8ad73acff0038fea310007b7b16031a0d21a37 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />

<p><a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\">Go back to Sign in</a></p>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/themes/rainlab-vanilla/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% component 'resetPassword' %}*/
/* */
/* <hr />*/
/* */
/* <p><a href="{{ 'account'|page }}">Go back to Sign in</a></p>*/
