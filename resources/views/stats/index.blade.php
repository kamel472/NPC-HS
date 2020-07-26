@extends('layout')

@section('body')
<div>
<div id="page-inner" style="text-align: right;">

    <form action="{{route('stats.index')}}" method="get" class="form-inline">

        <input type="text"class="form-control" name="date" placeholder="السنة/الشهر">&nbsp;
        <input type="submit" class="btn btn-primary">
        </form>

        <h3>احصائيات السلامة عن شهر {{$date}}</h3>
            <br><br>

<div class="row">
                <div class="col-md-6">

                    
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            مؤشرات الأداء الايجابية 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        
                                        <tr>
                                            <th>  التراكمي</th>
                                            <th> الشهر الحالي</th>
                                            <th> الوصف</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stats as $stat)
                                        <tr>
                                            <td>{{$stat->sumTraining}}</td>
                                            <td>{{$stat->training}}</td>
                                            <th>الدورات التدريبية</th>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            
                                            <td>{{$stat->sumInspections}}</td>
                                            <td>{{$stat->inspections}}</td>
                                            <th>تفتيشات السلامة</th>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>{{$stat->sumObservations}}</td>
                                            <td>{{$stat->observations}}</td>
                                            <th>ملاحظات السلامة</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>{{$stat->sumMeetings}}</td>
                                            <td>{{$stat->meetings}}</td>
                                            <th>اجتماعات السلامة</th>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>{{$stat->sumDrills}}</td>
                                            <td>{{$stat->drills}}</td>
                                            <th>التجارب الوهمية</th>
                                            <td>5</td>
                                        </tr>
                                       @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-md-6">
                     <!--   Basic Table  -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            مؤشرات الأداء السلبية 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>  التراكمي</th>
                                            <th> الشهر الحالي</th>
                                            <th> الوصف</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stats as $stat)
                                        <tr>
                                            <td>{{$stat->sumFatalities}}</td>
                                            <td>{{$stat->fatalities}}</td>
                                            <th> الوفيات</th>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>{{$stat->sumLostTime}}</td>
                                            <td>{{$stat->lostTime}}</td>
                                            <th> اصابات الوقت الضائع</th>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>{{$stat->sumDamage}}</td>
                                            <td>{{$stat->damage}}</td>
                                            <th> حوادث تلف معدات</th>
                                            <td>3</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>{{$stat->sumFire}}</td>
                                            <td>{{$stat->fire}}</td>
                                            <th> حوادث حريق</th>
                                            <td>4</td>
                                        </tr>

                                        <tr>
                                            <td>{{$stat->sumNearMiss}}</td>
                                            <td>{{$stat->nearMiss}}</td>
                                            <th> حوادث وشيكة</th>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>{{$stat->sumFire}}</td>
                                            <td>{{$stat->firstAid}}</td>
                                            <th> حوادث اسعافات اولية</th>
                                            <td>6</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>
</div>
                    @endsection