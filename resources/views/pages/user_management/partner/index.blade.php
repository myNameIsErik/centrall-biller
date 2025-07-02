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
                                    {{-- Text Fields --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_perusahaan">Nama Perusahaan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                        <select class="form-control" name="kategori" id="kategori" required>
                                            <option value="Kosong">Kosong</option>
                                            <option value="Buyer">Buyer</option>
                                            <option value="Seller">Seller</option>
                                            <option value="Buyer&Seller">Buyer&Seller</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="verifikasi">Verifikasi <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="verifikasi" name="verifikasi">
                                            <option value="unverified" selected>Belum Verifikasi</option>
                                            <option value="verified">Verifikasi</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="tipe_usaha">Tipe Usaha <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="tipe_usaha" name="tipe_usaha">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="no_hp_perusahaan">No HP Perusahaan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="no_hp_perusahaan" name="no_hp_perusahaan">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="provinsi">Provinsi <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="provinsi" name="provinsi">
                                            <option value="">-- Pilih Provinsi --</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="kabupaten">Kabupaten/Kota <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="kabupaten" name="kabupaten">
                                            <option value="">-- Pilih Kabupaten/Kota --</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" id="kecamatan" name="kecamatan">
                                            <option value="">-- Pilih Kecamatan --</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email_perusahaan">Email Perusahaan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="email_perusahaan" name="email_perusahaan">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="jumlah_produk">Jumlah Produk <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="jumlah_produk" name="jumlah_produk">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="rating_mean">Rating Mean <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="rating_mean" name="rating_mean">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="deposit">Deposit <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="deposit" name="deposit">
                                    </div>

                                    {{-- File Fields --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="ektp_penanggung_jawab">e-KTP Penanggung Jawab <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="ektp_penanggung_jawab" name="ektp_penanggung_jawab">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="akte_pendirian">Akte Pendirian <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="akte_pendirian" name="akte_pendirian">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="npwp">NPWP <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="npwp" name="npwp">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="akte_perubahan_terakhir">Akte Perubahan Terakhir <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="akte_perubahan_terakhir" name="akte_perubahan_terakhir">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="izin_usaha">Izin Usaha <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="izin_usaha" name="izin_usaha">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="izin_lokasi">Izin Lokasi <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="izin_lokasi" name="izin_lokasi">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="surat_kuasa">Surat Kuasa <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="surat_kuasa" name="surat_kuasa">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="nib">NIB <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="nib" name="nib">
                                    </div>
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
                                            {{ $loop->iteration + $mitra->firstItem() - 1 }}
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
                                    @if ($mt->verifikasi !== "verified")
                                    <button class="btn btn-xs btn-success text-white" data-bs-toggle="modal" data-bs-target="#verifikasiModal{{ $mt->id_perusahaan }}">
                                        Verifikasi
                                    </button>
                                    @endif
                                    <button class="btn btn-xs btn-info text-white mt-1" data-bs-toggle="modal" data-bs-target="#detailModal{{ $mt->id_perusahaan }}">
                                        Detail
                                    </button>
                                    <button class="btn btn-xs btn-warning text-white mt-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $mt->id_perusahaan }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Konfirmasi Verifikasi -->
                            <div class="modal fade" id="verifikasiModal{{ $mt->id_perusahaan }}" tabindex="-1" role="dialog" aria-labelledby="verifikasiModalLabel{{ $mt->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="{{ url('/partner/verifikasi/' . $mt->id_perusahaan) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Verifikasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin memverifikasi <strong>{{ $mt->nama_perusahaan }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Verifikasi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Modal Detail Mitra -->
                            <div class="modal fade" id="detailModal{{ $mt->id_perusahaan }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $mt->id_perusahaan }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Mitra: {{ $mt->nama_perusahaan }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><strong>Nama Perusahaan:</strong> {{ $mt->nama_perusahaan }}</li>
                                                <li class="list-group-item"><strong>Kategori:</strong> {{ $mt->kategori }}</li>
                                                <li class="list-group-item"><strong>Status Verifikasi:</strong> {{ $mt->verifikasi }}</li>
                                                <li class="list-group-item"><strong>Tipe Usaha:</strong> {{ $mt->tipe_usaha }}</li>
                                                <li class="list-group-item"><strong>No HP:</strong> {{ $mt->no_hp_perusahaan }}</li>
                                                <li class="list-group-item"><strong>Email Perusahaan:</strong> {{ $mt->email_perusahaan }}</li>
                                                <li class="list-group-item"><strong>Provinsi:</strong> {{ $mt->provinsi }}</li>
                                                <li class="list-group-item"><strong>Kabupaten:</strong> {{ $mt->kabupaten }}</li>
                                                <li class="list-group-item"><strong>Kecamatan:</strong> {{ $mt->kecamatan }}</li>
                                                <li class="list-group-item"><strong>Alamat:</strong> {{ $mt->alamat }}</li>
                                                <li class="list-group-item"><strong>Jumlah Produk:</strong> {{ $mt->jumlah_produk }}</li>
                                                <li class="list-group-item"><strong>Rating Mean:</strong> {{ $mt->rating_mean }}</li>
                                                <li class="list-group-item"><strong>Deposit:</strong> {{ $mt->deposit }}</li>

                                                <!-- Dokumen -->
                                                <li class="list-group-item"><strong>eKTP Penanggung Jawab:</strong><br>
                                                    @if ($mt->ektp_penanggung_jawab)
                                                    <a href="{{ asset('storage/' . $mt->ektp_penanggung_jawab) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>Akte Pendirian:</strong><br>
                                                    @if ($mt->akte_pendirian)
                                                    <a href="{{ asset('storage/' . $mt->akte_pendirian) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>NPWP:</strong><br>
                                                    @if ($mt->npwp)
                                                    <a href="{{ asset('storage/' . $mt->npwp) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>Akte Perubahan Terakhir:</strong><br>
                                                    @if ($mt->akte_perubahan_terakhir)
                                                    <a href="{{ asset('storage/' . $mt->akte_perubahan_terakhir) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>Izin Usaha:</strong><br>
                                                    @if ($mt->izin_usaha)
                                                    <a href="{{ asset('storage/' . $mt->izin_usaha) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>Izin Lokasi:</strong><br>
                                                    @if ($mt->izin_lokasi)
                                                    <a href="{{ asset('storage/' . $mt->izin_lokasi) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>Surat Kuasa:</strong><br>
                                                    @if ($mt->surat_kuasa)
                                                    <a href="{{ asset('storage/' . $mt->surat_kuasa) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                                <li class="list-group-item"><strong>NIB:</strong><br>
                                                    @if ($mt->nib)
                                                    <a href="{{ asset('storage/' . $mt->nib) }}" target="_blank">Lihat Dokumen</a>
                                                    @else Tidak Ada @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Edit Mitra -->
                            <div class="modal fade" id="editModal{{ $mt->id_perusahaan }}" tabindex="-1" aria-labelledby="editModalLabel{{ $mt->id_perusahaan }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <form action="{{ url('/partner/update/' . $mt->id_perusahaan) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Data Mitra</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    {{-- Field Text --}}
                                                    @php
                                                    $fields = [
                                                    'nama_perusahaan' => 'Nama Perusahaan',
                                                    'kategori' => 'Kategori',
                                                    'verifikasi' => 'Verifikasi',
                                                    'tipe_usaha' => 'Tipe Usaha',
                                                    'no_hp_perusahaan' => 'No HP',
                                                    'email_perusahaan' => 'Email',
                                                    'provinsi' => 'Provinsi',
                                                    'kabupaten' => 'Kabupaten',
                                                    'kecamatan' => 'Kecamatan',
                                                    'alamat' => 'Alamat',
                                                    'jumlah_produk' => 'Jumlah Produk',
                                                    'rating_mean' => 'Rating Mean',
                                                    'deposit' => 'Deposit',
                                                    ];
                                                    @endphp

                                                    @foreach ($fields as $field => $label)
                                                    <div class="col-md-6 mb-3">
                                                        <label>{{ $label }}</label>
                                                        <input type="text" class="form-control" name="{{ $field }}" value="{{ $mt->$field }}">
                                                    </div>
                                                    @endforeach

                                                    {{-- File Upload --}}
                                                    @php
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

                                                    @foreach ($fileFields as $field => $label)
                                                    <div class="col-md-6 mb-3">
                                                        <label>{{ $label }}</label>
                                                        <input type="file" class="form-control" name="{{ $field }}">
                                                        @if ($mt->$field)
                                                        <small class="text-muted">Dokumen saat ini: <a href="{{ asset('storage/' . $mt->$field) }}" target="_blank">Lihat</a></small>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-3 me-3">
                    {{ $mitra->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Load Provinsi
        $.get("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json", function(data) {
            $('#provinsi').append(data.map(prov => `<option value="${prov.id}">${prov.name}</option>`));
        });

        // Load Kabupaten berdasarkan Provinsi
        $('#provinsi').on('change', function() {
            const provID = $(this).val();
            $('#kabupaten').html('<option value="">-- Pilih Kabupaten/Kota --</option>');
            $('#kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');

            if (provID) {
                $.get(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provID}.json`, function(data) {
                    $('#kabupaten').append(data.map(kab => `<option value="${kab.id}">${kab.name}</option>`));
                });
            }
        });

        // Load Kecamatan berdasarkan Kabupaten
        $('#kabupaten').on('change', function() {
            const kabID = $(this).val();
            $('#kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');

            if (kabID) {
                $.get(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabID}.json`, function(data) {
                    $('#kecamatan').append(data.map(kec => `<option value="${kec.id}">${kec.name}</option>`));
                });
            }
        });
    });
</script>
@endsection