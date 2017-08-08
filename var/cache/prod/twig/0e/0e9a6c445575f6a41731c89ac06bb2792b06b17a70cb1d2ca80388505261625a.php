<?php

/* top/detail.html.twig */
class __TwigTemplate_052e3916614dd9f74b33dcbf6e8acf6b62b5bb74e5239d0776c5d3d0abc9fd19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/detail.html.twig", 1);
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
        $__internal_9f2f65b94bae43ffe75f02a108d0e16c50ebee312a2239346653fa56d78e8814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f65b94bae43ffe75f02a108d0e16c50ebee312a2239346653fa56d78e8814->enter($__internal_9f2f65b94bae43ffe75f02a108d0e16c50ebee312a2239346653fa56d78e8814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2f65b94bae43ffe75f02a108d0e16c50ebee312a2239346653fa56d78e8814->leave($__internal_9f2f65b94bae43ffe75f02a108d0e16c50ebee312a2239346653fa56d78e8814_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_832fdc50c7598d44e5cc926d501db787558dc002a9529c4c9ff11abb634e6540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832fdc50c7598d44e5cc926d501db787558dc002a9529c4c9ff11abb634e6540->enter($__internal_832fdc50c7598d44e5cc926d501db787558dc002a9529c4c9ff11abb634e6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/detail.css"), "html", null, true);
        echo "\">
    <div id=\"wrap\">
        <header>
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                </ul>
            </nav>
        </header>

        <div id=\"banner\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/img5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div class=\"pnkz\">
            <p>トップ　＜　野菜　＜　採れたて";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "itemName", array()), "html", null, true);
        echo "　</p>
        </div>
        <div id=\"mainContainer\">
            <div id=\"contents\">
                <div id=\"leftColumn\">
\t\t\t\t\t\t<span class=\"cover\" target=\"_blank\" style=\"background-image: url('";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "itemImgUrl", array()), "html", null, true);
        echo "')\"></span>
                </div>
                <div id=\"rightColumn\">
                    <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "itemName", array()), "html", null, true);
        echo "</h2>
                    <hr>
                    <p>朝採れたばかりのものを直送でお届けします。農薬や化学肥料を使用しないで育てた安心安全な野菜です。</p>
                    <p>出荷時期: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "shippingTime", array()), "html", null, true);
        echo " </p>
                    <p class=\"maker\" >生産者: { 生産者名 }</p><br>
                    <div class=\"price\"><label>価格 :</label><span>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "price", array()), "html", null, true);
        echo "円 + 配送料</span></div>

                    <div id=\"orderForm\">
                        <div id=\"formItems\">
                            <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "contact\" method=\"post\" >
                                <label>数量：</label>
                                <select name=\"OrderQuantity\">
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                </select>
                                <button class=\"button\" type=\"submit\">予約へ進む</button>
                            </form>
                        </div>
                    </div><!-- orderForm -->
                </div>
                <div id=\"productProduction\">
                    <h3 id=\"discriptionLabel\">生産品の特徴＆こだわり</h3>
                    <div id=\"discriptionText\">
                        <p> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["itemDetail"] ?? $this->getContext($context, "itemDetail")), "context", array()), "html", null, true);
        echo " </p>
                    </div>
                </div>
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
        
        $__internal_832fdc50c7598d44e5cc926d501db787558dc002a9529c4c9ff11abb634e6540->leave($__internal_832fdc50c7598d44e5cc926d501db787558dc002a9529c4c9ff11abb634e6540_prof);

    }

    public function getTemplateName()
    {
        return "top/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  127 => 44,  120 => 40,  115 => 38,  109 => 35,  103 => 32,  95 => 27,  89 => 24,  80 => 18,  76 => 17,  72 => 16,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/framework/css/detail.css')  }}\">
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

        <div id=\"banner\">
            <img src=\"{{ asset('bundles/framework/images/img5.jpg')}}\" alt=\"\" />
        </div>
        <div class=\"pnkz\">
            <p>トップ　＜　野菜　＜　採れたて{{ itemDetail.itemName }}　</p>
        </div>
        <div id=\"mainContainer\">
            <div id=\"contents\">
                <div id=\"leftColumn\">
\t\t\t\t\t\t<span class=\"cover\" target=\"_blank\" style=\"background-image: url('{{ itemDetail.itemImgUrl }}')\"></span>
                </div>
                <div id=\"rightColumn\">
                    <h2>{{  itemDetail.itemName }}</h2>
                    <hr>
                    <p>朝採れたばかりのものを直送でお届けします。農薬や化学肥料を使用しないで育てた安心安全な野菜です。</p>
                    <p>出荷時期: {{ itemDetail.shippingTime }} </p>
                    <p class=\"maker\" >生産者: { 生産者名 }</p><br>
                    <div class=\"price\"><label>価格 :</label><span>{{ itemDetail.price }}円 + 配送料</span></div>

                    <div id=\"orderForm\">
                        <div id=\"formItems\">
                            <form action=\"{{ url }}contact\" method=\"post\" >
                                <label>数量：</label>
                                <select name=\"OrderQuantity\">
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                </select>
                                <button class=\"button\" type=\"submit\">予約へ進む</button>
                            </form>
                        </div>
                    </div><!-- orderForm -->
                </div>
                <div id=\"productProduction\">
                    <h3 id=\"discriptionLabel\">生産品の特徴＆こだわり</h3>
                    <div id=\"discriptionText\">
                        <p> {{ itemDetail.context }} </p>
                    </div>
                </div>
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
{% endblock %}", "top/detail.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/detail.html.twig");
    }
}
