


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>تغییر گذرواژه</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url('')?>dist/css/bootstrap-theme.css">
	<!-- Bootstrap rtl -->
	<link rel="stylesheet" href="<?=base_url('')?>dist/css/rtl.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('')?>bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url('')?>bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('')?>dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
		  page. However, you can choose any other skin. Make sure you
		  apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="<?=base_url('')?>dist/css/skins/skin-blue.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


	<!-- Include multi.js -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('')?>dist/multi.min.css" />

	<?php if (isset($home_page) && $home_page !== TRUE):?>
		<?php
		foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
	<?php endif;?>


</head>



<body class="hold-transition login-page">
<div class="login-box">

	<!-- /.login-logo -->
	<div class="login-box-body" style="direction: rtl">
		<p><?php echo lang('login_subheading');?></p>

		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/change_password");?>
		<div class="form-group has-feedback">
			<?php echo form_input($old_password,'گذرواژه قبلی',"class='form-control' placeholder='گذرواژه فعلی''");?>
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<?php echo form_input($new_password,'رمز عبور جدید',"class='form-control' placeholder='رمز عبور جدید'");?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<?php echo form_input($new_password_confirm,'تکرار رمز عبور جدید',"class='form-control' placeholder='تکرار رمز عبور جدید'");?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<?php echo form_input($user_id);?>
		<p><?php echo form_submit('submit', 'تغییر گذرواژه','class="btn btn-primary btn-block btn-flat"');?></p>
		<?php echo form_close();?>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=base_url('')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url('')?>plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>




<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url('')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!--<script src="--><?//=base_url('')?><!--bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!-- DataTables -->
<script src="<?=base_url('')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url('')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('')?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('')?>dist/js/adminlte.min.js"></script>
<?php if (isset($home_page) && $home_page !== TRUE):?>

	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
<?php endif;?>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->



</body>
</html>

