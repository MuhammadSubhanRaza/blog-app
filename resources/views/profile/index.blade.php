
@extends('../layouts/layout')

@section('main-content')



<div style="height: 140px;background-color: royalblue" class="pt-4">
    <h4 class="text-white pt-5 text-center">Create Profile</h4>
</div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="padding: 50px 40px">
                <form action="{{Route("saveprofile")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" placeholder="First Name" name="firstname" class="form-control">
                    <input type="text" placeholder="Last Name" name="lastname" class="mt-3 form-control">
                    <input type="date" class="form-control mt-3" name="dob">
                    <input type="file" name="profile_image" class="form-control mt-3">
                    <input type="submit" class="btn btn-primary w-100 mt-3" value="Save Profile">
                </form>
            </div>
        </div>
    </div>

@endsection

