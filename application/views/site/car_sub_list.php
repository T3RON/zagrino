<?php include_once (APPPATH.'views/_layout/site/head.php');?>









<!-- column-right -->






<!-- vizheh -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
    <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
        <div class="inner p0">فهرست</div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
        <div class="inner p0">آگهی های </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($car_cate as $car_cate_value) { ?>

                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a
                        href="<?= base_url('site/Agahi/Car/sub_list/'); ?><?= $car_cate_value->car_sub_cate_id; ?>">
                        <?= $car_cate_value->car_sub_cate_title; ?>
                    </a></li>
                <?php } ?>

            </ul>
        </div>
    </div>

    <div id="postList" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
        <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
            <?php foreach ($agahi_car as $agahi_cars_value) { ?>
            <?php if ($agahi_cars_value['state_id'] != 12) { ?>
            <?php if ($agahi_cars_value['state_id'] == 2) { ?>
            <a href="<?= base_url('site/work/BankMashaghelVizhe'); ?>/index/<?= $agahi_cars_value['agahi_car_id']; ?>">
                <?php } else { ?>
                <a
                    href="<?= base_url('site/work/BankMashaghelRaigan'); ?>/index/<?= $agahi_cars_value['agahi_car_id']; ?>">
                    <?php } ?>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="p0">
                            <?php if ($agahi_cars_value['state_id'] == 2) { ?>
                            <div class="p0">
                                <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                <div class="vip-tag-r p0">ویژه</div>
                            </div>
                            <?php } ?>
                            <img src="<?= base_url('') ?>assets/uploads/img/<?= $agahi_cars_value['img1']; ?>"
                                class="img_one img-responsive" alt="">


                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                href=""><?= $agahi_cars_value['agahi_car_title']; ?></a></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                            <?= $agahi_cars_value['ostan_title']; ?> , <?= $agahi_cars_value['city_title']; ?></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                            <?= $agahi_cars_value['agahi_car_address']; ?></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img
                                    src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                    class="img-responsive" alt=""></button>

                            <div class="f_l score p0">
                                <?= $agahi_cars_value['register_date']; ?>

                            </div>
                        </div>
                    </li>

                </a>
                <?php } ?>
                <?php } ?>

                
        </ul>

        <?php echo $this->ajax_pagination->create_links(); ?>
    </div>
</div>




</div>










<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>