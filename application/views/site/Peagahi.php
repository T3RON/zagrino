<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <form action="<?= site_url('site/panel/Jobs/edit_action') ?>" method="post" enctype='multipart/form-data'>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">



                    <?php foreach ($jobs as $jobs_value) { ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                        شما در حال ويرايش شغل <span style="color:red;"><?= $jobs_value->jobs_title; ?></span> هستيد
                        <div class="bottom"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="مديريت"
                                aria-describedby="emailHelp"
                                value="<?= $jobs_value->account_fn; ?> <?= $jobs_value->account_ln; ?>" readonly>
                            <input name="accounts_id" type="hidden" value="<?= $jobs_value->accounts_id; ?>">
                            <input name="jobs_id" type="hidden" value="<?= $jobs_value->jobs_id; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_title" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="عنوان شغل" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_title; ?>"
                                oninvalid="this.setCustomValidity('لطفا عنوان شغل را وارد نماييد')"
                                oninput="setCustomValidity('')" required>
                        </div>



                        <div class="form-group">
                            <input name="jobs_shobe" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="شعار تبليغاتي" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_shobe; ?>">
                        </div>

                        <div class="form-group">
                            <textarea name="jobs_content" class="form-control"
                                placeholder="توضيح در مورد شغل <?= $jobs_value->jobs_title; ?>"
                                id="exampleFormControlTextarea1" rows="3"
                                value="<?= $jobs_value->jobs_content; ?>"></textarea>

                        </div>
                        <div class="form-group">
                            <select name="ostan_id" class="form-control" id="ostan_id"
                                oninvalid="this.setCustomValidity('لطفا عنوان استان را انتخاب نماييد')"
                                oninput="setCustomValidity('')" required>
                                <option value="">استان ...</option>
                                <?php foreach ($ostan as $ostan_value) { ?>
                                <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?>
                                </option>

                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="city_id" class="form-control" id="city_id"
                                oninvalid="this.setCustomValidity('لطفا عنوان شهرستان را انتخاب نماييد')"
                                oninput="setCustomValidity('')" required>
                                <option value="">شهرستان ...</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="jobs_cate_id" class="form-control" id="jobs_cate_id"
                                oninvalid="this.setCustomValidity('لطفا عنوان گروه را انتخاب نماييد')"
                                oninput="setCustomValidity('')" required>
                                <option value="">دسته بندي ...</option>
                                <?php foreach ($cate as $cate_value) { ?>
                                <option value="<?= $cate_value->jobs_cate_id; ?>"><?= $cate_value->jobs_cate_title; ?>
                                </option>

                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="jobs_sub_cate_id" class="form-control" id="jobs_sub_cate_id"
                                oninvalid="this.setCustomValidity('لطفا عنوان زير گروه را انتخاب نماييد')"
                                oninput="setCustomValidity('')" required>
                                <option value="">زير دسته بندي ...</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="jobs_feature" class="form-control"
                                placeholder="جزئيات بيشتر <?= $jobs_value->jobs_title; ?>"
                                id="exampleFormControlTextarea1" rows="3"
                                value="<?= $jobs_value->jobs_feature; ?>"></textarea>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l">
                        <div class="form-group">
                            <input name="jobs_work_titme" class="form-control" placeholder="زمان كاري"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_work_titme; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_mobile" class="form-control" placeholder="تلفن همراه"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_mobile; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_tell" class="form-control" placeholder="تلفن ثابت" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?= $jobs_value->jobs_tell; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_fax" class="form-control" placeholder="فكس" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?= $jobs_value->jobs_fax; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_email" class="form-control" placeholder="ايميل" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?= $jobs_value->jobs_email; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_code_posti" class="form-control" placeholder="كد پستي"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_code_posti; ?>">
                        </div>
                        <div class="form-group">
                            <input name="jobs_youtube" class="form-control" placeholder="يوتيوب" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?= $jobs_value->jobs_youtube; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_count_namayandegi" class="form-control" placeholder="تعداد نمايندگي"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_count_namayandegi; ?>">
                        </div>

                        <div class="form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title"> آپلود ويدئو</h4>
                            <input name="jobs_video" type="file" id="input-file-now" class="dropify" />

                            <video class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0" controls>
                                <source src="<?=base_url('')?>assets/uploads/videos/<?= $jobs_value->jobs_video; ?>"
                                    type="video/mp4">
                                Your browser does not support HTML video.
                            </video>

                        </div>



                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l">
                        <div class="form-group">
                            <input name="jobs_website" class="form-control" placeholder="وب سايت"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_website; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_instagram" class="form-control" placeholder="اينستاگرام"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_instagram; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_telegram" class="form-control" placeholder="تلگرام"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_telegram; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_whatsapp" class="form-control" placeholder="واتساپ"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_whatsapp; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_facebook" class="form-control" placeholder="فيسبوك"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_facebook; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_tw" class="form-control" placeholder="تويتر" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?= $jobs_value->jobs_tw; ?>">
                        </div>
                        <div class="form-group">
                            <input name="jobs_pinterest" class="form-control" placeholder="پينترست"
                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_pinterest; ?>">
                        </div>

                        <div class="form-group">
                            <input name="jobs_count_namayandegi_in_city" class="form-control"
                                placeholder="تعداد نمايندگي در شهر" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="<?= $jobs_value->jobs_count_namayandegi_in_city; ?>">
                        </div>


                        <div class="form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title">آپلود تصوير لوگو </h4>
                            <input name="jobs_logo" type="file" id="input-file-now" class="dropify" />
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0">
                                <img class="img-responsive"
                                    src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->jobs_logo; ?>">

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l">

                        <div class="form-group">
                            <textarea name="jobs_feature" class="form-control"
                                placeholder="آدرس  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                                rows="3" value="<?= $jobs_value->jobs_address; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="jobs_sharayet" class="form-control"
                                placeholder="شرايط  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                                rows="3" value="<?= $jobs_value->jobs_sharayet; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="jobs_mojavez" class="form-control"
                                placeholder="مجوز  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                                rows="3" value="<?= $jobs_value->jobs_mojavez; ?>"></textarea>
                        </div>


                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l p0">

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title"> انتخاب تصوير شماره 4</h4>
                            <input name="img4" value="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img4; ?>" type="file" id="input-file-now img4" class="dropify" />
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0">
                                <img class="img-responsive"
                                    src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img4; ?>">
                                <!-- <input name="img4" value="<?= $jobs_value->img4; ?>" type="hidden" /> -->

                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title"> انتخاب تصوير شماره 3</h4>
                            <input name="img3" value="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img3; ?>" type="file" id="input-file-now" class="dropify" />
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0">
                                <img class="img-responsive"
                                    src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img3; ?>">
                                <!-- <input name="img3" value="<?= $jobs_value->img3; ?>" type="hidden" /> -->
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title"> انتخاب تصوير شماره 2</h4>
                            <input name="img2" value="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img2; ?>" type="file" id="input-file-now" class="dropify" />
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0">
                            <img class="img-responsive"
                                src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img2; ?>">
                            <!-- <input name="img2" type="hidden" /> -->

                        </div>
                        </div>
                     



                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">
                            <h4 style="font-size: 14px;text-align: center;background: aliceblue;padding: 5px 0px;"
                                class="card-title"> انتخاب تصوير شماره 1</h4>
                            <input name="img1" value="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img1; ?>" type="file" id="input-file-now" class="dropify" />
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group p0">
                            <img class="img-responsive"
                                src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img1; ?>">
                            <!-- <input name="img1" value="<?= $jobs_value->img1; ?>" type="hidden" /> -->

                        </div>
                        </div>
                        




                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l">

                        <button type="submit" class="btn btn-primary">بروزرساني</button>
                        <a href="<?= base_url('site/panel/Jobs'); ?>" class="btn btn-alert">بازگشت</a>
                    </div>


                    <?php } ?>



                </div>

            </form>
        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>


<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>

<script type="text/javascript">
$(document).ready(function() {

    $('#ostan_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('site/panel/Jobs/get_cities');?>",
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].city_id + '>' + data[i].city_title +
                        '</option>';
                }
                $('#city_id').html(html);

            }
        });
        return false;
    });

});
</script>

<script type="text/javascript">
$(document).ready(function() {

    $('#jobs_cate_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('site/panel/Jobs/get_cate');?>",
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].jobs_sub_cate_id + '>' + data[i]
                        .jobs_sub_cate_title + '</option>';
                }
                $('#jobs_sub_cate_id').html(html);
            }
        });
        return false;
    });

});
</script>
