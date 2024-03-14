<link rel="stylesheet" href="<?= base_url('css/admin.css'); ?>">

<section>
  <h1 class="judul">Detail Kos Kamu!</h1>
  <div class="cardio">
    <div class="wrapper">
      <div class="left">
        <h1>
          <center>Kost <?=$kos->nama?></center>
        </h1>

        <div class="inline first">
          <label for="deskripsi">Deskripsi:</label>
          <!-- <input type="text" name="deskripsi" id="deskripsi" value="lorem"> -->
          <textarea class="textarea" ng-model="text2" style="width: 64%; height: 120px; border: 1px solid #1A5D1A;
  border-radius: 3px;
  padding: 0 10px;" readonly><?= $kos->deskripsi ?></textarea>
        </div>
        <div class="inline">
          <label for="harga">Harga:</label>
          <input type="text" name="harga" id="harga" value="<?=$kos->harga?>" readonly>
        </div>
        <div class="inline">
          <label for="jumlah_kamar">Jumlah Kamar:</label>
          <input type="email" name="jumlah_kamar" id="jumlah_kamar" value="<?=$kos->jumlah_kamar?>" readonly>
        </div>
        <div class="inline">
          <label for="penyewa_aktif">Penyewa Aktif:</label>
          <input type="text" name="penyewa_aktif" id="penyewa_aktif" value="<?= $active ?>" readonly>
        </div>
      </div>

      <div class="right">
        <img src="<?= base_url('/uploads/' . $kos->foto); ?>" alt="">
      </div>

    </div>
  </div>

  <a href="/admin/<?= session()->get('email') ?>"><<span>-</span> Kembali</a>
</section>