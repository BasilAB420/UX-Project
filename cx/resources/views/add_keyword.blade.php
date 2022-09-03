@extends('layout.main')

@section('content')

<div class="row">
    <div class="col"></div>
    <div class="col col-7">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Keyword</h4>
                    @if ($message= Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <form class="forms-sample" method="post" action="/addkeyword" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="service_id">Service Name *</label>
                            <select class="form-control" id="service_id" name="service_id" required>
                            <option value="" selected="" disabled="" hidden="">Choose option ...</option>
                                @foreach($data as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="service_id">Service Name *</label>
                            <input type="text" class="form-control" id="service_id" name="service_id" placeholder="Service Name" required>
                        </div> -->
                        <div class="form-group">
                            <label for="word">Word *</label>
                            <input type="text" class="form-control" id="word" name="word" placeholder="Word" required>
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight *</label>
                            <!-- <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" required> -->
                            <select class="form-control" id="weight" name="weight" required>
                                <option value="" selected="" disabled="" hidden="">Choose option ...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date *</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" required>
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