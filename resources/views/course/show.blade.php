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

                        <h1 class="page-head-line">  {{$course->title}}</h1>
                        

                       
  
  <div class="row">
    <div class="col-sm">
        
    <video   controls>
                            <source src="{{ asset('storage/videos/'.$course->video) }}" type="video/mp4">
                        </video>
    </div>
    <div class="col-sm">
    <h3 style="text-align:right;">{{$course->desc}} </h3>
    </div>
  </div>


                        

                    </div>
                </div>
                
                <!-- /. ROW  -->
                 
                    <div>
                        

                            
                  
                </div>
              
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection