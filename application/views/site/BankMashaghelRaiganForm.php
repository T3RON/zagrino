<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>



<!-- BODY -->

<div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 " style="direction: rtl;">
    <div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_e91e63 p0">
        فرم پنل مشاغل
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>





        <form action="<?= base_url('site/work/BankMashaghelRaiganForm/register'); ?>" method="post"
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0" enctype='multipart/form-data'>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r p0">

                <!------------------------------------------------------------------  تکمیل فرم سفارش آگهی ------------>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">عنوان شغل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_title" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">مدیریت</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="manager" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">شعار برند و کسب و کار</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_shoar" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_makan" class="p0">انتخاب دسته بندی شغل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select id="jobs_cate_id" name="jobs_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            <?php foreach($jobs_cate as $jobs_cate_value) { ?>
                            <option value="<?= $jobs_cate_value->jobs_cate_id; ?>"><?= $jobs_cate_value->jobs_cate_title; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_makan" class="p0">انتخاب زير دسته بندی شغل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                        <select name="jobs_sub_cate_id" id="jobs_sub_cate_id" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                      
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear f_r fild">
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">نام مرکز خرید</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="shobe_name" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>





                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 set f_r p0">


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                            <div class="t_align fild_title  p0">
                                <span class="f_r p0"></span>
                                <label for="sefaresh_nam_neshan_2" class="p0">شماره نمايندگي </label>
                                <span class="f_l p0"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                                <input name="namayandegi_number" id="sefaresh_nam_neshan_2" type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                            <div class="t_align fild_title  p0">
                                <span class="f_r p0"></span>
                                <label for="sefaresh_nam_neshan_2" class="p0">عنوان شعبه </label>
                                <span class="f_l p0"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                                <input name="jobs_shobe" id="sefaresh_nam_neshan_2" type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                            </div>
                        </div>




                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 set f_r p0">


                    </div>


                </div>




                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title   p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">توضیحات کلی کسب و کار </label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_content" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>




                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_midle_title">
                    <div class="form_midle_title_in">
                        <span>
                            اطلاعات تماس
                        </span>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_11" class="p0">موبایل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_mobile" id="fild_in_11" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_15" class="p0">تلفن ثابت</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_tell" id="fild_in_15" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_17" class="p0">ایمیل</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_email" id="fild_in_17" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input p0">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="fild_in_17" class="p0">کدپستی</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                        <input name="jobs_code_posti" id="fild_in_17" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input p0">
                    </div>
                </div>



            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_l left p0">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                    <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="upload_img" class="p0">آپلود چهار عکس مربوط به کسب و کار شما</label>
                        <span class="f_l p0"></span>
                    </div>
                    <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place  ">
                        <li class="c">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/placeholder.png" id="imgshow_60">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                    <input name="img1" id="upload_img_60"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/placeholder.png" id="imgshow_61">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                    <input name="img2" id="upload_img_61"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/placeholder.png" id="imgshow_62">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                    <input name="img3" id="upload_img_62"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                        <li class="">

                            <div class="img_panel_2 p0">
                                <img src="<?=base_url('')?>assets/site/img/placeholder.png" id="imgshow_63">
                                <div class="f_r img_panel_input_2">
                                    <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                    <input name="img4" id="upload_img_63"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn "
                                        type="file" multiple=""></div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r p0">

                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
                            <label for="social_network_1" class="label_icon f_r p0">
                                <img src="<?=base_url('')?>assets/site/svg/telegram.svg" alt="">
                            </label>
                            <input name="jobs_telegram" id="social_network_1" type="text"
                                class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
                        </div>
                    </li>
                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icon_input p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in p0">
                            <label for="social_network_2" class="label_icon f_r p0">
                                <img src="<?=base_url('')?>assets/site/svg/iconfinder_Instagram.svg" alt="">
                            </label>
                            <input name="jobs_instagram" id="social_network_2" type="text"
                                class="col-lg-11 col-md-10 col-sm-10 col-xs-10 p0">
                        </div>
                    </li>

                </ul>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                    <div class="t_align fild_title  p0">
                        <span class="f_r p0"></span>
                        <label for="sefaresh_nam_neshan" class="p0">آدرس</label>
                        <span class="f_l p0"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                        <input name="jobs_address" id="sefaresh_nam_neshan" type="text"
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                    </div>
                </div>


                <input name="jobs_latitude" id="latitude" type="hidden">
                <input name="jobs_longitude" id="longitude" type="hidden">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_title">
                    تعیین موقعیت روی نقشه
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_r select_map">
                    <!--Google map-->
                    <div id="map" class="col-lg-12 col-md-12 col-sm-12 col-xs-12  map" id="map_koli"
                        style="position: relative; overflow: hidden;">
                        <div
                            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-err-container">
                                <div class="gm-err-content">
                                    <div class="gm-err-icon">
										<div style="height: 200px;" id="map"></div>
                                    </div>
                                    <div class="gm-err-title">Oops! Something went wrong.</div>
                                    <div class="gm-err-message">This page didn't load Google Maps correctly. See the
                                        JavaScript console for technical details.</div>
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
                        شما میتوانید پنل شغلی عادی خود را با پرداخت هزینه ای بسیار مناسب به ویژه تبدیل کنید و از تمام
                        <a href="">امکانات</a>
                        سایت استفاده کنید

                    </p>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b_m_v p0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 under_poster p0">
                            <a href="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sabt f_r ">
                                    <i class="icon-plus f_r"></i>
                                    ثبت پنل ویژه
                                </div>
                            </a>

                        </div>
                    </div>

                </div>


            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild form_submit_div">
                <button type="submit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_submit">
                    ثبت
                </button>
            </div>


        </form>




    </div>




