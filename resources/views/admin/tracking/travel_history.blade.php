@extends('admin.admin_main')
@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <h6 class="mb-0 text-uppercase">Travel History</h6>
                <hr />
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Travel History</h5>
                        </div>
                        <hr>

                        <form action="{{ route('find.shipment') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Tracking Number</label>
                                <input type="text" name="tracking_no" class="form-control"
                                    placeholder="Enter Tracking Number">
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Find
                                    Shipment</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
