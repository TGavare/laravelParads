<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="form-container">
        <form class="new-challenge-form" method="post" enctype="multipart/form-data" action="{{  route('categories.update', $category->id) }}">
            @method('PUT')
            @csrf
            <h3>Edit</h3>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title" value="{{$category->title}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="desc">{{$category->desc}}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Submit</button>
        </form>
    </div>

@endsection
