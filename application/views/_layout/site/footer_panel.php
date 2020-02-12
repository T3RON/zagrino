   
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?=base_url('')?>assets/site/js/bootstrap.min.js"></script>
<script src="<?=base_url('')?>assets/site/js/toggler.js"></script>
<script src="<?=base_url('')?>assets/site/js/toggle.js"></script>
<script src="<?=base_url('')?>assets/site/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/site/js/swiper.min.js"></script>
<script src="<?=base_url('')?>assets/site/js/pushbar.js"></script>
<script src="<?=base_url('')?>assets/site/js/upload-image.js"></script>
    
    
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

</body>
</html>