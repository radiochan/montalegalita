<?php

/* C:\laragon\www\legalita/themes/rainlab-vanilla/partials/footer.htm */
class __TwigTemplate_132ae6aed0b5325fc9421e2aae676ae335b6fe1d3bc00f06fc88bf4db1df3784 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Isola dei Ragazzi - <a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("disclaimer");
        echo "\">Termini d'utilizzo</a></p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/themes/rainlab-vanilla/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div id="footer">*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="muted credit">&copy; {{ "now"|date("Y") }} Isola dei Ragazzi - <a href="{{ 'disclaimer'|page }}">Termini d'utilizzo</a></p>*/
/*     </div>*/
/* </div>*/
