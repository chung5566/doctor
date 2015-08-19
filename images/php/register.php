<!DOCTYPE html>
<html lang=en>

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
 </head>

<div class=container>
<div class="registration">
	
	<form id="member-registration" action=".index.php?task=registration.register" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
												<fieldset>
									<legend>會員註冊</legend>
																			<div class="control-group">
							<div class="control-label">
							<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> 必填欄位</label></span><span class="after"></span></span>														</div>
							<div class="controls">
								 							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_name-lbl" for="jform_name" class="hasTooltip required" title="" data-original-title="<strong>姓名</strong><br />請輸入您的全名">
	姓名<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="text" name="jform[name]" id="jform_name" value="" class="required" size="30" required="required" aria-required="true">							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_username-lbl" for="jform_username" class="hasTooltip required" title="" data-original-title="<strong>帳號名稱</strong><br />輸入您的帳號">
	帳號名稱<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="text" name="jform[username]" id="jform_username" value="" class="validate-username required" size="30" required="required" aria-required="true">							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_password1-lbl" for="jform_password1" class="hasTooltip required" title="" data-original-title="<strong>密碼</strong><br />輸入您的密碼">
	密碼<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required="required" aria-required="true">							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_password2-lbl" for="jform_password2" class="hasTooltip required" title="" data-original-title="<strong>再次輸入密碼</strong><br />確認您的密碼">
	再次輸入密碼<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required="required" aria-required="true">							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_email1-lbl" for="jform_email1" class="hasTooltip required" title="" data-original-title="<strong>電子郵件信箱</strong><br />輸入您的電子郵件信箱">
	電子郵件信箱<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="email" name="jform[email1]" class="validate-email required" id="jform_email1" value="" size="30" required="required" aria-required="true">							</div>
						</div>
																				<div class="control-group">
							<div class="control-label">
							<label id="jform_email2-lbl" for="jform_email2" class="hasTooltip required" title="" data-original-title="<strong>再次輸入電子郵件信箱</strong><br />確認您的電子郵件信箱">
	再次輸入電子郵件信箱<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="email" name="jform[email2]" class="validate-email required" id="jform_email2" value="" size="30" required="required" aria-required="true">							</div>
						</div>
																																	</fieldset>
							<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate">註冊</button>
				<a class="btn" href="/doctor/" title="取消">取消</a>
				<input type="hidden" name="option" value="com_users">
				<input type="hidden" name="task" value="registration.register">
			</div>
		</div>
		<input type="hidden" name="a3a3892f74299bff90c4e2ceb7b24ad1" value="1">	</form>
</div>
</div>
<? require layout_footer.php; ?>
</html>