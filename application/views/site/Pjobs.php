<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                    ليست مشاغل ثبت شده توسط شما
                    <div class="bottom"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">

                    <div class="form-group">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="text-align: center;" scope="col">#كد شناسايي</th>
                                    <th style="text-align: center;" scope="col">عنوان شغل</th>
                                    <th style="text-align: center;" scope="col">گروه بندي</th>
                                    <th style="text-align: center;" scope="col">وضعيت</th>
                                    <th style="text-align: center;" scope="col">تاريخ ثبت</th>
                                    <th style="text-align: center;" scope="col">تاريخ انقضا</th>
                                    <th style="text-align: center;" scope="col">عمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jobs as $jobs_value) { ?>
                                <tr>
                                    <td style="text-align: center;"><?= $jobs_value->jobs_id; ?></td>
                                    <td style="text-align: center;"><?= $jobs_value->jobs_title; ?></td>
                                    <td style="text-align: center;"><?= $jobs_value->jobs_cate_title; ?></td>
                                    <td style="text-align: center;"><?= $jobs_value->state_title; ?></td>
                                    <td style="text-align: center;">
                                    <span style="color:blue;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->register_date,'','GMT'); ?></span>                                    

                                    </td>
                                    <td style="text-align: center;">
                                    <?php if(time() > $jobs_value->expire) { ?>
                                      <span style="color:red;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->expire,'','GMT'); ?></span>                                    
                                    <?php } else { ?>
                                      <span style="color:green;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->expire,'','GMT'); ?></span>                                    
                                    <?php } ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="<?= base_url('site/panel/Jobs/delete'); ?>" style="background:red;color: #fff !important;padding: 0px 10px !important;" class="btn btn-sm">حذف</a>
                                        <a href="<?= base_url('site/panel/Jobs/edit'); ?>" style="background:#7f7f7f;color: #fff !important;padding: 0px 10px !important;" class="btn btn-secondary btn-sm">ويرايش</a>
                                        <a href="<?= base_url('site/panel/Jobs/show'); ?>" style="background:#d4b000;color: #fff !important;padding: 0px 10px !important;" class="btn btn-secondary btn-sm">مشاهده</a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>


                    </div>

                </div>

            </div>


        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>


<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>