<?php

/* message/index.html.twig */
class __TwigTemplate_e9014ea28e3ba64fbb79b055f4466150a2181c9ef018817b9afd439534292e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/index.html.twig", 1);
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
        $__internal_b955f9e63112c968c39b4c7f2c74026bc3e37aba3257733ac2f95a0b4ff69e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b955f9e63112c968c39b4c7f2c74026bc3e37aba3257733ac2f95a0b4ff69e10->enter($__internal_b955f9e63112c968c39b4c7f2c74026bc3e37aba3257733ac2f95a0b4ff69e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b955f9e63112c968c39b4c7f2c74026bc3e37aba3257733ac2f95a0b4ff69e10->leave($__internal_b955f9e63112c968c39b4c7f2c74026bc3e37aba3257733ac2f95a0b4ff69e10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_284e7199d2e6f6d4ea083247d8a268b7689f517977fc8c1e5f25195677906913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284e7199d2e6f6d4ea083247d8a268b7689f517977fc8c1e5f25195677906913->enter($__internal_284e7199d2e6f6d4ea083247d8a268b7689f517977fc8c1e5f25195677906913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/message1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <h2>あなたにメッセージとギフトが届きました</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                <p id=\"cardimg\">
                    ";
        // line 10
        if ((($context["is_movie_card"] ?? $this->getContext($context, "is_movie_card")) == 1)) {
            // line 11
            echo "                        <video controls width=\"350\" height=\"350\" poster=\"";
            echo twig_escape_filter($this->env, ($context["subImageUrl"] ?? $this->getContext($context, "subImageUrl")), "html", null, true);
            echo "\"><source src=\"";
            echo twig_escape_filter($this->env, ($context["message_card_url"] ?? $this->getContext($context, "message_card_url")), "html", null, true);
            echo "\" type=\"video/mp4\" /></video>
                    ";
        } else {
            // line 13
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, ($context["message_card_url"] ?? $this->getContext($context, "message_card_url")), "html", null, true);
            echo "\" alt=\"\" width=\"350\" height=\"350\">
                    ";
        }
        // line 15
        echo "                </p>
                <input type=\"hidden\" name=\"endTime\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["limit_time"] ?? $this->getContext($context, "limit_time")), "html", null, true);
        echo "\">
                <p id=\"message\">";
        // line 17
        echo nl2br(twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true));
        echo "</p>
                <p id=\"username2\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["nickname"] ?? $this->getContext($context, "nickname")), "html", null, true);
        echo " より</p>
                <div id=\"gift4u\">
                    <h6>あなたに届いたギフト</h6>
                    <div class=\"itembox_one\">
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gift_detail"] ?? $this->getContext($context, "gift_detail")), "image", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gift_detail"] ?? $this->getContext($context, "gift_detail")), "title", array()), "html", null, true);
        echo "\" width=\"206\" height=\"206\">
                        <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gift_detail"] ?? $this->getContext($context, "gift_detail")), "btitle", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gift_detail"] ?? $this->getContext($context, "gift_detail")), "title", array()), "html", null, true);
        echo "</h5>
                        <p class=\"price\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gift_detail"] ?? $this->getContext($context, "gift_detail")), "price", array()), "html", null, true);
        echo "円</p>
                        <h4>有効期限日</h4>
                        <p class=\"limit\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["expiresAt"] ?? $this->getContext($context, "expiresAt")), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div id=\"orangebox\">
                    ";
        // line 31
        if (($context["thankYouBtnDisplayFlg"] ?? $this->getContext($context, "thankYouBtnDisplayFlg"))) {
            // line 32
            echo "                        <div class=\"orangebtn\">
                            <p><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "thankyou/";
            echo twig_escape_filter($this->env, ($context["sendMemberId"] ?? $this->getContext($context, "sendMemberId")), "html", null, true);
            echo "/1\" target=\"_blank\">サンキュー</a></p>
                        </div>
                    ";
        }
        // line 36
        echo "                    <div class=\"orangebtn\">
                        <p><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["ticket_url"] ?? $this->getContext($context, "ticket_url")), "html", null, true);
        echo "\" target=\"_blank\">届いたギフトをみる</a></p>
                    </div>
                    ";
        // line 39
        if ((($context["saveBtnFlg"] ?? $this->getContext($context, "saveBtnFlg")) == 1)) {
            // line 40
            echo "                    <div id=\"save_gift_msg\" style=\"text-align: center\"></div>
                    ";
        }
        // line 42
        echo "                    <div class=\"orangebtn2\">
                        ";
        // line 43
        if ((($context["saveBtnFlg"] ?? $this->getContext($context, "saveBtnFlg")) == 1)) {
            // line 44
            echo "                            ";
            if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
                // line 45
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "save/ticket/";
                echo twig_escape_filter($this->env, ($context["rand_id"] ?? $this->getContext($context, "rand_id")), "html", null, true);
                echo "\"><p id=\"btn_text\">ギフトを保存する</p></a>
                            ";
            } else {
                // line 47
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "save/ticket/";
                echo twig_escape_filter($this->env, ($context["rand_id"] ?? $this->getContext($context, "rand_id")), "html", null, true);
                echo "\"><p id=\"btn_text\">ギフトを保存 (ログイン/会員登録)</p></a>
                            ";
            }
            // line 49
            echo "                        ";
        } else {
            // line 50
            echo "\t\t\t\t\t\t\t";
            if ((($context["saveBtnFlg"] ?? $this->getContext($context, "saveBtnFlg")) == 0)) {
                // line 51
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "mypage/inbox\"><p id=\"btn_text\">もらったギフト一覧へ</p></a>
                            ";
            }
            // line 53
            echo "                        ";
        }
        // line 54
        echo "                    </div>

                    ";
        // line 56
        if ((($context["saveBtnFlg"] ?? $this->getContext($context, "saveBtnFlg")) == 2)) {
            // line 57
            echo "                        <div style=\"text-align: center\">
                        <p id=\"abouttxt\">このギフトはお客様自身が購入されたものです。</p>
                        </div>
                    ";
        }
        // line 61
        echo "
                    ";
        // line 62
        if (((($context["login"] ?? $this->getContext($context, "login")) == 1) && (($context["isMyTicket"] ?? $this->getContext($context, "isMyTicket")) == 1))) {
            // line 63
            echo "                        ";
            if ((($context["isUsed"] ?? $this->getContext($context, "isUsed")) == 0)) {
                // line 64
                echo "                            <div class=\"orangebtn2\">
                                <p><a href=\"#openDialog\">利用済みにする</a></p>
                            </div>
                        ";
            } else {
                // line 68
                echo "                            <div class=\"orangebtn2\">
                                <p><a href=\"#openDialogUnused\">未利用にする</a></p>
                            </div>
                        ";
            }
            // line 72
            echo "                    ";
        }
        // line 73
        echo "                </div>

                 ";
        // line 75
        if ((($context["campaign_flg"] ?? $this->getContext($context, "campaign_flg")) != 0)) {
            // line 76
            echo "                    <div id=\"cardbox_sp\" style=\"margin-bottom: 10px\">
                        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "campaign/3\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/valentines2017/banner-640-270.jpg"), "html", null, true);
            echo "\" alt=\"close\" width=\"100%\"></a>
                    </div>
                    <div id=\"cardbox_pc\">
                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "campaign/3\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/valentines2017/banner-640-270.jpg"), "html", null, true);
            echo "\" alt=\"close\" width=\"100%\"></a>
                    </div>
                 ";
        }
        // line 83
        echo "
                <h6>zotoとは？</h6>
                <p id=\"abouttxt\">
                    「zoto(ゾートー)」は、日頃の「ありがとう」や「おめでとう」の気持ちに手頃なギフトを添えて、メールやSNSで気軽に贈れるサービスです。
                </p>
                <div class=\"borderbtn\">
                    <p><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "about\">もっと詳しく</a></p>
                </div>

            </div><!-- end messagebox -->

            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
    <div id=\"openDialog\" class=\"usedDialog\">
        <div id=\"mypagebox\">
            <h1>ギフトを利用済みにしますか？</h1>
            <div class=\"usedMsg\">※もとに戻すことができます。</div>
            <div class=\"orangeUsedbtn\">
                <p><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "used/ticket/1/";
        echo twig_escape_filter($this->env, ($context["rand_id"] ?? $this->getContext($context, "rand_id")), "html", null, true);
        echo "\">利用済みにする</a></p>
            </div>
            <div class=\"borderUsedbtn\">
                <p><a href=\"#close\">戻る</a></p>
            </div>
        </div>
    </div>
    <div id=\"openDialogUnused\" class=\"usedDialog\">
        <div id=\"mypagebox\">
            <h1 >ギフトを未利用にしますか？</h1>
            <div class=\"orangeUsedbtn\">
                <p><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "used/ticket/0/";
        echo twig_escape_filter($this->env, ($context["rand_id"] ?? $this->getContext($context, "rand_id")), "html", null, true);
        echo "\">未利用にする</a></p>
            </div>
            <div class=\"borderUsedbtn\">
                <p><a href=\"#close\">戻る</a></p>
            </div>
        </div>
    </div>
