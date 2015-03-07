
<?php


//DBに接続
require('dbconnect.php');

// MySQLとの接続をオープンにする
$db = mysql_connect($DBSERVER, $DBUSER, $DBPASSWORD) or die(mysql_error());

// データをUTF8で受け取る
mysql_query("SET NAMES UTF8");

// データベースを選択する
$selectdb = mysql_select_db($DBNAME, $db);

?>

<?php			

//投稿を記録する
$name= htmlspecialchars($_POST['name']);
$comment = htmlspecialchars($_POST['comment']);
$data_insert = ("INSERT INTO step1_post(name,message) VALUES( '$name',  '$comment')");
mysql_query($data_insert,$db); 

?>

<?php
//DBから投稿の情報を取得する
$recordSet = mysql_query( 'SELECT * FROM step1_post ORDER BY id DESC' ,$db);

?>




<html>
<head>
<meta charset="UTF-8" />
 <title>簡易掲示板</title>
 
 <!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
 
<body>
<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="text-center">簡易掲示板</h1>
	</div>
	
	<div class="container">	
		<div class="panel-body">

		<!--ナビゲーションバーの追加-->
		<!--ホームボタン、投稿ボタン、更新ボタンを設置-->
		<ui class="nav nav-tabs nav-justified">
			<li><a href="../STEP1">Home</a></li>
			<li><a href="javascript:location.reload(true);">更新</a></li>
		</ui>
		<br />

		<form method="POST" action="">
			 <div class="form-group">
	 			<label for="name">ニックネーム</label>
	 			<input name="name" class="form-control"/>
	 		</div> 
	 		<div class="form-group">
	 			<label for="comment">コメントを投稿する</label>
				<textarea name="comment" cols="50" rows="5" class="form-control"></textarea >
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">投稿</button>
			</div>
		</form>

		<br />
		<br />
	<div class="well well-sm">
		<h3 class="text-center">タイムライン</h3>
			
	<!--投稿内容を表示-->
	<dl>
	<?php
		while($data = mysql_fetch_assoc($recordSet)){
	?>
	 		<dd><?php echo $data['created']; ?></dd>
	 		<dd><?php echo $data['name']; ?></dd>
	 		<dd><?php echo $data['message']; ?></dd>
	 		<HR>
	<?php
		}
	?>
	</dl>
	</div>

		</div>
	</div>
</div>

<div class="panel-footer">
	<h4 class="text-center">&copy;teamラボ,オンラインスキルアップ課題STEP1</h4>
</div>

</body>
</html>