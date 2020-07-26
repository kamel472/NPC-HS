 <!--Edit Comment Button-->
 <div  >
                        
                        <a  href="" class="btn btn-primary btn-lg" data-target="#modalCreatePermit" data-toggle="modal" role="button">  تسجيل تصريح عمل</a>
                        &nbsp;&nbsp;

                        <!--Edit Comment Modal-->

                        <div class="modal " id="modalCreatePermit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true" style="text-align:right;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content"  >
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold"> تسجيل تصريح عمل</h4>
                                        <form method="POST" action="{{route('permits.store')}}" >
                                        @csrf
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3" >
                                        
                                    
                              <label for="exampleFormControlTextarea1">مكان العمل </label>
                              <input class="form-control" name="location" id="exampleFormControlTextarea1" rows="3"></input>
                           

                              <label for="exampleFormControlTextarea1">وصف العمل</label>
                              <input class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></input>

                              <label>نوع التصريح </label>
                              <br>
                              <fieldset> 
                                <input  name="type[]" type="checkbox" value="اعمال ساخنة">  اعمال ساخنة       </input>
                                <br>
                                <input  type="checkbox" name="type[]" value="اعمال باردة">اعمال باردة</input>
                                <br>
                                <input  type="checkbox" name="type[]"  value="دخول معدات">دخول معدات</input>
                                <br>
                                <input type="checkbox" name="type[]"  value="دخول اماكن مغلقة">دخول اماكن مغلقة</input>
                                <br>
                                <input  type="checkbox" name="type[]"  value="تصوير اشعاعي">تصوير اشعاعي</input>
                                <br>
                                <input  type="checkbox" name="type[]"  value="عزل كهرباء ">عزل كهرباء</input>
                            </fieldset>

                            <label for="exampleFormControlSelect1"> التأمين</label>
                            <select class="form-control" name="fire_fighting" id="exampleFormControlSelect1" >
                              <option >فرد اطفاء </option>
                              <option>سيارة اطفاء</option>
                              <option> غير مطلوب</option>
                            </select>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                    <input type="submit" class="btn btn-primary btn-lg" value="تسجيل">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>