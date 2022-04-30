



@extends('layouts/admin')


@section('admin-content')
    
    <h4>Add Category</h4>

    <div class="container-fluid plr_30 body_white_bg pt_30">

        <div class="col-md-12">
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

@endsection


