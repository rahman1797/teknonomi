
      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header">
                            <h2><?php $namaKategori = $this->m_kategori->getKategoriById($_GET['id']);
                            echo 'Sub Kategori Terdaftar Dari Kategori : ' . $namaKategori->kategori_nama;
                             ?></h2>
                            <p></p>
                            <button class="btn btn-lg btn-info waves-effect" data-toggle="modal" data-target="#ModalSub" id="round">Tambah Sub Kategori</button>  
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table id="refTable" class="table table-bordered table-striped table-hover js-basic-example dataTable round_edge">
                                    <thead>
                                        <tr>
                                            <th>Nama Sub Kategori</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Sub Kategori</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php 
                                       
                                            foreach($listsubkategori as $lsk){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $lsk->subkategori_nama ?></td>
                                                <td>
                                                    <a href="<?php echo site_url();?>/System_master/delSubKategori/<?php print($lsk->subkategori_id);?>"><button class="btn btn-danger" id="round" onclick="return delConfirm()">Delete</button></a>
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
            <div class="modal fade" id="ModalSub" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="round">
                       <center>
                        <div class="modal-body">
                          <!-- Form Kategori -->
                    
                            <form id="form_validation" name="formSub" class="formSub" method="POST" style="margin: 20px" onsubmit="return submitSubKategori()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" name="idKategori" value="<?php echo $_GET['id'] ?>">
                                        <input type="text" class="form-control" name="namaSubKategori" id="namaSubKategori" required>
                                        <label class="form-label">Nama SubKategori</label>
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

     function submitSubKategori() {

         var data = $('.formSub').serialize();
         var nama = document.formSub.namaSubKategori.value;  
         alert(data);
             if(nama != ""){            
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: "<?php echo base_url('System_master/addSubKategori') ?>",
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