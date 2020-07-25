@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
            <div>
                <div id="page-inner">

                  <a  href="{{route('observations.create')}}" class="btn btn-primary btn-lg"  role="button">ارسال ملاحظة</a>

                  <br><br>

                  
                    
                      
                        <div class="btn-group">
                          <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الادارة
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="observations?dep=HSE">ادارة السلامة</a>
                        <a class="dropdown-item" href="observations?dep=elect">ادارة الكهرباء</a>
                        <a class="dropdown-item" href="observations?dep=workshop">ادارة الورش</a>
                          </div>
                        </div>
                      
                      
                        <div class="btn-group" >
                          <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            التصنيف
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="observations?category=workingAthieght">عمل علي ارتفاعات</a>
                        <a class="dropdown-item" href="observations?category=lifting">الرفع والتصبين</a>
                        <a class="dropdown-item" href="observations?category=housekeeping">النظافة والترتيب</a>
                        <a class="dropdown-item" href="observations?category=elec">مخاطر الكهرباء</a>
                        <a class="dropdown-item" href="observations?category=fire">مخاطر الحريق</a>
                        <a class="dropdown-item" href="observations?category=mech">مخاطر ميكانيكية</a>
                        <a class="dropdown-item" href="observations?category=chem">مخاطر كيميائية</a>
                        <a class="dropdown-item" href="observations?category=bio">مخاطر بيولوجية</a>
                        <a class="dropdown-item" href="observations?category=other">اخري</a>
                          </div>
                        </div>
                      
                     
                        <div class="btn-group"  >
                          <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الحالة
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="observations?status=pending">لم يتم الحل</a>
                            <a class="dropdown-item" href="observations?status=ongoing">جاري الحل</a>
                            <a class="dropdown-item" href="observations?status=done">تم الحل</a>
                          </div>
                        </div>
                      

                      
                        <div class="btn-group" >
                          <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المصدر
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="observations?source=observation">ملاحظة</a>
                            <a class="dropdown-item" href="observations?source=inspection">تفتيش</a>
                            <a class="dropdown-item" href="observations?source=audit">تدقيق</a>
                            <a class="dropdown-item" href="observations?source=management">جولة الادارة العليا</a>
                          </div>
                        </div>
                      

                      
                        <div class="btn-group">
                          <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الاولوية
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="observations?priority=high">عالية</a>
                            <a class="dropdown-item" href="observations?priority=medium">متوسطة</a>
                            <a class="dropdown-item" href="observations?priority=low">منخفضة</a>
                          </div>
                        </div>

                  </div>
                    <div class="row">

                        <div class="col-md-12">
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
                        </div>
                    </div>    
                    <!-- /. ROW  -->
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="page-head-line">ملاحظات السلامة</h1>
                            <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                    <div class="panel panel-primary">
          
          <!-- Table -->
            <div class= "observation">
              <table class="table">
                <thead>
                  <tr>
                    <td>تعديل</td>
                    <td>حذف</td>
                    <td>الحالة</td>
                    <td>الاولوية</td>
                    <td >الادارة المسئولة</td> 
                    <td>التصنيف</td>
                    <td >المصدر</td>
                    <td >التاريخ</td>
                    <td>الملاحظة</td>
                  </tr>
                </thead>
                <tbody>
                    @foreach($observations as $observation)
                        @if ($observation->status ==  'لم يتم الحل')
                            <tr class="list-group-item-danger">
                        @elseif ($observation->status ==  'جاري الحل')
                            <tr class="list-group-item-warning">
                        @elseif ($observation->status ==  'تم الحل')
                            <tr class="list-group-item-success">
                        @endif

                    <td>
                      @include('includes.edit-observation')
                    </td>

                    <td>
                      <form method="post" action="{{route('observations.destroy' , $observation->id)}}" id="observation-destroy">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حذف" onclick="observationDelete(this)"> 
                      </form>
                    </td>

                    <td>{{$observation->status}}</td>
                    <td>{{$observation->priority}} </td>
                    <td>{{$observation->responsible_party}} </td>
                    <td>{{$observation->category}} </td>
                    <td>{{$observation->source}} </td>
                    <td>{{$observation->created_at}} </td>
                    
                    <td><a href="{{route('observations.show' , $observation->id)}}">{{$observation->desc}}</a></td>
                  </tr> 
                  @endforeach
                </tbody>
              </table>
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