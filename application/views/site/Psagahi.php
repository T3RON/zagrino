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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l">
                    <div class="form-group">
                        <span class="span_show">زمان كاري : </span>
                        <lable><?= $jobs_value->jobs_work_titme; ?></lable>


                    </div>

                    <div class="form-group">
                        <span class="span_show">تلفن همراه : </span>
                        <lable><?= $jobs_value->jobs_mobile; ?></lable>


                    </div>

                    <div class="form-group">
                        <span class="span_show">تلفن ثابت : </span>
                        <lable><?= $jobs_value->jobs_tell; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">فكس : </span>
                        <lable><?= $jobs_value->jobs_fax; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">ايميل : </span>
                        <lable><?= $jobs_value->jobs_email; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">كد پستي : </span>
                        <lable><?= $jobs_value->jobs_code_posti; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">يوتيوب : </span>
                        <lable><?= $jobs_value->jobs_youtube; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">يوتيوب : </span>
                        <lable><?= $jobs_value->jobs_youtube; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">تعداد نمايندگي : </span>
                        <lable><?= $jobs_value->jobs_count_namayandegi; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">واتساپ : </span>
                        <lable><?= $jobs_value->jobs_whatsapp; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">فيسبوك : </span>
                        <lable><?= $jobs_value->jobs_facebook; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">تويتر : </span>
                        <lable><?= $jobs_value->jobs_tw; ?></lable>
                    </div>




                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_15 f_l">
                    <div class="form-group">
                        <span class="span_show"> مشخصات فردي : </span>
                        <lable><?= $jobs_value->account_fn; ?> <?= $jobs_value->account_ln; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">عنوان شغل : </span>
                        <lable><?= $jobs_value->jobs_title; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">شعار تبليغاتي : </span>
                        <lable><?= $jobs_value->jobs_shobe; ?></lable>
                    </div>


                    <div class="form-group">
                        <span class="span_show">استان : </span>
                        <lable><?= $jobs_value->ostan_title; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">شهرستان : </span>
                        <lable><?= $jobs_value->city_title; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">دسته بندي : </span>
                        <lable><?= $jobs_value->jobs_cate_title; ?></lable>
                    </div>

                    <div name="jobs_sub_cate" class="form-group">
                        <span class="span_show">زير دسته بندي : </span>
                        <lable><?= $jobs_value->jobs_sub_cate_title; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show"> تعداد نمايندگي شهر: </span>
                        <lable><?= $jobs_value->jobs_count_namayandegi_in_city; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">وب سايت : </span>
                        <lable><?= $jobs_value->jobs_website; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">اينستاگرام : </span>
                        <lable><?= $jobs_value->jobs_instagram; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">تلگرام : </span>
                        <lable><?= $jobs_value->jobs_telegram; ?></lable>
                    </div>

                    <div class="form-group">
                        <span class="span_show">پينترست : </span>
                        <lable><?= $jobs_value->jobs_pinterest; ?></lable>
                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                    <div class="form-group">
                        <span style="color:red;">توضيح در مورد شغل : </span>
                        <lable><?= $jobs_value->jobs_content; ?></lable>
                    </div>

                    <div class="form-group">
                        <span style="color:red;">جزئيات بيشتر : </span>
                        <lable><?= $jobs_value->jobs_feature; ?></lable>
                    </div>

                    <div class="form-group">
                        <span style="color:red;">آدرس : </span>
                        <lable><?= $jobs_value->jobs_address; ?></lable>
                    </div>

                    <div class="form-group">
                        <span style="color:red;">شرايط : </span>
                        <lable><?= $jobs_value->jobs_sharayet; ?></lable>
                    </div>

                    <div class="form-group">
                        <span style="color:red;">مجوز : </span>
                        <lable><?= $jobs_value->jobs_mojavez; ?></lable>
                    </div>
                </div>

                <?php if($jobs_value->jobs_video != "") { ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l p0">
            

                    <video class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" controls>
                        <source src="<?=base_url('')?>assets/uploads/videos/<?= $jobs_value->jobs_video; ?>" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>


                </div>

                <?php } ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">


                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <?php if($jobs_value->img1 != "") { ?>
                        <img class="img-responsive"
                            src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img1; ?>">
                        <?php } else {?>
                        <img class="img-responsive" src="<?=base_url('')?>assets/uploads/img/no_image.png">
                        <?php } ?>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <?php if($jobs_value->img2 != "") { ?>
                        <img class="img-responsive"
                            src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img2; ?>">
                        <?php } else {?>
                        <img class="img-responsive" src="<?=base_url('')?>assets/uploads/img/no_image.png">
                        <?php } ?> </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <?php if($jobs_value->img3 != "") { ?>
                        <img class="img-responsive"
                            src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img3; ?>">
                        <?php } else {?>
                        <img class="img-responsive" src="<?=base_url('')?>assets/uploads/img/no_image.png">
                        <?php } ?> </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <?php if($jobs_value->img4 != "") { ?>
                        <img class="img-responsive"
                            src="<?=base_url('')?>assets/uploads/img/<?= $jobs_value->img4; ?>">
                        <?php } else {?>
                        <img class="img-responsive" src="<?=base_url('')?>assets/uploads/img/no_image.png">
                        <?php } ?> </div>


                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">

                    <a style="color:#fff !important;" href="<?= base_url('site/panel/Jobs/edit'); ?>/<?= $jobs_value->jobs_id; ?>" class="btn btn-primary"> ويرايش <?= $jobs_value->jobs_title; ?></a>
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