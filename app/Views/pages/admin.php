<link rel="stylesheet" href="<?= base_url('css/admin.css'); ?>">

<section>
  <h1 class="judul">Hi Admin <?= session()->get('nama') ?>!</h1>
  <div class="cardio">
    <div class="wrapper">
      <div class="yadek">
        <h1>
          Data Penyewaan Kos Kamu
        </h1>
        <p>
          Klik detail untuk melihat penyewa dan sisa kamar!
        </p>

        <main>
          <div class="content">
            <?php foreach($kos as $row) : ?>
            <div class="card-kos">
              <img src="<?= base_url('/uploads/' . $row['foto']); ?>" alt="">
              <header>
                <p><?= $row['kategori'] ?></p>
                <div class="round">
                  <p>Best Seller</p>
                </div>
              </header>
              <main>
                <p class="judul"><?= $row['nama'] ?></p>
                <p class="Harga">Rp <?= $row['harga'] ?><span>/ Bulan</span></p>
                <p class="desc"><?= $row['fasilitas'] ?></p>
              </main>
              <footer>
                <a href="/adminDetail/<?= $row['id_kos']?>"><button>View Detail</button></a>
              </footer>
            </div>
            <?php endforeach; ?>
          </div>
        </main>
</section>

</div>
</div>
</div>

<a href="/logout">
  <<span>-</span> Kembali
</a>
</section>