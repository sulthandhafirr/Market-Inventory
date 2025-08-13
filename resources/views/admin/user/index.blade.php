@extends('layouts.app')

@section('title', 'Data User')
@section('menuadminuser', 'active')

@section('content')
    @livewire('admin.user.index')
@endsection