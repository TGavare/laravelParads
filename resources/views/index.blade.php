<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <!-- left section div -->
    <div class="left-section">
        <p>Create your own challenge</p>
        <span><a href="new-challenge"></a></span>
        <a class="button" href="#">Create your own challenge</a>
    </div>

    <!-- mid section div -->
    <div class="">
        <h1 class="">Most popular</h1>
        <div>
            <img src="#" alt="challenge-image.jpg"/>
        </div>
    </div>

    <!-- right section div -->
    <div class="">
        <select name="Date">
            <!-- options -->
        </select>
        <select name="Categories">
            <!-- options -->
        </select>
        <a href="#">Go</a>
    </div>
@endsection
