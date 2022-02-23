@extends('layouts.base')

@push('page-css')
	<!-- Select2 CSS -->
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> 
@endpush

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4>Customers</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Deep Pharmacy</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                         <li class="breadcrumb-item active">All Customer</li>
                     </ol>
             </div>
         </div>
         {{-- <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <a href="" class="btn btn-success">Add Widget</a>
            </div>
         </div> --}}
     </div>
    </div>
 </div>
 <!-- end page title -->    


<div class="container-fluid">

    <div class="page-content-wrapper">
        @include('flash-message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('add.supplier') }}" class="btn btn-success mb-2"><i class="mdi mdi-plus me-2"></i> Add Supplier</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customercheck">
                                                <label class="form-check-label" for="customercheck">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Supplier</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Wallet Balance</th>
                                        <th>Joining Date</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customercheck1">
                                                    <label class="form-check-label" for="customercheck1">&nbsp;</label>
                                                </div>
                                            </td>
                                            
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->phone }}</td>
                                            
                                            <td>
                                                BDT {{ $supplier->pre_balace }}
                                            </td>
                                            <td>
                                                {{ $supplier->created_at }}
                                            </td>
                                            <td id="tooltip-container0">
                                                <a href="javascript:void(0);" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>

    
</div> <!-- container-fluid -->
@endsection

@push('page-js')
	<!-- Select2 CSS -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endpush