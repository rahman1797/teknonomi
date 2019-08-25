
      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header" align="center">
                            <h2><strong>Daftar Artikel</strong></h2>
                            <p></p>  
                            <a href="<?php echo base_url('ADM/addArtikelPage') ?>">Add Artikel</a>   
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="refAng" class="table table-bordered table-striped table-hover js-basic-example dataTable round_edge">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <th>Foto</th>
                                            <th>Kategori</th>
                                            <th>Sub kategori</th>
                                            <th>Viewers</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <th>Foto</th>
                                            <th>Kategori</th>
                                            <th>Sub kategori</th>
                                            <th>Viewers</th>
                                            <th>Manage</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
                                       
                                            foreach($listArtikel as $la){ 
                                                $idToKategori = $this->m_user->getartikelKategori($la->id_kategori);
                                                $idTosubKategori = $this->m_user->getartikelsubKategori($la->id_kategori);
                                            ?>
                                            <tr>
                                                <td><?php echo $la->judul ?></td>
                                                <td><?php echo $la->penulis ?></td>
                                                <td><?php echo $la->tanggal_dibuat ?></td>
                                                <td>
                                                    <img style="width: 70px" src="../assets/images/artikel/<?php echo $la->foto ?>">
                                                </td>
                                                <td><?php echo $idToKategori['0']['kategori_nama'] ?></td>
                                                <td><?php echo $idTosubKategori['0']['subkategori_nama'] ?></td>
                                                <td><?php echo $la->viewers ?></td>
                                                <td>
                                                    <a href="#"><button class="btn btn-info" id="round">Edit</button></a>
                                                    <a href="<?php echo base_url('artikel/detail/'.$la->id) ?>"><button class="btn btn-info" id="round">Go to Post</button></a>
                                                    <a href="javascript:void(0)"><button class="btn btn-danger" id="round" onclick="return delConfirm()">Delete</button></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- #END# Basic Examples -->
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">

     function submitUser() {

         var data = $('.formUser').serialize();
         var pass = document.formAnggota.user_pass.value;  
         var pass_check = document.formAnggota.user_pass_check.value;  
        
             if(pass == pass_check){            
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: "<?php echo base_url('User_C/addAnggota') ?>",
                    success: function() {
                        Swal.fire({
                          position: 'top-end',
                          type: 'success',
                          title: 'Berhasil menambah Anggota',
                          showConfirmButton: false,
                          timer: 1500
                        }).then(function(){
                            $('#refAng').load(document.URL +  ' #refAng');
                        })     
                    }
                });
             }  
        
            else
            {  
                alert("Password harus sama!");  
                return false;  
            }
            
            return false;
        }

        function lihatPass(){
            var x = document.getElementById("user_pass");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
        }

         function delConfirm()
            {

                job = confirm("Are you sure to delete permanently?");
                
                if(job != true)
                {
                    return false;
                }
            }

</script>