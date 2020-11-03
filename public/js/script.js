var search = document.getElementById('search');
var tabel_barang = document.getElementById('data-barang');
var html = "";
var i = 0;
var xmlhttp;
search.addEventListener('keyup', function(){
    
    xmlhttp = buatXmlHttpRequestObject();
    
    function buatXmlHttpRequestObject(){
      xmlhttp;
      try {
        //untuk IE 7 atau modern browser
        xmlhttp = new XMLHttpRequest();
        proses();
      } catch (e) {
        alert('Browser Anda Tidak Support Ajax : '+e.toString());
      }
      if (!xmlhttp) {
        alert('Error Create XMLHttpReq');
      }else {
        return xmlhttp; 
      }
    }
    
   
    function proses(){
      //di lanjutkan jika xmlhttp tidak void
      if (xmlhttp) {
        //mencoba membaca file dari server
        try {
          xmlhttp.open("GET","/produk/search?keyword="+ search.value,true);
          xmlhttp.onreadystatechange = handleRequestStateChange;
          xmlhttp.send();
        } catch (e) {
          alert('Tidak Dapat Konek : '+e.toString());
        }
      }
    }
    
    function handleRequestStateChange(){
    
      if (xmlhttp.readyState == 4) {
        //lanjutkan jika http status adalah ok atau 200
        if (xmlhttp.status == 200) {
          try {
            handleServerResponse();
            html = "";
            i = 0;
          } catch (e) {
            alert('Error Membaca Response : '+e.toString());
          }
        }else {
          alert('Terjadi Masalah Saat Mendapatkan Data : '+xmlhttp.statusText);
        }
      }
    }
    
    //menangani respon yang di terima dari server
    function handleServerResponse(){
    
      //membaca pesan dari server
      var responjson = JSON.parse(xmlhttp.responseText);
      console.log(responjson);
      if (responjson.length > 0) {

          responjson.forEach(element =>{
              i++;
              html += "<tr><th>"+ i +"</th>" +
              "<td>"+ element.nama_brg +"</td>"+
              "<td>"+ element.harga +"</td>"+
              "</tr>";
          });
        tabel_barang.innerHTML = html;
          
      } else {
        html += "<tr><td colspan=\"3\" class=\"text-center\">Tidak ada hasil</td></tr>"
        tabel_barang.innerHTML = html;
    }
          
    };
});






