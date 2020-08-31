<!-- right side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><?php echo $timeStamp ?></li>
            <li>
                <a href="<?php echo base_url('Dashbord')?>">
                    <i style="color: #55bcf8;" class="fa fa-dashboard"></i><span style="color: #55bcf8;">داشبــــرد سامانه</span>
                </a>
            </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>بانك مشاغل</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/Jobs'); ?>"><i class="fa fa-circle-o"></i>ليست مشاغل</a></li>
            <li><a href="<?= base_url('admin/Jobsv'); ?>"><i class="fa fa-circle-o"></i>مشاغل ويژه</a></li>
            <li><a href="<?= base_url('admin/Jobsf'); ?>"><i class="fa fa-circle-o"></i>مشاغل معلق</a></li>
            <li><a href="<?= base_url('admin/Jcate'); ?>"><i class="fa fa-circle-o"></i>گروه بندي مشاغل</a></li>
            <li><a href="<?= base_url('admin/Jscate'); ?>"><i class="fa fa-circle-o"></i>زير گروه بندي مشاغل</a></li>
            <li><a href="<?= base_url('admin/Jobs_service'); ?>"><i class="fa fa-circle-o"></i>تعريف امكانات و خدمات</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>تخفيفات</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>ليست تخفيفات</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>تخفيفات ويژه</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> تخفيفات معمولي</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>كد هاي فروش رفته</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>كد هاي استفاده شده</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>كاربران</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>ليست كاربران</a></li>
            <li class="active"><a href="index.html">
            <i class="fa fa-circle-o"></i>كاربران ويژه
            <span class="label label-primary pull-left">4</span>
            </a>
              
            </li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i>كاربران معمولي</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i>كاربران معلق</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>نيازمندي ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> بخش نيازمندي
                  <span class="pull-left-container">
                      <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url('admin/Agahi'); ?>"><i class="fa fa-circle-o"></i>ليست نيازمندي </a></li>
                  <li><a href="<?= base_url('admin/Acate'); ?>"><i class="fa fa-circle-o"></i>گروه </a></li>
                  <li><a href="<?= base_url('admin/Ascate'); ?>"><i class="fa fa-circle-o"></i>زير گروه</a></li>
                  <li><a href="<?= base_url('admin/Atarefe'); ?>"><i class="fa fa-circle-o"></i>تعرفه </a></li>
                  <li><a href="<?= base_url('admin/Ashow_time'); ?>"><i class="fa fa-circle-o"></i>زمان نمايش</a></li>
                  <li><a href="<?= base_url('admin/Acond_tag'); ?>"><i class="fa fa-circle-o"></i>برچسب شرايط</a></li>
                  <li><a href="<?= base_url('admin/Atag'); ?>"><i class="fa fa-circle-o"></i>برچسب</a></li>
                  <li><a href="<?= base_url('admin/Akala_state'); ?>"><i class="fa fa-circle-o"></i>وضعيت كالا</a></li>
               
                </ul>
              </li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> نيازمندي املاك
                  <span class="pull-left-container">
                      <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/Amlak'); ?>"><i class="fa fa-circle-o"></i>ليست املاك </a></li>
                <li><a href="<?= base_url('admin/Mcate'); ?>"><i class="fa fa-circle-o"></i>گروه </a></li>
                  <li><a href="<?= base_url('admin/Mscate'); ?>"><i class="fa fa-circle-o"></i>زير گروه</a></li>
                  <li><a href="<?= base_url('admin/Mtag'); ?>"><i class="fa fa-circle-o"></i>برچسب</a></li>
                  <li><a href="<?= base_url('admin/Mctag'); ?>"><i class="fa fa-circle-o"></i>برچسب شرايط</a></li>
                  
                </ul>
              </li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> آگهي هاي وسايل نقليه
                  <span class="pull-left-container">
                      <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/Car'); ?>"><i class="fa fa-circle-o"></i>ليست وسايل نقليه </a></li>
                <li><a href="<?= base_url('admin/Ccate'); ?>"><i class="fa fa-circle-o"></i>گروه </a></li>
                  <li><a href="<?= base_url('admin/Cscate'); ?>"><i class="fa fa-circle-o"></i>زير گروه</a></li>
                  <li><a href="<?= base_url('admin/Cctag'); ?>"><i class="fa fa-circle-o"></i>برچسب شرايط</a></li>
                  <li><a href="<?= base_url('admin/Ctag'); ?>"><i class="fa fa-circle-o"></i>برچسب</a></li>
                  <li><a href="<?= base_url('admin/Ctype'); ?>"><i class="fa fa-circle-o"></i>نوع وسيله</a></li>
                  <li><a href="<?= base_url('admin/Cstate'); ?>"><i class="fa fa-circle-o"></i>وضعيت وسيله</a></li>
                  <li><a href="<?= base_url('admin/Csokht'); ?>"><i class="fa fa-circle-o"></i>نوع سوخت</a></li>
                  <li><a href="<?= base_url('admin/Cbody'); ?>"><i class="fa fa-circle-o"></i>نوع بدنه</a></li>
                </ul>
              </li>
            </ul>
    
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>رويداد ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/Events'); ?>"><i class="fa fa-circle-o"></i> ليست رويداد ها</a></li>
            <li><a href="<?= base_url('admin/Eventsv'); ?>"><i class="fa fa-circle-o"></i>ويژه</a></li>
            <li><a href="<?= base_url('admin/Eventsn'); ?>"><i class="fa fa-circle-o"></i> معمولي</a></li>
            <li><a href="<?= base_url('admin/Eventsf'); ?>"><i class="fa fa-circle-o"></i> معلق</a></li>
            <li><a href="<?= base_url('admin/Eventslvl'); ?>"><i class="fa fa-circle-o"></i> سطح رويداد</a></li>
            <li><a href="<?= base_url('admin/Eventsrun'); ?>"><i class="fa fa-circle-o"></i> نحوه برگزاري رويداد</a></li>
            <li><a href="<?= base_url('admin/Eventstype'); ?>"><i class="fa fa-circle-o"></i> نوع رويداد</a></li>
        
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-city"></i> <span>گردشگري</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/Gardeshgary_jazebe'); ?>"><i class="fa fa-circle-o"></i>جاذبه ها</a></li>
            <li><a href="<?= base_url('admin/Eghamatgah'); ?>"><i class="fa fa-circle-o"></i>اقامتگاه ها</a></li>
            <li><a href="<?= base_url('admin/Tour'); ?>"><i class="fa fa-circle-o"></i> تور ها</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>بازارچه</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> جدول ساده</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> جدول داده</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>مديريت مالي</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>درآمد سايت</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>تعداد كد هاي فروخته شده</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>ایمیل ها</span>
            <span class="pull-left-container">
              <small class="label pull-left bg-yellow">۱۲</small>
              <small class="label pull-left bg-green">۱۶</small>
              <small class="label pull-left bg-red">۵</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>منو ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/Menu'); ?>"><i class="fa fa-circle-o"></i> بالاي سايت</a></li>
            <li><a href="<?= base_url('admin/Smenu'); ?>"><i class="fa fa-circle-o"></i> زير اسلايدر سايت</a></li>
            <li><a href="<?= base_url('admin/Fmenu'); ?>"><i class="fa fa-circle-o"></i> پايين سايت</a></li>
    
          </ul>
        </li>
        <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>تنظيمات سايت</span>
          <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url('admin/Slider'); ?>"><i class="fa fa-circle-o"></i> اسلايدر صفحه نخست</a></li>
          <li><a href="<?= base_url('admin/Text'); ?>"><i class="fa fa-circle-o"></i>متن متحرك </a></li>
          <li><a href="<?= base_url('admin/Site'); ?>"><i class="fa fa-circle-o"></i> سايت</a></li>
          <li><a href="<?= base_url('admin/State'); ?>"><i class="fa fa-circle-o"></i> وضعيت ها</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> تبليغات سايت
              <span class="pull-left-container">
                  <i class="fa fa-angle-right pull-left"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('admin/Ads'); ?>"><i class="fa fa-circle-o"></i>افزودن تبليغ</a></li>
              <li><a href="<?= base_url('admin/Positon'); ?>"><i class="fa fa-circle-o"></i>تعيين موقعيت</a></li>
              <li><a href="<?= base_url('admin/Adsa'); ?>"><i class="fa fa-circle-o"></i>تبليغات فعال</a></li>
              <li><a href="<?= base_url('admin/Adsf'); ?>"><i class="fa fa-circle-o"></i>تبليغات منقضي</a></li>
   
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> مديريت شهر ها
              <span class="pull-left-container">
                  <i class="fa fa-angle-right pull-left"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('admin/Ostan'); ?>"><i class="fa fa-circle-o"></i>استان</a></li>
              <li><a href="<?= base_url('admin/City'); ?>"><i class="fa fa-circle-o"></i>شهرستان</a></li>
   
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> سطح اول</a></li>
        </ul>
      </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>مستندات</span></a></li>
        <li class="header">برچسب ها</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>مهم</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>هشدار</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>اطلاعات</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
            <small><?= $des; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/Dashbord'); ?>"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active"><?= $title; ?></li>
        </ol>
    </section>