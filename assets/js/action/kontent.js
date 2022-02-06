//create data
CKupdate();
function createKontent(){
  CKclaer();
  kosong();
    $('#createForm')[0].reset();
    $("#submit").attr("disabled", false);
    $('.text-danger').remove();
   $('#tags').tagsInput({width:'auto'});
    $(".form-group").removeClass('has-error').removeClass('has-success');

       $.ajax({
          url: 'kategori/list_a',
          type: 'post',
          dataType: 'json',
          success: function (data) {
          $.each(data, function (key, value) {
          //show complate seaerch
          $('.kategori').append(       
          
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
    url:'kontent/subKategori',
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


    $('#createForm').on('submit', function (event) {
  event.preventDefault();
  var image='';
    var image =$('#image').attr('src');
    var title = $('#title').val();
    var meta = $('#meta').val();
    var id_kategori = $('#id_kategori').val();
    var id_sub = $('#id_sub').val();
    var description = $('#description').val();
    var tags = $('#tags').val();
    
  $.ajax({
  url: 'kontent/insert',
  type: 'POST',
  dataType: 'json',
  cache : false,
  data: { title: title,id_kategori: id_kategori,id_sub: id_sub, meta: meta, description: description, tags: tags, image: image },
  })
    .done(function (data) {
    console.log("success");
     $('#createForm')[0].reset();
     $("#exampleModalLong").modal('toggle');
       tbkontent.ajax.reload(null,false);
       window.location.reload();
    })
    .fail(function () {
      console.log("error");
    })
    .always(function () {
      console.log("complete");
    });
   
});
};

//view list data
var tbkontent;
$(document).ready(function(){
tbkontent=$("#tbkontent").DataTable({
    'ajax':'kontent/list_all',
    'orders':[]
});
});


   function CKclaer(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
} 


function kosong(){
        $('[type=text]').val('');     
        $('[name=title]').focus();
    }

function updateKontent(id = null) 
{

    if(id) {
        $(".tag").remove();
        $("#updateForm")[0].reset();
        $('.form-group').removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $.ajax({
            url: 'kontent/get_id/'+id,
            type: 'post',
            dataType: 'json',
            success:function(response) {
               $("#etitle").val(response.title);
                $("#emeta").val(response.meta);
               $("#edescription").val(response.description);
               $("#eimage").append('<img id="old_img" style="width: 200px; height: 200px;" src="./upload/'+response.image+'"></img>')
                CKupdate();
                     CKEDITOR.instances['edescription'].setData(edescription);
                     

  $(".all_kat").html('<select class="form-control ekategori" name="eid_kategori" id="eid_kategori" value=""  aria-label="Default select example">'+
  
  '<option value="'+response.id_kategori+'" >'+response.nama_kategori+'</option>'+
 
  '</select>');

   $(".tes").html('<select class="form-control " name="eid_sub" id="eid_sub" value=""  aria-label="Default select example">'+
  
  '<option value="'+response.id_sub+'" >'+response.nama_sub+'</option>'+
 
  '</select>');
                             
         $("#etags").val(response.tags); 
             $('#etags').tagsInput({width:'auto'});                 
                
$.ajax({
          url: 'kategori/list_a',
          type: 'post',
          dataType: 'json',
          success: function (data) {
          $.each(data, function (key, value) {
          //show complate seaerch
          $('.ekategori').append(       
          
    '<option value="'+value.id_kategori+'" >'+value.nama_kategori+'</option>'
  
          );

          });

          }
          })

 $('#eid_kategori').change(function(){
  var eid_kategori = $('#eid_kategori').val();
  
  if(eid_kategori != '')
  {
   $.ajax({
    url:'kontent/esubKategori',
    method:"POST",
    data:{eid_kategori:eid_kategori},
    success:function(data)
    {
     $('#eid_sub').html(data);
    //alert(data);
    }
   });
  }
  else
  {
   $('#eid_sub').html('<option value="">---</option>');
  
  }
 });

   


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
                                $(".tagsinput").remove();

                            },3000);
              $("#updateModal").modal('toggle');
              tbkontent.ajax.reload(null,false);
              
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


  function CKclaer(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
} 

 function CKupdate(){
        for (instance in CKEDITOR.instances){
            CKEDITOR.instances['description'].updateElement();
            

        }
        
    }




    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }

   
   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#image').attr('src', e.target.result) 
                        .width(200)
                        .height(200);
                 $('#eimage').attr('src', e.target.result) 
                        .width(200)
                        .height(200);
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#blah").change(function(){
        readURL(this);
    });

     $("#eblah").change(function(){
        readURL(this);
    });

    function bersih(){
      window.location.reload();
    }

    function postKontent($id=null){
    if ($id) {
         
         $('.text-danger').remove();
        $.ajax({
            url:'kontent/post_k'+'/'+$id,
            type:'post',
            dataType:'json',
            success:function(response){
                if (response.success===true) {
                     $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                '</div>');
                                setTimeout(function(){
                               $(".messages").empty();
                            },3000);
                                
                            tbkontent.ajax.reload(null, false);
                }
               }
            
        });
    }
}

  function deleteKontent($id=null){
    if ($id) {
         
         $('.text-danger').remove();
        $.ajax({
            url:'kontent/delete_k'+'/'+$id,
            type:'post',
            dataType:'json',
            success:function(response){
                if (response.success===true) {
                     $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                '</div>');
                                setTimeout(function(){
                               $(".messages").empty();
                            },3000);
                                
                            tbkontent.ajax.reload(null, false);
                }
               }
            
        });
    }
}