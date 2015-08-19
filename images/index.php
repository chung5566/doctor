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
                <div class="well "><h3 class="page-header">Login Form</h3><form action="http://localhost/doctor/index.php" method="post" id="login-form" class="form-inline">
		<div class="userdata">
		<div id="form-login-username" class="control-group">
			<div class="controls">
									<div class="input-prepend">
						<span class="add-on">
							<span class="icon-user hasTooltip" title="" data-original-title="帳號"></span>
							<label for="modlgn-username" class="element-invisible">帳號</label>
						</span>
						<input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="帳號">
					</div>
							</div>
		</div>
		<div id="form-login-password" class="control-group">
			<div class="controls">
									<div class="input-prepend">
						<span class="add-on">
							<span class="icon-lock hasTooltip" title="" data-original-title="密碼">
							</span>
								<label for="modlgn-passwd" class="element-invisible">密碼							</label>
						</span>
						<input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="密碼">
					</div>
							</div>
		</div>
						<div id="form-login-remember" class="control-group checkbox">
			<label for="modlgn-remember" class="control-label">記得我</label> <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes">
		</div>
				<div id="form-login-submit" class="control-group">
			<div class="controls">
				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary">登入</button>
			</div>
		</div>
					<ul class="unstyled">
							<li>
					<a href="http://localhost/doctor/index3.php/register">
					註冊 <span class="icon-arrow-right"></span></a>
				</li>
							<li>
					<a href="/doctor/index.php/login?view=remind">
					忘記您的帳號？</a>
				</li>
				<li>
					<a href="/doctor/index.php/login?view=reset">
					忘記您的密碼？</a>
				</li>
			</ul>
		<input type="hidden" name="option" value="com_users">
		<input type="hidden" name="task" value="user.login">
		<input type="hidden" name="return" value="aHR0cDovL2xvY2FsaG9zdC9kb2N0b3IvaW5kZXgzLnBocA==">
		<input type="hidden" name="24dccdcd23b4c480213ecf0ea85925bd" value="1">	</div>
	</form>
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

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item"><img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide [1140x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjQwMy4xMDkzNzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo1M3B0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true"></div>
                        <div class="item active"><img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide [1140x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjM1Mi4wNjI1IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM0NDQ7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true"></div>
                        <div class="item"><img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjM5MS4zNTkzNzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzMzMztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo1M3B0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPlRoaXJkIHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true"></div>
                    </div>
                    
                </div>
                <div class="comwall">

                    
                    <div class="comcontainer gray">
                    <h3 class=text-muted>研討會訊息</h3>
                    <div class="comcontent">
                        
                            
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                        
                       
                        <div class="commetee-content border_bottom">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div>
                    <div class="comcontent">
                        
                            
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                        
                       
                        <div class="commetee-content border_bottom">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div><div class="comcontent">
                    
                            
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                                               
                        <div class="commetee-content border_bottom">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div><div class="comcontent">
                        
                            
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                        
                       
                        <div class="commetee-content">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div><div class="comcontent">
                        
                            
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                        
                       
                        <div class="commetee-content">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div><div class="comcontent">
                                                    
                            <h5 class="commetee-date{">2015-5-5</h5>
                            
                        
                       
                        <div class="commetee-content">中國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會</div>
                    </div>
                        
                        
                    
                </div>
            </div>
        </div>


            
            <div id="selectneed1" class= "jumbotron green"  style="background-image:url(images/main_doctors.jpg)">
                <img src="images/write_pic.gif">
                
                <p class=lead>中國智慧醫療與健康管理大會暨中國智慧醫療國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會國智慧醫療與健康管理大會暨中國智慧醫療與健康管理展覽會國智慧醫療與健康管理大會暨中國智
                    <p><a id="selectneed1btn" class="btn btn-lg btn-success"  role=button>填寫表單</a></div>
                        <!---動畫區 -->
            <div id="selectneed2" class="jumbotron" style="background-image:url(images/main_doctors.jpg)">
                <h1>選擇類型</h1>
                
                    <p><a class="btn btn-lg btn-success btn-long" href="#" role="button">醫療用品/書籍供應</a>
                    </p><p><a class="btn btn-lg btn-success btn-long" href="#" role="button">診所文宣設計</a>
                    </p><p><a class="btn btn-lg btn-success btn-long" href="#" role="button">軟硬體服務</a>
                    </p><p><a class="btn btn-lg btn-success btn-long" href="#" role="button">醫療法律/財務節稅</a>
                    </p><p><a class="btn btn-lg btn-success btn-long" href="#" role="button">自我介紹</a>
            </p></div>
                        <!---動畫區結束 -->
                        <div class="comwall">
            <div class="comcontainer">
                    <h3 class=text-muted>最新需求達成</h3>
                    <div class="comcontent border_bottom">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                   <div class="comcontent border_bottom">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                    <div class="comcontent border_bottom">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                    <div class="comcontent">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                    <div class="comcontent">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                    <div class="comcontent">
                        <div class="checkpic">
                            <img src="images/check.gif">
                        </div>
                        <div class="sucess_content">
                            <div class="success-name">
                            <p>陳醫師
                        </div>
                            <h5 class="success-date">2015-5-5</h5>
                            
                        
                       
                        <section>ACETA 200 (回春堂),500mg1500盒(24錠)</section>
                    </div>
                    </div>
                        
                        
                    
                </div>
            </div>
        
           
            <!--新聞區開始-->
            
            <!--新聞區結束-->
                <div class="comwall">

                    <div class="doctor-head">
                        <div class="comcontainer">
                        <h3 class=text-muted>醫生專區</h3>
                    </div>
                    </div>
                    <div class="comcontainer">
                <!--醫生介紹區開始-->
                <h3 class=text-muted>醫生介紹</h3>
                <!-- 隨機呈現產品圖片開始 -->
                <div class="index-tab">
                    <div class="tab4s">
                        <li class="tab4s-img"><img src="images/doc4.jpg"></li>
                        <li class="tab4s-tit">骨科陳醫師</li>
                        <div class="tab4s-txt">
                            這裡是隨機呈現醫生圖片的文字說明區塊這裡是隨機呈現醫生圖片的文字說明區塊
                        </div>
                        <div class="tab4s-himg">
                            <img title="前往" src="images/link-icon.png">
                        </div>
                    </div>
                    <!-- tab4s End -->
                    <div class="tab4s">
                        <li class="tab4s-img"><img src="images/doc4.jpg"></li>
                        <li class="tab4s-tit">牙科謝醫師</li>
                        <div class="tab4s-txt">
                            這裡是隨機呈現醫生圖片的文字說明區塊這裡是隨機呈現醫生圖片的文字說明區塊
                        </div>
                        <div class="tab4s-himg">
                            <img title="前往" src="images/link-icon.png">
                        </div>
                    </div>
                    <!-- tab4s End -->
                    <div class="tab4s">
                        <li class="tab4s-img"><img src="images/doc4.jpg"></li>
                        <li class="tab4s-tit">精神科吳醫師</li>
                        <div class="tab4s-txt">
                            這裡是隨機呈現醫生圖片的文字說明區塊這裡是隨機呈現醫生圖片的文字說明區塊
                        </div>
                        <div class="tab4s-himg">
                            <img title="前往" src="images/link-icon.png">
                        </div>
                    </div>
                    <!-- tab4s End -->
                    <div class="tab4s">
                        <li class="tab4s-img"><img src="images/doc4.jpg"></li>
                        <li class="tab4s-tit">中醫廖先生</li>
                        <div class="tab4s-txt">
                            這裡是隨機呈現醫生圖片的文字說明區塊這裡是隨機呈現醫生圖片的文字說明區塊
                        </div>
                        <div class="tab4s-himg">
                            <img title="前往" src="images/link-icon.png">
                        </div>
                    </div>
                </div>
                    <!-- tab4s End -->
                </div>
                <!-- index-tab End -->
                <!-- 隨機呈現產品圖片結束 -->
                <div class="comcontainer">
                    <h3 class=text-muted>醫生討論</h3>
                    <div class="panel  comcontent ">
                        <div class="panel-heading green">
                            <div class="response-num">
                                12則
                            </div>
                            <h5 class="panel-tittle">2015-5-5</h5>
                        </div>
                        <div class="panel-body">醫師全聯會請消基會收回不當言論，回歸專業</div>
                    </div>
                    <div class="panel  comcontent ">
                        <div class="panel-heading green">
                            <div class="response-num">
                                12則
                            </div>
                            <h5 class="panel-tittle">2015-5-5</h5>
                        </div>
                        <div class="panel-body">醫師全聯會請消基會收回不當言論，回歸專業</div>
                    </div>
                    <div class="panel  comcontent ">
                        <div class="panel-heading green">
                            <div class="response-num">
                                12則
                            </div>
                            <h5 class="panel-tittle">2015-5-5</h5>
                        </div>
                        <div class="panel-body">醫師全聯會請消基會收回不當言論，回歸專業</div>
                    </div>
                </div>
            </div>
            <!--醫生介紹區結束-->
            

                
        </div>
        <footer class=footer>
                Copyright 2015 SUN SHINY GROUP | All Rights Reserved | Privacy
            </footer>
        <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="/Scripts/AssetsBS3/docs.min.js"></script>

</html>