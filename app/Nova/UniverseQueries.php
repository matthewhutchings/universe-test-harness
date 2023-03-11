<?php

namespace App\Nova;

use App\Nova\Flexible\Layouts\Queries\AndQuery;
use App\Nova\Flexible\Layouts\Queries\OrQuery;
use App\Nova\Flexible\Layouts\Queries\Query;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;

class UniverseQueries extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\UniverseQueries>
     */
    public static $model = \App\Models\UniverseQueries::class;

    public static $group = 'Universe';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->required(),
            Select::make('Model')->searchable()->required()->options([
                'App/Models/ExampleData' => 'App/Models/ExampleData'
            ])->displayUsingLabels(),
            Flexible::make('Filters')
                ->button('Add Query')
                ->addLayout(Query::class)
                ->addLayout(AndQuery::class)
                ->addLayout(OrQuery::class),
            Select::make('Group By', 'grouping')->hideFromIndex()->options(['Field 1', 'Field 2'])->displayUsingLabels(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
