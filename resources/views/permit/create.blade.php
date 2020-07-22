@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
            <div id="page-inner" style="background-image: url('{{ asset('storage/images/hse.jpg') }}');">
                
                <!-- /. ROW  -->
                
                    
                      
                   <!-- /. ROW  -->
                   
                    
                   <div class="form-style-5">
                   <h1 class="page-head-line">  تسجيل تصاريح العمل</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                        <form method="POST" action="{{route('permits.store')}}" >
                          @csrf
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">مكان العمل </label>
                              <textarea class="form-control" name="location" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">وصف العمل</label>
                              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                             

                              <fieldset> 
    <label>نوع التصريح </label>
    <input  name="type[]" type="checkbox" value="اعمال ساخنة">  اعمال ساخنة  </input>
    <input  type="checkbox" name="type[]" value="اعمال باردة">اعمال باردة</input>
    <input  type="checkbox" name="type[]"  value="دخول معدات">دخول معدات</input>
    <input type="checkbox" name="type[]"  value="دخول اماكن مغلقة">دخول اماكن مغلقة</input>
    <input  type="checkbox" name="type[]"  value="تصوير اشعاعي">تصوير اشعاعي</input>
    <input  type="checkbox" name="type[]"  value="عزل كهرباء ">عزل كهرباء</input>
    </fieldset>

                            </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1"> التأمين</label>
                            <select class="form-control" name="fire_fighting" id="exampleFormControlSelect1" >
                              <option >فرد اطفاء </option>
                              <option>سيارة اطفاء</option>
                              <option> غير مطلوب</option>
                              
                            </select>
                          </div>
                          <input type="submit" class="btn btn-primary btn-lg" value="ارسال">
</form>
                          
                          </div>

                  </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
