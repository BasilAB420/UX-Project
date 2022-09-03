@extends('layout.main')

@section('content')

<div class="row">
    <div class="col"></div>
    <div class="col col-7">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Company</h4>
                    @if ($message= Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method="post" action="/addcompany" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="company_name">Company Name *</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required>
                        </div>
                        <div class="form-group">
                            <label for="business_type">Business Type *</label>
                            <input type="text" class="form-control" id="business_type" name="business_type" placeholder="Business Type" required>
                        </div>
                        <div class="form-group">
                            <label for="branch">Branch *</label>
                            <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country *</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                        </div>

                        <!-- <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control" id="exampleSelectGender">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div> -->
                        <div class="form-group">
                            <label for="logo">Logo *</label>
                            <!-- <input type="file" id="logo" name="logo" class="form-control custom-file-input" required> -->
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" accept="image/*" id="logo" name="logo" required>
                                <label class="custom-file-label" for="logo">Choose image</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>




@endsection