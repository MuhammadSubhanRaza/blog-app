

@extends('../layouts/layout')

@section('main-content')
    
<div style="height: 140px;background-color: royalblue" class="pt-4">
    <h4 class="text-white pt-5 text-center">Add New Post</h4>
</div>


<div class="container p-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{Route('ceratepost')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="text" class="form-control" placeholder="Add Title to your post" name="title">
                <textarea name="content" placeholder="Description" class="form-control mt-3" id="" cols="30" rows="5"></textarea>
                
                <nav class="mt-3">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Image</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Video</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="input-group mt-3 mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Upload Image</span>
                            </div>
                            <div class="custom-file">
                              <input name="image_url" type="file" class="custom-file-input" id="inputGroupFile01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose Image file</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="input-group mt-3 mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Upload Video</span>
                            </div>
                            <div class="custom-file">
                              <input name="video_url" type="file" class="custom-file-input" id="inputGroupFile01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose video file</label>
                            </div>
                        </div>
                    </div>
                  </div>

                  <input type="submit" class="btn btn-info w-100" value="Create Post">

            </form>
        </div>
    </div>
</div>

@endsection
