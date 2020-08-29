<?php include_once (APPPATH.'views/_layout/site/header.php'); ?>










<!-- column-right -->

<?php foreach($jobs_vip as $bank_mashaghel_value) { ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_head p0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 job_title t_align p0">بانک مشاغل</div>
        <div class="f_l report_violation p0">
            <a href="">
                <span>
                    گزارش تخلف
                </span>
            </a>
        </div>
        <div class="f_l report_damage p0">
            <a href="">
                <span>
                    گزارش خرابی
                </span>
            </a>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_box p0">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flex_box p0">



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_side flex_item f_l p0">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 img f_r m0 p0">
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_logo; ?>"
                        class="img-responsive img-circle" alt="">
                </div>

                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 info_top f_l p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                        <h2><?= $bank_mashaghel_value->jobs_title; ?></h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_1 p0">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text_1_1 f_r p0">
                            <div class="f_r">شناسه :</div>
                            <span class=""><?= $bank_mashaghel_value->jobs_id; ?></span>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 text_1_2 f_l p0">
                            <?= $bank_mashaghel_value->jobs_shoar; ?></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 point_section p0">
                        <div class="f_r">
                            <button type="button" class="btn_global m0 p0"><img
                                    src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                    class="img-responsive" alt=""></button>
                        </div>
                        <div class="observe f_r">
                            <i class="icon-eye f_r"></i>
                            <span>
                                8585
                            </span>
                        </div>
                        <div class="f_l score p0">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_section p0">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_blue c_border f_r p0">
                        <a href="">
                            <div class="p0">
                                دنبال کنید
                                <i class="icon-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_blue c_border f_r p0">
                        <a href="">
                            <div class="p0">
                                ارسال پیام
                                <img src="<?=base_url('')?>assets/site/svg/mail-envelope-closed_314200.svg"
                                    class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_lite c_border f_r p0">
                        <div class="p0">
                            <span class="color">دنبال کنندگان :</span>
                            <span class="p0">
                                200
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_lite c_border p0">
                        <a href="">
                            <div class="color p0">
                                نظرات کاربران
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_mid p0">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 management f_r p0">
                        <div class="f_r title_c">مدیریت :</div>
                        <div class="f_r"><?= $bank_mashaghel_value->account_fn; ?>
                            <?= $bank_mashaghel_value->account_ln; ?></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group p0">
                        <div class="f_r title_c">گروه بندی :</div>
                        <div class="f_r">
                            <?= $bank_mashaghel_value->jobs_sub_cate_title; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 update f_r p0">
                        <div class="f_r title_c">آخرین به روز رسانی :</div>
                        <div class="f_r"><?= $bank_mashaghel_value->jobs_update_date; ?></div>
                    </div>
                    <ul class="col-lg-6 col-md-6 col-sm-6 col-xs-12 address f_l p0">
                        <li>
                            <div class="f_r"><?= $bank_mashaghel_value->ostan_title; ?></div>
                        </li>
                        <li>
                            <div class="f_r"><?= $bank_mashaghel_value->city_title; ?></div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 agent p0">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_border c_b_r f_r p0">
                        <div class="t_align">
                            <span class="title_c">تعداد نمایندگی فعال :</span>
                            <span class=""><?= $bank_mashaghel_value->jobs_count_namayandegi; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_border c_b_l f_l p0">
                        <div class="t_align">
                            <span class="title_c">تعداد نمایندگی فعال در <?= $bank_mashaghel_value->city_title; ?>
                                :</span>
                            <span class=""><?= $bank_mashaghel_value->jobs_count_namayandegi_in_city; ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_border branch p0">
                    <div class="t_align">
                        <span><?= $bank_mashaghel_value->city_title; ?> -
                            <span><?= $bank_mashaghel_value->jobs_shobe	; ?></span></span>

                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_side flex_item f_r p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img_swiper bankmashaghel_img  p0">
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_img; ?>" class=""
                        alt="" title="">

                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 special_out p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-container swiper_bankMashaghel">
                    <div class="swiper-wrapper">
                    <?php foreach($jobs_imgs as $jobs_imgs_value) { ?>

                        <div class="p0 swiper-slide">

                            <li>
                                    <img src="<?=base_url('')?>assets/uploads/<?= $jobs_imgs_value->jobs_image_url; ?>" class="sw-slider" alt="" title="">
                            </li>

                            
                        </div>
                        <?php } ?>
                    
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-next_bankMashaghel"></div>
                    <div class="swiper-button-prev swiper-button-prev_bankMashaghel"></div>

                </div>




<<<<<<< HEAD
            </div>


        </div>

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 poster p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head p0">
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs number p0">
                    <i class="icon-bell3"></i>
                    امروز

                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 title p0">تابلو اعلانات آنلاین <?= $bank_mashaghel_value->jobs_title; ?>  </div>
                <div class="col-lg-2 col-md-3 col-sm-3 hidden-xs date t_align p0"> <?= $timeStamp; ?></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list_item p0">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 title_in f_r p0">
                            سوییت یک خوابه سه تخته
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 flex_box_in f_r p0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img f_r m0 p0">
                                <img alt="" title="" src="<?=base_url('')?>assets/site/img/Aquaman.jpg"
                                    class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 link_img f_r p0">
                                <a href="">
                                    <div class="">
                                        <img src="<?=base_url('')?>assets/site/img/pdf.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 left_section f_r p0">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 detail t_align f_r p0">
                                <a href="">
                                    <div class="similar_in ">
                                        مشاهده جزییات
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 observe t_align f_r p0">
                                <div class="similar_in">
                                    <span>
                                        8585
                                    </span>
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_time t_align f_r p0">
                                <div class="similar_in">
                                    <i class="icon-clock5"></i>
                                    <span>
                                        12:26
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_date t_align f_r p0">
                                <div class="similar_in">
                                    <i class="icon-calendar"></i>
                                    <span>
                                        8/8/1398
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 title_in f_r p0">
                            سوییت یک خوابه سه تخته
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 flex_box_in f_r p0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img f_r m0 p0">
                                <img alt="" title="" src="<?=base_url('')?>assets/site/img/Aquaman.jpg"
                                    class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 link_img f_r p0">
                                <a href="">
                                    <div class="">
                                        <img src="<?=base_url('')?>assets/site/img/pdf.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 left_section f_r p0">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 detail t_align f_r p0">
                                <a href="">
                                    <div class="similar_in ">
                                        مشاهده جزییات
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 observe t_align f_r p0">
                                <div class="similar_in">
                                    <span>
                                        8585
                                    </span>
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_time t_align f_r p0">
                                <div class="similar_in">
                                    <i class="icon-clock5"></i>
                                    <span>
                                        12:26
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_date t_align f_r p0">
                                <div class="similar_in">
                                    <i class="icon-calendar"></i>
                                    <span>
                                        8/8/1398
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 archive t_align f_l p0">
                <a href="">
                    <div class="in f_l m0">
                        <i class="icon-chain f_r"></i>
                        <span>
                            آرشیو اعلانات
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 footer f_r p0">
                <p class="f_r">
                    توجه : هرگونه مسولیت محتوا ه عهده صاحب پست می باشد .
                    <a href="">
                        ( مشاهده قوانین ، هشدارها و تذکرات )
                    </a>
                </p>
            </div>
        </div> -->

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">

            <a href="#tab_btn_moarefi" data-toggler="toggle">
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 moarefi m_p_5 c_bg f_r p0">
                    <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 t_align f_r p0">معرفی کالا و خدمات</div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 f_r p0">
                        <div class="num f_r pos_abs">2</div>
                        <i class="icon-bell3 f_l pos_abs"></i>
                    </div>
                    <div class="position p0">
                    </div>
                </div>
            </a>
            <a href="">
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 takhfifi m_p_5 c_bg f_r p0">
                    <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 t_align f_r p0">پنل تخفیفی</div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 f_r p0">
                        <div class="num f_r pos_abs">2</div>
                        <i class="icon-bell3 f_l pos_abs"></i>
                    </div>
                </div>
            </a>
        </div> -->

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade moarefi_toggler" id="tab_btn_moarefi">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flex_box p0">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 big_img marg_tb m0 f_r p0">
                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                </div>
                <ul class="col-lg-5 col-md-5 col-sm-5 col-xs-12 little_img marg_tb f_l p0">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 f_r caption p0">
                <div class="title p0">توضیحات</div>
                <p>
                    در سال‌های اخیر شتاب زندگی روزمره بالا رفته‌است و به‌تبع آن، ما زمان کمتری برای چیدن مقدمات سفر در
                    اختیار داریم؛ مجبوریم از کمترین زمان‌هایمان بهترین استفاده را ببریم، چه برای برنامه‌ریزی سفر و چه در
                    خود سفر. رزرو اینترنتی به ما کمک می‌کند در سفرهایمان زمان را صرف پیداکردن محل اقامت نکنیم و دردسرهای
                    رزرو هتل به‌شیوه سنتی را نداشته‌باشیم.
                </p>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 img_text_on f_l">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="text_on p0">
                            استخر
                        </div>
                        <div class="img_holder p0 m0">
                            <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="text_on p0">
                            شاپ
                        </div>
                        <div class="img_holder p0 m0">
                            <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="text_on p0">
                            تالار پذیرایی کافی
                        </div>
                        <div class="img_holder p0 m0">
                            <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 caption f_r p0">
                <div class="title p0">وبژگی ها</div>
                <p>
                    در سال‌های اخیر شتاب زندگی روزمره بالا رفته‌است و به‌تبع آن، ما زمان کمتری برای چیدن مقدمات سفر در
                    اختیار داریم؛ مجبوریم از کمترین زمان‌هایمان بهترین استفاده را ببریم، چه برای برنامه‌ریزی سفر و چه در
                    خود سفر. رزرو اینترنتی به ما کمک می‌کند در سفرهایمان زمان را صرف پیداکردن محل اقامت نکنیم و دردسرهای
                    رزرو هتل به‌شیوه سنتی را نداشته‌باشیم.
                </p>
            </div>
=======
                <div class="niazmandiha_form">
                    <form>
                        <div class="fild">
                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>کلبپ تبلیغاتی
                                        </span>
                                        <input id="btn_t_t_clip" onclick="myFunction()" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>توضیحات کلی </span>
                                        <input id="btn_t_t_tozihat" onclick="myFunction_2(),myFunction()" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>

                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade is-visible t_t_clip p_0_10_i" id="t_t_clip">
                                        <video class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video p0" id="video_clip" poster="img/Band.jpg" preload="" playsinline controls>
                                            <source src="<?=base_url('')?>assets/site/video/file_example_MP4_1280_10MG.mp4" type="video/mp4">
                                            <source src="<?=base_url('')?>assets/site/video/SampleVideo_176x144_1mb.3gp" type="video/3gp">
                                            <p>مرورگر شما قادر به پشتیبانی از فایل ویدئویی نیست</p>
                                        </video>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tozihat p_0_10_i" id="t_t_tozihat">
                                        <p>
                                            هتل بوتیک تجاری آرامیس با 133 واحد اقامتی شامل اتاق و سوئیت مجلل و مدرن همراه با ارائه بهترین سیستم های کنترل دما، صوتی، تصویری، تلویزیون (IP TV)، تلفن، اینترنت پرسرعت بی سیم (وایرلس)، استفاده از سیستم تهویه مطبوع مرکزی، مدرنترین امکانات و تجهیزات در
                                            رستوران با شکوه و مجلل، غذاهای متنوع و لذیذ ایرانی، کافی شاپ، مجموعه سلامتی و تندرستی بسیار مجهز، با تمرکز و دقت در ارائه سرویس های مطلوب در خدمت میهمانان گرامی می باشد.
                                        </p>
                                    </div>
                                </div>

                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>امکانات و خدمات </span>
                            <input id="btn_t_t_emkanat" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>مراکز طرف قرارداد </span>
                            <input id="btn_t_t_tarafe_gharardad" onclick="myFunction_3(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>


                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_emkanat p0" id="t_t_emkanat">
                                        <ul>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tarafe_gharardad p_0_10_i" id="t_t_tarafe_gharardad">
                                        gggggggggggggg
                                    </div>
                                </div>



                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>ساعت  کاری </span>
                            <input id="btn_t_t_saate_kari" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>اطلاعات تماس </span>
                            <input id="btn_t_t_etelaat_tamas" onclick="myFunction_4(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_saate_kari_vip p0" id="t_t_saate_kari">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_r f_r">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon f_r title ta_r p0">
                                                    <i class="icon-calendar4"></i> ساعت و وضعیت کاری
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 week p0">
                                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        یکشنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        دو شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        سه شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        چهار شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        پنج شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r j_c">
                                                    <div class="title_date t_align">
                                                        جمعه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_etelaat_tamas p0" id="t_t_etelaat_tamas">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>موبایل : 09351111111 - 091811111111</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>تلفن ثابت : 08111111111</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>فکس : 08111111111  </span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>ایمیل : daglass@gmail.com </span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>کد پستی : 99879 - 65919</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>وب سایت : takfile.com</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>




                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>آدرس شبکه های اجتماعی</span>
                            <input id="btn_t_t_shabake_ejtemaei" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>آدرس و موقعیت روی نقشه </span>
                            <input id="btn_t_t_addres_map" onclick="myFunction_5(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_shabake_ejtemaei is-visible p0" id="t_t_shabake_ejtemaei">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                                    <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                                    Mojtaba
                                                </div>
                                            </li>
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                                    <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                                    Mojtaba
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0" id="t_t_addres_map">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                                آدرس
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_text f_r p0">
                                                تــوکیو - بالاتر از میدان امام (ره) - نبش خیابان ترا
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                                موقعیت
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                                                <img src="<?=base_url('')?>assets/site/img/map.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>شرایط فروش </span>
                            <input id="btn_t_t_sharayet_foroosh" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>لیست خدمات و محصولات</span>
                            <input id="btn_t_t_menu_list_khadamat" onclick="myFunction_6(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">



                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_sharayet_foroosh p_0_10_i" id="t_t_sharayet_foroosh">
                                        gggggggggggggg
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_menu_list_khadamat p0" id="t_t_menu_list_khadamat">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>لوح ها و تقدیرنامه ها </span>
                            <input id="btn_t_t_loh_taghdirname" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>مجوزها و اعتبار</span>
                            <input id="btn_t_t_mojavezha" onclick="myFunction_7(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_loh_taghdirname p0" id="t_t_loh_taghdirname">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_mojavezha p0" id="t_t_mojavezha">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>




                            </ul>
                        </div>
                    </form>
                </div>





>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 price f_r p0">
                قیمت :
                <span class="data_price">
                    125000
                </span>
                تومان
            </div>

        </div> -->

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer p0">
                <p class="f_r">
                    توجه : هرگونه مسولیت محتوا ه عهده صاحب پست می باشد .
                    <a href="">
                        ( مشاهده قوانین ، هشدارها و تذکرات )
                    </a>
                </p>
            </div>

        </div>

<<<<<<< HEAD
        <!-- LG & MD Only -->
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs toggler_tabs p0">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r p0">
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_clip" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            کلبپ تبلیغاتی
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_tozihat" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            توضیحات کلی
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_emkanat" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            امکانات و خدمات
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_tarafe_gharardad" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            مراکز طرف قرارداد
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a onclick="swiper_inn()" href="#t_t_saate_kari" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            ساعت کاری
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_etelaat_tamas" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_1">
                        <div class="title">
                            اطلاعات تماس
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="tabs_menu_1" class="col-lg-12 col-md-12 hidden-sm hidden-xs tabs p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade is-visible t_t_clip p0"
                id="t_t_clip">
                <video class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video p0" id="video_clip" poster="img/Band.jpg"
                    preload="" playsinline controls>
                    <source src="<?=base_url('')?>assets/uploads/videos/<?= $bank_mashaghel_value->jobs_video; ?>" type="video/mp4">
                    <source src="<?=base_url('')?>assets/site/video/SampleVideo_176x144_1mb.3gp" type="video/3gp">
                    <p>مرورگر شما قادر به پشتیبانی از فایل ویدئویی نیست</p>
                </video>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tozihat p0" id="t_t_tozihat">
                <p>
                <?= $bank_mashaghel_value->jobs_content; ?>
                </p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_emkanat p0" id="t_t_emkanat">
                <ul>
               
                <?php foreach($bank_mashaghel_service as $bank_mashaghel_service_value) { ?>
                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                <a href="" onclick="return false;">
                                    <div class="t_align all">
                                        <i class="icon-check-square"></i>
                                        <div class="t_align txt p0">
                                            <?= $bank_mashaghel_service_value->jobs_service_title; ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    
                </ul>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tarafe_gharardad p0"
                id="t_t_tarafe_gharardad">
                                <?= $bank_mashaghel_value->jobs_gharardad; ?>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_saate_kari_vip p0"
                id="t_t_saate_kari">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_r f_r">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon f_r title ta_r p0">
                            <i class="icon-calendar4"></i>
                            ساعت و وضعیت کاری
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 week p0">
                    <!-- <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <li class="f_r">
                            <div class="title_date t_align">
                                شنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r">
                            <div class="title_date t_align">
                                یکشنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r">
                            <div class="title_date t_align">
                                دو شنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r">
                            <div class="title_date t_align">
                                سه شنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r">
                            <div class="title_date t_align">
                                چهار شنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r">
                            <div class="title_date t_align">
                                پنج شنبه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                        <li class="f_r j_c">
                            <div class="title_date t_align">
                                جمعه
                            </div>
                            <ul>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                                <li>
                                    <div class="time">
                                        <div class="AM">8 - 12</div>
                                        <div class="PM">15 - 22</div>
                                    </div>
                                    <div class="date">5 / 5 / 98</div>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
                    <?= $bank_mashaghel_value->jobs_work_titme; ?>

                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_etelaat_tamas p0"
                id="t_t_etelaat_tamas">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">موبایل</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_mobile; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">تلفن ثابت</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_tell; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">فکس</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_fax; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">ایمیل</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_email; ?>
                                                </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">کد پستی</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_code_posti; ?>

                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">وب سایت</div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_website; ?>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 toggler_tabs p0">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r p0">
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_shabake_ejtemaei" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            آدرس شبکه های اجتماعی
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_addres_map" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            آدرس و موقعیت روی نقشه
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_sharayet_foroosh" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            شرایط فروش
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_menu_list_khadamat" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            لیست خدمات و محصولات
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_loh_taghdirname" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            لوح ها و تقدیرنامه ها
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
                <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <a href="#t_t_mojavezha" class="nav-link active" data-toggler="tabs"
                        data-toggler-collection="#tabs_menu_2">
                        <div class="title">
                            مجوزها و اعتبار
                            <div class="d_n"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="tabs_menu_2" class="col-lg-12 col-md-12  tabs p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_shabake_ejtemaei is-visible p0"
                id="t_t_shabake_ejtemaei">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg" class="img-responsive"
                                alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_instagram; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_telegram; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/whatsapp.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_whatsapp; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/facebook.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_facebook; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/twitter.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_tw; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/pinterest.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_pinterest; ?>
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                            <img src="<?=base_url('')?>assets/site/svg/youtube.svg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                        <?= $bank_mashaghel_value->jobs_youtube; ?>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0"
                id="t_t_addres_map">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p0">
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                        آدرس
                    </div>
                    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 fild_text f_r p0">
                    <?= $bank_mashaghel_value->jobs_address; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p0">
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                        موقعیت
                    </div>
                    <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                    <div id="map" style="width: 600px; height: 450px; background: #eee; border: 2px solid #aaa;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_sharayet_foroosh p0"
                id="t_t_sharayet_foroosh">
                <?= $bank_mashaghel_value->jobs_sharayet; ?>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_menu_list_khadamat p0"
                id="t_t_menu_list_khadamat">
                <?= $bank_mashaghel_value->jobs_list_service; ?>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_loh_taghdirname p0"
                id="t_t_loh_taghdirname">
                <?= $bank_mashaghel_value->jobs_lohe_taghdir; ?>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_mojavezha p0" id="t_t_mojavezha">
            
            <?= $bank_mashaghel_value->jobs_mojavez; ?>
            </div>
=======

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 users_point title_global p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head t_align p0">
                <div class="title t_align">
                    <span>
                        امتیاز کاربران
                    </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 section_1 f_r p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                    <h3>به این کسب کار چه امتیازی می دهید</h3>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 data_base p0">
                    <div class="progress-pie-chart" data-percent="3" >
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 d_b f_l p0">
                        <div class="f_r">میانگین :</div>
                        <div id="point_d" class="point_d f_r">

                        </div>
                        <div class="f_r"> از ۵ امتیاز</div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 d_b_2 f_l p0">
                        از مجموع
                        <span id="comment" class="comment">
                            ۳۱
                        </span>
                        نظر ثبت شده
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 d_b_3 p0">برای ثبت نظر و امتیاز دادن به این هتل روی دکمه زیر کلیک کنید</div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d_b_4 f_r p0">
                    <button class="btn f_r" type="button" name="">
                        ثبت نظر
                        <i class="icon-plus f_l"></i>
                    </button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 section_2 f_r ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">امکانات و قابلیت ها :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">3</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 60%;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">ارزش در برابر قیمت :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">2</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">خوشرویی کارکنان :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">2</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 section_2 ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">سهولت در دسترسی :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">2</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">تنوع خدمات و و محصولات :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">2</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
                    <div class="title f_r">میزان رضایتمندی :</div>
                    <div class="count f_r">
                        ۵/
                        <span class="f_r">4</span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                        <div class="progress-bar" style="width: 80%;" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5"></div>
                    </div>
                </div>
             </div>

        </div>


    
    
    
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head similar_jobs title_global p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head t_align p0">
                <div class="title t_align">
                    <span>
                        کسب و کارهای مشابه
                    </span>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side list_item p0">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                            <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg" class="img-responsive" alt=""></button>
                            
                            <div class="f_l score p0">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                            <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg" class="img-responsive" alt=""></button>
                            
                            <div class="f_l score p0">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                            <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg" class="img-responsive" alt=""></button>
                            
                            <div class="f_l score p0">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                            <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg" class="img-responsive" alt=""></button>
                            
                            <div class="f_l score p0">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>





</div>
    
    
    
    
    
    
    
    
    
    
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
      
<script>
    var swiper = new Swiper('.swiper_bankMashaghel', {
        
            slidesPerView: 4,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next_bankMashaghel',
        prevEl: '.swiper-button-prev_bankMashaghel',
        },
    });
</script>
    

<script>
    function myFunction() {
        var btn_t_t_clip = document.getElementById("btn_t_t_clip");
        var btn_t_t_tozihat = document.getElementById("btn_t_t_tozihat");
        var btn_t_t_emkanat = document.getElementById("btn_t_t_emkanat");
        var btn_t_t_tarafe_gharardad = document.getElementById("btn_t_t_tarafe_gharardad");
        var btn_t_t_saate_kari = document.getElementById("btn_t_t_saate_kari");

        var btn_t_t_etelaat_tamas = document.getElementById("btn_t_t_etelaat_tamas");
        var btn_t_t_shabake_ejtemaei = document.getElementById("btn_t_t_shabake_ejtemaei");
        var btn_t_t_addres_map = document.getElementById("btn_t_t_addres_map");

        var btn_t_t_sharayet_foroosh = document.getElementById("btn_t_t_sharayet_foroosh");

        var btn_t_t_menu_list_khadamat = document.getElementById("btn_t_t_menu_list_khadamat");

        var btn_t_t_loh_taghdirname = document.getElementById("btn_t_t_loh_taghdirname");
        var btn_t_t_mojavezha = document.getElementById("btn_t_t_mojavezha");




        var t_t_clip = document.getElementById("t_t_clip");
        var t_t_tozihat = document.getElementById("t_t_tozihat");
        var t_t_emkanat = document.getElementById("t_t_emkanat");
        var t_t_tarafe_gharardad = document.getElementById("t_t_tarafe_gharardad");
        var t_t_saate_kari = document.getElementById("t_t_saate_kari");

        var t_t_etelaat_tamas = document.getElementById("t_t_etelaat_tamas");
        var t_t_shabake_ejtemaei = document.getElementById("t_t_shabake_ejtemaei");
        var t_t_addres_map = document.getElementById("t_t_addres_map");

        var t_t_sharayet_foroosh = document.getElementById("t_t_sharayet_foroosh");

        var t_t_menu_list_khadamat = document.getElementById("t_t_menu_list_khadamat");

        var t_t_loh_taghdirname = document.getElementById("t_t_loh_taghdirname");
        var t_t_mojavezha = document.getElementById("t_t_mojavezha");



        if (btn_t_t_clip.checked == true) {
            t_t_clip.style.display = "block";
            btn_t_t_tozihat.checked = false;
        } else {
            t_t_clip.style.display = "none";
        }
        if (btn_t_t_tozihat.checked == true) {
            t_t_tozihat.style.display = "block";
            btn_t_t_clip.checked = false;
        } else {
            t_t_tozihat.style.display = "none";
        }

        if (btn_t_t_emkanat.checked == true) {
            t_t_emkanat.style.display = "block";
            btn_t_t_tarafe_gharardad.checked = false;
        } else {
            t_t_emkanat.style.display = "none";
        }
        if (btn_t_t_tarafe_gharardad.checked == true) {
            btn_t_t_emkanat.checked = false;
            t_t_tarafe_gharardad.style.display = "block";
        } else {
            t_t_tarafe_gharardad.style.display = "none";
        }

        if (btn_t_t_saate_kari.checked == true) {
            t_t_saate_kari.style.display = "block";
            btn_t_t_etelaat_tamas.checked = false;
        } else {
            t_t_saate_kari.style.display = "none";
        }
        if (btn_t_t_etelaat_tamas.checked == true) {
            t_t_etelaat_tamas.style.display = "block";
            btn_t_t_saate_kari.checked = false;
        } else {
            t_t_etelaat_tamas.style.display = "none";
        }

        if (btn_t_t_shabake_ejtemaei.checked == true) {
            t_t_shabake_ejtemaei.style.display = "block";
            btn_t_t_addres_map.checked = false;
        } else {
            t_t_shabake_ejtemaei.style.display = "none";
        }
        if (btn_t_t_addres_map.checked == true) {
            t_t_addres_map.style.display = "block";
            btn_t_t_shabake_ejtemaei.checked = false;
        } else {
            t_t_addres_map.style.display = "none";
        }

        if (btn_t_t_sharayet_foroosh.checked == true) {
            t_t_sharayet_foroosh.style.display = "block";
            btn_t_t_menu_list_khadamat.checked = false;
        } else {
            t_t_sharayet_foroosh.style.display = "none";
        }
        if (btn_t_t_menu_list_khadamat.checked == true) {
            t_t_menu_list_khadamat.style.display = "block";
            btn_t_t_sharayet_foroosh.checked = false;
        } else {
            t_t_menu_list_khadamat.style.display = "none";
        }

        if (btn_t_t_loh_taghdirname.checked == true) {
            t_t_loh_taghdirname.style.display = "block";
            btn_t_t_mojavezha.checked = false;
        } else {
            t_t_loh_taghdirname.style.display = "none";
        }
        if (btn_t_t_mojavezha.checked == true) {
            t_t_mojavezha.style.display = "block";
            btn_t_t_loh_taghdirname.checked = false;
        } else {
            t_t_mojavezha.style.display = "none";
        }
    }
</script>


<script>
    function myFunction_2() {
        var btn_t_t_clip = document.getElementById("btn_t_t_clip");

        if (btn_t_t_clip.checked == true) {
            btn_t_t_clip.checked = false;
        } 

    }
</script>

<script>
    function myFunction_3() {
        var btn_t_t_emkanat = document.getElementById("btn_t_t_emkanat");

        if (btn_t_t_emkanat.checked == true) {
            btn_t_t_emkanat.checked = false;
        } 

    }
</script>

<script>
    function myFunction_4() {
        var btn_t_t_saate_kari = document.getElementById("btn_t_t_saate_kari");

        if (btn_t_t_saate_kari.checked == true) {
            btn_t_t_saate_kari.checked = false;
        } 

    }
</script>

<script>
    function myFunction_5() {
        var btn_t_t_shabake_ejtemaei = document.getElementById("btn_t_t_shabake_ejtemaei");

        if (btn_t_t_shabake_ejtemaei.checked == true) {
            btn_t_t_shabake_ejtemaei.checked = false;
        } 

    }
</script>

<script>
    function myFunction_6() {
        var btn_t_t_sharayet_foroosh = document.getElementById("btn_t_t_sharayet_foroosh");

        if (btn_t_t_sharayet_foroosh.checked == true) {
            btn_t_t_sharayet_foroosh.checked = false;
        } 

    }
</script>

<script>
    function myFunction_7() {
        var btn_t_t_loh_taghdirname = document.getElementById("btn_t_t_loh_taghdirname");

        if (btn_t_t_loh_taghdirname.checked == true) {
            btn_t_t_loh_taghdirname.checked = false;
        } 

    }
</script>



    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?><?php include_once (APPPATH.'views/_layout/site/header.php'); ?>
 
    
    
    
    
    
    
    


    <!-- column-right -->


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_head p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 job_title t_align p0">بانک مشاغل</div>
                <div class="f_l report_violation p0">
                    <a href="">
                        <span>
                            گزارش تخلف
                        </span>
                    </a>
                </div>
                <div class="f_l report_damage p0">
                    <a href="">
                        <span>
                            گزارش خرابی
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_box p0">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flex_box p0">



                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_side flex_item f_l p0">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 img f_r m0 p0">
                            <img src="<?=base_url('')?>assets/site/img/Hotel_logo.jpg" class="img-responsive img-circle" alt="">
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 info_top f_l p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                                <h2>هتل توس اصفهان</h2>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_1 p0">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text_1_1 f_r p0">
                                    <div class="f_r">شناسه :</div>
                                    <span class="">۱۳۳۴</span>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 text_1_2 f_l p0">کالای اصل را از ما بخرید</div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 point_section p0">
                                <div class="f_r">
                                    <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                                </div>
                                <div class="observe f_r">
                                    <i class="icon-eye f_r"></i>
                                    <span>
                                        8585
                                    </span>
                                </div>
                            <div class="f_l score p0">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_section p0">
                            
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_blue c_border f_r p0">
                                <a href="">
                                    <div class="p0">
                                        دنبال کنید
                                        <i class="icon-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_blue c_border f_r p0">
                                <a href="">
                                    <div class="p0">
                                        ارسال پیام
                                        <img src="<?=base_url('')?>assets/site/svg/mail-envelope-closed_314200.svg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_lite c_border f_r p0">
                                <div class="p0">
                                    <span class="color">دنبال کنندگان :</span>
                                    <span class="p0">
                                        200
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 contact_lite c_border p0">
                                <a href="">
                                    <div class="color p0">
                                        نظرات کاربران
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_mid p0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 management f_r p0">
                                <div class="f_r title_c">مدیریت :</div>
                                <div class="f_r">مجتبی بحیرایی</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group p0">
                                <div class="f_r title_c">گروه بندی :</div>
                                <div class="f_r">مراکز خرید
                                    <span>،</span>
                                    فروشگاه های زنجیره ای
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 update f_r p0">
                                <div class="f_r title_c">آخرین به روز رسانی :</div>
                                <div class="f_r">۱۳۹۷/۰۸/۰۵</div>
                            </div>
                            <ul class="col-lg-6 col-md-6 col-sm-6 col-xs-12 address f_l p0">
                                <li>
                                    <div class="f_r">همدان</div>
                                </li>
                                <li>
                                    <div class="f_r">نهاوند</div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 agent p0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_border c_b_r f_r p0">
                                <div class="t_align">
                                    <span class="title_c">تعداد نمایندگی فعال :</span>
                                    <span class="">۲۰۰</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_border c_b_l f_l p0">
                                <div class="t_align">
                                    <span class="title_c">تعداد نمایندگی فعال در نهاوند :</span>
                                    <span class="">۵</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_border branch p0">
                            <div class="t_align">
                                <span class="title_c">شعبـه مرکزی :</span>
                                <span>نهاوند - پاساژ پیام</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_side flex_item f_r p0" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img_swiper bankmashaghel_img  p0">
                        <img src="<?=base_url('')?>assets/site/img/Screen%20Shot%202019-08-04%20at%2011.20.21.png" class="" alt="" title="">
                            
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 special_out p0">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                                    </div>
                        </div>
                <!-- Swiper -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-container swiper_bankMashaghel">
    <div class="swiper-wrapper">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
          <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            
                  <img src="<?=base_url('')?>assets/site/img/4.png" class="img-responsive" alt="" title="">
                        
              </div>
                        
                    
          </li>
        </div>
      
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-next_bankMashaghel"></div>
    <div class="swiper-button-prev swiper-button-prev_bankMashaghel"></div>
  </div>
                
                
                
                
                    </div>


                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 poster p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head p0">
                        <div class="col-lg-1 col-md-2 col-sm-2 hidden-xs number p0">
                            <i class="icon-bell3"></i>
                            امروز
                            <span class="f_l">
                                5
                            </span>
                        </div>
                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12 title p0">تابلو اعلانات آنلاین هتل توس اصفهان</div>
                        <div class="col-lg-1 col-md-2 col-sm-2 hidden-xs date t_align p0">۹۸/۸/۵</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list_item p0">
                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 title_in f_r p0">
                                    سوییت یک خوابه سه تخته
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 flex_box_in f_r p0">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img f_r m0 p0">
                                        <img alt="" title="" src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 link_img f_r p0">
                                        <a href="">
                                            <div class="">
                                                <img src="<?=base_url('')?>assets/site/img/pdf.png" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 left_section f_r p0">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 detail t_align f_r p0">
                                        <a href="">
                                            <div class="similar_in ">
                                                مشاهده جزییات
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 observe t_align f_r p0">
                                        <div class="similar_in">
                                            <span>
                                                8585
                                            </span>
                                            <i class="icon-eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_time t_align f_r p0">
                                        <div class="similar_in">
                                            <i class="icon-clock5"></i>
                                            <span>
                                                12:26
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_date t_align f_r p0">
                                        <div class="similar_in">
                                            <i class="icon-calendar"></i>
                                            <span>
                                                8/8/1398
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 title_in f_r p0">
                                    سوییت یک خوابه سه تخته
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 flex_box_in f_r p0">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img f_r m0 p0">
                                        <img alt="" title="" src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 link_img f_r p0">
                                        <a href="">
                                            <div class="">
                                                <img src="<?=base_url('')?>assets/site/img/pdf.png" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 left_section f_r p0">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 detail t_align f_r p0">
                                        <a href="">
                                            <div class="similar_in ">
                                                مشاهده جزییات
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 observe t_align f_r p0">
                                        <div class="similar_in">
                                            <span>
                                                8585
                                            </span>
                                            <i class="icon-eye"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_time t_align f_r p0">
                                        <div class="similar_in">
                                            <i class="icon-clock5"></i>
                                            <span>
                                                12:26
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 add_date t_align f_r p0">
                                        <div class="similar_in">
                                            <i class="icon-calendar"></i>
                                            <span>
                                                8/8/1398
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 archive t_align f_l p0">
                        <a href="">
                            <div class="in f_l m0">
                                <i class="icon-chain f_r"></i>
                                <span>
                                    آرشیو اعلانات
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 footer f_r p0">
                        <p class="f_r">
                            توجه : هرگونه مسولیت محتوا ه عهده صاحب پست می باشد .
                            <a href="">
                                ( مشاهده قوانین ، هشدارها و تذکرات )
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">
                    
                    <a href="#tab_btn_moarefi" data-toggler="toggle" >
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 moarefi m_p_5 c_bg f_r p0">
                            <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 t_align f_r p0">معرفی کالا و خدمات</div>
                            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 f_r p0">
                                <div class="num f_r pos_abs">2</div>
                                <i class="icon-bell3 f_l pos_abs"></i>
                            </div>
                            <div class="position p0">
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 takhfifi m_p_5 c_bg f_r p0">
                            <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 t_align f_r p0">پنل تخفیفی</div>
                            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 f_r p0">
                                <div class="num f_r pos_abs">2</div>
                                <i class="icon-bell3 f_l pos_abs"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade moarefi_toggler" id="tab_btn_moarefi">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flex_box p0">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 big_img marg_tb m0 f_r p0">
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                        <ul class="col-lg-5 col-md-5 col-sm-5 col-xs-12 little_img marg_tb f_l p0">
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div>
                                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 f_r caption p0">
                        <div class="title p0">توضیحات</div>
                        <p>
                            در سال‌های اخیر شتاب زندگی روزمره بالا رفته‌است و به‌تبع آن، ما زمان کمتری برای چیدن مقدمات سفر در اختیار داریم؛ مجبوریم از کمترین زمان‌هایمان بهترین استفاده را ببریم، چه برای برنامه‌ریزی سفر و چه در خود سفر. رزرو اینترنتی به ما کمک می‌کند در سفرهایمان زمان را صرف پیداکردن محل اقامت نکنیم و دردسرهای رزرو هتل به‌شیوه سنتی را نداشته‌باشیم.
                        </p>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 img_text_on f_l">
                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="text_on p0">
                                    استخر
                                </div>
                                <div class="img_holder p0 m0">
                                    <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="text_on p0">
                                     شاپ
                                </div>
                                <div class="img_holder p0 m0">
                                    <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="text_on p0">
                                    تالار پذیرایی کافی
                                </div>
                                <div class="img_holder p0 m0">
                                    <img src="<?=base_url('')?>assets/site/img/eiffel.jpg" class="img-responsive" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 caption f_r p0">
                        <div class="title p0">وبژگی ها</div>
                        <p>
                            در سال‌های اخیر شتاب زندگی روزمره بالا رفته‌است و به‌تبع آن، ما زمان کمتری برای چیدن مقدمات سفر در اختیار داریم؛ مجبوریم از کمترین زمان‌هایمان بهترین استفاده را ببریم، چه برای برنامه‌ریزی سفر و چه در خود سفر. رزرو اینترنتی به ما کمک می‌کند در سفرهایمان زمان را صرف پیداکردن محل اقامت نکنیم و دردسرهای رزرو هتل به‌شیوه سنتی را نداشته‌باشیم.
                        </p>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 price f_r p0">
                        قیمت :
                        <span class="data_price">
                            125000
                        </span>
                        تومان
                    </div>

                </div>




                <div class="niazmandiha_form">
                    <form>
                        <div class="fild">
                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>کلبپ تبلیغاتی
                                        </span>
                                        <input id="btn_t_t_clip" onclick="myFunction()" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                        <span>توضیحات کلی </span>
                                        <input id="btn_t_t_tozihat" onclick="myFunction_2(),myFunction()" type="checkbox" name="">
                                        <span class="checkmark"></span>
                                    </label>

                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade is-visible t_t_clip p_0_10_i" id="t_t_clip">
                                        <video class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video p0" id="video_clip" poster="img/Band.jpg" preload="" playsinline controls>
                                            <source src="<?=base_url('')?>assets/site/video/file_example_MP4_1280_10MG.mp4" type="video/mp4">
                                            <source src="<?=base_url('')?>assets/site/video/SampleVideo_176x144_1mb.3gp" type="video/3gp">
                                            <p>مرورگر شما قادر به پشتیبانی از فایل ویدئویی نیست</p>
                                        </video>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tozihat p_0_10_i" id="t_t_tozihat">
                                        <p>
                                            هتل بوتیک تجاری آرامیس با 133 واحد اقامتی شامل اتاق و سوئیت مجلل و مدرن همراه با ارائه بهترین سیستم های کنترل دما، صوتی، تصویری، تلویزیون (IP TV)، تلفن، اینترنت پرسرعت بی سیم (وایرلس)، استفاده از سیستم تهویه مطبوع مرکزی، مدرنترین امکانات و تجهیزات در
                                            رستوران با شکوه و مجلل، غذاهای متنوع و لذیذ ایرانی، کافی شاپ، مجموعه سلامتی و تندرستی بسیار مجهز، با تمرکز و دقت در ارائه سرویس های مطلوب در خدمت میهمانان گرامی می باشد.
                                        </p>
                                    </div>
                                </div>

                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>امکانات و خدمات </span>
                            <input id="btn_t_t_emkanat" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>مراکز طرف قرارداد </span>
                            <input id="btn_t_t_tarafe_gharardad" onclick="myFunction_3(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>


                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_emkanat p0" id="t_t_emkanat">
                                        <ul>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="col-lg-2 col-md-3 col-sm-6 col-xs-6 ">
                                                <a href="" onclick="return false;">
                                                    <div class="t_align all">
                                                        <i class="icon-check-square"></i>
                                                        <div class="t_align txt p0">
                                                            اینترنت رایگان و نامحدود لابی
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_tarafe_gharardad p_0_10_i" id="t_t_tarafe_gharardad">
                                        gggggggggggggg
                                    </div>
                                </div>



                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>ساعت  کاری </span>
                            <input id="btn_t_t_saate_kari" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>اطلاعات تماس </span>
                            <input id="btn_t_t_etelaat_tamas" onclick="myFunction_4(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_saate_kari_vip p0" id="t_t_saate_kari">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_r f_r">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon f_r title ta_r p0">
                                                    <i class="icon-calendar4"></i> ساعت و وضعیت کاری
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 week p0">
                                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        یکشنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        دو شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        سه شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        چهار شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r">
                                                    <div class="title_date t_align">
                                                        پنج شنبه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="f_r j_c">
                                                    <div class="title_date t_align">
                                                        جمعه
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <div class="AM">8 - 12</div>
                                                                <div class="PM">15 - 22</div>
                                                            </div>
                                                            <div class="date">5 / 5 / 98</div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_etelaat_tamas p0" id="t_t_etelaat_tamas">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>موبایل : 09351111111 - 091811111111</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>تلفن ثابت : 08111111111</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>فکس : 08111111111  </span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>ایمیل : daglass@gmail.com </span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>کد پستی : 99879 - 65919</span>
                                                </label>
                                            </li>
                                            <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                                    <span>وب سایت : takfile.com</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>




                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>آدرس شبکه های اجتماعی</span>
                            <input id="btn_t_t_shabake_ejtemaei" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>آدرس و موقعیت روی نقشه </span>
                            <input id="btn_t_t_addres_map" onclick="myFunction_5(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_shabake_ejtemaei is-visible p0" id="t_t_shabake_ejtemaei">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                                    <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                                    Mojtaba
                                                </div>
                                            </li>
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                                    <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                                    Mojtaba
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0" id="t_t_addres_map">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                                آدرس
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_text f_r p0">
                                                تــوکیو - بالاتر از میدان امام (ره) - نبش خیابان ترا
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                                موقعیت
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                                                <img src="<?=base_url('')?>assets/site/img/map.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>شرایط فروش </span>
                            <input id="btn_t_t_sharayet_foroosh" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>لیست خدمات و محصولات</span>
                            <input id="btn_t_t_menu_list_khadamat" onclick="myFunction_6(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">



                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_sharayet_foroosh p_0_10_i" id="t_t_sharayet_foroosh">
                                        gggggggggggggg
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_menu_list_khadamat p0" id="t_t_menu_list_khadamat">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>لوح ها و تقدیرنامه ها </span>
                            <input id="btn_t_t_loh_taghdirname" onclick="myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                            <span>مجوزها و اعتبار</span>
                            <input id="btn_t_t_mojavezha" onclick="myFunction_7(),myFunction()" type="checkbox" name="">
                            <span class="checkmark"></span>
                        </label>
                                </li>

                                <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">


                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_loh_taghdirname p0" id="t_t_loh_taghdirname">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display:none" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_mojavezha p0" id="t_t_mojavezha">
                                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="img_in p0">
                                                    <img src="<?=base_url('')?>assets/site/img/zarin_pal.png" class="img-responsive" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748

        </div>


                            </ul>
                        </div>
                    </form>
                </div>











    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer p0">
        <p class="f_r">
            توجه : هرگونه مسولیت محتوا ه عهده صاحب پست می باشد .
            <a href="">
                ( مشاهده قوانین ، هشدارها و تذکرات )
            </a>
        </p>
    </div>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 users_point title_global p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head t_align p0">
        <div class="title t_align">
            <span>
                امتیاز کاربران
            </span>
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 section_1 f_r p0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">
            <h3>به این کسب کار چه امتیازی می دهید</h3>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 data_base p0">
            <div class="progress-pie-chart" data-percent="3">
                <div class="ppc-progress">
                    <div class="ppc-progress-fill"></div>
                </div>
                <div class="ppc-percents">
                    <div class="pcc-percents-wrapper">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 d_b f_l p0">
                <div class="f_r">میانگین :</div>
                <div id="point_d" class="point_d f_r">

                </div>
                <div class="f_r"> از ۵ امتیاز</div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 d_b_2 f_l p0">
                از مجموع
                <span id="comment" class="comment">
                    ۳۱
                </span>
                نظر ثبت شده
            </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 d_b_3 p0">برای ثبت نظر و امتیاز دادن به این هتل روی دکمه زیر
            کلیک کنید</div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d_b_4 f_r p0">
            <button class="btn f_r" type="button" name="">
                ثبت نظر
                <i class="icon-plus f_l"></i>
            </button>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 section_2 f_r ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">امکانات و قابلیت ها :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">3</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 60%;" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">ارزش در برابر قیمت :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">2</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">خوشرویی کارکنان :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">2</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 section_2 ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">سهولت در دسترسی :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">2</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">تنوع خدمات و و محصولات :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">2</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 40%;" role="progressbar" aria-valuenow="2" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prog_lin p0">
            <div class="title f_r">میزان رضایتمندی :</div>
            <div class="count f_r">
                ۵/
                <span class="f_r">4</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 progress p0">
                <div class="progress-bar" style="width: 80%;" role="progressbar" aria-valuenow="4" aria-valuemin="0"
                    aria-valuemax="5"></div>
            </div>
        </div>
    </div>

</div>






<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head similar_jobs title_global p0">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head t_align p0">
        <div class="title t_align">
            <span>
                کسب و کارهای مشابه
            </span>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side list_item p0">
        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                    <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                            class="img-responsive" alt=""></button>
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
                            class="img-responsive" alt=""></button>

                    <div class="f_l score p0">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                    <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                            class="img-responsive" alt=""></button>
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
                            class="img-responsive" alt=""></button>

                    <div class="f_l score p0">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                    <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                            class="img-responsive" alt=""></button>
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
                            class="img-responsive" alt=""></button>

                    <div class="f_l score p0">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img m0 p0">
                    <img src="<?=base_url('')?>assets/site/img/Aquaman.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">فروشگاه عمده</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                            class="img-responsive" alt=""></button>
                    <button type="button" class="btn_global m0 p0"><img
                            src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
                            class="img-responsive" alt=""></button>

                    <div class="f_l score p0">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>





</div>

<?php } ?>








