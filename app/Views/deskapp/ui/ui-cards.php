<!DOCTYPE html>

<html data-select2-id="14">
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

<body data-gr-ext-installed="" data-new-gr-c-s-check-loaded="14.1117.0" data-select2-id="13"
    class="header-white active sidebar-dark">
    <!-- echo header,rightsidebar,leftsidebar and loader -->
    <div class="pre-loader" style="display: none;">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="http://localhost/MS/assets/vendors/images/logo-white.png" alt=""></div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1" style="width: 100%;"></div>
            </div>
            <div class="percent" id="percent1">100%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    <?php 
		echo view('deskapp/includes/_header');
		echo view('deskapp/includes/_sidebar');

	?>

    <div class="main-container" data-select2-id="12">

        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Projects</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://localhost/MS/deskapp/dashboard">Home
                                    Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Project
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="text-right">
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Export List</a>
                    <a class="dropdown-item" href="#">Policies</a>
                    <a class="dropdown-item" href="#">View Assets</a>
                </div>

            </div>

        </div>
        <div class="pd-20 card-box mb-30">

            <div class="clearfix">
                <h4 class="text-blue h4">انشاء مشروع</h4>


            </div>
            <div class="wizard-content">
                <form method="post" enctype="multipart/form-data" action="/MS/deskapp/ui/save">
                    <div class="content clearfix">

                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0"
                            class="body current" aria-hidden="false">
                            <?= csrf_field() ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اسم المشروع</label>
                                        <input name="pro_name" type="text" class="form-control" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تفاصيل المشروع</label>
                                        <input name="details" type="text" class="form-control" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اضافة اعضاء</label>
                                        <select class="custom-select form-control selectpicker" data-live-search="true"
                                            multiple require>
                                            <?php foreach ($names as $name): ?>
                                            <option><?php echo $name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="d_start">تاريخ البداية </label>
                                        <input name="d_start" type="date" id="d_start" class="form-control"
                                            placeholder="Select Date" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="d_end">تاريخ النهاية </label>
                                        <input name="d_end" type="date" id="d_end" class="form-control"
                                            placeholder="Select Date" require>


                                    </div>
                                </div>
                            </div>
                    </div>

                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="حفظ">
                </form>
            </div>
        </div><!-- footer -->
        <div> <?php echo view('deskapp/includes/_footer'); ?> </div>
    </div>

    <!-- js -->
    <script src="http://localhost/MS/assets/vendors/scripts/core.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/script.min.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/process.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/layout-settings.js"></script>
    <!-- switchery js -->
    <script src="http://localhost/MS/assets/src/plugins/switchery/switchery.min.js"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="http://localhost/MS/assets/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="http://localhost/MS/assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/advanced-components.js"></script>





    <div class="datepickers-container" id="datepickers-container">
        <div class="datepicker -bottom-left- -from-bottom-"><i class="datepicker--pointer"></i>
            <nav class="datepicker--nav">
                <div class="datepicker--nav-action" data-action="prev"><svg>
                        <path d="M 17,12 l -5,5 l 5,5"></path>
                    </svg></div>
                <div class="datepicker--nav-title">August, <i>2023</i></div>
                <div class="datepicker--nav-action" data-action="next"><svg>
                        <path d="M 14,12 l 5,5 l -5,5"></path>
                    </svg></div>
            </nav>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <type="button" class="btn btn-secondary">Secondary
                    </type="button">
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Export List</a>
                        <a class="dropdown-item" href="#">Policies</a>
                        <a class="dropdown-item" href="#">View Assets</a>
                    </div>
                </div>
            </div>
            <div class="datepicker--content">
                <div class="datepicker--days datepicker--body active">
                    <div class="datepicker--days-names">
                        <div class="datepicker--day-name -weekend-">Su</div>
                        <div class="datepicker--day-name">Mo</div>
                        <div class="datepicker--day-name">Tu</div>
                        <div class="datepicker--day-name">We</div>
                        <div class="datepicker--day-name">Th</div>
                        <div class="datepicker--day-name">Fr</div>
                        <div class="datepicker--day-name -weekend-">Sa</div>
                    </div>
                    <div class="datepicker--cells datepicker--cells-days">
                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="30"
                            data-month="6" data-year="2023">30</div>
                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="31" data-month="6"
                            data-year="2023">31</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="7"
                            data-year="2023">1</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="7"
                            data-year="2023">2</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="7"
                            data-year="2023">3</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="4" data-month="7"
                            data-year="2023">4</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend- -current-" data-date="5"
                            data-month="7" data-year="2023">5</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="6" data-month="7"
                            data-year="2023">6</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="7"
                            data-year="2023">7</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="7"
                            data-year="2023">8</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="9" data-month="7"
                            data-year="2023">9</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="7"
                            data-year="2023">10</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="11" data-month="7"
                            data-year="2023">11</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="7"
                            data-year="2023">12</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="13" data-month="7"
                            data-year="2023">13</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="7"
                            data-year="2023">14</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="7"
                            data-year="2023">15</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="7"
                            data-year="2023">16</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="7"
                            data-year="2023">17</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="18" data-month="7"
                            data-year="2023">18</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="7"
                            data-year="2023">19</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="20" data-month="7"
                            data-year="2023">20</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="7"
                            data-year="2023">21</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="7"
                            data-year="2023">22</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="7"
                            data-year="2023">23</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="7"
                            data-year="2023">24</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="25" data-month="7"
                            data-year="2023">25</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="7"
                            data-year="2023">26</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="27" data-month="7"
                            data-year="2023">27</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="7"
                            data-year="2023">28</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="7"
                            data-year="2023">29</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="7"
                            data-year="2023">30</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="31" data-month="7"
                            data-year="2023">31</div>
                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="8"
                            data-year="2023">1</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="2"
                            data-month="8" data-year="2023">2</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="datepicker -bottom-left- -from-bottom-"><i class="datepicker--pointer"></i>
            <nav class="datepicker--nav">
                <div class="datepicker--nav-action" data-action="prev"><svg>
                        <path d="M 17,12 l -5,5 l 5,5"></path>
                    </svg></div>
                <div class="datepicker--nav-title">August, <i>2023</i></div>
                <div class="datepicker--nav-action" data-action="next"><svg>
                        <path d="M 14,12 l 5,5 l -5,5"></path>
                    </svg></div>
            </nav>
            <div class="datepicker--content">
                <div class="datepicker--days datepicker--body active">
                    <div class="datepicker--days-names">
                        <div class="datepicker--day-name -weekend-">Su</div>
                        <div class="datepicker--day-name">Mo</div>
                        <div class="datepicker--day-name">Tu</div>
                        <div class="datepicker--day-name">We</div>
                        <div class="datepicker--day-name">Th</div>
                        <div class="datepicker--day-name">Fr</div>
                        <div class="datepicker--day-name -weekend-">Sa</div>
                    </div>
                    <div class="datepicker--cells datepicker--cells-days">
                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="30"
                            data-month="6" data-year="2023">30</div>
                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="31" data-month="6"
                            data-year="2023">31</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="7"
                            data-year="2023">1</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="7"
                            data-year="2023">2</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="7"
                            data-year="2023">3</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="4" data-month="7"
                            data-year="2023">4</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend- -current-" data-date="5"
                            data-month="7" data-year="2023">5</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="6" data-month="7"
                            data-year="2023">6</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="7"
                            data-year="2023">7</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="7"
                            data-year="2023">8</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="9" data-month="7"
                            data-year="2023">9</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="7"
                            data-year="2023">10</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="11" data-month="7"
                            data-year="2023">11</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="7"
                            data-year="2023">12</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="13" data-month="7"
                            data-year="2023">13</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="7"
                            data-year="2023">14</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="7"
                            data-year="2023">15</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="7"
                            data-year="2023">16</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="7"
                            data-year="2023">17</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="18" data-month="7"
                            data-year="2023">18</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="7"
                            data-year="2023">19</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="20" data-month="7"
                            data-year="2023">20</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="7"
                            data-year="2023">21</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="7"
                            data-year="2023">22</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="7"
                            data-year="2023">23</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="7"
                            data-year="2023">24</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="25" data-month="7"
                            data-year="2023">25</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="7"
                            data-year="2023">26</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="27" data-month="7"
                            data-year="2023">27</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="7"
                            data-year="2023">28</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="7"
                            data-year="2023">29</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="7"
                            data-year="2023">30</div>
                        <div class="datepicker--cell datepicker--cell-day" data-date="31" data-month="7"
                            data-year="2023">31</div>
                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="8"
                            data-year="2023">1</div>
                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="2"
                            data-month="8" data-year="2023">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="td-wrap td-n2" id="td-clock-0">
        <div class="td-overlay"></div>
        <div class="td-clock td-init">
            <div class="td-deg td-n" style="transform: rotate(282deg);">
                <div class="td-select"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 35.4"
                        enable-background="new 0 0 100 35.4" xml:space="preserve" style="stroke:#1977CC">
                        <g>
                            <path fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" d="M98.1,33C85.4,21.5,68.5,14.5,50,14.5S14.6,21.5,1.9,33"></path>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="1.9" y1="33" x2="1.9" y2="28.6"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="1.9" y1="33" x2="6.3" y2="33"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="98.1" y1="33" x2="93.7" y2="33"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="98.1" y1="33" x2="98.1" y2="28.6"></line>
                        </g>
                    </svg></div>
            </div>
            <div class="td-medirian"><span class="td-icon-am td-n">AM</span><span
                    class="td-icon-pm td-n td-on">PM</span></div>
            <div class="td-lancette">
                <div style="transform: rotate(342deg);"></div>
                <div style="transform: rotate(180deg);"></div>
            </div>
            <div class="td-time"><span class="on" data-id="18">06</span>:<span data-id="56">56</span></div>
        </div>
    </div>
    <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
    <div class="abineContentPanel"
        style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent !important; margin: 0px !important; padding: 0px !important; display: none; opacity: 1 !important; z-index: 2147483647 !important; position: absolute !important; top: 20px !important; right: 20px !important; overflow: hidden !important; border-width: 0px !important; visibility: visible !important;">
        <iframe class="abineContentFrame" width="310px" allowtransparency="true" frameborder="0" height="0px"
            scrolling="no"
            src="chrome-extension://caljgklbbfbcjjanaijlacgncafpegll/html/inlineForm.html?abine14583707doNotRemove"
            id="abine14583707doNotRemove" position="undefined"
            style="display:block !important;position:relative !important;background:transparent !important;border-width:0px !important;left:0px !important;top:0px !important;visibility:visible !important;opacity:1 !important;filter:alpha(opacity:100) !important;margin:0 !important;padding:0 !important;height:0px !important;width:310px"></iframe>
    </div>
    <div class="datepickers-container" id="datepickers-container"></div>
    <div class="td-wrap td-n2" id="td-clock-1">
        <div class="td-overlay"></div>
        <div class="td-clock td-init" style="top: 37px; left: -28px;">
            <div class="td-deg td-n" style="transform: rotate(297deg);">
                <div class="td-select"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 35.4"
                        enable-background="new 0 0 100 35.4" xml:space="preserve" style="stroke:#1977CC">
                        <g>
                            <path fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" d="M98.1,33C85.4,21.5,68.5,14.5,50,14.5S14.6,21.5,1.9,33"></path>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="1.9" y1="33" x2="1.9" y2="28.6"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="1.9" y1="33" x2="6.3" y2="33"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="98.1" y1="33" x2="93.7" y2="33"></line>
                            <line fill="none" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" x1="98.1" y1="33" x2="98.1" y2="28.6"></line>
                        </g>
                    </svg></div>
            </div>
            <div class="td-medirian"><span class="td-icon-am td-n">AM</span><span
                    class="td-icon-pm td-n td-on">PM</span></div>
            <div class="td-lancette">
                <div style="transform: rotate(43deg);"></div>
                <div style="transform: rotate(210deg);"></div>
            </div>
            <div class="td-time"><span class="on" data-id="19">07</span>:<span data-id="07">07</span></div>
        </div>
    </div>
</body>

</html>