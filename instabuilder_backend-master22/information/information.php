<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>INFORMATIONS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="assets/css/main.css" rel="stylesheet"/>
		<link href="../images/logo.jpg"  rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Noto+Sans+TC:100,300" rel="stylesheet">
	</head>
    
	<body>
    			<?php 
					if(isset($_POST["send"])){
						$nickname=$_POST["nickname"];
						$email=$_POST["email"];//寄件者email
						$sub=$_POST["subject"];//主旨
						$content=$_POST["content"];//信件內文
										
						mb_internal_encoding("utf-8");
						$to="emily.sep24@gmail.com";//收件者
						$subject=mb_encode_mimeheader("$sub","utf-8");
						$message="$content";
						$headers="MIME-Version: 1.0\r\n";
						$headers.="Content-type: text/html; charset=utf-8\r\n";
						$headers.="From:".mb_encode_mimeheader("$nickname","utf-8")."<$email>\r\n";
						mail($to,$subject,$message,$headers);
					}
				?>				
    	

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="../index/index.html">渡假村 <span>RESORT</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../news/news.html">最新消息</a></li>
                                        <li><a href="../room/room.php">訂房服務</a></li>
                                        <li><a href="../room/roomSpace.php">查詢空房</a></li>
					<li><a href="../search/search.php">查詢訂房</a></li>
					<li><a href="../about/about.html">關於我們</a></li>
					<li><a href="../information/information.php">聯絡資訊</a></li>

					<li style="margin-top: 200%"><a href="../maneger/maneger.php">管理者介面</a></li>
				</ul>
			</nav>
		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>若有任何疑問，歡迎聯絡我們</p>
						<h2>Connection</h2>
					</header>
				</div>
			</section>
		
				<div align="center">
		
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7696478763673!2d121.52343161431983!3d25.041890283968662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a970a11a84ad%3A0x58e05f2528812097!2z5ZyL56uL6Ie65YyX5ZWG5qWt5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1551239777171" width="65%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</div>

		<!-- Main -->
			<div id="main" class="container">
				
				<!-- Elements -->

					<div class="row 200%">
						<div class="6u 12u$(medium)">

							
							<!-- Form -->
								<h6>留言</h6>
                                

								<form method="post" action="">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="nickname" id="nickname" value="<?php echo $nickname; ?>" placeholder="Nickname" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email" />
										</div>
                                        <div class="6u$ 12u$(small)">
											<input type="text" name="subject" id="subject" value="<?php echo $subject; ?>" placeholder="Subject" />
										</div>
										<!-- Break -->
										<!--<div class="6u 12u$(small)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">寄給我此郵件的副本</label>
										</div>
										<div class="6u$ 12u$(small)">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">我不是機器人</label>
										</div>-->
										<!-- Break -->
										<div class="12u$">
											<textarea name="content" id="content" value="<?php echo $content; ?>" placeholder="想給我們的意見..." rows="6"></textarea>
										</div>
										<!-- Break -->
										<div align="right">
										<div class="12u$">
											<ul class="actions" >
												<li><input type="submit" name="send" value="SEND"></li>
											</ul>
										</div>
                                        
										</div>
									</div>
								</form>
                                


						</div>
						<div class="6u$ 12u$(medium)">

							<!-- Lists -->
								<h3>飯店資訊</h3>
								<div class="row">
									<div class="6u 12u$(small)">

										<h4>與我們聯絡</h4>
										<ul>
											<li>北區業務部 <br/> 電話：02-87863321</li>
											<li>中區業務部 <br/> 電話：04-23287890</li>
											<li>南區業務部 <br/> 電話：07-3306666</li>
										</ul>
										
										<h4>特色</h4>
										<ol>
											<li>米其林三星廚藝團隊</li>
											<li>客製化宴會管理</li>
											<li>一站式訂購服務</li>
											<li>婚禮企劃師</li>
											<li>婚禮管家團隊</li>
											<li>沉浸式主題宴會規劃</li>
										</ol>

										

									</div>
									<div class="6u$ 12u$(small)">

										<h4>常見問題</h4>
										<ul class="alt">
											<li>Ｑ：入住與退房的時間是幾點？</li>
                                                <p>Ａ：入住從2:00p.m.開始／退房時間為11:00a.m.
                                                視套裝計畫而定，可能會有所變化。</p>
											<li>Ｑ：是否允許輔助犬？</li>
												<p>Ａ：是，輔助犬在飯店內不受限制。我們也提供輔助犬用廁所。</p>
										</ul>
									

									</div>
								</div>
								
							
							
						</div>
					</div>

			</div>
		
		

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/login?lang=zh-tw" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://zh-tw.facebook.com/login/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/?hl=zh-tw" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://reurl.cc/voprL" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; NTUB GROUP 10
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>