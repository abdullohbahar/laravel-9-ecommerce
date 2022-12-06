<div>
  <!-- Main Content -->
  @include('livewire.category.modal.modal-add-category')
  @include('livewire.category.modal.modal-edit-category')
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
                  @foreach ($categories as $index => $category)
                      <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $category->category }}</td>
                          <td>
                              <button type="button" wire:click="editCategory('{{ $category->id }}')" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit-category">
                                Ubah
                              </button>
                              <a href="javascript:void(0)" wire:click="deleteConfirmation('{{ $category->id }}')" class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                  @endforeach
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
</div>


