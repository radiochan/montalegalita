<?php

/* C:\laragon\www\legalita/plugins/rainlab/user/components/account/activation_check.htm */
class __TwigTemplate_794712b62b0e9531c1c0e420a15aea20dd7583770392c9945289997b035bfdee extends Twig_Template
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
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "is_activated", array())) {
            // line 2
            echo "
    <h3>Your email address has not yet been verified.</h3>
    <p>
        You should verify your account otherwise it may be deleted. Please check your email to verify.
        <a href=\"javascript:;\" data-request=\"onSendActivationEmail\">Send the verification email again</a>.
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/user/components/account/activation_check.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if not user.is_activated %}*/
/* */
/*     <h3>Your email address has not yet been verified.</h3>*/
/*     <p>*/
/*         You should verify your account otherwise it may be deleted. Please check your email to verify.*/
/*         <a href="javascript:;" data-request="onSendActivationEmail">Send the verification email again</a>.*/
/*     </p>*/
/* */
/* {% endif %}*/
