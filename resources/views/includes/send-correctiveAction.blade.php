 <!--Edit Comment Button-->
 <div  >
                        
                        <a  href="" class="btn btn-primary btn-lg" data-target="#modalEditComment{{$observation->id}}" data-toggle="modal" role="button">ارسال الاجراء التصحيحي</a>
                        &nbsp;&nbsp;

                        <!--Edit Comment Modal-->
                        <div class="modal " id="modalEditComment{{$observation->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">الاجراء التصحيحي</h4>
                                        <form action="{{route('observations.correctiveAction', $observation->id)}}" method="post">
                                            @csrf
                                            @method('patch')
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        

                                        
                        
                                <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                              <select class="md-textarea form-control" name="status" id="exampleFormControlSelect1">
                                <option>لم يتم الحل </option>
                                <option>جاري الحل</option>
                                <option> تم الحل</option>
                                
                              </select>

                              <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                              <textarea class="md-textarea form-control" class="md-textarea form-control" name="CAtaken" id="exampleFormControlTextarea1" rows="3"></textarea>

                              <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                              <input class="form-control" name="date" type="date" ></input>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info btn-sm">ارسال </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>