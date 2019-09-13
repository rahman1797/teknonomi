
      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header" align="center">
                            <h2><strong></strong></h2>
                            <p></p>
                            <button class="btn btn-lg btn-info waves-effect" data-toggle="modal" data-target="#ModalAnggota" id="round">Tambah Kategori Baru</button>  
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="refTable" class="table table-bordered table-striped table-hover js-basic-example dataTable round_edge">
                                    <thead>
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>sub kategori terdaftar</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>sub kategori terdaftar</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
                                       
                                            foreach($listkategori as $lk){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $lk->kategori_nama ?></td>
                                                <td><?php echo $this->m_kategori->getNumberSubKategori($lk->kategori_id) ?></td>
                                                <td>
                                                    <a href="<?php echo site_url();?>/System_master/subkategori?id=<?php print($lk->kategori_id);?>" class="btn btn-info"></a>

                                                    <a href="<?php echo site_url();?>/System_master/delKategori/<?php print($lk->kategori_id);?>"><button class="btn btn-danger" id="round" onclick="return delConfirm()">Delete</button></a>
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



 <!-- Modal Tambah Kategori -->
            <div class="modal fade" id="ModalAnggota" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="round">
                       <center>
                        <div class="modal-body">
                          <!-- Form Kategori -->
                    
                            <form id="form_validation" name="formKategori" class="formKategori" method="POST" style="margin: 20px" onsubmit="return submitKategori()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namaKategori" id="namaKategori" required>
                                        <label class="form-label">Nama Kategori</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect btn-lg" type="submit" id="round">Simpan</button>
                            </form>

                            <!-- #END# Form Kategori -->
                        </div>
                        </center>
                    </div>
                </div>
            </div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">

     function submitKategori() {

         var data = $('.formKategori').serialize();
         var nama = document.formKategori.namaKategori.value;  

             if(nama != ""){            
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: "<?php echo base_url('System_master/addKategori') ?>",
                    success: function() {
                        Swal.fire({
                          position: 'top-end',
                          type: 'success',
                          title: 'Berhasil menambah Kategori',
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