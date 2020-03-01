@extends('layouts.dashboard.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Settings </h1>
    {{-- <p>A free and open source Bootstrap 4 admin template</p> --}}
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
  </ul>
</div>

<div class="tile mb-4">
  <form action="{{ route('dashboard.settings.store') }}" method="POST">
    @csrf
    @method('post')
    @include('layouts.dashboard._error')
@php
 $social_sites=['facebook','google'];   
@endphp
@foreach ($social_sites as $social_site)
    
    {{-- client id --}}
    <div class="form-group">
      <label for="{{$social_site}}_client_id" class="text-capitalize">{{$social_site}} client id</label>
      <input type="text" class="form-control" name="{{$social_site}}_client_id" id="{{$social_site}}_client_id"
        value="{{setting($social_site.'_client_id')}}" aria-describedby="helpId" placeholder="">
    </div>
    {{-- client secret --}}
    <div class="form-group">
      <label for="{{$social_site}}_client_secret" class="text-capitalize">{{$social_site}} client secret </label>
      <input type="text" class="form-control" name="{{$social_site}}_client_secret" id="{{$social_site}}_client_secret"
        value="{{setting($social_site.'_client_secret')}}" aria-describedby="helpId" placeholder="">
    </div>
    {{-- Redirect url --}}
    <div class="form-group">
      <label for="{{$social_site}}_redirect_url" class="text-capitalize">{{$social_site}} redirect URL </label>
      <input type="text" class="form-control" name="{{$social_site}}_redirect_url" id={{$social_site}}_redirect_url"
        value="{{setting($social_site.'_redirect_url')}}" aria-describedby="helpId" placeholder="">
    </div>
    
@endforeach
    <div class="form-group">
      <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
    </div>
  </form>
</div>

@endsection