<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                    پروفايل كاربري
                    <div class="bottom"></div>
                </div>
                <?php foreach ($accounts as $accounts_value) { ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_15 f_l">

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ايميل" aria-describedby="emailHelp"
                            value="<?= $accounts_value->account_email; ?>">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="موبايل" aria-describedby="emailHelp"
                            value="<?= $accounts_value->account_mobile; ?>">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="تلفن ثابت" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_tell; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="كد ملي" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_codemeli; ?>">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="city_id">
                            <option>شهرستان ...</option>
                
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="كد پستي" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_codeposti; ?>">
                    </div>

                   
                    <div class="form-group">
                        <lable style="height: 49px;float:left;"> آپلود تصوير پروفايل   <img src="<?=base_url('')?>assets/uploads/img/<?= $accounts_value->account_avatar; ?>" whith="30" height="30"></lable>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="سن (اختياري)"  id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_age; ?>">
                    </div>
                   

                    
                  

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m_15 f_l">

                    <div class="form-group">
                        <input type="text" placeholder="نام" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_fn; ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="نام خانوادگي" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_ln; ?>">
                    </div>

    

                    <div class="form-group">
                        <input type="email" placeholder="آدرس" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $accounts_value->account_address; ?>">
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
                        <select value="<?= $accounts_value->account_sex; ?>" class="form-control" id="exampleFormControlSelect1">
                            <option>جنسيت ...</option>
                            <option>مرد</option>
                            <option>زن</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  value="<?= $accounts_value->account_about; ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="درباره خودم (اختياري)">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="وضعيت كاريري شما : <?= $accounts_value->state_id; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" value="تاريخ عضويت شما : <?= $accounts_value->register_date; ?>" readonly>

                    </div>

                    <button type="button" class="btn btn-primary">بروزرساني</button>
                    <div class="btn err">dsdsdsdsd</div>
                    <div class="btn succ">dsdsdsdsd</div>
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