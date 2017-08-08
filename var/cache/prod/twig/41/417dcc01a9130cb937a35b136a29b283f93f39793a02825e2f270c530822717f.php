<?php

/* top/contact.html.twig */
class __TwigTemplate_ac267557dacf8a48cfa1b49cf8fb200a72f0cc4708ab19f2d142fae7061c38de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("top/head.html.twig", "top/contact.html.twig", 1);
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
        $__internal_7231a7f90fa6b3981492b5fbd018643e1db07b150098dd0e25d8af9d96125603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7231a7f90fa6b3981492b5fbd018643e1db07b150098dd0e25d8af9d96125603->enter($__internal_7231a7f90fa6b3981492b5fbd018643e1db07b150098dd0e25d8af9d96125603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7231a7f90fa6b3981492b5fbd018643e1db07b150098dd0e25d8af9d96125603->leave($__internal_7231a7f90fa6b3981492b5fbd018643e1db07b150098dd0e25d8af9d96125603_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_235f672e47ed8f71bcd6b3b0363230be744c596ae7eb35a8447e8ad72949057d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235f672e47ed8f71bcd6b3b0363230be744c596ae7eb35a8447e8ad72949057d->enter($__internal_235f672e47ed8f71bcd6b3b0363230be744c596ae7eb35a8447e8ad72949057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<style>
    .ta1{
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #89866C;
        padding: 40px;
    }
    .ta1 th{
        font-size: 1.3em;
    }
    .color1 {
        text-align: center;
        font-size: 1em;
        color: #89866C;
        margin-left: 250px;
    }
    .color2 {
        text-align: center;
        font-size: 2em;
        color: #89866C;
    }
    .c {
        text-align: center;
    }
    input#resv{
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
        font-size: 1em;
    }
    input#resv:hover {
        background-image: -webkit-linear-gradient(45deg, #ffe29e 0%, #f76a35 100%);
        background-image: linear-gradient(45deg, #ffe29e 0%, #ffbc1b 100%);
    }
</style>
    <div id=\"wrap\">
        <header style=\"margin-top: 1px;\">
            <nav>
                <a class=\"logo\" href=\"/\"></a>
                <ul>
                    <li class=\"btn\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=1\">/ 野菜</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=2\">/ 果物</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "category?id=3\">/ 加工品</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ 滝沢について</a></li>
                    <li class=\"btn\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">/ ご利用ガイド /</a></li>
                </ul>
                <ul>
                    <li><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon1.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon2.png"), "html", null, true);
        echo "\"></li>
                    <li><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/icon3.png"), "html", null, true);
        echo "\"></li>
                </ul>
            </nav>
        </header>
        <div id=\"container\">

            <div id=\"main\">
                <section>
                    <h1>登録フォーム</h1>
                    <p class=\"color2\"><strong>予約フォーム</strong></p>
                    <p class=\"color1\"><strong>※マークは必須です</strong></p>
                    <div class=\"form\">
                    <form action=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "contact/do\" method=\"post\">
                        <input type=\"hidden\" name=\"orderQuantity\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["orderQuantity"] ?? $this->getContext($context, "orderQuantity")), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"itemId\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["itemId"] ?? $this->getContext($context, "itemId")), "html", null, true);
        echo "\">
                    <table class=\"ta1\">
                        <th>郵便番号※</th>
                        <td>
                            <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                            <input type=\"text\" name=\"postalCode\" size=\"7\" maxlength=\"7\">
                        </td>
                        </tr>
                        <th>都道府県※</th>
                        <td>
                            <select name=\"pref\">
                                <option value=\"\" selected>都道府県を選択してください</option>
                                <option value=\"1\">北海道</option>
                                <option value=\"2\">青森県</option>
                                <option value=\"3\">岩手県</option>
                                <option value=\"4\">宮城県</option>
                                <option value=\"5\">秋田県</option>
                                <option value=\"6\">山形県</option>
                                <option value=\"7\">福島県</option>
                                <option value=\"8\">茨城県</option>
                                <option value=\"9\">栃木県</option>
                                <option value=\"10\">群馬県</option>
                                <option value=\"11\">埼玉県</option>
                                <option value=\"12\">千葉県</option>
                                <option value=\"13\">東京都</option>
                                <option value=\"14\">神奈川県</option>
                                <option value=\"15\">新潟県</option>
                                <option value=\"16\">富山県</option>
                                <option value=\"17\">石川県</option>
                                <option value=\"18\">福井県</option>
                                <option value=\"19\">山梨県</option>
                                <option value=\"20\">長野県</option>
                                <option value=\"21\">岐阜県</option>
                                <option value=\"22\">静岡県</option>
                                <option value=\"23\">愛知県</option>
                                <option value=\"24\">三重県</option>
                                <option value=\"25\">滋賀県</option>
                                <option value=\"26\">京都府</option>
                                <option value=\"27\">大阪府</option>
                                <option value=\"28\">兵庫県</option>
                                <option value=\"29\">奈良県</option>
                                <option value=\"30\">和歌山県</option>
                                <option value=\"31\">鳥取県</option>
                                <option value=\"32\">島根県</option>
                                <option value=\"33\">岡山県</option>
                                <option value=\"34\">広島県</option>
                                <option value=\"35\">山口県</option>
                                <option value=\"36\">徳島県</option>
                                <option value=\"37\">香川県</option>
                                <option value=\"38\">愛媛県</option>
                                <option value=\"39\">高知県</option>
                                <option value=\"40\">福岡県</option>
                                <option value=\"41\">佐賀県</option>
                                <option value=\"42\">長崎県</option>
                                <option value=\"43\">熊本県</option>
                                <option value=\"44\">大分県</option>
                                <option value=\"45\">宮崎県</option>
                                <option value=\"46\">鹿児島県</option>
                                <option value=\"47\">沖縄県</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <th>住所※</th>
                            <td><input type=\"text\" name=\"address\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>ふりがな※</th>
                            <td><input type=\"text\" name=\"rowName\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>お名前※</th>
                            <td><input type=\"text\" name=\"name\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>
                                <select name=\"sex_id\">
                                    <option value=\"\" selected>性別を選択してください</option>
                                    <option value=\"1\">男性</option>
                                    <option value=\"2\">女性</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>年齢</th>
                            <td>
                                <select name=\"age_id\">
                                    <option value=\"\" selected>年齢を選択してください</option>
                                    <option value=\"1\">~19</option>
                                    <option value=\"2\">20~29</option>
                                    <option value=\"3\">30~39</option>
                                    <option value=\"4\">40~49</option>
                                    <option value=\"5\">50~59</option>
                                    <option value=\"6\">60~</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス※</th>
                            <td><input type=\"text\" name=\"mailAddress\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>電話番号※</th>
                            <td><input type=\"text\" name=\"tel\" size=\"30\" class=\"ws\"></td>
                        </tr>
                    </table>

                    <p class=\"c\">
                        <input type=\"submit\" id=\"resv\" value=\"内容を確認する\">
                    </p>
                    </form>
                    </div>
                </section>
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
        
        $__internal_235f672e47ed8f71bcd6b3b0363230be744c596ae7eb35a8447e8ad72949057d->leave($__internal_235f672e47ed8f71bcd6b3b0363230be744c596ae7eb35a8447e8ad72949057d_prof);

    }

    public function getTemplateName()
    {
        return "top/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 73,  138 => 72,  134 => 71,  119 => 59,  115 => 58,  111 => 57,  105 => 54,  101 => 53,  97 => 52,  93 => 51,  89 => 50,  40 => 3,  34 => 2,  11 => 1,);
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
    .ta1{
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #89866C;
        padding: 40px;
    }
    .ta1 th{
        font-size: 1.3em;
    }
    .color1 {
        text-align: center;
        font-size: 1em;
        color: #89866C;
        margin-left: 250px;
    }
    .color2 {
        text-align: center;
        font-size: 2em;
        color: #89866C;
    }
    .c {
        text-align: center;
    }
    input#resv{
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
        font-size: 1em;
    }
    input#resv:hover {
        background-image: -webkit-linear-gradient(45deg, #ffe29e 0%, #f76a35 100%);
        background-image: linear-gradient(45deg, #ffe29e 0%, #ffbc1b 100%);
    }
</style>
    <div id=\"wrap\">
        <header style=\"margin-top: 1px;\">
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
        <div id=\"container\">

            <div id=\"main\">
                <section>
                    <h1>登録フォーム</h1>
                    <p class=\"color2\"><strong>予約フォーム</strong></p>
                    <p class=\"color1\"><strong>※マークは必須です</strong></p>
                    <div class=\"form\">
                    <form action=\"{{ url }}contact/do\" method=\"post\">
                        <input type=\"hidden\" name=\"orderQuantity\" value=\"{{ orderQuantity }}\">
                        <input type=\"hidden\" name=\"itemId\" value=\"{{ itemId }}\">
                    <table class=\"ta1\">
                        <th>郵便番号※</th>
                        <td>
                            <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                            <input type=\"text\" name=\"postalCode\" size=\"7\" maxlength=\"7\">
                        </td>
                        </tr>
                        <th>都道府県※</th>
                        <td>
                            <select name=\"pref\">
                                <option value=\"\" selected>都道府県を選択してください</option>
                                <option value=\"1\">北海道</option>
                                <option value=\"2\">青森県</option>
                                <option value=\"3\">岩手県</option>
                                <option value=\"4\">宮城県</option>
                                <option value=\"5\">秋田県</option>
                                <option value=\"6\">山形県</option>
                                <option value=\"7\">福島県</option>
                                <option value=\"8\">茨城県</option>
                                <option value=\"9\">栃木県</option>
                                <option value=\"10\">群馬県</option>
                                <option value=\"11\">埼玉県</option>
                                <option value=\"12\">千葉県</option>
                                <option value=\"13\">東京都</option>
                                <option value=\"14\">神奈川県</option>
                                <option value=\"15\">新潟県</option>
                                <option value=\"16\">富山県</option>
                                <option value=\"17\">石川県</option>
                                <option value=\"18\">福井県</option>
                                <option value=\"19\">山梨県</option>
                                <option value=\"20\">長野県</option>
                                <option value=\"21\">岐阜県</option>
                                <option value=\"22\">静岡県</option>
                                <option value=\"23\">愛知県</option>
                                <option value=\"24\">三重県</option>
                                <option value=\"25\">滋賀県</option>
                                <option value=\"26\">京都府</option>
                                <option value=\"27\">大阪府</option>
                                <option value=\"28\">兵庫県</option>
                                <option value=\"29\">奈良県</option>
                                <option value=\"30\">和歌山県</option>
                                <option value=\"31\">鳥取県</option>
                                <option value=\"32\">島根県</option>
                                <option value=\"33\">岡山県</option>
                                <option value=\"34\">広島県</option>
                                <option value=\"35\">山口県</option>
                                <option value=\"36\">徳島県</option>
                                <option value=\"37\">香川県</option>
                                <option value=\"38\">愛媛県</option>
                                <option value=\"39\">高知県</option>
                                <option value=\"40\">福岡県</option>
                                <option value=\"41\">佐賀県</option>
                                <option value=\"42\">長崎県</option>
                                <option value=\"43\">熊本県</option>
                                <option value=\"44\">大分県</option>
                                <option value=\"45\">宮崎県</option>
                                <option value=\"46\">鹿児島県</option>
                                <option value=\"47\">沖縄県</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <th>住所※</th>
                            <td><input type=\"text\" name=\"address\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>ふりがな※</th>
                            <td><input type=\"text\" name=\"rowName\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>お名前※</th>
                            <td><input type=\"text\" name=\"name\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>
                                <select name=\"sex_id\">
                                    <option value=\"\" selected>性別を選択してください</option>
                                    <option value=\"1\">男性</option>
                                    <option value=\"2\">女性</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>年齢</th>
                            <td>
                                <select name=\"age_id\">
                                    <option value=\"\" selected>年齢を選択してください</option>
                                    <option value=\"1\">~19</option>
                                    <option value=\"2\">20~29</option>
                                    <option value=\"3\">30~39</option>
                                    <option value=\"4\">40~49</option>
                                    <option value=\"5\">50~59</option>
                                    <option value=\"6\">60~</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス※</th>
                            <td><input type=\"text\" name=\"mailAddress\" size=\"30\" class=\"ws\"></td>
                        </tr>
                        <tr>
                            <th>電話番号※</th>
                            <td><input type=\"text\" name=\"tel\" size=\"30\" class=\"ws\"></td>
                        </tr>
                    </table>

                    <p class=\"c\">
                        <input type=\"submit\" id=\"resv\" value=\"内容を確認する\">
                    </p>
                    </form>
                    </div>
                </section>
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
{% endblock %}", "top/contact.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/contact.html.twig");
    }
}
