<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>مستشفى قوى الأمن بمكة المكرمة</title>
   
    <!-- Site favicon -->
    <link rel="sfhm-touch-icon" sizes="180x180"
        href="<?php echo base_url(); ?>/assets/vendors/images/sfhm-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo base_url(); ?>/assets/vendors/images/sfhm-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo base_url(); ?>/assets/vendors/images/sfhm-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/assets/src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendors/styles/style.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="header-white sidebar-dark" data-new-gr-c-s-check-loaded="14.1117.0" data-gr-ext-installed="">
    <!-- echo header,rightsidebar,leftsidebar and loader -->
    <?php 
		echo view('deskapp/includes/_header');
		echo view('deskapp/includes/_sidebar');
	?>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
            <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Projects</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">المشاريع</li>
                                    <li class="breadcrumb-item active" aria-current="page">تعديل المشروع</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
<div class="right-sidebar">
  <div class="sidebar-title">
    <h3 class="weight-600 font-16 text-blue">
      Layout Settings
      <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
    </h3>
    <div class="close-sidebar" data-toggle="right-sidebar-close">
      <i class="icon-copy ion-close-round"></i>
    </div>
  </div>
  <div class="right-sidebar-body customscroll mCustomScrollbar _mCS_2 mCS_no_scrollbar"><div id="mCSB_2" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
    <div class="right-sidebar-body-content">
      <h4 class="weight-600 font-18 pb-10">Header Background</h4>
      <div class="sidebar-btn-group pb-30 mb-10">
        <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
        <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
      </div>
      <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
      <div class="sidebar-btn-group pb-30 mb-10">
        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
      </div>
<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
      <div class="sidebar-radio-group pb-10 mb-10">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
          <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
          <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
          <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
        </div>
      </div>

      <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
      <div class="sidebar-radio-group pb-30 mb-10">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
          <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
          <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
          <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
          <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
          <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
          <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
        </div>
      </div>
      <div class="reset-options pt-30 text-center">
        <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
      </div>
    </div>
  </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
