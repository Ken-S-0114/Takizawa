<?php

/* base.html.twig */
class __TwigTemplate_b879d6a5dc707cd1b7644e3bb079d1af2d5c347f7a5fe3b9c2e329fc4567740f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'fornavspace' => array($this, 'block_fornavspace'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e36880b78085a23b10c610f3b8a308c9a38f8849b6bad6bf3b61c8fb44d6b35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36880b78085a23b10c610f3b8a308c9a38f8849b6bad6bf3b61c8fb44d6b35b->enter($__internal_e36880b78085a23b10c610f3b8a308c9a38f8849b6bad6bf3b61c8fb44d6b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["time"] = ((array_key_exists("time", $context)) ? (_twig_default_filter(($context["time"] ?? $this->getContext($context, "time")), "?test")) : ("?test"));
        // line 3
        echo "<html lang=\"ja\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async></script>
    <script>
        var OneSignal = window.OneSignal || [];

        OneSignal.push([\"init\", {
            appId: \"929fb4cb-38a0-456a-8596-984eea5fde8b\",
            autoRegister: false, /* Set to true to automatically prompt visitors */
//            subdomainName: 'sakuma',
            /*
             subdomainName: Use the value you entered in step 1.4: http://imgur.com/a/f6hqN
             */
            httpPermissionRequest: {
                enable: true
            },
            allowLocalhostAsSecureOrigin: true,
            notifyButton: {
                enable: false /* Set to false to hide */
            },
            welcomeNotification: {
                disable: true // 最初の登録完了自動通知を無効化
            },
            safari_web_id: 'web.onesignal.auto.19aac151-6a52-4f31-b603-0bf7908b06b4',
            promptOptions: {
                /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
                /* actionMessage limited to 90 characters */
//                actionMessage: \"We'd like to show you notifications for the latest news and updates.\",
                actionMessage: \"zotoからイベントやお得情報をプッシュ通知で配信します。\",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: \"許可\",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: \"許可しない\"
            }

        }]);

        OneSignal.push([\"getNotificationPermission\", function(permission) {

            // (Output) Site Notification Permission: default
            //default 通知許諾表示
            //granted 通知許諾済み
            //denied  通知拒絶

            if('default' == permission) {
//                callCustomPermissionMessage()
                callDefaultPermissionMessage()
            }
        }]);



        function callCustomPermissionMessage() {
            deleteCookie();
            OneSignal.push(function() {
                OneSignal.showHttpPrompt();
            });
        }

        function callDefaultPermissionMessage() {
            OneSignal.push(function() {
                OneSignal.registerForPushNotifications();
            });

            OneSignal.push(function() {
                OneSignal.registerForPushNotifications({
                    modalPrompt: true
                });
            });
        }

        function deleteCookie() {
            var cookieName = 'onesignal-notification-prompt';
                document.cookie = cookieName+\"=; max-age=0\";
        }

    </script>
    <meta content=\"text/html; charset=UTF-8\" http-equiv=\"Content-Type\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta charset=\"utf-8\">
    <meta property=\"og:url\" content=\"http://zoto.gift\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"zoto/ゾートー\" />
    <meta property=\"og:description\" content=\"LINEやメールですぐに贈れるギフトサービス\" />
    <meta property=\"og:image\" content=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "facebook.jpg\" />
    <meta property=\"og:site_name\" content=\"zoto/ゾートー\" />
    <meta property=\"fb:app_id\" content=\"151276935345279\" />
    <TITLE>zoto（ゾートー）|LINEやメールですぐに贈れるソーシャルギフトサービス</TITLE>
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@zoto\" />
    <meta name=\"twitter:title\" content=\"zoto/ゾートー\" />
    <meta name=\"twitter:description\" content=\"LINEやメールですぐに贈れるギフトサービス\" />
    <meta name=\"twitter:image\" content=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "topimg.jpg\" />
    <meta name=\"twitter:url\" content=\"http://zoto.gift\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0\">
    <meta name=\"Keywords\" content=\"ギフト,ソーシャルギフト,e-ギフト,スターバックスギフト,プレゼント\" />
    <meta name=\"Description\" content =\"zoto（ゾートー）はコーヒーやコンビニスイーツなど100円から購入できる商品をメッセージカードに添えて、LINEやメールで友人や家族にすぐに送ることができるソーシャルギフトサービスです。\" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NVMLPM');</script>
    <!-- End Google Tag Manager -->
    <meta name=\"apple-mobile-web-app-title\" content=\"zoto\" />
    <link rel=\"apple-touch-icon\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-144.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-152.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"305x305\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-305.png\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "favicon.ico\" />
    <link rel=\"mask-icon\" href=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "favicon.svg\">
    <link rel=\"icon\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-144.png\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-152.png\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"305x305\" href=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "apple-touch-icon-305.png\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <link href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/common71.css"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/member_auth31.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/others59.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/flow59.css"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/jsc/pagetop-fp1-fp2.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            \$(\"#spnavbtn\").click(function() {
                \$(\"#overlay\").fadeIn();
            });
            \$(\"#close\").click(function() {
                \$(\"#overlay\").fadeOut();
            });
        });
        \$(function() {
            \$(\"#previewbtn\").click(function() {
                \$(\"#previewbox\").fadeIn();
            });
            \$(\"#closebtn\").click(function() {
                \$(\"#previewbox\").fadeOut();
            });
            \$(\"#closebtn_v\").click(function() {
                \$(\"#previewbox\").fadeOut();
            });
        });
        function gift_prev() {
            \$(\"#previewbtn\").click(function() {
                var prv = \$(\"input[name='card_img_id']:checked\").attr('id');
                var index = \$(\"input[name='card_img_id']:checked\").val();
                var splitName = prv.replace( /_[0-9]{2}/ , \"\" );
                if ('movie' == splitName) {
                    var video = document.getElementById('mov_img_url_'+index);
                    preview_movie(video.currentSrc, video.poster);
                }
                else {
                    var card = document.getElementById('card_'+index);
                    var cardimgUrl = card.find('img').src;
                    preview_card(cardimgUrl);
                }
                \$(\"#previewbox\").fadeIn();
            });
        }
        function tab_click(args){
            if(args == 'list_li'){
                \$('div#itemlistbox1').show();
                \$('div#itemlistbox_rank').hide();
                \$('li#list_li').addClass('on')
                \$('li#ranking_li').removeClass('on');

            }else{
                \$('div#itemlistbox1').hide();
                \$('div#itemlistbox_rank').show();
                \$('li#ranking_li').addClass('on')
                \$('li#list_li').removeClass('on');
            }
        }
    </script>
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-NVMLPM\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id=\"fb-root\"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '151276935345279',
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/ja_JP/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


</script>
<div id=\"forbgcol\">
<div id=\"sidebar\">
    ";
        // line 210
        $this->displayBlock('sidebar', $context, $blocks);
        // line 323
        echo "</div>
";
        // line 324
        $this->displayBlock('fornavspace', $context, $blocks);
        // line 337
        echo "
<div id=\"content\">
    ";
        // line 339
        $this->displayBlock('body', $context, $blocks);
        // line 340
        echo "</div>

    <div id=\"footer\">
    ";
        // line 343
        $this->displayBlock('footer', $context, $blocks);
        // line 364
        echo "    </div>
<p id=\"pagetop\"><a href=\"#\"><img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/icon_pagetop_sp.png"), "html", null, true);
        echo "\" alt=\"pagetop\" width=\"80\" height=\"80\"></a></p>
</div><!-- end forbgcol -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 5,
        freeMode: true
    });
