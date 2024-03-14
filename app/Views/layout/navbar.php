<link rel="stylesheet" href="<?= base_url('css/nav.css') ?>">

<?php if (isset($theme)) : ?>
  <!-- Navbar Start -->
  <nav class="nav">
    <div class="container">
      <div class="logo"><a href="/"><img src="<?= base_url('img/logoPapiKos.png'); ?>" alt="logo"></a></div>
      <div class="menu">
        <!-- <a href="#" class="menu-item">Beranda</a> -->
        <a href="#head" class="menu-item">Best Offer</a>
        <a href="#something" class="menu-item">Service</a>
        <a href="#footer" class="menu-item">Contact Us</a>
      </div>
      <div class="sign-up">
        <a href="/register" class="daftar">Daftar</a>
        <a href="/login" class="login">Masuk</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
<?php else : ?>
  <nav class="nav">
    <div class="container">
      <div class="logo"><a href="/"><img src="<?= base_url('img/logoPapiKos.png'); ?>" alt="logo"></a></div>
      <div class="menu">
        <!-- <a href="#" class="menu-item">Beranda</a>
        <a href="#" class="menu-item">Layanan</a>
        <a href="#" class="menu-item">Fitur</a>
        <a href="#footer" class="menu-item">Contact Us</a> -->
      </div>
      <div class="sign-up">
        <!-- <a href="/pages/register" class="daftar">Daftar</a>
        <a href="/pages/login" class="login">Masuk</a> -->
      </div>
    </div>
  </nav>
<?php endif; ?>