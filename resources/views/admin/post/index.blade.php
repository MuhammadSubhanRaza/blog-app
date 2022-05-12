



@extends('layouts/admin')


@section('admin-content')
    
    <h4>ALL POSTS</h4>


    <div class="container-fluid plr_30 body_white_bg pt_30 mt-3">

        <div class="col-md-12 pb-5">
            <table class="table table-stiped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <img style="width: 60px; height:60px; border-radius:50%" src="{{asset('storage/'.$post->image_url)}}" alt="">
                            </td>
                            <td>{{$post->Category->title}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection


