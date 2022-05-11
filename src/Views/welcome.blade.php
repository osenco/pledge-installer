@extends('vendor.install.layouts.master')

@section('title', trans('install_messages.welcome.title'))
@section('container')
<p class="paragraph" style="text-align: center;">{{ trans('install_messages.welcome.message') }}</p>
<div class="buttons">
    <a href="{{ route('Install::environment') }}" class="button">{{ trans('install_messages.next') }}</a>
</div>
@stop
