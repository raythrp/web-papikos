<link rel="stylesheet" href="<?= base_url('css/dashboard.css'); ?>">

<section id="cari" class="cari">
  <h1>Cari kos berdasarkan <br> kategori yang anda butuhkan!</h1>
  <div class="search-bar">
    <!-- <form action="/search" method="post">
      
      <label for="dropdown" class="lambang"><p><i data-feather="chevron-down"></i></p></label>
      <select id="dropdown" name="dropdown">
        <option value="0">Termurah, terlengkap, dll</option>
        <option value="termurah">Termurah</option>
        <option value="terlengkap">Kp Geulis</option>
        <option value="opsi2">Cikuda</option>
        <option value="opsi3">GKPN</option>
      </select> -->

      <a href="/search"><button type="submit"><i data-feather="search"></i></button></a>
    <!-- </form> -->
  </div>
</section>

<section class="daerah">
  <header>
    <h1>Rekomendasi kos di <span>Kampung Geulis</span></h1>
    <a href="/search/">
      <p>lihat lebih banyak -<span>></span></p>
    </a>
  </header>

  <main>
    <div class="content">
    <?php foreach($kosKampungGeulis as $row) : ?>
        <div class="card-kos">
          <img src="<?= base_url('/uploads/' . $row['foto']); ?>" alt="">
          <header>
            <p><?= $row['kategori'] ?></p>
            <div class="round">
              <p>Tersedia</p>
            </div>
          </header>
          <main>
            <p class="judul"><?= $row['nama'] ?></p>
            <p class="Harga">Rp <?= $row['harga'] ?><span>/ Tahun</span></p>
            <p class="desc"><?= $row['fasilitas'] ?></p>
          </main>
          <footer>
            <a href="/detail/<?= $row['id_kos']?>"><button>View Detail</button></a>
          </footer>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
</section>

<section class="label">
  <div class="text">
    <h1>Kos dikelola langsung oleh PapiKos,</h1>
    <p>Pilihan papi tidak pernah salah :)</p>
  </div>
  <div class="gambar">
    <a href="#"><img src="<?= base_url('/img/logoPapiKos.png'); ?>" alt=""></a>
  </div>
</section>

<section class="comment">
  <h1>Kata penyewa tentang Papi</h1>
  <div class="card-wrapper">
    <div class="comment-card">
      <header>
        <div class="image">
          <img src="<?= base_url('/img/profile.png'); ?>" alt="">
        </div>
        <div class="content">
          <h3>Umar Bin Abdul Aziz</h3>
          <p><i>Kost Casa De Is, Kp.Geulis</i></p>
        </div>
      </header>
      <main>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie velit velit, eget tempus mauris varius ut. Curabitur nec ullamcorper mi, et auctor est. Integer eget augue id orci condimentum auctor. Nulla sit amet sem eget nisi lobortis molestie sed ut leo. Mauris eget ligula nibh. Donec ullamcorper convallis suscipit”.</p>
      </main>
    </div>
    <div class="comment-card">
      <header>
        <div class="image">
          <img src="<?= base_url('/img/profile.png'); ?>" alt="">
        </div>
        <div class="content">
          <h3>Umar Bin Abdul Aziz</h3>
          <p><i>Kost Casa De Is, Kp.Geulis</i></p>
        </div>
      </header>
      <main>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie velit velit, eget tempus mauris varius ut. Curabitur nec ullamcorper mi, et auctor est. Integer eget augue id orci condimentum auctor. Nulla sit amet sem eget nisi lobortis molestie sed ut leo. Mauris eget ligula nibh. Donec ullamcorper convallis suscipit”.</p>
      </main>
    </div>
    <div class="comment-card">
      <header>
        <div class="image">
          <img src="<?= base_url('/img/profile.png'); ?>" alt="">
        </div>
        <div class="content">
          <h3>Umar Bin Abdul Aziz</h3>
          <p><i>Kost Casa De Is, Kp.Geulis</i></p>
        </div>
      </header>
      <main>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie velit velit, eget tempus mauris varius ut. Curabitur nec ullamcorper mi, et auctor est. Integer eget augue id orci condimentum auctor. Nulla sit amet sem eget nisi lobortis molestie sed ut leo. Mauris eget ligula nibh. Donec ullamcorper convallis suscipit”.</p>
      </main>
    </div>
  </div>

  <div class="tombol">
    <a href="#" class="cta">Cari Kos Sekarang</a>
  </div>

</section>

<section class="daerah">
  <header>
    <h1>Rekomendasi kos di <span>CIKUDA </span></h1>
    <a href="">
      <p>lihat lebih banyak -<span>></span></p>
    </a>
  </header>

  <main>
    <div class="content">
      <?php foreach($kosCikuda as $row) : ?>
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
            <p class="Harga">Rp <?= $row['harga'] ?><span>/ Tahun</span></p>
            <p class="desc"><?= $row['fasilitas'] ?></p>
          </main>
          <footer>
            <a href="/detail/<?= $row['id_kos']?>"><button>View Detail</button></a>
          </footer>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
</section>