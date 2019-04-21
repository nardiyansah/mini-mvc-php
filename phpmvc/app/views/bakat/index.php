
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Bakat</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['bakat'] as $bkt) : ?>
        <tr>
            <th scope="row"><?= $bkt['nomor'] ?></th>
            <td><?= $bkt['bakat'] ?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>