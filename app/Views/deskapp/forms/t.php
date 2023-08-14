 <!-- <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">مراحل المشروع</h4>
                        <p class="mb-30">اسم المشروع</p>
                    </div>
                    <!-- <div>               
                    <?php foreach ($project_names as $pro_name): ?>
                            <div class="pd-20 card-box mb-30">
                                <div class="clearfix">
                                    <h4 class="text-blue h4">مراحل المشروع</h4>
                                    <p class="mb-30">اسم المشروع</p>
                                </div>
                                <h2><?php echo $pro_name; ?></h2>
                            </div>
                        <?php endforeach; ?>
                     </div> -->

                    <div class="wizard-content">
                        <form class="tab-wizard wizard-circle " method="post" enctype="multipart/form-data"
                            action="/MS/deskapp/forms/save/">
                            <h5>استلام طلب المشروع</h5>
                            <input name="title" type="hidden" value="استلام طلب المشروع" require>
                            <input name="level#" type="hidden" value="1" require>

                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل المشروع</label>
                                            <textarea class="form-control" name="details"></textarea>
                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>
                                            <select name="states" class="form-control" require>
                                                <option value="جديد">جديد</option>
                                                <option value="متوقف">متوقف</option>
                                                <option value="مكتمل">مكتمل</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" name="d_start" class="form-control"
                                                placeholder="Select Date" require>
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" name="d_end" class="form-control"
                                                placeholder="Select Date" require>
                                        </div>
                                        <div class="form-group">
                                            <label>المسوؤل</label>

                                            <select name="id_mem" class="custom-select form-control selectpicker" require>
                                                <?php foreach ($users as $user) { ?>
                                                <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                        <!-- <button type="button" class="btn btn-primary next-button">Next</button> -->
                                        <!-- <button class="btn btn-primary " type="submit">Submit</button> -->
                                        <!-- <input class="btn btn-primary " type="submit"></input> -->
                                        <input class="btn btn-primary btn-lg " type="submit" value="حفظ">

                                    </div>
                                </div>

                            </section>
            

                            <!-- Step 2 -->
                            <h5>دراسة طلب المشروع</h5>
                            <input name="title" type="hidden" value="دراسة طلب المشروع" require>
                            <input name="level#" type="hidden" value="2" require>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تفاصيل طلب المشروع</label>
                                            <textarea class="form-control" name="details"></textarea>
                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>
                                            <select name="states" class="form-control">
                                                <option value="جديد">جديد</option>
                                                <option value="متوقف">متوقف</option>
                                                <option value="مكتمل">مكتمل</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" name="d_start" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" name="d_end" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>المسوؤل</label>
                                            <select name="id_mem" class="custom-select form-control selectpicker">
                                                <?php foreach ($users as $user) { ?>
                                                <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    

                            <!-- Step 3 -->
                            <h5>جمع متطلبات المشروع</h5>
                            <input name="title" type="hidden" value="جمع متطلبات المشروع" require>
                            <input name="level#" type="hidden" value="3" require>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كتابة المتطلبات المطلوبة</label>
                                            <textarea name="details" class="form-control"></textarea>
                                        </div>
                                        <div>

                                            <label>اختر الحالة</label>
                                            <select name="states" class="form-control">
                                                <option value="جديد">جديد</option>
                                                <option value="متوقف">متوقف</option>
                                                <option value="مكتمل">مكتمل</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>نوع متطلبات المشروع</label>
                                            <select name="type" class="form-control">
                                                <option value="منافسة">منافسة</option>
                                                <option value="امر شراء مباشر">امر شراء مباشر</option>
                                                <option value="سلفة ادارية">سلفة ادارية</option>
                                                <option value="مشروع داخلي">مشروع داخلي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" name="d_start" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" name="d_end" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>المسوؤل</label>
                                            <select name="id_mem" class="custom-select form-control selectpicker">
                                                <?php foreach ($users as $user) { ?>
                                                <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                 

                            <!-- Step 4 -->
                            <h5>متطلبات المشروع </h5>
                            <input name="title" type="hidden" value="متطلبات المشروع" require>
                            <input name="level#" type="hidden" value="4" require>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المسوؤل</label>
                                            <select name="id_mem" class="custom-select form-control selectpicker">
                                                <?php foreach ($users as $user) { ?>
                                                <option value="<?= $user['id_mem'] ?>"><?= $user['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label>اختر الحالة</label>
                                            <select name="states" class="form-control">
                                                <option value="جديد">جديد</option>
                                                <option value="متوقف">متوقف</option>
                                                <option value="مكتمل">مكتمل</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاريخ البداية</label>
                                            <input type="date" name="d_start" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ النهاية</label>
                                            <input type="date" name="d_end" class="form-control"
                                                placeholder="Select Date">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المتطلبات</label>
                                            <textarea name="details" class="form-control"></textarea>
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