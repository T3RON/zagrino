<?php include_once(APPPATH . 'views/_layout/site/header.php'); ?>


<!-- column-right -->
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 column_right f_r p0">

	<!-- Bank_Mashaghel -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banks_jobs section_head p0">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
			<div class="inner p0">فهرست</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
			<div class="inner p0">بانک مشاغل</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
			<div class="col-lg-10 col-md-10 col-sm-10 hidden-xs title f_r p0">
				<a href="<?= base_url('site/work/Jlist'); ?>">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<?php foreach ($jobs_cate as $jobs_cate_value) { ?>

						<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a
								href="<?= base_url('site/work/Jslist'); ?>/index/<?= $jobs_cate_value->jobs_cate_id; ?>">
								<?= $jobs_cate_value->jobs_cate_title; ?>
							</a></li>
					<?php } ?>

				</ul>
			</div>
			<div class="hidden-lg hidden-md hidden-sm hidden-xs title f_r p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-4 p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<?php foreach ($bank_mashaghel

				as $bank_mashaghel_value) { ?>
				<?php if ($bank_mashaghel_value->state_id == 2) { ?>
				<a href="<?= base_url('site/work/BankMashaghelVizhe'); ?>/index/<?= $bank_mashaghel_value->jobs_id; ?>">
					<?php } else { ?>
					<a href="<?= base_url('site/work/BankMashaghelRaigan'); ?>/index/<?= $bank_mashaghel_value->jobs_id; ?>">
						<?php } ?>
						<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
							<div class="p0">
								<?php if ($bank_mashaghel_value->state_id == 2) { ?>
									<div class="p0">
										<!-- balaye 30% takhfif class off_in_green ezafe shavad -->
										<div class="vip-tag-r p0">20% تخفیف</div>
									</div>
								<?php } ?>
								<img
									src="<?= base_url('') ?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_logo; ?>"
									class="img-responsive" alt="">

							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
									href=""><?= $bank_mashaghel_value->jobs_title; ?></a></div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
								<button type="button" class="btn_global m0 p0"><img
										src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
										class="img-responsive" alt=""></button>
								<button type="button" class="btn_global m0 p0"><img
										src="<?= base_url('') ?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg"
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

					</a>
					<?php } ?>
			</ul>

			<div class="hidden-lg hidden-md hidden-sm col-xs-12 title f_r m_p_10 p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover_2">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-1 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-11 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<!-- Takhfifat -->


	<!-- Agahiha_Niazmandiha -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
		<div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
			<div class="inner p0">فهرست</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
			<div class="inner p0">آگهی ها و نیازمندی ها</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 title f_r p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
				</ul>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<?php foreach ($Agahi as $Agahi_value) { ?>
						<li class="col-lg-6 col-md-4 col-sm-4 col-xs-6 p0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
											<div
												class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0"><?= $Agahi_value->state_title; ?></div>
										</div>
										<a href=""><img
												src="<?= base_url('') ?>assets/uploads/img/<?= $Agahi_value->img1; ?>"
												class="img-responsive" alt="" title=""></a>
										<div class="expired p0">

										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
										<div
											class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0"><?= $Agahi_value->agahi_cate_title; ?></div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">
											<a href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
												<?= $Agahi_value->agahi_title; ?>
											</a></div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
										<button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">
											دعوت
											به همکاری
										</button>
										<button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">معاوضه
										</button>
										<button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">نقدی و
											اقساطی
										</button>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
											<span><?= $Agahi_value->city_title; ?></span>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i
												class="icon-clock"></i>اعتبار
											<span
												class="c_date p0"><?= $this->jdf->jdate('l, j F Y', $Agahi_value->expire, '', 'GMT'); ?></span>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_observe f_r p0"><i
												class="icon-eye"></i>
											<span>
                                    589
                                </span>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_code f_l p0">کد:
											<span>
                                    <?= $Agahi_value->agahi_id; ?>
                                </span>
										</div>
									</div>
								</div>
								<a href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
									<button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">اطلاعات آگهی . . .
									</button>
								</div>
								</a>
							</div>
						</li>

				<?php } ?>
			</ul>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 title f_r m_p_10 p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover_2">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-1 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-11 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>


	<!-- Roidad -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Roidad section_head p0">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
			<div class="inner p0">فهرست</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
			<div class="inner p0">رویدادها</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 title f_r p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
				</ul>
			</div>
		</div>


		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side f_l p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
						<a href=""><img src="<?= base_url('') ?>assets/site/img/4.png" class="img-responsive" alt=""
										title=""></a>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a href="">کنسرت گروه بهاران</a></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">موسیقی</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 t_align f_l Location p0">نهاوند</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">زمان برگزاری :</div>
						<div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 f_l date_red taling_left p0">۹۸/۰۵/۰۵</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
						<a href=""><img src="<?= base_url('') ?>assets/site/img/4.png" class="img-responsive" alt=""
										title=""></a>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a href="">کنسرت گروه بهاران</a></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">موسیقی</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 t_align f_l Location p0">نهاوند</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">زمان برگزاری :</div>
						<div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 f_l date_red taling_left p0">۹۸/۰۵/۰۵</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
						<a href=""><img src="<?= base_url('') ?>assets/site/img/4.png" class="img-responsive" alt=""
										title=""></a>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a href="">کنسرت گروه بهاران</a></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">موسیقی</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 t_align f_l Location p0">نهاوند</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date p0">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">زمان برگزاری :</div>
						<div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 f_l date_red taling_left p0">۹۸/۰۵/۰۵</div>
					</div>
				</li>
			</ul>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 title f_r m_p_10 p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover_2">
						<div class="col-lg-6 col-md-3 col-sm-3 col-xs-1 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-6 col-md-8 col-sm-8 col-xs-11 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>


	<!-- Khadamat_Gardeshgari -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Khadamat_Gardeshgari section_head p0">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
			<div class="inner p0">فهرست</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
			<div class="inner p0">خدمات گردشگری</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
			<div class="col-lg-10 col-md-10 col-sm-10 hidden-xs title f_r p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
				</ul>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side f_l p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									تور ها
								</button>
							</div>
						</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									رزرو اقامتگاه ها
								</button>
							</div>
						</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									جاذبه های گردشگری
								</button>
							</div>
						</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									تبلیغ ها
								</button>
							</div>
						</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									تبلیغ ها
								</button>
							</div>
						</div>
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0"
						 style="background:url(img/ADS.png);background-size: cover;background-position: center; ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bacground_insert p0">
							<img src="<?= base_url('') ?>assets/site/img/eiffel.jpg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									تبلیغ ها
								</button>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>


	<!-- Bank_Resane -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Bank_Resane section_head p0">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
				<div class="inner p0">فهرست</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
				<div class="col-lg-12 col-md-12 col-sm-12  inner p0">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_r inner_d t_align p0">
						بانک رسانه ها و شبکه های اجتماعی
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_l inner_d p0">
						چند رسانه ای
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
			<div class="col-lg-10 col-md-10 col-sm-10 hidden-xs title f_r p0">
				<a href="">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0 hover">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 arrow f_r p0">
							<i class="icon-long-arrow-right"></i>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
							مشاهده همه
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="">
							دسته بندی ۱
						</a></li>
				</ul>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side f_l p0">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 f_r Bank_left_right p0">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section p0">
							<img src="<?= base_url('') ?>assets/site/svg/telegram.svg" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									کانال های تلگرام
								</button>
							</div>
						</div>
					</li>
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section p0">
							<img src="<?= base_url('') ?>assets/site/svg/iconfinder_Instagram.svg"
								 class="img-responsive" alt="" title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									پیج های اینستاگرام
								</button>
							</div>
						</div>
					</li>
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section p0">
							<img src="<?= base_url('') ?>assets/site/img/ita_icon.png" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									کانال های ایتا
								</button>
							</div>
						</div>
					</li>
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section p0">
							<img src="<?= base_url('') ?>assets/site/img/soroush.png" class="img-responsive" alt=""
								 title="">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on t_align p0">
								<button type="button" role="button" class="">
									پیج های سروش
								</button>
							</div>
						</div>
					</li>

				</ul>
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wide p0">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 f_r p0">
								<img class="img-responsive" src="<?= base_url('') ?>assets/site/img/mobile.png" alt=""
									 title="">
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 f_l text_on t_align p0">
								<button type="button" role="button" class="">
									سایت های اینترنتی
								</button>
							</div>
						</div>
					</li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wide p0">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 f_r p0">
								<img class="img-responsive" src="<?= base_url('') ?>assets/site/img/mobile.png" alt=""
									 title="">
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 f_l text_on t_align p0">
								<button type="button" role="button" class="">
									اپلیکیشن ها
								</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs f_l Bank_left_left p0">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 multi_media p0">
							<a href="">
								<img class="img-responsive" src="<?= base_url('') ?>assets/site/img/7.png" alt=""
									 title="">
							</a>
						</div>
					</li>
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 multi_media p0">
							<a href="">
								<img class="img-responsive" src="<?= base_url('') ?>assets/site/img/7.png" alt=""
									 title="">
							</a>
						</div>
					</li>
				</ul>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 poster p0">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 archive t_align f_l p0">
							<a href="">
								<div class="in f_l m0">
									<i class="icon-chain f_r m_2_5"></i>
									<span>
                                            آرشیو
                                        </span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>


