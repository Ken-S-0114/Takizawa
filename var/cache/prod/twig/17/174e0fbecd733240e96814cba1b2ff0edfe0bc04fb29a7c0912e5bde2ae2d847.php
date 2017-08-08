<?php

/* message_box/more.html.twig */
class __TwigTemplate_e5164020a39503d4eaa22c61d14cc1347f2d2168934d2d055aaca3d2c663eee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a890980556c9a665e77de29bfb82f4ed3b27eda67ea9c4d2ffe63d24712f2d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a890980556c9a665e77de29bfb82f4ed3b27eda67ea9c4d2ffe63d24712f2d68->enter($__internal_a890980556c9a665e77de29bfb82f4ed3b27eda67ea9c4d2ffe63d24712f2d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message_box/more.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a890980556c9a665e77de29bfb82f4ed3b27eda67ea9c4d2ffe63d24712f2d68->leave($__internal_a890980556c9a665e77de29bfb82f4ed3b27eda67ea9c4d2ffe63d24712f2d68_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_91a951af555340eed76d62416c9080019fe8550a3b83290ba98452627ef102eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a951af555340eed76d62416c9080019fe8550a3b83290ba98452627ef102eb->enter($__internal_91a951af555340eed76d62416c9080019fe8550a3b83290ba98452627ef102eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    ";
        if ((twig_length_filter($this->env, ($context["messages"] ?? $this->getContext($context, "messages"))) > 0)) {
            // line 3
            echo "        <div id=\"messagebox\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 5
                echo "            <div class=\"titlebox\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "message/detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo ((($this->getAttribute($context["msg"], "readAt", array()) == "")) ? ("icon_close") : ("icon_open"));
                echo "\">
                    <p class=\"title\">";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
                echo "</p>
                    ";
                // line 8
                if (($this->getAttribute($context["msg"], "level", array()) == 9)) {
                    // line 9
                    echo "                        <p class=\"important\">重要</p>
                    ";
                }
                // line 11
                echo "                    <p class=\"date\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "registerDate", array()), "date", array()), "Y/m/d H:i:s"), "html", null, true);
                echo "</p>
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div><!-- end messagebox -->
    ";
        }
        // line 17
        echo "    ";
        if (((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > ($context["pageId"] ?? $this->getContext($context, "pageId"))) && (($context["pageIdNext"] ?? $this->getContext($context, "pageIdNext")) > 0))) {
            // line 18
            echo "        <div class=\"navigation\">
            <p style=\"text-align: center\"><a id=\"nextPage\" href=\"messages/";
            // line 19
            echo twig_escape_filter($this->env, ($context["pageIdNext"] ?? $this->getContext($context, "pageIdNext")), "html", null, true);
            echo "\">スクロールするとメッセージがさらに表示されます</a></p>
        </div>
    ";
        }
        
        $__internal_91a951af555340eed76d62416c9080019fe8550a3b83290ba98452627ef102eb->leave($__internal_91a951af555340eed76d62416c9080019fe8550a3b83290ba98452627ef102eb_prof);

    }

    public function getTemplateName()
    {
        return "message_box/more.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  84 => 18,  81 => 17,  77 => 15,  66 => 11,  62 => 9,  60 => 8,  56 => 7,  48 => 6,  45 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    {% if messages|length > 0 %}
        <div id=\"messagebox\">
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
        </div><!-- end messagebox -->
    {% endif %}
    {% if pageCount > pageId and pageIdNext > 0 %}
        <div class=\"navigation\">
            <p style=\"text-align: center\"><a id=\"nextPage\" href=\"messages/{{ pageIdNext }}\">スクロールするとメッセージがさらに表示されます</a></p>
        </div>
    {% endif %}
{% endblock %}", "message_box/more.html.twig", "/var/www/zoto/waikiki/app/Resources/views/message_box/more.html.twig");
    }
}
