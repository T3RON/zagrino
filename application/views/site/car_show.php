<?php include_once(APPPATH . 'views/_layout/site/head.php'); ?>


<!------------------------- niazmandi_namayesh_agahi --------------------->


<div class="col-lg-12 niazmandi_n_a b_m_v p0 r">

    <?php foreach ($car as $car_value) { ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title_head p0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 job_title t_align p0">آگهی و نیازمندی ها</div>
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




    <div class="col-lg-12 border_box p0">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p_btn_package left_col f_l flex_box p0">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side  p0">
                <div class="info_mid info_top p0">
  

                    <div class="col-lg-12 title"><?= $car_value->agahi_car_title; ?></div>
                    <div class="col-lg-12 title">قیمت :<?= $car_value->agahi_car_price; ?></div>
                    <div class="col-lg-12 update">اعتبار تا :
                        <span><?= $this->jdf->jdate('l, j F Y', $car_value->expire, '', 'GMT'); ?></span>
                    </div>
                    <div class="col-lg-12 agahi_dahande">آگهی دهنده :
                        <span><?= $car_value->account_fn; ?> <?= $car_value->account_ln; ?></span>
                    </div>
                    <div class="col-lg-12 cod_agahi">کد آگهی :
                        <span><?= $car_value->agahi_car_id; ?></span>
                    </div>

                    <div class="col-lg-12 cod_agahi">شماره همراه :
                        <span><?= $car_value->agahi_car_mobile; ?></span>
                    </div>

                    <?php if ($car_value->state_id == 2) { ?>
                   
                    
                    <div class="col-lg-12 cod_agahi">برچسب :
                        <span><?= $car_value->car_tag; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">سال ساخت :
                        <span><?= $car_value->agahi_car_year; ?></span>
                    </div>
                    
                     <div class="col-lg-12 cod_agahi">شرایط  :
                        <span><?= $car_value->car_cond_tag; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع وسیله  :
                        <span><?= $car_value->car_type; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع بدنه  :
                        <span><?= $car_value->car_body; ?></span>
                    </div> 
                    
                    <div class="col-lg-12 cod_agahi">کارکرد  :
                        <span><?= $car_value->agahi_car_karked; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">وضعیت  :
                        <span><?= $car_value->car_state; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع سوخت  :
                        <span><?= $car_value->car_sokht; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع پلاک  :
                        <span><?= $car_value->agahi_car_pelak; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع رنگ  :
                        <span><?= $car_value->agahi_car_color; ?></span>
                    </div>  
                    
                    <div class="col-lg-12 cod_agahi">توضیحات بدنه   :
                        <span><?= $car_value->agahi_car_body_des; ?></span>
                    </div>
                    
                    <div class="col-lg-12 cod_agahi">نوع موتور   :
                        <span><?= $car_value->agahi_car_motor_des; ?></span>
                    </div>

                    <?php } ?>

           


                    <div class="col-lg-12 shomare_tamas">شماره تماس :
                        <span style="display: inline;"
                            id="hashed"><?= substr($car_value->account_mobile,8)  ?>******<?= substr($car_value->account_mobile,0,4)  ?></span>
                        <span style="display: none;" id="full"><?= $car_value->account_mobile; ?></span>
                        <a onclick="myFunction()" class="namayesh_phone">نمایش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side p_title_niazmandi p0">
                <div class="info_mid info_top p0">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 point_section f-r p0">
                        <div class="observe f_r p0"><?= $car_value->car_tag; ?></div>
                        <div class="f_r">
                            <button type="button" class="btn_global m0 p0">
                                <img src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                    class="img-responsive" alt=""></button>
                        </div>
                        <div class="observe f_r">
                            <i class="icon-eye f_r"></i>
                            <span>
                                8585
                            </span>
                        </div>
                        <div class="observe f_r p0">
                            <i
                                class="icon-eye f_r"></i><?= $this->jdf->jdate('l, j F Y', $car_value->register_date, '', 'GMT'); ?>
                            تا <?= $this->jdf->jdate('l, j F Y', $car_value->expire, '', 'GMT'); ?>
                        </div>
                    </div>

                    <ul class="col-lg-6 col-md-6 col-sm-6 col-xs-12 address f_r m_2 p0">
                        <li>
                            <div class="f_r"><?= $car_value->ostan_title; ?></div>
                        </li>
                        <li>
                            <div class="f_r"> <?= $car_value->city_title; ?></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption f_r p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0">توضیحات :</div>
                    <?= $car_value->agahi_car_full_des; ?>
                </div>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p_btn_package right_col f_r flex_box p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right_side flex_item f_r p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img_swiper bankmashaghel_img  p0">
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img1; ?>" class="" alt=""
                        title="">
                    <?php if(time() > $car_value->expire) { ?>
                    <div class="expired monghazi_show p0">
                        <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                        <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("agahi_car", $car_value->agahi_car_id,$state_data);
                                    ?>
                    </div>
                    <?php }?>
                </div>
                <!-- Swiper -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-container swiper_bankMashaghel">
                    <div class="swiper-wrapper">
                
                        <?php if(strlen($car_value->img2) >= 8) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                    <a class="image-link"
                                        href="<?=base_url('')?>assets/uploads/img/<?= $car_value->img2; ?>">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img2; ?>"
                                            class="img-responsive">
                                    </a>
                                </div>


                            </li>
                        </div>
                        <?php } ?>
                        <?php if(strlen($car_value->img3) >= 8) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                    <a class="image-link"
                                        href="<?=base_url('')?>assets/uploads/img/<?= $car_value->img3; ?>">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img3; ?>"
                                            class="img-responsive" alt="" title="">
                                    </a>
                                </div>


                            </li>
                        </div>
                        <?php } ?>
                        <?php if(strlen($car_value->img4) >= 8) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                          
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                    <a class="image-link"
                                        href="<?=base_url('')?>assets/uploads/img/<?= $car_value->img4; ?>">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img4; ?>"
                                            class="img-responsive" alt="" title="">
                                    </a>
                                </div>

                            </li>
                        </div>
                        <?php } ?>
                        <?php if(strlen($car_value->img5) >= 8) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                    <a class="image-link"
                                        href="<?=base_url('')?>assets/uploads/img/<?= $car_value->img5; ?>">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img5; ?>"
                                            class="img-responsive" alt="" title="">
                                    </a>
                                </div>


                            </li>
                        </div>
                        <?php } ?>
                        <?php if(strlen($car_value->img6) >= 8) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                                    <a class="image-link"
                                        href="<?=base_url('')?>assets/uploads/img/<?= $car_value->img6; ?>">
                                        <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img6; ?>"
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side m_p_10 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">سایر آگهی های این کاربر</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 info_top p0">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <?php foreach ($another_car as $another_car_val) { ?>
                        <a href="<?= base_url('site/Agahi/Car/Show'); ?>/<?= $another_car_val->agahi_car_id; ?>/<?= $another_car_val->accounts_id; ?>">
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmadi_sayer_agahi p0">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  f_r niazmadi_sayer_agahi_img p0">
                                <img src="<?=base_url('')?>assets/uploads/img/<?= $car_value->img1; ?>"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r p0">
                            </div>

                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 point_section ">
                                <div class="p_0_10"><?= $another_car_val->agahi_car_title; ?></div>
                                <div class="hidden-xs observe f_r">
                                    <i class="icon-eye f_r"></i>
                                    <span>
                                        <?= $this->jdf->jdate('l, j F Y', $another_car_val->register_date, '', 'GMT'); ?>
                                        تا
                                        <?= $this->jdf->jdate('l, j F Y', $another_car_val->expire, '', 'GMT'); ?>
                                    </span>
                                </div>

                            </div>
                        </li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
                <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main_button_agahi" href="<?= base_url('site/Agahi/Car/user_list'); ?>/<?= $another_car_val->accounts_id; ?>">مشاهده همه آگهی های این کاربر</a>
             
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p_btn_package niazmandi_adress_img p0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box p0">
                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                    آدرس
                </div>
                <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 fild_text f_r m_p_10 p0">
                    <?= $another_car_val->agahi_car_address; ?>
                </div>
            </div>
            <div style="display:block"
                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0"
                id="t_t_addres_map">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box p_0_10_i">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                        موقعیت
                    </div>
                    <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                        <div style="height: 200px;" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        var map = L.map("map").fitBounds([
            [<?= $car_value->map_latitude; ?>, <?= $car_value->map_longitude; ?>]
        ]);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);
        var marker = L.marker([<?= $car_value->map_latitude; ?>, <?= $car_value->map_longitude; ?>])
            .addTo(map);
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



        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p_btn_package border_hoshtar f_r p0">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 f_r title">هشدار پلیس</div>
            <div class="red ">
                <?php foreach ($site as $site_value) { ?>
                <?= $site_value->police_text; ?>
                <?php } ?>
            </div>
        </div>

        <div class="frm col-lg-6 col-md-6 col-sm-12 col-xs-12 p_btn_package f_l p0">


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r niazmandi_send_pm">ارسال پیام به آگهی دهندی:
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_32" class="p0">ایمیل شما</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <input id="email" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_32" class="p0">موبایل شما</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <input id="mobile" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_32" class="p0">نوشتن پیام</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <input id="text" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_32" class="p0">کد امنیتی</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <input id="sec_code" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 veri_code_niazmandi"><?= $rand_number; ?></div>
            <input id="re_sec_code" type="hidden" value="<?= $rand_number; ?>">
            <input id="id" type="hidden" value="<?= $car_value->agahi_car_id; ?>">
            <input id="accounts_id" type="hidden" value="<?= $car_value->accounts_id; ?>">

            <button type="submit" id="butsave"
                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main_button_agahi">ارسال</button>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
            </div>
        </div>



    </div>

    <?php } ?>
