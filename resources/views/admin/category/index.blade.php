



@extends('layouts/admin')


@section('admin-content')
    
    <h4>Add Category</h4>

    <div class="container-fluid plr_30 body_white_bg pt_30">

        <div class="col-md-12 pb-5">
            <form action="{{Route('addcategory')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" placeholder="Title" class="form-control" name="title">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Description" class="form-control" name="description">
                    </div>
                    <div class="col-md-3">
                        <input type="submit" value="Add Category" class="btn btn-primary w-100">
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="container-fluid plr_30 body_white_bg pt_30 mt-3">

        <div class="col-md-12 pb-5">
            <table class="table table-stiped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <a href="#" class="btn btn-secondary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection


