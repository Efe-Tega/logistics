@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Invoice</h6>
                <hr />

                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">

                        <form action="{{ route('add.invoice') }}" method="POST" class="row g-3">
                            @csrf

                            {{-- Shipment Travel History --}}
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary mt-3"></i>
                                </div>
                                <h5 class="mb-0 text-primary mt-3">Add Invoice information</h5>
                            </div>
                            <hr>

                            {{-- <input type="hidden" name="id" value="{{ $editData->id }}"> --}}

                            <div class="col-md-6">
                                <label class="form-label">Tracking No</label>
                                <select class="form-select" name="tracking_id">
                                    <option value="" selected>Choose tracking Number...</option>
                                    @foreach ($trackings as $tracking)
                                        <option value="{{ $tracking->id }}">{{ $tracking->tracking_no }}
                                            [{{ $tracking->receiver_fullname }}]</option>
                                    @endforeach
                                </select>

                                @error('tracking_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputFirstName" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="bank_name"
                                    value="{{ old('bank_name') }}" placeholder="Enter bank name">

                                @error('bank_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Account Number</label>
                                <input type="text" class="form-control" name="acct_no" value="{{ old('acct_no') }}"
                                    placeholder="Enter account number" />

                                @error('acct_no')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Freight Amount</label>
                                <input type="number" class="form-control timepicker" name="frieght_amount"
                                    value="{{ old('frieght_amount') }}" placeholder="Enter freight amount" />

                                @error('frieght_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Warehouse Fee</label>
                                <input type="number" class="form-control timepicker" name="warehouse_fee"
                                    value="{{ old('warehouse_fee') }}" placeholder="Enter warehouse fee" />

                                @error('warehouse_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Custom Fee</label>
                                <input type="number" class="form-control timepicker" name="custom_fee"
                                    value="{{ old('custom_fee') }}" placeholder="Enter custom fee" />

                                @error('custom_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Generate Invoice</button>
                            </div>
                        </form>
                        <button onclick="window.history.back()" class="btn btn-danger mt-3">Back</button>
                    </div>
                </div>

            </div>
        </div>

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

                        <h4 class="card-title mb-4">All Invoices</h4>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="table-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th> Tracking Number</th>
                                        <th> Receiver's Name</th>
                                        <th> Bank Name</th>
                                        <th> Account Number </th>
                                        <th> Freight Amount </th>
                                        <th> Warehouse Fee </th>
                                        <th> Custom Fee </th>
                                        <th>Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @foreach ($invoices as $key => $invoice)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $invoice->tracking->tracking_no }} </td>
                                            <td>
                                                {{ $invoice->tracking->receiver_fullname }}</td>
                                            <td>{{ $invoice->bank_name }}</td>
                                            <td>{{ $invoice->acct_no }}</td>
                                            <td>${{ number_format($invoice->frieght_amount, 2) }}</td>
                                            <td>${{ number_format($invoice->warehouse_fee, 2) }}</td>
                                            <td>${{ number_format($invoice->custom_fee, 2) }}</td>

                                            <td>
                                                <a href="{{ route('edit.invoice', $invoice->id) }}"
                                                    class="btn btn-info btn-sm" title="Edit Data">Edit</a>
                                                <a href="{{ route('delete.invoice', $invoice->id) }}"
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

    </div>
@endsection
