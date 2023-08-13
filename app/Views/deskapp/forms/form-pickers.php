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
                                <h4>Projects</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">المشاريع</li>
                                    <li class="breadcrumb-item active" aria-current="page">عرض مراحل المشروع</li>
                                </ol>
                            </nav>
                        </div>

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

                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل المشروع</label>

                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>

                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>

                                        </div>
                                        <div class="form-group">
                                            <label>المسوؤل</label>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 2 -->
                            <h5>دراسة طلب المشروع

                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل طلب المشروع</label>

                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>

                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>

                                        </div>
                                        <div class="form-group">
                                            <label>المسوؤل</label>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 3 -->
                            <h5>جمع متطلبات المشروع

                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كتابة المتطلبات المطلوبة</label>

                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>

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
                                        <div class="form-group">
                                            <label>المسوؤل</label>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>متطلبات المشروع

                            </h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المسوؤل</label>

                                        </div>
                                        <div>
                                            <label> الحالة</label>

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

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المتطلبات</label>

                                        </div>
                                    </div>

                            </section>

                        </form>
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