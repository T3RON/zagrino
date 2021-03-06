   
<!-- FOOTER -->
<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 first_section p0">
        <div class="container-fluid ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 second_section p0">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 f_r phone_number p0">
                    جهت مشاوره رایگان برای تبلیغات و ثبت آگهی و مشاوره تبلیغاتی کسی و کار از طریق شماره زیر با ما در ارتیاط باشید
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        09100000000
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 f_l connect ">
                    کسب و کار خود را آنلاین کنید و با پیوستن به جمع مشترکان زاگرینو به صورت لحظه ای از جدیدترین اطلاعات ، رویدادها ، تخفیفات ، کسب و کار و گردشگری مطلع شوید و از خدمات بینهایت وبگاه زاگرینو لدت ببرید
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_menu p0">
                    <ul class="m0 p0">
                        <li><a href="">
                            همکاری با زاگرینو
                        </a></li>
                        <li><a href="">
                            قوانین و مقررات
                        </a></li>
                        <li><a href="">
                            سوالات متداول
                        </a></li>
                        <li><a href="">
                            راهنمای استفاده از خدمات
                        </a></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 copyRight_r f_r p0">
                    مسئولیت صحت آگهی های درج شده در این سایت به عهده آگهی دهنده میباشد
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 copyRight_l f_l p0">
                    آگهی ها به عهده آگهی دهنده است
                    <span>زاگرینو</span>
                    Zagrino 2019-
                    آگهی ها به عهده آگهی دهنده است
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="<?= base_url('') ?>dist/js/persian-date.js"></script>
<script src="<?= base_url('') ?>dist/js/persian-datepicker.js"></script>
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

<script src="<?=base_url('')?>dist/js/persianDatepicker.min.js"></script>




<script src="<?=base_url('')?>assets/plugins/dropify/dist/js/dropify.js"></script>

    <!-- Sweet-Alert  -->
<script src="<?=base_url('')?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>




    
<!--    Script For This Page     -->
    <script >
        $('document').ready(function () {
            $("#upload_img").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgshow').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
    <script >
        function btn_inc(){
            var value = document.getElementById('number_inc_dec').innerHTML;
            if(value < 10){
                value++;
            }else {
                value = 10;
            }
            document.getElementById('number_inc_dec').innerHTML = value;
        }
    </script>
    <script >
        function btn_dec(){
            var value = document.getElementById('number_inc_dec').innerHTML;
            if(value > 0){
                value--;
            }else {
                value = 0;
            }
            document.getElementById('number_inc_dec').innerHTML = value;
        }
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
        new Pushbar({
				blur:true,
				overlay:true,
        });
    </script>
<script>
    Toggler.Init({
        CLASS_BASE: 'js-toggler',
        CLASS_VISIBLE: 'is-visible',
        CLASS_TARGET_VISIBLE: 'is-target-visible',
        CLASS_TRANSITIONING: 'is-transitioning',
        CLASS_FADE: 'is-fade',
        CLASS_SLIDEFADE: 'is-slidefade',
        DELEGATE_CLICK: false
    });
</script>
<script>
    var swiper = new Swiper('.main_swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>


<script type="text/javascript">
        $(document).ready(function(){
 
            $('#ostan_id').change(function(){ 
               var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('site/panel/Profile/get_cities');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].city_id+'>'+data[i].city_title+'</option>';
                        }
                        $('#city_id').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

    
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("واقعا نياز داريد اين فايل را حذف كنيد \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('فايل حذف گرديد');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

</body>
</html>
