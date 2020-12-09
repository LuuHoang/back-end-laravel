@extends('layouts.app')
@section('title','Page title')
    
@section('sidebar')
    @parent
    <p>This is appended to master sidebar</p>
@endsection
@section('contents')
    <p>This is my body content</p>
@endsection