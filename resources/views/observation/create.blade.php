@extends('layout')

@section('body')

      <div >
          <div id="page-inner">
              <div class="form-style-5">
                  @if ($errors->any())
                    <div class="alert alert-danger" style="text-align:right">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }} -</p>
                        @endforeach
                        </ul>
                    </div>
                    @elseif(session('message'))
                    <div class="alert alert-success" style="text-align:right">
                    <p>{{ session('message') }} -</p>
                    </div>
                  @endif
                  <h1 class="page-head-line">ارسال ملاحظة سلامة</h1>
                  <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                  <form method="POST" action="{{route('observations.store')}}"  enctype="multipart/form-data" >
                                        @csrf
                                        
                                    
                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>

                          <label for="exampleFormControlInput1"> (الاسم(اختياري</label>
                          <input type="text" class="form-control" name="observer" id="exampleFormControlInput1">
                     

                          @unless (auth()->user()->admin == 0)
                          <label for="exampleFormControlSelect1">  في نطاق </label>
                          <select class="form-control" name="responsible_area" id="exampleFormControlSelect1">
                              <option>الادارة العامة للسلامة والصحة المهنية</option>
                              <option>الادارة العامة للاطفاء</option>
                              <option>الادارة العامة للبيئة</option>
                              <option>الادارة العامة للشئون الفنية</option>
                              <option>الادارة العامة للشئون الهندسية</option>
                              <option>الادارة العامة للخدمات الهندسية</option>
                              <option>الادارة العامة للهندسة المدنية</option>
                              <option>الادارة العامة للصيانة</option>
                              <option>الادارة العامة للكهرباء</option>
                              <option>الادارة العامة لتخطيط الانتاج</option>
                              <option>الادارة العامة للمرافق</option>
                              <option>الادارة العامة للمعالجة</option>
                              <option>الادارة العامة للالات الدوارة</option>
                              <option>الادارة العامة للتحكم الالي</option>
                              <option>الادارة العامة للحاسب الالي</option>
                              <option>الادارة العامة للمعمل الكيماوي</option>
                              <option>الادارة العامة للتفتيش الهندسي</option>
                              <option>الادارة العامة للشئون الطبية</option>
                              <option>الادارة العامة للشئون الادارية</option>
                              <option>الادارة العامة للامن</option>
                          </select>

                          
                         
                          <label for="exampleFormControlSelect1">الادارة المسئولة عن التنفيذ</label>
                          <select class="form-control" name="responsible_correction" id="exampleFormControlSelect1">
                          <option>الادارة العامة للسلامة والصحة المهنية</option>
                              <option>الادارة العامة للاطفاء</option>
                              <option>الادارة العامة للبيئة</option>
                              <option>الادارة العامة للشئون الفنية</option>
                              <option>الادارة العامة للشئون الهندسية</option>
                              <option>الادارة العامة للخدمات الهندسية</option>
                              <option>الادارة العامة للهندسة المدنية</option>
                              <option>الادارة العامة للصيانة</option>
                              <option>الادارة العامة للكهرباء</option>
                              <option>الادارة العامة لتخطيط الانتاج</option>
                              <option>الادارة العامة للمرافق</option>
                              <option>الادارة العامة للمعالجة</option>
                              <option>الادارة العامة للالات الدوارة</option>
                              <option>الادارة العامة للتحكم الالي</option>
                              <option>الادارة العامة للحاسب الالي</option>
                              <option>الادارة العامة للمعمل الكيماوي</option>
                              <option>الادارة العامة للتفتيش الهندسي</option>
                              <option>الادارة العامة للشئون الطبية</option>
                              <option>الادارة العامة للشئون الادارية</option>
                              <option>الادارة العامة للامن</option>
                          </select>
                          @endunless
                      
                          <label for="exampleFormControlTextarea1"> ارفاق صورة </label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" enctype="multipart/form-data">
                      

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
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