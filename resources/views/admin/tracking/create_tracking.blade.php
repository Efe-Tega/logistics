@extends('admin.admin_main')
@section('admin')
    @php
        $trackingNo = mt_rand(1000000000, 9999999999);
    @endphp
    <div class="page-content">

        <div class="row">
            <div class="col-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Create Shipment</h6>
                <hr />
                <div class="card border-4 border-top border-primary border-bottom-0 border-start-0 border-end-0">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Shipper's Details</h5>
                        </div>
                        <hr>

                        <form action="{{ route('store.shipment') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Full Name</label>
                                <input type="text" name="shipper_fullname" class="form-control" id="inputFirstName"
                                    value="{{ old('shipper_fullname') }}">

                                @error('shipper_fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Sex</label>
                                <select id="inputState" class="form-select" name="shipper_gender">
                                    <option value="" selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('shipper_gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputLastName" name="shipper_phone"
                                    value="{{ old('shipper_phone') }}">

                                @error('shipper_phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="shipper_email"
                                    value="{{ old('shipper_email') }}">

                                @error('shipper_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Home Address</label>
                                <input type="text" class="form-control" id="inputLastName" name="shipper_address"
                                    value="{{ old('shipper_address') }}">

                                @error('shipper_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">State</label>
                                <input type="text" class="form-control" id="inputCity" name="shipper_state"
                                    value="{{ old('shipper_state') }}">

                                @error('shipper_state')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="inputZip" name="shipper_postal"
                                    value="{{ old('shipper_postal') }}">

                                @error('shipper_postal')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Country</label>
                                <input type="text" class="form-control" id="inputZip" name="shipper_country"
                                    value="{{ old('shipper_country') }}">

                                @error('shipper_country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Receiver's Information --}}
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Receiver's Details</h5>
                            </div>
                            <hr>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="receiver_fullname"
                                    value="{{ old('receiver_fullname') }}">

                                @error('receiver_fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Sex</label>
                                <select id="inputState" class="form-select" name="receiver_gender">
                                    <option value="" selected>Choose...</option>
                                    <option value="male">Male
                                    </option>
                                    <option value="female">Female</option>
                                </select>

                                @error('receiver_gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="inputLastName" name="receiver_phone"
                                    value="{{ old('receiver_phone') }}">

                                @error('receiver_phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="receiver_email"
                                    value="{{ old('receiver_email') }}">

                                @error('receiver_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputLastName" class="form-label">Home Address</label>
                                <input type="text" class="form-control" id="inputLastName" name="receiver_address"
                                    value="{{ old('receiver_address') }}">

                                @error('receiver_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">State</label>
                                <input type="text" class="form-control" id="inputCity" name="receiver_state"
                                    value="{{ old('receiver_state') }}">

                                @error('receiver_state')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="inputZip" name="receiver_postal"
                                    value="{{ old('receiver_postal') }}">

                                @error('receiver_postal')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Country</label>
                                <input type="text" class="form-control" id="inputZip" name="receiver_country"
                                    value="{{ old('receiver_country') }}">

                                @error('receiver_country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Shipment Details --}}

                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Shipment Details</h5>
                            </div>
                            <hr>

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Tracking Number</label>
                                <input type="text" class="form-control" id="inputFirstName" name="tracking_no"
                                    value="{{ $trackingNo }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Freight Type</label>
                                <select id="inputState" class="form-select" name="freight_type">
                                    <option value="" selected>Choose...</option>
                                    <option value="air_freight">Air Freight</option>
                                    <option value="see_freight">Sea Freight</option>
                                    <option value="road_freight">Road Freight</option>
                                    <option value="rail_freight">Rail Freight</option>
                                </select>

                                @error('freight_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Shipment Content</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_content"
                                    value="{{ old('shipment_content') }}">

                                @error('shipment_content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Brief Description of Shipment</label>
                                <textarea class="form-control" id="inputAddress" placeholder="brief description" rows="3"
                                    name="shipment_desc">{{ old('shipment_desc') }}</textarea>

                                @error('shipment_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_quantity"
                                    value="{{ old('shipment_quantity') }}">

                                @error('shipment_quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Weight (eg 2kg)</label>
                                <input type="text" class="form-control" id="inputFirstName" name="shipment_weight"
                                    value="{{ old('shipment_weight') }}">

                                @error('shipment_weight')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Shipment Status</label>
                                <select id="inputState" class="form-select" name="shipment_status">

                                    <option value="" selected>Choose...</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Processing">Processing</option>
                                    <option value="In Transit">In Transit</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="On Hold">On Hold</option>
                                </select>

                                @error('shipment_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Take off Location</label>
                                <input type="text" class="form-control" id="inputFirstName" name="take_off"
                                    value="{{ old('take_off') }}">

                                @error('take_off')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Final Destination</label>
                                <input type="text" class="form-control" id="inputFirstName" name="final_destination"
                                    value="{{ old('final_destination') }}">

                                @error('final_destination')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Date Shipped</label>
                                <input type="date" class="form-control " name="date_shipped"
                                    value="{{ old('date_shipped') }}" />

                                @error('date_shipped')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Time Shipped</label>
                                <input type="text" class="form-control timepicker" name="time_shipped"
                                    value="{{ old('time_shipped') }}" />

                                @error('time_shipped')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Expected Delivery Date</label>
                                <input type="date" class="form-control" name="expected_delivery_date"
                                    value="{{ old('expected_delivery_date') }}" />

                                @error('expected_delivery_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Expected Delivery Time</label>
                                <input type="text" class="form-control timepicker" name="expected_delivery_time"
                                    value="{{ old('expected_delivery_time') }}" />

                                @error('expected_delivery_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Actual Delivery Date </label>
                                <input type="date" class="form-control " name="actual_delivery_date"
                                    value="{{ old('actual_delivery_date') }}" />

                                @error('actual_delivery_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Actual Delivery Time</label>
                                <input type="text" class="form-control timepicker" name="actual_delivery_time"
                                    value="{{ old('actual_delivery_time') }}" />

                                @error('actual_delivery_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Shipment Travel History --}}

                            <div class="card-title d-flex align-items-center mt-5">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Shipment Travel History</h5>
                            </div>
                            <span><a href="https://www.latlong.net/" class="text-danger " target="_blank">Click here</a>
                                to generate location <strong>Latitude</strong> and <strong>Longitude</strong>
                            </span>
                            <hr>

                            <div class="col-md-12">
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
                                    name="travel_history_description">{{ old('travel_history_description') }}</textarea>

                                @error('travel_history_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary px-5">Create
                                    Shipment</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
