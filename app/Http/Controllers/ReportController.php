<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
use Schema;
use Redirect;
use Illuminate\Support\Facades\{Input,Session};
class ReportController extends Controller
{
    public function index()
    {
        $report = Report::select()
            ->orderBy('id')
            ->get()
            ;

        $report_model = new Report();
        $fillable_columns = $report_model->getFillable();
        foreach ($fillable_columns as $key => $value) {
            $report_columns[$value] = $value;
        }
        
        return view('advance_input_form.index')
            ->with('report', $report)
            ->with('report_columns', $report_columns)
        ;
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $column_name = Input::get('name');
        $column_value = Input::get('value');
        if( Input::has('name') && Input::has('value')) {
            $report = Report::select()
                ->where('id', '=', $id)
                ->update([$column_name => $column_value]);
            return response()->json([ 'code'=>200], 200);
        }
        
        return response()->json([ 'error'=> 400, 'message'=> 'Not enought params' ], 400);
    }
   
  
}