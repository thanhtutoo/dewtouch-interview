@extends('layouts.app')

@section('content')

<style>
.row{
      width: 1200px;
}
.format-inline{
  display: inline-block;
}
</style>
<link href="https://a11y.nicolas-hoffmann.net/simple-tooltip/css/styles_mini_1463393814.css" rel="stylesheet" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://a11y.nicolas-hoffmann.net/simple-tooltip/js/jquery-accessible-simple-tooltip-aria_1531819938.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Question: Please change popup to mouse over (soft click)</div>

                <div class="card-body">
                    <form action="{{ route('popup') }}" method="POST">
                     {{ csrf_field() }}
      
                        <div class="form-group row">
                        <input class="format-inline" type="radio" name="result" value="type1"> 
                        <div class="format-inline js-simple-tooltip"
                         data-simpletooltip-content-id="tooltip-case_1">
                         Type1
                        </div>
                        <div id="tooltip-case_1" class="hidden">Type 1, Description 1.</div>
                        </div>
                        <div class="form-group row">
                        <input type="radio" name="result" value="type2"> 
                        <div class="format-inline js-simple-tooltip"
                         data-simpletooltip-content-id="tooltip-case_2">
                         Type2
                        </div>
                        <div id="tooltip-case_2" class="hidden">Type 2,
                        Description 2</div>

                        </div>
                        <div class="form-group"> 
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
