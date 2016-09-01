<?php

/* C:\laragon\www\legalita/plugins/rainlab/forum/components/topic/controlpanel.htm */
class __TwigTemplate_4344328dadf171f1a6ee630afe81cbc5fc511c7705c0ba857ecad3f2e22fac21 extends Twig_Template
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
        echo "<div class=\"panel\">
    <div class=\"list-group\">

        ";
        // line 4
        if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "is_moderator", array())) {
            // line 5
            echo "            <div class=\"list-group-item\">
                ";
            // line 6
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onMove", "data-request-confirm" => "Are you sure?")));
            echo "
                    <label>Move to:</label>
                    <select name=\"channel\" class=\"form-control input-sm\">
                        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "channelList", array()));
            foreach ($context['_seq'] as $context["id"] => $context["title"]) {
                // line 10
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">";
                echo $context["title"];
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                    </select>
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Move</button>
                ";
            // line 14
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "
            </div>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onLock\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 21
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "is_locked", array())) {
                // line 22
                echo "                    Unlock topic
                ";
            } else {
                // line 24
                echo "                    Lock topic
                ";
            }
            // line 26
            echo "            </a>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onSticky\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 32
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "is_sticky", array())) {
                // line 33
                echo "                    Unsticky topic
                ";
            } else {
                // line 35
                echo "                    Sticky topic
                ";
            }
            // line 37
            echo "            </a>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 41
            echo "            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onFollow\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 45
            if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "isFollowing", array(0 => (isset($context["topic"]) ? $context["topic"] : null)), "method")) {
                // line 46
                echo "                    Unfollow this topic
                ";
            } else {
                // line 48
                echo "                    Follow this topic
                ";
            }
            // line 50
            echo "            </a>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "is_locked", array())) {
            // line 54
            echo "            <div class=\"list-group-item\">
                <span class=\"text text-danger\"><i class=\"icon icon-lock\"></i> This topic is locked</span>
            </div>
        ";
        } else {
            // line 58
            echo "            <a href=\"#postForm\" class=\"list-group-item\">
                Post a reply
            </a>
        ";
        }
        // line 62
        echo "
        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-eye-open\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "count_views", array()), "html", null, true);
        echo " views
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\legalita/plugins/rainlab/forum/components/topic/controlpanel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 64,  138 => 62,  132 => 58,  126 => 54,  124 => 53,  121 => 52,  117 => 50,  113 => 48,  109 => 46,  107 => 45,  101 => 41,  99 => 40,  96 => 39,  92 => 37,  88 => 35,  84 => 33,  82 => 32,  74 => 26,  70 => 24,  66 => 22,  64 => 21,  54 => 14,  50 => 12,  39 => 10,  35 => 9,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel">*/
/*     <div class="list-group">*/
/* */
/*         {% if member.is_moderator %}*/
/*             <div class="list-group-item">*/
/*                 {{ form_open({ request: 'onMove', 'data-request-confirm': "Are you sure?" }) }}*/
/*                     <label>Move to:</label>*/
/*                     <select name="channel" class="form-control input-sm">*/
/*                         {% for id, title in __SELF__.channelList %}*/
/*                             <option value="{{ id }}">{{ title|raw }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                     <button type="submit" class="btn btn-block btn-primary btn-sm">Move</button>*/
/*                 {{ form_close() }}*/
/*             </div>*/
/* */
/*             <a href="javascript:;"*/
/*                 class="list-group-item"*/
/*                 data-request="onLock"*/
/*                 data-request-update="'@controlpanel': '#topicControlPanel'">*/
/*                 {% if topic.is_locked %}*/
/*                     Unlock topic*/
/*                 {% else %}*/
/*                     Lock topic*/
/*                 {% endif %}*/
/*             </a>*/
/* */
/*             <a href="javascript:;"*/
/*                 class="list-group-item"*/
/*                 data-request="onSticky"*/
/*                 data-request-update="'@controlpanel': '#topicControlPanel'">*/
/*                 {% if topic.is_sticky %}*/
/*                     Unsticky topic*/
/*                 {% else %}*/
/*                     Sticky topic*/
/*                 {% endif %}*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if member %}*/
/*             <a href="javascript:;"*/
/*                 class="list-group-item"*/
/*                 data-request="onFollow"*/
/*                 data-request-update="'@controlpanel': '#topicControlPanel'">*/
/*                 {% if member.isFollowing(topic) %}*/
/*                     Unfollow this topic*/
/*                 {% else %}*/
/*                     Follow this topic*/
/*                 {% endif %}*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if topic.is_locked %}*/
/*             <div class="list-group-item">*/
/*                 <span class="text text-danger"><i class="icon icon-lock"></i> This topic is locked</span>*/
/*             </div>*/
/*         {% else %}*/
/*             <a href="#postForm" class="list-group-item">*/
/*                 Post a reply*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         <div class="list-group-item">*/
/*             <i class="fa fa-eye icon-eye-open"></i> {{ topic.count_views }} views*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
