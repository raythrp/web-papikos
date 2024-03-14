<link rel="stylesheet" href="<?= base_url('css/nav.css') ?>">

<style>
  .profile img{
    width: 45px;
    height: 45px;
  }

  .ujung{
    display: flex;
    width: 20%;
    flex-direction: row-reverse;
    align-items: center;
  }

  .ujung p{
    color: #1A5D1A;
    margin: 0 15px;
    font-size: 1.25rem;
  }

</style>

  <!-- Navbar Start -->
  <nav class="nav">
    <div class="container">
      <div class="logo"><a href="/dashboard"><img src="<?= base_url('img/logoPapiKos.png'); ?>" alt="logo"></a></div>
      <div class="menu">
        <!-- <a href="#" class="menu-item">Beranda</a> -->
        <!-- <a href="/search" class="menu-item"><i data-feather="search"></i></a> -->
      </div>
      <div class="ujung">
        <a href="/profile/<?= session()->get('email')?>" class="profile"><img src="<?= base_url('img/profile.png'); ?>" alt="profile"></a>
        <p>Hi <?= session()->get('nama'); ?>!</p>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->