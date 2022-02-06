<style >
  @media (min-width: 768px) {
  .modal-xl {
    width: 100%;
   max-width:100%;
  }
}
</style>



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
                <button type="button" class="btn btn-outline-success" data-toggle="modal" onclick="createKontent()" data-target="#exampleModalLong"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                 Add</button>


               
                </div>
                <br>
                <table class="table table-hover table-bordered table-sm" id="tbkontent">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>title</th>
                 
                      <th>kategori</th>
                       <th>sub kategori</th>
                     <th>waktu buat</th>
                     <th>waktu perubahan</th>
                     <th>status</th>
                     <th>penulis</th>
                     <th>tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                       <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="kontent/insert" id="createForm" enctype="multipart/form-data" >
          <div class="modal-body">
           
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

        <label>title </label>
        <input type="text" name="title" id="title" placeholder="title  seo" class="form-control" required autocomplete="off">

        </div>
   

          </div>
          <div class="col-md-6">
                  <div class="form-group">

        <label>meta keyword</label>
        <input type="text" name="meta" id="meta" placeholder="meta blog seo" class="form-control" required autocomplete="off">

        </div>
          </div>
        </div>
      
                <div class="form-group">

        <label>description blog</label>
      <textarea class="form-control" id="description" name="description"></textarea>

        </div>
      
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
               <label>category</label>
                  <select class="form-control kategori" name="id_kategori" id="id_kategori"   aria-label="Default select example">
                  <option value="" > - </option>
                 
                  </select>
             </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
               <label>sub category</label>
                  <select class="form-control" name="id_sub" id="id_sub"   aria-label="Default select example">
                  <option selected> </option>
                 
                  </select>
             </div>
              </div>
              
            </div>

               <div class="form-group">

        <label>tags blog</label>
        <input type="text" required name="tags" id="tags" placeholder="tags blog seo" class="form-control" autocomplete="off">

        </div>
           <div class="form-group">

        <label>image tumbnail</label>
        <input type="file" id="blah" name="blah"  placeholder="tags blog seo" class="form-control-file" autocomplete="off">
<img name="image" id="image" src="#" alt="," />
        </div>

       
             
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="bersih()">Close</button>
        <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>

<!--update modal blog -->


<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="kontent/update" id="updateForm">
          <div class="modal-body">
           
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">

        <label>title blog</label>
        <input type="text" name="etitle" id="etitle" placeholder="title blog seo" class="form-control" autocomplete="off">

        </div>
   

          </div>
          <div class="col-md-6">
                  <div class="form-group">

        <label>meta blog</label>
        <input type="text" name="emeta" id="emeta" placeholder="meta blog seo" class="form-control" autocomplete="off">

        </div>
          </div>
        </div>
      
                <div class="form-group">

        <label>description blog</label>
      <textarea class="form-control edescription" id="edescription" name="edescription"></textarea>

        </div>
      
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
               <label>category</label>
                <div class="all_kat" >
                 
               </div>
             </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
               <label>sub category</label>
                <div class="tes" >
                 
               </div>
             </div>
              </div>
              
            </div>

               <div class="form-group">

        <label>tags blog</label>
        <input type="text" name="etags" id="etags" placeholder="tags blog seo" class="form-control" autocomplete="off">

        </div>

          <div class="form-group">

        <label>image tumbnail</label>
        <input type="file" id="eblah" name="eblah"  placeholder="tags blog seo" class="form-control-file" autocomplete="off">
<img name="eimage" id="eimage" src="#" alt="," />
        </div>
             
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="bersih()">Close</button>
        <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/ckfinder/ckfinder.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/action/kontent.js')?>"></script>

<script type="text/javascript">
 $(document).ready(function(){
 CKEDITOR.replace( 'description', {
                              height: 300,
                              filebrowserUploadUrl: '<?php echo base_url('kontent/ckm');?>',
                              filebrowserBrowseUrl: '<?php echo base_url('kontent/bank');?>'
                             });         
           
  CKEDITOR.replace( 'edescription', {
                              height: 300,
                              filebrowserUploadUrl: '<?php echo base_url('kontent/ckm');?>',
                              filebrowserBrowseUrl: '<?php echo base_url('kontent/bank');?>'
                             });  

  })
</script>









