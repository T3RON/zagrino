<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

















<!-- BODY -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 " style="direction:rtl;">

    <div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_e91e63 p0">
        فرم پنل مشاغل
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
            <span>
                ثبت فرم پنل شغلی ویژه
            </span>
        </div>

		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

        <form action="<?= base_url('site/work/BankMashaghelVizheForm/register'); ?>" method="post" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0" enctype='multipart/form-data'>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r p0">

                <!------------------------------------------------------------------  تکمیل فرم سفارش آگهی ------------>


     

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">عنوان شغل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_title" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">شعار برند و کسب و کار</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_shoar" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
					<div class="t_align fild_title p0">
						<span class="f_r p0"></span>
						<label for="sefaresh_makan" class="p0">انتخاب دسته بندی شغل</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
						<select id="jobs_cate_id" name="jobs_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<?php foreach($jobs_cate as $jobs_cate_value) { ?>
								<option value="<?= $jobs_cate_value->jobs_cate_id; ?>"><?= $jobs_cate_value->jobs_cate_title; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
					<div class="t_align fild_title p0">
						<span class="f_r p0"></span>
						<label for="sefaresh_makan" class="p0">انتخاب زير دسته بندی شغل</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
						<select name="jobs_sub_cate_id" id="jobs_sub_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

						</select>
					</div>
				</div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
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
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
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
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">نام مرکز خرید</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_shobe" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
					<div class="t_align fild_title  p0">
						<span class="f_r p0"></span>
						<label for="sefaresh_nam_neshan" class="p0">تعداد نمایندگی </label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
						<input name="jobs_count_namayandegi" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
					<div class="t_align fild_title  p0">
						<span class="f_r p0"></span>
						<label for="sefaresh_nam_neshan" class="p0">تعداد نمایندگی شهرستان</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
						<input name="jobs_count_namayandegi_in_city" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					</div>
				</div>




                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title   p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">توضیحات کلی کسب و کار </label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_content" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>





                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">ساعت کاری </label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_work_titme" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">شرایط فروش </label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_sharayet" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">مجوز ها</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_mojavez" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>







                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                    <div class="form_midle_title_in">
                        <span>
                            اطلاعات تماس
                        </span>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_11" class="p0">موبایل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_mobile" id="fild_in_11" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_15" class="p0">تلفن ثابت</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_tell" id="fild_in_15" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_16" class="p0">فکس</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_fax" id="fild_in_16" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_17" class="p0">ایمیل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_email" id="fild_in_17" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input p0">
                    </div>
                </div>

   



            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l left p0">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="upload_img" class="p0">آپلود چهار عکس مربوط به کسب و کار شما</label>
                        <span class="f_l p0"></span>
                    </div>
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place  ">
                        <li class="c">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_60">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/upload.png">
                                    <input name="img1" id="upload_img_60"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_61">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/upload.png">
                                    <input name="img2" id="upload_img_61"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_62">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/upload.png">
                                    <input name="img3" id="upload_img_62"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_63">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/upload.png">
                                    <input name="img4" id="upload_img_63"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
						<li class="">

							<div class="img_panel_2 p0">
								<img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_64">
								<div class="f_r img_panel_input_2">
									<img src="<?=base_url('')?>assets/site/img/upload.png">
									<input name="img5" id="upload_img_64"
										   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
										   type="file" multiple=""></div>
							</div>
						</li>
						<li class="">

							<div class="img_panel_2 p0">
								<img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_65">
								<div class="f_r img_panel_input_2">
									<img src="<?=base_url('')?>assets/site/img/upload.png">
									<input name="img6" id="upload_img_65"
										   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
										   type="file" multiple=""></div>
							</div>
						</li>
                    </ul>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild upload_logo">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="upload_logo" class="p0">آپلود لوگو</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">

                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 logo_preview_l pishnamayesh f_l p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                پیشنمایش لوگو
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                                سایز پیشنهادی :
                                <span class="size">
                                    ۱۷۰*۱۷۰
                                </span>
                                پیکسل
                            </div>
                        </div>
                        <div class="f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_611">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/upload.png">
                                <input name="jobs_logo" id="upload_img_611"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                    multiple=""></div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="upload_img" class="p0">آپلود کلیپ تبلیغاتی شما</label>
                        <span class="f_l p0"></span>
                    </div>
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place  ">
                        <li class="c">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/placeholdevideo.png" id="imgshow_90">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/upload.png">
                                    <input name="jobs_video" id="upload_img_90"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>

                    </ul>
                </div>



            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r p0">

                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
                            <label for="social_network_1" class="label_icon f_r p0">
                                <img src="<?=base_url('')?>assets/site/svg/telegram.svg" alt="">
                            </label>
                            <input name="jobs_telegram" id="social_network_1" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
                            <label for="social_network_2" class="label_icon f_r p0">
                                <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg" alt="">
                            </label>
                            <input name="jobs_instagram" id="social_network_2" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
                            <label for="social_network_3" class="label_icon f_r p0">
                                <img src="<?=base_url('')?>assets/site/svg/twitter.svg" alt="">
                            </label>
                            <input name="jobs_tw" name="jobs_tw" id="social_network_3" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
                        </div>
                    </li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
							<label for="social_network_3" class="label_icon f_r p0">
								<img src="<?=base_url('')?>assets/site/svg/whatsapp.svg" alt="">
							</label>
							<input name="jobs_feature" name="jobs_whatsapp" id="social_network_3" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
						</div>
					</li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
							<label for="social_network_3" class="label_icon f_r p0">
								<img src="<?=base_url('')?>assets/site/svg/facebook.svg" alt="">
							</label>
							<input name="jobs_facebook" name="jobs_facebook" id="social_network_3" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
						</div>
					</li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
							<label for="social_network_3" class="label_icon f_r p0">
								<img src="<?=base_url('')?>assets/site/svg/youtube.svg" alt="">
							</label>
							<input name="jobs_youtube" name="jobs_youtube" id="social_network_3" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
						</div>
					</li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
							<label for="social_network_3" class="label_icon f_r p0">
								<img src="<?=base_url('')?>assets/site/svg/pinterest.svg" alt="">
							</label>
							<input name="jobs_pinterest" name="jobs_pinterest" id="social_network_3" type="text" class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
						</div>
					</li>
                </ul>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">آدرس</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_address" id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_17" class="p0">کدپستی</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_code_posti" id="fild_in_17" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input p0">
                    </div>
                </div>

            </div>




            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r p0">






                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_title">
                    تعیین موقعیت روی نقشه
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_r select_map">
                    <!--Google map-->
                    <div id="map" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  map" id="map_koli"
                        style="position: relative; overflow: hidden;">
                        <div
                            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-err-container">
                                <div class="gm-err-content">
                                    <div class="gm-err-icon">
										<div style="height: 200px;" id="map"></div>

									</div>
                                    <div class="gm-err-title">Oops! Something went wrong.</div>
                                    <div class="gm-err-message">This page didn't load Google Maps correctly. See the
                                        JavaScript console for technical details.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



				<input name="map_latitude" id="latitude" type="hidden">
				<input name="map_longitude" id="longitude" type="hidden">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild form_submit_div">
                    <button type="submit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_submit">
                        ثبت
                    </button>
                </div>


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
    $("#upload_img_60").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_60').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_61").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_61').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_62").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_62').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_63").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_63').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
	$('document').ready(function() {
		$("#upload_img_64").change(function() {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imgshow_64').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function() {
		$("#upload_img_65").change(function() {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imgshow_65').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_611").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_611').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_620").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_620').attr('src', e.target.result);
                $('#imgshow_622').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});


<
script >
    $('document').ready(function() {
        $("#upload_img_620").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgshow_620').attr('src', e.target.result);
                    $('#imgshow_622').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    }); <
script >
    $('document').ready(function() {
        $("#upload_img_620").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgshow_620').attr('src', e.target.result);
                    $('#imgshow_622').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    }); <
script >
    $('document').ready(function() {
        $("#upload_img_620").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgshow_620').attr('src', e.target.result);
                    $('#imgshow_622').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    }); <
script >
    $('document').ready(function() {
        $("#upload_img_620").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgshow_620').attr('src', e.target.result);
                    $('#imgshow_622').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });







<
script >
    $('document').ready(function() {
        $("#upload_img_70").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgshow_70').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script>
$('document').ready(function() {
    $("#upload_img_71").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_71').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_72").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_72').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_73").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_73').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>











<script>
$('document').ready(function() {
    $("#upload_img_80").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_80').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_81").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_81').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_82").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_82').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_83").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_83').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>




<script>
$('document').ready(function() {
    $("#upload_img_90").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_90').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>




</script>
<script>
$('document').ready(function() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = false;
    document.getElementById('sefaresh_nam_neshan_2').disabled = false;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
});
</script>
<script>
function N_1() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = false;
    document.getElementById('sefaresh_nam_neshan_2').disabled = false;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>
<script>
function N_2() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = false;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>
<script>
function N_3() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = false;
    document.getElementById('sefaresh_nam_neshan_5').disabled = false;
    document.getElementById('sefaresh_nam_neshan_6').disabled = false;
    document.getElementById('sefaresh_nam_neshan_7').disabled = false;
    document.getElementById('sefaresh_nam_neshan_8').disabled = false;
}
</script>
<script>
function N_4() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>


<script type="text/javascript">
	$(document).ready(function(){

		$('#jobs_cate_id').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?php echo site_url('site/work/BankMashaghelRaiganForm/get_sub_cate');?>",
				method : "POST",
				data : {id: id},
				async : true,
				dataType : 'json',
				success: function(data){

					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option value='+data[i].jobs_sub_cate_id+'>'+data[i].jobs_sub_cate_title+'</option>';
					}
					$('#jobs_sub_cate_id').html(html);

				}
			});
			return false;
		});

	});
</script>


<script type="text/javascript">
	$(document).ready(function(){

		$('#ostan_id').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?php echo site_url('site/work/BankMashaghelRaiganForm/get_city');?>",
				method : "POST",
				data : {id: id},
				async : true,
				dataType : 'json',
				success: function(data){

					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option value='+data[i].city_id+'>'+data[i].city_title+'</option>';
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
