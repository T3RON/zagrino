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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="مديريت" aria-describedby="emailHelp"
                            value="<?= $jobs_value->account_fn; ?> <?= $jobs_value->account_ln; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="عنوان شغل" aria-describedby="emailHelp"
                            value="<?= $jobs_value->jobs_title; ?>">
                    </div>

                    

                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="شعار تبليغاتي" aria-describedby="emailHelp"
                        value="<?= $jobs_value->jobs_shobe; ?>">
                    </div>

                    <div class="form-group">
                    <textarea class="form-control" placeholder="توضيح در مورد شغل <?= $jobs_value->jobs_title; ?>" id="exampleFormControlTextarea1" rows="3" value="<?= $jobs_value->jobs_content; ?>"></textarea>

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
                        <select class="form-control" id="city_id">
                            <option>شهرستان ...</option>
                
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="كد پستي" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $jobs_value->account_codeposti; ?>">
                    </div>

                   
                    <div class="form-group">
                        <lable style="height: 49px;float:left;"> آپلود تصوير پروفايل   <img src="<?=base_url('')?>assets/uploads/img/<?= $accounts_value->account_avatar; ?>" whith="30" height="30"></lable>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="سن (اختياري)"  id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="<?= $jobs_value->account_age; ?>">
                    </div>
                   

                    
                  

                </div>

            

                <?php } ?>

                </div>

            </div>


        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>


<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>

<script type="text/javascript">
        $(document).ready(function(){
 
            $('#ostan_id').change(function(){ 
               var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('site/panel/Jobs/get_cities');?>",
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