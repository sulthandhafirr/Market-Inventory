@extends('layouts.app')

@section('title', 'Data Item')
@section('menuadminitem', 'active')

@section('content')
    @livewire('admin.item.index')
@endsection