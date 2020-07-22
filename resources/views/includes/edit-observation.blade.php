 <!--Edit Comment Button-->
 <div  >
                        
                        <a  href="" class="btn btn-primary" data-target="#modalEditComment{{$observation->id}}" data-toggle="modal" role="button">تعديل</a>
                        &nbsp;&nbsp;

                        <!--Edit Comment Modal-->
                        <div class="modal " id="modalEditComment{{$observation->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold"> تعديل</h4>
                                        <form action="{{route('observations.update', $observation->id)}}" method="post">
                                            @csrf
                                            @method('patch')
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body mx-3">

                        <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">{{$observation->desc}}</textarea>
                      
                      
                          <label for="exampleFormControlSelect1">التصنيف </label>
                          <select class="form-control" name="category" id="exampleFormControlSelect1" >
                              <option >عمل علي ارتفاعات </option>
                              <option>الرفع والتصبين</option>
                              <option> النظافة والترتيب</option>
                              <option> مخاطر الكهرباء </option>
                              <option>  مخاطر الحريق</option>
                              <option> مخاطر ميكانيكية</option>
                              <option> اخري</option>

                          </select>

                          <label for="exampleFormControlSelect1">مصدر الملاحظة </label>
                          <select class="form-control" name="source" id="exampleFormControlSelect1" >
                              <option >  ملاحظة </option>
                              <option> تفتيش</option>
                              <option>  تدقيق</option>
                              <option>  جولة الادارة العليا </option>
                          </select>

                          <label for="exampleFormControlSelect1"> الاولوية </label>
                          <select class="form-control" name="priority" id="exampleFormControlSelect1" >
                              <option >  عالية </option>
                              <option> متوسطة</option>
                              <option>  منخفضة</option>
                          </select>

                          <label for="exampleFormControlSelect1"> الجهة المسئولة</label>
                          <select class="form-control" name="resposible" id="exampleFormControlSelect1">
                              <option> ادارة السلامة   </option>
                              <option> ادارة الكهرباء  </option>
                              <option> ادارة الورش  </option>
                          </select>
                        
                                <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                              <select class="md-textarea form-control" name="status" id="exampleFormControlSelect1">
                                <option>لم يتم الحل </option>
                                <option>جاري الحل</option>
                                <option> تم الحل</option>
                                
                              </select>

                              <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                              <textarea class="md-textarea form-control" class="md-textarea form-control" name="CAtaken" id="exampleFormControlTextarea1" rows="3"></textarea>

                              <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                              <input class="form-control" name="date" type="date" ></input>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info btn-sm">تعديل </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>