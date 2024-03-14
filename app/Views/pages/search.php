<link rel="stylesheet" href="<?= base_url('css/search.css') ?>">

<section>
  <h1 class="judul">Berdasarkan Pencarian Anda</h1>


  <!-- need to loop -->

  <?php foreach($kos as $row) :?>

  <a href="/detail/<?=$row['id_kos']?>" class="cardio">
    <div class="left">
      <img src="<?= base_url('/uploads/' . $row['foto']); ?>" alt="">
    </div>
    <div class="right">
      <h1><?=$row['nama']?></h1>
      <h5><?=$row['kategori']?></h4>
        <p><?=$row['fasilitas']?></p>
        <footer>
          <h2>Rp <?=$row['harga']?><span>(pertahun)</span></h2>
        </footer>
    </div>
  </a>
  <?php endforeach;?>


  <a href="/dashboard" class="back"><i data-feather="arrow-left"></i>Kembali</a>

</section>