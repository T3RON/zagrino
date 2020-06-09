<?php include_once (APPPATH.'views/_layout/site/header.php'); ?>



<!-- column-right -->

<?php foreach($bank_mashaghel as $bank_mashaghel_value) { ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0" style="direction: rtl;">

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
                            <span class=""><?= $bank_mashaghel_value->jobs_id; ?>
                            </span>
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
                        <div class="f_r"><?= $bank_mashaghel_value->update_date; ?></div>
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
                        <span class="title_c">شعبـه مرکزی :</span>
                        <span><?= $bank_mashaghel_value->city_title; ?> -
                            <span><?= $bank_mashaghel_value->jobs_shobe	; ?></span></span>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_side flex_item f_r p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img_swiper bankmashaghel_img  p0">
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>" class=""
                        alt="" title="">

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

                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>" class="img-responsive" alt=""
                                        title="">

                                </div>


                            </li>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">

                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img2; ?>" class="img-responsive" alt=""
                                        title="">

                                </div>


                            </li>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">

                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img3; ?>" class="img-responsive" alt=""
                                        title="">

                                </div>


                            </li>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">

                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img4; ?>" class="img-responsive" alt=""
                                        title="">

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



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade moarefi_toggler" id="tab_btn_moarefi">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flex_box p0">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 big_img m0 f_r p0">
                    <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                </div>
                <ul class="col-lg-5 col-md-5 col-sm-5 col-xs-12 little_img f_l p0">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div>
                            <img src="<?=base_url('')?>assets/site/img/talar.png" class="img-responsive" alt="">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 f_r caption p0">
                <div class="title p0">توضیحات</div>
                <p>
                    <?= $bank_mashaghel_value->jobs_content; ?>
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
                    <?= $bank_mashaghel_value->jobs_feature; ?> </p>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 price f_r p0">
                قیمت :
                <span class="data_price">
                    <?= $bank_mashaghel_value->jobs_price; ?>
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
                                <span>توضیحات کلی
                                </span>
                                <input id="btn_t_t_tozihat" onclick="myFunction()" type="checkbox" name="">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                            <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                <span>امکانات و خدمات </span>
                                <input id="btn_t_t_emkanat" onclick="myFunction_2(),myFunction()" type="checkbox"
                                    name="">
                                <span class="checkmark"></span>
                            </label>

                        </li>

                        <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade is-visible  t_t_tozihat p_0_10_i"
                                id="t_t_tozihat">
                                <p>
                                    <?= $bank_mashaghel_value->jobs_content; ?>
                                </p>
                            </div>


                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_emkanat p0"
                                id="t_t_emkanat">
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

                        </div>

                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                            <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                <span>اطلاعات تماس </span>
                                <input id="btn_t_t_etelaat_tamas" onclick="myFunction()" type="checkbox" name="">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                            <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                <span>آدرس شبکه های اجتماعی </span>
                                <input id="btn_t_t_shabake_ejtemaei" onclick="myFunction_3(),myFunction()"
                                    type="checkbox" name="">
                                <span class="checkmark"></span>
                            </label>
                        </li>


                        <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">

                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_etelaat_tamas p0"
                                id="t_t_etelaat_tamas">
                                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>موبایل :
                                                <?= $bank_mashaghel_value->jobs_mobile; ?> </span>
                                        </label>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>تلفن ثابت : <?= $bank_mashaghel_value->jobs_tell; ?></span>
                                        </label>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>فکس : <?= $bank_mashaghel_value->jobs_fax; ?> </span>
                                        </label>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>ایمیل : <?= $bank_mashaghel_value->jobs_email; ?> </span>
                                        </label>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>کد پستی : <?= $bank_mashaghel_value->jobs_code_posti; ?> </span>
                                        </label>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p0">
                                        <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                            <span>وب سایت : <?= $bank_mashaghel_value->jobs_website; ?></span>
                                        </label>
                                    </li>
                                </ul>

                            </div>
                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_shabake_ejtemaei p0"
                                id="t_t_shabake_ejtemaei">
                                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                            <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                            <?= $bank_mashaghel_value->jobs_instagram; ?>
                                        </div>
                                    </li>
                                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                            <img src="<?=base_url('')?>assets/site/svg/telegram.svg"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                            <?= $bank_mashaghel_value->jobs_telegram; ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                            <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                <span>آدرس و موقعیت روی نقشه </span>
                                <input id="btn_t_t_addres_map" onclick="myFunction()" type="checkbox" name="">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
                            <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                <span>لیست خدمات و محصولات</span>
                                <input id="btn_t_t_menu_list_khadamat" onclick="myFunction_4(),myFunction()"
                                    type="checkbox" name="">
                                <span class="checkmark"></span>
                            </label>
                        </li>

                        <div id="tabs_menu_1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs_menu_1 tabs p0">



                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0"
                                id="t_t_addres_map">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box p_0_10_i">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                        آدرس
                                    </div>
                                    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 fild_text f_r p0">
                                        <?= $bank_mashaghel_value->jobs_telegram; ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box p_0_10_i">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                                        موقعیت
                                    </div>
                                    <div style="height: 200px;" id="map">

                                    </div>
                                </div>
                            </div>

                            <div style="display:none"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_menu_list_khadamat p0"
                                id="t_t_menu_list_khadamat">
                                <?= $bank_mashaghel_value->jobs_list_service; ?>
                            </div>
                        </div>
                    </ul>
                </div>
            </form>
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



<?php } ?>









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








