<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['bakat']['nama'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['bakat']['bakat'] ?></h6>
        <p class="card-text"><?= $data['bakat']['email'] ?></p>
        <p class="card-text">Seorang programmer</p>
        <a href="<?= BASEURL; ?>/bakat" class="card-link">Kembali</a>
    </div>
    </div>
</div>