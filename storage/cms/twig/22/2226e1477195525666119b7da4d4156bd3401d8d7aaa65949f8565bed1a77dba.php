<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/topic/posts.htm */
class __TwigTemplate_cd4491f3545b6419f791d3feb47ba17968b0e2a87c5e859261f421bccc3484e6 extends Twig_Template
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
        echo "<div class=\"forum-posts\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"forum-post\" data-post-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" id=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::post")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/topic/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  38 => 5,  33 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="forum-posts">*/
/*     {% for post in posts %}*/
/*         <div class="forum-post" data-post-id="{{ post.id }}" id="post-{{ post.id }}">*/
/*             {% partial __SELF__ ~ "::post" post=post %}*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
