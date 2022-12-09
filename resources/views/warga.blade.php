@extends('layouts.second')

@section('second')
    <section class="section m-4">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $b)
                            <tr>
                                <td>{{ $b->nama }}</td>
                                <td>{{ $b->nik }}</td>
                                <td>{{ $b->jk }}</td>
                                <td>{{ $b->usia }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <button type="button" class="btn btn-lg btn-floating position-fixed m-4" data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                style="right: 0; bottom: 0; z-index: 10; background-color:#435ebe; border-radius: 50%;">
                <img src="assets/images/plus-solid.png" width="20px">
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Warga</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nama</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="first-name" class="form-control"
                                                        placeholder="Nama">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>NIK</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="email-id" class="form-control"
                                                        placeholder="NIK">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Usia</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="password" class="form-control"
                                                        placeholder="Usia">
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan Perubahan</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
        <script src="assets/js/pages/simple-datatables.js"></script>
        
<script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="assets/js/pages/form-element-select.js"></script>

    </section>
@endsection
