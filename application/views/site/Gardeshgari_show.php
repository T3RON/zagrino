<?php include_once (APPPATH.'views/_layout/site/head.php');?>












<!-- column-right -->


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_n_a  b_m_v p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_head title_head_roidadha p0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 job_title t_align p0">رویداد</div>
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

    <?php foreach($gardeshgari as $gardeshgari_value) { ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  border_box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_col flex_box p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_mid info_top p0">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tag_niazmandi">
                            <?= $gardeshgari_value->events_cate_title; ?></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 big_font ">
                            <?= $gardeshgari_value->events_title; ?></div>
                        <div class="ccol-lg-12 col-md-12 col-sm-12 col-xs-12  cod_agahi">کد آگهی :
                            <span><?= $gardeshgari_value->events_id; ?></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "><?= $gardeshgari_value->events_address; ?> :
                            آدرس </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_group button_group p0">
                            <button type="button" class="btn_global m0 p0"><img
                                    src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                    class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img
                                    src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
                                    class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0"><img
                                    src="<?=base_url('')?>assets/site/svg/iconfinder_heart-01_186400.svg"
                                    class="img-responsive" alt=""></button>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/time_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                استان : <?= $gardeshgari_value->ostan_title; ?> , شهرستان : <?= $gardeshgari_value->city_title; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/home_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_type; ?> : نوع رویداد

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/calender_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_finish; ?> تا <?= $events_value->events_start; ?> : زمان

                            </div>
                        </a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/time2_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_level; ?> : سطح برگزاری
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/user_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_run; ?> : برگزار کنندگان

                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/level_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_level; ?> : سطح برگزاری

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/user2_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_capacity; ?> : ظرفیت


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/chain_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_link_site; ?> : آدرس سایت
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 roidadha_info_inner">
                        <a href="#">
                            <img src="<?=base_url('')?>assets/site/img/mail_01.svg">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 info_inner_title ">
                                <?= $gardeshgari_value->events_email; ?> : آدرس ایمیل
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption f_r p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"> : توضیحات </div>
                    <?= $gardeshgari_value->events_dec; ?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption f_r p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"> : شرایط شرکت کننده </div>
                    <?= $events_value->events_conditons; ?>
                </div>



            </div>
        </div>



        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_col flex_box p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right_side flex_item f_r p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right_side flex_item f_r p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img_swiper bankmashaghel_img  p0">
                        <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img1; ?>" class="" alt=""
                            title="">
                        <?php if(time() > $gardeshgari_value->expire) { ?>
                        <div class="expired monghazi_show p0">
                            <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                            <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("events", $gardeshgari_value->events_id,$state_data);
                                    ?>
                        </div>
                        <?php }?>
                    </div>
                    <!-- Swiper -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-container swiper_bankMashaghel">
                        <div class="swiper-wrapper">
                            <?php if($gardeshgari_value->img1 != "<p></p>") { ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img1; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img1; ?>"
                                                class="img-responsive" alt="" title="">
                                        </a>
                                    </div>


                                </li>

                            </div>
                            <?php } ?>
                            <?php if($gardeshgari_value->img2 != "<p></p>") { ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img2; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img2; ?>"
                                                class="img-responsive">
                                        </a>
                                    </div>


                                </li>
                            </div>
                            <?php } ?>
                            <?php if($events_value->img3 != "<p></p>") { ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img3; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img3; ?>"
                                                class="img-responsive" alt="" title="">
                                        </a>
                                    </div>


                                </li>
                            </div>
                            <?php } ?>
                            <?php if($gardeshgari_value->img4 != "<p></p>") { ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img4; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img4; ?>"
                                                class="img-responsive" alt="" title="">
                                        </a>
                                    </div>

                                </li>
                            </div>
                            <?php } ?>
                            <?php if($gardeshgari_value->img5 != "<p></p>") { ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img5; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img5; ?>"
                                                class="img-responsive" alt="" title="">
                                        </a>
                                    </div>


                                </li>
                            </div>
                            <?php } ?>
                            <?php if($gardeshgari_value->img6 != "<p></p>") { ?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                        <a class="image-link"
                                            href="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img6; ?>">
                                            <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img6; ?>"
                                                class="img-responsive" alt="" title="">
                                        </a>
                                    </div>


                                </li>
                            </div>
                            <?php } ?>

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-next_bankMashaghel"></div>
                        <div class="swiper-button-prev swiper-button-prev_bankMashaghel"></div>
                    </div>




                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 img_swiper img_swiper_57 p0">
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img6; ?>" class="" alt="" title="">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 special_out p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">پوستر</div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <video class="video-style col-lg-12 col-md-12 col-sm-12 col-xs-12 video p0" id="video_clip"
                            poster="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->img1; ?>" preload="" playsinline controls>
                            <source
                                src="<?=base_url('')?>assets/uploads/img/<?= $gardeshgari_value->events_clip; ?>"
                                type="video/mp4">
                            <source src="<?=base_url('')?>assets/site/video/SampleVideo_176x144_1mb.3gp"
                                type="video/3gp">
                            <p>مرورگر شما قادر به پشتیبانی از فایل ویدئویی نیست</p>
                        </video>
                    </div>

                <div id="tabs_menu_2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabs p0">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_shabake_ejtemaei is-visible p0"
                        id="t_t_shabake_ejtemaei">
                        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg"
                                        class="img-responsive" alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                    <?= $gardeshgari_value->events_instagram; ?>
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                    <?= $gardeshgari_value->events_telegram; ?>
                                </div>
                            </li>
                            <!-- <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg"
                                        class="img-responsive" alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg"
                                        class="img-responsive" alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                </div>
                            </li>
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 title f_r p0">
                                    <img src="<?=base_url('')?>assets/site/svg/telegram.svg" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 fild f_r p0">
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box p_0_10_i">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                موقعیت
            </div>
            <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                <div style="height: 200px;" id="map"></div>
            </div>
        </div>

        <script type="text/javascript">
        var map = L.map("map").fitBounds([
            [<?= $gardeshgari_value->map_latitude; ?>, <?= $gardeshgari_value->map_longitude; ?>]
        ]);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);
        var marker = L.marker([<?= $gardeshgari_value->map_latitude; ?>, <?= $gardeshgari_value->map_longitude; ?>]).addTo(map);
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

        });

        document.getElementById("done").addEventListener("click", function() {
            currentMarker = null;
        });
        </script>



    </div>

    <?php } ?>

</div>





</div>













<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->


<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>