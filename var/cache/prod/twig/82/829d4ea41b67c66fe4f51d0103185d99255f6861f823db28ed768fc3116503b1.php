<?php

/* top/payment_comp.html.twig */
class __TwigTemplate_a9232eb474bbcf0981dacc59ea94554e17782d258a1a71ad1505141942bd396a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/payment_comp.html.twig", 1);
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
        $__internal_8282b8e754a0c96f7206abd17f762c29ab3c5e448e77d83688f1c0f45210de09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8282b8e754a0c96f7206abd17f762c29ab3c5e448e77d83688f1c0f45210de09->enter($__internal_8282b8e754a0c96f7206abd17f762c29ab3c5e448e77d83688f1c0f45210de09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/payment_comp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8282b8e754a0c96f7206abd17f762c29ab3c5e448e77d83688f1c0f45210de09->leave($__internal_8282b8e754a0c96f7206abd17f762c29ab3c5e448e77d83688f1c0f45210de09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1906356c06d93c8ad1f997af5bc5699da20d292850588fe21981b457fdac897f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1906356c06d93c8ad1f997af5bc5699da20d292850588fe21981b457fdac897f->enter($__internal_1906356c06d93c8ad1f997af5bc5699da20d292850588fe21981b457fdac897f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .button{
            display: inline-block;
            padding: 7px 20px;
            border-radius: 13px;
            text-decoration: none;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #89866C 0%, #89866C 100%);
            background-image: linear-gradient(45deg, #89866C 0%, #89866C 100%);
            transition: .4s;
            border: none;
            text-align: center;
        }
        .button:hover {
            background-image: -webkit-linear-gradient(45deg, #89866C 0%, #89866C 100%);
            background-image: linear-gradient(45deg, #89866C 0%, #89866C 100%);
        }
    </style>
    <div id=\"wrap\">
        <header style=\"margin-top: -180px\">
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                </ul>
            </nav>
        </header>


        <div style=\"margin-top: 200px\">
            <table width=\"620\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"2\" style=\"text-align:center;\">
                <h1>決済完了ページ</h1>
                <h1>決済が完了しました</h1>
            </table>
            <div style=\"text-align: center\">
                <a class=\"button\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">トップページへもどる</a>
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
        
        $__internal_1906356c06d93c8ad1f997af5bc5699da20d292850588fe21981b457fdac897f->leave($__internal_1906356c06d93c8ad1f997af5bc5699da20d292850588fe21981b457fdac897f_prof);

    }

    public function getTemplateName()
    {
        return "top/payment_comp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  95 => 35,  91 => 34,  87 => 33,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  40 => 3,  34 => 2,  11 => 1,);
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
    <style>
        .button{
            display: inline-block;
            padding: 7px 20px;
            border-radius: 13px;
            text-decoration: none;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #89866C 0%, #89866C 100%);
            background-image: linear-gradient(45deg, #89866C 0%, #89866C 100%);
            transition: .4s;
            border: none;
            text-align: center;
        }
        .button:hover {
            background-image: -webkit-linear-gradient(45deg, #89866C 0%, #89866C 100%);
            background-image: linear-gradient(45deg, #89866C 0%, #89866C 100%);
        }
    </style>
    <div id=\"wrap\">
        <header style=\"margin-top: -180px\">
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


        <div style=\"margin-top: 200px\">
            <table width=\"620\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"2\" style=\"text-align:center;\">
                <h1>決済完了ページ</h1>
                <h1>決済が完了しました</h1>
            </table>
            <div style=\"text-align: center\">
                <a class=\"button\" href=\"{{ url }}\">トップページへもどる</a>
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
{% endblock %}", "top/payment_comp.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/payment_comp.html.twig");
    }
}
