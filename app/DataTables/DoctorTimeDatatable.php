<?php

namespace App\DataTables;

use App\Models\DoctorTime;
use Yajra\DataTables\Services\DataTable;

class DoctorTimeDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        if($this->level == 'doctor'){
            return datatables($query)
            ->addColumn('checkbox', 'doctor.doctor_times.btn.checkbox')
            ->addColumn('actions', 'doctor.doctor_times.btn.actions')
            ->rawColumns([
                'checkbox',
                'actions',
            ])->editColumn('created_at', function ($request) {
                return $request->created_at->toDayDateTimeString();
            })
            ->editColumn('updated_at', function ($request) {
                return $request->updated_at->toDayDateTimeString();
            });
        }
        return datatables($query)
            ->addColumn('checkbox', 'admin.doctor_times.btn.checkbox')
            ->addColumn('actions', 'admin.doctor_times.btn.actions')
            ->rawColumns([
                'checkbox',
                'actions',
            ])->editColumn('created_at', function ($request) {
                return $request->created_at->toDayDateTimeString();
            })
            ->editColumn('updated_at', function ($request) {
                return $request->updated_at->toDayDateTimeString();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\DoctorTime $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        if($this->level == 'doctor'){

            return DoctorTime::query()->where('doctor_id', doctor()->user()->id)->with('doctor')->where('doctor_id', $this->doctor_id)->where('doctor_address_id', $this->doctor_address_id);
        }
        return DoctorTime::query()->with('doctor')->where('doctor_id', $this->doctor_id)->where('doctor_address_id', $this->doctor_address_id);

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([
                        'dom'        => 'Blfrtip',
                        'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, 100]],
                        'buttons'    => [
                            ['text'   => '<i class="fa fa-plus" style="margin-right:2px;"></i> '.trans('admin.add'), 'className' => 'btn btn-info ajax-create'],
                            ['text'   => '<i class="fa fa-trash"></i>', 'className' => 'btn btn-danger delBtn'],
                            ['extend' => 'csv', 'className' => 'btn btn-info', 'text' => '<i class="fas fa-file-csv" style="margin:0 2px;"></i> '.trans('admin.ex_csv')],
                            ['extend' => 'excel', 'className' => 'btn btn-success', 'text' => '<i class="fas fa-file-excel" style="margin:0 2px;"></i> '.trans('admin.ex_excel')],
                            ['extend' => 'pdfHtml5', 'className' => 'btn btn-warning', 'text' => '<i class="fas fa-file-pdf" style="margin:0 2px;"></i> '.trans('admin.ex_pdf')],
                            ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fas fa-print"></i>'],
                            ['extend' => 'reload', 'className' => 'btn btn-default', 'text' => '<i class="fas fa-sync-alt"></i>'],
                        ],
                        'initComplete' => ' function () {
                            this.api().columns([1,2,3,4,5]).every(function () {
                                var column = this;
                                var input = document.createElement("input");
                                $(input).appendTo($(column.footer()).empty())
                                .on("keyup", function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }',
                        'language'   => datatableLang(),
                        'responsive' => true,
                        'autoWidth'  => true,

                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {

        return [
            [
				'name'          => 'checkbox',
				'data'          => 'checkbox',
				'title'         => '<input type="checkbox" class="check_all" onclick="check_all()" style="width:20px"/>',
				'exportable'    => false,
				'printable'     => false,
				'orderable'     => false,
                'searchable'    => false,
			], [
				'name'  => 'id',
				'data'  => 'id',
				'title' => trans('admin.admin_id'),
			], [
				'name'  => 'day',
				'data'  => 'day',
				'title' => trans('admin.day'),
			],[
				'name'  => 'from',
				'data'  => 'from',
				'title' => trans('admin.from'),
			],[
				'name'  => 'to',
				'data'  => 'to',
				'title' => trans('admin.to'),
			],[
				'name'  => 'fees',
				'data'  => 'fees',
				'title' => trans('admin.fees'),
			],[
				'name'  => 'doctor_id',
				'data'  => 'doctor.name_'. session('lang'),
				'title' => trans('admin.doctor_id'),
			],[
				'name'  => 'session_number',
				'data'  => 'session_number',
				'title' => trans('admin.session_number'),
			], [
				'name'  => 'created_at',
				'data'  => 'created_at',
				'title' => trans('admin.created_at'),
			], [
				'name'  => 'updated_at',
				'data'  => 'updated_at',
				'title' => trans('admin.updated_at'),
			], [
				'name'       => 'actions',
				'data'       => 'actions',
				'title'      => trans('admin.actions'),
				'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
			],

		];
    }

    protected function filename()
    {
        return 'DoctorTime_' . date('YmdHis');
    }
}