</div>



</div>







<script type="text/javascript">

	var options = {
		center: [33.89621114574323, 48.750954837035195],
		zoom: 18
	}

	var map = L.map('map', options);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'})
			.addTo(map);

	// map.on('click',
	// 	function(e){
	// 		//var coord = e.latlng.toString().split(',');
	// 		//var lat = coord[0].split('(');
	// 		//var lng = coord[1].split(')');
	// 		//alert("You clicked the map at LAT: " + lat[1] + " and LONG: " + lng[0]);
	// 		L.marker(e.latlng).addTo(map);
	// 	});

	var myMarker = L.marker([33.89621114574323, 48.750954837035195], {title: "89621114574323", alt: "The Big I", draggable: true})
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





<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>



<!--    Script For This Page     -->


<!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->


<script>
$('document').ready(function() {
    $("#upload_img_60").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_60').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_61").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_61').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_62").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_62').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_63").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_63').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>


<script>
$('document').ready(function() {
    $("#upload_img_611").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_611').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    $("#upload_img_620").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgshow_620').attr('src', e.target.result);
                $('#imgshow_622').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
<script>
$('document').ready(function() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = false;
    document.getElementById('sefaresh_nam_neshan_2').disabled = false;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
});
</script>
<script>
function N_1() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = false;
    document.getElementById('sefaresh_nam_neshan_2').disabled = false;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>
<script>
function N_2() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = false;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>
<script>
function N_3() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = false;
    document.getElementById('sefaresh_nam_neshan_5').disabled = false;
    document.getElementById('sefaresh_nam_neshan_6').disabled = false;
    document.getElementById('sefaresh_nam_neshan_7').disabled = false;
    document.getElementById('sefaresh_nam_neshan_8').disabled = false;
}
</script>
<script>
function N_4() {
    document.getElementById('sefaresh_nam_neshan_1').disabled = true;
    document.getElementById('sefaresh_nam_neshan_2').disabled = true;
    document.getElementById('sefaresh_nam_neshan_3').disabled = true;
    document.getElementById('sefaresh_nam_neshan_4').disabled = true;
    document.getElementById('sefaresh_nam_neshan_5').disabled = true;
    document.getElementById('sefaresh_nam_neshan_6').disabled = true;
    document.getElementById('sefaresh_nam_neshan_7').disabled = true;
    document.getElementById('sefaresh_nam_neshan_8').disabled = true;
}
</script>

<script type="text/javascript">
$(document).ready(function() {
    $(document).scrollTop($("#pos").offset().top);
});
</script>


<script type="text/javascript">
        $(document).ready(function(){
 
            $('#jobs_cate_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('site/work/BankMashaghelRaiganForm/get_sub_cate');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].jobs_sub_cate_id+'>'+data[i].jobs_sub_cate_title+'</option>';
                        }
                        $('#jobs_sub_cate_id').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>


<script type="text/javascript">
        $(document).ready(function(){
 
            $('#ostan_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('site/work/BankMashaghelRaiganForm/get_city');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].city_id+'>'+data[i].city_title+'</option>';
                        }
                        $('#city_id').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>



<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>
