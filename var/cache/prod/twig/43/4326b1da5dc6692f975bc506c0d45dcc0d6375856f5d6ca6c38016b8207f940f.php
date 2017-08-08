<?php

/* top/search.html.twig */
class __TwigTemplate_1bc47e8c0a4f1792fc0b01ee37a243167c4782fd61186d79bd753a583610ff03 extends Twig_Template
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
        $__internal_07874cae6bd92ace26b7f3aa80baf5dd738d1eb1af8cee3092ffa3f8797d5c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07874cae6bd92ace26b7f3aa80baf5dd738d1eb1af8cee3092ffa3f8797d5c2e->enter($__internal_07874cae6bd92ace26b7f3aa80baf5dd738d1eb1af8cee3092ffa3f8797d5c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/search.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_07874cae6bd92ace26b7f3aa80baf5dd738d1eb1af8cee3092ffa3f8797d5c2e->leave($__internal_07874cae6bd92ace26b7f3aa80baf5dd738d1eb1af8cee3092ffa3f8797d5c2e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8d566740cef5c27d22147a973203a6e090d5f56c2fe5b2541ccd8f1c4da5264b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d566740cef5c27d22147a973203a6e090d5f56c2fe5b2541ccd8f1c4da5264b->enter($__internal_8d566740cef5c27d22147a973203a6e090d5f56c2fe5b2541ccd8f1c4da5264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <h2>商品検索結果ページ</h2>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itemList"] ?? $this->getContext($context, "itemList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "context", array()), "html", null, true);
            echo "
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemImgUrl", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        
        $__internal_8d566740cef5c27d22147a973203a6e090d5f56c2fe5b2541ccd8f1c4da5264b->leave($__internal_8d566740cef5c27d22147a973203a6e090d5f56c2fe5b2541ccd8f1c4da5264b_prof);

    }

    public function getTemplateName()
    {
        return "top/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  43 => 5,  39 => 4,  35 => 2,  23 => 1,);
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

    <h2>商品検索結果ページ</h2>
    {% for item in itemList %}
        {{ item.id }}
        {{ item.itemName }}
        {{ item.price }}
        {{ item.context }}
        {{ item.itemImgUrl }}
    {% endfor %}

{% endblock %}", "top/search.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/search.html.twig");
    }
}
