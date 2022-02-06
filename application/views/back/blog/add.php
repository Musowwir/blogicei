    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="<?php echo site_url('blog') ?>">Data Table</a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
               
                <br>



        <div class="card mb-3">
          <div class="card-header">
           
          </div>
          <div class="card-body">

            <form action="<?php base_url('blog/add') ?>" method="post" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-6">
              <div class="form-group">
                <label for="nama_slide">title</label>
                <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                 type="text" name="title" placeholder="title" />
                <div class="invalid-feedback">
                  <?php echo form_error('title') ?>
                </div>
              </div>
              </div>

               <div class="col-md-6">
              <div class="form-group">
                <label for="meta">meta</label>
                <input class="form-control <?php echo form_error('meta') ? 'is-invalid':'' ?>"
                 type="text" name="meta" placeholder="key" />
                <div class="invalid-feedback">
                  <?php echo form_error('meta') ?>
                </div>
              </div>
              </div>


              


            </div>
          
           

              


         

                 <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                 name="description" id="description" placeholder="description..."></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('description') ?>
                </div>
              </div>


          <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control katego <?php echo form_error('id_kategori') ? 'is-invalid':'' ?>" name="id_kategori" id="id_kategori">
                  <option ></option>
                  
                    
                
                  
                </select>
                
                <div class="invalid-feedback">
                  <?php echo form_error('id_kategori') ?>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                  <div class="form-group">
                <label for="id_sub">sub kategori</label>
                <select class="form-control <?php echo form_error('id_sub') ? 'is-invalid':'' ?>" name="id_sub" id="id_sub">
                  <option ></option>
                 
                  
                </select>
                
                <div class="invalid-feedback">
                  <?php echo form_error('id_sub') ?>
                </div>
              </div>
            </div>
          </div>

               <div class="form-group">
                <label for="tags">tags</label>
                <input type="text" class="form-control <?php echo form_error('tags') ? 'is-invalid':'' ?>"
                 name="tags" id="tags" placeholder="tags...">
                <div class="invalid-feedback">
                  <?php echo form_error('tags') ?>
                </div>
              </div>



              <div class="form-group">
                <label for="image">Photo<small> max : 5 Mb</small></label>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
                </div>
              </div>

           

              <input style="float: right;" class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>
        <!-- /.container-fluid -->

     
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 <script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/ckfinder/ckfinder.js"></script>


<script type="text/javascript">
 $(document).ready(function(){

 $('#tags').tagsInput({width:'auto'});


   $.ajax({
          url: '../kategori/list_a',
          type: 'post',
          dataType: 'json',
          success: function (data) {
          $.each(data, function (key, value) {
          //show complate seaerch
          $('.katego').append(       
          
    '<option value="'+value.id_kategori+'" >'+value.nama_kategori+'</option>'
  
          );

          });

          }
          })

 $('#id_kategori').change(function(){
  var id_kategori = $('#id_kategori').val();
  if(id_kategori != '')
  {
   $.ajax({
    url:'../kontent/subKategori',
    method:"POST",
    data:{id_kategori:id_kategori},
    success:function(data)
    {
     $('#id_sub').html(data);
    
    }
   });
  }
  else
  {
   $('#id_sub').html('<option value="">Select sub</option>');
  
  }
 });

 CKEDITOR.replace( 'description', {
                              height: 300,
                              filebrowserUploadUrl: '<?php echo base_url('kontent/ckm');?>',
                              filebrowserBrowseUrl: '<?php echo base_url('kontent/bank');?>'
                             });         
           
 

  })

 function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }
</script>