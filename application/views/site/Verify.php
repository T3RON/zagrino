<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>
















<!-- column-right -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_2d3561 p0">
        تایید شماره
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m_15 f_r p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 big_img_marhale ">
                <img src="<?=base_url('')?>assets/site/img/bg_logo_solo.jpg">
            </div>
            <div class="ol-lg-12 col-md-12 col-sm-12 col-xs-12 small_img_marhale ">
                <img style="bottom: -65px !important;" src="<?=base_url('')?>assets/site/img/verify.png">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  m_15 f_l">

            <form action="<?= site_url('site/Verify/verify'); ?>" method="post"
                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                <div class="col-lg-12 col-md-4 col-sm-5 col-xs-5 contact_lite m_15  c_border  f_r p0">
                    کد ارسالی را وارد نمایید
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_cod_karbari" class="p0">کد</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="rand_code" id="sefaresh_cod_karbari" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <input name="accounts_id" value="<?= $this->uri->segment(4); ?>" type="hidden">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11 contact_lite clear  c_border m_5_2 f_r p0">
                    <a href="">
                        <button type="submit" class="color takhfif_btns clr_3e4eee m_p_5_2 p0">
                            تایید
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 bg_000 f_r m_5  p0">
                    <a href="#" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  f_r" type="button" name="">
                        <img src="<?=base_url('')?>assets/site/img/return.svg">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
                            ارسال مجدد
                        </div>
                    </a>
                </div>

            </form>
        </div>



    </div>









</div>
















<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->





<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>