<?php

namespace App\DataTables;

use App\Models\CashVote;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CashVoteDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (CashVote $model){
                return view('admin.pages.vote.cash.action', compact('model'));
            })
            ->editColumn('photo', function(CashVote $model) {
                return '<img src="/files/' .base64_encode($model->photo) .'"/>';
            })
            ->editColumn('closing_date', function(CashVote $model) {
                return $model->closing_date ?? 'Not set';
            })
            ->editColumn('draw_date', function(CashVote $model) {
                return $model->draw_date ?? 'Not set';
            })
            ->editColumn('vote_progress', function(CashVote $model) {
                if ($model->vote_progress == 100) {
                    return "<h5><span class='badge badge-success p-2'>".$model->vote_progress."</span></h5>";
                }else if($model->vote_progress >= 50){
                    return "<h5><span class='badge badge-warning p-2'>".$model->vote_progress."</span></h5>";
                }else{
                    return "<h5><span class='badge badge-danger p-2'>".$model->vote_progress."</span></h5>";
                }
            })
            ->editColumn('purchase_progress', function(CashVote $model) {
                if ($model->purchase_progress >= 100) {
                    return "<h5><span class='badge badge-success p-2'>".$model->purchase_progress."</span></h5>";
                }else if($model->purchase_progress >= 50){
                    return "<h5><span class='badge badge-warning p-2'>".$model->purchase_progress."</span></h5>";
                }else{
                    return "<h5><span class='badge badge-danger p-2'>".$model->purchase_progress."</span></h5>";
                }
            })
            ->addColumn('status', function (CashVote $model){
                if ($model->status == 'in List') {
                    return "<h5><span class='badge badge-success p-2'>in List</span></h5>";
                }else{
                    return "<h5><span class='badge badge-danger p-2'>Not in List</span></h5>";
                }
            })
            ->rawColumns(['action', 'photo', 'status',  'vote_progress', 'purchase_progress'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(CashVote $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('cashvote-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('reward_title'),
            Column::make('sub_title'),
            Column::make('current_vote')->orderAble(false)->searchAble(false),
            Column::make('target_vote'),
            Column::make('vote_progress')->title('Vote Progress (%)')->orderAble(false)->searchAble(false),
            Column::make('target_purchase'),
            Column::make('purchase_progress')->title('Purchase Progress (%)')->orderAble(false)->searchAble(false),
            Column::make('closing_date'),
            Column::make('draw_date'),
            Column::make('status'),
            Column::make('photo'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'CashVote_' . date('YmdHis');
    }
}
