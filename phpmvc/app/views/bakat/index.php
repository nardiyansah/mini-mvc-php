<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
  Insert Data Programmer
</button>
  <ul class="list-group">
    <li class="list-group-item list-group-item-dark">Data Programmer</li>
    <?php foreach ($data['bakat'] as $bkt) : ?>
      <li class="list-group-item d-flex justify-content-between align-items-center"><?= $bkt['nama'] ?><a href="<?= BASEURL; ?>/bakat/detail/<?= $bkt['nomor']; ?>" class="badge badge-pill badge-primary">Detail</a></li>
    <?php endforeach; ?>
  </ul>
</div>

<!-- Modal -->

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulLabel">Input Data Programmer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/bakat/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nardiyansah">
          </div>
          <div class="form-group">
            <label for="bakat">Keahlian</label>
            <input type="text" class="form-control" id="bakat" name="bakat" placeholder="Membuat website">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="example@mail.com">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
