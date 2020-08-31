<?php include_once (APPPATH.'views/_layout/site/header.php');?>
    
    
    
    
    
    
     
    
    
    
    
    

    <!-- column-right -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_3f51b5 p0">
            فرم پنل رویدادها
        </div>

       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all">

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head_title ">
               <span>
                   ثبت فرم پنل رویداد
               </span>
           </div>


           <form action="" method="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">


               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">کد کاربری</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title  p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_nam_neshan" class="p0">برگزار کننده / برگزار کنندگان</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in f_r">
                       <input id="sefaresh_nam_neshan" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>

               
               
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                     <span class="f_r p0"></span>
                     <label for="upload_img" class="p0">لوگو</label>
                     <span class="f_l p0"></span>
                 </div>
                   <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                       <li class="">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_4">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                        </div>
                       </li>
                       <li class="">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_40">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_40" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                        </div>
                       </li>
                   </ul>
               </div>

               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  f_r fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_makan" class="p0">مکان آگهی</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in select">
                       <select id="sefaresh_makan" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                           <option value="none" selected disabled hidden style="color: #dcdcdc">انتخاب شهر</option>
                           <option value="1">نهاوند</option>
                           <option value="2">ملایر</option>
                           <option value="3">کوهانی</option>
                           <option value="4">جهان آباد</option>
                       </select>
                   </div>
               </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">عنوان رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">توضیحات رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_title">
                   زمان رویداد
               </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">شروع</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">پایان</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               
               

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r fild">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                       <div class="t_align fild_title margin_title p0">
                           <span class="f_r p0"></span>
                           <label for="tozihat_text" class="p0">نوع رویداد</label>
                           <span class="f_l p0"></span>
                       </div>
                       <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>کنفرانس </span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>همایش</span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>سمینار</span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>نمایشگاه</span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>آموزشی </span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-2 col-md-3 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>افتتاحیه </span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                       </ul>
                   </div>
               </div>
               
               
               
               
               

               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                       <div class="t_align fild_title margin_title p0">
                           <span class="f_r p0"></span>
                           <label for="tozihat_text" class="p0">نحوه برگزاری</label>
                           <span class="f_l p0"></span>
                       </div>
                       <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                           <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>آنلاین </span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>حضوری</span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                       </ul>
                   </div>
               </div>
               
               

               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 f_r fild">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild">
                       <div class="t_align fild_title margin_title p0">
                           <span class="f_r p0"></span>
                           <label for="tozihat_text" class="p0">سطح برگزاری</label>
                           <span class="f_l p0"></span>
                       </div>
                       <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in niazmandi_radio ">
                           <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>عمومی </span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                           <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p0">
                               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 radio_label p0">
                                   <span>تخصصی</span>
                                   <input type="checkbox" name="">
                                   <span class="checkmark"></span>
                               </label>
                           </li>
                       </ul>
                   </div>
               </div>
               
               
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r fild">
                <div class="t_align fild_title p0">
                    <span class="f_r p0"></span>
                    <label for="sefaresh_cod_karbari" class="p0">ظرفیت رویداد</label>
                    <span class="f_l p0"></span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                    <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                </div>
            </div>
            
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">تخصصی (شرکت کنندگان)</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">شرایط شرکت کنندگان</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               
               

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_title">
                   آگهی ویژه شش تصویر با درج لینک
                   <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       حداکثر حجم هر تصویر 10240 کیلوبایت میباشد
                   </span><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       شما می توانید از قسمت پنل کاربری سفارش بنر بدهید
                   </span>
               </div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_r clear fild">
                   
                <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_411">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_411" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_422">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_422" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_433">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_433" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_444">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_444" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_455">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_455" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                    <li class="">
                        
                 <div class="f_r img_panel_2 p0">
                     <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_466">
                     <div class="f_r img_panel_input_2">
                         <img src="<?=base_url('')?>assets/site/img/camera.svg">
                         <input id="upload_img_466" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                 </div>
                    </li>
                </ul>
               </div>
               
               
               
               


               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                <div class="t_align fild_title p0">
                     <span class="f_r p0"></span>
                     <label for="upload_img" class="p0">آپلود پوستر</label>
                     <span class="f_l p0"></span>
                 </div>
                   <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                       <li class="">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_477">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_477" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                        </div>
                       </li>
                       
                   </ul>
               </div>
               
               


               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                        <span class="f_r p0"></span>
                        <label for="upload_img" class="p0">آپلود کلیپ رویداد</label>
                        <span class="f_l p0"></span>
                    </div>
                   <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in img_place ">
                       <li class="">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 f_r img_panel_2 p0">
                            <img src="<?=base_url('')?>assets/site/img/logo.png" id="imgshow_47">
                            <div class="f_r img_panel_input_2">
                                <img src="<?=base_url('')?>assets/site/img/camera.svg">
                                <input id="upload_img_47" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u_i c_btn workout_btn " type="file" multiple=""></div>
                        </div>
                       </li>
                       
                   </ul>
               </div>
               
               
               
               
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">لینک</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">اعلام هزینه رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">آدرس سایت رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">آدرس ایمیل رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">آدرس شبکه های اجتماعی رویداد</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 f_r  fild">
                   <div class="t_align fild_title p0">
                       <span class="f_r p0"></span>
                       <label for="sefaresh_cod_karbari" class="p0">آدرس محل برگزاری</label>
                       <span class="f_l p0"></span>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild_in">
                       <input id="sefaresh_cod_karbari" type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                   </div>
               </div>
               
              

               <button class="col-lg-6 col-md-12 col-sm-12 col-xs-12 f_r clear main_button" type="" href="" >
                   تعیین موقعیت روی نقشه
               </button>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild f_r clear select_map">
                   <!--Google map-->
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map" id="map_koli" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
               </div>

               
               
               
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tavajoh">
               <div class="title_tavajoh ">
                   توجه
               </div>
               <p>
                   شما میتوانید پنل شغلی عادی خود را با پرداخت هزینه ای بسیار مناسب به ویژه تبدیل کنید و از تمام امکانات سایت استفاده کنید

               </p>
           </div>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fild form_submit_div">
                        <button type="submit" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form_submit" >
                   ثبت رویداد
                        </button>
                </div>




           </form>

       </div>




    </div>









</div>
    
    
    
     
    
    
    
    
      
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
 
<script >
    $('document').ready(function () {
        $("#upload_img_4").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_4').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
        $("#upload_img_40").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_40').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>