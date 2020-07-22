@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
            <div id="page-inner" style="background-image: url('{{ asset('storage/images/hse.jpg') }}');">
                
                <!-- /. ROW  -->
                
                    
                      
                   <!-- /. ROW  -->
                   
                   
                   <div class="form-style-5" style="text-align: right;" >
                   @include('includes.send-correctiveAction') <br><br>
                   @if(session('message'))
                    <div class="alert alert-success" style="text-align:right">
                    <p>{{ session('message') }} -</p>
                    </div>
                  @endif

                    
                    <h1 class="page-head-line">تفاصيل ملاحظة السلامة  </h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
  
                          <div class="form-group" >
                              <label for="exampleFormControlTextarea1">وصف تفصيلي</label>
                              <textarea style="pointer-events: none;"type="text" class="form-control"  id="exampleFormControlTextarea1" rows="5">{{$observation->desc}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">التصنيف </label>
                              <input style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->category}}" > </input>
                            </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">مصدر الملاحظة</label>
                            <input style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->source}}" ></input>
                              
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">الاسم</label>
                              <input style="pointer-events: none;" type="text" class="form-control" id="exampleFormControlInput1" value="{{$observation->observer}}">
                            </div>
      
                            <div class="form-group">
                              <label for="exampleFormControlSelect1"> الجهة المسئولة</label>
                              <input  style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->responsible_party}}"></input>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1"> الاولوية </label>
                              <input style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlSelect1" value="{{$observation->priority}}" ></input>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                                
                                @if ($observation->status ==  'لم يتم الحل')
                                <input style="pointer-events: none;background-color: rgb(226, 124, 106);" type="text" class="form-control"  
                                id="exampleFormControlSelect1" value="{{$observation->status}}"></input>
                                @elseif ($observation->status ==  'جاري الحل')
                                <input style="pointer-events: none;background-color: rgb(233, 230, 68);" type="text" class="form-control"  
                                                id="exampleFormControlSelect1" value="{{$observation->status}}"></input>
                                @elseif ($observation->status ==  'تم الحل')
                                <input style="pointer-events: none;background-color: rgb(75, 223, 119);" type="text" class="form-control"  
                                id="exampleFormControlSelect1" value="{{$observation->status}}"></input>

                                @endif
                              
                            </div>    
                            
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                              <textarea style="pointer-events: none;" type="text" class="form-control"  id="exampleFormControlTextarea1" rows="5">{{$observation->corrective_action_taken}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                              <input style="pointer-events: none;" type="text" class="form-control"  value="{{$observation->corrective_action_date}}" ></input>
                            </div>

                            <div class="form-group" >
                    
                                @if ($observation->photo)
                                <label for="exampleFormControlTextarea1">  الصورة </label>
                                <img src="{{ asset('storage/images/'.$observation->photo) }}" alt="image" style='max-width: 100%; 
                                '>
                                @endif
                            </div>

                            @include('includes.send-correctiveAction')
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
