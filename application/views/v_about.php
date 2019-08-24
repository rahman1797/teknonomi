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
        <h1 class="display-4">About us page</h1>
        <p class="lead text-muted mb-0"></p>
        <p class="lead text-muted"></a>
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
        <h5 class="">About</h5>
        <p class="text-muted" style="font-size: 25px">Lorem ipsum dolor sit amet</p>
        <p class="text-muted mb-4"style="font-size: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-lg-5 px-5 mx-auto"><img src="<?php echo base_url(); ?>assets/images/icons/vi-office1.png" alt="dd" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h5 class="">Address</h5>
        <p class="text-muted" style="font-size: 25px">Rumah Ammar-Aimar</p>
        <p class="text-muted mb-4"style="font-size: 20px">Jalan Cipinang Pulo No.32 RT006/014, Jatinegara Jakarta Timur</p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fas fa-globe fa-2x mb-3 text-primary"></i>
        <h5 class="">Contact</h5>
        <p class="text-muted" style="font-size: 20px">redaksi@teknonomi.com</p>
        <p class="text-muted mb-4"style="font-size: 20px">marketing@teknonomi.com</p>
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
        <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <h5 class="mb-0"><?php echo $u->usesr_nama ?></h5><span class="small text-uppercase text-muted"><?php echo $u->user_posisi ?></span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
    <?php } ?>
      

    </div>
  </div>
</div>