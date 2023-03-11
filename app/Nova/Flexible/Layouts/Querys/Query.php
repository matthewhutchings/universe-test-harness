<?php

namespace App\Nova\Flexible\Layouts\Queries;


use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Query extends Layout
{
      /**
       * The layout's unique identifier
       *
       * @var string
       */
      protected $name = 'query';

      /**
       * The displayed title
       *
       * @var string
       */
      protected $title = 'CONDITION';

      /**
       * Get the fields displayed by the layout.
       *
       * @return array
       */
      public function fields()
      {
            return [
                  Select::make('Field Name')->hideFromIndex()->options(['Field 1', 'Field 2'])->displayUsingLabels(),
                  Select::make('Condition', 'option')->hideFromIndex()->options([
                        "=" => "=",
                        "<" => "<",
                        ">" => ">",
                        "<=" => "<=",
                        ">=" => ">=",
                        "<>" => "<>",
                        "!=" => "!=",
                        "<=>" => "<=>",
                        "like" => "like",
                        "like binary" => "like binary",
                        "not like" => "not like",
                        "ilike" => "ilike",
                        "&" => "&",
                        "|" => "|",
                        "^" => "^",
                        "<<" => "<<",
                        ">>" => ">>",
                        "&~" => "&~",
                        "is" => "is",
                        "is not" => "is not",
                        "rlike" => "rlike",
                        "not rlike" => "not rlike",
                        "regexp" => "regexp",
                        "not regexp" => "not regexp",
                        "~" => "~",
                        "~*" => "~*",
                        "!~" => "!~",
                        "!~*" => "!~*",
                        "similar to" => "similar to",
                        "not similar to" => "not similar to",
                        "not ilike" => "not ilike",
                        "~~*" => "~~*",
                        "!~~*" => "!~~*",
                  ])->displayUsingLabels(),
                  Text::make('Value'),
            ];
      }
}
