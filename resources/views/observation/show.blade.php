@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">تفاصيل الملاحظة</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
               <div class= "observation">
                    <table class="table" >
                    
                    <tbody >
                        <tr>
                            <td >{{$observation->title}}</td>
                            <td>وصف مختصر</td>
                            
                        </tr>
                        <tr>
                            
                            <td>{{$observation->desc}}</td>
                            <td>الوصف</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->source}}</td>
                            <td>مصدر الملاحظة</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->observer}}</td>
                            <td>الاسم</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->recommended_corrective_action}}</td>
                            <td>الاجراء التصحيحي المقترح</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->priority}}</td>
                            <td>الاولوية</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->responsible_party}}</td>
                            <td>الجهة المسئولة</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->status}}</td>
                            <td>الحالة</td>
                        </tr>
                        <tr>
                            
                            <td>{{$observation->corrective_action_date}}</td>
                            <td>تاريخ الاجراء</td>
                        </tr>
                        <tr>
                           
                            <td>{{$observation->corrective_action_taken}}</td>
                            <td>الاجراء التصحيحي المتخذ</td>
                        </tr>
                        
                    </tbody>
                    </table>

                
                        <img class="img-responsive" src="http://via.placeholder.com/650x150">
                    
                    </div>
                   

                   <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            
                    <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    @endsection
