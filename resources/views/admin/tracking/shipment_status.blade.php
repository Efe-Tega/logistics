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
                                    <a href="{{ route('create.shipment') }}" class="btn btn-primary xs">Add Shipment</a>
                                </a>

                            </div>

                            <h4 class="card-title mb-4">All Shipment</h4>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th> Tracking Number</th>
                                            <th> Shipper</th>
                                            <th> Date / Time Created </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <tbody>

                                        @php($i = 1)
                                        @foreach ($statusData as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->tracking_no }}</td>
                                                <td>{{ $item->shipment_status }}</td>
                                                <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>

                                                <td>
                                                    {{-- {{ route('delete.request', $item->id) }} --}}
                                                    <a href="{{ route('new.status', $item->id) }}" class="btn btn-info sm"
                                                        title="Edit Data">Edit</a>
                                                    <a href="" class="btn btn-danger sm" title="Delete Data"
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
    </div>
@endsection
