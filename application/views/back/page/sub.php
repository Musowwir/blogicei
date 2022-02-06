



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
                <button type="button" class="btn btn-outline-success" data-toggle="modal" onclick="createSub()" data-target="#exampleModalSub"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                 Add</button>
                 
                </div>
                <br>
                <table class="table table-hover table-bordered table-sm" id="tbsub">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama sub</th>
                     
                      <th>Kategori</th>
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
    <div class="modal fade" id="exampleModalSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">form sub sub</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="sub/insertSub" id="createForm">
          <div class="modal-body">
           
            <div class="form-group">
          
              
                   <label>nama sub</label>
            <input type="text" name="nama_sub" id="nama_sub" placeholder="nama sub" class="form-control" autocomplete="off">
            

             <div class="form-group ">
               <label>sub</label>
                  <select class="form-control kategori" name="id_kategori" id="id_kategori" value=""  aria-label="Default select example">
                <option>-</option>
               
                  
                  </select>
             </div>
           
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
            <h5 class="modal-title" id="exampleModalLabel">form sub</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="sub/updateSub" id="updateForm">
          <div class="modal-body">
           
            <div class="form-group">
            <label>sub</label>
            <input type="text" name="enama_sub" id="enama_sub" placeholder="entry your nama sub" class="form-control" autocomplete="off">
            </div>
             <div class="form-group ">
               <label>sub</label>
               <div class="eid_kategori" id="eid_kategori">
                 
               </div>
                
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

<script type="text/javascript" src="<?php echo base_url('assets/js/action/sub.js')?>"></script>
