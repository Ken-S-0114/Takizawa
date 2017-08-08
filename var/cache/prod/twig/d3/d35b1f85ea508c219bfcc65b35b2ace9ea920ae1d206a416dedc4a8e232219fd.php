<?php

/* auth/index.html.twig */
class __TwigTemplate_3446b3ef8ba994a7eaccf58fdbaecf33635ba2d635ee644db16110fa4b805aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/index.html.twig", 1);
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
        $__internal_a9428ef83666c26a6e96a44eced0ce34be21806801166d98acb5abfe92371be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9428ef83666c26a6e96a44eced0ce34be21806801166d98acb5abfe92371be1->enter($__internal_a9428ef83666c26a6e96a44eced0ce34be21806801166d98acb5abfe92371be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9428ef83666c26a6e96a44eced0ce34be21806801166d98acb5abfe92371be1->leave($__internal_a9428ef83666c26a6e96a44eced0ce34be21806801166d98acb5abfe92371be1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9431d3d83d7b8b2bd7b193b987b7a46015586a2c4e15e7e67a260b8a2a55c766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9431d3d83d7b8b2bd7b193b987b7a46015586a2c4e15e7e67a260b8a2a55c766->enter($__internal_9431d3d83d7b8b2bd7b193b987b7a46015586a2c4e15e7e67a260b8a2a55c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/jsc/auth-login1.js"), "html", null, true);
        echo "\"></script>
    <h2>ログイン</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"loginbox\">
                <form accept-charset=\"UTF-8\" action=\"/auth/logindo\" id=\"login_form\" name=\"login_form\" method=\"post\">
                    <input type=\"hidden\" name=\"giftId\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["giftId"] ?? $this->getContext($context, "giftId")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"ref\" name=\"ref\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"ide\" name=\"ide\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["ide"] ?? $this->getContext($context, "ide")), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"loginAddress\" name=\"loginAddress\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["loginAddress"] ?? $this->getContext($context, "loginAddress")), "html", null, true);
        echo "\">
                    <input type=\"hidden\"id=\"zoto_url\" name=\"zoto_url\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">

                    <div class=\"aboutborderbtn\"></div>
                    <h6>外部アカウントを使ってログイン</h6>
                    <div id=\"btnwrap\">
                        <div class=\"social_login\">
                            <div class=\"fb_login_btn\">
                                <p><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "login/social?provider=facebook\">Facebookアカウントでログイン</a></p>
                            </div>
                        </div>
                    </div>
                    ";
        // line 25
        if (($context["giftId"] ?? $this->getContext($context, "giftId"))) {
            // line 26
            echo "                        <div class=\"yellowbtn\">
                            <p><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth/hapitas_login?giftId=";
            echo twig_escape_filter($this->env, ($context["giftId"] ?? $this->getContext($context, "giftId")), "html", null, true);
            echo "\">ハピタスアカウントでログイン</a></p>
                        </div>
                    ";
        } elseif ((        // line 29
($context["ref"] ?? $this->getContext($context, "ref")) || ($context["ide"] ?? $this->getContext($context, "ide")))) {
            // line 30
            echo "                        <div class=\"yellowbtn\">
                            <p><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth/hapitas_login?ref=";
            echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
            echo "&ide=";
            echo twig_escape_filter($this->env, ($context["ide"] ?? $this->getContext($context, "ide")), "html", null, true);
            echo "\">ハピタスアカウントでログイン</a></p>
                        </div>
                    ";
        } else {
            // line 34
            echo "                        <div class=\"yellowbtn\">
                            <p><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth/hapitas_login\">ハピタスアカウントでログイン</a></p>
                        </div>
                    ";
        }
        // line 38
        echo "                    <div class=\"dotborder\"></div>
                    <h6>zotoアカウントを使ってログイン・登録</h6>
                    <div id=\"fortabledesign\">
                        <table>
                            <div id=\"login_error_msg\"></div>
                            <div id=\"mail_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> メールアドレスが空白です</p>
                            </div>
                            <div id=\"mail_type_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> メールアドレスの入力形式が間違っています</p>
                            </div>
                            <div id=\"password_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードが空白です</p>
                            </div>
                            <div id=\"password_match_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードに使えない文字が含まれています</p>
                            </div>
                            <div id=\"password_length_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードには最低8文字入力してください</p>
                            </div>
                            <div id=\"password_max_length_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードは16文字以内にしてください</p>
                            </div>
                            <tr>
                                <td>
                                    メールアドレス
                                    <input id=\"account_name\" name=\"mail\" type=\"text\"></td>
                            </tr>
                            <tr>
                                <td>
                                    パスワード(8～16文字で入力してください)
                                    <input id=\"account_password\" name=\"password\" type=\"password\"></td>
                            </tr>
                        </table>
                    </div><!-- end fortabledesign -->
                <div class=\"orangebtn\">
                    <p><a id=\"check_form\" href=\"javascript:void(0)\">ログイン</a></p>
                </div>
                <p id=\"caution\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "auth/password\" style=\"text-decoration: underline\">パスワードを忘れた方はこちら</a></p>


                    ";
        // line 79
        if (($context["giftId"] ?? $this->getContext($context, "giftId"))) {
            // line 80
            echo "                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "register?giftId=";
            echo twig_escape_filter($this->env, ($context["giftId"] ?? $this->getContext($context, "giftId")), "html", null, true);
            echo "\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    ";
        } elseif ((        // line 85
($context["ref"] ?? $this->getContext($context, "ref")) || ($context["ide"] ?? $this->getContext($context, "ide")))) {
            // line 86
            echo "                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "register?ref=";
            echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
            echo "&ide=";
            echo twig_escape_filter($this->env, ($context["ide"] ?? $this->getContext($context, "ide")), "html", null, true);
            echo "\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    ";
        } else {
            // line 92
            echo "                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "register\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    ";
        }
        // line 98
        echo "                    ";
        if ((($context["hapitasStatus"] ?? $this->getContext($context, "hapitasStatus")) == 0)) {
            // line 99
            echo "                        <p class=\"caution_s\" style=\"text-align: center\">1月26日(木)1:00～5:00、ハピタスのメンテナンスにより、ハピタスアカウントでログインがご利用いただけません。</p>
                    ";
        }
        // line 101
        echo "
                </form>
            </div><!-- end loginbox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
";
        
        $__internal_9431d3d83d7b8b2bd7b193b987b7a46015586a2c4e15e7e67a260b8a2a55c766->leave($__internal_9431d3d83d7b8b2bd7b193b987b7a46015586a2c4e15e7e67a260b8a2a55c766_prof);

    }

    public function getTemplateName()
    {
        return "auth/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 107,  221 => 106,  214 => 101,  210 => 99,  207 => 98,  200 => 94,  196 => 92,  185 => 88,  181 => 86,  179 => 85,  171 => 82,  167 => 80,  165 => 79,  159 => 76,  119 => 38,  113 => 35,  110 => 34,  100 => 31,  97 => 30,  95 => 29,  88 => 27,  85 => 26,  83 => 25,  76 => 21,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <script src=\"{{ asset('bundles/framework/jsc/auth-login1.js') }}\"></script>
    <h2>ログイン</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"loginbox\">
                <form accept-charset=\"UTF-8\" action=\"/auth/logindo\" id=\"login_form\" name=\"login_form\" method=\"post\">
                    <input type=\"hidden\" name=\"giftId\" value=\"{{ giftId }}\">
                    <input type=\"hidden\" id=\"ref\" name=\"ref\" value=\"{{ ref }}\">
                    <input type=\"hidden\" id=\"ide\" name=\"ide\" value=\"{{ ide }}\">
                    <input type=\"hidden\" id=\"loginAddress\" name=\"loginAddress\" value=\"{{ loginAddress }}\">
                    <input type=\"hidden\"id=\"zoto_url\" name=\"zoto_url\" value=\"{{ zotoUrl }}\">

                    <div class=\"aboutborderbtn\"></div>
                    <h6>外部アカウントを使ってログイン</h6>
                    <div id=\"btnwrap\">
                        <div class=\"social_login\">
                            <div class=\"fb_login_btn\">
                                <p><a href=\"{{ zotoUrl }}login/social?provider=facebook\">Facebookアカウントでログイン</a></p>
                            </div>
                        </div>
                    </div>
                    {% if giftId %}
                        <div class=\"yellowbtn\">
                            <p><a href=\"{{ zotoUrl }}auth/hapitas_login?giftId={{ giftId }}\">ハピタスアカウントでログイン</a></p>
                        </div>
                    {% elseif ref or ide %}
                        <div class=\"yellowbtn\">
                            <p><a href=\"{{ zotoUrl }}auth/hapitas_login?ref={{ ref }}&ide={{ ide }}\">ハピタスアカウントでログイン</a></p>
                        </div>
                    {% else %}
                        <div class=\"yellowbtn\">
                            <p><a href=\"{{ zotoUrl }}auth/hapitas_login\">ハピタスアカウントでログイン</a></p>
                        </div>
                    {% endif %}
                    <div class=\"dotborder\"></div>
                    <h6>zotoアカウントを使ってログイン・登録</h6>
                    <div id=\"fortabledesign\">
                        <table>
                            <div id=\"login_error_msg\"></div>
                            <div id=\"mail_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> メールアドレスが空白です</p>
                            </div>
                            <div id=\"mail_type_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> メールアドレスの入力形式が間違っています</p>
                            </div>
                            <div id=\"password_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードが空白です</p>
                            </div>
                            <div id=\"password_match_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードに使えない文字が含まれています</p>
                            </div>
                            <div id=\"password_length_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードには最低8文字入力してください</p>
                            </div>
                            <div id=\"password_max_length_error_msg\" style=\"display:none\">
                                <p class=\"caution_s\"> パスワードは16文字以内にしてください</p>
                            </div>
                            <tr>
                                <td>
                                    メールアドレス
                                    <input id=\"account_name\" name=\"mail\" type=\"text\"></td>
                            </tr>
                            <tr>
                                <td>
                                    パスワード(8～16文字で入力してください)
                                    <input id=\"account_password\" name=\"password\" type=\"password\"></td>
                            </tr>
                        </table>
                    </div><!-- end fortabledesign -->
                <div class=\"orangebtn\">
                    <p><a id=\"check_form\" href=\"javascript:void(0)\">ログイン</a></p>
                </div>
                <p id=\"caution\"><a href=\"{{ zotoUrl }}auth/password\" style=\"text-decoration: underline\">パスワードを忘れた方はこちら</a></p>


                    {% if giftId %}
                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"{{ zotoUrl }}register?giftId={{ giftId }}\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    {% elseif ref or ide%}
                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"{{ zotoUrl }}register?ref={{ ref }}&ide={{ ide }}\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    {% else %}
                        <div id=\"btnwrap\">
                            <div class=\"orangebtn\">
                                <p><a href=\"{{ zotoUrl }}register\">新規会員登録はこちら</a></p>
                            </div>
                        </div>
                    {% endif %}
                    {% if hapitasStatus == 0 %}
                        <p class=\"caution_s\" style=\"text-align: center\">1月26日(木)1:00～5:00、ハピタスのメンテナンスにより、ハピタスアカウントでログインがご利用いただけません。</p>
                    {% endif %}

                </form>
            </div><!-- end loginbox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"{{ zotoUrl }}faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"{{ zotoUrl }}inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
{% endblock %}", "auth/index.html.twig", "/var/www/zoto/waikiki/app/Resources/views/auth/index.html.twig");
    }
}
