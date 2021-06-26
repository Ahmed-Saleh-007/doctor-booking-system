<?php

namespace App\DataTables;

use App\Models\Book;
use Yajra\DataTables\Services\DataTable;

class BookDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', 'admin.districts.btn.checkbox')
            ->addColumn('actions', 'admin.districts.btn.actions')
            ->rawColumns([
                'checkbox',
                'actions',
            ])
            ->editColumn('created_at', function ($request) {
                return $request->created_at->toDayDateTimeString();
            })
            ->editColumn('updated_at', function ($request) {
                return $request->updated_at->toDayDateTimeString();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Book $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Book::query()->with('doctor')->with('address')->with('patient');
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
                            this.api().columns([1,2,3,4,5,6,7]).every(function () {
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
				'name'  => 'doctor_id',
				'data'  => 'doctor.name_' . session('lang'),
				'title' => trans('admin.doctor'),
			], [
				'name'  => 'address_id',
				'data'  => 'address.address_' . session('lang'),
				'title' => trans('admin.address'),
			], [
				'name'  => 'patient_id',
				'data'  => 'patient.name_' . session('lang'),
				'title' => trans('admin.patient'),
			], [
				'name'  => 'day',
				'data'  => 'day',
				'title' => trans('admin.day'),
			], [
				'name'  => 'fees',
				'data'  => 'fees',
				'title' => trans('admin.fees'),
			], [
				'name'  => 'confirm',
				'data'  => 'confirm',
				'title' => trans('admin.confirmed'),
			], [
				'name'  => 'date',
				'data'  => 'date',
				'title' => trans('admin.date'),
			], [
				'name'  => 'time',
				'data'  => 'time',
				'title' => trans('admin.time'),
			]
            , [
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

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Book_' . date('YmdHis');
    }
}