<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

<script>
<<<<<<< HEAD
var swiper = new Swiper('.swiper_bankMashaghel', {

    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next_bankMashaghel',
        prevEl: '.swiper-button-prev_bankMashaghel',
    },
});
</script>



<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>



  
<script type="text/javascript">
    var myMap = new L.Map('map', {
        key: 'web.eOV982LVhRzJwjJtqF8DVWPiWssoG6NUUJ43LPZ3',
        maptype: 'dreamy',
        poi: true,
        traffic: false,
        center: [35.699739, 51.338097],
        zoom: 14
    });
</script>
=======
    var swiper = new Swiper('.swiper_bankMashaghel', {
        
            slidesPerView: 4,
        spaceBetween: 5,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next_bankMashaghel',
        prevEl: '.swiper-button-prev_bankMashaghel',
        },
    });
</script>
    

<script>
    function myFunction() {
        var btn_t_t_clip = document.getElementById("btn_t_t_clip");
        var btn_t_t_tozihat = document.getElementById("btn_t_t_tozihat");
        var btn_t_t_emkanat = document.getElementById("btn_t_t_emkanat");
        var btn_t_t_tarafe_gharardad = document.getElementById("btn_t_t_tarafe_gharardad");
        var btn_t_t_saate_kari = document.getElementById("btn_t_t_saate_kari");

        var btn_t_t_etelaat_tamas = document.getElementById("btn_t_t_etelaat_tamas");
        var btn_t_t_shabake_ejtemaei = document.getElementById("btn_t_t_shabake_ejtemaei");
        var btn_t_t_addres_map = document.getElementById("btn_t_t_addres_map");

        var btn_t_t_sharayet_foroosh = document.getElementById("btn_t_t_sharayet_foroosh");

        var btn_t_t_menu_list_khadamat = document.getElementById("btn_t_t_menu_list_khadamat");

        var btn_t_t_loh_taghdirname = document.getElementById("btn_t_t_loh_taghdirname");
        var btn_t_t_mojavezha = document.getElementById("btn_t_t_mojavezha");




        var t_t_clip = document.getElementById("t_t_clip");
        var t_t_tozihat = document.getElementById("t_t_tozihat");
        var t_t_emkanat = document.getElementById("t_t_emkanat");
        var t_t_tarafe_gharardad = document.getElementById("t_t_tarafe_gharardad");
        var t_t_saate_kari = document.getElementById("t_t_saate_kari");

        var t_t_etelaat_tamas = document.getElementById("t_t_etelaat_tamas");
        var t_t_shabake_ejtemaei = document.getElementById("t_t_shabake_ejtemaei");
        var t_t_addres_map = document.getElementById("t_t_addres_map");

        var t_t_sharayet_foroosh = document.getElementById("t_t_sharayet_foroosh");

        var t_t_menu_list_khadamat = document.getElementById("t_t_menu_list_khadamat");

        var t_t_loh_taghdirname = document.getElementById("t_t_loh_taghdirname");
        var t_t_mojavezha = document.getElementById("t_t_mojavezha");



        if (btn_t_t_clip.checked == true) {
            t_t_clip.style.display = "block";
            btn_t_t_tozihat.checked = false;
        } else {
            t_t_clip.style.display = "none";
        }
        if (btn_t_t_tozihat.checked == true) {
            t_t_tozihat.style.display = "block";
            btn_t_t_clip.checked = false;
        } else {
            t_t_tozihat.style.display = "none";
        }

        if (btn_t_t_emkanat.checked == true) {
            t_t_emkanat.style.display = "block";
            btn_t_t_tarafe_gharardad.checked = false;
        } else {
            t_t_emkanat.style.display = "none";
        }
        if (btn_t_t_tarafe_gharardad.checked == true) {
            btn_t_t_emkanat.checked = false;
            t_t_tarafe_gharardad.style.display = "block";
        } else {
            t_t_tarafe_gharardad.style.display = "none";
        }

        if (btn_t_t_saate_kari.checked == true) {
            t_t_saate_kari.style.display = "block";
            btn_t_t_etelaat_tamas.checked = false;
        } else {
            t_t_saate_kari.style.display = "none";
        }
        if (btn_t_t_etelaat_tamas.checked == true) {
            t_t_etelaat_tamas.style.display = "block";
            btn_t_t_saate_kari.checked = false;
        } else {
            t_t_etelaat_tamas.style.display = "none";
        }

        if (btn_t_t_shabake_ejtemaei.checked == true) {
            t_t_shabake_ejtemaei.style.display = "block";
            btn_t_t_addres_map.checked = false;
        } else {
            t_t_shabake_ejtemaei.style.display = "none";
        }
        if (btn_t_t_addres_map.checked == true) {
            t_t_addres_map.style.display = "block";
            btn_t_t_shabake_ejtemaei.checked = false;
        } else {
            t_t_addres_map.style.display = "none";
        }

        if (btn_t_t_sharayet_foroosh.checked == true) {
            t_t_sharayet_foroosh.style.display = "block";
            btn_t_t_menu_list_khadamat.checked = false;
        } else {
            t_t_sharayet_foroosh.style.display = "none";
        }
        if (btn_t_t_menu_list_khadamat.checked == true) {
            t_t_menu_list_khadamat.style.display = "block";
            btn_t_t_sharayet_foroosh.checked = false;
        } else {
            t_t_menu_list_khadamat.style.display = "none";
        }

        if (btn_t_t_loh_taghdirname.checked == true) {
            t_t_loh_taghdirname.style.display = "block";
            btn_t_t_mojavezha.checked = false;
        } else {
            t_t_loh_taghdirname.style.display = "none";
        }
        if (btn_t_t_mojavezha.checked == true) {
            t_t_mojavezha.style.display = "block";
            btn_t_t_loh_taghdirname.checked = false;
        } else {
            t_t_mojavezha.style.display = "none";
        }
    }
