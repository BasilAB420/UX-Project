@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col col-8">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Service</h4>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        @if ($message = Session::get('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endif

                        <form class="forms-sample text-black" method="post" action="addclient">
                            @csrf
                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="company_name">Service ID *</label>
                                        <input type="text" class="form-control" id="client_id" name="id"
                                            value="{{ old('id') }}" placeholder="ID" required>
                                        @error('id')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group text-black">
                                        <label for="company_name">Branch *</label>
                                        <input type="text" class="form-control" id="company_name" name="branch"
                                            value="{{ old('branch') }}" placeholder="Branch" required>
                                        @error('branch')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="company_name">Name *</label>
                                        <input type="text" class="form-control" id="company_name" name="name"
                                            value="{{ old('name') }}" placeholder="Company Name" required>
                                        @error('name')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="business_type">Today Date *</label>
                                        <input type="date" class="form-control" id="business_type" name="birth_date"
                                            value="{{ old('birth_date') }}" required>
                                        @error('birth_date')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="business_type">Start Date *</label>
                                        <input type="date" class="form-control" id="business_type" name="start_date"
                                            value="{{ old('start_date') }}" required>
                                        @error('start_date')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="business_type">End Date *</label>
                                        <input type="date" class="form-control" id="business_type" name="end_date"
                                            value="{{ old('end_date') }}" required>
                                        @error('end_date')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="country">Manager *</label>
                                        <input type="text" class="form-control" id="country" name="profession"
                                            value="{{ old('profession') }}" placeholder="Country" required>
                                        @error('profession')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="country">Country *</label>
                                        <input type="text" class="form-control" id="country" name="country"
                                            value="{{ old('country') }}" placeholder="Country" required>
                                        @error('country')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="country">Contact Detials *</label>
                                        <input type="text" class="form-control" id="country" name="contact_detials"
                                            value="{{ old('contact_detials') }}" placeholder="phone number" required>
                                        @error('contact_detials')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="country">Company *</label>
                                        <select name="company_id" id="" class="form-control">
                                            <option value="" >select ...</option>
                                            {{-- @foreach ($list as $item)
                                            <option value="{{$item->id}}" >{{$item->name}}</option>
                                            @endforeach --}}

                                        </select>

                                        {{-- <input type="text" class="form-control" id="country" name="company_id"
                                            placeholder="" value="{{ old('company_id') }}">
                                        @error('company_id')
                                            <div class="text-danger">
                                                <p>* {{ $message }}</p>
                                            </div>
                                        @enderror --}}
                                    </div>
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
