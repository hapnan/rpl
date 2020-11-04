$(document).ready(function(e){
    var txt = "";
    var j= 0;
    $('#modal-barang').click(function(){
        ajax();
    });
  
    function ajax(){
      $.ajax({
   
        // The URL for the request

        url: "https://hapnanarsad.tech/produk/getall",
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
                        "<input type=\"number\" class=\"form-control\" id=\"input-jumlah-"+ value.id+"\" placehorder=\"Masukkan jumlah order\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">"+
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

    $('#pilih-barang').on('shown.bs.modal', function () {
        j = 0;
        $('td').on("click", "button", function(){
          var id = this.id ;
          var serializ = this.val;
          console.log(id, serializ  );
       });
     
    })

  })
<<<<<<< HEAD
  
=======
  
>>>>>>> 119e01efca772c9ecb8c6071c59fa6959ec1d4eb
