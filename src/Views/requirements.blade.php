@extends('vendor.install.layouts.master')

@section('title', trans('install_messages.requirements.title'))
@section('container')
<ul class="list">
    <li class="list__item {{ $phpSupportInfo['supported'] ? 'success' : 'error' }}">PHP Version >= {{ $phpSupportInfo['minimum'] }}</li>

    @foreach($requirements['requirements'] as $extention => $enabled)
    <li class="list__item {{ $enabled ? 'success' : 'error' }}">{{ $extention }}</li>
    @endforeach
</ul>

@if ( ! isset($requirements['errors']) && $phpSupportInfo['supported'] == 'success')
<div class="buttons">
    <a class="button" href="{{ route('Install::permissions') }}">
        {{ trans('install_messages.next') }}
    </a>
</div>
@endif
@stop
