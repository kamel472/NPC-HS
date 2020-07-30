@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
          <div id="page-inner" style="text-align: right;">
            
            <div class="form-style-5"  >
            

            @include('includes.send-correctiveAction')
            
            
            <br><br>
              @if(session('message'))
                <div class="alert alert-success" style="text-align:right">
                  <p>{{ session('message') }} -</p>
                </div>
              @endif

              <h1 class="page-head-line">تفاصيل ملاحظة السلامة  </h1>

<br><br>
              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group" >
                      <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                      <textarea style="pointer-events: none;"type="text" class="form-control"  id="exampleFormControlTextarea1" rows="5">{{$observation->desc}}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">التصنيف </label>
                      <input style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->category}}" > </input>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">مصدر الملاحظة</label>
                      <input style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->source}}" ></input>
                    </div>
                  </div>
                </div>
              </div>
             


              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">  في نطاق</label>
                      <input  style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->responsible_area}}"></input>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">  الادارة المسئولة عن التنفيذ</label>
                      <input  style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->responsible_correction}}"></input>
                    </div>
                  </div>
                </div>
              </div>

                     
                  
              <div class="col-sm">
              <div class="form-group">
                      <label for="exampleFormControlSelect1"> الحالة </label>
                      @if ($observation->status ==  'لم يتم الحل')
                      <input  style="pointer-events: none;background-color: red;"
                                        @elseif ($observation->status ==  'جاري الحل')
                                        <input  style="pointer-events: none;background-color: yellow;"
                                        @elseif ($observation->status ==  'تم الحل')
                                        <input  style="pointer-events: none;background-color: green;"
                                        @endif
                       type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->status}}"></input>
                    </div>
                  </div>
              
              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                      <textarea style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlTextarea1" rows="5">{{$observation->corrective_action_taken}}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                      <input style="pointer-events: none;" type="text" class="form-control"  value="{{$observation->corrective_action_date}}" ></input>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="container">
              <div class="form-group" >
                @if ($observation->photo)
                  <label for="exampleFormControlTextarea1">   الصورة المرفقة </label>
                  <img src="{{ asset('storage/images/'.$observation->photo) }}" alt="image" style='max-width: 75%;'>
                @endif

              </div>
              

              
              
            </div>

            @include('includes.send-correctiveAction')
            
          </div>
            </div>
          </div>

              

            </div>


          </div>
        </div>
      </div>
            <!-- /. PAGE INNER  -->
    </div>
        <!-- /. PAGE WRAPPER  -->
  </div>
    <!-- /. WRAPPER  -->
@endsection
