<?php include 'book_info.php'?>

<!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff26 book-new-nav">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>代码的未来 (豆瓣)</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
	<meta name="keywords" content="代码的未来,[日] 松本行弘,人民邮电出版社,2013-6,简介,作者,书评,论坛,推荐,二手">	
	<meta name="description" content="图书代码的未来 介绍、书评、论坛及推荐 ">
	<link rel="stylesheet" href="css/master.css">
</head>

<body>

<div id="wrapper"> 
	<h1>
		<span property="v:itemreviewed"><?=$bookInfo->title?></span>
		<div class="clear"></div>
	</h1>	
	<div class="indent">
		<div class="subjectwrap clearfix">
			<div class="subject clearfix">
				<div id="mainpic" class="">
					<a class="nbg" href="images/s26393136.jpg" title="&lt;bound method Book.seo_title of &lt;Book(24536403, ), title: 代码的未来, uid: 7115317518, cat_id: 1001&gt;&gt;">
						<img src="images/s26393136.jpg" title="点击看大图" alt="代码的未来" rel="v:photo">
					</a>
				</div>
				<div id="info" class="">
						<span class="pl">作者: <?=$bookInfo->author?></span><br/>
						<span class="pl">译者: <?=$bookInfo->translator?></span><br/>
						<span class="pl">页数: <?=$bookInfo->paginal_number?></span><br/>
						<span class="pl">定价: <?=$bookInfo->price?>元</span><br/>
						<span class="pl">装帧: <?=$bookInfo->binding?></span><br/>
						<span class="pl">ISBN: <?=$bookInfo->isbn?></span><br/>
						<span class="pl">出版社: <?=$bookInfo->publisher?></span><br/>
						<span class="pl">副标题: <?=$bookInfo->sub_title?></span><br/>
						<span class="pl">出版年: <?=$bookInfo->publish_date?></span><br/>
				</div>
			</div>
		</div>
		<div class="gtleft">
			<ul class="ul_subject_menu bicelink color_gray pt6 clearfix">
				<li>
					<span class="rec">
						<a class="j a_show_login lnk-sharing lnk-douban-sharing" href="https://www.douban.com/accounts/register?reason=collect">索取样张</a>
					</span>
					<br class="clearfix" />
				</li>
				<li>
					<span class="rec">
						<a class="j a_show_login lnk-sharing lnk-douban-sharing" href="https://www.douban.com/accounts/register?reason=collect">加入购书单</a>
						<span class="hidden">已在<a href="">购书单</a></span>
					</span>
					<br class="clearfix" />
				</li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>