<script>
var position = [40.748774, -73.985763];

function initialize() {
    var latlng = new google.maps.LatLng(position[0], position[1]);
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);

    marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: "Latitude:" + position[0] + " | Longitude:" + position[1]
    });


}

//Load google map
google.maps.event.addDomListener(window, 'load', initialize);
</script>








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

    var btn_t_t_tozihat = document.getElementById("btn_t_t_tozihat");
    var btn_t_t_emkanat = document.getElementById("btn_t_t_emkanat");
    var btn_t_t_etelaat_tamas = document.getElementById("btn_t_t_etelaat_tamas");
    var btn_t_t_shabake_ejtemaei = document.getElementById("btn_t_t_shabake_ejtemaei");
    var btn_t_t_addres_map = document.getElementById("btn_t_t_addres_map");
    var btn_t_t_menu_list_khadamat = document.getElementById("btn_t_t_menu_list_khadamat");


    var t_t_tozihat = document.getElementById("t_t_tozihat");
    var t_t_emkanat = document.getElementById("t_t_emkanat");
    var t_t_etelaat_tamas = document.getElementById("t_t_etelaat_tamas");
    var t_t_shabake_ejtemaei = document.getElementById("t_t_shabake_ejtemaei");
    var t_t_addres_map = document.getElementById("t_t_addres_map");
    var t_t_menu_list_khadamat = document.getElementById("t_t_menu_list_khadamat");


    if (btn_t_t_tozihat.checked == true) {
        t_t_tozihat.style.display = "block";
        btn_t_t_emkanat.checked = false;
    } else {
        t_t_tozihat.style.display = "none";
    }
    if (btn_t_t_emkanat.checked == true) {
        t_t_emkanat.style.display = "block";
        btn_t_t_tozihat.checked = false;
    } else {
        t_t_emkanat.style.display = "none";
    }


    if (btn_t_t_etelaat_tamas.checked == true) {
        t_t_etelaat_tamas.style.display = "block";
        btn_t_t_shabake_ejtemaei.checked = false;
    } else {
        t_t_etelaat_tamas.style.display = "none";
    }
    if (btn_t_t_shabake_ejtemaei.checked == true) {
        t_t_shabake_ejtemaei.style.display = "block";
        btn_t_t_etelaat_tamas.checked = false;
    } else {
        t_t_shabake_ejtemaei.style.display = "none";
    }


    if (btn_t_t_addres_map.checked == true) {
        t_t_addres_map.style.display = "block";
        btn_t_t_menu_list_khadamat.checked = false;
    } else {
        t_t_addres_map.style.display = "none";
    }
    if (btn_t_t_menu_list_khadamat.checked == true) {
        t_t_menu_list_khadamat.style.display = "block";
        btn_t_t_addres_map.checked = false;
    } else {
        t_t_menu_list_khadamat.style.display = "none";
    }


}
</script>

<script>
function myFunction_2() {
    var btn_t_t_tozihat = document.getElementById("btn_t_t_tozihat");

    if (btn_t_t_tozihat.checked == true) {
        btn_t_t_tozihat.checked = false;
    }

}
</script>

<script>
function myFunction_3() {
    var btn_t_t_etelaat_tamas = document.getElementById("btn_t_t_etelaat_tamas");

    if (btn_t_t_etelaat_tamas.checked == true) {
        btn_t_t_etelaat_tamas.checked = false;
    }

}
</script>

<script>
function myFunction_4() {
    var btn_t_t_addres_map = document.getElementById("btn_t_t_addres_map");

    if (btn_t_t_addres_map.checked == true) {
        btn_t_t_addres_map.checked = false;
    }

}
</script>



<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>