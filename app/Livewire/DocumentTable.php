<?php

namespace App\Livewire;

use App\Models\Document;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class DocumentTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        if (auth()->user()->role_id == 1) {
            return Document::query();
        }
        else {
            return Document::query()->where('user_id',auth()->user()->id);
        }

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('path')
            ->add('course_id')
            ->add('ntalevel_id')
            ->add('semister_id')
            ->add('course_name', function(Document $model) {
                return $model->course->name; // Assuming the Course model has a 'name' attribute
            })
            ->add('ntalevel_name', function(Document $model) {
                return $model->ntalevel->name; // Assuming the Course model has a 'name' attribute
            })

            ->add('title')
            ->add('user_id')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Path', 'path')
                ->sortable()
                ->searchable(),

            Column::make('Course ', 'course_name'),
            Column::make('Ntalevel ', 'ntalevel_name'),
            Column::make('Semister ', 'semister_id')
                ->sortable()
                ->searchable(),

            Column::make('Title', 'title')
                ->sortable()
                ->searchable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        Document::find($rowId)->delete();

    }


    public function actions(Document $row): array
    {
        return [
            Button::add('edit')
                ->slot('Delete')
                ->id()
                ->class('bg-red-500 p-2 rounded text-white')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
