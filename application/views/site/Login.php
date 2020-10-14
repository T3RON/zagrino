<?php include_once (APPPATH.'views/_layout/site/header.php'); ?>
    
    
    
    
    
    
    
     
    
    
    
    
    
    
    

    <!-- column-right -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 " style="direction: rtl;">

        <div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_2d3561 p0">
        ورود
        </div>

      
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

    
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m_15 f_r ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 big_img_marhale ">
                    <img src="<?=base_url('')?>assets/site/img/bg_logo_solo.jpg">
                </div>
                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12 small_img_marhale ">
                    <img src="<?=base_url('')?>assets/site/img/signupimg.png">
                </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  m_15 f_l">
               
           <form action="<?=base_url('site/Login/login')?>" method="post" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">موبایل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="mobile" id="mobile" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">کلمه عبور</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="password" type="password" id="pass" class="active-resultcol-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                            
                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                                <li class="col-lg-5 col-md-6 col-sm-12 col-xs-12 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>نمایش رمز عبور </span>
                                        <input class="show-pass" id="change_char" onclick="change_char();" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="col-lg-5 col-md-6 col-sm-12 col-xs-12 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>مرا به خاطر بسپار</span>
                                        <input type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 contact_lite clear  c_border m_5_2 f_r p0">
                        
                            <button type="submit" class="color takhfif_btns clr_3e4eee p0">ورود</button>

                        </div>

                        <div style="text-align: end;" class="col-lg-7 col-md-7 col-sm-7 col-xs-12 contact_lite m_15  c_border  f_r p0">
                            کاربر جدید هستید ؟
                        <a  href="">
                                    ثبت نام در زاگرینو
                            </a>
                            <a style="float: left; margin-top:20px; color:red !important;" href="">
                                    کلمه عبور را فراموش کرده ام
                            </a>
                        </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 contact_lite m_15  c_border  f_r p0">
                           
                        </div>
                 

                </form>
           </div>
        </div>











</div>
    
    
    
    
    
    
    
    
    
   
    
    
    
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
      
<script type="text/javascript">

$(".show-pass").change(function (e) {
    e.preventDefault();
    var type = $("#pass").attr('type');
    switch (type) {
        case 'password':
        {
            $("#pass").attr('type', 'text');
            return;
        }
        case 'text':
        {
            $("#pass").attr('type', 'password');
            return;
        }
    }
});



</script>
    
<script type="text/javascript">
$(document).ready(function() {
    $(document).scrollTop($("#pos").offset().top);
});
</script>
    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>