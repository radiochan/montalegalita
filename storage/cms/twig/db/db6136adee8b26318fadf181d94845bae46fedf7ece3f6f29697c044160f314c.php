<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_90862b34522204ad12792c3dd702b0995ddd9ae97b04d96a602b9f460c45085f extends Twig_Template
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
        echo "<div class=\"rainlab-forum\">

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((((isset($context["type"]) ? $context["type"] : null) == "error")) ? ("danger") : ((isset($context["type"]) ? $context["type"] : null))), "html", null, true);
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if ((isset($context["returnUrl"]) ? $context["returnUrl"] : null)) {
            // line 11
            echo "        <p>&larr; <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["returnUrl"]) ? $context["returnUrl"] : null), "html", null, true);
            echo "\">Back to ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "title", array()), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["topic"]) ? $context["topic"] : null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "subject", array()), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@posts"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@pagination"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>Reply to this discussion</h4>
                ";
            // line 33
            if ( !$this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "canPost", array())) {
                // line 34
                echo "                    <p>
                        You cannot edit posts or make replies:
                        ";
                // line 36
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "is_banned", array())) {
                    echo "Your account is banned.";
                }
                // line 37
                echo "                        ";
                if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "is_locked", array())) {
                    echo "This topic is locked.";
                }
                // line 38
                echo "                    </p>
                ";
            } else {
                // line 40
                echo "                    ";
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    // line 41
                    echo "                        ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('CMS')->partialFunction("@postform"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    // line 42
                    echo "                    ";
                } else {
                    // line 43
                    echo "                        <p>You should be logged in before you can post.</p>
                    ";
                }
                // line 45
                echo "                ";
            }
            // line 46
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 50
(isset($context["channel"]) ? $context["channel"] : null)) {
            // line 51
            echo "
        <h4>Create a new discussion topic</h4>
        ";
            // line 53
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("@createform"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 54
            echo "
    ";
        } else {
            // line 56
            echo "
        <p>Topic not found</p>

    ";
        }
        // line 60
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  152 => 56,  148 => 54,  144 => 53,  140 => 51,  138 => 50,  132 => 46,  129 => 45,  125 => 43,  122 => 42,  117 => 41,  114 => 40,  110 => 38,  105 => 37,  101 => 36,  97 => 34,  95 => 33,  91 => 31,  87 => 30,  84 => 29,  80 => 28,  73 => 23,  69 => 22,  60 => 16,  57 => 15,  55 => 14,  52 => 13,  44 => 11,  42 => 10,  39 => 9,  31 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="rainlab-forum">*/
/* */
/*     {% flash %}*/
/*         <div class="alert alert-{{ type == 'error' ? 'danger' : type }}">*/
/*             {{ message }}*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*         </div>*/
/*     {% endflash %}*/
/* */
/*     {% if returnUrl %}*/
/*         <p>&larr; <a href="{{ returnUrl }}">Back to {{ channel.title }}</a></p>*/
/*     {% endif %}*/
/* */
/*     {% if topic %}*/
/* */
/*         <h4>{{ topic.subject }}</h4>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3 col-md-push-9">*/
/* */
/*                 <div id="topicControlPanel">*/
/*                     {% partial "@controlpanel" %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-9 col-md-pull-3">*/
/* */
/*                 {% partial "@posts" %}*/
/* */
/*                 {% partial "@pagination" %}*/
/* */
/*                 <h4>Reply to this discussion</h4>*/
/*                 {% if not topic.canPost %}*/
/*                     <p>*/
/*                         You cannot edit posts or make replies:*/
/*                         {% if member.is_banned %}Your account is banned.{% endif %}*/
/*                         {% if topic.is_locked %}This topic is locked.{% endif %}*/
/*                     </p>*/
/*                 {% else %}*/
/*                     {% if member %}*/
/*                         {% partial "@postform" %}*/
/*                     {% else %}*/
/*                         <p>You should be logged in before you can post.</p>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     {% elseif channel %}*/
/* */
/*         <h4>Create a new discussion topic</h4>*/
/*         {% partial "@createform" %}*/
/* */
/*     {% else %}*/
/* */
/*         <p>Topic not found</p>*/
/* */
/*     {% endif %}*/
/* </div>*/
