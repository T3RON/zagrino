
<!-- vizheh -->


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

        

