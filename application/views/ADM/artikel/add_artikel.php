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

                            <form id="form_validation" method="post" action="<?php echo base_url('ADM/addArtikel') ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Judul Artikel</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="judul" required>
                                    </div>
                                </div>

                                <div class="form-line">
                                    <select class="form-control show-tick" name="user_posisi">
                                        <option value="">-- Posisi --</option>
                                        <?php 
                                            foreach ($posisi_data as $pod) {
                                                echo "<option value='$pod->posisi_ID'>".$pod->posisi_nama ."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-line">
                                    <select class="form-control show-tick" name="user_posisi">
                                        <option value="">-- Posisi --</option>
                                        <?php 
                                            foreach ($posisi_data as $pod) {
                                                echo "<option value='$pod->posisi_ID'>".$pod->posisi_nama ."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                Isi Dari Artikel
                               <textarea id="summernote">TEST</textarea>

                               <input type="hidden" name="penulis" value="<?php echo $_SESSION['nama'] ?>">
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
        tabsize: 5,
        dialogsFade: true,
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