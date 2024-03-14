<link rel="stylesheet" href="<?= base_url('css/login.css'); ?>">

<div class="iye">
  <div class="content">
    <header>
      <h1>Login</h1>
      <p><?= session()->getFlashdata('error') ?></p>
    </header>
    <form action="" method="post">
      <div class="inline">
        <label for="">Email</label>
        <input type="email" name="email" id="" value="<?= session()->getFlashdata('username'); ?>">
      </div>
      <div class="inline">
        <label for="">Password</label>
        <input type="password" name="password" id="">
      </div>
      <button type="submit" name="login" value="Login">Login</button>
      <p>Belum punya Papi? <span><a href="/register">Daftar Disini</a></span></p>
    </form>
  </div>
</div>
