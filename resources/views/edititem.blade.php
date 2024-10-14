@extends('layouts.backend.master')

@section('content')
    @livewire('edititem',['id'=>$id])
@endsection
