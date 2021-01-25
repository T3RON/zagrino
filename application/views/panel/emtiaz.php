<?php include_once (APPPATH.'views/_layout/site/header_panel.php'); ?>






<div id="pos" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_panel f_l p0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  t_t_clip p0">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 niazmandi_ghavanin">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ghavanin_2">
                   امتیاز شما
                    <div class="bottom"></div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           امتیاز کاربری شما : <span style="color: green;font-size: 16px;"><?= $rate_user; ?></span> می باشد
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div style="color:red" class="panel-body">
                           با ثبت هر آگهی و خدمات ویژه در سامانه امتیاز کسب کنید و در قرعه کشی های ما با بالابردن امتیاز خود شانس برنده شدن خود را افزایش دهید
                        </div>
                    </div>
                </div>


            </div>


        </div>


    </div>

</div>

</div>

</div>







<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_both"></div>

<script type="text/javascript">
$(document).ready(function() {
    $(document).scrollTop($("#pos").offset().top);
});
</script>
<?php include_once (APPPATH.'views/_layout/site/footer_panel.php'); ?>