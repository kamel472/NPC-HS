 <!--Edit Comment Button-->
 <div>
                        
                        <a  href="" class="btn btn-primary btn-lg" data-target="#modalCreateobservation" data-toggle="modal" role="button">ارسال ملاحظة</a>
                        &nbsp;&nbsp;

                        <!--Edit Comment Modal-->

                        <div class="modal " id="modalCreateobservation" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="text-align:right;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content"  >
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">ارسال ملاحظة</h4>
                                        <form method="POST" action="{{route('observations.store')}}"  enctype="multipart/form-data" >
                                        @csrf
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3" >
                                    <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                      
                      
                          <label for="exampleFormControlSelect1">التصنيف </label>
                          <select class="form-control" name="category" id="exampleFormControlSelect1" >
                              <option>عمل علي ارتفاعات</option>
                              <option>الرفع والتصبين</option>
                              <option>النظافة والترتيب</option>
                              <option>مخاطر الكهرباء</option>
                              <option>مخاطر الحريق</option>
                              <option>مخاطر ميكانيكية</option>
                              <option>مخاطر كيميائية</option>
                              <option>مخاطر بيولوجية</option>
                              <option>اخري</option>

                          </select>
                      

                      
                          <label for="exampleFormControlInput1">الاسم</label>
                          <input type="text" class="form-control" name="observer" id="exampleFormControlInput1">
                     

                      
                          <label for="exampleFormControlSelect1"> الجهة المسئولة</label>
                          <select class="form-control" name="resposible" id="exampleFormControlSelect1">
                              <option>ادارة السلامة</option>
                              <option>ادارة الكهرباء</option>
                              <option>ادارة الورش</option>
                          </select>
                      
                      
                          <label for="exampleFormControlTextarea1"> ارفاق صورة </label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" enctype="multipart/form-data">
                      

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                    <input type="submit" class="btn btn-primary btn-lg" value="ارسال">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>