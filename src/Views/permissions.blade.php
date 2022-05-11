@extends('vendor.install.layouts.master')

@section('title', trans('install_messages.permissions.title'))
@section('container')
@if (isset($permissions['errors']))
<div class="alert alert-danger">Please fix the below error and the click {{ trans('install_messages.checkPermissionAgain') }}</div>
@endif
<ul class="list">
    @foreach($permissions['permissions'] as $permission)
    <li class="list__item list__item--permissions {{ $permission['isSet'] ? 'success' : 'error' }}">
        {{ $permission['folder'] }}<span>{{ $permission['permission'] }}</span>
    </li>
    @endforeach
</ul>


<div class="buttons">
    @if ( ! isset($permissions['errors']))
    <a class="button" href="{{ route('Install::database') }}">
        {{ trans('install_messages.next') }}
    </a>
    @else
    <a class="button" href="javascript:window.location.href='';">
        {{ trans('install_messages.checkPermissionAgain') }}
    </a>
    @endif
</div>

@stop
