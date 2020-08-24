<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    <div class="form-container">
        <form class="new-challenge-form" method="post" enctype="multipart/form-data" action="#">
            @csrf
            <h3>Login</h3>
            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Login</button>
        </form>
    </div>

@endsection
