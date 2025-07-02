@extends('layouts.main')

@section('breadcrumb', 'Whitelist IP')

@section('menu', 'Whitelist IP')

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
                        <h5 class="modal-title" id="exampleModalLabel">Deposit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/createIP') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user_id" class="col-form-label">Partner</label>
                                <select class="form-control form-select" id="user_id" name="user_id">
                                    <option selected>Pilih Partner</option>
                                    @foreach ($partners as $prs)
                                    <option value="{{ $prs->id_perusahaan }}">{{ $prs->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alllowed_key" class="col-form-label">Allowed Key</label>
                                <select class="form-control form-select" id="allowed_key" name="allowed_key">
                                    <option value="demo" selected>Demo</option>
                                    <option value="live">Live</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="whitelist_ips" class="col-form-label">IP Address</label>
                                <input type="text" class="form-control" id="whitelist_ips" name="whitelist_ips">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama User</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">API Key</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">API Key Sandbox</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Whitelist IP</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ips as $ip)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs mb-0 text-center">
                                            {{ $loop->iteration }}
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $ip->user->name ?? '-' }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $ip->api_key }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $ip->api_key_sandbox }}</p>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info text-white"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalRequest{{ $loop->iteration }}">
                                        View IP
                                    </button>
                                </td>
                                <!-- Modal Request -->
                                <div class="modal fade" id="modalRequest{{ $loop->iteration }}" tabindex="-1" aria-labelledby="modalRequestLabel{{ $loop->iteration }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalRequestLabel{{ $loop->iteration }}">Whitelist IP</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <pre>{{ $ip->whitelist_ips ?? '-' }}</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</div>
@endsection