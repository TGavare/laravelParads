<!DOCTYPE html>
<html>
<head>
    <title>Challenge app</title>
</head>
@extends('layout.mainlayout')

@section('content')

    @auth()
        @if(DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->first()->role_id == 2)
        <div class="container">
            <h1 class="most-popular-title">Categories</h1>
            @if(!empty($categories[0]))
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Title</td>
                        <td>Category</td>
                        <td></td>
                    </tr>
                    </thead>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->desc }}</td>
                            <td>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>no categories found :(</p>
            @endif
        </div>
    @else
                <h1>Unauthorized</h1>
    @endif
    @endauth

@endsection
