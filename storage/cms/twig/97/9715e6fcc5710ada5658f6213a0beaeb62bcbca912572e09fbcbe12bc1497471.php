<?php

/* C:\wamp\www\montalalegalita/themes/rainlab-vanilla/pages/account.htm */
class __TwigTemplate_09bdb9c9c970304db96bf59200d26258e949095861673fb5ce859c9a959ad19e extends Twig_Template
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
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

    </div>

";
        } else {
            // line 13
            echo "
    ";
            // line 14
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "
    ";
            // line 16
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "
    ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "
";
        }
        // line 21
        echo "
<hr />

<p><a href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->pageFilter("forgot-password");
        echo "\">Password dimenticata?</a></p>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\montalalegalita/themes/rainlab-vanilla/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  64 => 21,  60 => 19,  56 => 18,  53 => 17,  49 => 16,  46 => 15,  42 => 14,  39 => 13,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if not user %}*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-md-6">*/
/*             <h3>Sign in</h3>*/
/*             {% partial __SELF__ ~ '::signin' %}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% else %}*/
/* */
/*     {% partial __SELF__ ~ '::activation_check' %}*/
/* */
/*     {% partial __SELF__ ~ '::update' %}*/
/* */
/*     {% partial __SELF__ ~ '::deactivate_link' %}*/
/* */
/* {% endif %}*/
/* */
/* <hr />*/
/* */
/* <p><a href="{{ 'forgot-password'|page }}">Password dimenticata?</a></p>*/
