<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="row">
        <div class="col-sm sec">
            <div class="left-section">
                <p>Create your own challenge</p>
                <a href="#"><span class="plus"></span></a>
            </div>
        </div>
        <div class="col-sm sec">
            <div class="">
                <select name="Date">
                    <!-- options -->
                </select>
                <select name="Categories">
                    <!-- options -->
                </select>
                <a href="#">Go</a>
            </div>
        </div>
    </div>
    <div class="container">

    </div>

@endsection
