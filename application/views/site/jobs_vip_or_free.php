<?php include_once (APPPATH.'views/_layout/site/header.php'); ?>
    
    
    
    
    
    


    
    
    
    
    
    
    


    <!-- BODY -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section_head niazmandiha_form p0 ">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 outer bg_e91e63 p0">
        انتخاب نوع پنل شغلي درخواستي
        </div>
        <a href="<?= base_url('site/work/BankMashaghelRaiganForm'); ?>">VIP</a>
        <a href="<?= base_url('site/work/BankMashaghelVizheForm'); ?>">Free</a>


    </div>



</div>
    
    
    
    
    
    
    
    
    
  
    
    
<?php include_once (APPPATH.'views/_layout/site/footer.php'); ?>

<!--    Script For This Page     -->
    
<script >
    $('document').ready(function () {
        $("#upload_img_60").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_60').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
        $("#upload_img_61").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_61').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
        $("#upload_img_62").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_62').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
        $("#upload_img_63").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_63').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
    
    
<script >
    $('document').ready(function () {
        $("#upload_img_611").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_611').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
        $("#upload_img_620").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow_620').attr('src', e.target.result);
                    $('#imgshow_622').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
<script >
    $('document').ready(function () {
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
<script >
  function N_1()  {
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
<script >
  function N_2()  {
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
<script >
  function N_3()  {
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
<script >
  function N_4()  {
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

    
    
  
    

    
<?php include_once (APPPATH.'views/_layout/site/footer_after.php'); ?>