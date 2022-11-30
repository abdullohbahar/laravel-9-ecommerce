<!-- Modal -->
<div class="modal fade" id="modal-add-banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <div class="form-group">
                <label for="">Gambar Banner</label>
                <input type="file" name="category" class="form-control" id="imageUpload" placeholder="Kategori Barang">
              </div>
            </div>
            <div class="col-6">
              <img src="" class="image-fluid w-100" id="imagePreview">
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="category" class="form-control" id="" placeholder="Kategori Barang">
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success btn-block mt-2">Tambah Kategori</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>