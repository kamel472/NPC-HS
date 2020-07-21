@extends('layout')

@section('body')
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div >
            <div id="page-inner" style="background-image: url('{{ asset('storage/images/hse.jpg') }}');">
                
                <!-- /. ROW  -->
                
                    
                      
                   <!-- /. ROW  -->
                   <div class="form-style-5">
                        <h1 class="page-head-line">ارسال الاجراء التصحيحي</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                        <form method="POST" action="{{route('observations.update' , $observation->id)}}" >
                          @csrf
                          @method('patch')
                            <div class="form-group">
                              <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                              <select class="form-control" name="status" id="exampleFormControlSelect1">
                                <option>لم يتم الحل </option>
                                <option>جاري الحل</option>
                                <option> تم الحل</option>
                                
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                              <textarea class="form-control" name="CAtaken" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                              <input class="form-control" name="date" type="date" ></input>
                            </div>
                              <br><br>
                              <input type="submit"  value="ارسال">
                              
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
