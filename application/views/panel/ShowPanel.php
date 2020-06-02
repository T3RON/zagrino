<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                    ليست پنل هاي شما
                    <div class="bottom"></div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                    <ul class="list-group">

                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <?php if((int)$agahi != "0" ) { ?>
                            <a href="#">
                                <span style="background:red;float:left;"
                                    class="badge badge-primary badge-pill"><?= $agahi; ?></span>
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده</span>
                            </a>
                            <?php }else { ?>
                            <span style="background:gray;float:left;"
                                class="badge badge-primary badge-pill"><?= $agahi; ?></span>
                            <span style="margin-left:10px;background:gray;float:left;"
                                class="badge badge-pill badge-primary">شما آگهي نداريد</span>
                            <?php } ?>
                            پنل آگهي
                        </li>

                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <?php if((int)$takhfif != "0" ) { ?>
                            <a href="<?= base_url('site/Panel/Choose_gardeshgari'); ?>">
                                <span style="background:red;float:left;"
                                    class="badge badge-primary badge-pill"><?= $takhfif; ?></span>
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده</span>
                            </a>
                            <?php }else { ?>
                            <span style="background:gray;float:left;"
                                class="badge badge-primary badge-pill"><?= $takhfif; ?></span>
                            <span style="margin-left:10px;background:gray;float:left;"
                                class="badge badge-pill badge-primary">شما تخفيفات نداريد</span>
                            <?php } ?>
                            پنل تخفيفات
                        </li>


                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <?php if((int)$jobs != "0" ) { ?>
                            <a href="<?= base_url('site/Panel/Jobs'); ?>">
                                <span style="background:red;float:left;"
                                    class="badge badge-primary badge-pill"><?= $jobs; ?></span>
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده</span>
                            </a>
                            <?php }else { ?>
                            <span style="background:gray;float:left;"
                                class="badge badge-primary badge-pill"><?= $jobs; ?></span>
                            <span style="margin-left:10px;background:gray;float:left;"
                                class="badge badge-pill badge-primary">شما مشاغل نداريد</span>
                            <?php } ?>
                            پنل مشاغل
                        </li>


                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('site/Panel/Choose_gardeshgari'); ?>">
                                
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده بخش ها</span>
                            </a>
                        
                            خدمات گردشگري
                        </li>

                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <?php if((int)$shop != "0" ) { ?>
                            <a href="#">
                                <span style="background:red;float:left;"
                                    class="badge badge-primary badge-pill"><?= $shop; ?></span>
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده</span>
                            </a>
                            <?php }else { ?>
                            <span style="background:gray;float:left;"
                                class="badge badge-primary badge-pill"><?= $shop; ?></span>
                            <span style="margin-left:10px;background:gray;float:left;"
                                class="badge badge-pill badge-primary">شما بازارچه نداريد</span>
                            <?php } ?>
                            بازارچه
                        </li>


                        <li style="margin-bottom:5px;"
                            class="list-group-item d-flex justify-content-between align-items-center">
                            <?php if((int)$events != "0" ) { ?>
                            <a href="<?= base_url('site/Panel/Events'); ?>">
                                <span style="background:red;float:left;"
                                    class="badge badge-primary badge-pill"><?= $events; ?></span>
                                <span style="margin-left:10px;background:#237790;float:left;"
                                    class="badge badge-pill badge-primary">مشاهده</span>
                            </a>
                            <?php }else { ?>
                            <span style="background:gray;float:left;"
                                class="badge badge-primary badge-pill"><?= $events; ?></span>
                            <span style="margin-left:10px;background:gray;float:left;"
                                class="badge badge-pill badge-primary">شما رويداد نداريد</span>
                            <?php } ?>
                            پنل رويداد ها
                        </li>
                      
                  

                    </ul>
                </div>


            </div>


        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>


<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>