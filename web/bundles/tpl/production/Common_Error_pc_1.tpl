<!DOCTYPE html>
<html lang="ja">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="format-detection" content="telephone=no" />
	<title>お支払い {$ShopName|htmlspecialchars }</title>
	<link rel="apple-touch-icon" href="https://zoto.gift/bundles/framework/images/icon_logo.png" />
	<link rel="shortcut icon" href="https://zoto.gift/bundles/framework/images/icon_logo.png" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://zoto.gift/bundles/framework/css/top.css" type="text/css" />
	<link rel="stylesheet" href="https://zoto.gift/bundles/framework/css/common.css" type="text/css" />
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

<body>
<div id="head">
		<div id="GP_msg">
		{if $ErrorMessageArray neq null}
			<ul>
			{foreach item=message from=$ErrorMessageArray}
				<li>{$message}</li> 
			{/foreach}
			</ul>
		{else}
			<ul>
				{if $message.retry ne null}
				<li>{$message.retry}</li>
				{/if}
				{if $message.cancel ne null}
				<li>{$message.cancel}</li>
				{/if}
			</ul>
		{/if}
		</div>
{*  <p class="navigate err">
    {$message.headline}
  </p>
*}
</div>
<div id="body">
	<div class="paymentMain">
	  <div class="control">
	    <ul class="paymentOptions">
	      <li>
						<form action="{$RetURL}" method="post">
								<span class="note">決済をやめてショッピングサイトに戻る場合、このボタンを押してください。</span>
								{insert name=input_returnParams}

							<br><input type="submit" value="{$label.cancel}" style="
    background-color: #dedcd4;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    /* border: 3px solid #FFCB00; */
    text-align: center;
    padding: 15px 50px;
    font-size: 1.6rem;
    font-weight: bold;
    /* color: #fff; */
    /* width: 500px; */
" />
						</form>
	      </li>
				{if $RetryURL neq null }
				<li>
						<form action="{$RetryURL}" method="post">
							<p>
								<span class="note">必要事項の記入からもう一度試してみる場合、このボタンを押してください。</span>
								{insert name="input_keyItems"}

								<br><input type="submit" value="{$label.retry}" style="
    background-color: #dedcd4;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    /* border: 3px solid #FFCB00; */
    text-align: center;
    padding: 15px 50px;
    font-size: 1.6rem;
    font-weight: bold;
    /* color: #fff; */
    /* width: 500px; */
" />
							</p>
						</form>
				</li>
				{/if}
				{if $SelectURL neq null }
					<li>
						<form action="{$SelectURL}" method="post">
								<span class="note">違う決済方法を選択される場合、このボタンを押してください。</span>
								{insert name="input_keyItems"}
									<span class="control">

<br><input type="submit" value="{$label.select}" style="
    background-color: #dedcd4;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 6px;
    /* text-indent: -100%; */
    /* overflow: hidden; */
    /* border: 3px solid #FFCB00; */
    text-align: center;
    padding: 15px 50px;
    font-size: 1.6rem;
    font-weight: bold;
    /* color: #fff; */
    /* width: 500px; */
" />
						</form>
						<br class="clear" />
					</li>
				{/if}
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
			<li class="normal"><a href="http://zoto.gift">お問い合わせ</a></li>
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