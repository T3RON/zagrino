<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>










<!-- column-right -->

<?php foreach($bank_mashaghel as $bank_mashaghel_value) { ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">
	<script type="text/javascript">
		document.title = '<?= $bank_mashaghel_value->jobs_title; ?>';
	</script>
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



            <div style="direction: rtl;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_side flex_item f_l p0">
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
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 text_1_2 f_l p0">
                            <?= $bank_mashaghel_value->jobs_shoar; ?></div>
                    </div>

                    <div style="margin-top: 37px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 point_section p0">
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
                            <span class="">۲۰۰</span>
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
                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>" class="" alt=""
                        title="">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 special_out p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 swiper-container swiper_bankMashaghel">
                    <div class="swiper-wrapper">
						<?php if($bank_mashaghel_value->img3 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>" class="img-responsive" alt=""
											 title="">
									</a>
								</div>


                            </li>
                        </div>
						<?php } ?>
						<?php if($bank_mashaghel_value->img3 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img2; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img2; ?>" class="img-responsive" alt=""
											 title="">
									</a>
								</div>


                            </li>
                        </div>
						<?php } ?>
						<?php if($bank_mashaghel_value->img3 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img3; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img3; ?>" class="img-responsive" alt=""
											 title="">
									</a>
								</div>


                            </li>
                        </div>
						<?php } ?>
						<?php if($bank_mashaghel_value->img4 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img4; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img4; ?>" class="img-responsive" alt=""
											 title="">
									</a>
								</div>

                            </li>
                        </div>
						<?php } ?>
						<?php if($bank_mashaghel_value->img5 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img5; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img5; ?>" class="img-responsive" alt=""
											 title="">
									</a>
								</div>


                            </li>
                        </div>
						<?php } ?>
						<?php if($bank_mashaghel_value->img6 != "<p></p>") { ?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p0 swiper-slide">
                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
									<a class="image-link" href="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img6; ?>">
										<img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img6; ?>" class="img-responsive" alt=""
											 title="">
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


        </div>

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 poster p0">
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
                </div> -->

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">
                    
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

                </div> -->




        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

            <div class="blk-tb col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> توضیحات :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text"><?= $bank_mashaghel_value->jobs_content; ?></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> امکانات :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list-block p0">
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
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> مراکز طرف قرارداد :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text"><?= $bank_mashaghel_value->jobs_content; ?></div>
                    </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> مجوزها و اعتبار :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text"><?= $bank_mashaghel_value->jobs_mojavez; ?></div>
                    </div>
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 p0">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item r">
                                        <img width="25" height="25"
                                            src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg">
                                        <?= $bank_mashaghel_value->jobs_instagram; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/telegram.svg">
                                        <?= $bank_mashaghel_value->jobs_telegram; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/twitter.svg">
                                        <?= $bank_mashaghel_value->jobs_tw; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/facebook.svg">
                                        <?= $bank_mashaghel_value->jobs_facebook; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/whatsapp.svg">
                                        <?= $bank_mashaghel_value->jobs_whatsapp; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/youtube.svg">
                                        <?= $bank_mashaghel_value->jobs_youtube; ?>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 p0">
                            <div class="card">
                                <ul class="list-group list-group-flush space-left">
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/mobile.svg">
                                        <?= $bank_mashaghel_value->jobs_mobile; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25"
                                            src="<?=base_url('')?>assets/site/svg/telephone.svg">
                                        <?= $bank_mashaghel_value->jobs_tell; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/fax.svg">
                                        <?= $bank_mashaghel_value->jobs_fax; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/email.svg">
                                        <?= $bank_mashaghel_value->jobs_email; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25"
                                            src="<?=base_url('')?>assets/site/svg/codeposti.svg">
                                        <?= $bank_mashaghel_value->jobs_code_posti; ?>
                                    </li>
                                    <li class="list-group-item r">
                                        <img width="25" height="25" src="<?=base_url('')?>assets/site/svg/site.svg">
                                        <?= $bank_mashaghel_value->jobs_website; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>



                </div>

                <div class="blk-tb col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right p0">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <video class="video-style col-lg-12 col-md-12 col-sm-12 col-xs-12 video p0" id="video_clip"
                            poster="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->img1; ?>" preload="" playsinline controls>
                            <source
                                src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_video; ?>"
                                type="video/mp4">
                            <source src="<?=base_url('')?>assets/site/video/SampleVideo_176x144_1mb.3gp"
                                type="video/3gp">
                            <p>مرورگر شما قادر به پشتیبانی از فایل ویدئویی نیست</p>
                        </video>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> ساعت کاری :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text"><?= $bank_mashaghel_value->jobs_work_titme; ?></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-title"> شرایط فروش :</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-text"><?= $bank_mashaghel_value->jobs_mojavez; ?></div>
                    </div>


                </div>


               



            </div>






        
        </div>








    </div>
    <div style="display:block" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-toggler is-fade t_t_addres_map p0"
        id="t_t_addres_map">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                آدرس
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_text f_r p0">
            <?= $bank_mashaghel_value->jobs_address; ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 box p_0_10_i">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title f_r p0">
                موقعیت
            </div>
            <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12 fild_map f_r m0 p0">
                <div style="height: 200px;" id="map"></div>
            </div>
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


<script type="text/javascript">
        var map = L.map("map").fitBounds([
            [<?= $bank_mashaghel_value->map_latitude; ?>, <?= $bank_mashaghel_value->map_longitude; ?>]
        ]);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);
        var marker = L.marker([<?= $bank_mashaghel_value->map_latitude; ?>, <?= $bank_mashaghel_value->map_longitude; ?>]).addTo(map);
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




<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>
