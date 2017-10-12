<?php include "server-info.php" ?>  <!-- 引入文件 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>客户端和服务器配置信息</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-muted">服务器配置信息</h1>
  <?php if($server):?>
	<ul class="list-group">
	<?php foreach ($server as $key=>$value): ?>
        <li class="list-group-item">
        	<strong><?php echo $key; ?></strong>
        	<?php echo $value; ?>
        </li>
		<?php endforeach; ?>
	</ul>
 <?php endif; ?>
 <h1 class="text-muted">客户端配置信息</h1>
 <?php if($client): ?>
 	<ul class="list-group">
 		<?php foreach ($client as $key => $value):?>
 			<li class="list-group-item">
 				<strong><?php echo $key; ?></strong>
 				<?php echo $value; ?>
 			</li>
 		<?php endforeach; ?>
 	</ul>
 <?php endif; ?>
</div>
</body>
</html>





