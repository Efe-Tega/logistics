@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{-- <a href="{{ route('add.history') }}" class="btn btn-primary xs">Add History</a> --}}
                                </a>
                            </div>

                            <h4 class="card-title mb-4">All Trackings</h4>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th> Tracking Number</th>
                                            <th> Receiver Fullname</th>
                                            <th> Date</th>
                                            <th> Time </th>
                                            <th> Description </th>
                                            <th> Current Location </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                        @foreach ($travelHistories as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->tracking->tracking_no }}</td>
                                                <td>{{ $data->tracking->receiver_fullname }}</td>
                                                <td>{{ $data->travel_history_date }}</td>
                                                <td>{{ $data->travel_history_time }}</td>
                                                <td title="{{ $data->travel_history_description }}">
                                                    {{ Str::limit($data->travel_history_description, 20) }}
                                                </td>
                                                <td>{{ $data->travel_history_location }}</td>

                                                <td>
                                                    <a href="{{ route('edit.history', $data->id) }}"
                                                        class="btn btn-info btn-sm" title="Edit Data">Edit</a>
                                                    <a href="{{ route('delete.history', $data->id) }}"
                                                        class="btn btn-danger btn-sm" title="Delete Data"
                                                        id="delete">Delete</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        <!-- end -->
                                    </tbody><!-- end tbody -->
                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>

            <div class="row">
                <div class="col-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Add Travel History</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">

                            <form action="{{ route('insert.history') }}" method="POST" class="row g-3">
                                @csrf

                                {{-- Shipment Travel History --}}
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary mt-3">Add Shipment Travel History</h5>
                                </div>
                                <hr>

                                <p><a href="https://www.latlong.net/" class="text-danger " target="_blank">Click here</a> to
                                    generate location <strong>Latitude</strong> and <strong>Longitude</strong>
                                </p>

                                <input type="hidden" name="tracking_id" value="{{ $tracking->id }}">

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Tracking Number </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="tracking_no"
                                        value="{{ $tracking->tracking_no }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Shipment Location </label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        name="travel_history_location" value="{{ old('travel_history_location') }}">

                                    @error('travel_history_location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Latitude </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="latitude"
                                        value="{{ old('latitude') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Longitude </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="longitude"
                                        value="{{ old('longitude') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Activity Date</label>
                                    <input type="text" class="form-control" name="travel_history_date"
                                        value="{{ old('travel_history_date') }}" />

                                    @error('travel_history_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Activity Time</label>
                                    <input type="text" class="form-control timepicker" name="travel_history_time"
                                        value="{{ old('travel_history_time') }}" />

                                    @error('travel_history_time')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Brief Description of Shipment</label>
                                    <textarea class="form-control" id="inputAddress" placeholder="Brief description" rows="3"
                                        name="travel_history_description">{{ old('travel_history_description') }} </textarea>

                                    @error('travel_history_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Add
                                        History</button>
                                    {{-- <a href="{{ route('all.shipment') }}" class="btn btn-danger">Back</a> --}}
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
