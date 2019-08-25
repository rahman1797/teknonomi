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
                                        <select class="form-control show-tick" name="subkategori" id="kategori">
                                            <option value="">-- Sub Kategori --</option>
                                            <?php 
                                                foreach ($listSubKategori as $lsk) {
                                                    echo "<option value='$lsk->subkategori_id'>".$lsk->subkategori_nama ."</option>";
                                                }
                                            ?>
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


</script>
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
    </script>