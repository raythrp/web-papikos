<link rel="stylesheet" href="<?= base_url('css/status.css') ?>">

<section>
  <div class="cardio">
    <div class="left">
      <div class="card-kos">
        <img src="<?= base_url('/img/kos.png'); ?>" alt="">
        <header>
          <p><?= $kos->kategori?></p>
          <div class="round">
            <p>Best Seller</p>
          </div>
        </header>
        <main>
          <p class="judul"><?= $kos->nama?></p>
          <p class="Harga">Rp <?= $kos->harga?> <span>/ Tahun</span></p>
          <p class="desc"><?= $kos->fasilitas?></p>
        </main>
        <footer>
          <a href="/detail/<?= isset($kos->id_kos) ? $kos->id_kos : '#' ?>"><button>View Detail</button></a>
        </footer>
      </div>
    </div>
    <div class="right">
      <h1>
        <center>Kosan Kamu</center>
      </h1>
      <div class="form">


        <div class="inline first">
          <label for="namakos">Nama Kos :</label>
          <input type="text" name="namakos" id="namakos" value="<?= $kos->nama?>" readonly>
        </div>
        <!-- <div class="inline">
          <label for="statusSewa">Status Sewa :</label>
          <input type="text" name="statusSewa" id="statusSewa">
        </div> -->
        <div class="inline">
          <label for="tglmasuk">Tanggal Masuk :</label>
          <input type="text" name="tglmasuk" id="tglmasuk" value="<?= $penyewa['tanggal_masuk']?>" readonly>
        </div>
        <div class="inline">
          <label for="tglkeluar">Tanggal Keluar :</label>
          <input type="email" name="tglkeluar" id="tglkeluar" value="<?= $penyewa['tanggal_keluar']?>" readonly>
        </div>

      </div>

      <div class="inline-button">
        <button><a href="/profile/<?= session()->get('email')?>">Kembali</a></button>
        <button><a href="/stopSewa/<?=$kos->id_kos?>/<?= session()->get('email')?>">Berhenti Sewa</a></button>
      </div>
    </div>
  </div>
</section>