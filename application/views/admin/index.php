<?php include_once (APPPATH.'views/_layout/admin/head.php'); ?>
<?php include_once (APPPATH.'views/_layout/admin/menu.php'); ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            داشبرد
            <small>کنترل پنل</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">داشبرد</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <?php echo $output; ?>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

<?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>
