@extends('layout')

@section('body')
<!-- /. NAV TOP  -->


<!-- /. NAV SIDE  -->
<div>
  <div id="page-inner">
    @include('includes.create-observation')
    <br><br>
   @if (auth()->user()->name == 'safety_admin' || auth()->user()->name == 'chairman' )
    <div class="container">
      <div class="row">
        <div>
          <div class="btn-group">
            <a type="button" href="observations" class="btn btn-secondary btn-lg">
            كل الملاحظات
            </a>
          </div>
        </div>

        <div>
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
        </div>

        <div>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            المصدر
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="observations?source=observation">ملاحظة</a>
              <a class="dropdown-item" href="observations?source=inspection">تفتيش</a>
              <a class="dropdown-item" href="observations?source=audit">تدقيق</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  

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
      <h4 class="page-subhead-line"> </h4>
      <div>
      <!-- Table -->
      <div class= "observation">
        <table class="table">
        @if($observations->count()>0)
          <thead class="thead-dark">
            <tr>
              <th scope="col" ></th>
              <th scope="col" ></th>
              <th scope="col" ></th>
              <th scope="col" > الادارة المسئولة عن التنفيذ </th>
              <th scope="col" >في نطاق </th>
              <th scope="col" >المصدر</th>
              <th scope="col" >التاريخ</th>
              <th scope="col" >الملاحظة</th>
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

                @if (auth()->user()->admin == 1 && $observation->showSafety == 0)   
                <td></td>
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

                @elseif (auth()->user()->name == 'safety_admin') 

                @if ($observation->showChairman == 0) 
                  <td>
                    <form method="post" action="{{route('observations.chairmanVisible' , $observation->id)}}">
                      @csrf
                      @method('patch')
                      <input type="submit" class="btn btn-primary" value="اعتماد" > 
                    </form>
                  </td>
                @else
                <td></td>
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

                @else
                  <td></td>
                  <td></td>
                  <td></td>
                @endif

                <td>{{$observation->responsible_correction}} </td>
                <td>{{$observation->responsible_area}} </td>
                <td>{{$observation->source}} </td>
                <td>{{$observation->created_at}} </td>
                <td> <a href="{{route('observations.show' , $observation->id)}}">{{$observation->desc}}</a></td>
              </tr> 

            @endforeach
            @else

            <h2> لايوجد ملاحظات مسجلة</h2>
            @endif
          </tbody>
        </table>
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