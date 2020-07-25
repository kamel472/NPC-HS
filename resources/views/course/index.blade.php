@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
            <div>
                <div id="page-inner" style="background-image: url('{{asset('storage/images/nice.jpg')}}');">
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
                  
                            <a  href="{{route('courses.create')}}" class="btn btn-primary btn-lg"  role="button"> اضافة كورس</a>
                            <h1 class="page-head-line"> دورات توعية</h1>
                            <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
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
                  <tr>
                  <td>تعديل</td>
                  <td>حذف</td>
                  <td>وصف</td>
                  <td>وصف مختصر</td>

                  </tr>
                </thead>
                <tbody>
                   
                  <tr class="list-group-item-success">
@foreach ($courses as $course)
                  <td>
                      <form method="post" action="" id="observation-destroy">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حذف" onclick="observationDelete(this)"> 
                      </form>
                    </td>
                  <td>
                      <form method="post" action="" id="observation-destroy">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حذف" onclick="observationDelete(this)"> 
                      </form>
                    </td>

                    <td>{{$course->desc}}</td> 
                    <td><a href="{{route('courses.show' , $course->id)}}">{{$course->title}}</a></td> 
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