</script>
</body>
</html>";
        
        $__internal_e36880b78085a23b10c610f3b8a308c9a38f8849b6bad6bf3b61c8fb44d6b35b->leave($__internal_e36880b78085a23b10c610f3b8a308c9a38f8849b6bad6bf3b61c8fb44d6b35b_prof);

    }

    // line 210
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_58d4ac5d678bc20040984ae29b39153858e5dc1926a948223c9b017227603e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d4ac5d678bc20040984ae29b39153858e5dc1926a948223c9b017227603e44->enter($__internal_58d4ac5d678bc20040984ae29b39153858e5dc1926a948223c9b017227603e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 211
        echo "        <header>
            ";
        // line 212
        if ((((array_key_exists("sqSetFlg", $context) && array_key_exists("smsAuthFlg", $context)) && array_key_exists("isPaymentPage", $context)) && array_key_exists("normalSmsFlg", $context))) {
            // line 213
            echo "                ";
            if ((($context["login"] ?? $this->getContext($context, "login")) == 1)) {
                // line 214
                echo "                    ";
                if ((($context["isPaymentPage"] ?? $this->getContext($context, "isPaymentPage")) == 0)) {
                    // line 215
                    echo "                        ";
                    if ((($context["sqSetFlg"] ?? $this->getContext($context, "sqSetFlg")) != 1)) {
                        // line 216
                        echo "                            ";
                        if ((($context["smsAuthFlg"] ?? $this->getContext($context, "smsAuthFlg")) != 1)) {
                            // line 217
                            echo "                                <div class=\"sms_attention\">
                                    <a href=\"";
                            // line 218
                            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                            echo "mypage/sms/auth\">
                                        <div class=\"sms_attention_box\">
                                            ";
                            // line 220
                            if ((($context["normalSmsFlg"] ?? $this->getContext($context, "normalSmsFlg")) == 1)) {
                                // line 221
                                echo "                                                <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/icon_sms.png"), "html", null, true);
                                echo "\" alt=\"セキュリティアイコン\" width=\"20\" height=\"20\"> セキュリティ強化のため、ご本人様確認をお願いします。<span class=\"sms_attention_btn\">詳しく見る</span>
                                            ";
                            } else {
                                // line 223
                                echo "                                                <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/icon_sms.png"), "html", null, true);
                                echo "\" alt=\"セキュリティアイコン\" width=\"20\" height=\"20\"> 電話認証して、無料ギフトがもらえる。<span class=\"sms_attention_btn\">詳しく見る</span>
                                            ";
                            }
                            // line 225
                            echo "                                        </div>
                                    </a>
                                </div>
                            ";
                        }
                        // line 229
                        echo "                        ";
                    }
                    // line 230
                    echo "                    ";
                }
                // line 231
                echo "                ";
            }
            // line 232
            echo "            ";
        }
        // line 233
        echo "
            ";
        // line 234
        $context["login"] = ((array_key_exists("login", $context)) ? (_twig_default_filter(($context["login"] ?? $this->getContext($context, "login")), false)) : (false));
        // line 235
        echo "            <div id=\"header_inner\">
                <div id=\"spnavbox\" style=\"position: relative;\">
                    <div id=\"spnavbtn\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/menubutton.png"), "html", null, true);
        echo "\" alt=\"メニューアイコン\" width=\"38\" height=\"38\"></div>
                    ";
        // line 238
        if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
            // line 239
            echo "                        ";
            if ((array_key_exists("unReadCount", $context) && (($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) > 0))) {
                // line 240
                echo "                            <span id=\"badge_sp\">";
                echo twig_escape_filter($this->env, ($context["unReadCount"] ?? $this->getContext($context, "unReadCount")), "html", null, true);
                echo "</span>
                        ";
            }
            // line 242
            echo "                    ";
        }
        // line 243
        echo "                    <div id=\"spnav\">
                        <nav id=\"overlay\">
                            <p id=\"close\"><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/menubutton_over.png"), "html", null, true);
        echo "\" alt=\"close\" width=\"38\" height=\"38\"></p>
                            <ul>
                                <li><a href=\"";
        // line 247
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">TOP</a></li>
                                ";
        // line 248
        if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
            // line 249
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "mypage\">マイページ</a></li>
                                ";
        }
        // line 251
        echo "                                <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "gifts\">ギフトを探す</a></li>
                                ";
        // line 252
        if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
            // line 253
            echo "                                    ";
            if ((array_key_exists("unReadCount", $context) && (($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) > 0))) {
                // line 254
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "message\">メッセージ<span id=\"badge\">";
                echo twig_escape_filter($this->env, ($context["unReadCount"] ?? $this->getContext($context, "unReadCount")), "html", null, true);
                echo "</span></a></li>
                                    ";
            } else {
                // line 256
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "message\">メッセージ</a></li>
                                    ";
            }
            // line 258
            echo "                                ";
        }
        // line 259
        echo "                                <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "about\">zotoとは</a></li>
                                <li><a href=\"";
        // line 260
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\">よくあるご質問</a></li>
                                <li><a href=\"";
        // line 261
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\">お問い合わせ</a></li>
                                ";
        // line 262
        if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
            // line 263
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth/logout\">ログアウト</a></li>
                                ";
        }
        // line 265
        echo "                            </ul>
                        </nav>
                    </div><!-- end spnav -->
                </div><!-- end spnavbox -->
                <div id=\"logobox\">
                    <h1>
                        <a href=\"";
        // line 271
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\" id=\"pclogo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/logo.png"), "html", null, true);
        echo "\" alt=\"zoto\" width=\"114\" height=\"64\"></a>
                        <a href=\"";
        // line 272
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\" id=\"splogo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/logo_sp.png"), "html", null, true);
        echo "\" alt=\"zoto\" width=\"70\" height=\"25\"></a>
                    </h1>
                    <p>想ったときにすぐ届く。SNSで贈れるギフトサービス「zoto(ゾートー)」</p>
                    ";
        // line 275
        if ((($context["login"] ?? $this->getContext($context, "login")) == false)) {
            // line 276
            echo "                        <div id=\"header_right_sp\">
                            <p id=\"login_sp\"><a href=\"";
            // line 277
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth\">ログイン</a></p>
                        </div><!-- end header_right -->
                    ";
        }
        // line 280
        echo "                </div>

                ";
        // line 282
        if ((($context["login"] ?? $this->getContext($context, "login")) == false)) {
            // line 283
            echo "                    <div id=\"header_right_logout\">
                        <p id=\"login\"><a href=\"";
            // line 284
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "auth\">新規登録 / ログイン</a></p>
                    </div><!-- end header_right -->
                ";
        } else {
            // line 287
            echo "                    <div id=\"header_right\">
                        ";
            // line 288
            if ((array_key_exists("unReadCount", $context) && (($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) > 0))) {
                // line 289
                echo "                            <div id=\"icon_message_header\">
                                <a href=\"";
                // line 290
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "message\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/icon_message_header.png"), "html", null, true);
                echo "\" alt=\"メッセージ\" width=\"20\" height=\"14\">
                                    <p id=\"header_right_badge\">";
                // line 291
                echo twig_escape_filter($this->env, (((($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) > 0)) ? (($context["unReadCount"] ?? $this->getContext($context, "unReadCount"))) : ("")), "html", null, true);
                echo "</p></a>
                            </div><!-- end icon_message_header -->
                        ";
            }
            // line 294
            echo "                        <ul id=\"login_on\">
                            <li id=\"usericon\"><!--○○様-->
                                <ul>
                                    <li><a href=\"";
            // line 297
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "\">TOP</a></li>
                                    ";
            // line 298
            if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
                // line 299
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "mypage\">マイページ</a></li>
                                    ";
            }
            // line 301
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "gifts\">ギフトを探す</a></li>
                                    ";
            // line 302
            if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
                // line 303
                echo "                                        ";
                if ((array_key_exists("unReadCount", $context) && (($context["unReadCount"] ?? $this->getContext($context, "unReadCount")) > 0))) {
                    // line 304
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                    echo "message\">メッセージ<span id=\"badge\">";
                    echo twig_escape_filter($this->env, ($context["unReadCount"] ?? $this->getContext($context, "unReadCount")), "html", null, true);
                    echo "</span></a></li>
                                        ";
                } else {
                    // line 306
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                    echo "message\">メッセージ</a></li>
                                        ";
                }
                // line 308
                echo "                                    ";
            }
            // line 309
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "about\">zotoとは</a></li>
                                    <li><a href=\"";
            // line 310
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "faq\">よくあるご質問</a></li>
                                    <li><a href=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
            echo "inquiry\">お問い合わせ</a></li>
                                    ";
            // line 312
            if ((($context["login"] ?? $this->getContext($context, "login")) == true)) {
                // line 313
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
                echo "auth/logout\">ログアウト</a></li>
                                    ";
            }
            // line 315
            echo "                                </ul>
                            </li>
                        </ul>
                    </div><!-- end header_right -->
                ";
        }
        // line 320
        echo "            </div><!-- end header_inner -->
        </header>
    ";
        
        $__internal_58d4ac5d678bc20040984ae29b39153858e5dc1926a948223c9b017227603e44->leave($__internal_58d4ac5d678bc20040984ae29b39153858e5dc1926a948223c9b017227603e44_prof);

    }

    // line 324
    public function block_fornavspace($context, array $blocks = array())
    {
        $__internal_5d8e80d09f7a4610cb54cdc5e83c0e41793826604c26008ae49f1285d9799f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8e80d09f7a4610cb54cdc5e83c0e41793826604c26008ae49f1285d9799f9e->enter($__internal_5d8e80d09f7a4610cb54cdc5e83c0e41793826604c26008ae49f1285d9799f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fornavspace"));

        // line 325
        echo "<div id=\"fornavspace\">
<nav id=\"pcnav\">
    <ul>
        <li><a href=\"";
        // line 328
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">TOP</a></li>
        <li><a href=\"";
        // line 329
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "gifts\">ギフトを探す</a></li>
        <li><a href=\"";
        // line 330
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "about\">zotoとは</a></li>
        <li><a href=\"";
        // line 331
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\">よくあるご質問</a></li>
        <li><a href=\"";
        // line 332
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\">お問い合わせ</a></li>
    </ul>
</nav>
</div>
";
        
        $__internal_5d8e80d09f7a4610cb54cdc5e83c0e41793826604c26008ae49f1285d9799f9e->leave($__internal_5d8e80d09f7a4610cb54cdc5e83c0e41793826604c26008ae49f1285d9799f9e_prof);

    }

    // line 339
    public function block_body($context, array $blocks = array())
    {
        $__internal_4038188eae02c59982b3e841059699d771014d4a43952dbe2369974cb034161f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4038188eae02c59982b3e841059699d771014d4a43952dbe2369974cb034161f->enter($__internal_4038188eae02c59982b3e841059699d771014d4a43952dbe2369974cb034161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4038188eae02c59982b3e841059699d771014d4a43952dbe2369974cb034161f->leave($__internal_4038188eae02c59982b3e841059699d771014d4a43952dbe2369974cb034161f_prof);

    }

    // line 343
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7254ecd46ac365fadb678c4d170bc162a1a9b68133b924eae92c67e0fdbea6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7254ecd46ac365fadb678c4d170bc162a1a9b68133b924eae92c67e0fdbea6a6->enter($__internal_7254ecd46ac365fadb678c4d170bc162a1a9b68133b924eae92c67e0fdbea6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 344
        echo "        <footer>
            <ul>
                <li class=\"normal\"><a href=\"";
        // line 346
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "\">TOP</a>
                <li class=\"normal\"><a href=\"";
        // line 347
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "gifts\">ギフトを探す</a></li>
                <li class=\"normal\"><a href=\"";
        // line 348
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "about\">zotoとは</a></li>
                <li><a href=\"";
        // line 349
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "faq\">よくあるご質問</a></li><br>
                <li class=\"normal\"><a href=\"";
        // line 350
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "inquiry\">お問い合わせ</a></li>
                <li class=\"normal\"><a href=\"";
        // line 351
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "terms\">利用規約</a></li>
                <li><a href=\"";
        // line 352
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "privacy\">プライバシーポリシー</a></li><br>
                <li class=\"normal\"><a href=\"";
        // line 353
        echo twig_escape_filter($this->env, ($context["zotoUrl"] ?? $this->getContext($context, "zotoUrl")), "html", null, true);
        echo "notation\">特定商取引法に基づく表記</a></li>
                <li><a href=\"http://www.oz-vision.co.jp\" target=\"_blank\">運営会社</a></li>
            </ul>
            <a href=\"http://privacymark.jp/\" target=\"_blank\" class=\"footer_bn_link\"><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/img/privacy_mark.png"), "html", null, true);
        echo "\" alt=\"Pマーク\" width=\"80\" height=\"80\"></a>
            <div class=\"footer_shere_link\">
                <a href=\"https://twitter.com/share\"  style=\"float: left\" class=\"twitter-share-button\" data-url=\"http://zoto.gift\" data-via=\"ZotoGift\" data-lang=\"ja\">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <div class=\"fb-share-button\" style=\"float: left\" data-href=\"http://zoto.gift\" data-layout=\"button_count\" data-size=\"small\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fzoto.gift%2F&amp;src=sdkpreparse\">シェア</a></div>
            </div>
            <p>Copyright © OZvision Inc. All rights reserved.</p>
        </footer>
    ";
        
        $__internal_7254ecd46ac365fadb678c4d170bc162a1a9b68133b924eae92c67e0fdbea6a6->leave($__internal_7254ecd46ac365fadb678c4d170bc162a1a9b68133b924eae92c67e0fdbea6a6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 356,  739 => 353,  735 => 352,  731 => 351,  727 => 350,  723 => 349,  719 => 348,  715 => 347,  711 => 346,  707 => 344,  701 => 343,  690 => 339,  678 => 332,  674 => 331,  670 => 330,  666 => 329,  662 => 328,  657 => 325,  651 => 324,  642 => 320,  635 => 315,  629 => 313,  627 => 312,  623 => 311,  619 => 310,  614 => 309,  611 => 308,  605 => 306,  597 => 304,  594 => 303,  592 => 302,  587 => 301,  581 => 299,  579 => 298,  575 => 297,  570 => 294,  564 => 291,  558 => 290,  555 => 289,  553 => 288,  550 => 287,  544 => 284,  541 => 283,  539 => 282,  535 => 280,  529 => 277,  526 => 276,  524 => 275,  516 => 272,  510 => 271,  502 => 265,  496 => 263,  494 => 262,  490 => 261,  486 => 260,  481 => 259,  478 => 258,  472 => 256,  464 => 254,  461 => 253,  459 => 252,  454 => 251,  448 => 249,  446 => 248,  442 => 247,  437 => 245,  433 => 243,  430 => 242,  424 => 240,  421 => 239,  419 => 238,  415 => 237,  411 => 235,  409 => 234,  406 => 233,  403 => 232,  400 => 231,  397 => 230,  394 => 229,  388 => 225,  382 => 223,  376 => 221,  374 => 220,  369 => 218,  366 => 217,  363 => 216,  360 => 215,  357 => 214,  354 => 213,  352 => 212,  349 => 211,  343 => 210,  321 => 365,  318 => 364,  316 => 343,  311 => 340,  309 => 339,  305 => 337,  303 => 324,  300 => 323,  298 => 210,  211 => 126,  205 => 125,  201 => 124,  197 => 123,  191 => 122,  186 => 120,  182 => 119,  178 => 118,  174 => 117,  170 => 116,  166 => 115,  162 => 114,  158 => 113,  154 => 112,  150 => 111,  146 => 110,  129 => 96,  118 => 88,  31 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
{%   set time = time|default('?test') %}
<html lang=\"ja\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async></script>
    <script>
        var OneSignal = window.OneSignal || [];

        OneSignal.push([\"init\", {
            appId: \"929fb4cb-38a0-456a-8596-984eea5fde8b\",
            autoRegister: false, /* Set to true to automatically prompt visitors */
//            subdomainName: 'sakuma',
            /*
             subdomainName: Use the value you entered in step 1.4: http://imgur.com/a/f6hqN
             */
            httpPermissionRequest: {
                enable: true
            },
            allowLocalhostAsSecureOrigin: true,
            notifyButton: {
                enable: false /* Set to false to hide */
            },
            welcomeNotification: {
                disable: true // 最初の登録完了自動通知を無効化
            },
            safari_web_id: 'web.onesignal.auto.19aac151-6a52-4f31-b603-0bf7908b06b4',
            promptOptions: {
                /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
                /* actionMessage limited to 90 characters */
//                actionMessage: \"We'd like to show you notifications for the latest news and updates.\",
                actionMessage: \"zotoからイベントやお得情報をプッシュ通知で配信します。\",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: \"許可\",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: \"許可しない\"
            }

        }]);

        OneSignal.push([\"getNotificationPermission\", function(permission) {

            // (Output) Site Notification Permission: default
            //default 通知許諾表示
            //granted 通知許諾済み
            //denied  通知拒絶

            if('default' == permission) {
//                callCustomPermissionMessage()
                callDefaultPermissionMessage()
            }
        }]);



        function callCustomPermissionMessage() {
            deleteCookie();
            OneSignal.push(function() {
                OneSignal.showHttpPrompt();
            });
        }

        function callDefaultPermissionMessage() {
            OneSignal.push(function() {
                OneSignal.registerForPushNotifications();
            });

            OneSignal.push(function() {
                OneSignal.registerForPushNotifications({
                    modalPrompt: true
                });
            });
        }

        function deleteCookie() {
            var cookieName = 'onesignal-notification-prompt';
                document.cookie = cookieName+\"=; max-age=0\";
        }

    </script>
    <meta content=\"text/html; charset=UTF-8\" http-equiv=\"Content-Type\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta charset=\"utf-8\">
    <meta property=\"og:url\" content=\"http://zoto.gift\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"zoto/ゾートー\" />
    <meta property=\"og:description\" content=\"LINEやメールですぐに贈れるギフトサービス\" />
    <meta property=\"og:image\" content=\"{{ zotoUrl }}facebook.jpg\" />
    <meta property=\"og:site_name\" content=\"zoto/ゾートー\" />
    <meta property=\"fb:app_id\" content=\"151276935345279\" />
    <TITLE>zoto（ゾートー）|LINEやメールですぐに贈れるソーシャルギフトサービス</TITLE>
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@zoto\" />
    <meta name=\"twitter:title\" content=\"zoto/ゾートー\" />
    <meta name=\"twitter:description\" content=\"LINEやメールですぐに贈れるギフトサービス\" />
    <meta name=\"twitter:image\" content=\"{{ zotoUrl }}topimg.jpg\" />
    <meta name=\"twitter:url\" content=\"http://zoto.gift\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0\">
    <meta name=\"Keywords\" content=\"ギフト,ソーシャルギフト,e-ギフト,スターバックスギフト,プレゼント\" />
    <meta name=\"Description\" content =\"zoto（ゾートー）はコーヒーやコンビニスイーツなど100円から購入できる商品をメッセージカードに添えて、LINEやメールで友人や家族にすぐに送ることができるソーシャルギフトサービスです。\" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NVMLPM');</script>
    <!-- End Google Tag Manager -->
    <meta name=\"apple-mobile-web-app-title\" content=\"zoto\" />
    <link rel=\"apple-touch-icon\" href=\"{{ zotoUrl }}apple-touch-icon.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ zotoUrl }}apple-touch-icon-144.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ zotoUrl }}apple-touch-icon-152.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"305x305\" href=\"{{ zotoUrl }}apple-touch-icon-305.png\" />
    <link rel=\"shortcut icon\" href=\"{{ zotoUrl }}favicon.ico\" />
    <link rel=\"mask-icon\" href=\"{{ zotoUrl }}favicon.svg\">
    <link rel=\"icon\" href=\"{{ zotoUrl }}apple-touch-icon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ zotoUrl }}apple-touch-icon.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ zotoUrl }}apple-touch-icon-144.png\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"152x152\" href=\"{{ zotoUrl }}apple-touch-icon-152.png\" />
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"305x305\" href=\"{{ zotoUrl }}apple-touch-icon-305.png\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <link href=\"{{ asset('bundles/framework/css/common71.css') }}?{{ time }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/framework/css/member_auth31.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/framework/css/others59.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/framework/css/flow59.css') }}?{{ time }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('bundles/framework/jsc/pagetop-fp1-fp2.js') }}\"></script>
    <script>
        \$(function() {
            \$(\"#spnavbtn\").click(function() {
                \$(\"#overlay\").fadeIn();
            });
            \$(\"#close\").click(function() {
                \$(\"#overlay\").fadeOut();
            });
        });
        \$(function() {
            \$(\"#previewbtn\").click(function() {
                \$(\"#previewbox\").fadeIn();
            });
            \$(\"#closebtn\").click(function() {
                \$(\"#previewbox\").fadeOut();
            });
            \$(\"#closebtn_v\").click(function() {
                \$(\"#previewbox\").fadeOut();
            });
        });
        function gift_prev() {
            \$(\"#previewbtn\").click(function() {
                var prv = \$(\"input[name='card_img_id']:checked\").attr('id');
                var index = \$(\"input[name='card_img_id']:checked\").val();
                var splitName = prv.replace( /_[0-9]{2}/ , \"\" );
                if ('movie' == splitName) {
                    var video = document.getElementById('mov_img_url_'+index);
                    preview_movie(video.currentSrc, video.poster);
                }
                else {
                    var card = document.getElementById('card_'+index);
                    var cardimgUrl = card.find('img').src;
                    preview_card(cardimgUrl);
                }
                \$(\"#previewbox\").fadeIn();
            });
        }
        function tab_click(args){
            if(args == 'list_li'){
                \$('div#itemlistbox1').show();
                \$('div#itemlistbox_rank').hide();
                \$('li#list_li').addClass('on')
                \$('li#ranking_li').removeClass('on');

            }else{
                \$('div#itemlistbox1').hide();
                \$('div#itemlistbox_rank').show();
                \$('li#ranking_li').addClass('on')
                \$('li#list_li').removeClass('on');
            }
        }
    </script>
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-NVMLPM\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id=\"fb-root\"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '151276935345279',
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/ja_JP/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


</script>
<div id=\"forbgcol\">
<div id=\"sidebar\">
    {% block sidebar %}
        <header>
            {% if sqSetFlg is defined and smsAuthFlg is defined and isPaymentPage is defined and normalSmsFlg is defined%}
                {% if login == 1 %}
                    {% if isPaymentPage == 0 %}
                        {% if sqSetFlg != 1 %}
                            {% if smsAuthFlg != 1 %}
                                <div class=\"sms_attention\">
                                    <a href=\"{{ zotoUrl }}mypage/sms/auth\">
                                        <div class=\"sms_attention_box\">
                                            {% if normalSmsFlg == 1 %}
                                                <img src=\"{{ asset('bundles/framework/img/icon_sms.png') }}\" alt=\"セキュリティアイコン\" width=\"20\" height=\"20\"> セキュリティ強化のため、ご本人様確認をお願いします。<span class=\"sms_attention_btn\">詳しく見る</span>
                                            {% else %}
                                                <img src=\"{{ asset('bundles/framework/img/icon_sms.png') }}\" alt=\"セキュリティアイコン\" width=\"20\" height=\"20\"> 電話認証して、無料ギフトがもらえる。<span class=\"sms_attention_btn\">詳しく見る</span>
                                            {% endif %}
                                        </div>
                                    </a>
                                </div>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif %}

            {% set login = login|default(false) %}
            <div id=\"header_inner\">
                <div id=\"spnavbox\" style=\"position: relative;\">
                    <div id=\"spnavbtn\"><img src=\"{{ asset('bundles/framework/img/menubutton.png') }}\" alt=\"メニューアイコン\" width=\"38\" height=\"38\"></div>
                    {% if login == true  %}
                        {% if unReadCount is defined and unReadCount > 0 %}
                            <span id=\"badge_sp\">{{ unReadCount }}</span>
                        {% endif %}
                    {% endif %}
                    <div id=\"spnav\">
                        <nav id=\"overlay\">
                            <p id=\"close\"><img src=\"{{ asset('bundles/framework/img/menubutton_over.png') }}\" alt=\"close\" width=\"38\" height=\"38\"></p>
                            <ul>
                                <li><a href=\"{{ zotoUrl }}\">TOP</a></li>
                                {% if login == true  %}
                                    <li><a href=\"{{ zotoUrl }}mypage\">マイページ</a></li>
                                {% endif %}
                                <li><a href=\"{{ zotoUrl }}gifts\">ギフトを探す</a></li>
                                {% if login == true  %}
                                    {% if unReadCount is defined and unReadCount > 0 %}
                                        <li><a href=\"{{ zotoUrl }}message\">メッセージ<span id=\"badge\">{{ unReadCount }}</span></a></li>
                                    {% else %}
                                        <li><a href=\"{{ zotoUrl }}message\">メッセージ</a></li>
                                    {% endif %}
                                {% endif %}
                                <li><a href=\"{{ zotoUrl }}about\">zotoとは</a></li>
                                <li><a href=\"{{ zotoUrl }}faq\">よくあるご質問</a></li>
                                <li><a href=\"{{ zotoUrl }}inquiry\">お問い合わせ</a></li>
                                {% if login == true  %}
                                    <li><a href=\"{{ zotoUrl }}auth/logout\">ログアウト</a></li>
                                {% endif %}
                            </ul>
                        </nav>
                    </div><!-- end spnav -->
                </div><!-- end spnavbox -->
                <div id=\"logobox\">
                    <h1>
                        <a href=\"{{ zotoUrl }}\" id=\"pclogo\"><img src=\"{{ asset('bundles/framework/img/logo.png') }}\" alt=\"zoto\" width=\"114\" height=\"64\"></a>
                        <a href=\"{{ zotoUrl }}\" id=\"splogo\"><img src=\"{{ asset('bundles/framework/img/logo_sp.png') }}\" alt=\"zoto\" width=\"70\" height=\"25\"></a>
                    </h1>
                    <p>想ったときにすぐ届く。SNSで贈れるギフトサービス「zoto(ゾートー)」</p>
                    {% if login == false  %}
                        <div id=\"header_right_sp\">
                            <p id=\"login_sp\"><a href=\"{{ zotoUrl }}auth\">ログイン</a></p>
                        </div><!-- end header_right -->
                    {% endif %}
                </div>

                {% if login == false  %}
                    <div id=\"header_right_logout\">
                        <p id=\"login\"><a href=\"{{ zotoUrl }}auth\">新規登録 / ログイン</a></p>
                    </div><!-- end header_right -->
                {% else %}
                    <div id=\"header_right\">
                        {% if unReadCount is defined and unReadCount > 0 %}
                            <div id=\"icon_message_header\">
                                <a href=\"{{ zotoUrl }}message\"><img src=\"{{ asset('bundles/framework/img/icon_message_header.png') }}\" alt=\"メッセージ\" width=\"20\" height=\"14\">
                                    <p id=\"header_right_badge\">{{ (unReadCount > 0) ? unReadCount : '' }}</p></a>
                            </div><!-- end icon_message_header -->
                        {% endif %}
                        <ul id=\"login_on\">
                            <li id=\"usericon\"><!--○○様-->
                                <ul>
                                    <li><a href=\"{{ zotoUrl }}\">TOP</a></li>
                                    {% if login == true  %}
                                        <li><a href=\"{{ zotoUrl }}mypage\">マイページ</a></li>
                                    {% endif %}
                                    <li><a href=\"{{ zotoUrl }}gifts\">ギフトを探す</a></li>
                                    {% if login == true  %}
                                        {% if unReadCount is defined and unReadCount > 0 %}
                                            <li><a href=\"{{ zotoUrl }}message\">メッセージ<span id=\"badge\">{{ unReadCount }}</span></a></li>
                                        {% else %}
                                            <li><a href=\"{{ zotoUrl }}message\">メッセージ</a></li>
                                        {% endif %}
                                    {% endif %}
                                    <li><a href=\"{{ zotoUrl }}about\">zotoとは</a></li>
                                    <li><a href=\"{{ zotoUrl }}faq\">よくあるご質問</a></li>
                                    <li><a href=\"{{ zotoUrl }}inquiry\">お問い合わせ</a></li>
                                    {% if login == true  %}
                                        <li><a href=\"{{ zotoUrl }}auth/logout\">ログアウト</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                        </ul>
                    </div><!-- end header_right -->
                {% endif %}
            </div><!-- end header_inner -->
        </header>
    {% endblock %}
</div>
{% block fornavspace %}
<div id=\"fornavspace\">
<nav id=\"pcnav\">
    <ul>
        <li><a href=\"{{ zotoUrl }}\">TOP</a></li>
        <li><a href=\"{{ zotoUrl }}gifts\">ギフトを探す</a></li>
        <li><a href=\"{{ zotoUrl }}about\">zotoとは</a></li>
        <li><a href=\"{{ zotoUrl }}faq\">よくあるご質問</a></li>
        <li><a href=\"{{ zotoUrl }}inquiry\">お問い合わせ</a></li>
    </ul>
</nav>
</div>
{% endblock %}

<div id=\"content\">
    {% block body %}{% endblock %}
</div>

    <div id=\"footer\">
    {% block footer %}
        <footer>
            <ul>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}\">TOP</a>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}gifts\">ギフトを探す</a></li>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}about\">zotoとは</a></li>
                <li><a href=\"{{ zotoUrl }}faq\">よくあるご質問</a></li><br>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}inquiry\">お問い合わせ</a></li>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}terms\">利用規約</a></li>
                <li><a href=\"{{ zotoUrl }}privacy\">プライバシーポリシー</a></li><br>
                <li class=\"normal\"><a href=\"{{ zotoUrl }}notation\">特定商取引法に基づく表記</a></li>
                <li><a href=\"http://www.oz-vision.co.jp\" target=\"_blank\">運営会社</a></li>
            </ul>
            <a href=\"http://privacymark.jp/\" target=\"_blank\" class=\"footer_bn_link\"><img src=\"{{ asset('bundles/framework/img/privacy_mark.png') }}\" alt=\"Pマーク\" width=\"80\" height=\"80\"></a>
            <div class=\"footer_shere_link\">
                <a href=\"https://twitter.com/share\"  style=\"float: left\" class=\"twitter-share-button\" data-url=\"http://zoto.gift\" data-via=\"ZotoGift\" data-lang=\"ja\">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <div class=\"fb-share-button\" style=\"float: left\" data-href=\"http://zoto.gift\" data-layout=\"button_count\" data-size=\"small\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fzoto.gift%2F&amp;src=sdkpreparse\">シェア</a></div>
            </div>
            <p>Copyright © OZvision Inc. All rights reserved.</p>
        </footer>
    {% endblock %}
    </div>
<p id=\"pagetop\"><a href=\"#\"><img src=\"{{ asset('bundles/framework/img/icon_pagetop_sp.png') }}\" alt=\"pagetop\" width=\"80\" height=\"80\"></a></p>
</div><!-- end forbgcol -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 5,
        freeMode: true
    });
</script>
</body>
</html>", "base.html.twig", "/var/www/zoto/waikiki/app/Resources/views/base.html.twig");
    }
}
