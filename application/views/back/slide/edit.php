    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="<?php echo site_url('slide') ?>">Data Table</a></li>

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

               <form action="<?php base_url("slide/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?php echo $personal->id_slide?>" />
              <div class="row">
                <div class="col-md-6"> 
              <div class="form-group">
                <label for="nama_slide">Name*</label>
                <input class="form-control <?php echo form_error('nama_slide') ? 'is-invalid':'' ?>"
                 type="text" name="nama_slide" placeholder="Product name" value="<?php echo $personal->nama_slide ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama_slide') ?>
                </div>
              </div>
              </div>

           

           
            


               <div class="col-md-2">
              <div class="form-group">
                <label for="id_kategori">Gender</label>
                <select class="form-control <?php echo form_error('id_kategori') ? 'is-invalid':'' ?> " type="text" name="id_kategori">
                  <option value="<?php echo $personal->id_kategori?>"><?php echo $personal->nama_kategori ?></option>
                    <?php foreach ($kategori as $key => $value) {?>
                    
                  <option value="<?php echo $value['id_kategori']?>"><?php echo $value['nama_kategori']?></option>
                <?php }; ?>
                
                </select>
               
                <div class="invalid-feedback">
                  <?php echo form_error('id_kategori') ?>
                </div>
              </div>
              </div>



            </div>
     
           
           

              <div class="form-group">
                <label for="name">Profile*</label>
                <textarea class="form-control <?php echo form_error('deskripsi_slide') ? 'is-invalid':'' ?>"
                 name="deskripsi_slide" placeholder="Description..."><?php echo $personal->deskripsi_slide ?></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('deskripsi_slide') ?>
                </div>
              </div>


                 <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <input type="hidden" name="old_image" value="<?php echo $personal->image ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
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

 