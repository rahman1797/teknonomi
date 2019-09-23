<style type="text/css">
  .social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

  .social-link:hover,
  .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
  }
</style>

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">Teknonomi</h1>
        <p class="lead text-muted mb-0"></p>
        <p class="lead text-muted">Memberikan informasi seputar teknologi yang lebih meluas
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fas fa-chart-bar fa-2x mb-3 text-primary"></i>
        <h5 class=""></h5>
        <p class="text-muted" style="font-size: 25px"></p>
        <p class="text-muted mb-4"style="font-size: 20px" align="justify">Teknonomi adalah media teknologi menggunakan Bahasa Indonesia. Dengan lingkup topik yang meluas, menjadikan Teknonomi sebagai salah satu rujukan informasi yang paling tepat. </p>

        <p class="text-muted mb-4"style="font-size: 20px" align="justify"> Diantara tujuan kami adalah untuk memberi informasi dan melayani para  pemangku kepentingan teknologi dan beragam solusi. Selain memproduksi artikel yang berkualitas, kami juga bisa menjembatani kepentingan publikasi antara penyedia teknologi dengan jangkauan para penggunanya secara holistik.
        </p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-lg-5 px-5 mx-auto"><img src="<?php echo base_url(); ?>assets/images/icons/vi-office1.png" alt="dd" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <!-- <h5 class="">Address</h5> -->
        <p class="text-muted" style="font-size: 25px">Address</p>
        <p class="text-muted mb-4"style="font-size: 20px">Jalan Cipinang Pulo No.32 RT006/014, Jatinegara Jakarta Timur</p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fas fa-globe fa-2x mb-3 text-primary"></i>
        <!-- <h5 class="">Contact</h5> -->
        <p class="text-muted" style="font-size: 25px">Contact</p>
        <p class="text-muted" style="font-size: 20px">Seperti apa saja layanan yang bisa kami berikan? Silahkan kontak kami di </p>
        <p class="text-muted" style="font-size: 17px"><b>redaksi@teknonomi.com</b></p>
        <p class="text-muted mb-4"style="font-size: 17px"><b>marketing@teknonomi.com</b></p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="<?php echo base_url(); ?>assets/images/icons/contactus.png" alt="dd" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">The team</h2>
        <p class="font-italic text-muted"></p>
      </div>
    </div>

    <div class="row text-center">
      <?php foreach($user as $u){ ?>
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img <?php if ($u->user_jeniskelamin == 'Perempuan') {
          echo"src='https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png'"; } else {
             echo"src='https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png'";
          } ?> alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0"><?php echo $u->user_nama ?></h5><span class="small text-uppercase text-muted"><?php echo $this->m_user->getPosisiByID($u->user_posisi)->posisiuser_nama; ?></span>
          <ul class="social mb-0 list-inline mt-3">
          </ul>
        </div>
      </div>
      <!-- End-->
    <?php } ?>
      

    </div>
  </div>
</div>
