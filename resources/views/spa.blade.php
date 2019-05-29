@extends('layouts.app')
@section('content')
<div class="container">      
    <div class="row justify-content-center">
        <div class="col-md-8">
            <app></app>
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script src="{{asset('js/app.js')}}"></script>
@endsection
