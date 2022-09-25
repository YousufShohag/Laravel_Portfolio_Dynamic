@extends('backend/mastering/master');
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Description</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($show as $show)
                     <tr>
                  
                    <td>{{$show->id}}</td>
                    <td>{{$show->f_description}}</td>
                    <td>{{$show->f_name}}</td>
                    <td>{{$show->f_name}}</td>
                    <td>{{$show->f_name}}</td>
                    <td>{{$show->f_name}}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
   </div>
@endsection