";
        
        $__internal_284e7199d2e6f6d4ea083247d8a268b7689f517977fc8c1e5f25195677906913->leave($__internal_284e7199d2e6f6d4ea083247d8a268b7689f517977fc8c1e5f25195677906913_prof);

    }

    public function getTemplateName()
    {
        return "message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 119,  272 => 108,  258 => 97,  254 => 96,  244 => 89,  236 => 83,  228 => 80,  220 => 77,  217 => 76,  215 => 75,  211 => 73,  208 => 72,  202 => 68,  196 => 64,  193 => 63,  191 => 62,  188 => 61,  182 => 57,  180 => 56,  176 => 54,  173 => 53,  167 => 51,  164 => 50,  161 => 49,  153 => 47,  145 => 45,  142 => 44,  140 => 43,  137 => 42,  133 => 40,  131 => 39,  126 => 37,  123 => 36,  115 => 33,  112 => 32,  110 => 31,  103 => 27,  98 => 25,  94 => 24,  90 => 23,  84 => 22,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  60 => 13,  52 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <link href=\"{{ asset('bundles/framework/css/message1.css') }}\" rel=\"stylesheet\">
    <h2>あなたにメッセージとギフトが届きました</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div id=\"messagebox\">
                <p id=\"cardimg\">
                    {% if is_movie_card == 1 %}
                        <video controls width=\"350\" height=\"350\" poster=\"{{ subImageUrl }}\"><source src=\"{{ message_card_url }}\" type=\"video/mp4\" /></video>
                    {% else %}
                        <img src=\"{{ message_card_url }}\" alt=\"\" width=\"350\" height=\"350\">
                    {% endif %}
                </p>
                <input type=\"hidden\" name=\"endTime\" value=\"{{ limit_time }}\">
                <p id=\"message\">{{ msg|nl2br }}</p>
                <p id=\"username2\">{{ nickname }} より</p>
                <div id=\"gift4u\">
                    <h6>あなたに届いたギフト</h6>
                    <div class=\"itembox_one\">
                        <img src=\"{{ gift_detail.image }}\" alt=\"{{ gift_detail.title  }}\" width=\"206\" height=\"206\">
                        <h4>{{ gift_detail.btitle  }}</h4>
                        <h5>{{ gift_detail.title  }}</h5>
                        <p class=\"price\">{{ gift_detail.price  }}円</p>
                        <h4>有効期限日</h4>
                        <p class=\"limit\">{{ expiresAt }}</p>
                    </div>
                </div>
                <div id=\"orangebox\">
                    {% if thankYouBtnDisplayFlg %}
                        <div class=\"orangebtn\">
                            <p><a href=\"{{ zotoUrl }}thankyou/{{ sendMemberId }}/1\" target=\"_blank\">サンキュー</a></p>
                        </div>
                    {% endif %}
                    <div class=\"orangebtn\">
                        <p><a href=\"{{ ticket_url }}\" target=\"_blank\">届いたギフトをみる</a></p>
                    </div>
                    {% if saveBtnFlg == 1 %}
                    <div id=\"save_gift_msg\" style=\"text-align: center\"></div>
                    {% endif %}
                    <div class=\"orangebtn2\">
                        {% if saveBtnFlg == 1 %}
                            {% if login == true %}
                                <a href=\"{{ zotoUrl }}save/ticket/{{ rand_id }}\"><p id=\"btn_text\">ギフトを保存する</p></a>
                            {% else %}
                                <a href=\"{{ zotoUrl }}save/ticket/{{ rand_id }}\"><p id=\"btn_text\">ギフトを保存 (ログイン/会員登録)</p></a>
                            {% endif %}
                        {% else %}
\t\t\t\t\t\t\t{% if saveBtnFlg == 0 %}
                            <a href=\"{{ zotoUrl }}mypage/inbox\"><p id=\"btn_text\">もらったギフト一覧へ</p></a>
                            {% endif %}
                        {% endif %}
                    </div>

                    {% if saveBtnFlg == 2 %}
                        <div style=\"text-align: center\">
                        <p id=\"abouttxt\">このギフトはお客様自身が購入されたものです。</p>
                        </div>
                    {% endif %}

                    {% if login == 1 and isMyTicket == 1 %}
                        {% if isUsed == 0 %}
                            <div class=\"orangebtn2\">
                                <p><a href=\"#openDialog\">利用済みにする</a></p>
                            </div>
                        {% else %}
                            <div class=\"orangebtn2\">
                                <p><a href=\"#openDialogUnused\">未利用にする</a></p>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>

                 {% if campaign_flg != 0 %}
                    <div id=\"cardbox_sp\" style=\"margin-bottom: 10px\">
                        <a href=\"{{ zotoUrl }}campaign/3\"><img src=\"{{ asset('bundles/framework/img/valentines2017/banner-640-270.jpg') }}\" alt=\"close\" width=\"100%\"></a>
                    </div>
                    <div id=\"cardbox_pc\">
                        <a href=\"{{ zotoUrl }}campaign/3\"><img src=\"{{ asset('bundles/framework/img/valentines2017/banner-640-270.jpg') }}\" alt=\"close\" width=\"100%\"></a>
                    </div>
                 {% endif %}

                <h6>zotoとは？</h6>
                <p id=\"abouttxt\">
                    「zoto(ゾートー)」は、日頃の「ありがとう」や「おめでとう」の気持ちに手頃なギフトを添えて、メールやSNSで気軽に贈れるサービスです。
                </p>
                <div class=\"borderbtn\">
                    <p><a href=\"{{ zotoUrl }}about\">もっと詳しく</a></p>
                </div>

            </div><!-- end messagebox -->

            <div id=\"footerbannerbox\">
                <ul>
                    <li id=\"questionbanner\"><a href=\"{{ zotoUrl }}faq\"><span>よくあるご質問</span></a></li>
                    <li id=\"contactbanner\"><a href=\"{{ zotoUrl }}inquiry\"><span>お問い合わせ</span></a></li>
                </ul>
            </div>

        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
    <div id=\"openDialog\" class=\"usedDialog\">
        <div id=\"mypagebox\">
            <h1>ギフトを利用済みにしますか？</h1>
            <div class=\"usedMsg\">※もとに戻すことができます。</div>
            <div class=\"orangeUsedbtn\">
                <p><a href=\"{{ zotoUrl }}used/ticket/1/{{ rand_id }}\">利用済みにする</a></p>
            </div>
            <div class=\"borderUsedbtn\">
                <p><a href=\"#close\">戻る</a></p>
            </div>
        </div>
    </div>
    <div id=\"openDialogUnused\" class=\"usedDialog\">
        <div id=\"mypagebox\">
            <h1 >ギフトを未利用にしますか？</h1>
            <div class=\"orangeUsedbtn\">
                <p><a href=\"{{ zotoUrl }}used/ticket/0/{{ rand_id }}\">未利用にする</a></p>
            </div>
            <div class=\"borderUsedbtn\">
                <p><a href=\"#close\">戻る</a></p>
            </div>
        </div>
    </div>
{% endblock %}", "message/index.html.twig", "/var/www/zoto/waikiki/app/Resources/views/message/index.html.twig");
    }
}
