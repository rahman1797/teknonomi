    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        <div class="header" align="center">
                            <h2><strong>Input Artikel</strong></h2>
                            <p></p>
                        </div>
                        
                        <div class="body">

                            <form id="form_validation" method="post" enctype="multipart/form-data" action="<?php echo site_url('ADM/addArtikel') ?>" name="userfile">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Judul Artikel</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="userfile" required>
                                    </div>
                                </div>








                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kategori" id="kategori">
                                            <option value="">-- Kategori --</option>
                                            <?php 
                                                foreach ($data as $lk) {
                                                    echo "<option value='$lk->kategori_id'>".$lk->kategori_nama ."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick subkategori" name="subkategori" id="subkategori">
                                            <option value="0">-PILIH-</option>
                                        </select>
                                    </div>
                                </div>








                                
                                <div class="form-group form-float">
                                    <textarea class="form-control no-resize" required cols="30" rows="5" id="summernote" name="isi"></textarea>
                                </div> 
                                
                                
                                <input class="btn btn-success" type="submit">
                            </form>

                        </div>
                    </div>
                </div>
            </div> 

            <!-- #END# Basic Examples -->
        </div>
    </section>


<script>
      $('#summernote').summernote({

        toolbar: [
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
      });




      $(document).ready(function(){
        $('#kategori').change(function(){
            var id = $(this).val();
            $.ajax({
                url : "<?php echo base_url('ADM/get_subkategori');?>",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].subkategori_nama+'</option>';
                    }
                    $('.subkategori').html(html);
                     
                }
            });
        });
    });
    </script>