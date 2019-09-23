 

      <section class="content">
        <div class="container-fluid">
        
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="round">
                        
                        
                        <div class="body">
                        
                        <?php foreach ($artikel as $a) { 
                            $idTosubKategori = $this->m_user->getartikelsubKategori($a->id_kategori);
                            ?>

                            <form id="form_validation" method="post" enctype="multipart/form-data" action="<?php echo site_url('ADM/editArtikel') ?>" name="userfile">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" value="<?php echo $a->judul ?>" required>
                                        <input type="hidden" class="form-control" name="kategori" value="<?php echo $a->id_kategori ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $a->id ?>">
                                        <input type="hidden" class="form-control" name="subkategori" value="<?php echo $a->id_subkategori ?>">
                                        <input type="hidden" class="form-control" name="tanggal_dibuat" value="<?php echo $a->tanggal_dibuat ?>">
                                        <label class="form-label">Masukkan Judul Artikel</label>
                                    </div>
                                </div>

                                <img style="width: 50%" src="../assets/images/artikel/<?php echo $a->foto ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="userfile" value="<?php echo $a->foto ?>">
                                    </div>
                                    <font color="red">*Format : jpg, jpeg, dan png (Max 10mb)</font>
                                </div>




                                 <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="kategori" id="kategori">
                                            <option value="">-- Pilih Kategori --</option>
                                            <?php 
                                                foreach ($kategori as $k) {
                                                    echo "<option value='$k->kategori_id'>".$k->kategori_nama ."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div> -->


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="sub" id="sub" data-live-search="true">
                                            <option value="$a->id_subkategori"> <?php echo $idTosubKategori['0']['subkategori_nama'] ?> </option>
                                            <?php 
                                                foreach ($kategori as $k) {
                                                    echo "<optgroup label=$k->kategori_nama>";
                                                        $sub = $this->m_kategori->get_sub($k->kategori_id);
                                                        $idKategori = $k->kategori_id;
                                                        foreach ($sub as $s) { ?>
                                                            
                                                            <option value="<?php echo $s['subkategori_id'] ?>"><?php echo $s['subkategori_nama'] ?></option>
                                                
                                                         <?php }

                                                    echo "</optgroup>";
                                                    // echo "<input type='hidden' name='kategori' value='$idKategori'>";
                                                }
                                            ?>
                                        </select>
                                        
                                    </div>
                                </div>

                              <!--   <select>
                                    <optgroup label="AAAAAAAAA">

                                        <option>TEST</option>
                                        <option>TEST</option>
                                        <option>TEST</option>
                                        <option>TEST</option>
                                        </optgroup>
                                    </ul>
                                </select>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="sub" id="sub">
                                            <option value="" class="form-label">-- Pilih Sub Kategori --</option>
                                            <?php
                                            foreach ($sub as $s) {
                                                ?>
                                                <option <?php echo $sub_selected == $s->id_kategori ? "selected='selected'" : '2' ?>
                                                    class="<?php echo $s->id_kategori ?>" value="<?php echo $s->subkategori_id ?>"><?php echo $s->subkategori_nama ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> -->
                                
                                <div class="form-group form-float">
                                    <textarea class="form-control no-resize" required cols="30" rows="5" id="summernote" name="isi"><?php echo $a->isi ?></textarea>
                                </div> 
                                
                                
                                <input class="btn btn-success" type="submit" id="round">
                            </form>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- #END# Basic Examples -->
        </div>
    </section>

<!-- Summernote -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-chained/1.0.0/jquery.chained.min.js"></script>

<script>
      $('#summernote').summernote({
        height : 300,
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



    // $("#sub").chained("#kategori");
    // document.getElementById("sub").disabled = false;


    // $(document).ready(function(){
    //     $('#kategori').change
    // })


    //   $(document).ready(function(){
    //     $('#kategori').change(function(){
    //         var id = $(this).val();
    //         $.ajax({
    //             url : "<?php echo base_url('ADM/get_subkategori');?>",
    //             method : "POST",
    //             data : {id: id},
               
    //             dataType : 'json',
    //             success: function(data){
    //                 var html = '';
    //                 var i;
    //                 for(i = 0; i < data.length; i++){
    //                     html += '<option value='+ data[i].subkategori_id +'>'+ data[i].subkategori_nama + '</option>';
    //                 }
    //                 $('.subkategori').html(html);

    //                 alert(html);
                     
    //             }
    //         });
    //     });
    // });



    </script>