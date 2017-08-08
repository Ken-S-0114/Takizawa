<?php

/* auth/hapitas_login.html.twig */
class __TwigTemplate_be612eb1d4bccbbb9fa8672e9415ce4ee5281d03e3a576fba35904f01ab98995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/hapitas_login.html.twig", 1);
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
        $__internal_ceb0a83532ba5cb3d1b277301667bf58f147b51124ff7f636e5fae20cb710668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb0a83532ba5cb3d1b277301667bf58f147b51124ff7f636e5fae20cb710668->enter($__internal_ceb0a83532ba5cb3d1b277301667bf58f147b51124ff7f636e5fae20cb710668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/hapitas_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb0a83532ba5cb3d1b277301667bf58f147b51124ff7f636e5fae20cb710668->leave($__internal_ceb0a83532ba5cb3d1b277301667bf58f147b51124ff7f636e5fae20cb710668_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_397248368b19d54ffd7a8b044aedabed2159c7efe430e637c9751db312c36109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397248368b19d54ffd7a8b044aedabed2159c7efe430e637c9751db312c36109->enter($__internal_397248368b19d54ffd7a8b044aedabed2159c7efe430e637c9751db312c36109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/jsc/h_l1.js"), "html", null, true);
        echo "\"></script>
    <h2>ハピタスアカウントでログイン</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"loginbox\">
                <form accept-charset=\"UTF-8\" action=\"/auth/hapitas_login/do\" name=\"hapitas_login_form\" id=\"hapitas_login_form\" method=\"post\">
                    <input type=\"hidden\" name=\"giftId\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["giftId"] ?? $this->getContext($context, "giftId")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"zoto_url\" name=\"zoto_url\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"registered\" name=\"registered\" value=\"\">
                    <input type=\"hidden\" id=\"ref\" name=\"ref\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"ide\" name=\"ide\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["ide"] ?? $this->getContext($context, "ide")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"loginAddress\" name=\"loginAddress\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["loginAddress"] ?? $this->getContext($context, "loginAddress")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"h\" name=\"h\" value=\"\">
                <div id=\"fortabledesign\">
                    <table>
                        <div id=\"hapitas_login_error_msg\"></div>
                        <div id=\"mail_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">メールアドレスが空白です</p>
                        </div>
                        <div id=\"mail_type_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">メールアドレスの入力形式が違います</p>
                        </div>
                        <div id=\"password_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">パスワードが空白です</p>
                        </div>
                        <tr>
                            <td>
                                メールアドレス
                                <input id=\"account_name\" name=\"mail\" type=\"text\"></td>
                        </tr>

                        <tr>
                            <td>
                                パスワード
                                <input id=\"account_password\" name=\"password\" type=\"password\"></td>
                        </tr>
                    </table>
                </div><!-- end fortabledesign -->
                ";
        // line 42
        if ((($context["hapitasStatus"] ?? $this->getContext($context, "hapitasStatus")) == 0)) {
            // line 43
            echo "                    <p class=\"caution_s\" style=\"text-align: center\">1月26日(木)1:00～5:00、ハピタスのメンテナンスにより、ハピタスアカウントでログインがご利用いただけません。</p>
                    <div class=\"yellowbtn2\">
                        <p><a href=\"#\">ログイン</a></p>
                    </div>
                ";
        } else {
            // line 48
            echo "                    <div class=\"yellowbtn2\">
                        <p><a id=\"check_form\" href=\"javascript:void(0)\">ログイン</a></p>
                    </div>
                ";
        }
        // line 52
        echo "                <a href=\"http://hapitas.jp\" target=\"_blank\">
                    <p id=\"caution_hapitas\">ハピタスの登録パスワードをお忘れの場合は</p>
                    <p id=\"caution_hapitas2\"><span style=\"text-decoration:underline;\">ハピタスのサイト</span>で再設定を行ってください。</p>
                </a>
                <strong><p class=\"caution_center\" style=\"text-decoration: underline\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage\" >すでにzotoアカウントをお持ちのかたはマイページから連携してください</a></p></strong>

                <div id=\"btnwrap\">
                    ";
        // line 59
        if (($context["giftId"] ?? $this->getContext($context, "giftId"))) {
            // line 60
            echo "                        <div class=\"borderbtn\">
                            <p><a href=\"/auth?gift=";
            // line 61
            echo twig_escape_filter($this->env, ($context["giftId"] ?? $this->getContext($context, "giftId")), "html", null, true);
            echo "\">戻る</a></p>
                        </div>
                    ";
        } else {
            // line 64
            echo "                        <div class=\"borderbtn\">
                            <p><a href=\"/auth\">戻る</a></p>
                        </div>
                    ";
        }
        // line 68
        echo "                </div>
                </form>
            </div><!-- end loginbox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"/faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"/inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
";
        
        $__internal_397248368b19d54ffd7a8b044aedabed2159c7efe430e637c9751db312c36109->leave($__internal_397248368b19d54ffd7a8b044aedabed2159c7efe430e637c9751db312c36109_prof);

    }

    public function getTemplateName()
    {
        return "auth/hapitas_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 68,  135 => 64,  129 => 61,  126 => 60,  124 => 59,  118 => 56,  112 => 52,  106 => 48,  99 => 43,  97 => 42,  67 => 15,  63 => 14,  59 => 13,  54 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <script src=\"{{ asset('bundles/framework/jsc/h_l1.js') }}\"></script>
    <h2>ハピタスアカウントでログイン</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"loginbox\">
                <form accept-charset=\"UTF-8\" action=\"/auth/hapitas_login/do\" name=\"hapitas_login_form\" id=\"hapitas_login_form\" method=\"post\">
                    <input type=\"hidden\" name=\"giftId\" value=\"{{ giftId }}\">
                    <input type=\"hidden\" id=\"zoto_url\" name=\"zoto_url\" value=\"{{ zotoUrl }}\">
                    <input type=\"hidden\" id=\"registered\" name=\"registered\" value=\"\">
                    <input type=\"hidden\" id=\"ref\" name=\"ref\" value=\"{{ ref }}\">
                    <input type=\"hidden\" id=\"ide\" name=\"ide\" value=\"{{ ide }}\">
                    <input type=\"hidden\" id=\"loginAddress\" name=\"loginAddress\" value=\"{{ loginAddress }}\">
                    <input type=\"hidden\" id=\"h\" name=\"h\" value=\"\">
                <div id=\"fortabledesign\">
                    <table>
                        <div id=\"hapitas_login_error_msg\"></div>
                        <div id=\"mail_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">メールアドレスが空白です</p>
                        </div>
                        <div id=\"mail_type_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">メールアドレスの入力形式が違います</p>
                        </div>
                        <div id=\"password_error_msg\" style=\"display:none\">
                            <p class=\"caution_s\">パスワードが空白です</p>
                        </div>
                        <tr>
                            <td>
                                メールアドレス
                                <input id=\"account_name\" name=\"mail\" type=\"text\"></td>
                        </tr>

                        <tr>
                            <td>
                                パスワード
                                <input id=\"account_password\" name=\"password\" type=\"password\"></td>
                        </tr>
                    </table>
                </div><!-- end fortabledesign -->
                {% if hapitasStatus == 0 %}
                    <p class=\"caution_s\" style=\"text-align: center\">1月26日(木)1:00～5:00、ハピタスのメンテナンスにより、ハピタスアカウントでログインがご利用いただけません。</p>
                    <div class=\"yellowbtn2\">
                        <p><a href=\"#\">ログイン</a></p>
                    </div>
                {% else %}
                    <div class=\"yellowbtn2\">
                        <p><a id=\"check_form\" href=\"javascript:void(0)\">ログイン</a></p>
                    </div>
                {% endif %}
                <a href=\"http://hapitas.jp\" target=\"_blank\">
                    <p id=\"caution_hapitas\">ハピタスの登録パスワードをお忘れの場合は</p>
                    <p id=\"caution_hapitas2\"><span style=\"text-decoration:underline;\">ハピタスのサイト</span>で再設定を行ってください。</p>
                </a>
                <strong><p class=\"caution_center\" style=\"text-decoration: underline\"><a href=\"{{ zotoUrl }}mypage\" >すでにzotoアカウントをお持ちのかたはマイページから連携してください</a></p></strong>

                <div id=\"btnwrap\">
                    {% if giftId %}
                        <div class=\"borderbtn\">
                            <p><a href=\"/auth?gift={{ giftId }}\">戻る</a></p>
                        </div>
                    {% else %}
                        <div class=\"borderbtn\">
                            <p><a href=\"/auth\">戻る</a></p>
                        </div>
                    {% endif %}
                </div>
                </form>
            </div><!-- end loginbox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"/faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"/inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
{% endblock %}
", "auth/hapitas_login.html.twig", "/var/www/zoto/waikiki/app/Resources/views/auth/hapitas_login.html.twig");
    }
}
