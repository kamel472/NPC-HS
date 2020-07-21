@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
       
        
        <!-- /. NAV SIDE  -->
        <div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <a  href="{{route('observations.create')}}" class="btn btn-primary btn-lg"  role="button">ارسال ملاحظة</a>
                        <h1 class="page-head-line">سجل  تتبع ملاحظات السلامة</h1>
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
          <tr >
            
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
            <form method="post" action="{{route('observations.destroy' , $observation->id)}}"
              id="observation-destroy">
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

    <script>

function observationDelete (form) {
        event.preventDefault();
                if(confirm('Do you really want to delete?')){
                document.getElementById('observation-destroy')
                .submit() }
    }
    </script>

    @endsection