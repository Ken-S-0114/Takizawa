<?php

/* top/list.html.twig */
class __TwigTemplate_1f34055378d409826f7c06d6421f9791f05312496216ca31f3a12d74cb994f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "top/head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a19f0476e7add51fc64ff3491afc8dd00a6d5506748fa66043399aeb2e1a363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a19f0476e7add51fc64ff3491afc8dd00a6d5506748fa66043399aeb2e1a363->enter($__internal_6a19f0476e7add51fc64ff3491afc8dd00a6d5506748fa66043399aeb2e1a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a19f0476e7add51fc64ff3491afc8dd00a6d5506748fa66043399aeb2e1a363->leave($__internal_6a19f0476e7add51fc64ff3491afc8dd00a6d5506748fa66043399aeb2e1a363_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5007cd715ad5c611745692f1903768f5efa47f7c68246e462f692d30b6aca48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5007cd715ad5c611745692f1903768f5efa47f7c68246e462f692d30b6aca48b->enter($__internal_5007cd715ad5c611745692f1903768f5efa47f7c68246e462f692d30b6aca48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/products.css"), "html", null, true);
        echo "\">

    <div id=\"wrap\">
        <header>
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                </ul>
            </nav>
        </header>

        <div id=\"mainContainer\">
            <div id=\"banner\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/img4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
            </div>

            <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "search\" name=\"search\" method=\"post\">
                <dl class=\"search\">
                    <dt><input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search\" /></dt>
                    <dd><button><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></button></dd>
                </dl>
            </form>

            <div class=\"IndexBn\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["itemList"] ?? $this->getContext($context, "itemList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "detail?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemImgUrl", array()), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo "</span></a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
            <div class=\"pnkz\">
                <p>＜　１　２　３　＞</p>
            </div>

        </div>
        <footer>
            <div class=\"footer\">
                <nav>
                    <ul>
                        &copy;takizawa2017. All rights reserved.
                    </ul>
                    <ul>
                        <li class=\"btn\"><a href=\"\">/ ご利用ガイド</a></li>
                        <li class=\"btn\"><a href=\"\">/ プライバシーポリシー</a></li>
                        <li class=\"btn\"><a href=\"\">/ 運営会社</a></li>
                        <li class=\"btn\"><a href=\"\">/ お問合せ</a></li>
                        <li class=\"btn\"><a href=\"\">/ サイトマップ /</a></li>
                    </ul>

                </nav>

            </div>

        </footer>
    </div>
";
        
        $__internal_5007cd715ad5c611745692f1903768f5efa47f7c68246e462f692d30b6aca48b->leave($__internal_5007cd715ad5c611745692f1903768f5efa47f7c68246e462f692d30b6aca48b_prof);

    }

    public function getTemplateName()
    {
        return "top/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  115 => 38,  111 => 37,  103 => 32,  97 => 29,  91 => 26,  81 => 19,  77 => 18,  73 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'top/head.html.twig' %}
{% block body %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/framework/css/products.css')  }}\">

    <div id=\"wrap\">
        <header>
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"{{ url }}category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"{{ url }}category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"{{ url }}category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"{{ url }}\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"{{ url }}\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"{{ asset('bundles/framework/images/icon1.png')}}\"></li>
                    <li><img src=\"{{ asset('bundles/framework/images/icon2.png')}}\"></li>
                    <li><img src=\"{{ asset('bundles/framework/images/icon3.png')}}\"></li>
                </ul>
            </nav>
        </header>

        <div id=\"mainContainer\">
            <div id=\"banner\">
                <img src=\"{{ asset('bundles/framework/images/img4.jpg')}}\" alt=\"\" />
            </div>

            <form action=\"{{ url }}search\" name=\"search\" method=\"post\">
                <dl class=\"search\">
                    <dt><input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search\" /></dt>
                    <dd><button><img src=\"{{ asset('bundles/framework/images/icon3.png')}}\"></button></dd>
                </dl>
            </form>

            <div class=\"IndexBn\">
            {% for item in itemList %}
                <a href=\"{{ url }}detail?id={{ item.id }}\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url({{ item.itemImgUrl }})\">{{ item.itemName }}</span></a>

            {% endfor %}
            </div>
            <div class=\"pnkz\">
                <p>＜　１　２　３　＞</p>
            </div>

        </div>
        <footer>
            <div class=\"footer\">
                <nav>
                    <ul>
                        &copy;takizawa2017. All rights reserved.
                    </ul>
                    <ul>
                        <li class=\"btn\"><a href=\"\">/ ご利用ガイド</a></li>
                        <li class=\"btn\"><a href=\"\">/ プライバシーポリシー</a></li>
                        <li class=\"btn\"><a href=\"\">/ 運営会社</a></li>
                        <li class=\"btn\"><a href=\"\">/ お問合せ</a></li>
                        <li class=\"btn\"><a href=\"\">/ サイトマップ /</a></li>
                    </ul>

                </nav>

            </div>

        </footer>
    </div>
{% endblock %}", "top/list.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/list.html.twig");
    }
}
