<link rel="stylesheet" href="<?= base_url('css/profile.css') ?>">

<section>
  <div class="cardio">
    <h1>Profile</h1>
    <img src="<?= base_url('/img/profile.png'); ?>" alt="">
    <form action="/updateProfile/<?= session()->get('email')?>" method="post">
    <!-- <div class="inline first">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
    </div> -->
    <div class="inline first">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" id="nama" value="<?= $penyewa['nama']?>">
    </div>
    <div class="inline">
      <label for="notelp">No Telp:</label>
      <input type="text" name="notelp" id="notelp" value="<?= $penyewa['nomor_telepon']?>">
    </div>
    <div class="inline">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="<?= $penyewa['email']?>" readonly>
    </div>
    <div class="inline">
      <label for="alamat">Alamat:</label>
      <input type="text" name="alamat" id="alamat" value="<?= $penyewa['alamat']?>">
    </div>

    <div class="inline-button">
      <button type="submit">Simpan</button>
      <button><a href="/statusSewa/<?= $penyewa['email']?>">Lihat status sewa</a></button>
    </div>
    </form>
  </div>
</section>