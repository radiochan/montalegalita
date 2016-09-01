<?php

/* C:\wamp\www\montalalegalita/themes/rainlab-vanilla/pages/forum.htm */
class __TwigTemplate_a41e9515bc0daa1b6074c88f63be1ba4b8f5b5f3c532585e5a5e422828559d3e extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumChannels"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\montalalegalita/themes/rainlab-vanilla/pages/forum.htm";
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
/* {% component 'forumChannels' %}*/
