<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>



<!-- BODY -->

<div id="pos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_e91e63 p0">
        انتخاب نوع خدمت درخواستي
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hint">
        <div class="title ">
            راهنمای ثبت رویداد
        </div>
        <?php foreach($site as $site_value) { ?>
        <?= $site_value->help_agahi; ?>
        <?php } ?>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m_15 f_l p0">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 m_15 f_l">
            <div class="panel panel-default">
                <div style="text-align:center;" class="panel-heading">رویداد</div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-12">
                        <a href="" class="thumbnail">
                            <img src="<?= base_url(''); ?>/assets/uploads/img/tourism.png" alt="...">
                        </a>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('site/Roidad/Roydad/vip'); ?>">
                                    <button type="button" class="btn btn-danger">رویداد ویژه</button>
                                </a>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('site/Roidad/Roydad/free'); ?>">
                                    <button type="button" class="btn btn-info"> رویداد معمولی</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>






    </div>


</div>



</div>












<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->

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




<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>