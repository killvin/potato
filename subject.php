<?php include 'book_info.php'?>

<!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff26 book-new-nav">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>�����δ�� (����)</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
	<meta name="keywords" content="�����δ��,[��] �ɱ��к�,�����ʵ������,2013-6,���,����,����,��̳,�Ƽ�,����">	
	<meta name="description" content="ͼ������δ�� ���ܡ���������̳���Ƽ� ">
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
					<a class="nbg" href="images/s26393136.jpg" title="&lt;bound method Book.seo_title of &lt;Book(24536403, ), title: �����δ��, uid: 7115317518, cat_id: 1001&gt;&gt;">
						<img src="images/s26393136.jpg" title="�������ͼ" alt="�����δ��" rel="v:photo">
					</a>
				</div>
				<div id="info" class="">
						<span class="pl">����: <?=$bookInfo->author?></span><br/>
						<span class="pl">����: <?=$bookInfo->translator?></span><br/>
						<span class="pl">ҳ��: <?=$bookInfo->paginal_number?></span><br/>
						<span class="pl">����: <?=$bookInfo->price?>Ԫ</span><br/>
						<span class="pl">װ֡: <?=$bookInfo->binding?></span><br/>
						<span class="pl">ISBN: <?=$bookInfo->isbn?></span><br/>
						<span class="pl">������: <?=$bookInfo->publisher?></span><br/>
						<span class="pl">������: <?=$bookInfo->sub_title?></span><br/>
						<span class="pl">������: <?=$bookInfo->publish_date?></span><br/>
				</div>
			</div>
		</div>
		<div class="gtleft">
			<ul class="ul_subject_menu bicelink color_gray pt6 clearfix">
				<li>
					<span class="rec">
						<a class="j a_show_login lnk-sharing lnk-douban-sharing" href="https://www.douban.com/accounts/register?reason=collect">��ȡ����</a>
					</span>
					<br class="clearfix" />
				</li>
				<li>
					<span class="rec">
						<a class="j a_show_login lnk-sharing lnk-douban-sharing" href="https://www.douban.com/accounts/register?reason=collect">���빺�鵥</a>
						<span class="hidden">����<a href="">���鵥</a></span>
					</span>
					<br class="clearfix" />
				</li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>