<?php include_once(APPPATH . 'views/_layout/site/head.php'); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer p0" style="
    background: #1a5aa0;">
        ثبت آگهی رایگان و محدود
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
            <span>
                ثبت فرم پنل آگهی و نیازمندی ها رایگان
            </span>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hint">
            <div class="title ">
                راهنمای ثبت آگهی به صورت رایگان
            </div>
            <?php foreach ($site as $site_value) { ?>
            <?= $site_value->agahi_free_help; ?>
            <?php } ?>
        </div>





        <form action="<?= base_url('site/Agahi/FreeAgahiForm/register'); ?>" method="post"
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0" enctype='multipart/form-data'>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

            <!------------------------------------------------------------------  ثبت آگهی رایگان ------------>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                <div class="form_midle_title_in">
                    <span>
                        ثبت آگهی رایگان
                    </span>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_11" class="p0">موضوع آگهی</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="agahi_title" id="fild_in_11" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_15" class="p0">شماره همراه معتبر</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="agahi_tell" id="fild_in_15" type="text"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">انتخاب گروه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select id="agahi_cate_id" name="agahi_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="0">...</option>
                        <?php foreach($agahi_cate as $agahi_cate_value) { ?>
                        <option value="<?= $agahi_cate_value->agahi_cate_id; ?>">
                            <?= $agahi_cate_value->agahi_cate_title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">انتخاب زیر گروه</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="agahi_sub_cate_id" id="agahi_sub_cate_id"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                    </select>
                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="sefaresh_makan" class="p0">استان</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">

                    <select id="ostan_id" name="ostan_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                        <?php foreach($ostan as $ostan_value) { ?>
                        <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="sefaresh_makan" class="p0">شهرستان</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="city_id" id="city_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">

                    </select>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r clear fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="tozihat_text" class="p0">توضیحات کامل</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <textarea name="agahi_des" id="tozihat_text" rows="4"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"></textarea>
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">وضعیت کالا</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="agahi_state_kala_id" id="fild_in_12"
                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none">...</option>
                        <?php foreach($agahi_state_kala as $agahi_state_kala_value) { ?>
                        <option value="<?= $agahi_state_kala_value->agahi_state_kala_id; ?>">
                            <?= $agahi_state_kala_value->agahi_state_kala_title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>




            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_17" class="p0">توجه</label>
                    <span class="f_l p0"></span>
                </div>
                <div style="text-align:center;color: red" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    سعی نمایید اطلاعات فرم را به دقت وارد نمایید
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild p0 p0">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="adres" class="p0">آدرس</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <textarea id="adres" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"></textarea>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r  fild">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place">

                    <div class=" f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/placeholder.png" id="imgshow">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input id="upload_img" name="img1"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>

                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/placeholder.png" id="imgshow_1">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input id="upload_img_1" name="img2"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>

                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/placeholder.png" id="imgshow_2">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input id="upload_img_2" name="img3"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>



                </div>
            </div>








            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_l select_map">
                <div class="alert alert-info">جهت تعیین موقعیت روی آیکون آبی رنگ کلیک کنید سپس جابه جا نمایید</div>
                <!--Google map-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map" id="map"
                    style="position: relative; overflow: hidden;">
                    <div
                        style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <div class="gm-err-container">
                            <div class="gm-err-content">
                                <div class="gm-err-icon">
                                    <div style="height: 200px;" id="map"></div>
                                    <input name="agahi_latitude" id="latitude" type="hidden">
                                    <input name="agahi_longitude" id="longitude" type="hidden">

                                </div>
                                <div class="gm-err-title">Oops! Something went wrong.</div>
                                <div class="gm-err-message">This page didn't load Google Maps correctly. See the
                                    JavaScript console for technical details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tavajoh ">
                <div class="title_tavajoh ">
                    توجه
                </div>
                <p>
                    <?php foreach ($site as $site_value) { ?>
                        <input name="days" value="<?= $site_value->show_time_free; ?>" type="hidden">

                    تعداد روزهای نمایش آگهی رایگان <?= $site_value->show_time_free; ?> می باشد
                    جهت استفاده از امکانات و تعداد روز های بشتر آگهی ویژه را انتخاب نمایید
                    <?php } ?>

                </p>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">
                        <a href="<?= base_url('site/Agahi/VipAgahiForm'); ?>">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabt f_r ">
                                <i class="icon-plus f_r"></i>
                                ثبت آگهی ویژه
                            </div>
                        </a>

                    </div>
                </div>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild  pish_namayesh">
                <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r main_button" style="font-size: 20px;go"
                    type="" href="">
                    ثبت و ارسال جهت بررسی
                </button>

            </div>



        </form>

    </div>


</div>


</div>


<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

<script type="text/javascript">
var map = L.map("map").fitBounds([
    [33.89621114574323, 48.750954837035195],
    [33.89621114574323, 48.750954837035195]
]);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var currentMarker;

map.on("click", function(event) {
    document.getElementById("latitude").value = event.latlng.lat;
    document.getElementById("longitude").value = event.latlng.lng;
    if (currentMarker) {
        currentMarker._icon.style.transition = "transform 0.3s ease-out";
        currentMarker._shadow.style.transition = "transform 0.3s ease-out";

        currentMarker.setLatLng(event.latlng);


        setTimeout(function() {
            currentMarker._icon.style.transition = null;
            currentMarker._shadow.style.transition = null;
        }, 300);
        return;
    }

    currentMarker = L.marker(event.latlng, {
        draggable: true
    }).addTo(map).on("click", function() {
        event.originalEvent.stopPropagation();
    });
});

document.getElementById("done").addEventListener("click", function() {
    currentMarker = null;
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_1").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_1').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_2").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_2').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_3").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_3').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>



<script type="text/javascript">
$(document).ready(function() {
    $('#agahi_cate_id').change(function() {
        var id = $(this).val();

        $.ajax({
            url: "<?php echo site_url('site/Agahi/FreeAgahiForm/get_sub_cate');?>",
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
                    html += '<option value=' + data[i].agahi_sub_cate_id + '>' + data[i]
                        .agahi_sub_cate_title + '</option>';
                }
                $('#agahi_sub_cate_id').html(html);

            }
        });
        return false;
    });

});
</script>


<script type="text/javascript">
$(document).ready(function() {

    $('#ostan_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('site/Agahi/FreeAgahiForm/get_city');?>",
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
    $(document).scrollTop($("#pos").offset().top);
});
</script>
<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>