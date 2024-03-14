<link rel="stylesheet" href="<?= base_url('css/login.css'); ?>">

<div class="iye">
  <div class="content">
    <header>
      <h1>Register</h1>
      <p><?= session()->getFlashdata('error') ?></p>
    </header>
    <form action="" method="post">
      <div class="inline">
        <label for="">Email</label>
        <input type="email" name="email" id="">
      </div>
      <div class="inline">
        <label for="">Password</label>
        <input type="password" name="password" id="">
      </div>
      <hr>
      <div class="inline">
        <label class="atas" for="">Nama</label>
        <input type="text" name="nama" id="">
      </div>
      <div class="inline">
        <label for="">Nomor Telpon</label>
        <input type="text" name="notelp" id="">
      </div>
      <div class="inline">
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="">
      </div>
      <button type="submit" name="register" value="Register">Register</button>
      <p>Sudah punya Papi? <span><a href="/login">Login Disini</a></span></p>
    </form>
  </div>
</div>