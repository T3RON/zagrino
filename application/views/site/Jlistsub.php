<?php include_once (APPPATH.'views/_layout/site/header.php');?>
    
    
  
    
    
    
    
    

    <!-- column-right -->






    <!-- vizheh -->
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
            <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
                <div class="inner p0">فهرست</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
                <div class="inner p0">مشاغل ویژه</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
       
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <?php foreach ($jobs_cate as $jobs_cate_val) {  ?>
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/work/Jlist/getJobsByCate'); ?>/<?= $jobs_cate_val->jobs_cate_id; ?>">
                            <?= $jobs_cate_val->jobs_sub_cate_title; ?>
                        </a></li>
                    <?php } ?>
                     
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach($bank_mashaghel as $bank_mashaghel_value) { ?>
                    <a href="<?= base_url('site/work/BankMashaghelRaigan'); ?>/index/<?= $bank_mashaghel_value->jobs_id; ?>">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                        <?php if ($bank_mashaghel_value->state_id == "1") { ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vighe-tag p0">ویژه</div>
                                    
                        <?php } ?>
                        </div>
                            <img src="<?=base_url('')?>assets/site/img/Band.jpg" class="img-responsive">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a href=""><?= $bank_mashaghel_value->jobs_title; ?></a></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">آدرس</div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more_item p0">
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_User_Interface-19_2044269.svg" class="img-responsive" alt=""></button>
                            <button type="button" class="btn_global m0 p0"><img src="<?=base_url('')?>assets/site/svg/iconfinder_icon-18-bookmark_315215.svg" class="img-responsive" alt=""></button>
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
                
    
                
                
            </div>
        </div>






</div>
    
    
    
    
    
    
     
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>