<?php

/* C:\laragon\www\legalita/themes/rainlab-vanilla/pages/forum/topic.htm */
class __TwigTemplate_22f6d45964674e92484f5731f5bf6f18ad1dd39d327524212e52ec9304ff9d2e extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumTopic"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/themes/rainlab-vanilla/pages/forum/topic.htm";
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
/* {% component 'forumTopic' %}*/