</div><div class="left-side-bar">
    <div class="brand-logo">
      <a href="http://localhost/MS/deskapp/dashboard">
        <img src="http://localhost/MS/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
        <img src="http://localhost/MS/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll mCustomScrollbar _mCS_3"><div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
      <div class="sidebar-menu icon-style-2 icon-list-style-1">
        <ul id="accordion-menu">
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/dashboard">Dashboard style 1</a></li>
              <li><a href="http://localhost/MS/deskapp/dashboard/two">Dashboard style 2</a></li>
              <li><a href="http://localhost/MS/deskapp/dashboard/three">Dashboard style 3</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/forms/basic">Form Basic</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/advance">Advanced Components</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/wizard">Form Wizard</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/html5Editor">HTML5 Editor</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/pickers">Form Pickers</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/imageCropper">Image Cropper</a></li>
              <li><a href="http://localhost/MS/deskapp/forms/imageDropZone">Image Dropzone</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/tables/basic">Basic Tables</a></li>
              <li><a href="http://localhost/MS/deskapp/tables/datatable">DataTables</a></li>
            </ul>
          </li>
          <li>
            <a href="http://localhost/MS/deskapp/calendar" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/ui/buttons">Buttons</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/cards">Cards</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/cardsHover">Cards Hover</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/modals">Modals</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/tabs">Tabs</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/tooltip">Tooltip &amp; Popover</a></li>
              
              <li><a href="http://localhost/MS/deskapp/ui/sweetAlert">Sweet Alert</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/notification">Notification</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/timeline">Timeline</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/progressbar">Progressbar</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/typography">Typography</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/listgroup">List group</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/rangeSlider">Range slider</a></li>
              <li><a href="http://localhost/MS/deskapp/ui/carousel">Carousel</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/icons/fontawesome">FontAwesome Icons</a></li>
              <li><a href="http://localhost/MS/deskapp/icons/foundation">Foundation Icons</a></li>
              <li><a href="http://localhost/MS/deskapp/icons/ionicons">Ionicons Icons</a></li>
              <li><a href="http://localhost/MS/deskapp/icons/themify">Themify Icons</a></li>
              <li><a href="http://localhost/MS/deskapp/icons/custom">Custom Icons</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/charts/highchart">Highchart</a></li>
              <li><a href="http://localhost/MS/deskapp/charts/knobchart">jQuery Knob</a></li>
              <li><a href="http://localhost/MS/deskapp/charts/jvectormap">jvectormap</a></li>
              <li><a href="http://localhost/MS/deskapp/charts/apexcharts">Apexcharts</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/Additionalpages/videoplayer">Video Player</a></li>
              <li><a href="http://localhost/MS/deskapp/Additionalpages/login">Login</a></li>
              <li><a href="http://localhost/MS/deskapp/Additionalpages/forgot_password">Forgot Password</a></li>
              <li><a href="http://localhost/MS/deskapp/Additionalpages/reset_password">Reset Password</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/error/error_400">400</a></li>
              <li><a href="http://localhost/MS/deskapp/error/error_403">403</a></li>
              <li><a href="http://localhost/MS/deskapp/error/error_404">404</a></li>
              <li><a href="http://localhost/MS/deskapp/error/error_500">500</a></li>
              <li><a href="http://localhost/MS/deskapp/error/error_503">503</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/extrapages/blank">Blank</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/contact_directory">Contact Directory</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/blog">Blog</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/blog_detail">Blog Detail</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/product">Product</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/product_detail">Product Detail</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/faq">FAQ</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/profile">Profile</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/gallery">Gallery</a></li>
              <li><a href="http://localhost/MS/deskapp/extrapages/pricing">Pricing Tables</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
            </a>
            <ul class="submenu">
              <li><a href="javascript:;">Level 1</a></li>
              <li><a href="javascript:;">Level 1</a></li>
              <li><a href="javascript:;">Level 1</a></li>
              <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                  <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                </a>
                <ul class="submenu child">
                  <li><a href="javascript:;">Level 2</a></li>
                  <li><a href="javascript:;">Level 2</a></li>
                </ul>
              </li>
              <li><a href="javascript:;">Level 1</a></li>
              <li><a href="javascript:;">Level 1</a></li>
              <li><a href="javascript:;">Level 1</a></li>
            </ul>
          </li>
          <li>
            <a href="http://localhost/MS/deskapp/sitemap" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
            </a>
          </li>
          <li>
            <a href="http://localhost/MS/deskapp/chat" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
            </a>
          </li>
          <li>
            <a href="http://localhost/MS/deskapp/invoice" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <div class="sidebar-small-cap">Extra</div>
          </li>
          <li>
            <a href="javascript:;" class="dropdown-toggle" data-option="off">
              <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
            </a>
            <ul class="submenu">
              <li><a href="http://localhost/MS/deskapp/docs/introduction">Introduction</a></li>
              <li><a href="http://localhost/MS/deskapp/docs/getting_started">Getting Started</a></li>
              <li><a href="http://localhost/MS/deskapp/docs/color_settings">Color Settings</a></li>
              <li><a href="http://localhost/MS/deskapp/docs/third_party_plugins">Third Party Plugins</a></li>
            </ul>
          </li>
          <li>
            <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-paper-plane1"></span>
              <span class="mtext">Landing Page <img src="http://localhost/MS/assets/vendors/images/coming-soon.png" alt="" width="25" class="mCS_img_loaded"></span>
            </a>
          </li>
        </ul>
      </div>
    </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 707px; max-height: 862px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
  </div>
  <div class="mobile-menu-overlay"></div>
  <div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
        
      <div class="pd-20 card-box mb-30">
    <div class="clearfix">
    <h4 class="text-blue h4">تعديل المشروع</h4>
</div>
<div class="wizard-content">
<?php foreach ($projects as $project) {
        $id= $project['id_project'] ;
        } ?>
    <form method="post"  action="/MS/deskapp/ui/updateProject/<?=$id?>">
    <?= csrf_field() ?>
        <!-- Add a hidden input field to store the project ID -->
        <?php foreach ($projects as $project) { ?>
        <input type="hidden" name="project_id" value="<?= $project['id_project'] ?>">
        <?php } ?>
        <div class="content clearfix">
            <!-- Step 1: Project Details -->
            <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>اسم المشروع</label>
                            <input name="pro_name" type="text" class="form-control" value ="<?= $project['pro_name'] ?>"> 
                            <input   name="id_project" type="hidden" class="form-control" value ="<?= $project['id_project'] ?>">

      
