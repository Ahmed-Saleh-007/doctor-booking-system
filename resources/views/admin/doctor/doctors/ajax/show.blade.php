@extends('admin.index')
@section('content')

@if (direction() == 'rtl')
<style>
    @media (min-width:768px) {
        .doctor-info {
            border-left: 2px dashed #ccc;
        }
    }
</style>
@else
<style>
    @media (min-width:768px) {
        .doctor-info {
            border-right: 2px dashed #ccc;
        }
    }
</style>
@endif
<style>
    .doctor-info ul li {
        margin: 15px 0;
    }
    .doctor-info ul li span:first-child {
        display: inline-block;
        width: 40%;
    }
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('admin.mainInfo')</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12 doctor-info">
                <ul class="list-unstyled my-4">
                    <li>
                        @if (direction() == 'rtl')
                            <span>@lang('admin.Doctor Name') :</span> <span>{{$doctor->name_ar}}</span>
                        @else
                        <span>@lang('admin.Doctor Name') :</span> <span>{{$doctor->name_en}}</span>
                        @endif
                    </li>
                    <li>
                        <span>@lang('admin.Email') : </span> <span>{{$doctor->email}}</span>
                    </li>
                    
                    <li>
                        <span>@lang('admin.Gender') : </span> <span>{{$doctor->gender == '0' ? trans('admin.Male') : trans('admin.Female')}}</span>
                    </li>
                    <li>
                        @if (direction() == 'rtl')
                            <span>@lang('admin.specialist') : </span> <span>{{$doctor->specialist['ar_name']}}</span>
                        @else
                            <span>@lang('admin.specialist') : </span> <span>{{$doctor->specialist['en_name']}}</span>
                        @endif
                    </li>
                    <li>
                        @if (direction() == 'rtl')
                            <span>@lang('admin.doctorDegrees') : </span> <span>{{$doctor->degree['name_ar']}}</span>
                        @else
                            <span>@lang('admin.doctorDegrees') : </span> <span>{{$doctor->degree['name_en']}}</span>
                        @endif
                    </li>                   
                    <li>
                        <a href="{{ route('doctors.edit',$doctor->id) }}" class="btn btn-primary">@lang('admin.Edit Info')</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-md-6 col-sm-12 up_img">
                <div class="form-group">
                    <div class="avatar-upload">
                        <div class="avatar-preview">
                            @if(!empty($doctor->image))
                            <div id="imagePreview" style="background-image: url({{ Storage::url('images/' . $doctor->image) }});"></div>
                            @else
                            <div id="imagePreview" style="background-image: url({{ url('/design/adminlte/dist/img/avatar5.png')}});"></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
@endsection