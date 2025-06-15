@extends('admin.admin_main')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            {{-- Data list --}}
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
                                            <th>Action</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                        @foreach ($trackings as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->tracking_no }}</td>
                                                <td>{{ $data->receiver_fullname }}</td>

                                                <td>
                                                    <a href="{{ route('add.history', $data->id) }}"
                                                        class="btn btn-primary btn-sm" title="Edit Data">Add history</a>
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
