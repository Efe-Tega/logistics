@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Shipment Status</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">

                            <form action="{{ route('update.status') }}" method="POST" class="row g-3">
                                @csrf

                                {{-- Shipment Travel History --}}
                                <input type="hidden" name="id" value="{{ $shipmentStatus->id }}">

                                <div class="col-md-12">
                                    <label for="inputFirstName" class="form-label">Tracking Number</label>
                                    <input type="text" class="form-control" id="inputFirstName"
                                        value="{{ $shipmentStatus->tracking_no }}" disabled>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Shipment Status</label>
                                    <select id="inputState" class="form-select" name="shipment_status">
                                        <option>Choose...</option>
                                        <option value="Pending"
                                            {{ $shipmentStatus->shipment_status == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>

                                        <option value="Processing"
                                            {{ $shipmentStatus->shipment_status == 'Processing' ? 'selected' : '' }}>
                                            Processing</option>
                                        <option value="In Transit"
                                            {{ $shipmentStatus->shipment_status == 'In Transit' ? 'selected' : '' }}>
                                            In Transit</option>
                                        <option value="Delivered"
                                            {{ $shipmentStatus->shipment_status == 'Delivered' ? 'selected' : '' }}>
                                            Delivered</option>
                                        <option value="On Hold"
                                            {{ $shipmentStatus->shipment_status == 'On Hold' ? 'selected' : '' }}> On
                                            Hold
                                        </option>
                                    </select>
                                </div>



                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Update
                                        Status</button>
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
