@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
        <div>
            <div id="page-inner">
            
                <div class="row">
                    <div class="col-md-12">

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
                        <?php
                        echo (date('Y-m-d'));
                        ?> 
                    </div>
                </div>
                
                <!-- /. ROW  -->
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">

                          <!-- Table -->
                          <div class= "observation">
                              <table class="table">
                                <thead>
                                    <tr >
                                      <td>حذف</td>
                                      <td>التأمين</td>
                                      <td >نوع التصريح</td>
                                      <td >وصف العمل</td>
                                      <td>مكان العمل</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permits as $permit)
                                    <tr class="list-group-item-secondary">
                                    <td>
                                    <form method="post" action="{{route('permits.destroy' , $permit->id)}}"
                                    id="permit-destroy{{$permit->id}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="حذف"  onclick="observationDelete(this)">
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

                                </tbody>

                              </table>
                              @include('includes.create-permit')
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