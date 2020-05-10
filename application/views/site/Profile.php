<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                    پروفايل كاربري
                    <div class="bottom"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_15 f_l">

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="ايميل">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="موبايل">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="تلفن ثابت">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="كد ملي">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="city_id">
                            <option>شهرستان ...</option>
                
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="كد پستي">
                    </div>

                   
                    <div class="form-group">
                        <lable style="height: 49px;float:left;">آپلود تصوير پروفايل</lable>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="سن (اختياري)">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="تاريخ عضويت شما : " readonly>

                    </div>

                    
                  

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_15 f_l">

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="نام">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="نام خانوادگي">
                    </div>

            
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="كد ملي">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="آدرس">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="ostan_id">
                            <option>استان ...</option>
                            <?php foreach ($ostan as $ostan_value) { ?>
                                <option value="<?= $ostan_value->ostan_id; ?>"><?= $ostan_value->ostan_title; ?></option>

                            <?php } ?>
                
                        </select>
                    </div>


                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>جنسيت ...</option>
                            <option>مرد</option>
                            <option>زن</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="درباره خودم (اختياري)">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="وضعيت كاريري شما : " readonly>
                    </div>
                    
                   

                    <button type="button" class="btn btn-primary">بروزرساني</button>
                    <div class="btn err">dsdsdsdsd</div>
                    <div class="btn succ">dsdsdsdsd</div>
                </div>

                




            </div>
            

        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>


<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>