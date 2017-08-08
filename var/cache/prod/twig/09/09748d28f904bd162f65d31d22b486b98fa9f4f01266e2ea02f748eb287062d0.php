<?php

/* top/index.html.twig */
class __TwigTemplate_5e4c31888a599e66bcb57ef35d766473136bec71334058e03bf647d2a6214cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/index.html.twig", 1);
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
        $__internal_f85587ac267358553cc1c5766015a775e4d986b18f3743254a93c9d014f07be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85587ac267358553cc1c5766015a775e4d986b18f3743254a93c9d014f07be4->enter($__internal_f85587ac267358553cc1c5766015a775e4d986b18f3743254a93c9d014f07be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85587ac267358553cc1c5766015a775e4d986b18f3743254a93c9d014f07be4->leave($__internal_f85587ac267358553cc1c5766015a775e4d986b18f3743254a93c9d014f07be4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4f2143f3debc30e13853b3c105d5183b66c4678cb130bbe1d9d9d9002dc154c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f2143f3debc30e13853b3c105d5183b66c4678cb130bbe1d9d9d9002dc154c->enter($__internal_b4f2143f3debc30e13853b3c105d5183b66c4678cb130bbe1d9d9d9002dc154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div id=\"wrap\">
            <header>
                <nav>
                    <a class=\"logo\" href=\"/\"></a>
                    <ul>
                        <li class=\"btn\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                        <li class=\"btn\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                        <li class=\"btn\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                        <li class=\"btn\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                        <li class=\"btn\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                    </ul>
                    <ul>
                        <li><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                        <li><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                        <li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                    </ul>
                </nav>
            </header>

        <div class=\"kv\">
            <p id=\"slideshow\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/kv1.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"600\" class=\"active\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/kv2.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"600\">
            </p>
        </div>

        <section id=\"works\" class=\"content\">
            <h1>滝沢自慢の特産品</h1>
            <div class=\"IndexBn\">
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/img1.jpg"), "html", null, true);
        echo ")\"></span></a>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/img2.jpg"), "html", null, true);
        echo ")\"></span></a>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/img3.jpg"), "html", null, true);
        echo ")\"></span></a>
            </div>

        </section>

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
        
        $__internal_b4f2143f3debc30e13853b3c105d5183b66c4678cb130bbe1d9d9d9002dc154c->leave($__internal_b4f2143f3debc30e13853b3c105d5183b66c4678cb130bbe1d9d9d9002dc154c_prof);

    }

    public function getTemplateName()
    {
        return "top/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  107 => 33,  101 => 32,  91 => 25,  87 => 24,  77 => 17,  73 => 16,  69 => 15,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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

        <div class=\"kv\">
            <p id=\"slideshow\">
                <img src=\"{{ asset('bundles/framework/images/kv1.jpg') }}\" width=\"100%\" height=\"600\" class=\"active\">
                <img src=\"{{ asset('bundles/framework/images/kv2.jpg') }}\" width=\"100%\" height=\"600\">
            </p>
        </div>

        <section id=\"works\" class=\"content\">
            <h1>滝沢自慢の特産品</h1>
            <div class=\"IndexBn\">
                <a href=\"{{ url }}category?id=1\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url({{ asset('bundles/framework/images/img1.jpg')}})\"></span></a>
                <a href=\"{{ url }}category?id=2\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url({{ asset('bundles/framework/images/img2.jpg')}})\"></span></a>
                <a href=\"{{ url }}category?id=3\" target=\"_blank\"><span class=\"cover\" style=\"background-image: url({{ asset('bundles/framework/images/img3.jpg')}})\"></span></a>
            </div>

        </section>

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

{% endblock %}
", "top/index.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/index.html.twig");
    }
}