<!-- column-left -->
<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12 column_left ">

	<section class="col-lg-12 col-md-12 col-sm-3 col-xs-12 news_paper border_section">
		<div class="f_r b1">
			<div class="f_r b2">
				<i class="icon-news"></i>
			</div>
		</div>
		<div class="f_r title p0">
			<h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_0_0"><a href="">خبرنامه</a></h3>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list_item p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 img f_r p0">
						<a href=""><img class="img-responsive" src="<?= base_url('') ?>assets/site/img/Band.jpg" alt=""
										title=""></a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 tag_out f_r p0">
                            <span class="f_r">
                                اقتصادی
                            </span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 text_in p0">
						<a href="">
							نبض بازار در دست نبض بازار در دست نبض بازار در دست
						</a>
					</div>
				</li>
				<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 img f_r p0">
						<a href=""><img class="img-responsive" src="<?= base_url('') ?>assets/site/img/Band.jpg" alt=""
										title=""></a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 tag_out f_r p0">
                            <span class="f_r">
                                اقتصادی
                            </span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 text_in p0">
						<a href="">
							نبض بازار در دست نبض بازار در دست نبض بازار در دست
						</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="f_l archive p0">
			<a href="">
				آرشیو
			</a>
		</div>
	</section>

	<section class="col-lg-12 col-md-12 col-sm-9 col-xs-12 watch_rate border_section f_r">
		<div class="f_r b1">
			<div class="f_r b2">
				<i class="icon-area-chart"></i>
			</div>
		</div>
		<div class="f_r title p0">
			<h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_0_0"><a href="">پر بازدیدترین ها</a></h3>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 watch_rate_list p0">
			<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
				<li class="col-lg-12 col-md-12 col-sm-6 col-xs-6 f_r p0">
					<a href="">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
								 title="">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on p0">فوق تخصص زیباییفوق تخصص
							زیباییفوق تخصص زیبایی
						</div>
					</a>
				</li>
				<li class="col-lg-12 col-md-12 col-sm-6 col-xs-6 f_r p0">
					<a href="">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
								 title="">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on p0">فوق تخصص زیباییفوق تخصص
							زیباییفوق تخصص زیبایی
						</div>
					</a>
				</li>
				<li class="col-lg-12 col-md-12 col-sm-6 col-xs-6 f_r p0">
					<a href="">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
							<img src="<?= base_url('') ?>assets/site/img/Band.jpg" class="img-responsive" alt=""
								 title="">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_on p0">فوق تخصص زیباییفوق تخصص
							زیباییفوق تخصص زیبایی
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ads f_l p0">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ads_list m_p_5 p0">
			<a href="">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
					<img src="<?= base_url('') ?>assets/site/img/digikala.png" class="img-responsive" alt="" title="">
				</div>
			</a>
		</div>
	</section>
</aside>

</div>


<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->


<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>
