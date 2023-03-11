<?php

namespace App\Http\Controllers;

use App\Models\UniverseViews;
use Illuminate\Http\Request;

class UniverseController extends Controller
{

    public function initialiseUniverse($id, Request $request)
    {
        $view = UniverseViews::find($id);

        $class = $view->model;

        $model = app($class);

        foreach ($view->filters as $queryFilter) {
            $model->where($queryFilter['field_name'], $queryFilter['option'], $queryFilter['value']);
        }
        $data =  $model->all();

        $returnData = [
            "view_id" => $view->id,
            'name' => $view->name,
            'count' => $data->count(),
            'entities' => $data
        ];

        return $returnData;
    }
}
