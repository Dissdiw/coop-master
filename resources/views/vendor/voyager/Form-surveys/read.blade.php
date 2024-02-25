@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

    @can('edit', $dataTypeContent)
    <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
        <i class="glyphicon glyphicon-pencil"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
    </a>
    @endcan
    @can('delete', $dataTypeContent)
    @if($isSoftDeleted)
    <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
    </a>
    @else
    <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
    </a>
    @endif
    @endcan
    @can('browse', $dataTypeContent)
    <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
        <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
    </a>
    @endcan
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content read container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered" style="padding-bottom:5px;">
                <!-- start: form-sv -->
                <form>
                    <input type="hidden" name="id" value="{{ @$data->id ?? '' }}">
                    <div class="d-flex justify-content-center">
                        <div class="card border-0 shadow-sm col-10">
                            <div class="card-body">
                                <h5 class="fw-bold">ส่วนที่ 1: ข้อมูลพื้นฐาน</h5>
                                <div>
                                    <label for="year" class="col-form-label">ปีการศึกษา:</label>
                                    <select id="year" name="year" class="form-select">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">ชื่อ-นามสกุล:</label>
                                    <input type="text" class="form-control" name="name" id="name" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">รหัสประจำตัว:</label>
                                    <input type="text" class="form-control" id="" value="" readonly>
                                    <input type="hidden" name="studentid" value="">
                                </div>
                                <div class="form-group">
                                    <label for="rest" class="col-form-label">ที่พักขณะปฏิบัติงาน:</label>
                                    <textarea name="rest" id="rest" class="form-control" cols="30" rows="3" readonly>{{ $data->rest ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="company_name" class="col-form-label">สถานประกอบการ:</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" value="{{ $data->company_name ?? old('company_name') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">ที่อยู่:</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="3" readonly>{{ $data->address ?? old('address') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-form-label">ประเภทกิจการ / ธุรกิจ / ผลิตภัณฑ์:</label>
                                    <textarea name="type" id="type" class="form-control" cols="30" rows="3" readonly>{{ $data->type ?? old('type') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="employee_ammount" class="col-form-label mt-2">จำนวนพนักงานรวม:</label>
                                    <input type="number" name="employee_ammount" class="form-control" id="employee_ammount" value="{{ $data->employee_ammount ?? old('employee_ammount') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="week_ammount" class="col-form-label mt-2">จำนวนวันในการทำงานต่อสัปดาห์:</label>
                                    <input type="number" name="week_ammount" class="form-control" id="week_ammount" value="{{ $data->week_ammount ?? old('week_ammount') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="working_ammount" class="col-form-label mt-2">จำนวนชั่วโมงการทำงาน:</label>
                                    <div class="form-inline">
                                        <input type="number" name="working_ammount" id="working_ammount" class="form-control" value="{{ $data->working_ammount ?? old('working_ammount') }}" readonly>
                                        <span class="input-group-text" id="basic-addon2">ชั่วโมง/สัปดาห์</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="day_start" class="col-form-label mt-2">วัน:</label>
                                    <input type="text" name="day_start" class="form-control" id="day_start" value="{{ $data->day_start ?? old('day_start') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="day_end" class="col-form-label mt-2">ถึง:</label>
                                    <input type="text" name="day_end" class="form-control" id="day_end" value="{{ $data->day_end ?? old('day_end') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="job_position" class="col-form-label">ตำแหน่งงานที่นักศึกษาปฏิบัติ:</label>
                                    <input type="text" name="job_position" class="form-control" id="job_position" value="{{ $data->job_position ?? old('job_position') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="job_description" class="col-form-label">ลักษณะงานที่นักศึกษาปฏิบัติ:</label>
                                    <textarea name="job_description" id="job_description" class="form-control" cols="30" rows="3" readonly>{{ $data->job_description ?? old('job_description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mentor_name" class="col-form-label mt-2">ชื่อพี่เลี้ยงที่สถานประกอบการจัดให้ดูแลนักศึกษา:</label>
                                    <input type="text" name="mentor_name" class="form-control" id="mentor_name" value="{{ $data->mentor_name ?? old('mentor_name') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="mentor_phone" class="col-form-label mt-2">เบอร์โทรศัพท์:</label>
                                    <input type="text" name="mentor_phone" class="form-control" id="mentor_phone" value="{{ $data->mentor_phone ?? old('mentor_phone') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="mentor_position" class="col-form-label mt-2">ตำแหน่งพี่เลี้ยง:</label>
                                    <input type="text" class="form-control" name="mentor_position" id="mentor_position" value="{{ $data->mentor_position ?? old('mentor_position') }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="number_care" class="col-form-label mt-2">จำนวนนักศึกษาที่พี่เลี้ยงรับผิดชอบ:</label>
                                    <input type="number" name="number_care" class="form-control" id="number_care" value="{{ $data->number_care ?? old('number_care') }}" readonly>
                                </div>

                                <h5 class="fw-bold">ส่วนที่ 2: สวัสดิการที่ได้รับจากสถานประกอบการ</h5>

                                <label for="salary" class="col-form-label">ค่าตอบแทน:</label>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <input type="number" class="form-control income" aria-label="Text input with dropdown button" name="salary" value="{{ $data->salary ?? old('salary') }}" readonly>
                                        <div class="input-group-append">
                                            <select class="form-select" name="salary_type" required>
                                                <option>เลือก</option>
                                                <option value="day" {{ @$data->salary_type=='day' ? 'selected' : '' }}>บาท/วัน</option>
                                                <option value="month" {{ @$data->salary_type=='month' ? 'selected' : '' }}>บาท/เดือน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="rest_option" class="col-form-label">ที่พัก:</label>
                                    <div class="radio">
                                        <label class="form-check-label" for="inlineRadio1">
                                            <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio1" value="สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย" {{ @$data->rest_option == 'สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย' ? 'checked' : '' }}>
                                            สถานประกอบการมีให้ไม่เสียค่าใช้จ่าย
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="form-check-label" for="inlineRadio1">
                                            <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio2" value="สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย" {{ @$data->rest_option == 'สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย' ? 'checked' : '' }}>
                                            สถานประกอบการมีให้เเต่ต้องเสียค่าใช้จ่าย จำนวน:
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="form-check-label" for="inlineRadio1">
                                            <input class="form-check-input" type="radio" name="rest_option" id="inlineRadio3" value="นักศึกษารับผิดชอบค่าใช้จ่ายเอง" {{ @$data->rest_option == 'นักศึกษารับผิดชอบค่าใช้จ่ายเอง' ? 'checked' : '' }}>
                                            นักศึกษารับผิดชอบค่าใช้จ่ายเอง:
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <input type="munber" class="form-control" name="rent_ammount" id="rent_ammount" value="{{ $data->rent_ammount ?? old('rent_ammount') }}">
                                        <span class="input-group-text" id="rent_ammount">บาท/เดือน</span>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label for="is_shuttle" class="col-form-label">รถรับส่งไป-กลับระหว่างสถานประกอบการ ที่พัก หรือชุมชนใกล้เคียง:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_shuttle" id="bus1" value="1" {{ @$data->is_shuttle == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio1">มี</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_shuttle" id="bus2" value="0" {{ @$data->is_shuttle == '0' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio2">ไม่มี</label>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label for="benefit" class="col-form-label">สวัสดิการอื่น ๆ (ระบุ เช่น อาหาร ชุดทำงาน ประกันอุบัติเหตุ ฯลฯ):</label>
                                    <textarea name="benefit" id="benefit" class="form-control" cols="30" rows="3">{{ @$data->benefit ?? old('benefit') }}</textarea>
                                </div>

                                <div class="mt-2">
                                    <label for="gallery" class="col-form-label">ภาพถ่ายสถานประกอบการจำนวน 4 ภาพ:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end: form-sv -->
            </div>
        </div>
    </div>

</div>

{{-- Single delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

@section('javascript')
@if ($isModelTranslatable)
<script>
    $(document).ready(function() {
        $('.side-body').multilingual();
    });
</script>
@endif
<script>
    var deleteFormAction;
    $('.delete').on('click', function(e) {
        var form = $('#delete_form')[0];

        if (!deleteFormAction) {
            // Save form action initial value
            deleteFormAction = form.action;
        }

        form.action = deleteFormAction.match(/\/[0-9]+$/) ?
            deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
            deleteFormAction + '/' + $(this).data('id');

        $('#delete_modal').modal('show');
    });
</script>
@stop