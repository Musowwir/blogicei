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
                <button type="button" class="btn btn-outline-success" data-toggle="modal" onclick="createProduk()" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                 Produk Baru</button>
               
                </div>
                <br>
                <table class="table table-hover table-bordered table-sm" id="tproduk">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                     
                      <th>Satuan</th>
                      <th>Harga</th>
                       <th>Tindakan</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                  
                    </tr>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Button trigger modal -->
<div class="messages" id="messages"></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           
          <div class="tile">
          
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="produk/insert" id="createForm">
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Produk</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nama_produk" id="nama_produk" placeholder="Facial">
                    <input class="form-control" hidden type="text" name="kode" id="kode"  placeholder="Facial">
                     <input class="form-control" hidden type="text" name="kode_produk" id="kode_produk"  placeholder="Facial">
                  </div>
                </div>
             

                <div class="form-group row">
                  <label class="control-label col-md-3">Satuan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" placeholder="kg" name="satuan" id="satuan">
                  </div>
                </div>
             
                 <div class="form-group row">
                  <label class="control-label col-md-3">Harga</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" placeholder="0000" name="harga" id="harga">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Ketengan Produk</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Ketengan" name="keterangan_produk" id="keterangan_produk"></textarea>
                  </div>
                </div>
          
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Tutup</button>
        <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
      </div>
               
              </form>
            </div>
       
          </div>
     
      </div>
    
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           
          <div class="tile">
          
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="produk/update" id="updateForm">
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Produk</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="enama_produk" id="enama_produk" placeholder="Facial">
                   
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label col-md-3">Satuan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" placeholder="kg" name="esatuan" id="esatuan">
                  </div>
                </div>
             
                 <div class="form-group row">
                  <label class="control-label col-md-3">Harga</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="number" placeholder="0000" name="eharga" id="eharga">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Ketengan Produk</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Ketengan" name="eketerangan_produk" id="eketerangan_produk"></textarea>
                  </div>
                </div>
          
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Tutup</button>
        <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
      </div>
               
              </form>
            </div>
       
          </div>
     
      </div>
    
    </div>
  </div>
</div>
<script type="text/javascript">
  //create data
  var tproduk;
$(document).ready(function(){
tproduk=$("#tproduk").DataTable({
  'ajax':'produk/list_all',
  'orders':[]
});
});
function createProduk(){


  $.ajax({
            url: 'produk/ko',
            type: 'post',
            dataType: 'json',
            success:function(response) {
                $("#kode").val(response.kode);
               

                 $.ajaxSetup({ cache: false });
               }
             });


  $('#createForm')[0].reset();
  $("#submit").attr("disabled", false);
  $('.text-danger').remove();
  
  $(".form-group").removeClass('has-error').removeClass('has-success');





  $("#createForm").unbind('submit').bind('submit',function(){
    var form = $(this);
    $(".text-danger").remove();
         
                var set =$("#kode").val();
               var res = set.substring(0,1); 
            var ye = parseInt(res); 
            var no = parseInt(1);
            var ke=ye+no;

               $("#kode_produk").val(ke);
    $.ajax({
      url:form.attr('action'),
      type:form.attr('method'),
      data:form.serialize(),
      dataType:'json',
      success:function(response){
        if (response.success===true) {
      
          $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
          '<button type="button" class="close btn-sm" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+
          '<strong><span class="glyphicon glyphicon-exlamation-sign"></span></strong>'+response.messages+
          '</div>');
             setTimeout(function(){
                               $(".messages").empty();
                             
                            },3000);
            $("#submit").attr("disabled", true);
          $("#exampleModal").modal('toggle');
          tproduk.ajax.reload(null,false);

        }else{
          if (response.messages instanceof Object) {
            $.each(response.messages, function(index,value){
              var id = $("#"+index);
              id
              .closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.lenght>0?'has-error':'has-success')
              .after(value);
            });
          }else{
            $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
          '<button type="button" class="close btn-sm" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+
          '<strong><span class="glyphicon glyphicon-exlamation-sign"></span></strong>'+response.messages+
          '</div>');
          }
        }

      }
    });
    return false;
  });
}




function updateProduk(id = null) 
{

    if(id) {

        $("#updateForm")[0].reset();
        $('.form-group').removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $.ajax({
            url: 'produk/get_id/'+id,
            type: 'post',
            dataType: 'json',
            success:function(response) {
                $("#enama_produk").val(response.nama_produk);
                $("#esatuan").val(response.satuan);
                 $("#eharga").val(response.harga); 
                   $("#eketerangan_produk").val(response.keterangan_produk); 
                  
                 $.ajaxSetup({ cache: false });
            

                $("#updateForm").unbind('submit').bind('submit', function() {
                   
                    var form = $(this);


                    $.ajax({
                        url: form.attr('action') + '/' + id,
                        type: 'post',
                        data: form.serialize(),
                        dataType: 'json',
                        success:function(response) {
                            if(response.success === true) {
                               $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                '</div>');                             
                setTimeout(function(){
                               $(".messages").empty();
                            },3000);
              $("#updateModal").modal('toggle');
              tproduk.ajax.reload(null,false);
              
                            } else {
                                $('.text-danger').remove()
                                if(response.messages instanceof Object) {
                                    $.each(response.messages, function(index, value) {
                                        var id = $("#"+index);

                                        id
                                        .closest('.form-group')
                                        .removeClass('has-error')
                                        .removeClass('has-success')
                                        .addClass(value.length > 0 ? 'has-error' : 'has-success')                                       
                                        .after(value);                                      

                                    });
                                } else {
                                    $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                      '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                      '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                                    '</div>');
                                }
                            }
                        } // /succes


                    }); // /ajax

                    return false;
                });
                
            }
        });
    }
    else {
        alert('error');
    }
}


</script>