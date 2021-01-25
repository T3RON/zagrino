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
    </div>

    <div id="postList" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($agahi_amlak as $amlak_value) { ?>
                <?php if ($amlak_value['state_id'] != 12) { ?>
                <a href="<?= base_url('site/Agahi/FormAmlak/Show'); ?>/<?= $amlak_value['agahi_amlak_id']; ?>/<?= $amlak_value['accounts_id']; ?>">
           
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                            <div class="p0">
                                <?php if ($amlak_value['state_id'] == 2) { ?>
                                <div class="p0">
                                    <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                    <div class="vip-tag-r p0">ویژه</div>
                                </div>
                                <?php } ?>
                                <img src="<?= base_url('') ?>assets/uploads/img/<?= $amlak_value['img1']; ?>"
                                    class="img_one img-responsive" alt="">


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                    href=""><?= $amlak_value['amlak_bonga_title']; ?></a></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $amlak_value['ostan_title']; ?><?= $amlak_value['city_title']; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $amlak_value['amlak_address']; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                                <button type="button" class="btn_global m0 p0"><img
                                        src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                        class="img-responsive" alt=""></button>

                                <div class="f_l score p0">
                                    <?= $amlak_value['register_date']; ?>

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