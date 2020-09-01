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
                <input class="form-control" type="text" name="title" required minlength="4">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="desc" required minlength="10"></textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input class="form-control" type="date" name="date" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="selectpicker" name="category" required>
                    <option value="">--Select category--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Submit</button>
        </form>
    </div>

@endsection
