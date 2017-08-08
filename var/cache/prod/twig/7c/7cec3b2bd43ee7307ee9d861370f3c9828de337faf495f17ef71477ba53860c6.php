<?php

/* message_box/list.html.twig */
class __TwigTemplate_c0f58e9bfaca818199665b26f40c50e455c8b293538de6de514382eef8317d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message_box/list.html.twig", 1);
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
        $__internal_e65a69c7d582e666e24f002f60fbcdf5ab25acccd130d87e4dfeeede431d3f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65a69c7d582e666e24f002f60fbcdf5ab25acccd130d87e4dfeeede431d3f8c->enter($__internal_e65a69c7d582e666e24f002f60fbcdf5ab25acccd130d87e4dfeeede431d3f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message_box/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65a69c7d582e666e24f002f60fbcdf5ab25acccd130d87e4dfeeede431d3f8c->leave($__internal_e65a69c7d582e666e24f002f60fbcdf5ab25acccd130d87e4dfeeede431d3f8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0098e51839b15cf5bef8b2a4b3f3001b04c0fef06fd5e27edeb230e71fcf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0098e51839b15cf5bef8b2a4b3f3001b04c0fef06fd5e27edeb230e71fcf57->enter($__internal_fe0098e51839b15cf5bef8b2a4b3f3001b04c0fef06fd5e27edeb230e71fcf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.infinitescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.infinitescroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$('#contentsbody').infinitescroll({
                navSelector  : \".navigation\",
                nextSelector : \".navigation a\",
                itemSelector : \".titlebox\"
            });
        });
        \$(function(){
            \$('#nextPage').click(function(){
                return false;
            })
        });
    </script>
    <h2>メッセージ一覧</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                ";
        // line 24
        if ((twig_length_filter($this->env, ($context["messages"] ?? $this->getContext($context, "messages"))) > 0)) {
            // line 25
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 26
                echo "                        <div class=\"titlebox\">
                            <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "message/detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo ((($this->getAttribute($context["msg"], "readAt", array()) == "")) ? ("icon_close") : ("icon_open"));
                echo "\">
                                <p class=\"title\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
                echo "</p>
                                ";
                // line 29
                if (($this->getAttribute($context["msg"], "level", array()) == 9)) {
                    // line 30
                    echo "                                    <p class=\"important\">重要</p>
                                ";
                }
                // line 32
                echo "                                <p class=\"date\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "registerDate", array()), "date", array()), "Y/m/d H:i:s"), "html", null, true);
                echo "</p>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                ";
        }
        // line 37
        echo "                ";
        if (((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > ($context["pageId"] ?? $this->getContext($context, "pageId"))) && (($context["pageIdNext"] ?? $this->getContext($context, "pageIdNext")) > 0))) {
            // line 38
            echo "                    <div class=\"navigation\">
                        <p style=\"text-align: center\"><a id=\"nextPage\" href=\"messages/";
            // line 39
            echo twig_escape_filter($this->env, ($context["pageIdNext"] ?? $this->getContext($context, "pageIdNext")), "html", null, true);
            echo "\">スクロールするとメッセージがさらに表示されます</a></p>
                    </div>
                ";
        }
        // line 42
        echo "            </div><!-- end messagebox -->
        </div><!-- end contentsbody -->
        <div class=\"dotborder\"></div>
        <div id=\"btnwrap2\">
            <div class=\"borderbtn\">
                <p><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage\">マイページへ</a></p>
            </div>
            <div class=\"borderbtn\">
                <p><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">トップページへ戻る</a></p>
            </div>
        </div>
    </div><!-- end wrapper -->
";
        
        $__internal_fe0098e51839b15cf5bef8b2a4b3f3001b04c0fef06fd5e27edeb230e71fcf57->leave($__internal_fe0098e51839b15cf5bef8b2a4b3f3001b04c0fef06fd5e27edeb230e71fcf57_prof);

    }

    public function getTemplateName()
    {
        return "message_box/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  128 => 47,  121 => 42,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  95 => 32,  91 => 30,  89 => 29,  85 => 28,  77 => 27,  74 => 26,  69 => 25,  67 => 24,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <script src=\"{{ asset('bundles/framework/js/jquery.infinitescroll.js') }}\"></script>
    <script src=\"{{ asset('bundles/framework/js/jquery.infinitescroll.min.js') }}\"></script>
    <script>
        \$(function(){
            \$('#contentsbody').infinitescroll({
                navSelector  : \".navigation\",
                nextSelector : \".navigation a\",
                itemSelector : \".titlebox\"
            });
        });
        \$(function(){
            \$('#nextPage').click(function(){
                return false;
            })
        });
    </script>
    <h2>メッセージ一覧</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                {% if messages|length > 0 %}
                    {% for msg in messages %}
                        <div class=\"titlebox\">
                            <a href=\"{{ zotoUrl }}message/detail/{{ msg.id }}\" class=\"{{ (msg.readAt == \"\")  ? 'icon_close' : 'icon_open' }}\">
                                <p class=\"title\">{{ msg.subject }}</p>
                                {% if msg.level == 9 %}
                                    <p class=\"important\">重要</p>
                                {% endif %}
                                <p class=\"date\">{{ msg.registerDate.date|date(\"Y/m/d H:i:s\") }}</p>
                            </a>
                        </div>
                    {% endfor %}
                {% endif %}
                {% if pageCount > pageId and pageIdNext > 0 %}
                    <div class=\"navigation\">
                        <p style=\"text-align: center\"><a id=\"nextPage\" href=\"messages/{{ pageIdNext }}\">スクロールするとメッセージがさらに表示されます</a></p>
                    </div>
                {% endif %}
            </div><!-- end messagebox -->
        </div><!-- end contentsbody -->
        <div class=\"dotborder\"></div>
        <div id=\"btnwrap2\">
            <div class=\"borderbtn\">
                <p><a href=\"{{ zotoUrl }}mypage\">マイページへ</a></p>
            </div>
            <div class=\"borderbtn\">
                <p><a href=\"{{ zotoUrl }}\">トップページへ戻る</a></p>
            </div>
        </div>
    </div><!-- end wrapper -->
{% endblock %}", "message_box/list.html.twig", "/var/www/zoto/waikiki/app/Resources/views/message_box/list.html.twig");
    }
}
