<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ساخت کاربری جدید</title>
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
<div class="register-box" style="direction: rtl">
<div class="login-logo">
    <?php foreach($site as $site_value) { ?>
                        <img src="<?=base_url('')?>assets/uploads/img/<?= $site_value->site_logo; ?>" class="img-responsive" alt="logo">
     <?php } ?>
    </div>
	<div class="register-box-body">
		<p class="login-box-msg">ثبت نام کاربر جدید</p>


		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/create_user");?>

		<p>
			<?php echo lang('create_user_fname_label', 'first_name');?> <br />
			<?php echo form_input($first_name,'نام',"class='form-control'");?>

		</p>

		<p>
			<?php echo lang('create_user_lname_label', 'last_name');?> <br />
			<?php echo form_input($last_name,'نام خانوادگی',"class='form-control'");?>

		</p>

		<?php
		if($identity_column!=='email') {
			echo '<p>';
			echo lang('create_user_identity_label', 'identity');
			echo '<br />';
			echo form_error('identity');
			echo form_input($identity);
			echo '</p>';
		}
		?>



		<p>
			<?php echo lang('create_user_email_label', 'email');?> <br />
			<?php echo form_input($email,'ایمیل',"class='form-control'");?>
		</p>

		<p>
			<?php echo lang('create_user_password_label', 'password');?> <br />
			<?php echo form_input($password,'گذرواژه',"class='form-control'");?>
		</p>

		<p>
			<?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
			<?php echo form_input($password_confirm,'تکرار گذرواژه',"class='form-control'");?>

		</p>


		<p><?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-primary btn-block register-login"');?></p>

		<?php echo form_close();?>

	</div>
	<!-- /.form-box -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
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






































