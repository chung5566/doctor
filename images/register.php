
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>醫生好朋友</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel=stylesheet>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/Content/AssetsBS3/examples/theme.css" rel="stylesheet">
    <link href=css-js/justified-nav.css rel=stylesheet>
    <link href=css-js/layout.css rel=stylesheet>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="css-js/jquery-1.11.0.min.js"></script>
    <script src="css-js/layout.js"></script>
    <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script>
    <body>
<div id="main">
	<div class=container>

						
							
<div id="system-message-container">
</div>
							<div class="registration">

	<form id="member-registration" action="/index.php/using-joomla/extensions/components/users-component/registration-form?task=registration.register" method="post" class="form-validate">
				<fieldset>
					<legend>使用者註冊</legend>
					<dl>
									<dt>
				<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> 必填欄位</label></span><span class="after"></span></span>								</dt>
				<dd> </dd>
												<dt>
				<label id="jform_name-lbl" for="jform_name" class="hasTip required invalid" title="" aria-invalid="true">名字：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="text" name="jform[name]" id="jform_name" value="" class="required invalid" size="30" aria-required="true" required="required" aria-invalid="true"></dd>
												<dt>
				<label id="jform_username-lbl" for="jform_username" class="hasTip required invalid" title="" aria-invalid="true">帳號名稱：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="text" name="jform[username]" id="jform_username" value="" class="validate-username required invalid" size="30" aria-required="true" required="required" aria-invalid="true"></dd>
												<dt>
				<label id="jform_password1-lbl" for="jform_password1" class="hasTip required" title="">密碼：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="validate-password required" size="30" aria-required="true" required="required"></dd>
												<dt>
				<label id="jform_password2-lbl" for="jform_password2" class="hasTip required" title="">確認密碼：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="validate-password required" size="30" aria-required="true" required="required"></dd>
												<dt>
				<label id="jform_email1-lbl" for="jform_email1" class="hasTip required" title="">電子郵件信箱：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="email" name="jform[email1]" class="validate-email required" id="jform_email1" value="" size="30" aria-required="true" required="required"></dd>
												<dt>
				<label id="jform_email2-lbl" for="jform_email2" class="hasTip required" title="">確認電子郵件信箱：<span class="star">&nbsp;*</span></label>								</dt>
				<dd><input type="email" name="jform[email2]" class="validate-email required" id="jform_email2" value="" size="30" aria-required="true" required="required"></dd>
												<dt>
				<label id="jform_captcha-lbl" for="jform_captcha" class="hasTip required" title="">圖形驗証碼<span class="star">&nbsp;*</span></label>								</dt>
				<dd><div id="dynamic_recaptcha_1"></div></dd>
								</dl>
		</fieldset>
			<div>
			<button type="submit" class="validate">註冊</button>
			或			<a href="/" title="取消">取消</a>
			<input type="hidden" name="option" value="com_users">
			<input type="hidden" name="task" value="registration.register">
			<input type="hidden" name="37b9dfcf12492b86951493d6ded812df" value="1">		</div>
	</form>
</div>


						</div>
					</div>
					</body>