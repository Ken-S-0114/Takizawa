<?php

/* top/payment.html.twig */
class __TwigTemplate_16ab1f2903eb4d4fb956f12b2f0131d27a0da60b1e1f90e2c001894b19163a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/payment.html.twig", 1);
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
        $__internal_7d6af13d8febfe31c74bf0d12233ebeaf3f37cbd714cebe423c8ca5d3f33ddf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6af13d8febfe31c74bf0d12233ebeaf3f37cbd714cebe423c8ca5d3f33ddf0->enter($__internal_7d6af13d8febfe31c74bf0d12233ebeaf3f37cbd714cebe423c8ca5d3f33ddf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6af13d8febfe31c74bf0d12233ebeaf3f37cbd714cebe423c8ca5d3f33ddf0->leave($__internal_7d6af13d8febfe31c74bf0d12233ebeaf3f37cbd714cebe423c8ca5d3f33ddf0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c3f379a58e680c76d5440746b68380da74ac270ff73eb9e9442dff0dadf897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c3f379a58e680c76d5440746b68380da74ac270ff73eb9e9442dff0dadf897->enter($__internal_36c3f379a58e680c76d5440746b68380da74ac270ff73eb9e9442dff0dadf897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: solid 1px;
            padding: 0.5em;
        }
        .button{
            display: inline-block;
            padding: 7px 20px;
            border-radius: 13px;
            text-decoration: none;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            transition: .4s;
            border: none;
            text-align: center;
        }
        .button:hover {
            background-image: -webkit-linear-gradient(45deg, #ffe29e 0%, #f76a35 100%);
            background-image: linear-gradient(45deg, #ffe29e 0%, #ffbc1b 100%);
        }
    </style>
    <div id=\"wrap\">
        <header style=\"margin-top: -80px;\">
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                </ul>
            </nav>
        </header>
        <div class=\"ntmargin\"style=\"margin-top: 100px\"></div>

        <table width=\"620\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"2\" style=\"text-align:center;\">
            <caption style=\"margin-top: 50px; text-align: center; font-size: 2em;margin-bottom: 10px\">クレジットカードでのお支払い</caption>
            <tr>
                <td>お支払い金額</td>

                <td><output name=\"cost\"></output></td>
            </tr>
            <tr>
                <td>ご利用いただけるカードブランド</td>
                <td><img src=\"https://www.ana.co.jp/cont-image/common/logo/0058-lang-multi.jpg\" width=300px></td>
            </tr>
            <tr>
                <td>クレジットカード番号</td>
                <td><input type=\"number\" name=\"cardnumber\">（ハイフンなし）</td>
            </tr><tr>
            <td>有効期限</td>
            <td><input type=\"month\" name=\"date\"></td>
            </tr>
            <tr>
                <td>セキュリティコード</td>
                <td><input type=\"number\" name=\"code\"></td>
             </tr>
        </table>
        <div class=\"center\" style=\"text-align: center; margin-top: 30px;\">
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "payment/complete\" class=\"button\">注文を確定する</a></br>
        </div>
    </div>
";
        
        $__internal_36c3f379a58e680c76d5440746b68380da74ac270ff73eb9e9442dff0dadf897->leave($__internal_36c3f379a58e680c76d5440746b68380da74ac270ff73eb9e9442dff0dadf897_prof);

    }

    public function getTemplateName()
    {
        return "top/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 72,  102 => 42,  98 => 41,  94 => 40,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  40 => 3,  34 => 2,  11 => 1,);
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
        table {
            border-collapse: collapse;
        }
        td {
            border: solid 1px;
            padding: 0.5em;
        }
        .button{
            display: inline-block;
            padding: 7px 20px;
            border-radius: 13px;
            text-decoration: none;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            transition: .4s;
            border: none;
            text-align: center;
        }
        .button:hover {
            background-image: -webkit-linear-gradient(45deg, #ffe29e 0%, #f76a35 100%);
            background-image: linear-gradient(45deg, #ffe29e 0%, #ffbc1b 100%);
        }
    </style>
    <div id=\"wrap\">
        <header style=\"margin-top: -80px;\">
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
        <div class=\"ntmargin\"style=\"margin-top: 100px\"></div>

        <table width=\"620\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"2\" style=\"text-align:center;\">
            <caption style=\"margin-top: 50px; text-align: center; font-size: 2em;margin-bottom: 10px\">クレジットカードでのお支払い</caption>
            <tr>
                <td>お支払い金額</td>

                <td><output name=\"cost\"></output></td>
            </tr>
            <tr>
                <td>ご利用いただけるカードブランド</td>
                <td><img src=\"https://www.ana.co.jp/cont-image/common/logo/0058-lang-multi.jpg\" width=300px></td>
            </tr>
            <tr>
                <td>クレジットカード番号</td>
                <td><input type=\"number\" name=\"cardnumber\">（ハイフンなし）</td>
            </tr><tr>
            <td>有効期限</td>
            <td><input type=\"month\" name=\"date\"></td>
            </tr>
            <tr>
                <td>セキュリティコード</td>
                <td><input type=\"number\" name=\"code\"></td>
             </tr>
        </table>
        <div class=\"center\" style=\"text-align: center; margin-top: 30px;\">
            <a href=\"{{ url }}payment/complete\" class=\"button\">注文を確定する</a></br>
        </div>
    </div>
{% endblock %}", "top/payment.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/payment.html.twig");
    }
}
