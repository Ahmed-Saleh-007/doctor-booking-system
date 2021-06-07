
<div style="display:flex">
  <a href="{{ route('doctors.show',$id) }}" class=""><i class="fa fa-eye" style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #080;"></i></a>

  <a href="{{ route('doctors.edit',$id) }}" class=""><i class="fa fa-pencil-alt" style="opacity: 0.9;font-size: 16px;margin: 0 5px;color: #FFC107;"></i></a>

  <!-- Trigger the modal with a button -->
  <a class="" data-toggle="modal" data-target="#del_admin{{ $id }}" style="cursor: pointer;"><i class="fa fa-trash" style="opacity: 0.9;font-size: 16px;margin: 0 5px;margin: 0 5px;color: #F44336;"></i></a>

</div>
<!-- Modal -->
<div id="del_admin{{ $id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      {!! Form::open(['route'=>['doctors.destroy',$id], 'method' => 'delete']) !!}
      <div class="modal-body">
        <h4>{{ trans('admin.delete_this', ['name' => $name_en]) }}</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.no') }}</button>
        {!! Form::submit(trans('admin.yes'), ['class' => 'btn btn-danger']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
