<!-- Main Footer -->
<footer class="main-footer text-left">
    <strong>Copyleft &copy; 2014-2017 </strong>
</footer>


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
<script src="<?= base_url('') ?>dist/js/adminlte.min.js"></script>
<script src="<?= base_url('') ?>assets/js/raphael-min.js"></script>
<script src="<?= base_url('') ?>assets/js/morris.min.js"></script>


<!-- Script -->
<script>
    function copy_data(containerid) {
        var range = document.createRange();
        range.selectNode(containerid); //changed here
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
    }
</script>

<script>
	
	Morris.Donut({
		element: 'graph',
		data: [
			{label: "Friends", value: 30},
			{label: "Allies", value: 15},
			{label: "Enemies", value: 45},
			{label: "Neutral", value: 10}
		]
	});
</script>

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
