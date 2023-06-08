@extends("admin.layout.layout")
@section("title","Car Type")
@section("main")
    <!-- Page Header -->
    @include("admin.html.content-header")
    <!-- Page Header Close -->

    <!-- Start::row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">Car Type</div>
                    <div class="prism-toggle">
                        <button class="btn btn-sm btn-primary-light">Show<i
                                class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col" class="w-25">Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Update At</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>SUV</td>
                                <td>SUV is a multi-purpose sport vehicle that stands for Sport Utility Vehicle with a
                                    square, powerful, muscular design with a truck-like body structure and high ground
                                    clearance, strong engine for the ability to overtake. topographic
                                </td>
                                <td><span class="badge bg-outline-secondary">21,Dec 2021</span></td>
                                <td><span class="badge bg-outline-success">22,Dec 2021</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::row -->
@endsection