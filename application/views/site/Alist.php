<?php include_once (APPPATH.'views/_layout/site/head.php');?>
    
    
  
    
    
    
    
    

    <!-- column-right -->






    <!-- vizheh -->
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
            <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
                <div class="inner p0">فهرست</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
                <div class="inner p0">آگهی های </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_side f_r p0">
       
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    <?php foreach ($agahi_cate as $agahi_cate_value) {  ?>
                        <?php $CI =& get_instance();
                            if($CI->agahi_check_record($agahi_cate_value->agahi_cate_id)) { ?>
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-6 p0"><a href="<?= base_url('site/Agahi/Alist'); ?>/sub_list/<?= $agahi_cate_value->agahi_cate_id; ?>">
                            <?= $agahi_cate_value->agahi_cate_title; ?>
                        </a></li>
                        <?php } ?>
                    <?php } ?>
                     
                    </ul>
                </div>
            </div>
            
            <div id="postList" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach($agahi as $agahi_value) { ?>
                    <li class="col-lg-6 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_bg p0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upper p0">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 img f_r p0">
                                <?php if($agahi_value['state_id'] == 2) { ?> 
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 special_out p0">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 special_in p0">ویژه</div>
                                    </div>
                                <?php } ?>
                                    <img src="<?=base_url('')?>assets/uploads/img/<?= $agahi_value['img1']; ?>" class="img-responsive" alt="" title="">
                                    <?php if(time() > $agahi_value['expire']) { ?> 
                                    <div class="expired monghazi p0">
                                        <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                                        <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("agahi", $agahi_value['agahi_id'],$state_data);
                                    ?>
                                    </div>
                                    <?php }?>
                            
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 c_text f_l p0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_tag f_r p0"><?= $agahi_value['agahi_title']; ?></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_title f_r p0">
                                    <?= $agahi_value['agahi_des']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under p0">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r right p0">
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color p0"><?= $agahi_value['agahi_cate_title']; ?></button>
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"> <?= $agahi_value['ostan_title']; ?></button>
                                    <button type="button" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"><?= $agahi_value['agahi_cond_tag_title']; ?></button>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_l left p0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Location p0">
                                        <span><?= $agahi_value['city_title']; ?></span>
                                    </div>
                                    <?php if(time() > $agahi_value['expire']) { ?> 
                                    <div style="color:red;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i class="icon-clock"></i>اعتبار :
                                        <span class="c_date p0"><?= $this->jdf->jdate('l, j F Y',(int)$agahi_value['expire'],'','GMT'); ?></span>
                                    </div>
                                    <?php } else {?>
                                        <div style="color:green;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_validate p0"><i class="icon-clock"></i>اعتبار :
                                        <span class="c_date p0"><?= $this->jdf->jdate('l, j F Y',(int)$agahi_value['expire'],'','GMT'); ?></span>
                                    </div>
                                    <?php } ?>   
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_observe f_r p0"><i class="icon-eye"></i>
                                        <span>
                                        <?= $agahi_value['veiws']; ?>
                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 c_code f_l p0">کد:
                                        <span>
                                        <?= $agahi_value['agahi_id']; ?>
                                </span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('site/Agahi/AgahiShow/index'); ?>/<?= $agahi_value['agahi_id']; ?>"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_align information">
                                <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">مشاهده جزئيات</button>
                            </div>
                            </a>
                        </div>
                    </li>
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
