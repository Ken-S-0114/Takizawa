<?php

/* mypage/index.html.twig */
class __TwigTemplate_05d99b0b5259483e866393b21f249f41ef00114573db4256331f2c35bb745c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mypage/index.html.twig", 1);
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
        $__internal_43e8c8457fb2f58821957237b4e12fb4317a8f3ba0aa687c87edf20d372bdf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e8c8457fb2f58821957237b4e12fb4317a8f3ba0aa687c87edf20d372bdf64->enter($__internal_43e8c8457fb2f58821957237b4e12fb4317a8f3ba0aa687c87edf20d372bdf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mypage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e8c8457fb2f58821957237b4e12fb4317a8f3ba0aa687c87edf20d372bdf64->leave($__internal_43e8c8457fb2f58821957237b4e12fb4317a8f3ba0aa687c87edf20d372bdf64_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a7688496ed51bdadd2b05ee6ab6c6f927151ca52da96d0ed7f0a73c26f02f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a7688496ed51bdadd2b05ee6ab6c6f927151ca52da96d0ed7f0a73c26f02f0->enter($__internal_21a7688496ed51bdadd2b05ee6ab6c6f927151ca52da96d0ed7f0a73c26f02f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>マイページ</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"mypagebox\">
                <table class=\"states\">
                    <tr>
                        ";
        // line 10
        if (((($context["nickname"] ?? $this->getContext($context, "nickname")) == "") && (($context["email"] ?? $this->getContext($context, "email")) == ""))) {
            // line 11
            echo "                            <p class=\"caution_center\" ><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "mypage/edit\" style=\"text-decoration: underline\">メールアドレス・お名前をご登録</a>いただくとギフトカード作成の際に入力する手間を省くことができます</p>
                        ";
        } elseif (((        // line 12
($context["email"] ?? $this->getContext($context, "email")) == "") && (($context["nickname"] ?? $this->getContext($context, "nickname")) != ""))) {
            // line 13
            echo "                            <p class=\"caution_center\" ><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "mypage/edit\" style=\"text-decoration: underline\">メールアドレスをご登録</a>いただくとギフトカード作成の際に入力する手間を省くことができます</p>
                        ";
        } elseif (((        // line 14
($context["email"] ?? $this->getContext($context, "email")) != "") && (($context["nickname"] ?? $this->getContext($context, "nickname")) == ""))) {
            // line 15
            echo "                            <p class=\"caution_center\" ><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "mypage/edit\" style=\"text-decoration: underline\">お名前をご登録</a>いただくと、ギフトカード作成の際に入力する手間を省くことができます</p>
                        ";
        }
        // line 17
        echo "                        <th>登録者名</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, ($context["nickname"] ?? $this->getContext($context, "nickname")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "</td>
                    </tr>
                </table>
                <div id=\"mypagemenubox\">
                    <ul>
                        <li id=\"myinfo\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage/edit\"><span>登録情報</span></a></li>
                        <li id=\"mygift\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage/inbox\"><span>もらったギフト</span></a></li>
                        <li id=\"myhistory\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage/sent\"><span>購入履歴</span></a></li>
                        <li id=\"mycard\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage/credit\"><span>カード情報</span></a></li>
                        ";
        // line 31
        if ((($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) == 0)) {
            // line 32
            echo "                            <li id=\"mymessage\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "message\"><span>メッセージ</span></a></li>
                        ";
        } else {
            // line 34
            echo "                            <li id=\"mymessage\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "message\"><span>メッセージ</span><div id=\"badge_mypage\">";
            echo twig_escape_filter($this->env, ($context["unReadCount"] ?? $this->getContext($context, "unReadCount")), "html", null, true);
            echo "</div></a></li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </div><!-- end mypagemenubox -->
                <p class=\"txtlink\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "mypage/withdrawal\">退会する</a></p>
                <h6>アカウント連携</h6>
                ";
        // line 40
        if (($context["hapitasCooperated"] ?? $this->getContext($context, "hapitasCooperated"))) {
            // line 41
            echo "                    <div class=\"graybtn\">
                        <p>ハピタス連携済み</p>
                    </div>
                ";
        } else {
            // line 45
            echo "                <div class=\"yellowbtn\">
                    <p><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "mypage/hapitas/cooperation\">ハピタスアカウント</a></p>
                </div>
                ";
        }
        // line 49
        echo "                ";
        if (($context["facebookCooperated"] ?? $this->getContext($context, "facebookCooperated"))) {
            // line 50
            echo "                    <div class=\"graybtn\">
                        <p>Facebook連携済み</p>
                    </div>
                ";
        } else {
            // line 54
            echo "                    <div class=\"social_login\">
                        <div class=\"fb_login_btn\">
                            <p><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "login/social?provider=facebook_cooperation\">Facebookアカウント</a></p>
                        </div>
                    </div>
                ";
        }
        // line 60
        echo "                ";
        if ((($context["sqSetFlg"] ?? $this->getContext($context, "sqSetFlg")) != 1)) {
            // line 61
            echo "                    <h6>携帯電話認証</h6>
                    <div id=\"cardinfobox3\">
                    ";
            // line 63
            if (($context["smsAuthFlg"] ?? $this->getContext($context, "smsAuthFlg"))) {
                // line 64
                echo "                        <div class=\"graybtn\">
                            <p>認証済み</p>
                        </div>
                    ";
            } else {
                // line 68
                echo "                        <p class=\"sms_text\">ご本人様確認のため、携帯電話番号を登録します。<br>SMSが利用可能な携帯電話番号で認証を行ってください。</p>
                        <div class=\"orangebtn\">
                            <p><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "mypage/sms/auth\">認証ページに進む</a></p>
                        </div>
                        <p class=\"sms_text_resend\">※ご本人様確認以外の目的でお客様の電話番号を使用することは一切ございません。</p>
                    ";
            }
            // line 74
            echo "                    </div>
                ";
        }
        // line 76
        echo "
                <h6>お知らせ</h6>
                ";
        // line 78
        if ((twig_length_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications"))) > 0)) {
            // line 79
            echo "                    <div class=\"important_news\">
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 81
                echo "                            <p><a href=\"/notification/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "title", array()), "html", null, true);
                echo "</a></p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    </div>
                ";
        }
        // line 85
        echo "            </div><!-- end mypagebox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->


";
        
        $__internal_21a7688496ed51bdadd2b05ee6ab6c6f927151ca52da96d0ed7f0a73c26f02f0->leave($__internal_21a7688496ed51bdadd2b05ee6ab6c6f927151ca52da96d0ed7f0a73c26f02f0_prof);

    }

    public function getTemplateName()
    {
        return "mypage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 89,  229 => 88,  224 => 85,  220 => 83,  209 => 81,  205 => 80,  202 => 79,  200 => 78,  196 => 76,  192 => 74,  185 => 70,  181 => 68,  175 => 64,  173 => 63,  169 => 61,  166 => 60,  159 => 56,  155 => 54,  149 => 50,  146 => 49,  140 => 46,  137 => 45,  131 => 41,  129 => 40,  124 => 38,  120 => 36,  112 => 34,  106 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  80 => 22,  73 => 18,  70 => 17,  64 => 15,  62 => 14,  57 => 13,  55 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2>マイページ</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"mypagebox\">
                <table class=\"states\">
                    <tr>
                        {% if nickname == '' and  email == '' %}
                            <p class=\"caution_center\" ><a href=\"{{ zotoUrl }}mypage/edit\" style=\"text-decoration: underline\">メールアドレス・お名前をご登録</a>いただくとギフトカード作成の際に入力する手間を省くことができます</p>
                        {% elseif email == '' and nickname != '' %}
                            <p class=\"caution_center\" ><a href=\"{{ zotoUrl }}mypage/edit\" style=\"text-decoration: underline\">メールアドレスをご登録</a>いただくとギフトカード作成の際に入力する手間を省くことができます</p>
                        {% elseif  email != '' and nickname == '' %}
                            <p class=\"caution_center\" ><a href=\"{{ zotoUrl }}mypage/edit\" style=\"text-decoration: underline\">お名前をご登録</a>いただくと、ギフトカード作成の際に入力する手間を省くことができます</p>
                        {% endif %}
                        <th>登録者名</th>
                        <td>{{ nickname }}</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ email }}</td>
                    </tr>
                </table>
                <div id=\"mypagemenubox\">
                    <ul>
                        <li id=\"myinfo\"><a href=\"{{ zotoUrl }}mypage/edit\"><span>登録情報</span></a></li>
                        <li id=\"mygift\"><a href=\"{{ zotoUrl }}mypage/inbox\"><span>もらったギフト</span></a></li>
                        <li id=\"myhistory\"><a href=\"{{ zotoUrl }}mypage/sent\"><span>購入履歴</span></a></li>
                        <li id=\"mycard\"><a href=\"{{ zotoUrl }}mypage/credit\"><span>カード情報</span></a></li>
                        {% if unReadCount == 0 %}
                            <li id=\"mymessage\"><a href=\"{{ zotoUrl }}message\"><span>メッセージ</span></a></li>
                        {% else %}
                            <li id=\"mymessage\"><a href=\"{{ zotoUrl }}message\"><span>メッセージ</span><div id=\"badge_mypage\">{{ unReadCount }}</div></a></li>
                        {% endif %}
                    </ul>
                </div><!-- end mypagemenubox -->
                <p class=\"txtlink\"><a href=\"{{ zotoUrl }}mypage/withdrawal\">退会する</a></p>
                <h6>アカウント連携</h6>
                {% if hapitasCooperated %}
                    <div class=\"graybtn\">
                        <p>ハピタス連携済み</p>
                    </div>
                {% else %}
                <div class=\"yellowbtn\">
                    <p><a href=\"{{ zotoUrl }}mypage/hapitas/cooperation\">ハピタスアカウント</a></p>
                </div>
                {% endif %}
                {% if facebookCooperated %}
                    <div class=\"graybtn\">
                        <p>Facebook連携済み</p>
                    </div>
                {% else %}
                    <div class=\"social_login\">
                        <div class=\"fb_login_btn\">
                            <p><a href=\"{{ zotoUrl }}login/social?provider=facebook_cooperation\">Facebookアカウント</a></p>
                        </div>
                    </div>
                {% endif %}
                {% if sqSetFlg != 1 %}
                    <h6>携帯電話認証</h6>
                    <div id=\"cardinfobox3\">
                    {% if smsAuthFlg %}
                        <div class=\"graybtn\">
                            <p>認証済み</p>
                        </div>
                    {% else %}
                        <p class=\"sms_text\">ご本人様確認のため、携帯電話番号を登録します。<br>SMSが利用可能な携帯電話番号で認証を行ってください。</p>
                        <div class=\"orangebtn\">
                            <p><a href=\"{{ zotoUrl }}mypage/sms/auth\">認証ページに進む</a></p>
                        </div>
                        <p class=\"sms_text_resend\">※ご本人様確認以外の目的でお客様の電話番号を使用することは一切ございません。</p>
                    {% endif %}
                    </div>
                {% endif %}

                <h6>お知らせ</h6>
                {% if notifications|length > 0 %}
                    <div class=\"important_news\">
                        {% for notification in notifications %}
                            <p><a href=\"/notification/{{ notification.id }}\">{{ notification.title }}</a></p>
                        {% endfor %}
                    </div>
                {% endif %}
            </div><!-- end mypagebox -->
            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"{{ zotoUrl }}faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"{{ zotoUrl }}inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->


{% endblock %}", "mypage/index.html.twig", "/var/www/zoto/waikiki/app/Resources/views/mypage/index.html.twig");
    }
}
