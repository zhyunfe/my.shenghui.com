<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"themes/admin_simpleboot3/admin/mailer/test.html";i:1511527050;s:43:"themes/admin_simpleboot3/public/header.html";i:1511527050;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="__TMPL__/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="__TMPL__/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "__ROOT__/",
            WEB_ROOT: "__WEB_ROOT__/",
            JS_ROOT: "static/js/",
            APP: '<?php echo \think\Request::instance()->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="__STATIC__/js/wind.js"></script>
    <script src="__TMPL__/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
</head>
<body>
	<div class="wrap">
		<form method="post" class="form-horizontal js-ajax-form" action="<?php echo url('mailer/test'); ?>">
			<div class="form-group">
				<label for="input-to" class="col-sm-2 control-label"><span class="form-required">*</span>收件箱</label>
				<div class="col-md-6 col-sm-10">
					<input type="text" class="form-control" id="input-to" name="to">
				</div>
			</div>
            <div class="form-group">
                <label for="input-subject" class="col-sm-2 control-label"><span class="form-required">*</span>标题</label>
                <div class="col-md-6 col-sm-10">
                    <input type="text" class="form-control" id="input-subject" name="subject">
                </div>
            </div>
            <div class="form-group">
                <label for="input-content" class="col-sm-2 control-label"><span class="form-required">*</span>内容</label>
                <div class="col-md-6 col-sm-10">
                    <textarea class="form-control" id="input-content" name="content"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary js-ajax-submit">发送</button>
                </div>
            </div>
		</form>
	</div>
	<script src="__STATIC__/js/admin.js"></script>
</body>
</html>