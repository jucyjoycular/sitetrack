<?php

namespace App\DataTables;

use App\Models\TicketUserPurchase;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CarVoteDataTableWinner extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('created_at', function(TicketUserPurchase $model) {
                return $model->created_at->format('Y-m-d H A')." <span class='font-weight-bold'> ( ".$model->created_at->diffForHumans()." ) </span>";
            })
            ->rawColumns(['action', 'photo', 'status', 'created_at'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(TicketUserPurchase $model): QueryBuilder
    {
        return $model->newQuery()->whereHas('carVote', function($query){
            $query->where('id', $this->id);
        })->with('user')->orderBy('created_at', 'desc');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('carvotewinner-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->searching(false)
                    ->orderBy(1);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('user.name')->title('User name')->orderAble(false)->searchAble(false), 
            Column::make('user.phone_number')->title('User phone number')->orderAble(false)->searchAble(false), 
            Column::make('number_5d')->orderAble(false)->searchAble(false),
            Column::make('created_at')->title('Date Buy'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'CarVoteWinner_' . date('YmdHis');
    }
}
