@extends('layout.main')

@section('content')

<div class="row">
<div class="col"></div>
<div class="col col-7">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Text Feedback</h4>
            <form action="" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
              {{-- <div class="form-group">
                <label for="exampleInputName1">Company Name</label>
                <input type="text" class="form-control" name="company_name" placeholder="Name">
              </div> --}}
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
              {{ $message }}
              </div>
    
              @elseif($message = Session::get('fail'))
              <span class="alert alert-danger">
               {{ $message }}
              </span>
               @endif

              <div class="form-group">
                <label for="exampleSelectGender">Company Name</label>
                <select class="form-control" id="company_list" name="company_name">

                </select>
                @error('company_name')
                  <span style="color: #ff0000;">{{$message}}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="exampleSelectGender">Service Name</label>
                <select class="form-control" id="service_list" name="service_name">
                  <option value="0">Please select company before </option>

                </select>
                @error('service_name')
                  <span style="color: #ff0000;">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label>File upload</label>
                {{-- <input type="file"  class="file-upload-default"> --}}
                <div class="input-group col-xs-12">
                  <input type="file" name="feed_text" class="form-control file-upload-info"  placeholder="Text File">
                  <span class="input-group-append">

                  </span>
                </div>
                @error('feed_text')
                  <span style="color: #ff0000;">{{$message}}</span>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
    <div class="col"></div>
</div>

<script>
  
  $(document).ready(function () {
    getCompany();
    console.log("tetx");
    function getCompany(){

      $.ajax({
        type: "GET",
        url: "fetch_comany",
        dataType: "json",
        success: function (response) {
        //  console.log(response.companies);
         $('#company_list').html("");
         $('#company_list').append(
            '<option value = 0>Select Comapny </option>')
         $.each(response.companies, function (key, company) { 
           $('#company_list').append(
            '<option value ='+ company.id+'>'+company.name+' </option>'
           );
         });
        }
      });

      $('#company_list').on('change', function() {
        var company = $(this).find(":selected").val();
        // console.log(company);
        $.ajax({
          type: "GET",
          url: `fetch_service/${company}`,
          dataType: "json",
          success: function (response) {
            // console.log(response.services)
            $('#service_list').html("");
         $('#service_list').append(
          '<option value = 0>Select Service </option>')
        $.each(response.services, function (key, service) { 
        $('#service_list').append(
          '<option value ='+ service.id+'>'+service.name+' </option>'
         )
      });
          }
        });
      });


    }
  });

</script>



    
@endsection
