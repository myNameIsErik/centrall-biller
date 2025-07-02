@extends('layouts.main')

@section('breadcrumb', 'Product')

@section('menu', 'Product')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-icon btn-3 btn bg-gradient-info me-sm-2" data-bs-toggle="modal" data-bs-target="#addProduct" type="button">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">Add Data</span>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/createProduct') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier">Partner <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="supplier" name="supplier">
                                            <option selected disabled>Select Partner</option>
                                            @foreach ($partners as $partner)
                                            <option value="{{ $partner->nama_perusahaan }}">{{ $partner->nama_perusahaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Supplier <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="kategori" name="kategori">
                                            <option selected disabled>Select Supplier</option>
                                            @foreach ($productCategories as $pc)
                                            <option value="{{ $pc->kode_supplier }}">{{ $pc->kode_supplier }} - {{ $pc->nama_supplier }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_produk">Product <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="nama_produk" name="nama_produk">
                                            <option selected disabled>Select Product</option>
                                            @foreach ($productLists as $pl)
                                            <option value="{{ $pl->nama_produk }}" data-kode="{{ $pl->kode_produk }}">{{ $pl->nama_produk }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_produk">Kode Produk</label>
                                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Cost (Rp.) <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp.</span>
                                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="harga" name="harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Admin Fee (Rp.) <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp.</span>
                                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="admin" name="admin">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Partner Fee (Rp.) <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp.</span>
                                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="fee" name="fee">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">System Fee (Rp.) <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp.</span>
                                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="biaya_sistem" name="biaya_sistem">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Status <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="status" name="status">
                                            <option value="OFF" selected>Inactive</option>
                                            <option value="ON">Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn bg-gradient-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-icon btn-2 btn bg-gradient-info" type="button">
            <span class="btn-inner--icon"><i class="fas fa-sync-alt"></i></span>
        </button>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Produk</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Main</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Biaya Sistem</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Admin</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fee</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Supplier</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs mb-0 text-center">
                                            {{ $loop->iteration + $products->firstItem() - 1 }}
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs mb-0 text-center">{{ $product->kode_produk }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ $product->kode_main ?? '-' }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ $product->nama_produk ?? '-' }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if ($product->status === "ON")
                                    <span class="badge bg-gradient-success">On</span>
                                    @else
                                    <span class="badge bg-gradient-danger">Off</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->biaya_sistem }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->harga }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->admin }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->fee }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->kategori }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $product->supplier }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-3 me-3">
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('nama_produk').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const kodeProduk = selectedOption.getAttribute('data-kode');
        document.getElementById('kode_produk').value = kodeProduk ?? '';
    });
</script>
@endsection