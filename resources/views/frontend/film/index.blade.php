@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | <a href="/films">Films</a></div>
            </div>
        </div>
    </div>
    <div class="row">
    	<index-component></index-component>
    </div>
</div> 
@endsection
