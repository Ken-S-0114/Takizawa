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
	<form action="{$ExecURL}" method="post" class="paymentMain">
		{if  $CheckMessageArray neq null }
			<div id="GP_msg">
				<ul>
					{foreach item=message from=$CheckMessageArray}
						<li>{$message}</li>
					{/foreach}
				</ul>
			</div>
		{/if}
		<p class="navigate" style="
			font-size: 1.4rem;
			font-weight: bold;
			padding: 0 15px;
		">
			お支払いの内容を入力してください。
		</p>
		<ul class="paymentOptions">
			<li style="
    padding: 0px 10px;
    margin: 10px 0 20px;
">
				支払い方法:<br />
				<ul id="creditMethod">
					{foreach from=$PayMethodArray item=payMethod key=index}
						<li>
							<label for="method{$index}">
								<input type="radio" name="Method" value="{$index}" id="method{$index}" {if $Method eq $index}checked {/if}/>
								{$payMethod}
							</label>
							{if $index eq "2"}
								{insert name="select_payTimesList"}回
							{/if}
						</li>
					{/foreach}
				</ul>
			</li>
		</ul>



		{if $MemberCardArray ne null}
			<p class="navigate" style="
				font-size: 1.4rem;
				font-weight: bold;
				padding: 0 15px;
			">
				カードの指定方法を選択してください。
			</p>
			<ul class="paymentOptions">
				<li>
					<p>{insert name="radio_paymentMode"}</p>
				</li>
			</ul>
			<p class="navigate" style="
			font-size: 1.4rem;
			font-weight: bold;
			padding: 0 15px;
		">
				登録カードで決済する場合、以下の内容を入力してください。
			</p>
			<ul class="paymentOptions">
				<li>
					<p class="navigate" style="
				font-size: 1.4rem;
				font-weight: bold;
				padding: 0 15px;
			">ご利用になるカードを選択してください。</p>
					<p>{insert name="select_memberCardList"}</p>
				</li>
				<li>
					<p>カードに設定したパスワードをご記入ください。</p>
					<p>設定していない場合、空欄にしてください。</p>
					<p><input type="password" name="CardPass" size="20" maxlength="20" /></p>
					<p>確認用に再度入力：<input type="password" name="CardPassConf" size="20" maxlength="20" /></p>
				</li>
			</ul>
		{/if}

		<p class="navigate" style="
				font-size: 1.4rem;
				font-weight: bold;
				padding: 0 15px;
			">
			カード番号を入力して決済する場合、以下の内容を入力してください。
		</p>
		<ul class="paymentOptions">
			<li>
				カード番号：<input name="CardNo" type="text" id="Name" value="{$CardNo}" class="code" maxlength="16" size="18" />
				<p class="note">
					ハイフンで区切らないで、番号のみを入力してください。
				</p>
			</li>
			<li>
				有効期限(月/年)：{insert name="select_expireList" yearLabel="" monthLabel="/ "}
			</li>
			<li>
				セキュリティコード：<input name="SecurityCode" type="text" maxlength="4" size="6" value="{$SecurityCode}" />
			</li>
		</ul>

		<div class="control">
			<ul>
				<li>
					{if $Confirm eq "1"}
						<input type="submit" value="確認に進む" style="
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
">
					{else}
						<input type="submit" value="決済する" style="
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
">
					{/if}
					{insert name="input_keyItems"}
				</li>
				<br>
				<li>
					<a href="{$SelectURL}" style="
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
">決済方法を変える</a>
				</li>
				{if $CancelURL ne null}
					<br>
					<li>
						<a href="{$CancelURL}" style="
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
">キャンセルしてカートに戻る</a>
					</li>
				{/if}
			</ul>
		</div>
	</form>
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