<?php include_once (APPPATH.'views/_layout/site/header.php');?>
    
    
  
    
    
    
    
    

    <!-- column-right -->






    <!-- vizheh -->
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
            <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
                <div class="inner p0">فهرست</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
<<<<<<< HEAD
                <div class="inner p0">مشاغل ویژه</div>
=======
                <div class="inner p0">آگهی های ویژه</div>
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
       
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <?php foreach ($jobs_cate as $jobs_cate_val) {  ?>
<<<<<<< HEAD
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/work/Jlist/getJobsByCate'); ?>/<?= $jobs_cate_val->jobs_cate_id; ?>">
=======
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/work/Jslist'); ?>/index/<?= $jobs_cate_val->jobs_cate_id; ?>">
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
                            <?= $jobs_cate_val->jobs_cate_title; ?>
                        </a></li>
                    <?php } ?>
                     
                    </ul>
                </div>
            </div>
<<<<<<< HEAD

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
                
    
=======
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach($bank_mashaghel as $bank_mashaghel_value) { ?>
                    <li class="col-lg-6 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
                                <?php if($bank_mashaghel_value->state_id == 2) { ?> 
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                                    </div>
                                <?php } ?>
                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $bank_mashaghel_value->jobs_logo; ?>" class="img-responsive" alt="" title="">
                                    <div class="expired monghazi p0">
                                        <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0"><?= $bank_mashaghel_value->jobs_title; ?></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">
                                    <?= $bank_mashaghel_value->jobs_content; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0">دعوت به همکاری</button>
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">معاوضه</button>
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">نقدی و اقساطی</button>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
                                        <span><?= $bank_mashaghel_value->city_title; ?></span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i class="icon-clock"></i>اعتبار
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
                                <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">مشاهده جزئيات</button>
                            </div>
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
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
                
                
            </div>
        </div>




<<<<<<< HEAD


=======
>>>>>>> 9468fe3bde444b9ebda9abd472ff344833568748
</div>
    
    
    
    
    
    
     
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>