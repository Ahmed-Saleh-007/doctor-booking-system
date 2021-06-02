@extends('admin.index')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.box-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('settings'), 'files' => true]) !!}
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('sitename_en', trans('admin.sitename_en')) !!}
                {!! Form::text('sitename_en', setting()->sitename_en, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('sitename_ar', trans('admin.sitename_ar')) !!}
                {!! Form::text('sitename_ar', setting()->sitename_ar, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('email', trans('admin.email')) !!}
                {!! Form::email('email', setting()->email, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('logo', trans('admin.logo')) !!}
                {!! Form::file('logo', ['class' => 'form-control']) !!}
                @if (!empty(setting()->logo))
                <img src="{{ url('storage/' . setting()->logo) }}" alt="" style="width:100px; height:100px; margin-top:10px;">
                @endif
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('icon', trans('admin.icon')) !!}
                {!! Form::file('icon', ['class' => 'form-control']) !!}
                @if (!empty(setting()->icon))
                <img src="{{ url('storage/' . setting()->icon) }}" alt="" style="width:100px; height:100px; margin-top:10px;">
                @endif
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('description', trans('admin.description')) !!}
                {!! Form::textarea('description', setting()->description, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('keywords', trans('admin.keywords')) !!}
                {!! Form::textarea('keywords', setting()->keywords, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('main_lang', trans('admin.main_lang')) !!}
                {!! Form::select('main_lang', ['ar' => trans('admin.ar'),'en' => trans('admin.en')], setting()->main_lang, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('status', trans('admin.status')) !!}
                {!! Form::select('status', ['open' => trans('admin.open'), 'close' => trans('admin.close')], setting()->status, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-12">
                {!! Form::label('maintenance_message',trans('admin.maintenance_message')) !!}
                {!! Form::textarea('maintenance_message',setting()->maintenance_message, ['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary', 'style' => 'margin:0 15px;']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
