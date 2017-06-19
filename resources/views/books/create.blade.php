@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Create New Book</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('books.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group{{ ($errors->has('title'))? $errors->first('title'): "" }}">
                    <input class="form-control" type="text" name="title" placeholder="Enter book title here!">

               </div>
                <div class="form-group{{ ($errors->has('author'))? $errors->first('author') : "" }}">
                    <input class="form-control" type="text" name="author" placeholder="Enter book author here!">

               </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>

        </div>
    </div>
@stop