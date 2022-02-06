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
               
               <a href="<?php echo site_url('slide/add') ?>" class="btn btn-outline-success"><i class="fa fa-plus"></i> Add Slide</a>
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
                    <th>Nama Slide</th>
                    <th>Deksripsi Slide</th>
                    <th>Photo</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($personal as $person): ?>
                  <tr>
                    <td width="150">
                      <?php echo $person->nama_slide ?>
                    </td>
                    <td>
                      <?php echo substr($person->deskripsi_slide, 0, 120) ?>...
                    </td>
                   
                    <td>
                      <img src="<?php echo base_url('upload/slide/'.$person->image) ?>" width="64" />
                    </td>
                    <td class="small">
                     <?php echo $person->nama_kategori ?>
                    <td width="250">
                      <a href="<?php echo site_url('slide/edit/'.$person->id_slide) ?>"
                       class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('slide/delete/'.$person->id_slide) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
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
 
    </script>