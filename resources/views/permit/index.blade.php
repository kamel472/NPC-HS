@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
        <div>
            <div id="page-inner">

            @include('includes.create-permit')
            <br><br>

                <div class="row">
                    <div class="col-md-12">
                    
                    <form action="{{route('permits.index')}}" method="get" class="form-inline">

                    <input type="date"class="form-control" name="date">&nbsp;
                    <input type="submit" class="btn btn-primary">
                    </form>
                    
                        @if ($errors->any())
                            <div class="alert alert-danger" >
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <p style="text-align:right;">{{ $error }} - </p>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h1 class="page-head-line">سجل تصاريح العمل</h1>
                        <h1 class="page-subhead-line" style="text-align:right;">التاريخ: 
                        {{$date}}
                    </div>
                </div>
                
                <!-- /. ROW  -->
                 <div class="row">
                    <div class="col-md-12">
                        <div >
                        
                          <!-- Table -->
                          <div class= "observation">
                              <table class="table table-striped">
                              @if($permits->count()>0)
                              <thead>

                                  <thead class="thead-dark">
                                  <tr>
                                    <th scope="col" >تعديل</th>
                                    <th scope="col" >حذف</th>
                                    <th scope="col" >التأمين</th>
                                    <th scope="col" >نوع التصريح </th>
                                    <th scope="col" >وصف العمل </th>
                                    <th scope="col" >مكان العمل</th>
                                    
                                  </tr>
                                </thead>

                                <tbody>
                                    @foreach($permits as $permit)
                                    <tr class="list-group-item-secondary">
                                    <td>
                                    @include('includes.edit-permit')
                                    </td>
                                    <td>
                                    <form method="post" action="{{route('permits.destroy' , $permit->id)}}"
                                    id="permit-destroy{{$permit->id}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="حذف">
                                    </form>
                                    <td>{{$permit->fire_fighting}}</td>
                                    <td>
                                    @foreach($permit->type as $type)
                                    - {{$type}}
                                    @endforeach
                                    </td>

                                    <td>{{$permit->desc}} </td>
                                    <td>{{$permit->location}} </td>

                                    </tr>

                                    @endforeach

                                    @else
                                    <h2> لايوجد تصاريح مسجلة</h2>
                                    @endif

                                </tbody>

                              </table>
                              
                              <br><br>
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