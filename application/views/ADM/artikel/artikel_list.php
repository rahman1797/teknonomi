
      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header" align="center">
                            <h2><strong>Daftar Artikel</strong></h2>
                            <p></p>  
                            <a class="btn btn-info" id="round" href="<?php echo base_url('ADM/addArtikelPage') ?>">Post Artikel</a>   
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="refAng" class="table table-bordered table-striped js-basic-example dataTable round_edge">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>                                          
                                            <th>Kategori</th>
                                            <th>Sub kategori</th>
                                            <th>Viewers</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>                                            
                                            <th>Kategori</th>
                                            <th>Sub kategori</th>
                                            <th>Viewers</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
                                       
                                            foreach($listArtikel as $la){ 
                                                $idToKategori = $this->m_user->getartikelKategori($la->id_kategori);
                                                $idTosubKategori = $this->m_user->getartikelsubKategori($la->id_kategori);
                                                $id_artikel = $la->id;
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="width: 70px" src="../assets/images/artikel/<?php echo $la->foto ?>">
                                                </td>
                                                <td><?php echo $la->judul ?></td>
                                                <td><?php echo $la->tanggal_dibuat ?></td>
                                                <td><?php echo $idToKategori['0']['kategori_nama'] ?></td>
                                                <td><?php echo $idTosubKategori['0']['subkategori_nama'] ?></td>
                                                <td><?php echo $la->viewers ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('ADM/editArtikelPage?id_artikel='.$id_artikel) ?>"><button class="btn btn-info" id="round"><i class="material-icons">edit</i>Edit</button></a>
                                                    <a href="<?php echo base_url('artikel/detail/'.$la->id) ?>"><button class="btn btn-info" id="round">Go to Post</button></a>
                                                    <button class="btn btn-danger" id="round" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $la->id ?>)"><i class="material-icons">delete</i>Delete</button>
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

       <!-- Modal Hapus-->
                      <div id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Hapus Data</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin ingin menghapus data ini?</p>
                              <div class="text-center">
                              <i class="far fa-times-circle fa-4x mb-3 animated bounce" style="color: #D60C0C"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-danger"  onclick='deletep()'>Ya</button>
                            </div>
                          </div>
                        </div>
                      </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">

    
    var p_id;
    function set_id(id) {
        p_id = id;

    }

    function deletep(){
        window.location.href =  "<?php echo base_url();?>ADM/hapusArtikel/"+p_id;
    }

    function notYet() {
        alert('this function is under progress');
        return false;
    }

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