@extends('layout')

@section('body')

      <div >
          <div id="page-inner" style="background-image: url('{{asset('storage/images/nice.jpg')}}');">
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
                  <h1 class="page-head-line">الاحصائيات الشهرية</h1>
                  <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                  <form method="POST" action="{{route('stats.store')}}"  enctype="multipart/form-data">
                      @csrf
  
                      <div class="form-group">
                          <label for="exampleFormControlInput1">الدورات التدريبية</label>
                          <input type="text" class="form-control" name="training" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">تفتيشات السلامة</label>
                          <input type="text" class="form-control" name="inspections" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">ملاحظات السلامة</label>
                          <input type="text" class="form-control" name="observations" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">اجتماعات السلامة</label>
                          <input type="text" class="form-control" name="meetings" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">التجارب الوهمية</label>
                          <input type="text" class="form-control" name="drills" id="exampleFormControlInput1">
                      </div>

                      <div class="form-group">
                          <label for="exampleFormControlInput1">الوفيات </label>
                          <input type="text" class="form-control" name="fatalities" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1"> اصابات الوقت الضائع</label>
                          <input type="text" class="form-control" name="lostTime" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1"> حوادث تلف معدات</label>
                          <input type="text" class="form-control" name="damage" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">حوادث حريق</label>
                          <input type="text" class="form-control" name="fire" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">حوادث وشيكة</label>
                          <input type="text" class="form-control" name="nearMiss" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">حوادث اسعافات اولية</label>
                          <input type="text" class="form-control" name="firstAid" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">  التاريخ</label>
                          <input type="text" class="form-control" name="date" id="exampleFormControlInput1">
                      </div>

                     
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