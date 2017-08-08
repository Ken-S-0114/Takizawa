<?php

/* message_box/detail.html.twig */
class __TwigTemplate_6a9d3e94dc15e0681bdb9e8c1c1945e8da9879044127d03596ca54f1e50b1bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message_box/detail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b00c14bdf6ac57b65b1e6adf1123bbdaa5150bd55d392524e938d03f04370ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00c14bdf6ac57b65b1e6adf1123bbdaa5150bd55d392524e938d03f04370ba8->enter($__internal_b00c14bdf6ac57b65b1e6adf1123bbdaa5150bd55d392524e938d03f04370ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message_box/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00c14bdf6ac57b65b1e6adf1123bbdaa5150bd55d392524e938d03f04370ba8->leave($__internal_b00c14bdf6ac57b65b1e6adf1123bbdaa5150bd55d392524e938d03f04370ba8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f63752cad2ee3b73a54930f1eda99634fc014ffd6a07315e595e7d608f85488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f63752cad2ee3b73a54930f1eda99634fc014ffd6a07315e595e7d608f85488->enter($__internal_8f63752cad2ee3b73a54930f1eda99634fc014ffd6a07315e595e7d608f85488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        .thank_you img{
            width: 320px;
            height: 320px;
        }
    </style>
    <h2>メッセージ</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                <div id=\"titlebox_kidoku\"><p class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["messageDetail"] ?? $this->getContext($context, "messageDetail")), "subject", array()), "html", null, true);
        echo "</p><p class=\"date\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["messageDetail"] ?? $this->getContext($context, "messageDetail")), "registerDate", array()), "date", array()), "Y/m/d H:i:s"), "html", null, true);
        echo "</p></div>
                <div id=\"messagecontentbox\">
                    ";
        // line 16
        if (($context["displayThankYou"] ?? $this->getContext($context, "displayThankYou"))) {
            // line 17
            echo "                        <div class=\"thank_you\">
                            <img src=\"";
            // line 18
            echo nl2br($this->getAttribute(($context["messageDetail"] ?? $this->getContext($context, "messageDetail")), "message", array()));
            echo "\">
                        </div>
                    ";
        } else {
            // line 21
            echo "                        <p>";
            echo nl2br($this->getAttribute(($context["messageDetail"] ?? $this->getContext($context, "messageDetail")), "message", array()));
            echo "</p>
                    ";
        }
        // line 23
        echo "                </div>

            </div><!-- end newsbox -->
            <div class=\"dotborder\"></div>
            <div id=\"btnwrap2\">
                <div class=\"borderbtn\">
                    <p><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "message\">メッセージ一覧へ戻る</a></p>
                </div>
                <div class=\"borderbtn\">
                    <p><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage\">マイページへ</a></p>
                </div>
                <div class=\"borderbtn\">
                    <p><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">トップページへ戻る</a></p>
                </div>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
";
        
        $__internal_8f63752cad2ee3b73a54930f1eda99634fc014ffd6a07315e595e7d608f85488->leave($__internal_8f63752cad2ee3b73a54930f1eda99634fc014ffd6a07315e595e7d608f85488_prof);

    }

    public function getTemplateName()
    {
        return "message_box/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  90 => 32,  84 => 29,  76 => 23,  70 => 21,  64 => 18,  61 => 17,  59 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        .thank_you img{
            width: 320px;
            height: 320px;
        }
    </style>
    <h2>メッセージ</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                <div id=\"titlebox_kidoku\"><p class=\"title\">{{ messageDetail.subject }}</p><p class=\"date\">{{ messageDetail.registerDate.date|date(\"Y/m/d H:i:s\") }}</p></div>
                <div id=\"messagecontentbox\">
                    {% if displayThankYou %}
                        <div class=\"thank_you\">
                            <img src=\"{{ messageDetail.message|raw|nl2br }}\">
                        </div>
                    {% else %}
                        <p>{{ messageDetail.message|raw|nl2br }}</p>
                    {% endif %}
                </div>

            </div><!-- end newsbox -->
            <div class=\"dotborder\"></div>
            <div id=\"btnwrap2\">
                <div class=\"borderbtn\">
                    <p><a href=\"{{ zotoUrl }}message\">メッセージ一覧へ戻る</a></p>
                </div>
                <div class=\"borderbtn\">
                    <p><a href=\"{{ zotoUrl }}mypage\">マイページへ</a></p>
                </div>
                <div class=\"borderbtn\">
                    <p><a href=\"{{ zotoUrl }}\">トップページへ戻る</a></p>
                </div>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
{% endblock %}", "message_box/detail.html.twig", "/var/www/zoto/waikiki/app/Resources/views/message_box/detail.html.twig");
    }
}
