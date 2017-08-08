<!DOCTYPE html>
<html lang="ja">
<div id="header">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="Content-Type" content="text/html; charset={$Enc}" />
        <title>お支払い {$ShopName|htmlspecialchars }</title>
        <link rel="apple-touch-icon" href="https://zoto.gift/bundles/framework/images/icon_logo.png" />
        <link rel="shortcut icon" href="https://zoto.gift/bundles/framework/images/icon_logo.png" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://zoto.gift/bundles/framework/css/top.css" />
        <link rel="stylesheet" href="https://zoto.gift/bundles/framework/css/common.css" />
        <script src="https://zoto.gift/bundles/framework/js/pagetop.js"></script>
        <script>
            $(function() {
                $("#spnavbtn").click(function() {
                    $("#overlay").fadeIn();
                });
                $("#close").click(function() {
                    $("#overlay").fadeOut();
                });
            });
        </script>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"  type="text/css" />
    </head>
</div>
<body>

<div id="sidebar">
    <header>
        <div id="header_inner">
            <div id="logobox">
                <h1>
                    <a href="/" id="pclogo"><img src="http://zoto.gift/bundles/framework/images/logo.png" alt="zoto" width="114" height="64"></a>
                    <a href="/" id="splogo"><img src="http://zoto.gift/bundles/framework/images/logo_sp.png" alt="zoto" width="70" height="25"></a>
                </h1>
                <p>ギフトは、もっと気軽に贈れる。SNSを使った新サービス「zoto」。(仮)</p>
            </div>
        </div><!-- end header_inner -->
    </header>
</div>
<div id="head">
    <p class="navigate" style="
    background: #e2e3de;
    padding: 10px 20px;
    margin: 15px;
    border-radius: 8px;
    text-align: center;
    font-size: 1.4rem;
    font-weight: bold;
">
        お支払い金額：￥<span class="amount">{$Total|number_format}</span>
    </p>
</div>

<div id="body">
    <div class="paymentMain">
        <p class="navigate" style="
    font-size: 1.4rem;
    font-weight: bold;
    padding: 0 15px;
">
            お支払い方法を選んでください。
        </p>
        <ul id="ptList" class="paymentOptions">

            <li style="
    padding: 0px 10px;
    margin: 10px 0 20px;
">
                <a href="{$SelectURL}?T0={$SysParam.T0}&T1={$SysParam.T1}&PayType=credit" style="
    /* height: 70px; */
    display: block;
    background-color: #E36A00;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    border: 3px solid #bdaa97;
    text-align: center;
    padding: 15px;
    font-size: 1.6rem;
    font-weight: bold;
    color: #71685e;
">
                    <span class="pName">クレジット</span>
                </a>
            </li>

            <li style="
    padding: 0px 10px;
    margin: 10px 0 20px;
">
                <a href="{$SelectURL}?T0={$SysParam.T0}&T1={$SysParam.T1}&PayType=rakutenid" style="
    /* height: 70px; */
    display: block;
    background-color: #E36A00;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    border: 3px solid #bdaa97;
    text-align: center;
    padding: 15px;
    font-size: 1.6rem;
    font-weight: bold;
    color: #71685e;
">
                    <span class="pName">楽天ID</span>
                </a>
            </li>

        </ul>
        <div class="control" style="
    /* border-top: 1px #000 solid; */
    margin-top: 50px;
">
            <ul>
                <li style="
    /* padding: 0px 10px; */
    margin: 25px 0;
    width: 100%;
    text-align: center;
">
                    <a href="http://zoto.gift/payment" style="
    background-color: #dedcd4;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    /* border: 3px solid #FFCB00; */
    text-align: center;
    padding: 15px 130px;
    font-size: 1.6rem;
    font-weight: bold;
    /* color: #fff; */
    /* width: 500px; */
">戻る</a>
                </li>
            </ul>
        </div>
    </div>

</div>
<div id="footer">
    <footer>
        <ul>
            <li class="normal"><a href="http://zoto.gift/">top</a>
            </li><li class="normal"><a href="http://zoto.gift/gifts">ギフトを探す</a></li>
            <li class="normal"><a href="http://zoto.gift/about">zotoとは</a></li>
            <li><a href="http://zoto.gift/faq">よくあるご質問</a></li><br>
            <li class="normal"><a href="http://zoto.gift/">お問い合わせ</a></li>
            <li class="normal"><a href="http://zoto.gift/agreement">利用規約</a></li>
            <li><a href="http://zoto.gift/privacy">プライバシーポリシー</a></li><br>
            <li><a href="http://zoto.gift/notation">特定商取引法に基づく表記</a></li>
        </ul>
        <p>運営会社 ozvision</p>
    </footer>
</div>
<p id="pagetop" style="display: none;"><a href="#"><img src="http://zoto.gift/bundles/framework/images/icon_pagetop_sp.png" alt="pagetop" width="80" height="80"></a></p>

</body>
</html>