<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"/usr/local/var/www/git_my.shenghui.com/public/../app/install/view/step5.html";i:1511527050;s:82:"/usr/local/var/www/git_my.shenghui.com/public/../app/install/view/public/head.html";i:1511527050;s:84:"/usr/local/var/www/git_my.shenghui.com/public/../app/install/view/public/header.html";i:1511527050;s:84:"/usr/local/var/www/git_my.shenghui.com/public/../app/install/view/public/footer.html";i:1511527050;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
<title>ThinkCMF安装</title>
<link rel="stylesheet" href="__STATIC__/install/simpleboot/themes/flat/theme.min.css" />
<link rel="stylesheet" href="__STATIC__/install/css/install.css" />
<link rel="stylesheet" href="__STATIC__/font-awesome/css/font-awesome.min.css" type="text/css">


	<script src="__STATIC__/js/jquery.js"></script>
</head>
<body>
	<div class="wrap">
		<div class="header">
	<h1 class="logo">ThinkCMF 安装向导</h1>
	<div class="version"><?php echo THINKCMF_VERSION; ?></div>
</div>
		<section class="section">
			<div style="padding: 40px 20px;">
				<div class="text-center">
					<a style="font-size: 18px;">恭喜您，安装完成！</a>
					<br>
					<br>
					<div class="alert alert-danger" style="width: 350px;display: inline-block;">
						为了您站点的安全，安装完成后即可将网站app目录下的“install”文件夹删除!
						另请对data/conf/database.php文件做好备份，以防丢失！
					</div>
					<br>
					<a class="btn btn-success" href="<?php echo cmf_get_root(); ?>/">进入前台</a>
					<a class="btn btn-success" href="<?php echo cmf_get_root(); ?>/index.php?s=admin">进入后台</a>
				</div>
			</div>
		</section>
	</div>

	<div class="footer">
	&copy; 2013-<?php echo date('Y'); ?> <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF Team</a>
</div>
	<script>
		$(function() {
			return;
			$.ajax({
				type : "POST",
				url : "http://www.thinkcmf.com/service/installinfo.php",
				data : {
					host : "<?php echo (isset($host) && ($host !== '')?$host:''); ?>",
					ip : "<?php echo (isset($ip) && ($ip !== '')?$ip:''); ?>"
				},
				dataType : 'json',
				success : function() {
				}
			});
		});
	</script>
</body>
</html>