@extends('vendor.install.layouts.master')

@section('title', trans('install_messages.final.title'))
@section('container')
<p class="paragraph" style="text-align: center;">{{ session('message')['message'] }}</p>
<div class="buttons">
    <a href="{{ url('/') }}" class="button">{{ trans('install_messages.final.exit') }}</a>
</div>
@stop
