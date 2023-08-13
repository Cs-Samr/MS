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
        href="<?php echo base_url(); ?>/assets/src/plugins/jquery-levels/jquery.levels.css">
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
                                    <li class="breadcrumb-item active" aria-current="page">إنشاء مشروع جديد</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>


                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                body {
                    font-family: Arial, sans-serif;
                }

                .level {
                    display: none;
                    text-align: center;
                    margin: 0 auto;
                }

                .level form {
                    width: 300px;
                    margin: 0 auto;
                }

                .level form label {
                    display: block;
                    margin-bottom: 10px;
                }

                .level form input {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }

                .level-indicator {
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: gray;
                    margin: 0 5px;
                    text-align: center;
                    line-height: 50px;
                    color: white;
                    font-weight: bold;
                    cursor: pointer;
                }

                .level-indicator.active {
                    background-color: green;
                }
                </style>

                <div class="pd-20 card-box height-100-p">
                    <div style="text-align: center;">
                        <span class="level-indicator active" onclick="goTolevel(1)">1</span>
                        <span class="level-indicator" onclick="goTolevel(2)">2</span>
                        <span class="level-indicator" onclick="goTolevel(3)">3</span>
                        <span class="level-indicator" onclick="goTolevel(4)">4</span>
                    </div>

                    <div class="level" id="level1">
                        <h2>level 1</h2>
                        <form id="level1Form" action="/MS/deskapp/forms/save/level1" method="post">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                            <div>
                                <button class="btn btn-outline-success" type="button" onclick="submitlevel('level1Form')">حفظ المرحلة الأولى</button>
                                <button class="btn btn-outline-primary"  type="button" onclick="nextlevel('level1', 'level2')">التالي</button>

                            </div>
                        </form>
                    </div>

                    <div class="level" id="level2">
                        <h2>level 2</h2>
                        <form id="level2Form" action="/MS/deskapp/forms/save/level2" method="post">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <div>
                                <button class="btn btn-outline-secondary  type="button" onclick="prevlevel('level2', 'level1')">السابق</button>
                                <button class="btn btn-outline-success" type="button" onclick="submitlevel('level2Form')">حفظ المرحلة الثانية</button>
                                <button class="btn btn-outline-primary"  type="button" onclick="nextlevel('level2', 'level3')">التالي</button>
                            </div>
                        </form>
                    </div>

                    <div class="level" id="level3">
                        <h2>level 3</h2>
                        <form id="level3Form" action="/MS/deskapp/forms/save/level3" method="post">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" required>
                            <div>
                                <button class="btn btn-outline-secondary"  type="button" onclick="prevlevel('level3', 'level2')">السابق</button>
                                <button class="btn btn-outline-success" type="button" onclick="submitlevel('level3Form')">حفظ المرحلة الثالثة</button>
                                <button class="btn btn-outline-primary" type="button" onclick="nextlevel('level3', 'level4')">التالي</button>
                            </div>
                        </form>
                    </div>

                    <div class="level" id="level4">
                        <h2>level 4</h2>
                        <form id="level4Form" action="/MS/deskapp/forms/save/level4" method="post">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" required>
                            <div>
                                <button  class="btn btn-outline-secondary " type="button" onclick="prevlevel('level4', 'level3')">السابق</button>
                                <button  class="btn btn-outline-success" type="button" onclick="submitlevel('level4Form')">حفظ المرحلة الرابعة و الأخيرة</button>
                            </div>
                        </form>
                    </div>

                    <div id="result" style="display: none;">
                        <h2>Form Completed</h2>
                    </div>
                </div>

            </div>
            <br>
            <?php echo view('deskapp/includes/_footer'); ?>
        </div>
    </div>
    <!-- js -->
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/core.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/script.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/process.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/layout-settings.js"></script>
    <script src="<?php echo base_url(); ?>/assets/src/plugins/jquery-levels/jquery.levels.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/scripts/levels-setting.js"></script>
<!-- levell script  -->
    <script>
                let currentlevel = 1;

                function showlevel(levelId) {
                    const levels = document.querySelectorAll('.level');
                    levels.forEach(level => {
                        level.style.display = 'none';
                    });
                    document.getElementById(levelId).style.display = 'block';
                }

                function updatelevelIndicators(levelNum) {
                    const indicators = document.querySelectorAll('.level-indicator');
                    indicators.forEach((indicator, index) => {
                        if (index + 1 === levelNum) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }

                function nextlevel(currentlevelId, nextlevelId) {
                    currentlevel++;
                    updatelevelIndicators(currentlevel);
                    showlevel(nextlevelId);
                }

                function prevlevel(currentlevelId, prevlevelId) {
                    currentlevel--;
                    updatelevelIndicators(currentlevel);
                    showlevel(prevlevelId);
                }

                function submitlevel(formId) {
                    const form = document.getElementById(formId);
                    form.submit();
                }

                function goTolevel(levelNum) {
                    currentlevel = levelNum;
                    updatelevelIndicators(currentlevel);
                    showlevel(`level${levelNum}`);
                }

                showlevel('level1');
                updatelevelIndicators(currentlevel);
                </script>



</body>

</html>