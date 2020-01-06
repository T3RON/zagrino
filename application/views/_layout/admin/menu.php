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
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-edit"></i><span>باشگاه ستارگان</span>
                    <span class="pull-left-container"><i class="fa fa-angle-right pull-left"></i></span>
                </a>
                <ul class="treeview-menu" style="display: block;">
                    <li><a href="<?php echo base_url('People')?>">
                            <i class="fa fa-circle-o"></i>اعضا باشگاه
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT people_id FROM people ");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
                        </a></li>









                    <li><a href="<?php echo base_url('Shobe')?>"><i class="fa fa-circle-o"></i>شعبه
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'tablobargh'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Sans')?>"><i class="fa fa-circle-o"></i>سانس
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'telephone'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a> </li>
                    <li><a href="<?php echo base_url('Jalase')?>"><i class="fa fa-circle-o"></i>جلسات
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'jackbarghi'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Introduction')?>"><i class="fa fa-circle-o"></i>معرفی باشگاه
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'security'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Rules')?>"><i class="fa fa-circle-o"></i>قوانین باشگاه
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'camera'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('News')?>"><i class="fa fa-circle-o"></i>اخبار باشگاه
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'wiring'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Good_to_know')?>"><i class="fa fa-circle-o"></i>خوب است بدانید
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'socket'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                            --><?php //} ?>
            </span>
                        </a></li>

                    <li><a href="<?php echo base_url('Article')?>"><i class="fa fa-circle-o"></i>مقالات
<!--                            --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'socket'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--                --><?php //} ?>
            </span>
                        </a></li>
					<li><a href="<?php echo base_url('Jalase_images')?>"><i class="fa fa-circle-o"></i>تصاوير جلسات
<!--
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Contact')?>"><i class="fa fa-circle-o"></i>ارتباط با ما
                           --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'cooler'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--     --><?php //} ?>
            </span>
                        </a>
<!--
            </span>
                        </a></li>
                    <li><a href="<?php echo base_url('Contact')?>"><i class="fa fa-circle-o"></i>ارتباط با ما
                           --><?php
//                            $count_request = $this->db->query("SELECT state_id FROM tbl_service WHERE state_id = 2 and service_tag = 'cooler'");
//                            if ($count_request->num_rows() != 0) { ?>
<!---->
<!--                                <span class="pull-left-container">-->
<!--                        <small class="label pull-left bg-red">--><?php //echo $count_request->num_rows(); ?><!--</small>-->
<!--                    </span>-->
<!---->
<!--     --><?php //} ?>
            </span>
                        </a></li>
					<li><a href="<?php echo base_url('Survey')?>"><i class="fa fa-circle-o"></i>نظرسنجي

            </span>
                        </a></li>
					<li>
						<a href="<?php echo base_url('Hazine')?>"><i class="fa fa-circle-o"></i>هزينه</span>

                        </a></li>

					<li><a href="<?php echo base_url('Rate')?>"><i class="fa fa-circle-o"></i>امتياز

            </span>
                        </a></li>
					<li><a href="<?php echo base_url('Angizeshi')?>"><i class="fa fa-circle-o"></i>انگيزشي

            </span>
                        </a></li>

                </ul>
            </li>




            <li><a href="<?php echo base_url('Morabi')?>">
                    <i class="fa fa-users"></i> <span>مربیان</span></a></li>

            <li>
			<li><a href="<?php echo base_url('Contact_us')?>">
                    <i class="fa fa-users"></i> <span>راه های ارتباطی</span></a></li>

            <li>
                <a href="<?php echo base_url('Main_slider')?>">
                    <i class="fa fa-table"></i> <span>اسلایدر برنامه</span>
                </a>
            </li>



            <li class="header">دیگر قسمت ها</li>
            <li><a href="<?php echo base_url('Settings')?>"><i class="fa fa-circle-o text-green"></i> <span>تنظیمات</span></a></li>
            <li><a href="<?php echo base_url('Auth/logout')?>"><i class="fa fa-circle-o text-yellow"></i> <span>خروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