</script>


<script>
    function myFunction_2() {
        var btn_t_t_clip = document.getElementById("btn_t_t_clip");

        if (btn_t_t_clip.checked == true) {
            btn_t_t_clip.checked = false;
        } 

    }
</script>

<script>
    function myFunction_3() {
        var btn_t_t_emkanat = document.getElementById("btn_t_t_emkanat");

        if (btn_t_t_emkanat.checked == true) {
            btn_t_t_emkanat.checked = false;
        } 

    }
</script>

<script>
    function myFunction_4() {
        var btn_t_t_saate_kari = document.getElementById("btn_t_t_saate_kari");

        if (btn_t_t_saate_kari.checked == true) {
            btn_t_t_saate_kari.checked = false;
        } 

    }
</script>

<script>
    function myFunction_5() {
        var btn_t_t_shabake_ejtemaei = document.getElementById("btn_t_t_shabake_ejtemaei");

        if (btn_t_t_shabake_ejtemaei.checked == true) {
            btn_t_t_shabake_ejtemaei.checked = false;
        } 

    }
</script>

<script>
    function myFunction_6() {
        var btn_t_t_sharayet_foroosh = document.getElementById("btn_t_t_sharayet_foroosh");

        if (btn_t_t_sharayet_foroosh.checked == true) {
            btn_t_t_sharayet_foroosh.checked = false;
        } 

    }
</script>

<script>
    function myFunction_7() {
        var btn_t_t_loh_taghdirname = document.getElementById("btn_t_t_loh_taghdirname");

        if (btn_t_t_loh_taghdirname.checked == true) {
            btn_t_t_loh_taghdirname.checked = false;
        } 

    }
</script>



    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
