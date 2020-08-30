<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="container">
        <div class="challenge-div">
            <h1>{{$challenge->title}}</h1>
            <p>Category : {{$category->title}}</p>
            <p>Category description: {{$category->desc}}</p>
            <p>Due date: {{$challenge->date_end}}</p>
            <hr/>
            <p>{{$challenge->desc}}</p>
        </div>
    </div>

@endsection
