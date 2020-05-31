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
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">#كد شناسايي</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">عنوان شغل</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">گروه بندي</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">وضعيت</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">تاريخ ثبت</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">تاريخ انقضا</th>
                                    <th style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;" scope="col">عمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jobs as $jobs_value) { ?>
                                <tr>
                                    <td style="text-align: center;"><?= $jobs_value->jobs_id; ?></td>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;"><?= $jobs_value->jobs_title; ?>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;"><?= $jobs_value->jobs_cate_title; ?></td>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;"><?= $jobs_value->state_title; ?></td>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;">
                                        <span
                                            style="color:blue;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->register_date,'','GMT'); ?></span>

                                    </td>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;">
                                        <?php if(time() > $jobs_value->expire) { ?>
                                        <span
                                            style="color:red;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->expire,'','GMT'); ?></span>
                                        <?php } else { ?>
                                        <span
                                            style="color:green;"><?= $this->jdf->jdate('l, j F Y',$jobs_value->expire,'','GMT'); ?></span>
                                        <?php } ?>
                                    </td>
                                    <td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;text-align: center;">
                                        <a data-toggle="modal" data-target="#mdl-delete"
                                            style="background:red;color: #fff !important;padding: 0px 10px !important;"
                                            class="btn btn-sm">حذف</a>

                                        <?php if ($this->session->userdata('state_id') == 2 ) { ?>            
                                        <a href="<?= base_url('site/panel/Jobs/edit'); ?>/<?= $jobs_value->jobs_id; ?>"
                                            style="background:#7f7f7f;color: #fff !important;padding: 0px 10px !important;"
                                            class="btn btn-secondary btn-sm">ويرايش</a>
                                        <?php } ?>

                                        <a href="<?= base_url('site/panel/Jobs/show'); ?>/<?= $jobs_value->jobs_id; ?>"
                                            style="background:#d4b000;color: #fff !important;padding: 0px 10px !important;"
                                            class="btn btn-secondary btn-sm">مشاهده</a>
                                    </td>
                                </tr>
                                
                                <!-- Modal delete -->
                                <div class="modal fade" id="mdl-delete" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">حذف شغل</h5>
                                             
                                            </div>
                                            <div class="modal-body">
                                                آيا از حذف <?= $jobs_value->jobs_title; ?> اطمينان داريد ؟
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">بستن</button>
                                                <a style="background:red;color: #fff !important;" href="<?= base_url('site/panel/Jobs/delete'); ?>/<?= $jobs_value->jobs_id; ?>" type="button" class="btn btn-primary">خذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



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
<?php include_once (APPPATH.'views/_layout/swal.php'); ?>