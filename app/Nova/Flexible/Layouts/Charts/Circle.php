<?php

namespace App\Nova\Flexible\Layouts\Charts;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Circle extends Layout
{
      /**
       * The layout's unique identifier
       *
       * @var string
       */
      protected $name = 'circle';

      /**
       * The displayed title
       *
       * @var string
       */
      protected $title = 'Circles';

      /**
       * Get the fields displayed by the layout.
       *
       * @return array
       */
      public function fields()
      {
            return [
                  Boolean::make('Required'),
                  Text::make('Field Name', 'data_field_name')->rules('required'),

                  Text::make('Current Homeowner Question', 'homeowner_text'),
                  Text::make('Current Address Question', 'current_address_text'),
                  Text::make('Current Address Duration Question', 'current_duration_text'),

                  Text::make('Previous Homeowner Question', 'previous_address_text'),
                  Text::make('Previous Address Question', 'previous_homeowner_text'),


                  Text::make('Placeholder', 'placeholder'),
                  Text::make('Loop Text', 'paragraph'),
                  Hidden::make('type')->withMeta(['value' => 'input']),
            ];
      }
}
