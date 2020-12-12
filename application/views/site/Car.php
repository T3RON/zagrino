<?php include_once(APPPATH . 'views/_layout/site/head.php'); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer p0">
        فرم ثبت آگهی وسایل نقلیه
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
            <span>
                فرم ثبت آگهی وسایل نقلیه
            </span>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hint">
            <div class="title ">
                راهنمای ثبت آگهی وسایل نقلیه
            </div>
            <?php if($vip) { ?>
            <?php foreach ($site as $site_value) { ?>
            <?= $site_value->help_car_vip; ?>
            <?php } ?>
            <?php } else { ?>
            <?php foreach ($site as $site_value) { ?>
            <?= $site_value->help_car_free; ?>
            <?php } ?>
            <?php } ?>
        </div>


        <?php if($vip) { ?>
        <form action="<?= base_url('site/Agahi/FormCar/vip_register'); ?>" method="post" enctype='multipart/form-data'
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
            <?php } else { ?>
            <form action="<?= base_url('site/Agahi/FormCar/free_register'); ?>" method="post"
                enctype='multipart/form-data' class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


                <!----------------------------------------------------------------------------------------  فرم ثبت آگهی وسایل نقلیه ----------------------------------------------------------->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                    <div class="form_midle_title_in">
                        <span>
                            فرم ثبت آگهی وسایل نقلیه
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_mozo" class="p0">موضوع آگهی</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_title" id="naghlie_mozo" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="foroosh_amlak_gorooh" class="p0">انتخاب گروه</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="car_cate_id" id="car_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <?php foreach($car_cate as $car_cate_value) { ?>
                            <option value="none" selected disabled hidden></option>

                            <option value="<?= $car_cate_value->car_cate_id; ?>">
                                <?= $car_cate_value->car_cate_title; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_gorooh" class="p0">انتخاب زیر گروه</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="car_sub_cate_id" id="car_sub_cate_id"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <option value="none" selected disabled hidden></option>

                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_makan" class="p0">استان</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">

                        <select id="ostan_id" name="ostan_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                            <?php foreach($ostan as $ostan_value) { ?>
                            <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_makan" class="p0">شهرستان</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="city_id" id="city_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-16 col-sm-12 col-xs-12 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_gheimat" class="p0">درج قیمت به تومان</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_price" id="naghlie_gheimat" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_tozihat_kamel" class="p0">توضیحات کامل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_full_des" id="naghlie_tozihat_kamel" rows="4"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_mobile_motabar" class="p0">موبایل معتبر</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_mobile" id="naghlie_mobile_motabar" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_telephone" class="p0">تلفن</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_tell" id="naghlie_telephone" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_gorooh" class="p0">وضعیت وسیله</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="car_state_id" id="naghlie_gorooh"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <option value="none" selected disabled hidden></option>
                            <?php foreach($car_state as $car_state_value) { ?>
                            <option value="<?= $car_state_value->car_state_id; ?>">
                                <?= $car_state_value->car_state_title; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <?php if($vip) { ?>

                <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_gorooh" class="p0">نوع سوخت</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="car_sokht_id" id="naghlie_gorooh"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <option value="none" selected disabled hidden></option>
                            <?php foreach($car_sokht as $car_sokht_value) { ?>
                            <option value="<?= $car_sokht_value->car_sokht_id; ?>">
                                <?= $car_sokht_value->car_sokht_title; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r sale_sakht fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_sale_sakht" class="p0">سال ساخت</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="agahi_car_year" id="naghlie_sale_sakht" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="naghlie_gorooh" class="p0">نوع سیله</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="car_type_id" id="naghlie_gorooh"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <option value="none" selected disabled hidden></option>
                            <?php foreach($car_type as $car_type_value) { ?>
                            <option value="<?= $car_type_value->car_type_id; ?>"><?= $car_type_value->car_type_title; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="flex_boxl">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r flex_box_in p0">

                        <div class="col-lg-12 col-md-10 col-sm-9 col-xs-7 f_r fild">
                            <div class="t_align fild_title p0">
                                <span class="f_r p0"></span>
                                <label for="naghlie_gorooh" class="p0">نوع بدنه</label>
                                <span class="f_l p0"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                                <select name="car_body_id" id="naghlie_gorooh"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                    <option value="none" selected disabled hidden></option>
                                    <?php foreach($car_body as $car_body_value) { ?>
                                    <option value="<?= $car_body_value->car_body_id; ?>">
                                        <?= $car_body_value->car_body_title; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                    </div>




                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="khodro_karkard" class="p0">کارکرد</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                            <input name="agahi_car_karked" id="khodro_karkard" type="text"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="khodro_noe_pelak" class="p0">نوع پلاک</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                            <input name="agahi_car_pelak" id="khodro_noe_pelak" type="text"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 fild">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="khodro_range_badane" class="p0">رنگ بدنه</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                            <input name="agahi_car_color" id="khodro_range_badane" type="text"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="khodro_vaziat_badane" class="p0">توضیح بدنه</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                            <input name="agahi_car_body_des" id="khodro_vaziat_badane" type="text"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="khodro_vaziat_motor" class="p0">توضیح موتور</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                            <input name="agahi_car_motor_des" id="khodro_vaziat_motor" type="text"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>

                    <?php } ?>



                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r fild p0 p0">
                        <div class="t_align fild_title p0">
                            <span class="f_r p0"></span>
                            <label for="adres_koli" class="p0">آدرس</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                            <input name="agahi_car_address" id="adres_koli" rows="4"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        </div>
                    </div>


                    <?php if($vip) { ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild">
                        <div class="t_align fild_title  p0">
                            <span class="f_r p0"></span>
                            <label for="fild_in_12" class="p0">مدت زمان نمایش آگهی شما</label>
                            <span class="f_l p0"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                            <select name="days" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <?php foreach ($show_time as $show_time_value) { ?>
                                <option value="<?= $show_time_value->agahi_show_time_val; ?>">
                                    <?= $show_time_value->agahi_show_time_title; ?> قیمت :
                                    <?= $show_time_value->agahi_tarefe; ?> ریال</option>
                                <?php 
                            $user_date['agahi_tarefe'] = $show_time_value->agahi_tarefe;
                            $this->session->set_userdata($user_date);
                        ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <?php } ?>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_title">
                        آگهی ویژه شش تصویر با درج لینک
                        <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            حداکثر حجم هر تصویر 10240 کیلوبایت میباشد
                        </span>
                    </div>




                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">

                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1000">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img1" id="upload_img_1000"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1111">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img2" id="upload_img_1111"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1222">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img3" id="upload_img_1222"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <?php if($vip) { ?>
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1333">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img4" id="upload_img_1333"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1444">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img5" id="upload_img_1444"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <li class="">

                                <div class="f_r img_panel_2 p0">
                                    <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1555">
                                    <div class="f_r img_panel_input_2">
                                        <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                                        <input name="img6" id="upload_img_1555"
                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                            type="file" multiple="">
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_l select_map">
                        <div class="alert alert-info">جهت تعیین موقعیت روی آیکون آبی رنگ کلیک کنید سپس جابه جا نمایید
                        </div>
                        <!--Google map-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map" id="map"
                            style="position: relative; overflow: hidden;">
                            <div
                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-err-container">
                                    <div class="gm-err-content">
                                        <div class="gm-err-icon">
                                            <div style="height: 200px;" id="map"></div>
                                            <input name="car_latitude" id="latitude" type="hidden">
                                            <input name="car_longitude" id="longitude" type="hidden">

                                        </div>
                                        <div class="gm-err-title">Oops! Something went wrong.</div>
                                        <div class="gm-err-message">This page didn't load Google Maps correctly. See the
                                            JavaScript console for technical details.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <?php if($vip) { ?>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 fild  pish_namayesh">
                        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r main_button"
                            style="font-size: 20px;go" type="" href="">
                            ثبت و پرداخت هزینه آگهی ویژه
                        </button>

                    </div>

                    <?php }else { ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tavajoh ">
                        <div class="title_tavajoh ">
                            توجه
                        </div>
                        <p>
                            <?php foreach ($site as $site_value) { ?>
                            <input name="days" value="<?= $site_value->show_time_free; ?>" type="hidden">

                            تعداد روزهای نمایش آگهی رایگان <?= $site_value->show_time_free; ?> می باشد
                            جهت استفاده از امکانات و تعداد روز های بشتر آگهی ویژه را انتخاب نمایید
                            <?php } ?>

                        </p>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">
                                <a href="<?= base_url('site/Agahi/FormCar/vip'); ?>">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabt f_r ">
                                        <i class="icon-plus f_r"></i>
                                        ثبت آگهی وسیله نقلیه ویژه
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild  pish_namayesh">
                        <button class="col-lg-3 col-md-12 col-sm-12 col-xs-12 f_r main_button" type="" href="">
                            ارسال آگهی
                        </button>
                    </div>
                    <?php } ?>





            </form>

    </div>


</div>


</div>


<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

<script type="text/javascript">
var options = {
    center: [33.89621114574323, 48.750954837035195],
    zoom: 18
}

var map = L.map('map', options);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: 'OSM'
    })
    .addTo(map);

// map.on('click',
// 	function(e){
// 		//var coord = e.latlng.toString().split(',');
// 		//var lat = coord[0].split('(');
// 		//var lng = coord[1].split(')');
// 		//alert("You clicked the map at LAT: " + lat[1] + " and LONG: " + lng[0]);
// 		L.marker(e.latlng).addTo(map);
// 	});

var myMarker = L.marker([33.89621114574323, 48.750954837035195], {
        title: "89621114574323",
        alt: "The Big I",
        draggable: true
    })
    .addTo(map)
    .on('dragend', function() {
        var coord = String(myMarker.getLatLng()).split(',');
        console.log(coord);
        var lat = coord[0].split('(');
        var lng = coord[1].split(')');
        console.log(lng);
        console.log(lat);
        document.getElementById("latitude").value = lat[1];
        document.getElementById("longitude").value = lng[0];

        myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
    });
</script>

<script>
$('document').ready(function() {
    $("#upload_img").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_10").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_10').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_11").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_11').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_12").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_12').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_13").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_13').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_14").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_14').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_15").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_15').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_100").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_100').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_111").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_111').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_122").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_122').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_133").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_133').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_144").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_144').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_155").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_155').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_1000").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1000').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1111").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1111').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1222").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1222').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1333").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1333').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1444").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1444').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1555").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1555').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_10000").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_10000').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_11111").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_11111').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_12222").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_12222').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_13333").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_13333').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_14444").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_14444').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_15555").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_15555').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_100000").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_100000').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_111111").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_111111').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_122222").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_122222').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_133333").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_133333').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_144444").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_144444').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_155555").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_155555').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>

<script>
$('document').ready(function() {
    $("#upload_img_144444").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_144444').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_155555").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_155555').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script type="text/javascript">
$(document).ready(function() {

    $('#ostan_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('site/Agahi/FormCar/get_city');?>",
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].city_id + '>' + data[i].city_title +
                        '</option>';
                }
                $('#city_id').html(html);

            }
        });
        return false;
    });

});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#car_cate_id').change(function() {
        var id = $(this).val();

        $.ajax({
            url: "<?php echo site_url('site/Agahi/FormCar/get_sub_cate');?>",
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].car_sub_cate_id + '>' + data[i]
                        .car_sub_cate_title + '</option>';
                }
                $('#car_sub_cate_id').html(html);

            }
        });
        return false;
    });

});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).scrollTop($("#pos").offset().top);
});
</script>

<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>