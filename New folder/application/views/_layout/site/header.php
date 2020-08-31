<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Hover -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/hover.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/hover-min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/toggler.css">
    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('')?>assets/site/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css"
        href="<?=base_url('')?>assets/site/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('')?>assets/site/css/pace.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('')?>assets/site/fonts/fonts.css">
    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('')?>assets/site/css/swiper.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/site/css/pushbar.css">
    <link href="<?=base_url('')?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

                                          
    <!-- <link href="https://static.neshan.org/sdk/openlayers/5.3.0/ol.css" rel="stylesheet" type="text/css">
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://static.neshan.org/sdk/openlayers/5.3.0/ol.js" type="text/javascript"></script> -->
</head>

<body>
    <!-- header -->
    <div class="container-fluid ">



        <div data-pushbar-id="mypushbar1" class="pushbar from_right">

            <div id="mainpage_panel" class="panel_back_g">
                <div class="main_panel">
                    <div class="panel_buttom">
                        <?php foreach($site as $site_value) { ?>
                        <img src="<?=base_url('')?>assets/uploads/img/<?= $site_value->site_logo; ?>"
                            class="img-responsive" alt="logo">
                        <?php } ?>
                    </div>
                    <div class="body_panel">
                        <ul class="panel_ul">
                            <li class="panel_li panel_li_home p0">
                                <a href="/index.html" href="/index.html">صفحه اول<img
                                        src="<?=base_url('')?>assets/site/img/iconfinder_home_126572.svg"></a></li>
                            <li class="panel_li panel_li_profile p0">
                                <a href="/Page_Profile.html" type="button">پنل کاربری<img
                                        src="<?=base_url('')?>assets/site/img/user.svg"></a></li>
                            <li class="panel_li panel_li_good p0">
                                <a href="/Page_GoodToKnow.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/iconfinder_services_2639916.svg">تعرفه
                                    خدمات </a></li>
                            <li class="panel_li panel_li_profile p0">
                                <a href="/Page_Profile.html" type="button">نمایشگاه ها<img
                                        src="<?=base_url('')?>assets/site/img/user.svg"></a></li>
                            <li class="panel_li panel_li_good p0">
                                <a href="/Page_GoodToKnow.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/iconfinder_services_2639916.svg">مشاوره
                                    رایگان</a></li>
                            <li class="panel_li panel_li_singup p0">
                                <a href="/Page_SignUp.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/iconfinder_info2_216652.svg">درباره زاگرس
                                    زوم</a></li>
                            <li class="panel_li panel_li_request p0">
                                <a href="/Page_Program_Request.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/contact.svg">ارتباط با ما</a>
                            </li>
                            <li class="panel_li panel_li_request p0">
                                <a href="/Page_Food_Request.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/add.svg">ثبت رایگان شغل و آگهی</a></li>
                            <li class="panel_li panel_li_sharess p0">
                                <a href="/Page_Food_Request.html" type="button"><img
                                        src="<?=base_url('')?>assets/site/img/iconfinder_add_user_male_2639755.svg">ثبت
                                    نام / عضویت</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /panel -->

            <!--
    <button data-pushbar-close>Close</button>
