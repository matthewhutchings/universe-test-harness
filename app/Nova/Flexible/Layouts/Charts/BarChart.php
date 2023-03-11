<?php

namespace App\Nova\Flexible\Layouts\Charts;

use App\Models\UniverseViews;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class BarChart extends Layout
{
      /**
       * The layout's unique identifier
       *
       * @var string
       */
      protected $name = 'Bar Chart';

      /**
       * The displayed title
       *
       * @var string
       */
      protected $title = 'Bar Chart';

      /**
       * Get the fields displayed by the layout.
       *
       * @return array
       */
      public function fields()
      {
            return [
                  Text::make('Name', 'name')->rules('required'),
                  Select::make('Size')->options([
                        // BY 1
                        '1/1' => ['label' => 'Full Screen', 'group' => ''],
                        // BY 2
                        '1/2' => ['label' => '1/2', 'group' => 'Grid'],
                        // BY 3
                        '1/3' => ['label' => '1/3', 'group' => 'Grid'],
                        '2/3' => ['label' => '2/3', 'group' => 'Grid'],

                        // BY 4
                        '1/4' => ['label' => '1/4', 'group' => 'Grid'],
                        '3/4' => ['label' => '3/4', 'group' => 'Grid'],

                        // BY 6
                        '1/6' => ['label' => '1/6', 'group' => 'Grid'],
                        '3/6' => ['label' => '3/6', 'group' => 'Grid'],

                        '20%' => ['label' => '20%', 'group' => 'Percent'],
                        '40%' => ['label' => '40%', 'group' => 'Percent'],
                        '60%' => ['label' => '60%', 'group' => 'Percent'],
                        '80%' => ['label' => '80%', 'group' => 'Percent'],


                  ])->displayUsingLabels(),

                  Select::make('Data Source')->hideFromIndex()->options(function () {
                        return UniverseViews::all()->pluck('name', 'id');
                  })->displayUsingLabels(),



            ];
      }
}