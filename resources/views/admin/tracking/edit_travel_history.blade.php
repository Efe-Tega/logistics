@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Travel History</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">

                            <form action="{{ route('update.history') }}" method="POST" class="row g-3">
                                @csrf

                                {{-- Shipment Travel History --}}

                                <input type="hidden" name="id" value="{{ $travelData->id }}">

                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary mt-3">Edit Shipment Travel History</h5>
                                </div>
                                <hr>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Tracking Number </label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        value="{{ $travelData->tracking->tracking_no }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Shipment Location </label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        name="travel_history_location" value="{{ $travelData->travel_history_location }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Latitude </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="latitude"
                                        value="{{ $travelData->latitude }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label">Longitude </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="longitude"
                                        value="{{ $travelData->longitude }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Activity Date</label>
                                    <input type="text" class="form-control" name="travel_history_date"
                                        value="{{ $travelData->travel_history_date }}" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Activity Time</label>
                                    <input type="text" class="form-control timepicker" name="travel_history_time"
                                        value="{{ $travelData->travel_history_time }}" />
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Brief Description of Shipment</label>
                                    <textarea class="form-control" id="inputAddress" placeholder="Brief description" rows="3"
                                        name="travel_history_description">{{ $travelData->travel_history_description }}</textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Update
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
