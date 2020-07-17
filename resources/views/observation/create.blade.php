@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ارسال ملاحظة سلامة</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <form method="POST" action="{{route('observations.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">وصف مختصر</label>
                      <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">مصدر الملاحظة</label>
                      <select class="form-control" name="source" id="exampleFormControlSelect1">
                        <option>ملاحظة </option>
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
                          <option>  قليلة  </option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المقترح</label>
                        <textarea class="form-control" name="CArecommended" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                          <option>لم يتم الحل </option>
                          <option>جاري الحل</option>
                          <option> تم الحل</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                        <textarea class="form-control" name="CAtaken" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                        <input class="form-control" name="date" type="date" ></input>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">ارفاق صورة</label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    
                      <input type="submit" class="btn btn-primary" value="ارسال">
                  </form>
                   <!-- /. ROW  -->
                
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
