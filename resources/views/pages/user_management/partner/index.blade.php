@extends('layouts.main')

@section('breadcrumb', 'Perusahaan Mitra')

@section('menu', 'Perusahaan Mitra')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-icon btn-3 btn bg-gradient-info me-sm-2" data-bs-toggle="modal" data-bs-target="#addProduct" type="button">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">Add Data</span>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mitra Partner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/createPartner') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Mitra Partner</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    @php
                                    $textFields = [
                                    'nama_perusahaan' => 'Nama Perusahaan',
                                    'kategori' => 'Kategori',
                                    'verifikasi' => 'Verifikasi',
                                    'tipe_usaha' => 'Tipe Usaha',
                                    'no_hp_perusahaan' => 'No HP Perusahaan',
                                    'provinsi' => 'Provinsi',
                                    'kabupaten' => 'Kabupaten',
                                    'kecamatan' => 'Kecamatan',
                                    'alamat' => 'Alamat',
                                    'email_perusahaan' => 'Email Perusahaan',
                                    'jumlah_produk' => 'Jumlah Produk',
                                    'rating_mean' => 'Rating Mean',
                                    'deposit' => 'Deposit',
                                    ];

                                    $fileFields = [
                                    'ektp_penanggung_jawab' => 'e-KTP Penanggung Jawab',
                                    'akte_pendirian' => 'Akte Pendirian',
                                    'npwp' => 'NPWP',
                                    'akte_perubahan_terakhir' => 'Akte Perubahan Terakhir',
                                    'izin_usaha' => 'Izin Usaha',
                                    'izin_lokasi' => 'Izin Lokasi',
                                    'surat_kuasa' => 'Surat Kuasa',
                                    'nib' => 'NIB',
                                    ];
                                    @endphp

                                    @foreach ($textFields as $field => $label)
                                    <div class="col-md-6 mb-3">
                                        <label for="{{ $field }}">{{ $label }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="{{ $field }}" name="{{ $field }}">
                                    </div>
                                    @endforeach

                                    @foreach ($fileFields as $field => $label)
                                    <div class="col-md-6 mb-3">
                                        <label for="{{ $field }}">{{ $label }} <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="{{ $field }}" name="{{ $field }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perusahaan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipe Usaha</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $mt)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs mb-0 text-center">
                                            {{ $loop->iteration }}
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-3 py-1 text-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $mt->nama_perusahaan }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mt->kategori ?? '-' }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if ($mt->verifikasi === "verified")
                                    <span class="badge bg-gradient-success">Verified</span>
                                    @else
                                    <span class="badge bg-gradient-danger">Unverified</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mt->tipe_usaha ?? '-' }}</p>
                                </td>
                                <td class="align-middle">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $mt->alamat }}</span>
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
            </div>
        </div>
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection