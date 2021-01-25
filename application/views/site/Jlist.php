<?php include_once (APPPATH.'views/_layout/site/head.php');?>
    
    
  
    
    
    
    
    

    <!-- column-right -->






    <!-- vizheh -->
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
            <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
                <div class="inner p0">فهرست</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
                <div class="inner p0">آگهی های ویژه</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
       
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <?php foreach ($jobs_cate as $jobs_cate_val) {  ?>
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/work/Jslist'); ?>/index/<?= $jobs_cate_val->jobs_cate_id; ?>">
                            <?= $jobs_cate_val->jobs_cate_title; ?>
                        </a></li>
                    <?php } ?>
                     
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
               
<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($jobs as $bank_mashaghel_value) { ?>
                <?php if ($bank_mashaghel_value['state_id'] != 12) { ?>
                <?php if ($bank_mashaghel_value['state_id'] == 2) { ?>
                <a href="<?= base_url('site/work/BankMashaghelVizhe'); ?>/index/<?= $bank_mashaghel_value['jobs_id']; ?>">
                    <?php } else { ?>
                    <a
                        href="<?= base_url('site/work/BankMashaghelRaigan'); ?>/index/<?= $bank_mashaghel_value['jobs_id']; ?>">
                        <?php } ?>
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                            <div class="p0">
                                <?php if ($bank_mashaghel_value['state_id'] == 2) { ?>
                                <div class="p0">
                                    <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                    <div class="vip-tag-r p0">ویژه</div>
                                </div>
                                <?php } ?>
                                <img src="<?= base_url('') ?>assets/uploads/img/<?= $bank_mashaghel_value['jobs_logo']; ?>"
                                    class="img_one img-responsive" alt="">


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                    href=""><?= $bank_mashaghel_value['jobs_title']; ?></a></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                                <?= $bank_mashaghel_value['jobs_address']; ?></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                                <button type="button" class="btn_global m0 p0"><img
                                        src="<?= base_url('') ?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg"
                                        class="img-responsive" alt=""></button>

                                <div class="f_l score p0">
                                    <?= $bank_mashaghel_value['register_date']; ?>

                                </div>
                            </div>
                        </li>

                    </a>
                    <?php } ?>
                    <?php } ?>
            </ul>

            <?php echo $this->ajax_pagination->create_links(); ?>
                
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




</div>
    
    
    
    
    
    
     
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>
