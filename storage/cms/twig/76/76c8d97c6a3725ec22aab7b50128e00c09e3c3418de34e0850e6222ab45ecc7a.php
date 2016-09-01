<?php

/* C:\laragon\www\legalita/themes/rainlab-vanilla/pages/forum/channel.htm */
class __TwigTemplate_6c30e5107d7effa72a9c69a3a5ef39513628ea60e7b017e7d4da34ae716b4440 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumChannel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/themes/rainlab-vanilla/pages/forum/channel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'forumChannel' %}*/
