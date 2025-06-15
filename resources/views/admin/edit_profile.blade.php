@extends('admin.admin_main')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Profile Info</h4>

                            <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $profileId->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Name" name="name"
                                            id="example-text-input" value="{{ $profileId->name }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" placeholder="email" name="email"
                                            id="example-text-input" value="{{ $profileId->email }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" class="form-control" type="text" placeholder="Web adress"
                                            id="example-text-input" value="{{ $profileId->address }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone number</label>
                                    <div class="col-sm-10">
                                        <input name="phone" class="form-control" type="phone" placeholder="phone number"
                                            id="example-text-input" value="{{ $profileId->phone }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website Email</label>
                                    <div class="col-sm-10">
                                        <input name="web_email" class="form-control" type="email" placeholder="Web email"
                                            id="example-text-input" value="{{ $profileId->web_email }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website Name</label>
                                    <div class="col-sm-10">
                                        <input name="web_name" class="form-control" type="text"
                                            placeholder="Website name" id="example-text-input"
                                            value="{{ $profileId->web_name }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
