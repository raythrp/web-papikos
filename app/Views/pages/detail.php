<link rel="stylesheet" href="<?= base_url('css/detail.css') ?>">

<section>
  <div class="wrapper">
    <div class="left">
      <img src="<?= base_url('/uploads/' . $kos->foto); ?>" alt="">
    </div>
    <div class="right">
      <p>Kos > <?=$kos->kategori?> > <?=$kos->nama?></p>

      <div class="cardio">
        <h2><?=$kos->nama?></h2>
        <h5><?=$kos->kategori?></h5>
        <p><?=$kos->deskripsi?></p>

        <footer>
          <h3>Rp <?=$kos->harga?> <span>(pertahun)</span></h3>
          <button class="show"><a href="/proses">Ajukan Sewa</a></button>
        </footer>
      </div>
    </div>
  </div>

  <div class="hidden-div" id="hiddenForm">
  <!-- <h1><center>Form Pengajuan Sewa</center></h1>
        <form action="/proses/<?=$kos->id_kos?>/<?=$kos->email_pemilik?>/<?=session()->get('email')?>" method="post">
          <div class="inline">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
          </div>
  
          <div class="inline">
            <label for="name">Tanggal Masuk :</label>
            <input type="date" name="tanggal_masuk">
          </div>
          <button type="submit" class="submit" onclick = "yakin()" >Submit</button>
        </form> -->
  </div>
  
 
  
</section>



<!-- <style>
  .hidden-div {
    display: none;
  }
</style> -->

<script>
  // document.addEventListener('DOMContentLoaded', function() {
  //   var showButton = document.querySelector('.show');
  //   var hiddenDiv = document.getElementById('hiddenForm');

  //   showButton.addEventListener('click', function(event) {
  //     event.preventDefault();

  //     var formExists = document.getElementById('sewaForm');

  //     if (!formExists) {
  //       var form = document.createElement('form');
  //       form.id = 'sewaForm';

  //       form.innerHTML = `
  //       <h1><center>Form Pengajuan Sewa</center></h1>
  //       <form action="/proses/<?=$kos->id_kos?>/<?=$kos->email_pemilik?>/<?=session()->get('email')?>" method="post">
  //         <div class="inline">
  //           <label for="email">Email
  //            :</label>
  //           <input type="email" id="email" name="email" required>
  //         </div>
  
  //         <div class="inline">
  //           <label for="name">Tanggal Masuk :</label>
  //           <input type="date" name="tanggal_masuk">
  //         </div>
  //         <button type="submit" class="submit" onclick = "yakin()" >Submit</button>
  //       </form>
  //       `;

  //       hiddenDiv.innerHTML = '';
  //       hiddenDiv.appendChild(form);
  //     }
      
  //     hiddenDiv.style.display = hiddenDiv.style.display === 'block' ? 'none' : 'block';
  //   });
  // });

  function yakin(){
    alert('Yakin mengajukan sewa di kos ini?')
  }
</script>