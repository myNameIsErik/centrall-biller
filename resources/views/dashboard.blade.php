@extends('layouts.main')

@section('menu', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Transaksi Sukses</p>
                <h5 class="font-weight-bolder">
                  {{ number_format($transactionSuccess) }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">dari</span>
                  {{ number_format($transactions) }} Transaksi
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Transaksi Mitra</p>
                <h5 class="font-weight-bolder">
                  {{ number_format($mitraTransactions) }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">-</span>
                  -
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-9">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Transaksi Mitra by PDAM</p>
                <h5 class="font-weight-bolder">
                  -
                </h5>
                <p class="mb-0">
                  <span class="text-danger text-sm font-weight-bolder">-</span>

                </p>
              </div>
            </div>
            <div class="col-3 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection