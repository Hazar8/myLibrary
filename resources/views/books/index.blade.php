@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>My MVC Library</h3>
        <br/>
        </div>



    </div>

    <div class="row">

            <table class="table table-striped">
                <tr>
                    <th>No.</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
                <a href="{{route('books.create')}}" class="btn btn-info  pull-right">Add New Book</a>
                <br/>
                <br/>
                @foreach($book as $books)
                   <tr>
                       <td> {{$books->id }}</td>
                       <td>{{$books->title}}</td>
                       <td>{{$books->author}}</td>
                       <td>
                           <form class="" action="{{route('books.destroy', $books->id)}}" method="post">
                               <input type="hidden" name="_method" value="delete">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <a href="{{route('books.edit', $books->id)}}" class="btn btn-default">Edit</a>
                               <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book from library?')" name="name" value="delete">


                           </form>
                       </td>
                   </tr>

                    @endforeach
            </table>

    </div>
    @stop