-->
        </div>





        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header p0">
            <div class="hidden-lg hidden-md hidden-sm 
                     menu_bar p0">

                <div class="pushbar_main_content">

                    <button style=" border: none;padding: 9px;border-radius: 51px;" data-pushbar-target="mypushbar1">
                        <img src="<?=base_url('')?>assets/site/img/menu-24px.svg">
                    </button>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 t_align box_up p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
                        سبد خرید
                        <span class="f_l p0">
                            3
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs top_header p0">
                <div class="col-lg-5 col-md-9 col-sm-12 col-xs-12 menu_top p0">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 m0">
                        <?php foreach ($menu_top as $menu_top_value) { ?>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "><a
                                href="<?= $menu_top_value->menu_link; ?>"><?= $menu_top_value->menu_title; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 buy f_l p0">
                    <div class="col-lg-7 col-md-12 col-sm-7 col-xs-7 add t_align f_l p0">
                        <a data-toggle="modal" data-target="#exampleModal" href="">
                            <div class="t_align p0">
                                <i class="f_l icon-plus"></i>

                                ثبت رایگان شغل و آگهی
                            </div>
                        </a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4 header-pick-modal p0">


                                            <a href="" onclick="return false;">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/family.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        خدمات گردشگري
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 header-pick-modal p0">


                                            <a href="<?= base_url('site/work/Vof'); ?>">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/retail.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        ثبت مشاغل
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 header-pick-modal p0">
                                            <a href="<?= base_url('site/takhfif/Takhfif'); ?>">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/sale.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        ثبت تخفيفات
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 header-pick-modal p0">
                                            <a href="<?= base_url('site/Agahi/Agahi'); ?>">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/blog.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        ثبت آگهي
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 header-pick-modal p0">
                                            <a href="" onclick="return false;">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/event.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        ثبت رويداد
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 header-pick-modal p0">


                                            <a href="" onclick="return false;">
                                                <div class="t_align all">
                                                    <img src="<?=base_url('')?>assets/site/svg/fruit.svg" alt="">
                                                    <div class="t_align txt p0">
                                                        ثبت بازارچه
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-4 col-xs-4 t_align box_up ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
                            سبد خرید
                            <span class="f_l p0">
                                3
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-9 col-sm-6 col-xs-12 login p0">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 f_r place">
                        <?php if( $this->session->userdata('logged_in')) { ?>
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <a href="<?=base_url('site/Panel')?>">نمايش پنل مديريت شما</a>

                        <?php }else { ?>
                        <img class="img-circle" src="<?=base_url('')?>assets/site/svg/iconfinder_user_118589.svg" alt=""
                            title="">

                        <a href="<?=base_url('site/Login')?>">ورود</a>
                        <span>/</span>
                        <a href="<?=base_url('site/Register')?>">ثبت نام</a>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo_slider p0">

                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 logo f_r m0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background_img p0 m0">
                        <img src="<?=base_url('')?>assets/site/img/background_logo.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0 m0">
                        <?php foreach($site as $site_value) { ?>
                        <img src="<?=base_url('')?>assets/uploads/img/<?= $site_value->site_logo; ?>"
                            class="img-responsive" alt="logo">
                        <?php } ?>
                    </div>
                </div>
                <nav class="col-lg-2 col-md-3 col-sm-3 col-xs-6 left_use">
                    <ul>
                        <?php foreach($site as $site_value) { ?>
                        <li class="col-lg-6 col-md-6 col-sm-6 hidden-xs t_align advice p0">
                            <a href=" <?= $site_value->site_btn_one_link; ?>"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l p0">
                                    <div class="c_circle m0">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $site_value->site_btn_one_ico; ?>"
                                            class="img-responsive" alt="">
                                    </div>
                                    <?= $site_value->site_btn_one_title; ?>
                                </div>
                            </a></li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 t_align p0">
                            <a href=" <?= $site_value->site_btn_two_link; ?>"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l p0">
                                    <div class="c_circle m0">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $site_value->site_btn_two_ico; ?>"
                                            class="img-responsive" alt="">
                                    </div>
                                    <?= $site_value->site_btn_two_title; ?>
                                </div>
                            </a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <div class="col-lg-7 col-md-6 col-sm-6 hidden-xs text_holder f_r">
                    <div class="v-slider-frame offset-sm-3">
                        <ul class="v-slides">
                            <?php foreach ($text as $text_value) { ?>
                            <li class="v-slide"><?= $text_value->text_title; ?></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_date p0">
        <img src="<?=base_url('')?>assets/site/img/Layer%201.png" class="img-responsive" alt="" title="">
        <div class="container-fluid ">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 date f_l p0">
                <?= $timeStamp; ?>
                <span class="f_l">ــــ</span>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-8 text f_l p0">
                <span class="f_r">ــــ</span>
                <?php foreach($site as $site_value) { ?>
                <?= $site_value->site_ads_text; ?>
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider">
        <div class="container-fluid ">
            <!-- Swiper -->
            <div class="swiper-container main_swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $slider_value) { ?>
                    <div class="swiper-slide">
                        <a href="<?= $slider_value->slider_link;?>">
                            <img src="<?=base_url('')?>assets/uploads/img/<?= $slider_value->slider_img;?>" class=""
                                alt="" title="">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">


        <!-- search -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search p0">
            <div class="search_label p0">
                <span class="f_r"></span>
                <div>جـستجو</div>
                <span class="f_l"></span>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 search_filled f_r p0">
                <form class=" p0">
                    <label for="search_input">
                    </label>
                    <input id="search_input" name="s" type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-10 "
                        placeholder="جستجو در سایت">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 p0">
                        <button class="btn btn-default" id="" type="submit">
                            <i class="icon-search6"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 location">
                <i class="icon-ios-location"></i>
                <span>
                    بروجرد
                </span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 select_box ">
                <label for="selectbox1"></label>
                <select id="selectbox1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <option value="none" selected disabled hidden>انتخاب شهر</option>
                    <option value="1">نهاوند</option>
                    <option value="2">بروجرد</option>
                    <option value="3">ملایر</option>
                    <option value="4">کوهانی</option>
                </select>
            </div>
        </div>



        <!-- Menu_Bar -->
        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs menu_bottom p0">
            <i class="icon-align-right2"></i>
            <ul class="col-lg-11 col-md-11 col-sm-11 col-xs-11 f_r m0 p0">
                <?php foreach ($menu_middel as $menu_middel_value) { ?>
                <li><a href="<?= $menu_middel_value->smenu_link; ?>"><?= $menu_middel_value->smenu_title; ?></a></li>
                <?php } ?>

            </ul>
        </div>