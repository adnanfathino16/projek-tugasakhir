<?php 
  // koneksi database
  $konek = mysqli_connect("localhost", "root" ,"", "companyprofile");

  // baca data dari tabel tb_sensor

  // baca ID tertinggi 
  $sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM iot_tb");
  //tanggap datanya 
  $data_ID = mysqli_fetch_array($sql_ID);
  // ambil ID terakhir / terbesar 
  $ID_akhir = $data_ID['MAX(ID)'];
  $ID_awal = $ID_akhir - 4 ;

  // baca informasi tanggal untuk 5 data terakhir - sumbu x di grafik
  $waktu = mysqli_query($konek, "SELECT waktu from iot_tb WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC ");
  // baca informasi tegangan masuk untuk 5 data terakhir - sumbu y di grafik
  
  $tegangan_in = mysqli_query($konek, "SELECT tegangan_in from iot_tb WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC ");
  
  

 ?>

 <!-- tampilan grafik -->
 <div class= "panel panel-primary">
    <div class= "panel-heading" style="background-color:cadetblue">
       Grafik Sensor
    </div>

    <div class="panel-body">
       <!-- canvas untuk grafik -->
       <canvas id= "myChart3"></canvas>
       
       <!-- gambar grafik -->
       <script type="text/javascript">
       // baca ID canvas tempat grafik akan diletakkan
       var canvas = document.getElementById('myChart3');
       // letakkan data tanggal dan tegangan untuk grafik
       var data = {
       	   labels : [
       	   		<?php 
       	   			while($data_tanggal = mysqli_fetch_array($waktu))
       	   			{
       	   				echo '"'.$data_tanggal['waktu']. '",';  //["25-04-20222", "26-04-2022"]   
       	   			}

       	   		 ?>

       	   ] , 
       	   datasets : [
           
             {
       	   		label : "tegangan_in",
              fill : true,
              backgroundColor : "rgba(52, 231, 43, .2)",
              borderColor : "rgba(52, 231, 43, 0.5)",
              pointRadius : 5,
       	   		data : [
       	   		<?php 
       	   			while($data_tegangan_in = mysqli_fetch_array($tegangan_in))
       	   			{
       	   				echo $data_tegangan_in['tegangan_in']. ',' ;
       	   			}
       	   		 ?>
       	   		]
       	   }
           ]
       };


       	//option grafik
       	var option = {
            showLines : true, 
            animation : {duration : 0}
        };

        // cetak grafik kedalam canvas
        var myLineChart = Chart.Line(canvas, {
            data : data,
            options : option
        });
       </script>
             

    </div>
 </div>