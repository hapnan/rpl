$(document).ready(function(e){
    data0();
    data1();
    data2();
    data3();
    function data0() {    
        $.ajax({    
            // The URL for the request
    
            url: "http://localhost:8080/datapesanan/getdatapesanan0",
            // Whether this is a POST or GET request
            type: "GET",
            // The type of data we expect back
            dataType : "json",

            success : function(data){
                var txt = "";
                         
                txt +=  "<div class=\"card\">"+
                            "<h5 class=\"card-header\">#"+data['id_transaksi']+"</h5>"+
                            "<div class=\"card-body \">"+
                                "<div class=\"row\">"+
                                    "<div class=\"col\">"+
                                        "<div class=\"row\">"+
                                            "<div class=\"col-md-2\">"+
                                                "<img src=\"http://localhost:8080/img/IMG_1496.jpg\"  class=\"img-fluid rounded\" alt=\"...\">"+
                                            "</div>"+
                                            "<div class=\"col-md-10 my-auto\">"+
                                                "<h3 class=\"nama-barang\" id=\"nama-barang\" name=\"nama-barang\">"+data['nama_brg']+"</h3>"+
                                                "<p class=\"jumlah-barang\" id=\"jumlah-barang\" name=\"jumlah-barang\">"+data['jumlah']+" pack"+"</p>"+
                                            "</div>"+
                                                "<p class=\"barang-lain mt-2\">"+data['jumlah_order']+"+ barang lainnya</p>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class=\"row\">"+
                                        "<div class=\"col\">"+                                               
                                            "<p class=\"label-total\">Total Belanja</p>"+
                                            "<p class=\"total-belanja\">"+data['total_hrg']+"</p>"+                                                                                        
                                        "</div>"+
                                        "<div class=\"col\">"+
                                            "<a class=\"btn btn-primary float-right\" href=\"http://localhost:8080/datapesanan/detail/"+data['id_transaksi']+"\" target = \"_blank\">Detail</a>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
            $(".target-pesanan-0").html(txt);
            }
        })
        .done(function(xhr, status) {
            console.log("status: " + status);  
        })
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
        .fail(function( xhr, status, errorThrown ) {
            if ($status == 404) {
                var gagal = "";
                gagal += "<h3>Tidak ada data</h3>"  
                $(".target-pesanan-0").html(gagal);
                
            }
        })
            // Code to run regardless of success or failure;
        .always(function( xhr, status ) {
            console.log(status);
        })
    }

    function data1() {    
        $.ajax({    
            // The URL for the request
    
            url: "http://localhost:8080/datapesanan/getdatapesanan1",
            // Whether this is a POST or GET request
            type: "GET",
            // The type of data we expect back
            dataType : "json",
            success : function(data){
                var txt = "";
                         
                txt += "<div class=\"card\">"+
                            "<h5 class=\"card-header\">#1</h5>"+
                            "<div class=\"card-body \">"+
                                "<div class=\"row\">"+
                                    "<div class=\"col\">"+
                                        "<div class=\"row\">"+
                                            "<div class=\"col-md-2\">"+
                                                "<img src=\"http://localhost:8080/img/IMG_1496.jpg\"  class=\"img-fluid rounded\" alt=\"...\">"+
                                            "</div>"+
                                            "<div class=\"col-md-10 my-auto\">"+
                                                "<h3 class=\"nama-barang\" id=\"nama-barang\" name=\"nama-barang\">"+data['nama_brg']+"</h3>"+
                                                "<p class=\"jumlah-barang\" id=\"jumlah-barang\" name=\"jumlah-barang\">"+data['jumlah']+" pack"+"</p>"+
                                            "</div>"+
                                                "<p class=\"barang-lain mt-2\">"+data['jumlah_order']+"+ barang lainnya</p>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class=\"row\">"+
                                        "<div class=\"col\">"+                                               
                                            "<p class=\"label-total\">Total Belanja</p>"+
                                            "<p class=\"total-belanja\">"+data['total_hrg']+"</p>"+                                                                                        
                                        "</div>"+
                                        "<div class=\"col\">"+
                                            "<button class=\"button-detail btn btn-primary\" type=\"button\" >Detail</button>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
                $(".target-pesanan-1").html(txt);
            }
        })
        .done(function(xhr, status) {
            console.log("status: " + status);  
        })
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
        .fail(function( xhr, status, errorThrown ) {
            $status = xhr.status;
            if ($status == 404) {
                var gagal = "";
                gagal += "<h3>Tidak ada data</h3>"  
                $(".target-pesanan-1").html(gagal);
                
            }
        })
            // Code to run regardless of success or failure;
        .always(function( xhr, status ) {
            console.log(status);
        })
    }

    function data2() {    
        $.ajax({    
            // The URL for the request
    
            url: "http://localhost:8080/datapesanan/getdatapesanan2",
            // Whether this is a POST or GET request
            type: "GET",
            // The type of data we expect back
            dataType : "json",

            success : function(data){
                var txt = "";
                         
                txt += "<div class=\"card\">"+
                            "<h5 class=\"card-header\">#1</h5>"+
                            "<div class=\"card-body \">"+
                                "<div class=\"row\">"+
                                    "<div class=\"col\">"+
                                        "<div class=\"row\">"+
                                            "<div class=\"col-md-2\">"+
                                                "<img src=\"http://localhost:8080/img/IMG_1496.jpg\"  class=\"img-fluid rounded\" alt=\"...\">"+
                                            "</div>"+
                                            "<div class=\"col-md-10 my-auto\">"+
                                                "<h3 class=\"nama-barang\" id=\"nama-barang\" name=\"nama-barang\">"+data['nama_brg']+"</h3>"+
                                                "<p class=\"jumlah-barang\" id=\"jumlah-barang\" name=\"jumlah-barang\">"+data['jumlah']+" pack"+"</p>"+
                                            "</div>"+
                                                "<p class=\"barang-lain mt-2\">"+data['jumlah_order']+"+ barang lainnya</p>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class=\"row\">"+
                                        "<div class=\"col\">"+                                               
                                            "<p class=\"label-total\">Total Belanja</p>"+
                                            "<p class=\"total-belanja\">"+data['total_hrg']+"</p>"+                                                                                        
                                        "</div>"+
                                        "<div class=\"col\">"+
                                            "<button class=\"button-detail btn btn-primary\" type=\"button\" >Detail</button>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
            $(".target-pesanan-2").html(txt);
            }
        })
        .done(function(xhr, status) {
            console.log("status: " + status);  
        })
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
        .fail(function( xhr, status, errorThrown ) {
            $status = xhr.status;
            if ($status == 404) {
                var gagal = "";
                gagal += "<h3>Tidak ada data</h3>"  
                $(".target-pesanan-2").html(gagal);
                
            }
        })
            // Code to run regardless of success or failure;
        .always(function( xhr, status ) {
            console.log(status);
        })
    }

    function data3() {    
        $.ajax({    
            // The URL for the request
    
            url: "http://localhost:8080/datapesanan/getdatapesanan3",
            // Whether this is a POST or GET request
            type: "GET",
            // The type of data we expect back
            dataType : "json",

            success : function(data){
                var txt = "";
                         
                txt += "<div class=\"card\">"+
                            "<h5 class=\"card-header\">#1</h5>"+
                            "<div class=\"card-body \">"+
                                "<div class=\"row\">"+
                                    "<div class=\"col\">"+
                                        "<div class=\"row\">"+
                                            "<div class=\"col-md-2\">"+
                                                "<img src=\"http://localhost:8080/img/IMG_1496.jpg\"  class=\"img-fluid rounded\" alt=\"...\">"+
                                            "</div>"+
                                            "<div class=\"col-md-10 my-auto\">"+
                                                "<h3 class=\"nama-barang\" id=\"nama-barang\" name=\"nama-barang\">"+data['nama_brg']+"</h3>"+
                                                "<p class=\"jumlah-barang\" id=\"jumlah-barang\" name=\"jumlah-barang\">"+data['jumlah']+" pack"+"</p>"+
                                            "</div>"+
                                                "<p class=\"barang-lain mt-2\">"+data['jumlah_order']+"+ barang lainnya</p>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div class=\"row\">"+
                                        "<div class=\"col\">"+                                               
                                            "<p class=\"label-total\">Total Belanja</p>"+
                                            "<p class=\"total-belanja\">"+data['total_hrg']+"</p>"+                                                                                        
                                        "</div>"+
                                        "<div class=\"col\">"+
                                            "<button class=\"button-detail btn btn-primary\" type=\"button\" >Detail</button>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
            $(".target-pesanan-3").html(txt);
            }
        })
        .done(function(xhr, status) {
            console.log("status: " + status);  
        })
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
        .fail(function( xhr, status, errorThrown ) {
            $status = xhr.status;
            if ($status == 404) {
                var gagal = "";
                gagal += "<h3>Tidak ada data</h3>"  
                $(".target-pesanan-3").html(gagal);
                
            }
        })
            // Code to run regardless of success or failure;
        .always(function( xhr, status ) {
            console.log(status);
        })
    }
})