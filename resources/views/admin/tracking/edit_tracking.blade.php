@extends('admin.admin_main')
@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Edit Shipment</h6>
                <hr />
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Edit Shipper's Details</h5>
                        </div>
                        <hr>

                        <form action="{{ route('update.shipment') }}" method="POST" class="row g-3">
                            @csrf

                            <input type="hidden" name="id" value="{{ $editData->id }}">

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Full Name</label>
                                <input type="text" name="shipper_fullname" class="form-control" id="inputFirstName"
                                    value="{{ $editData->shipper_fullname }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Sex</label>
                                <select id="inputState" class="form-select" name="shipper_gender">
                                    <option>Choose...</option>
                                    <option value="male" {{ $editData->shipper_gender == 'male' ? 'selected' : '' }}>Male
                                    </option>
                                    <option value="female" {{ $editData->shipper_gender == 'female' ? 'selected' : '' }}>
                                        Female
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputLastName" name="shipper_phone"
                                    value="{{ $editData->shipper_phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="shipper_email"
                                    value="{{ $editData->shipper_email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Home Address</label>
                                <input type="text" class="form-control" id="inputLastName" name="shipper_address"
                                    value="{{ $editData->shipper_address }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">State</label>
                                <input type="text" class="form-control" id="inputCity" name="shipper_state"
                                    value="{{ $editData->shipper_state }}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="inputZip" name="shipper_postal"
                                    value="{{ $editData->shipper_postal }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Country</label>
                                <input type="text" class="form-control" id="inputZip" name="shipper_country"
                                    value="{{ $editData->shipper_country }}">
                            </div>

                            {{-- Receiver's Information --}}

                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Edit Receiver's Details</h5>
                            </div>
                            <hr>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="receiver_fullname"
                                    value="{{ $editData->receiver_fullname }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Sex</label>
                                <select id="inputState" class="form-select" name="receiver_gender">
                                    <option>Choose...</option>
                                    <option value="male" {{ $editData->receiver_gender == 'male' ? 'selected' : '' }}>
                                        Male
                                    </option>
                                    <option value="female" {{ $editData->receiver_gender == 'female' ? 'selected' : '' }}>
                                        Female
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputLastName" name="receiver_phone"
                                    value="{{ $editData->receiver_phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="receiver_email"
                                    value="{{ $editData->receiver_email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Home Address</label>
                                <input type="text" class="form-control" id="inputLastName" name="receiver_address"
                                    value="{{ $editData->receiver_address }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">State</label>
                                <input type="text" class="form-control" id="inputCity" name="receiver_state"
                                    value="{{ $editData->receiver_state }}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="inputZip" name="receiver_postal"
                                    value="{{ $editData->receiver_postal }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Country</label>
                                <input type="text" class="form-control" id="inputZip" name="receiver_country"
                                    value="{{ $editData->receiver_country }}">
                            </div>

                            {{-- Shipment Details --}}

                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Edit Shipment Details</h5>
                            </div>
                            <hr>

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Tracking Number</label>
                                <input type="text" class="form-control" id="inputFirstName" name="tracking_no"
                                    value="{{ $editData->tracking_no }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Freight Type</label>
                                <select id="inputState" class="form-select" name="freight_type">
                                    <option>Choose...</option>
                                    <option value="air_freight"
                                        {{ $editData->freight_type == 'air_freight' ? 'selected' : '' }}>
                                        Air Freight
                                    </option>
                                    <option value="sea_freight"
                                        {{ $editData->freight_type == 'sea_freight' ? 'selected' : '' }}>
                                        Sea Freight
                                    </option>

                                    <option value="road_freight"
                                        {{ $editData->freight_type == 'road_freight' ? 'selected' : '' }}>
                                        Road Freight
                                    </option>
                                    <option value="rail_freight"
                                        {{ $editData->freight_type == 'rail_freight' ? 'selected' : '' }}>
                                        Rail Freight
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Shipment Content</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_content"
                                    value="{{ $editData->shipment_content }}">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Brief Description of Shipment</label>
                                <textarea class="form-control" id="inputAddress" placeholder="brief description" rows="3"
                                    name="shipment_desc">{{ $editData->shipment_desc }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_quantity"
                                    value="{{ $editData->shipment_quantity }}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Weight (eg 2kg)</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_weight"
                                    value="{{ $editData->shipment_weight }}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Shipment Status</label>
                                <select id="inputState" class="form-select" name="shipment_status">

                                    <option value="Pending"
                                        {{ $editData->shipment_status == 'Pending' ? 'selected' : '' }}>
                                        Pending</option>

                                    <option value="Processing"
                                        {{ $editData->shipment_status == 'Processing' ? 'selected' : '' }}>
                                        Processing</option>
                                    <option value="In Transit"
                                        {{ $editData->shipment_status == 'In Transit' ? 'selected' : '' }}>In
                                        Transit</option>
                                    <option value="Delivered"
                                        {{ $editData->shipment_status == 'Delivered' ? 'selected' : '' }}>Delivered
                                    </option>
                                    <option value="On Hold"
                                        {{ $editData->shipment_status == 'On Hold' ? 'selected' : '' }}>On Hold
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Take off Location</label>
                                <input type="text" class="form-control" id="inputFirstName" name="take_off"
                                    value="{{ $editData->take_off }}">
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Final Destination</label>
                                <input type="text" class="form-control" id="inputFirstName" name="final_destination"
                                    value="{{ $editData->final_destination }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Date Shipped</label>
                                <input type="date" class="form-control " name="date_shipped"
                                    value="{{ $editData->date_shipped }}" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Time Shipped</label>
                                <input type="text" class="form-control timepicker" name="time_shipped"
                                    value="{{ $editData->time_shipped }}" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Expected Delivery Date</label>
                                <input type="date" class="form-control " name="expected_delivery_date"
                                    value="{{ $editData->expected_delivery_date }}" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Expected Delivery Time</label>
                                <input type="text" class="form-control timepicker" name="expected_delivery_time"
                                    value="{{ $editData->expected_delivery_time }}" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Actual Delivery Date </label>
                                <input type="date" class="form-control " name="actual_delivery_date"
                                    value="{{ $editData->actual_delivery_date }}" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Actual Delivery Time</label>
                                <input type="text" class="form-control timepicker" name="actual_delivery_time"
                                    value="{{ $editData->actual_delivery_time }}" />
                            </div>


                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Update
                                    Shipment</button>
                                <a href="{{ route('all.shipment') }}" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
