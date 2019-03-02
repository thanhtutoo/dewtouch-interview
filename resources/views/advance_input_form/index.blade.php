@extends('app')
@section('content')
<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    Oops! We have some erros
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('message'))
                <div class="alert alert-success">
                  {!!Session::get('message')!!}
                </div>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
            @foreach($report as $t)
                <tr>
                    <td><td width="10px"><input type="checkbox" name="ids_to_edit[]" value="{{$t->id}}" /></td></td>
                    <td>{{$t->id}}</td>

                    <td><a href="#" class="formEdit" data-type="text" data-column="name" data-url="{{route('report/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="name">{{$t->name}}</a>
                    </td>

                    <td><a href="#" class="formEdit" data-type="text" data-column="value"  data-url="{{route('report/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="value">{{$t->value}}</a></td>
                    <td><a href="#" class="formEdit" data-type="text" data-column="date"  data-url="{{route('report/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="date">{{$t->date}}</a></td>
                </tr>
            @endforeach
            </table>
            {!! Form::close() !!}
            
            
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {

$('.formEdit').editable({
        params: function(params) {
            // add additional params from data-attributes of trigger element
            params._token = $("#_token").data("token");
            params.name = $(this).editable().data('name');
            return params;
        },
        error: function(response, newValue) {
            if(response.status === 500) {
                return 'Server error. Check entered data.';
            } else {
                return response.responseText;
                // return "Error.";
            }
        }
    });

});
</script>
@endsection
