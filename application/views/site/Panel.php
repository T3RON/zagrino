<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0" style="direction: rtl;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_t_clip p0">

        <div style="margin: 30px 0;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabad_kharid_info p0">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 f_l m_5 f_r img_panel">
                        <img src="<?=base_url('')?>assets/uploads/img/<?= $this->session->userdata('account_avatar'); ?>">

                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 f_l m_5">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text_1_2 f_r title_info_big  p0">
                            کالای اصل را از ما بخرید
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_info_small p0">
                            <div class="f_r title_c">کد کاربری :</div>
                            <div class="f_r">
                                <?= $this->session->userdata('accounts_id'); ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_info_small f_r p0">
                            <div class="f_r title_c">آخرین به روز رسانی :</div>
                            <div class="f_r">۱۳۹۷/۰۸/۰۵</div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabad_div_info ">
                    <?= $this->session->userdata('account_fn'); ?> <?= $this->session->userdata('account_ln'); ?>
                    عزيز
                    شما در بخش <span style="color:red;"><?= $title; ?></span> سايت مي باشيد
                </div>

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="ghavanin_2 fnt_18">
                    آخرین فعالیت ها
                    <div class="bottom"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2 p0">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                        <ul class=" m_5 p0">
                            <li class="col-lg-12 col-md-12 col-sm-12 hidden-xs today-li-tittle p_10_5 p0">
                                <ul class="p0">
                                    <li class="col-lg-4 col-md-5 col-sm-4 col-xs-7 today-li-inner-tittle f_r p0">نام
                                        کالا یا محصول</li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-2 today-li-inner black f_r p0">مبلغ
                                        کالا بدون تخفیف به تومان</li>
                                    <li class="col-lg-2 hidden-md hidden-sm hidden-xs today-li-inner red f_r p0">درصد
                                        تخفیف</li>
                                    <li class="col-lg-2  col-md-3 col-sm-3 col-xs-3 today-li-inner green f_r p0">قیمت با
                                        تخفیف</li>
                                    <li class="col-lg-1 col-md-1 col-sm-2 hidden-xs today-li-inner black f_r p0">تعداد
                                        کل</li>
                                </ul>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 today-li m_2 p0">
                                <ul class="ul_buy p0">
                                    <li style="padding-top: 1px!important;"
                                        class="col-lg-4 col-md-5 col-sm-4 col-xs-6 today-li-inner-tittle f_r p0">کفش
                                        زنانه</li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 today-li-inner black f_r p0">۲۰۰/۰۰۰
                                    </li>
                                    <li class="col-lg-2 hidden-md hidden-sm hidden-xs today-li-inner red f_r p0">۲۰٪
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3 today-li-inner green f_r p0">۱۶۰/۰۰۰
                                    </li>
                                    <li class="col-lg-1 col-md-1 col-sm-2 hidden-xs today-li-inner black f_r  p0">
                                        ۱۰ عدد
                                    </li>
                                </ul>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 today-li m_2 p0">
                                <ul class="ul_buy p0">
                                    <li style="padding-top: 1px!important;"
                                        class="col-lg-4 col-md-5 col-sm-4 col-xs-6 today-li-inner-tittle f_r p0">کفش
                                        زنانه</li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 today-li-inner black f_r p0">۲۰۰/۰۰۰
                                    </li>
                                    <li class="col-lg-2 hidden-md hidden-sm hidden-xs today-li-inner red f_r p0">۲۰٪
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3 today-li-inner green f_r p0">۱۶۰/۰۰۰
                                    </li>
                                    <li class="col-lg-1 col-md-1 col-sm-2 hidden-xs today-li-inner black f_r  p0">
                                        ۱۰ عدد
                                    </li>
                                </ul>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 today-li m_2 p0">
                                <ul class="ul_buy p0">
                                    <li style="padding-top: 1px!important;"
                                        class="col-lg-4 col-md-5 col-sm-4 col-xs-6 today-li-inner-tittle f_r p0">کفش
                                        زنانه</li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 today-li-inner black f_r p0">۲۰۰/۰۰۰
                                    </li>
                                    <li class="col-lg-2 hidden-md hidden-sm hidden-xs today-li-inner red f_r p0">۲۰٪
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3 today-li-inner green f_r p0">۱۶۰/۰۰۰
                                    </li>
                                    <li class="col-lg-1 col-md-1 col-sm-2 hidden-xs today-li-inner black f_r  p0">
                                        ۱۰ عدد
                                    </li>
                                </ul>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 today-li m_2 p0">
                                <ul class="ul_buy p0">
                                    <li style="padding-top: 1px!important;"
                                        class="col-lg-4 col-md-5 col-sm-4 col-xs-6 today-li-inner-tittle f_r p0">کفش
                                        زنانه</li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 today-li-inner black f_r p0">۲۰۰/۰۰۰
                                    </li>
                                    <li class="col-lg-2 hidden-md hidden-sm hidden-xs today-li-inner red f_r p0">۲۰٪
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3 today-li-inner green f_r p0">۱۶۰/۰۰۰
                                    </li>
                                    <li class="col-lg-1 col-md-1 col-sm-2 hidden-xs today-li-inner black f_r  p0">
                                        ۱۰ عدد
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>


        </div>

    </div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>



<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>