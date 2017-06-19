@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Create New Book</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('books.update', $books->id)}}" method="post">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                <div class="form-group{{ ($errors->has('title'))? $errors->first('title'): "" }}">
                    <input class="form-control" type="text" name="title" placeholder="Edit book title here!" value="{{$books->title}}">

                </div>
                <div class="form-group{{ ($errors->has('author'))? $errors->first('author') : "" }}">
                    <input class="form-control" type="text" name="author" placeholder="Edit author here!" value="{{$books->author}}">

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>

        </div>
    </div>
    @stop