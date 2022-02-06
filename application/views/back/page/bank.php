 <main class="app-content">
       <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?php echo $x?></h1>
          <p>ini merupakan manajemen dalam pengolahan data blog</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?php base_url()?>auth">Dashboard</a></li>
        </ul>
      </div>
  
     <!-- Page Content -->
<div class="container" id="fileExplorer">

  <h1 class="font-weight-light text-center "> Gallery <?php echo $this->session->userdata('nama_user');?> </h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
    <?php foreach ($img as $fileName ) {?>
    <div class="col-lg-3 col-md-4 col-6">

      <a href="<?php echo base_url()?>upload/<?php echo $fileName->image;?>" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" style="max-width:100%; max-height:100%; height:250px" src="<?php echo base_url()?>upload/<?php echo $fileName->image;?>" alt="  " title="<?php echo $fileName->id_galery;?>" > </img>
           
            
          </a>
     
          
    </div>
     <?php };?>
 
   
  
  </div>

</div>
<!-- /.container -->
  
 
   
    </main>
    <script type="text/javascript">
    $(document).ready(function(){
      var funcNum = <?php echo $_GET['CKEditorFuncNum'].';';?>
      $('#fileExplorer').on('click','img',function(){
        var fileUrl=$(this).attr('src');
        window.opener.CKEDITOR.tools.callFunction(funcNum,fileUrl);
        window.close();
      }).hover(function(){
        $(this).css('cursor','pointer');
      });
    });
   </script>
