<?php

namespace App\Nova;

use App\Models\UniverseQueries;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Outl1ne\NovaSimpleRepeatable\SimpleRepeatable;
use Whitecube\NovaFlexibleContent\Flexible;

class UniverseViews extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\UniverseViews>
     */
    public static $model = \App\Models\UniverseViews::class;

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
            Select::make('Field Name')->hideFromIndex()->options(function () {
                return UniverseQueries::all()->pluck('name', 'id');
            })->displayUsingLabels(),
        ];
    }



    protected function componentFields()
    {
        return [
            Flexible::make('Components')
                ->fullWidth()
                ->menu(
                    'flexible-search-menu',
                    [
                        'selectLabel' => 'Press enter to select',
                        // the property on the layout entry
                        'label' => 'title',
                        // 'top', 'bottom', 'auto'
                        'openDirection' => 'bottom',
                    ]
                )
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\BarChart::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\LineChart::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\PieChart::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\SliceChart::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\WordCloud::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\Circle::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\CirclePacking::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Charts\Gauge::class)
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
