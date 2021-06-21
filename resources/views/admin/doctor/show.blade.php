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
                        <span>@lang('admin.mobile') : </span> <span>{{$doctor->mobile}}</span>
                    </li>

                    <li>
                        <span>@lang('admin.Age') : </span> <span>{{$doctor->age()}}</span>
                    </li>

                    <li>
                        <span>@lang('admin.Gender') : </span> <span>{{$doctor->gender == '0' ? trans('admin.Male') : trans('admin.Female')}}</span>
                    </li>

                    <li>
                        @if (direction() == 'rtl')
                            <span>@lang('admin.doctorDegrees') : </span> <span>{{$doctor->degree['name_ar']}}</span>
                        @else
                            <span>@lang('admin.doctorDegrees') : </span> <span>{{$doctor->degree['name_en']}}</span>
                        @endif
                    </li>

                    <li>
                        <span>@lang('admin.Session Time') : </span> <span>{{$doctor->session_time}}</span>
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

<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('admin.Doctor Address')</h3>
    </div>
    <div class="card-body">


        @if(count($doctor->addresses) > 0)
            <table class="table table-bordered table-hover datatable-highlight">
                <thead>
                    <tr>
                        <th>@lang('admin.Id')</th>
                        <th> @lang('admin.address_en') </th>
                        <th> @lang('admin.address_ar') </th>
                        <th> @lang('admin.District') </th>
                        <th> @lang('admin.Fees') </th>
                        <th> @lang('admin.time_table') </th>
                        <th> @lang('admin.Actions') </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($doctor->addresses as $address)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$address->address_en}}</td>
                        <td>{{$address->address_ar}}</td>

                        <td>
                            @if (direction() == 'rtl')
                            {{$address->district['name_ar']}}
                            @else
                            {{$address->district['name_en']}}
                            @endif
                            </td>
                            <td>{{$address->fees}}</td>
                            <td>
                                <form style="display: inline;" action="{{aurl('doctor_times')}}">
                                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                                    <input type="hidden" name="doctor_address_id" value="{{ $address->id }}">
                                    <button class="btn btn-info btn-sm">Show<i class="fa fa-eye" style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #f8f8f8;"></i></button>
                                </form>
                            </td>

                            <td>

                                {{-- edit doctor Address --}}
                                <a href="{{route('editDoctorAddress',$address->id) }}" >
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-alt" style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #FFC107;"></i></span>
                                </a>


                                <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('deleteDoctorAddress',$address->id)}}"  method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class='label label-danger label-rounded label-icon' type='submit' value='submit' style="border:none;background:none">
                                        <i class='fa fa-trash' style="opacity: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color: #F44336;"> </i>
                                    </button>
                                </form>
                            </a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        @else
            <tr>
                <td>
                    <p class="text-center">
                        @lang('admin.no addresses to show')
                    </p>
                </td>
            </tr>
        @endif

            <div class="mt-3">
                <a href="{{ route('addDoctorAddress',$doctor->id) }}" class="btn btn-primary">@lang('admin.Add Address')</a>
            </div>
        </div>
    </div>



@endsection
