@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('frontend/css/invoice.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="page-content container">
        <div class="page-header text-blue-d2">
            <h1 class="page-title text-secondary-d1">
                Nomor Resi
                <small class="page-info">
                    <i class="fa fa-angle-double-right text-80"></i>
                    ID: {{ $resi->kode }}
                </small>
            </h1>

            <div class="page-tools">
                <div class="action-buttons">
                    <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                        Print
                    </a>
                    <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                        Export
                    </a>
                </div>
            </div>
        </div>

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center text-150">
                                <div class="logo">
                                    <a href=""><img src="{{ url('frontend/img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->

                    <hr class="row brc-default-l1 mx-n1 mb-4" />
                    <?php
                    $status_bayar = $resi->status_bayar;
                    if ($status_bayar == 1) {
                        $status_bayar = 'Belum Lunas';
                    } elseif ($status_bayar == 2) {
                        $status_bayar = 'Lunas';
                    }
                    $status_progres = $resi->status_progres;
                    if ($status_progres == 1) {
                        $status_progres = 'Belum Selesai';
                    } elseif ($status_progres == 2) {
                        $status_progres = 'Selesai';
                    } elseif ($status_progres == 3) {
                        $status_progres = 'Sudah Diambil';
                    } ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">Pemilik:</span>
                                <span class="text-600 text-110 text-blue align-middle">{{ $resi->name }}</span>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    information
                                </div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                        class="text-600 text-90">Nomor Tiket:</span> {{ $resi->kode }}</div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                        class="text-600 text-90">Status Laundry:</span>
                                    {{ $resi->status_progres = $status_progres }}</div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                        class="text-600 text-90">Status Pembayaran:</span> <span
                                        class="badge badge-success badge-pill px-25">{{ $resi->status_bayar = $status_bayar }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="row text-600 text-white bgc-default-tp1 py-25">
                            <div class="col-9 col-sm-5">Jenis Laundry</div>
                            <div class="d-none d-sm-block col-4 col-sm-2">Berat</div>
                            <div class="d-none d-sm-block col-sm-2">Harga Total</div>
                            <div class="col-2">Petugas</div>
                        </div>

                        <div class="text-95 text-secondary-d3">
                            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                                <div class="col-9 col-sm-5">{{ $resi->jeniss->name }}</div>
                                <div class="d-none d-sm-block col-2">{{ $resi->berat }} kg </div>
                                <div class="d-none d-sm-block col-2 text-95">{{ $resi->harga_total }},00-</div>
                                <div class="col-2 text-secondary-d2">{{ $resi->users->name }}</div>
                            </div>
                        </div>

                        <div class="row border-b-2 brc-default-l2"></div>

                        <!-- or use a table instead -->
                        <!--
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                                <thead class="bg-none bgc-default-tp1">
                                    <tr class="text-white">
                                        <th class="opacity-2">#</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th width="140">Amount</th>
                                    </tr>
                                </thead>

                                <tbody class="text-95 text-secondary-d3">
                                    <tr></tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Domain registration</td>
                                        <td>2</td>
                                        <td class="text-95">$10</td>
                                        <td class="text-secondary-d2">$20</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        -->
                        <hr />

                        <div>
                            <span class="text-secondary-d1 text-105">Kebahagaianmu kepuasan kami</span>
                            <a href="{{url('/')}}" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Kembali Ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
