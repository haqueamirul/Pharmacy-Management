@extends('layouts.base')

@section('content')
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4>Sppliers</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Deep Pharmacy</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Supplier</a></li>
                         <li class="breadcrumb-item active">Add Supplier</li>
                     </ol>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <a href="{{ route('supplier') }}" class="btn btn-success">All Supplier</a>
            </div>
         </div>
     </div>
    </div>
 </div>
 <!-- end page title -->    


<div class="container-fluid">

    <div class="page-content-wrapper">

        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="header-title">Add Supplier </h2>
                        
                        <form action="{{ route('store.supplier') }}" method="post" class="needs-validation mt-2" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Customer Name</label>
                                        <input type="text" name="name" class="form-control" id="validationCustom01"
                                            placeholder="Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="validationCustom02"
                                            placeholder="Email address" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationCustom02"
                                            placeholder="Phone number" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Fax</label>
                                        <input type="text" name="fax" class="form-control" id="validationCustom01"
                                            placeholder="Fax" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact</label>
                                        <input type="text" name="contact" class="form-control" id="validationCustom02"
                                            placeholder="Contact" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Previous Balace</label>
                                        <input type="number" name="pre_balace" class="form-control" id="validationCustom02"
                                            placeholder="Balace" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="validationCustom04"
                                            placeholder="Address" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid Address.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" id="validationCustom04"
                                            placeholder="City" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Zip</label>
                                        <input type="text" name="zip" class="form-control" id="validationCustom05"
                                            placeholder="Zip" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Save Customer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
</div> <!-- container-fluid -->

@endsection