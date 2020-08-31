<?php include_once (APPPATH.'views/_layout/site/header.php'); ?>
    
    
    
    
    
    
    
     
    
    
    
    
    
    
    

    <!-- column-right -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_2d3561 p0">
        ثبت نام
        </div>

   


       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

    
           <form action="<?= site_url('site/Login/register'); ?>" method="post" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m_15 f_r ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 big_img_marhale ">
                    <img src="<?=base_url('')?>assets/site/img/bg_logo_solo.jpg">
                </div>
                <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12 small_img_marhale ">
                    <img src="<?=base_url('')?>assets/site/img/signupimg.png">
                </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  m_15 f_l">
               


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">موبایل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="account_mobile" id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">تعیین رمز عبور</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="account_pass" id="sefaresh_cod_karbari" type="password" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">تکرار رمز عبور</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="re_account_pass" id="sefaresh_cod_karbari" type="password" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">کد معرف</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="code" id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>
 



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
                            
                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>پذیرش قوانین زاگرس زوم </span>
                                        <input name="ruls" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>دریافت خبر نامه و نوتیفکیشن</span>
                                        <input name="recivenews" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 contact_lite clear  c_border m_5_2 f_r p0">
                    <input type="submit" value="تایید و ثبت نام"  class="color takhfif_btns clr_3e4eee p0">
                          
                        </div>

           </div>
           
        </form>
        </div>









</div>
    
    
    
    
    
    
    
    
    
   
    
    
    
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
      

    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>