</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Agahiha_Niazmandiha section_head similar_jobs title_global p0">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head t_align p0">
        <div class="title t_align">
            <span>
                آگهی های مشابه
            </span>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_side list_item p0">
        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                            </div>
                            <img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
                                title="">
                            <div class="expired p0">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0">وسایل نقلیه</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">فروش یک دستگاه وسیله
                                نقلیه
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">دعوت به
                                همکاری
                            </button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">معاوضه</button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">نقدی و اقساطی
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
                                <span>نهاوند</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i
                                    class="icon-clock"></i>اعتبار
                                <span class="c_date p0">5/4/98</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_observe f_r p0"><i class="icon-eye"></i>
                                <span>
                                    589
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_code f_l p0">کد:
                                <span>
                                    15546
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
                        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">اطلاعات آگهی . . .</button>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                            </div>
                            <img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
                                title="">
                            <div class="expired p0">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0">وسایل نقلیه</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">فروش یک دستگاه وسیله
                                نقلیه
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">دعوت به
                                همکاری
                            </button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">معاوضه</button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">نقدی و اقساطی
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
                                <span>نهاوند</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i
                                    class="icon-clock"></i>اعتبار
                                <span class="c_date p0">5/4/98</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_observe f_r p0"><i class="icon-eye"></i>
                                <span>
                                    589
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_code f_l p0">کد:
                                <span>
                                    15546
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
                        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">اطلاعات آگهی . . .</button>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 p0">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                            </div>
                            <img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
                                title="">
                            <div class="expired p0">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0">وسایل نقلیه</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">فروش یک دستگاه وسیله
                                نقلیه
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">دعوت به
                                همکاری
                            </button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">معاوضه</button>
                            <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">نقدی و اقساطی
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
                                <span>نهاوند</span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i
                                    class="icon-clock"></i>اعتبار
                                <span class="c_date p0">5/4/98</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_observe f_r p0"><i class="icon-eye"></i>
                                <span>
                                    589
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_code f_l p0">کد:
                                <span>
                                    15546
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
                        <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">اطلاعات آگهی . . .</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>


