@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
            <div id="page-inner" style="background-image: url('{{ asset('storage/images/hse.jpg') }}');">
                
                <!-- /. ROW  -->
                
                    
                      
                   <!-- /. ROW  -->
                   
                    
                   <div class="form-style-5">
                   <h1 class="page-head-line">ارسال ملاحظة سلامة</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                        <form method="POST" action="{{route('observations.store')}}"  enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
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
                            </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">مصدر الملاحظة</label>
                            <select class="form-control" name="source" id="exampleFormControlSelect1" >
                              <option >ملاحظة </option>
                              <option>تفتيش</option>
                              <option>جولة ادارة</option>
                              
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">الاسم</label>
                              <input type="text" class="form-control" name="observer" id="exampleFormControlInput1">
                            </div>
      
                            <div class="form-group">
                              <label for="exampleFormControlSelect1"> الجهة المسئولة</label>
                              <select class="form-control" name="resposible" id="exampleFormControlSelect1">
                                <option> ادارة السلامة   </option>
                                <option> ادارة الكهرباء  </option>
                                <option> ادارة الورش  </option>
                                
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1"> الاولوية </label>
                              <select class="form-control" name="priority" id="exampleFormControlSelect1">
                                <option> عالية   </option>
                                <option>  متوسطة  </option>
                                <option>  منخفضة  </option>
                                
                              </select>
                            </div>
                            <div class="form-group" >
                            <label for="exampleFormControlTextarea1"> ارفاق صورة </label>
                            
                              <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" enctype="multipart/form-data">
                              <br><br>
                              <input type="submit" class="btn btn-primary btn-lg" value="ارسال">
                              </form>
                            </div>
                          </div>

                  </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
