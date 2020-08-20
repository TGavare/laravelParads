<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center align-self-center index-col">
                <h5>Create your own challenge</h5>
                <span class="new-challenge-button"><a href="#">+</a></span>
                <a href="#" class="btn btn-outline-success my-2 my-sm-0">Your challenges</a>
            </div>
            <div class="col-md-6 text-center align-self-center index-col">
                <!-- FORM? -->
                <span class="search-form-input">
                    <input type="date" name="date"
                           min="2020-01-01" max="2020-12-31">
                </span>
                <span class="search-form-input">
                    <select>
                        <option value="" disabled selected hidden>Description</option>
                    </select>
                </span>
                <a href="#" class="btn btn-outline-success my-2 my-sm-0">Go!</a>
            </div>
        </div>
    </div>

@endsection
