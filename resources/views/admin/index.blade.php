@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tugas Laundry</h1>
        <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#exampleModal1"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Tugas Laundry</button>
    </div>

    <!-- modal insert -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas Laundry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('task-store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Isi Nama..."
                                value="{{old('name')}}" id="">
                        </div>
                        <div class="form-group">
                            <label for="Jenis Laundry">Jenis Laundry</label>
                            <!-- <input type="text" class="form-control" name="jenis" placeholder="Isi Jenis Laundry..."
                                value="{{old('jenis')}}" id=""> -->


                            <select name="jenis" class="form-control dropdown-toggle">
                                <option value="">---Pilih---</option>
                                <option value="1">
                                    Cuci Kering
                                </option>
                                <option value="2">
                                    Setrika
                                </option>
                                <option value="3">
                                    Cuci Kering + Setrika
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="number" class="form-control" name="berat" placeholder="Isi berat pakaian..."
                                value="{{old('berat')}}" id="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal insert -->

    <!-- modal update -->

    <!-- end modal update -->

    <!-- Content Row -->
    <div class="row">


        <div class="card-body">
            <div class="table-responsive table-laundry">
                <table class="table table-border" width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Jenis Laundry</th>
                        <th>Berat</th>
                        <th>Total bayar</th>
                        <th>Progress</th>
                        <th>Status Pembayaran</th>
                        <th>Admin kasir</th>
                        <th>Dibuat pada</th>
                        <th>Aksi</th>


                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>

                            <?php 
                            $status_bayar = $item->status_bayar;
                            if ($status_bayar == 1) {
                                $status_bayar = "Belum Lunas";
                            } elseif ($status_bayar == 2) {
                                $status_bayar = "Lunas";
                            }
                            $status_progres = $item->status_progres;
                            if ($status_progres == 1) {
                                $status_progres = "Belum Selesai";
                            } elseif ($status_progres == 2) {
                                $status_progres = "Selesai";
                            } elseif ($status_progres == 3) {
                                $status_progres = "Sudah Diambil";
                            } ?>

                            <td>{{$no++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->jeniss->name}}</td>
                            <td>{{$item->berat}} kg</td>
                            <td>{{$item->harga_total}}</td>
                            <td>{{$item->status_progres = $status_progres}}</td>
                            <td>{{$item->status_bayar = $status_bayar}}</td>
                            <td>{{$item->users->name}}</td>
                            <td>{{$item->created_at}}</td>

                            <td>

                                <a href="{{route('task-edit',$item->id)}}" class="btn btn-info"><i
                                        class="fas fa-pencil-alt"></i></a>


                                <form action="{{route('task-destroy',$item->id)}}" method="GET" class="d-inline">

                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>
        </div>





    </div>




</div>
<!-- /.container-fluid -->
@endsection