</div>

<script>
function myFunction() {
    alert("Asasas");
    var hashed = document.getElementById("hashed");
    var full = document.getElementById("full");
    if (full.style.display === "none") {
        full.style.display = "inline";
        hashed.style.display = "none";
    } else {
        full.style.display = "none";
        hashed.style.display = "inline";
    }
}

});
</script>




<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
<!--    Script For This Page     -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#butsave').on('click', function() {
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var text = $('#text').val();
            var sec_code = $('#sec_code').val();
            var re_sec_code = $('#re_sec_code').val();
            var id = $('#id').val();
            var accounts_id = $('#accounts_id').val();
            if(email!="" && mobile!="" && text!="" && sec_code!=""){
                $("#submit_message").attr("disabled", "disabled");
                $.ajax({
                    url: "<?php echo base_url('');?>site/Agahi/Car/send_message",
                    type: "POST",
                    data: {
                        email: email,
                        mobile: mobile,
                        text: text,
                        sec_code: sec_code,
                        re_sec_code: re_sec_code,
                        id: id,
						accounts_id: accounts_id
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#butsave").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#success").show();
                            $('#success').html('نظر شما با موفقیت ارسال گردید !');
                        }
                        else if(dataResult.statusCode==201){
                            alert("مشکلی بوجود آمده بعدا امتحان نمایید");
                        }

                    }
                });
            }
            else{
                alert('Please fill all the field !');
            }
        });
    });


</script>

<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>