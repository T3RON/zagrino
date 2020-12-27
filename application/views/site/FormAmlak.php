<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>





<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer p0">
        فرم پنل آگهی و نیازمندی ها
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
            <span>
                ثبت فرم پنل آگهی و نیازمندی ها
            </span>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hint">
            <div class="title ">
                راهنمای ثبت آگهی
            </div>
            <p>
                متن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن
                اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شود
                متن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شود
                <br>متن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض
                متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شود
                <br>متن پیفرض متن اصلی توسط مدیر پنل جایگذاری شودمتن پیفرض متن اصلی توسط مدیر پنل جایگذاری شود

            </p>
        </div>


        <?php if($vip) { ?>
        <form action="<?= base_url('site/Agahi/FormAmlak/vip_register'); ?>" method="post" enctype='multipart/form-data' class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
        <?php } else { ?>
            <form action="<?= base_url('site/Agahi/FormAmlak/free_register'); ?>" method="post" enctype='multipart/form-data' class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
        <?php } ?>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


            <!------------------- فرم ثبت آگهی فروش املاک ------------------------->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                <div class="form_midle_title_in">
                    <span>
                        فرم ثبت آگهی فروش املاک
                    </span>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_mozo" class="p0">نام بنگاه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_bonga_title" id="foroosh_amlak_mozo" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>
            <?php if($vip) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="vaziat_sanad" class="p0">امتیازات</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">

                    <input name="amlak_emtiaz" id="vaziat_sanad" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">



                </div>
            </div>
            <?php } ?>

            <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">انتخاب گروه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="amlak_cate_id" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <?php foreach($amlak_cate as $amlak_cate_value) { ?>
                        <option value="<?= $amlak_cate_value->amlak_cate_id; ?>">
                            <?= $amlak_cate_value->amlak_cate_title; ?></option>
                        <?php } ?>
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
                        <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?></option>
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

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gheimat" class="p0">درج قیمت به تومان</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_price" id="foroosh_amlak_gheimat" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_tozihat_kamel" class="p0">توضیحات کامل</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_des" id="foroosh_amlak_tozihat_kamel" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_mobile" class="p0">موبایل معتبر</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input id="foroosh_amlak_mobile" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_phone" class="p0">تلفن</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_tell" id="foroosh_amlak_phone" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="metrazh" class="p0">متراژ</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_metraj" id="metrazh" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>
            <?php if($vip) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="vaziat_sanad" class="p0">وضعیت سند</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">

                    <input name="amlak_sanad_state" id="vaziat_sanad" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="mizan_malekiat" class="p0">میزان مالکیت</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_mizan_malekiat" id="mizan_malekiat" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                </div>
            </div>

            <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">برچسب ویژه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">

                    <select name="amlak_tag_id" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">عادی</option>
                        <option value="2">شگفتانه</option>
                        <option value="3">همگانی</option>
                    </select>

                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">نوع سند</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">

                    <select name="amlak_sanad_type" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">عادی</option>
                        <option value="2">شگفتانه</option>
                        <option value="3">همگانی</option>
                    </select>


                </div>
            </div>

            <?php } ?>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="vaziat_sanad" class="p0">مبلغ رهن</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_rahn_price" id="vaziat_sanad" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild ">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="metrazh" class="p0">مبلغ اجاره</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_ejare_price" id="metrazh" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>



            <?php if($vip) { ?>
            <div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">نوع شرایط</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">

                    <select name="amlak_cond_tag_id" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">عادی</option>
                        <option value="2">شگفتانه</option>
                        <option value="3">همگانی</option>
                    </select>

                </div>
            </div>
            <?php } ?>
    
            <?php if($vip) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="metrazh" class="p0">تعداد اتاق</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_count_room" id="metrazh" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="vaziat_sanad" class="p0">تعداد طبقه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="amlak_tabaghe" id="vaziat_sanad" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">پارکینگ </label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="amlak_parking" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">دارد</option>
                        <option value="2">ندارد</option>
                    </select>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">انباری </label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="amlak_anbari" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">دارد</option>
                        <option value="2">ندارد</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="foroosh_amlak_gorooh" class="p0">آسانسور </label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="amlak_asansor" id="foroosh_amlak_gorooh"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden> </option>
                        <option value="1">دارد</option>
                        <option value="2">ندارد</option>
                    </select>
                </div>
            </div>

            <?php } ?>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r clear fild p0 p0">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="adres_koli" class="p0">آدرس</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <input name="amlak_address" id="adres_koli" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
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
						<option value="<?= $show_time_value->agahi_show_time_val; ?>"><?= $show_time_value->agahi_show_time_title; ?> قیمت : <?= $show_time_value->agahi_tarefe; ?> ریال</option>
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
                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    حداکثر حجم هر تصویر 10240 کیلوبایت میباشد
                </span>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">

                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_10000">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input name="img1" id="upload_img_10000"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_11111">
                            <div class="f_r img_panel_input_2">
                                <img name="img2" src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_11111"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_12222">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input name="img3" id="upload_img_12222"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>

                    <?php if($vip) { ?>
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_13333">
                            <div class="f_r img_panel_input_2">
                                <img name="img4" src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_13333"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_14444">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input name="img5" id="upload_img_14444"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>
                    <li class="">

                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_15555">
                            <div class="f_r img_panel_input_2">
                                <img name="img6" src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_15555"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple="">
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>

           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_l select_map">
                <div class="alert alert-info">جهت تعیین موقعیت روی آیکون آبی رنگ کلیک کنید سپس جابه جا نمایید</div>
                <!--Google map-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map"
                    style="position: relative; overflow: hidden;">
                    <div
                        style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <div class="gm-err-container">
                            <div class="gm-err-content">
                                <div class="gm-err-icon">
                                    <div style="height: 200px;" id="map"></div>
                                    <input name="amlak_latitude" id="latitude" type="hidden">
                                    <input name="amlak_longitude" id="longitude" type="hidden">

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
                <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r main_button" style="font-size: 20px;go"
                    type="" href="">
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
                        <a href="<?= base_url('site/Agahi/FormAmlak/vip'); ?>">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabt f_r ">
                                <i class="icon-plus f_r"></i>
                                ثبت آگهی املاک ویژه
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















<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->


<script type="text/javascript">
var map = L.map("map").fitBounds([
    [33.89621114574323, 48.750954837035195],
    [33.89621114574323, 48.750954837035195]
]);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var currentMarker;

map.on("click", function(event) {
    document.getElementById("latitude").value = event.latlng.lat;
    document.getElementById("longitude").value = event.latlng.lng;
    if (currentMarker) {
        currentMarker._icon.style.transition = "transform 0.3s ease-out";
        currentMarker._shadow.style.transition = "transform 0.3s ease-out";

        currentMarker.setLatLng(event.latlng);


        setTimeout(function() {
            currentMarker._icon.style.transition = null;
            currentMarker._shadow.style.transition = null;
        }, 300);
        return;
    }

    currentMarker = L.marker(event.latlng, {
        draggable: true
    }).addTo(map).on("click", function() {
        event.originalEvent.stopPropagation();
    });
});

document.getElementById("done").addEventListener("click", function() {
    currentMarker = null;
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


<script type="text/javascript">
$(document).ready(function() {

    $('#ostan_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('site/Agahi/FreeAgahiForm/get_city');?>",
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
    $(document).scrollTop($("#pos").offset().top);
});
</script>

<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>