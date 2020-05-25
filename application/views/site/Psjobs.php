<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">



                <?php foreach ($jobs as $jobs_value) { ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                    شما در حال ويرايش شغل <span style="color:red;"><?= $jobs_value->jobs_title; ?></span> هستيد
                    <div class="bottom"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="مديريت"
                            aria-describedby="emailHelp"
                            value="<?= $jobs_value->account_fn; ?> <?= $jobs_value->account_ln; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="عنوان شغل"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_title; ?>" readonly>
                    </div>



                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="شعار تبليغاتي"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_shobe; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" placeholder="توضيح در مورد شغل <?= $jobs_value->jobs_title; ?>"
                            id="exampleFormControlTextarea1" rows="3"
                            value="<?= $jobs_value->jobs_content; ?>" readonly></textarea>

                    </div>
                    <div class="form-group">
                        <select class="form-control" id="ostan_id" readonly>
                            <option>استان ...</option>
                            <?php foreach ($ostan as $ostan_value) { ?>
                            <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?>
                            </option>

                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="city_id" readonly>
                            <option>شهرستان ...</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <select name="jobs_cate" class="form-control" id="jobs_cate_id" readonly>
                            <option>دسته بندي ...</option>
                            <?php foreach ($cate as $cate_value) { ?>
                            <option value="<?= $cate_value->jobs_cate_id; ?>"><?= $cate_value->jobs_cate_title; ?>
                            </option>

                            <?php } ?>

                        </select>
                    </div>
                    <div name="jobs_sub_cate" class="form-group">
                        <select class="form-control" id="jobs_sub_cate_id" readonly>
                            <option>زير دسته بندي ...</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="jobs_feature" class="form-control"
                            placeholder="جزئيات بيشتر <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                            rows="3" value="<?= $jobs_value->jobs_feature; ?>" readonly></textarea>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l">
                    <div class="form-group">
                        <input name="jobs_work_titme" class="form-control" placeholder="زمان كاري"
                            id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?= $jobs_value->jobs_work_titme; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_mobile" class="form-control" placeholder="تلفن همراه" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_mobile; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_tell" class="form-control" placeholder="تلفن ثابت" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_tell; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_fax" class="form-control" placeholder="فكس" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_fax; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_email" class="form-control" placeholder="ايميل" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_email; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_code_posti" class="form-control" placeholder="كد پستي" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_code_posti; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input name="jobs_youtube" class="form-control" placeholder="يوتيوب" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_youtube; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_count_namayandegi" class="form-control" placeholder="تعداد نمايندگي"
                            id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?= $jobs_value->jobs_count_namayandegi; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <lable style="height: 49px;float:left;"> آپلود ويدئو <img
                                src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->jobs_video; ?>" whith="30"
                                height="30"></lable>
                        <input name="jobs_video" type="file" class="custom-file-input" id="validatedCustomFile"
                        readonly>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l">
                    <div class="form-group">
                        <input name="jobs_website" class="form-control" placeholder="وب سايت" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_website; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_instagram" class="form-control" placeholder="اينستاگرام"
                            id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?= $jobs_value->jobs_instagram; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_telegram" class="form-control" placeholder="تلگرام" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_telegram; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_whatsapp" class="form-control" placeholder="واتساپ" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_whatsapp; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_facebook" class="form-control" placeholder="فيسبوك" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_facebook; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_tw" class="form-control" placeholder="تويتر" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_tw; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input name="jobs_pinterest" class="form-control" placeholder="پينترست" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $jobs_value->jobs_pinterest; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input name="jobs_count_namayandegi_in_city" class="form-control"
                            placeholder="تعداد نمايندگي در شهر" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?= $jobs_value->jobs_count_namayandegi_in_city; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <lable style="height: 49px;float:left;"> آپلود تصوير لوگو <img
                                src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->jobs_logo; ?>" whith="30"
                                height="30"></lable>
                        <input name="jobs_logo" type="file" class="custom-file-input" id="validatedCustomFile"  readonly>
                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_l">

                    <div class="form-group">
                        <textarea name="jobs_feature" class="form-control"
                            placeholder="آدرس  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                            rows="3" value="<?= $jobs_value->jobs_address; ?>" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="jobs_sharayet" class="form-control"
                            placeholder="شرايط  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                            rows="3" value="<?= $jobs_value->jobs_sharayet; ?>" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="jobs_mojavez" class="form-control"
                            placeholder="مجوز  <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1"
                            rows="3" value="<?= $jobs_value->jobs_mojavez; ?>" readonly></textarea>
                    </div>

                    <button type="button" class="btn btn-primary">بازگشت</button>
                    

                </div>



                <?php } ?>



            </div>


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