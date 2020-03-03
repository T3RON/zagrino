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

<script src="<?= base_url('') ?>dist/js/persian-date.js"></script>
<script src="<?= base_url('') ?>dist/js/persian-datepicker.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?=base_url('')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
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

<!-- Select2 -->
<script src="<?= base_url('') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('') ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url('') ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url('') ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('') ?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<!-- iCheck 1.0.1 -->
<script src="<?= base_url('') ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?= base_url('') ?>bower_components/Chart.js/Chart.js"></script>
<script src="<?= base_url('') ?>dist/js/adminlte.min.js"></script>
<!-- jvectormap  -->
<script src="<?= base_url('') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- babakhani datepicker -->



<!-- Script -->
<!-- <script>
console.log(arguments);
    function copy_data(containerid) {
        var range = document.createRange();
        range.selectNode(containerid); //changed here
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
    }
</script> -->

<script>
(function($) {
     /* some code that uses $ */ 
    //  $("#field-jobs_register_date").pDatepicker();
    //  $('.datepicker-input').persianDatepicker({
    //     altField: '.datepicker-input'
    // });

    })(jQuery)

</script>

<script>
 /** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
   return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
   return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
    </script>




<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->



</body>
</html>
