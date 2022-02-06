    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
       

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <div class="button" style="text-align: right;">
               
               <a href="<?php echo site_url('blog/add') ?>" class="btn btn-outline-success"><i class="fa fa-file"></i> </a>
                </div>
                <br>
                   <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
           
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>title</th>
                    <th>meta key</th>
                    <th>kategori</th>
                     <th>sub</th>
                      <th>status</th>
                       <th>buat</th>
                        <th>ubah</th>
                    <th>photo</th>                   
                    <th>tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($blog as $person): ?>
                  <tr>
                    <td width="150">
                      <?php echo $person->title ?>
                    </td>
                     <td >
                     <?php echo substr($person->meta, 0, 120) ?>...
                    </td>
                        <td >
                      <?php echo $person->nama_kategori ?>
                    </td>
                        <td >
                      <?php echo $person->nama_sub ?>
                    </td>

                   <!--  <td>
                      <?php echo substr($person->deskripsi_slide, 0, 120) ?>...
                    </td> -->
                   <td> <?php echo $person->status ?></td>

                    <td >
                      <?php echo $person->create_ad ?>
                    </td>
                     <td >
                      <?php echo $person->update_ad ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/'.$person->image) ?>" width="64" />
                    </td>
                    <td>
                      <a href="<?php echo site_url('blog/edit/'.$person->id_blog) ?>"
                       class="btn btn-small text-warning" data-toggle="tooltip" data-placement="top" title="Edit Artikel"><i class="fa fa-edit"></i> </a>
                      <a onclick="deleteConfirm('<?php echo site_url('blog/delete/'.$person->id_blog) ?>')"
                       href="#!" class="btn btn-small text-danger" data-toggle="tooltip" data-placement="top" title="Hapus Artikel"><i class="fa fa-trash"></i> </a>
                        <a onclick="postConfirm('<?php echo site_url('blog/post/'.$person->id_blog) ?>')"
                       href="#!" class="btn btn-small text-info" data-toggle="tooltip" data-placement="top" title="Terbitkan Artikel"><i class="fa fa-eye"></i> </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Artikel yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Artikel akan di tampilkan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-post" class="btn btn-info" href="#">Post</a>
      </div>
    </div>
  </div>
</div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 <script type="text/javascript">
     $(document).ready( function () {
    $('#dataTable').DataTable();
} );
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
   function postConfirm(url){
    $('#btn-post').attr('href', url);
    $('#postModal').modal();
  }
 
    </script>