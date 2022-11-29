@extends('admin.layouts.app')

@section('title')
Kategori
@endsection

@push('addons-css')
@endpush

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Kategori Barang</h4>
            <div class="card-header-form">
              <button class="btn btn-success" id="button-add-category">+ Tambah Kategori</button>
            </div>
          </div>
          <div class="card-header">
            <h4></h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Cari Kategori">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <tr>
                  <th>#</th>
                  <th>Nama Kategori</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Rumah Tangga</td>
                  <td><a href="#" class="btn btn-warning">Ubah</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Buku</td>
                  <td><a href="#" class="btn btn-warning">Ubah</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dapur</td>
                  <td><a href="#" class="btn btn-warning">Ubah</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Elektronik</td>
                  <td><a href="#" class="btn btn-warning">Ubah</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Fashion</td>
                  <td><a href="#" class="btn btn-warning">Ubah</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

{{-- Modal --}}
@include('admin.components.modal.add-category-modal')

@endsection

@push('addons-js')
@endpush