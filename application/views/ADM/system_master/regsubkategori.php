
      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header" align="center">
                            <h2><strong>Registered Position</strong></h2>
                            <p></p>
                            <button class="btn btn-lg btn-info waves-effect" data-toggle="modal" data-target="#ModalAnggota" id="round">Add New Admin</button>  
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="refTable" class="table table-bordered table-striped table-hover js-basic-example dataTable round_edge">
                                    <thead>
                                        <tr>
                                            <th>Nama Posisi</th>
                                            <th>Total User</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Posisi</th>
                                            <th>Total User</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
                                       
                                            foreach($listPosisi as $lp){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $lp->posisiuser_nama ?></td>
                                                <td><?php echo $this->m_user->jumlahUserPosisi($lp->posisiuser_id) ?></td>
                                                <td>


                                                    <a href="<?php echo site_url();?>/ADM/delPosisi/<?php print($lp->posisiuser_id);?>"><button class="btn btn-danger" id="round" onclick="return delConfirm()">Delete</button></a>
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



 <!-- Modal Tambah Anggota -->
            <div class="modal fade" id="ModalAnggota" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="round">
                       <center>
                        <div class="modal-body">
                          <!-- Form Angggota -->
                    
                            <form id="form_validation" name="formPosisi" class="formPosisi" method="POST" style="margin: 20px" onsubmit="return submitPosisi()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namaposisi" id="namaposisi" required>
                                        <label class="form-label">Nama Posisi</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect btn-lg" type="submit" id="round">Simpan</button>
                            </form>

                            <!-- #END# Form Anggota -->
                        </div>
                        </center>
                    </div>
                </div>
            </div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">

     function submitPosisi() {

         var data = $('.formPosisi').serialize();
         var nama = document.formPosisi.namaposisi.value;  

             if(nama != ""){            
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: "<?php echo base_url('ADM/addPosisi') ?>",
                    success: function() {
                        Swal.fire({
                          position: 'top-end',
                          type: 'success',
                          title: 'Berhasil menambah Anggota',
                          showConfirmButton: false,
                          timer: 1500
                        }).then(function(){
                            $('#refTable').load(document.URL +  ' #refTable');
                        })     
                    }
                });
             }  
        
            else
            {  
                alert("Terjasi kesalahan");  
                return false;  
            }
            
            return false;
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