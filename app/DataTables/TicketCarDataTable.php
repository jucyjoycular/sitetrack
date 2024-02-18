<?php

namespace App\DataTables;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use DB;

class TicketCarDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Project $model){
                return view('admin.pages.ticket.car.action', compact('model'));
            })
            ->editColumn('photo', function(Project $model) {
                return '<img src="/files/' .base64_encode($model->photo) .'"/>';
            })
            ->editColumn('price', function(Project $model) {
                return $model->ticketCar ? 'RM '.$model->ticketCar->price : '-';
            })
            ->editColumn('created_at', function(Project $model) {
                return $model->created_at->format('Y-m-d')." <span class='font-weight-bold'> ( ".$model->created_at->diffForHumans()." ) </span>";
            })
            ->editColumn('purchased_ticket', function(Project $model) {
                return 0;
            })
            ->editColumn('remainings_ticket', function(Project $model) {
                return 0;
            })
            ->editColumn('qty', function(Project $model) {
                return $model->ticketCar->qty ?? '-';
            })
            ->editColumn('draw_date', function(Project $model) {
                return $model->ticketCar ? $model->ticketCar->draw_date.' '.$model->ticketCar->draw_time : '-';
            })
            ->addColumn('status', function (Project $model){
                if ($model->created_at->addDays(180) >= now()) {
                    return "<h5><span class='badge badge-success p-2'>in List</span></h5>";
                }else{
                    return "<h5><span class='badge badge-danger p-2'>Not in List</span></h5>";
                }
            })
            ->rawColumns(['action', 'photo', 'status', 'created_at'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Project $model): QueryBuilder
    {
        $voted = $model->newQuery()
                      ->withCount('carVoteUser')
                      ->get();

        $voted = $voted->filter(function ($value, $key) {
            return $value->car_vote_user_count ==  $value->target_vote;
        });

        if (count($voted) == 0) {
            return $model->newQuery()->whereYear('created_at', 1998);
        }

        // dd($voted->toQuery());
        return $voted->toQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('carTicket-table')
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
            Column::make('name'),
            Column::make('photo')->orderAble(false)->searchAble(false),
            Column::make('price')->orderAble(false)->searchAble(false),
            Column::make('vote_progress')->title('Vote Progress (%)')->orderAble(false)->searchAble(false),
            Column::make('purchased_ticket')->title('Purchased Ticket')->orderAble(false)->searchAble(false),
            Column::make('remainings_ticket')->title('Remainings Ticket')->orderAble(false)->searchAble(false),
            Column::make('qty')->title('Total Ticket')->orderAble(false)->searchAble(false),
            Column::make('draw_date')->title('Draw Time')->orderAble(false)->searchAble(false),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'CarVote_' . date('YmdHis');
    }
}
