@extends('layout')

@section('body')

      <div >
          <div id="page-inner" style="background-image: url('{{asset('storage/images/hse.jpg')}}');">
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
                  <h1 class="page-head-line"> اضافة كورس</h1>
                  <h1 class="page-subhead-line"></h1>
                  <form method="POST" action="{{route('courses.store')}}"  enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">وصف مختصر  </label>
                        <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">وصف </label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      
                      <div class="form-group" >
                          <label for="exampleFormControlTextarea1"> الفيديو </label>
                          <input type="file" name="video" class="form-control-file" id="exampleFormControlFile1" enctype="multipart/form-data">
                      </div>
                      <br><br>
                      <input type="submit" class="btn btn-primary btn-lg" value="رفع">
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