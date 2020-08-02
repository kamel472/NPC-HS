

@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
            
                <div id="page-inner" style="background-image: url('{{ asset('storage/images/nice.jpg') }}');" >
              

                    <div class="row">
                        <div class="col-md-4">
                            <div class="main-box mb-red">
                                <a href="{{route('observations.create')}}">
                                    <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i>

                                    <h5>ارسل ملاحظة </h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-box mb-dull">
                                <a href="{{route('observations.index')}}">
                                    <i class="fa fa-bars fa-5x" aria-hidden="true"></i>
                                    <h5>سجل الملاحظات</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-box mb-pink">
                                <a href="{{route('permits.index')}}">
                                    <i class="fa fa-file-text-o fa-5x"></i>
                                    <h5>تصاريح العمل </h5>
                                </a>
                            </div>
                        </div>
    
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="main-box mb-red">
                                <a href="{{route('courses.index')}}">
                                    <i class="fa fa-file-video-o fa-5x" aria-hidden="true"></i>

                                    <h5> دورات التوعية </h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-box mb-dull">
                                <a href="{{route('stats.index')}}">
                                    <i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i>
                                    <h5> احصائيات السلامة</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-box mb-red">
                                <a href="">
                                    <i class="fas fa-user-injured fa-5x" aria-hidden="true"></i>

                                    <h5>اصابات العمل</h5>
                                </a>
                            </div>
                        </div>
    
                    </div>

                    

                    
  </div>
        <!-- /. PAGE WRAPPER  -->

    <!-- /. WRAPPER  -->
    @endsection