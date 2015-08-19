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
    <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->

    <body>
        

        <div class=container>
            <div id="loginani"> 
                <div id="logincontainer">
                <form class="form-signin" role="form"><h2 class="form-signin-heading">Please sign in</h2><label for="inputEmail" class="sr-only">Email address</label> <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""> <label for="inputPassword" class="sr-only">Password</label> <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""><div class="checkbox"><label> <input type="checkbox" value="remember-me"> Remember me </label></div><button class="btn btn-lg btn-primary btn-block" id="signin" type="submit">Sign in</button></form>
            </div>
        </div>

            <div class=masthead>
                
                <!-- 版頭開始 -->
<div class="headArea">
    <div class="head-L">
        <a title="醫生好朋友" href="./"><img src="images/logo.jpg" style="width:566px;height:84px;"</a>
    </div><!-- head-L end -->
    <div class="head-R">
        <a id="logintext"> 由此登入 </a>


        <form action="find.php" method="GET">
            <input class="findbtn"type="image" src="images/search.gif" name="keywordSend">
            <input class="findtext"type="text" name="keyword" size="15">
            
        </form>
    </div><!-- head-R end -->
</div><!-- headArea End -->
<!-- 版頭結束 -->
                <div role=navigation>
                    <ul class="nav nav-justified">
                        <li class=active><a href=#>Home</a></li>
                        
                        <li><a href=#>醫生介紹</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">醫生專區 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">病例討論</a></li>
                                <li><a href="#">醫學交流</a></li>
                                <li><a href="#">研討訊息</a></li>
                            </ul>
                        </li>
                        <li><a href=#>病人諮詢</a></li>
                        <li><a href='register.php'>加入會員</a></ul>
                    </li>
                </div>