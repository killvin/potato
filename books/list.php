<!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff26 book-new-nav">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title> Search List </title>
	<link type="text/css" rel="stylesheet" href="../css/master.css">
	<link type="text/css" rel="stylesheet" href="../css/global.css">
</head>

<body>

<div class="global-nav" id="db-global-nav">
	<div class="bd">
		<div class="top-nav-info">
			<a rel="nofollow" class="nav-login" href="">&nbsp;&nbsp;</a>
			<a rel="nofollow" class="nav-register" href="">Login</a>
		</div>

		<div class="global-nav-items">
			<ul>
				<li>
					<a data-moreurl-dict="{&quot;from&quot;:&quot;top-nav-click-main&quot;,&quot;uid&quot;:&quot;0&quot;}" target="_blank" href="">Potota Site</a>
				</li>
				<li class="on">
					<a data-moreurl-dict="{&quot;from&quot;:&quot;top-nav-click-book&quot;,&quot;uid&quot;:&quot;0&quot;}" href="">&nbsp;&nbsp;</a>
				</li>
				<li>
					<a class="bn-more" href="#more"><span></span></a>
					<div class="more-items">
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td><a data-moreurl-dict="{&quot;from&quot;:&quot;top-nav-click-9&quot;,&quot;uid&quot;:&quot;0&quot;}" target="_blank" href="">##</a></td>
								</tr>
								<tr>
									<td><a data-moreurl-dict="{&quot;from&quot;:&quot;top-nav-click-town&quot;,&quot;uid&quot;:&quot;0&quot;}" target="_blank" href="">##</a></td>
								</tr>
								<tr>
									<td><a data-moreurl-dict="{&quot;from&quot;:&quot;top-nav-click-mobile&quot;,&quot;uid&quot;:&quot;0&quot;}" target="_blank" href="">##</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="nav" id="db-nav-book">
	<div class="nav-wrap">
		<div class="nav-primary">
			<div class="nav-logo">
				<a href="">##</a>
			</div>
			<div class="nav-search">
				<form method="get" action="">
					<fieldset>
						<legend>SEARCH£º</legend>
						<label for="inp-query" style="display: none;">BOOK  AUTHOR  ISBN</label>
						<div class="inp">
							<input maxlength="60" size="22" name="search_text" id="inp-query" placeholder="BOOK  AUTHOR  ISBN" autocomplete="off" dir="ltr">
						</div>
						<div class="inp-btn">
							<input type="submit" value="SEARCH">
						</div>
						<input type="hidden" value="1001" name="cat">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!--
	<div class="nav-secondary">
		<ul class="nav-items">
			<li class="nav-item-first"><a href="">&nbsp;&nbsp;</a></li>
			<li class="book-cart"><a href="">&nbsp;&nbsp;</a></li>
			<li>
				<a target="_blank" href="">&nbsp;&nbsp;</a>
				<sup class="icon-new"></sup>
			</li>
		</ul>
	</div>
	-->
</div>

<?php
$m = new MongoClient("mongodb://9.111.251.152:27017/");
$db = $m->selectDB('myblog');

$table = $db->selectCollection('books');
$cursor = $table->find();

$totalCount = $cursor->count();
$pageCount = 10;

//initialize the page number
$firstPage = 0;
$page = 0;
if(isset($_GET["page"]) && $_GET["page"] != NULL){
	$page = $_GET["page"];
}
$prePage = ($page == 0)?0:$page - 1;
$nextPage = $page + 1;
$lastPage = ceil($totalCount/$pageCount);

//get the current page's content
$skip = $page*10;
$table = $db->selectCollection('books');
$cursor->limit($pageCount)->skip($skip);


?>

<div id="wrapper">
	<div id="content">
		<div class="grid-16-8 clearfix">
			<div class="article">
				<div class="trr">Result 1-<?=$totalCount?> &nbsp; 
					<a href="./list.php?page=<?=$firstPage?>"><|</a>&nbsp; &nbsp; <a href="./list.php?page=<?=$prePage?>"><<</a>&nbsp; &nbsp; 
					<a href="./list.php?page=<?=$nextPage?>">>></a>&nbsp; &nbsp; <a href="./list.php?page=<?=$lastPage?>">>|</a>&nbsp; &nbsp; 
				</div>
				<ul class="subject-list">
					<?php foreach($cursor as $book) { ?>
					<li class="subject-item">
						<div class="pic">
							<a }="" onclick="&quot;moreurl(this,{i:'0'})&quot;" href="" class="nbg">
								<img width="90" src="<?=$book['image']?>" class="">
							</a>
						</div>
						<div class="info">
							<h2 class="">
							<a onclick="&quot;moreurl(this,{i:'0'})&quot;" title="{BOOK NAME}" href=""><?=$book['title']?>
								<span style="font-size:12px;"> <?=$book['alt_title']?> </span>
							</a>
							</h2>
							<div class="pub"> <?=$book['author'][0]?> / <?=$book['translator'][0]?> / <?=$book['publisher']?> / <?=$book['pubdate']?> / <?=$book['binding']?> <?=$book['price']?></div>
							<div class="star clearfix">
								<span class="allstar40"></span>
								<span class="rating_nums"><?=$book['rating']['average']?></span>
								<span class="pl"></span>
							</div>
						
							<div class="ft">
								<div class="collect-info"></div>
								<div class="buy-info">
									<a href="" target="_blank">{EE PRICE}</a>
									<span class="splitter">|</span>
									<a href="">{PE PRICE}</a>
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

</body>
</html>