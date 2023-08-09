<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo base_url(); ?>/assets/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo base_url(); ?>/assets/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo base_url(); ?>/assets/vendors/images/favicon-16x16.png">

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

<body>
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
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Form Wizards</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                          <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                         data-toggle="dropdown">
                                           January 2018
                                   </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">مراحل المشروع</h4>
                        <p class="mb-30">اسم المشروع</p>
                    </div>
                    <div class="wizard-content">
                        <form class="tab-wizard wizard-circle wizard">
                            <h5>استلام طلب المشروع
                            <p class="mb-30">الحالة</p>
                              </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل المشروع</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h5>دراسة طلب المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل طلب المشروع</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                    </div>
                                </div> 
                            </section>
                            <!-- Step 3 -->
                            <h5>جمع متطلبات المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كتابة المتطلبات المطلوبة</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>نوع متطلبات المشروع</label>
                                            <select class="form-control">
                                                <option>منافسة</option>
                                                <option>امر شراء مباشر</option>
                                                <option>سلفة ادارية</option>
                                                <option>مشروع داخلي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>متطلبات المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المسوؤل</label>
                                            <select class="custom-select form-control selectpicker"
                                                data-live-search="true" multiple>
                                                <?php foreach ($names as $name): ?>
                                                <option><?php echo $name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المتطلبات</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
                <!-- 212 -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">مراحل المشروع</h4>
                        <p class="mb-30">اسم المشروع</p>
                    </div>
                    <div class="wizard-content">
                    <form class="tab-wizard wizard-circle wizard">
                            <h5>استلام طلب المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل المشروع</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h5>دراسة طلب المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل طلب المشروع</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            
                                        </div>
                                    </div>
                                </div> 
                            </section>
                            <!-- Step 3 -->
                            <h5>جمع متطلبات المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كتابة المتطلبات المطلوبة</label>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>نوع متطلبات المشروع</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>متطلبات المشروع
                            <p class="mb-30">الحالة</p>
                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المسوؤل</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المتطلبات</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>

                <!-- success Popup html Start -->
                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h3 class="mb-20">أتممت جميع المراحل </h3>
                                <div class="mb-30 text-center"><img
                                        src="<?php echo base_url(); ?>/assets/vendors/images/success.png"></div>
                                تهانينا أنتهى المشروع 
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">تم</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- success Popup html End -->
            </div>
            <?php echo view('deskapp/includes/_footer'); ?>
        </div>
    </div>
    <!-- js -->
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/core.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/script.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/process.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/layout-settings.js"></script>
    <script src="<?php echo base_url(); ?>/assets/src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/steps-setting.js"></script>
</body>

</html>