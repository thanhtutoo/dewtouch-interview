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
                <div class="card-header">Popup to mouseover</div>

                <div class="card-body">
                    You choose <b>{{$result}}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
