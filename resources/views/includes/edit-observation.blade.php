 <!--Edit Observation Button-->
                        
    <a  href="" class="btn btn-primary " data-target="#modalEditComment{{$observation->id}}" data-toggle="modal" role="button">
    @if(auth()->user()->name == 'safety_admin')
    تعديل
    @elseif(auth()->user()->admin == 1)
    تعديل/ اعتماد
    @endif
    </a>
    &nbsp;&nbsp;

    <!--Edit Observation Modal-->
    <div class="modal " id="modalEditComment{{$observation->id}}" tabindex="-1" role="dialog " 
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"> تعديل</h4>
                    <form action="{{route('observations.update', $observation->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3" >

                    <label for="exampleFormControlTextarea1" >وصف تفصيلي</label>
                    <textarea class="form-control" name="desc" style="text-align:right" id="exampleFormControlTextarea1" rows="3">{{$observation->desc}}</textarea>

                    <label for="exampleFormControlSelect1">مصدر الملاحظة </label>
                    <select class="form-control" name="source"  id="exampleFormControlSelect1" >
                        <option>ملاحظة</option>
                        <option>تفتيش</option>
                        <option>تدقيق</option>
                    </select>

                    <label for="exampleFormControlSelect1">  في نطاق</label>
                    <select class="form-control" name="responsible_area" id="exampleFormControlSelect1">
                        <option>الادارة العامة للسلامة والصحة المهنية</option>
                        <option>الادارة العامة للاطفاء</option>
                        <option>الادارة العامة للبيئة</option>
                        <option>الادارة العامة للشئون الفنية</option>
                        <option>الادارة العامة للشئون الهندسية</option>
                        <option>الادارة العامة للخدمات الهندسية</option>
                        <option>الادارة العامة للهندسة المدنية</option>
                        <option>الادارة العامة للصيانة</option>
                        <option>الادارة العامة للكهرباء</option>
                        <option>الادارة العامة لتخطيط الانتاج</option>
                        <option>الادارة العامة للمرافق</option>
                        <option>الادارة العامة للمعالجة</option>
                        <option>الادارة العامة للالات الدوارة</option>
                        <option>الادارة العامة للتحكم الالي</option>
                        <option>الادارة العامة للحاسب الالي</option>
                        <option>الادارة العامة للمعمل الكيماوي</option>
                        <option>الادارة العامة للتفتيش الهندسي</option>
                        <option>الادارة العامة للشئون الطبية</option>
                        <option>الادارة العامة للشئون الادارية</option>
                        <option>الادارة العامة للامن</option>
                    </select>

                    <label for="exampleFormControlSelect1"> الادارة المسئولة عن التنفيذ</label>
                    <select class="form-control" name="responsible_correction" id="exampleFormControlSelect1">
                        <option>الادارة العامة للسلامة والصحة المهنية</option>
                        <option>الادارة العامة للاطفاء</option>
                        <option>الادارة العامة للبيئة</option>
                        <option>الادارة العامة للشئون الفنية</option>
                        <option>الادارة العامة للشئون الهندسية</option>
                        <option>الادارة العامة للخدمات الهندسية</option>
                        <option>الادارة العامة للهندسة المدنية</option>
                        <option>الادارة العامة للصيانة</option>
                        <option>الادارة العامة للكهرباء</option>
                        <option>الادارة العامة لتخطيط الانتاج</option>
                        <option>الادارة العامة للمرافق</option>
                        <option>الادارة العامة للمعالجة</option>
                        <option>الادارة العامة للالات الدوارة</option>
                        <option>الادارة العامة للتحكم الالي</option>
                        <option>الادارة العامة للحاسب الالي</option>
                        <option>الادارة العامة للمعمل الكيماوي</option>
                        <option>الادارة العامة للتفتيش الهندسي</option>
                        <option>الادارة العامة للشئون الطبية</option>
                        <option>الادارة العامة للشئون الادارية</option>
                        <option>الادارة العامة للامن</option>
                    </select>

                    <label for="exampleFormControlSelect1"> حالة الملاحظة</label>
                    <select class="md-textarea form-control" name="status" id="exampleFormControlSelect1">
                        <option>لم يتم الحل </option>
                        <option>جاري الحل</option>
                        <option> تم الحل</option>
                    </select>

                    <label for="exampleFormControlTextarea1"> الاجراء التصحيحي المتخذ</label>
                    <textarea class="md-textarea form-control" class="md-textarea form-control" name="CAtaken" 
                    id="exampleFormControlTextarea1" style="text-align:right" rows="3">{{$observation->corrective_action_taken}}</textarea>

                    <label for="exampleFormControlTextarea1"> تاريخ الاجراء التصحيحي</label>
                    <input class="form-control" name="date" type="date" value="{{$observation->corrective_action_date}}" ></input>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-info btn-sm"> ارسل لادارة السلامة والادارة المنفذة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>