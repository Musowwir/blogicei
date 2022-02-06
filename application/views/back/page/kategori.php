



       <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <div class="button" style="text-align: right;">
                <button type="button" class="btn btn-outline-success" data-toggle="modal" onclick="createKategori()" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                 Add</button>
               
                </div>
                <br>
                <table class="table table-hover table-bordered table-sm" id="tbkategori">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama kategori</th>
                     
                      
                       <th>Tindakan</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      
                    </tr>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>




<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">form kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="kategori/insert" id="createForm">
          <div class="modal-body">
           
            <div class="form-group">
          
              
                   <label>nama kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" placeholder="nama kategori" class="form-control" autocomplete="off">
            

       
           
            </div>
             
          </div>
          <div class="modal-footer">
           
            <button type="submit" class="btn btn-outline-primary" id="submit"><i class="fa fa-save" aria-hidden="true"> Save</i> </button>
          </div>
      </form>
        </div>
      </div>
    </div>
    <!-- and modal -->


    

  <!-- Modal update -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">form kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="kategori/update" id="updateForm">
          <div class="modal-body">
           
            <div class="form-group">
            <label>kategori</label>
            <input type="text" name="enama_kategori" id="enama_kategori" placeholder="entry your nama kategori" class="form-control" autocomplete="off">
            </div>
          
          </div>
          <div class="modal-footer">
           
            <button type="submit" class="btn btn-outline-warning" id="submit"><i class="fa fa-save" aria-hidden="true"> Save</i> </button>
          </div>
      </form>
        </div>
      </div>
    </div>
    <!-- and modal -->

<script type="text/javascript" src="<?php echo base_url('assets/js/action/kat.js')?>"></script>
