<?php include_once(APPPATH . 'views/_layout/site/head.php'); ?>


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
                    <?php $CI =& get_instance();
                            if($CI->jobs_check_record($jobs_cate_value->jobs_cate_id)) { ?>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a
                            href="<?= base_url('site/work/Jslist'); ?>/index/<?= $jobs_cate_value->jobs_cate_id; ?>">
                            <?= $jobs_cate_value->jobs_cate_title; ?>
                        </a></li>
                    <?php } ?>
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
                <?php foreach ($jobs as $bank_mashaghel_value) { ?>
                <?php if ($bank_mashaghel_value->state_id != 12) { ?>
                <?php if ($bank_mashaghel_value->state_id == 2) { ?>
                <a href="<?= base_url('site/work/BankMashaghelVizhe'); ?>/index/<?= $bank_mashaghel_value->jobs_id; ?>">
                    <?php } else { ?>
                    <a
                        href="<?= base_url('site/work/BankMashaghelRaigan'); ?>/index/<?= $bank_mashaghel_value->jobs_id; ?>">
                        <?php } ?>
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                            <div class="p0">
                                <?php if ($bank_mashaghel_value->state_id == 2) { ?>
                                <div class="p0">
                                    <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                    <div class="vip-tag-r p0">ویژه</div>
                                </div>
                                <?php } ?>
                                <img src="<?= base_url('') ?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_logo; ?>"
                                    class="img_one img-responsive" alt="">


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                    href=""><?= $bank_mashaghel_value->jobs_title; ?></a></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $bank_mashaghel_value->jobs_address; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                                <button type="button" class="btn_global m0 p0"><img
                                        src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                        class="img-responsive" alt=""></button>

                                <div class="f_l score p0">
                                    <?= $bank_mashaghel_value->register_date; ?>

                                </div>
                            </div>
                        </li>

                    </a>
                    <?php } ?>
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
                        <a href="<?= base_url('site/Agahi/Alist'); ?>">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 see_all f_l p0">
                                مشاهده همه
                            </div>
                        </a>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <?php foreach ($agahi_cate as $agahi_cate_value) { ?>
                    <?php $CI =& get_instance();
                            if($CI->agahi_check_record($agahi_cate_value->agahi_cate_id)) { ?>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0">
                        <a href="<?= base_url('site/Agahi/Alist'); ?>/list/<?= $agahi_cate_value->agahi_cate_id; ?>">
                            <?= $agahi_cate_value->agahi_cate_title; ?>
                        </a>
                    </li>
                    <?php } ?>
                    <?php } ?>

                </ul>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($agahi as $Agahi_value) { ?>
                <?php if ($Agahi_value->state_id != 12) { ?>
                <a style="clear: both;"
                    href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
                    <li class="col-lg-6 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">

                                    <a
                                        href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
                                        <?php if ($Agahi_value->state_id == 2) { ?>
                                        <div class="p0">
                                            <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                            <div class="vip-tag-r p0"><?= $Agahi_value->state_title; ?></div>
                                        </div>
                                        <?php } ?>
                                        <img src="<?= base_url('') ?>assets/uploads/img/<?= $Agahi_value->img1; ?>"
                                            class="mx-auto d-block img-responsive" alt="" title="">
                                        <?php if(time() > $Agahi_value->expire) { ?>
                                        <div class="expired monghazi_index p0">
                                            <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                                            <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("agahi", $Agahi_value->agahi_id,$state_data);
                                    ?>
                                        </div>
                                        <?php }?>
                                    </a>
                                    <div class="expired p0">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0">
                                        <?= $Agahi_value->agahi_cate_title; ?></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">
                                        <a
                                            href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
                                            <?= $Agahi_value->agahi_title; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">
                                        دعوت
                                        به همکاری
                                    </button>
                                    <button type="button"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"><?= $Agahi_value->agahi_state_kala_title; ?>
                                    </button>
                                    <button type="button"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"><?= $Agahi_value->agahi_cond_tag_title; ?>
                                    </button>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 f_l left p0">
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
                            <a
                                href="<?= base_url('site/Agahi/AgahiShow'); ?>/index/<?= $Agahi_value->agahi_id; ?>/<?= $Agahi_value->accounts_id; ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
                                    <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">اطلاعات آگهی . . .
                                    </button>
                                </div>
                            </a>
                        </div>
                    </li>
                </a>
                <?php } ?>
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


    <!-- Bank_Mashaghel -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banks_jobs section_head p0">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
            <div class="inner p0">فهرست</div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
            <div class="inner p0">املاک </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
            <div class="col-lg-10 col-md-10 col-sm-10 hidden-xs title f_r p0">
                <a href="<?= base_url('site/Agahi/FormAmlak/index'); ?>">
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
                    <?php foreach ($amlak_cate as $amlak_cate_value) { ?>
                        <?php $CI =& get_instance();
                            if($CI->amlak_check_record($amlak_cate_value->amlak_cate_id)) { ?>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a
                            href="<?= base_url('site/Agahi/FormAmlak/list'); ?>/<?= $amlak_cate_value->amlak_cate_id; ?>">
                            <?= $amlak_cate_value->amlak_cate_title; ?>
                        </a></li>
                        <?php } ?>
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
                <?php foreach ($amlak as $amlak_value) { ?>
                <?php if ($amlak_value->state_id != 12) { ?>
                    <a href="<?= base_url('site/Agahi/FormAmlak/Show'); ?>/<?= $amlak_value->agahi_amlak_id; ?>/<?= $amlak_value->accounts_id; ?>">
           
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                            <div class="p0">
                                <?php if ($amlak_value->state_id == 2) { ?>
                                <div class="p0">
                                    <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                    <div class="vip-tag-r p0">ویژه</div>
                                </div>
                                <?php } ?>
                                <img src="<?= base_url('') ?>assets/uploads/img/<?= $amlak_value->img1; ?>"
                                    class="img_one img-responsive" alt="">


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                    href=""><?= $amlak_value->amlak_bonga_title; ?></a></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $amlak_value->ostan_title; ?><?= $amlak_value->city_title; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $amlak_value->amlak_address; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                                <button type="button" class="btn_global m0 p0"><img
                                        src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                        class="img-responsive" alt=""></button>

                                <div class="f_l score p0">
                                    <?= $amlak_value->register_date; ?>

                                </div>
                            </div>
                        </li>

                    </a>
                    <?php } ?>
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


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Khadamat_Gardeshgari section_head p0">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
            <div class="inner p0">فهرست</div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
            <div class="inner p0">وسایل نقلیه </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
            <div class="col-lg-10 col-md-10 col-sm-10 hidden-xs title f_r p0">
                <a href="<?= base_url('site/Agahi/Car/index'); ?>">
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
                    <?php foreach ($car_cate as $car_cate_value) { ?>
                        <?php $CI =& get_instance();
                            if($CI->car_check_record($car_cate_value->car_cate_id)) { ?>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a
                            href="<?= base_url('site/Agahi/Car/list'); ?>/<?= $car_cate_value->car_cate_id; ?>">
                            <?= $car_cate_value->car_cate_title; ?>
                        </a></li>
                        <?php } ?>
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
                <?php foreach ($agahi_cars as $agahi_cars_value) { ?>
                <?php if ($agahi_cars_value->state_id != 12) { ?>
                <a
                    href="<?= base_url('site/Agahi/Car/Show'); ?>/<?= $agahi_cars_value->agahi_car_id; ?>/<?= $agahi_cars_value->accounts_id; ?>">
                  
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                            <div class="p0">
                                <?php if ($agahi_cars_value->state_id == 2) { ?>
                                <div class="p0">
                                    <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                    <div class="vip-tag-r p0">ویژه</div>
                                </div>
                                <?php } ?>
                                <img src="<?= base_url('') ?>assets/uploads/img/<?= $agahi_cars_value->img1; ?>"
                                    class="img_one img-responsive" alt="">


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                    href=""><?= $agahi_cars_value->agahi_car_title; ?></a></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $agahi_cars_value->ostan_title; ?> , <?= $agahi_cars_value->city_title; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $agahi_cars_value->agahi_car_address; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                                <button type="button" class="btn_global m0 p0"><img
                                        src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                        class="img-responsive" alt=""></button>

                                <div class="f_l score p0">
                                    <?= $agahi_cars_value->register_date; ?>

                                </div>
                            </div>
                        </li>

                    </a>
                    <?php } ?>
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
            <a href="<?= base_url('site/Roidad/Roidad_list/index'); ?>">
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
                    <?php foreach ($events_cate as $events_cate_value) { ?>
                        <?php $CI =& get_instance();
                            if($CI->events_check_record($events_cate_value->events_cate_id)) { ?>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0">
                    <a href="<?= base_url('site/Roidad/Roidad_list'); ?>/cate_list/<?= $events_cate_value->events_cate_id; ?>">
                            <?= $events_cate_value->events_cate_title; ?>
                        </a></li>
                        <?php } ?>
                    <?php } ?>

                </ul>
            </div>
        </div>


        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side f_l p0">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($events as $events_value) { ?>
                <?php if ($events_value->state_id != 12) { ?>
                <a style="clear: both;"
                    href="<?= base_url('site/Roidad/RoidadShow'); ?>/index/<?= $events_value->events_id; ?>/<?= $events_value->accounts_id; ?>">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            <?php if ($events_value->state_id == 2) { ?>
                            <div class="p0">
                                <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                <div class="vip-tag-r p0">ویژه</div>
                            </div>
                            <?php } ?>
                            <img src="<?= base_url('') ?>assets/uploads/img/<?= $events_value->img1; ?>"
                                class="img-responsive" alt="" title="">
                            <?php if(time() > $events_value->expire) { ?>
                            <div class="expired monghazi_events p0">
                                <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                                <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("events", $events_value->events_id,$state_data);
                                    ?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                href=""><?= $events_value->events_title; ?></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0"><?= $events_value->events_type; ?>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 t_align f_l Location p0">
                                <?= $events_value->ostan_title; ?> , <?= $events_value->city_title; ?></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date p0">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">: زمان برگزاری </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 f_l date_red taling_left p0">
                                <?= $events_value->events_start; ?></div>
                        </div>
                    </li>

                </a>
                <?php } ?>
                <?php } ?>

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

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/Gardeshgari/Tour_list'); ?>">
                            تور های تفریحی و مذهبی
                        </a></li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/Gardeshgari/Eghamatgah_list'); ?>">
                           اقامتگاه ها
                        </a></li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/Gardeshgari/Gardeshgari_list'); ?>">
                            جاذبه های گردشگری
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

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 channel left_side f_l p0">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 f_r Bank_left_right p0">
                <div class="channel">
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
                                    <img class="img-responsive" src="<?= base_url('') ?>assets/site/img/mobile.png"
                                        alt="" title="">
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
                                    <img class="img-responsive" src="<?= base_url('') ?>assets/site/img/mobile.png"
                                        alt="" title="">
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
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs f_l Bank_left_left p0">
                <div class="channel">

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
                </div>
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

    <!-- <section class="col-lg-12 col-md-12 col-sm-3 col-xs-12 news_paper border_section">
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
    </section> -->

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