<?php

/* C:\laragon\www\legalita/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_e3368c2f6d89269161624379fc758729e92ca148aef2e85df8c2af188ac191a0 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"Contenuti Liked\" />
            <div class=\"caption\">
                <h3>Contenuti Liked</h3>
                <p>I contenuti che <em>ci sono piaciuti</em>.</p>
                <br />
                <p>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("liked");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">Vai ai contenuti</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"Il nostro YouTube\" />
            <div class=\"caption\">
                <h3>Il nostro YouTube</h3>
                <p>Vai al nostro <em>canale YouTube</em>.</p>
                <br />
                <p>
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->pageFilter("youtube");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">Vai al canale</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"Vai in regia!\" />
            <div class=\"caption\">
                <h3>Vai in regia!</h3>
                <p>Accedi, crea e pubblica i tuoi <em>contenuti</em>.</p>
                <br />
                <p>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->pageFilter("videoeditor");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">Vai alla regia</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  67 => 35,  55 => 26,  46 => 20,  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-user.png'|theme }}" alt="Contenuti Liked" />*/
/*             <div class="caption">*/
/*                 <h3>Contenuti Liked</h3>*/
/*                 <p>I contenuti che <em>ci sono piaciuti</em>.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'liked'|page }}" class="btn btn-lg btn-info" role="button">Vai ai contenuti</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-blog.png'|theme }}" alt="Il nostro YouTube" />*/
/*             <div class="caption">*/
/*                 <h3>Il nostro YouTube</h3>*/
/*                 <p>Vai al nostro <em>canale YouTube</em>.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'youtube'|page }}" class="btn btn-lg btn-success" role="button">Vai al canale</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-forum.png'|theme }}" alt="Vai in regia!" />*/
/*             <div class="caption">*/
/*                 <h3>Vai in regia!</h3>*/
/*                 <p>Accedi, crea e pubblica i tuoi <em>contenuti</em>.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'videoeditor'|page }}" class="btn btn-lg btn-warning" role="button">Vai alla regia</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
