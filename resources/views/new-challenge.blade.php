<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="form-container">
        <form class="new-challenge-form" method="post" enctype="multipart/form-data" action="{{ route('challenges.store') }}">
            @csrf
            <h3>New Challenge</h3>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="desc"></textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input class="form-control" type="date" name="date">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input class="image-input" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Submit</button>
        </form>
    </div>

@endsection
