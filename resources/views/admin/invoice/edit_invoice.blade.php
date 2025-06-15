@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Invoice</h6>
                <hr />

                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">

                        <form action="{{ route('update.invoice') }}" method="POST" class="row g-3">
                            @csrf

                            {{-- Shipment Travel History --}}
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Update Invoice information</h5>
                            </div>
                            <hr>

                            <input type="hidden" name="id" value="{{ $invoice->id }}">

                            <div class="col-md-6">
                                <label class="form-label">Tracking No</label>
                                <input type="text" class="form-control" id="inputFirstName" name="tracking_id"
                                    value=" {{ $invoice->tracking->tracking_no }} [{{ $invoice->tracking->receiver_fullname }}]"
                                    readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="bank_name"
                                    placeholder="Enter bank name" value="{{ $invoice->bank_name }}">

                                @error('bank_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Account Number</label>
                                <input type="text" class="form-control" name="acct_no" placeholder="Enter account number"
                                    value="{{ $invoice->acct_no }}" />

                                @error('acct_no')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Freight Amount</label>
                                <input type="number" class="form-control timepicker" name="frieght_amount"
                                    placeholder="Enter freight amount" value="{{ $invoice->frieght_amount }}" />

                                @error('frieght_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Warehouse Fee</label>
                                <input type="number" class="form-control timepicker" name="warehouse_fee"
                                    placeholder="Enter warehouse fee" value="{{ $invoice->warehouse_fee }}" />

                                @error('warehouse_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Custom Fee</label>
                                <input type="number" class="form-control timepicker" name="custom_fee"
                                    placeholder="Enter custom fee" value="{{ $invoice->custom_fee }}" />

                                @error('custom_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Update Invoice</button>
                            </div>
                        </form>
                        <button onclick="window.history.back()" class="btn btn-danger mt-3">Back</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
