<?php include_once(APPPATH . 'views/_layout/site/head.php'); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer p0" style="
    background: #ff0000;">
        ثبت آگهی به صورت ویژه
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
            <span>
                ثبت فرم پنل آگهی و نیازمندی ها ویژه
            </span>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hint">
            <div class="title ">
                راهنمای ثبت آگهی به صورت ویژه
            </div>
            <?php foreach ($site as $site_value) { ?>
            <?= $site_value->agahi_vip_help; ?>
            <?php } ?>
        </div>


        <form action="<?= base_url('site/Agahi/VipAgahiForm/register'); ?>" method="post"
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0" enctype='multipart/form-data'>
			<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


            <!------------------------------------------------------------------  ثبت آگهی رایگان ------------>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                <div class="form_midle_title_in">
                    <span>
                        ثبت آگهی ویژه
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
                    <input name="" id="fild_in_15" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
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
                    <textarea name="agahi_des" id="tozihat_text" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"></textarea>
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">وضعیت کالا</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select id="fild_in_12" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden></option>
                        <option value="1">عادی</option>
                        
                    </select>
                </div>
            </div>




            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_17" class="p0">تلفن</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="agahi_tell" id="fild_in_17" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  input p0">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_17" class="p0">ایمیل</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input name="agahi_email" id="fild_in_17" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  input p0">
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r  fild">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place">

                    <div class=" f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img1" id="upload_img"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>
                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_1">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img2" id="upload_img_1"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>
                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_2">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img3" id="upload_img_2"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>
                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_3">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img4" id="upload_img_3"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>
                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_4">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img5" id="upload_img_4"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>
                    <div class="f_r img_panel_2 p0">
                        <img src="<?= base_url('') ?>assets/site/img/logo.png" id="imgshow_5">
                        <div class="f_r img_panel_input_2">
                            <img src="<?= base_url('') ?>assets/site/img/camera.svg">
                            <input name="img6" id="upload_img_5"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file"
                                multiple="">
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">برچسب شرایط</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="agahi_cond_tag_id" id="fild_in_12" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <option value="none" selected disabled hidden></option>
                        <?php foreach ($agahi_cond_tag as $agahi_cond_tag_value) { ?>
                        <option value="<?= $agahi_cond_tag_value->agahi_cond_tag_id; ?>">
                            <?= $agahi_cond_tag_value->agahi_cond_tag_title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r fild p0 p0">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="adres" class="p0">آدرس</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in ">
                    <textarea name="agahi_address" id="adres" rows="4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0"></textarea>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 fild">
                <div class="t_align fild_title  p0">
                    <span class="f_r p0"></span>
                    <label for="fild_in_12" class="p0">مدت زمان نمایش آگهی شما</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                    <select name="days" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <?php foreach ($show_time as $show_time_value) { ?>
						<option value="<?= $show_time_value->agahi_show_time_val; ?>"><?= $show_time_value->agahi_show_time_title; ?> قیمت : <?= $show_time_value->agahi_tarefe; ?> ریال</option>
						
                        <?php } ?>
                    </select>
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
    
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 fild  pish_namayesh">
                <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r main_button" style="font-size: 20px;go"
                    type="" href="">
                    ثبت و پرداخت هزینه آگهی ویژه
                </button>

            </div>

        </form>

    </div>


</div>


</div>


<?php include_once(APPPATH . 'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

<script type="text/javascript">
var options = {
    center: [33.89621114574323, 48.750954837035195],
    zoom: 18
}

var map = L.map('map', options);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: 'OSM'
    })
    .addTo(map);

// map.on('click',
// 	function(e){
// 		//var coord = e.latlng.toString().split(',');
// 		//var lat = coord[0].split('(');
// 		//var lng = coord[1].split(')');
// 		//alert("You clicked the map at LAT: " + lat[1] + " and LONG: " + lng[0]);
// 		L.marker(e.latlng).addTo(map);
// 	});

var myMarker = L.marker([33.89621114574323, 48.750954837035195], {
        title: "89621114574323",
        alt: "The Big I",
        draggable: true
    })
    .addTo(map)
    .on('dragend', function() {
        var coord = String(myMarker.getLatLng()).split(',');
        console.log(coord);
        var lat = coord[0].split('(');
        var lng = coord[1].split(')');
        console.log(lng);
        console.log(lat);
        document.getElementById("latitude").value = lat[1];
        document.getElementById("longitude").value = lng[0];

        myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
    });
</script>


<script>
$('document').ready(function() {
    $("#upload_img").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
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
<script>
$('document').ready(function() {
    $("#upload_img_4").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_4').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_5").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_5').attr('src', e.target.result);
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

<script>

<?php include_once(APPPATH . 'views/_layout/site/footer_after.php'); ?>