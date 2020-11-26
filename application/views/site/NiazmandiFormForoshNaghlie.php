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
			<?php foreach ($site as $site_value) { ?>
				<?= $site_value->help_car; ?>
			<?php } ?>
		</div>


		<form action="" method="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">


			<!----------------------------------------------------------------------------------------  فرم ثبت آگهی وسایل نقلیه ----------------------------------------------------------->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
				<div class="form_midle_title_in">
                   <span>
                   فرم ثبت آگهی وسایل نقلیه
                   </span>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
					<div class="t_align fild_title p0">
						<span class="f_r p0"></span>
						<label for="naghlie_mozo" class="p0">موضوع آگهی</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
						<input id="naghlie_mozo" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					</div>
				</div>
				<div class="col-lg-12 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
					<div class="t_align fild_title p0">
						<span class="f_r p0"></span>
						<label for="naghlie_gorooh" class="p0">انتخاب گروه</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
						<select id="naghlie_gorooh" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<option value="none" selected disabled hidden></option>
							<option value="1">عادی</option>
							<option value="2">شگفتانه</option>
							<option value="3">همگانی</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-6 col-md-10 col-sm-9 col-xs-7 f_r clear fild">
					<div class="t_align fild_title p0">
						<span class="f_r p0"></span>
						<label for="naghlie_gorooh" class="p0">انتخاب زیر گروه</label>
						<span class="f_l p0"></span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
						<select id="naghlie_gorooh" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<option value="none" selected disabled hidden></option>
							<option value="1">عادی</option>
							<option value="2">شگفتانه</option>
							<option value="3">همگانی</option>
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
						<input id="naghlie_gheimat" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_tozihat_kamel" class="p0">توضیحات کامل</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_tozihat_kamel" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_codmeli" class="p0">کدملی ( اختیاری )</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_codmeli" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_mobile_motabar" class="p0">موبایل معتبر</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_mobile_motabar" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_telephone" class="p0">تلفن</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_telephone" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild vaziat_kala">

				<div class="title">
					وضعیت کالا
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 radio_input">
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
						<span>نو </span>
						<input type="radio" name="radio_1">
						<span class="checkmark"></span>
					</label>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 radio_input">
					<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
						<span>کار کرده </span>
						<input type="radio" name="radio_1">
						<span class="checkmark"></span>
					</label>
				</div>


			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_email" class="p0">آدرس ایمیل</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_email" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_link" class="p0">لینک آگهی</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_link" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r sale_sakht fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_sale_sakht" class="p0">سال ساخت</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_sale_sakht" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="naghlie_noe" class="p0">نوع وسیله نقلیه</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
					<input id="naghlie_noe" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

			<div class="flex_boxl">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r flex_box_in p0" style="clear: right">

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r noe_badane fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="tozihat_text" class="p0">نوع بدنه</label>
							<span class="f_l p0"></span>
						</div>
						<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio">
							<li class="col-lg-6 col-md-6 col-sm-4 col-xs-6 p0">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
									<span>سواری </span>
									<input type="checkbox" name="">
									<span class="checkmark"></span>
								</label>
							</li>
							<li class="col-lg-6 col-md-6 col-sm-4 col-xs-6 p0">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
									<span>شاسی بلند</span>
									<input type="checkbox" name="">
									<span class="checkmark"></span>
								</label>
							</li>
							<li class="col-lg-6 col-md-6 col-sm-4 col-xs-6 p0">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
									<span>ون</span>
									<input type="checkbox" name="">
									<span class="checkmark"></span>
								</label>
							</li>
							<li class="col-lg-6 col-md-6 col-sm-4 col-xs-6 p0">
								<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
									<span>مینی ون</span>
									<input type="checkbox" name="">
									<span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>


				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l flex_box_in p0">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="naghlie_mashin_sangin" class="p0">ماشین سنگین</label>
							<span class="f_l p0"></span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
							<div class="col-lg-1 f_r t_align p0">نوع :</div>
							<input id="naghlie_mashin_sangin" type="text"
								   class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="naghlie_mashin_nime_sangin" class="p0">ماشین نیمه سنگین</label>
							<span class="f_l p0"></span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
							<div class="col-lg-1 f_r t_align p0">نوع :</div>
							<input id="naghlie_mashin_nime_sangin" type="text"
								   class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="naghlie_mashin_alat" class="p0">ماشین آلات مهندسی</label>
							<span class="f_l p0"></span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
							<div class="col-lg-1 f_r t_align p0">نوع :</div>
							<input id="naghlie_mashin_alat" type="text"
								   class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="naghlie_motor" class="p0">موتور سیکلت</label>
							<span class="f_l p0"></span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
							<div class="col-lg-1 f_r t_align p0">نوع :</div>
							<input id="naghlie_motor" type="text" class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
						<div class="t_align fild_title p0">
							<span class="f_r p0"></span>
							<label for="naghlie_docharkhe" class="p0">دوچرخه</label>
							<span class="f_l p0"></span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
							<div class="col-lg-1 f_r t_align p0">نوع :</div>
							<input id="naghlie_docharkhe" type="text"
								   class="col-lg-11 col-md-11 col-sm-11 col-xs-11 p0">
						</div>
					</div>


				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 naghlie_makhsoos p0">

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_10 f_r fild">
					<div class="fild_title title p0">
						مختص خودرو
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in body">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_karkard" class="p0">کارکرد</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_karkard" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_vaziat" class="p0">وضعیت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_vaziat" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_sookht" class="p0">سوخت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_sookht" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_noe_pelak" class="p0">نوع پلاک</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_noe_pelak" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_range_badane" class="p0">رنگ بدنه</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_range_badane" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_range_dakhel" class="p0">رنگ داخل</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_range_dakhel" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_vaziat_badane" class="p0">وضعیت بدنه</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_vaziat_badane" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_vaziat_motor" class="p0">وضعیت موتور</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_vaziat_motor" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_etebar_bime" class="p0">اعتبار بیمه</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_etebar_bime" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_takhfif_bime" class="p0">تخفیف بیمه</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_takhfif_bime" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_tozihattakmili" class="p0">توضیحات تکمیلی</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="khodro_tozihattakmili" rows="4"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_10 f_l fild">
					<div class="fild_title title p0">
						مختص موتور
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in body ">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_karkard" class="p0">کارکرد</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_karkard" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_vaziat" class="p0">وضعیت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_vaziat" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_sookht" class="p0">سوخت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_sookht" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_jabe_dande" class="p0">جعبه دنده</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_jabe_dande" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_tedad_dande" class="p0">تعداد دنده</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="motor_tedad_dande" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="khodro_noe_start" class="p0">نوع استارت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="khodro_noe_start" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_noe_ring" class="p0">نوع رینگ</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_noe_ring" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_noe_pelak" class="p0">نوع پلاک</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_noe_pelak" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_rang" class="p0">رنگ</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="motor_rang" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_hajm_motor" class="p0">حجم موتور</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="motor_hajm_motor" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_vaziat_badane" class="p0">وضعیت بدنه</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="motor_vaziat_badane" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="motor_tozihat_takmili" class="p0">توضیحات تکمیلی</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="motor_tozihat_takmili" rows="4"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_10 f_r fild">
					<div class="fild_title title p0">
						مختص دوچرخه
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in body">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="docharkhe_vaziat" class="p0">وضعیت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="docharkhe_vaziat" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="docharkhe_size" class="p0">سایز</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="docharkhe_size" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="docharkhe_dande" class="p0">دنده</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="docharkhe_dande" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="docharkhe_tormoz" class="p0">ترمز</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="docharkhe_tormoz" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="docharkhe_tozihattakmili" class="p0">توضیحات تکمیلی</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="docharkhe_tozihattakmili" rows="4"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_10 f_l fild">
					<div class="fild_title title p0">
						مختص ماشین های سنگین و نیمه سنگین
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in body">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="sangin_vaziat" class="p0">کارکرد</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="sangin_vaziat" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="sangin_sale_sakht" class="p0">سال ساخت</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
								<input id="sangin_sale_sakht" type="text"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  fild">
							<div class="t_align fild_title p0">
								<span class="f_r p0"></span>
								<label for="sangin_tozihattakmili" class="p0">توضیحات تکمیلی</label>
								<span class="f_l p0"></span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
								<input id="sangin_tozihattakmili" rows="4"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r clear fild p0 p0">
				<div class="t_align fild_title p0">
					<span class="f_r p0"></span>
					<label for="adres_koli" class="p0">آدرس</label>
					<span class="f_l p0"></span>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
					<input id="adres_koli" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				</div>
			</div>

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
								<input id="upload_img_1000"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
					<li class="">

						<div class="f_r img_panel_2 p0">
							<img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1111">
							<div class="f_r img_panel_input_2">
								<img src="<?= base_url('') ?>assets/site/img/camera.svg">
								<input id="upload_img_1111"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
					<li class="">

						<div class="f_r img_panel_2 p0">
							<img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1222">
							<div class="f_r img_panel_input_2">
								<img src="<?= base_url('') ?>assets/site/img/camera.svg">
								<input id="upload_img_1222"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
					<li class="">

						<div class="f_r img_panel_2 p0">
							<img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1333">
							<div class="f_r img_panel_input_2">
								<img src="<?= base_url('') ?>assets/site/img/camera.svg">
								<input id="upload_img_1333"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
					<li class="">

						<div class="f_r img_panel_2 p0">
							<img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1444">
							<div class="f_r img_panel_input_2">
								<img src="<?= base_url('') ?>assets/site/img/camera.svg">
								<input id="upload_img_1444"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
					<li class="">

						<div class="f_r img_panel_2 p0">
							<img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1555">
							<div class="f_r img_panel_input_2">
								<img src="<?= base_url('') ?>assets/site/img/camera.svg">
								<input id="upload_img_1555"
									   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
									   type="file" multiple=""></div>
						</div>
					</li>
				</ul>
			</div>


			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_l select_map">
				<!--Google map-->
				<div style="height: 200px;" id="map"></div>
			</div>
			<script type="text/javascript">

				var options = {
					center: ['34.5569633', '34.5569633'],
					zoom: 18
				}

				var map = L.map('map', options);

				L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'})
						.addTo(map);

				// map.on('click',
				// 	function(e){
				// 		//var coord = e.latlng.toString().split(',');
				// 		//var lat = coord[0].split('(');
				// 		//var lng = coord[1].split(')');
				// 		//alert("You clicked the map at LAT: " + lat[1] + " and LONG: " + lng[0]);
				// 		L.marker(e.latlng).addTo(map);
				// 	});

				var myMarker = L.marker([34.5569633, 5569633], {title: "", alt: "The Big I", draggable: true})
						.addTo(map)
						.on('dragend', function () {
							var coord = String(myMarker.getLatLng()).split(',');
							console.log(coord);
							var lat = coord[0].split('(');
							console.log(lat);
							var lng = coord[1].split(')');
							console.log(lng);
							myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
						});

			</script>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild movafeghat">
				<label class="col-lg-6 col-md-12 col-sm-12 col-xs-12 radio_label radio_label_2 p0">
                       <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p0">
                           شرایط و قوانین درج آگهی را مطالعه نموده ام و موافقت خود را اعلام می کنم
                       </span>
					<input type="radio" name="">
					<span class="checkmark"></span>
				</label>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild  pish_namayesh">
				<button class="col-lg-3 col-md-12 col-sm-12 col-xs-12 f_r main_button" type="" href="">
					پیش نمایش آگهی
				</button>
			</div>


		</form>

	</div>


</div>


</div>


<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->


<script>
	$('document').ready(function () {
		$("#upload_img").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
	$('document').ready(function () {
		$("#upload_img_10").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_10').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_11").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_11').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_12").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_12').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_13").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_13').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_14").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_14').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_15").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_15').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
	$('document').ready(function () {
		$("#upload_img_100").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_100').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_111").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_111').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_122").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_122').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_133").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_133').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_144").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_144').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_155").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_155').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
	$('document').ready(function () {
		$("#upload_img_1000").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1000').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1111").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1111').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1222").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1222').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1333").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1333').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1444").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1444').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_1555").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_1555').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
	$('document').ready(function () {
		$("#upload_img_10000").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_10000').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_11111").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_11111').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_12222").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_12222').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_13333").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_13333').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_14444").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_14444').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_15555").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_15555').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<script>
	$('document').ready(function () {
		$("#upload_img_100000").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_100000').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_111111").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_111111').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_122222").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_122222').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_133333").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_133333').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_144444").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_144444').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>
<script>
	$('document').ready(function () {
		$("#upload_img_155555").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imgshow_155555').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		});
	});
</script>


<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>
