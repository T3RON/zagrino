<?php include_once (APPPATH.'views/_layout/site/head.php');?>
    
    
  
    
    
    
    
    

    <!-- column-right -->






    <!-- vizheh -->
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head Agahiha_Niazmandiha p0">
            <div class="ccol-lg-3 col-md-3 col-sm-3 hidden-xs f_r outer r p0">
                <div class="inner p0">فهرست</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 f_l outer l p0">
                <div class="inner p0">جاذبه های تفریحی و گردشگری </div>
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
            
            <div id="postList" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_side p0">
            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                <?php foreach ($gardeshgari as $gardeshgari_value) { ?>
                <?php if ($gardeshgari_value['state_id'] != 12) { ?>
                <a style="clear: both;"
                    href="<?= base_url('site/Gardeshgari/GardeshgariShow'); ?>/index/<?= $gardeshgari_value['gardeshgari_id']; ?>/<?= $gardeshgari_value['accounts_id']; ?>">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img p0">
                            <?php if ($gardeshgari_value['state_id'] == 2) { ?>
                            <div class="p0">
                                <!-- balaye 30% takhfif class off_in_green ezafe shavad -->
                                <div class="vip-tag-r p0"><?= $gardeshgari_value['state_title'] ?></div>
                            </div>
                            <?php } ?>
                            <img src="<?= base_url('') ?>assets/uploads/img/<?= $gardeshgari_value['img1']; ?>"
                                class="img-responsive" alt="" title="">
                            <?php if(time() > $gardeshgari_value['expire']) { ?>
                            <div class="expired monghazi_events p0">
                                <img class="expiredimg" src="<?=base_url('')?>assets/site/img/monghazi.png">
                                <?php 
                                        
                                        $state_data = array(
                                            'state_id' => '4'
                                        );
                            
                                        $this->MY_Model->update("gardeshgari", $gardeshgari_value['gardeshgari_id'],$state_data);
                                    ?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title p0"><a
                                href=""><?= $gardeshgari_value['gardeshgari_title']; ?></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 address p0">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0"><?= $gardeshgari_value['gardeshgari_des']; ?>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 t_align f_l Location p0">
                                <?= $gardeshgari_value['ostan_title']; ?> , <?= $gardeshgari_value['city_title']; ?></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date p0">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 f_r p0">: جاذبه گردشگری </div>
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 f_l date_red taling_left p0">
                                <?= $gardeshgari_value['gardeshgari_best_time']; ?></div>
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
