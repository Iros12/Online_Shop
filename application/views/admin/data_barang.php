<div class="container-fluid">
  <button class="btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

  <table class="table tabel-bordered">
    <tr>
      <th>No</th>
      <th>Nama Baranag</th>
      <th>Keterangan</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Stok</th>
      <th colspan="3">Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($barang as $brg) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $brg->nama_brg ?></td>
        <td><?php echo $brg->keterangan ?></td>
        <td><?php echo $brg->kategori ?></td>
        <td><?php echo $brg->harga ?></td>
        <td><?php echo $brg->stok ?></td>
        <td>
          <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
        </td>
        <td>
          <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
        </td>
        <td>
          <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">From Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
          <div class="from-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control">
          </div>
          <div class="from-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>
          <div class="from-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>Elektronik</option>
              <option>Pakaian Pria</option>
              <option>Pakaian Wanita</option>
              <option>Pakaian Anak-anak</option>
              <option>Peralatan Olahraga</option>
            </select>
          </div>
          <div class="from-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>
          <div class="from-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
          </div>
          <div class="from-group">
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>