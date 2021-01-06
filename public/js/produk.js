$(document).ready(function(e){
    var txt = "";
    var j= 0;
    
    carttable();
    $('#button-order').attr('disabeled', true)
    $('#modal-barang').click(function(){
        ajax();
    });
  
    function ajax(){
      $.ajax({
   
        // The URL for the request

        url: "http://localhost:8080/produk/getall",
        // Whether this is a POST or GET request
        type: "GET",
        // The type of data we expect back
        dataType : "json",
    })
      // Code to run if the request succeeds (is done);
      // The response is passed to the function
      .done(function( json ) {
        var i = 1;
        txt = "";
        try {
            $.each(json, function(index, value){
      
              txt += "<tr><th scope=\"row\">"+ i++ +"</th>"+
                      "<td id=\"nama\">"+ value.nama_brg +"</td>"+
                      "<td id=\"jumlah\"><div class=\"input-group\">"+
                        "<input type=\"number\" class=\"form-control\" data-type=\"jumlah\" id=\"input-jumlah-"+ value.id+"\" placehorder=\"0\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">"+
                        "<div class=\"input-group-append\">"+
                        "<span class=\"input-group-text\" id=\"basic-addon2\">Pack</span>"+
                        "</div>"+
                        "</div>"+
                      "</td>"+
                      "<td><button type=\"button\" class=\"btn btn-primary\" id=" + value.id+ " value="+ value.slug+">Tambah</button>"+
                      "</td>"
                      "</tr>"
            })
            
            $("#target-barang").html(txt);
                
            $('#pilih-barang').modal('show');
        } catch (error) {
            alert(error);
        }
         
      })
      // Code to run if the request fails; the raw request and
      // status codes are passed to the function
      .fail(function( xhr, status, errorThrown ) {
        alert( "Sorry, there was a problem!" );
        console.log( "Error: " + errorThrown );
        console.log( "Status: " + status );
        console.dir( xhr );
      })
      // Code to run regardless of success or failure;
      .always(function( xhr, status ) {
        console.log(status);
      });
    }

    $('#pilih-barang').on('shown.bs.modal', function (e) {
        j = 0;
        var count = 0;
        $('td').on("click", "button", function(){
          var id = this.id ;
          var data = $(":input[id*='input-jumlah-"+id+"']").val();
          count++;
          if (data == null) {
            alert(data);
          } else {
            $.ajax({
   
              // The URL for the request
      
              url: "http://localhost:8080/produk/cartsementara",
              // Whether this is a POST or GET request
              type: "POST",
              // data yang dikirim
              data: {"id": id, "jumlah" : data},
              // The type of data we expect back
              dataType : "json",
          })
            // Code to run if the request succeeds (is done);
            // The response is passed to the function
            .done(function( json ) {
              var i = 1;
              txt = "";
              try {

                  alert("sukses menambahkan barang");
                } catch (error) {
                  alert(error);
                }
                
              })
              
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
            .fail(function( xhr, status, errorThrown ) {
              alert( "Sorry, there was a problem!" );
              console.log( "Error: " + errorThrown );
              console.log( "Status: " + status );
              console.dir( xhr );
            })
            // Code to run regardless of success or failure;
            .always(function( xhr, status ) {
              console.log(status);
              
            });
          }
          $('td :input').val("");
          
        });
        
        $('#button-save').on('click', function(e){
          $.ajax({
   
            // The URL for the request
    
            url: "http://localhost:8080/produk/savecart",
            // Whether this is a POST or GET request
            type: "POST",
            // The type of data we expect back
            dataType : "json",
          })
          // Code to run if the request succeeds (is done);
          // The response is passed to the function
          .done(function( json ) {
                carttable();
                $('#pilih-barang').modal('hide');
            })
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
            .fail(function( xhr, status, errorThrown ) {
              alert( "Sorry, there was a problem!" );
              console.log( "Error: " + errorThrown );
              console.log( "Status: " + status );
              console.dir( xhr );
            })
            // Code to run regardless of success or failure;
            .always(function( xhr, status ) {
              console.log(status);
            })
             
        });
      
      })

      function carttable() {
          
        $.ajax({
 
          // The URL for the request
  
          url: "http://localhost:8080/produk/datacart",
          // Whether this is a POST or GET request
          type: "POST",
          // The type of data we expect back
          dataType : "json",
          statusCode : {
              404 : function (responseObject, textstatus, jqXHR){

              },
          }
        })
        // Code to run if the request succeeds (is done);
        // The response is passed to the function
        .done(function( json ) {
          var i = 1;
          txt = "";
          try {
            
              $.each(json, function(index, value){
      
                txt += "<tr><th scope=\"row\">"+ i++ +"</th>"+
                        "<td id=\"nama\">"+ value.nama_brg +"</td>"+
                        "<td id=\"jumlah\">"+value.jumlah+
                        "</td>"+
                        "<td id=\"harga\">"+ value.harga_total+
                        "</td>"
                        "</tr>"
              })
              $(".target-cart").html(txt);  
            } catch (error) {
                alert(error);
            }
             
          })
          // Code to run if the request fails; the raw request and
          // status codes are passed to the function
          .fail(function( xhr, status, errorThrown ) {
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
          })
          // Code to run regardless of success or failure;
          .always(function( xhr, status ) {
            console.log(status);
          })
      }

      
})

  
  
