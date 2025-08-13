@extends('layouts.app')

@section('title', 'Data Category')
@section('menuadmincategory', 'active')

@section('content')
    @livewire('admin.category.index')
@endsection