=======
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">تعديل المشروع</h4>
                    </div>
                    <div class="wizard-content">
                        <?php foreach ($projects as $project) {
        $id= $project['id_project'] ;
        } ?>
                        <form method="post" action="/MS/deskapp/ui/updateProject/<?=$id?>">
                            <?= csrf_field() ?>
                            <!-- Add a hidden input field to store the project ID -->
                            <?php foreach ($projects as $project) { ?>
                            <input type="hidden" name="project_id" value="<?= $project['id_project'] ?>">
                            <?php } ?>
                            <div class="content clearfix">
                                <!-- Project info -->
                                <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0"
                                    class="body current" aria-hidden="false">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>اسم المشروع</label>
                                                <input name="pro_name" type="text" class="form-control"
                                                    value="<?= $project['pro_name'] ?>">
                                                <input name="id_project" type="hidden" class="form-control"
                                                    value="<?= $project['id_project'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>تفاصيل المشروع</label>
                                                <input name="details" type="text" class="form-control"
                                                    value="<?= $project['details'] ?>">
                                            </div>
                                        </div>
>>>>>>> c12054c078aae71602078d3ecc014618eb7d8292

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>اضافة اعضاء </label>
                                                <select name="selected_names" class="custom-select form-control">
                                                    <?php foreach ($users as $user) { ?>
                                                    <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="d_start">تاريخ البداية </label>
                                                <input name="d_start" type="date" id="d_start" class="form-control"
                                                    placeholder="Select Date" value="<?= $project['d_start'] ?>">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="d_end">تاريخ النهاية </label>
                                                <input name="d_end" type="date" id="d_end" class="form-control"
                                                    placeholder="Select Date" value="<?= $project['d_end'] ?>">
                                            </div>
                                        </div>

                                    </div>
                                </section>


                            </div>

                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="تحديث"
                                herf="http://localhost/MS/deskapp/ui/sweet-alert">
                        </form>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>اضافة اعضاء</label>
                            <select name="add_members" class="custom-select form-control selectpicker" multiple>
                                <?php foreach ($users as $user) { ?>
                                    <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="d_start">تاريخ البداية </label>
                            <input name="d_start" type="date" id="d_start" class="form-control" placeholder="Select Date" value ="<?= $project['d_start'] ?>">
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="d_end">تاريخ النهاية </label>
                            <input name="d_end" type="date" id="d_end" class="form-control" placeholder="Select Date"value ="<?= $project['d_end'] ?>">
                        </div>
                    </div>

                </div>
            </section>
            <!-- Step 2: Placeholder for the next step -->
            <section id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title :</label>
                                <input name="job_title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name :</label>
                                <input name="company_name" type="text" class="form-control">
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Job Description :</label>
                                <textarea name="job_description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                        <!-- Step 3 -->

                        <section id="steps-uid-1-p-2" role="tabpanel" aria-labelledby="steps-uid-1-h-2" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Interview For :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Interview Type :</label>
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Difficult</option>
                                            <option>Hard</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Interview Date :</label>
                                        <input type="text" class="form-control date-picker" placeholder="Select Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Interview Time :</label>
                                        <input class="form-control time-picker td-input" placeholder="Select time" type="text" readonly="">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 4 -->
            <section id="steps-uid-1-p-3" role="tabpanel" aria-labelledby="steps-uid-1-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Behaviour :</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confidance</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Result</label>
                                        <select class="form-control">
                                            <option>Select Result</option>
                                            <option>Selected</option>
                                            <option>Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label>Comments</label>
                                        <textarea class="form-control"></textarea>

                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
            
            <input class="btn btn-primary btn-lg btn-block" type="submit"  value="حفظ"  herf="http://localhost/MS/deskapp/ui/sweet-alert">
        </form>
=======

            </div>
            <!-- footer -->
            <?php echo view('deskapp/includes/_footer'); ?>
        </div>
>>>>>>> c12054c078aae71602078d3ecc014618eb7d8292
    </div>
    </div>
    <!-- js -->
    <script src="http://localhost/MS/assets/vendors/scripts/core.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/script.min.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/process.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/layout-settings.js"></script>

</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
<div class="abineContentPanel"
    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent !important; margin: 0px !important; padding: 0px !important; display: none; opacity: 1 !important; z-index: 2147483647 !important; position: absolute !important; top: 20px !important; right: 20px !important; overflow: hidden !important; border-width: 0px !important; visibility: visible !important;">
    <iframe class="abineContentFrame" width="310px" allowtransparency="true" frameborder="0" height="0px" scrolling="no"
        src="chrome-extension://caljgklbbfbcjjanaijlacgncafpegll/html/inlineForm.html?abine61269498doNotRemove"
        id="abine61269498doNotRemove" position="undefined"
        style="display:block !important;position:relative !important;background:transparent !important;border-width:0px !important;left:0px !important;top:0px !important;visibility:visible !important;opacity:1 !important;filter:alpha(opacity:100) !important;margin:0 !important;padding:0 !important;height:0px !important;width:310px"></iframe>
</div>

</html>