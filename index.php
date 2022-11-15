<html>

<head>
	<title>Grafik Sensor</title>

	<!-- panggil file bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/gaya.css">
	<script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="assets/js/mdb.min.js"></script>
	<script type="text/javascript" src="jquery-latest.js"></script>

	<!-- memanggil data grafik -->
	<script type="text/javascript">
		var refreshid = setInterval(function() {
			$('#adnanfathino').load('data.php');
		}, 1000);

		var refreshid = setInterval(function() {
			$('#adnanfathino2').load('data2.php');
		}, 1000);

		var refreshid = setInterval(function() {
			$('#adnanfathino3').load('data3.php');
		}, 1000);

		$(document).ready(function() {

			setInterval(function() {
				$("#cektegangan_in").load("cektegangan_in.php");
			}, 800);

		});

		$(document).ready(function() {

			setInterval(function() {
				$("#cektegangan").load("cektegangan.php");
			}, 800);

		});

		$(document).ready(function() {

			setInterval(function() {
				$("#cekpersentase").load("cekpersentase.php");
			}, 800);

		});

		$(document).ready(function() {

			setInterval(function() {
				$("#cekarus").load("cekarus.php");
			}, 800);

		});

		$(document).ready(function() {

			setInterval(function() {
				$("#cekdaya").load("cekdaya.php");
			}, 800);

		});
	</script>


</head>

<body>


	<div class="header">
		<a href="../index.php">Kembali ke dashboard</a>
	</div>
	<!-- pemanis untuk menampilkan gambar -->
	<div class="logo">
		<img src="assets/img/logopnj.png" style="width: 50%">
	</div>



	<!-- tempat untuk tampilan grafik -->
	<div class="keterangan" style="text-align: center;">
		<h3><b><i>Monitoring</i> secara <i>Realtime</b></i></h3>
		<p>(Data yang ditampilkan adalah 5 data terakhir)</p>
	</div>

	
	<!-- div untuk grafik -->
	<div class="keterangan2" style="text-align: center;">
		<h4><b>Keluaran</b></h4>
		<p>(Energi Listrik Dari Baterai ke Beban)</p>
	</div>

	<div class="lamp">
		<div class="hp"></div>
		<div class="laptop"></div>
		<div class="lampu"></div>
	</div>

	<!-- div untuk grafik -->
	<div class="container1">
		<div class="container" id="adnanfathino" style="width: 65%; text-align: center"></div>
	</div>

	<!-- div untuk grafik -->
	<div class="container2">
		<div class="container" id="adnanfathino2" style="width: 65%; text-align: center"></div>
	</div>

	<div class="scontainer">
		<div class="tegangan">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:center">
					<b>Tegangan</b>
				</div>

				<div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><span id="cektegangan"> 0 </span>V</div>
			</div>
		</div>


		<div class="baterai">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:center">
					<b>Baterai</b>
				</div>

				<div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><span id="cekpersentase"> 0 </span>%</div>
			</div>
		</div>

		<div class="arus">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:center">
					<b>Arus</b>
				</div>

				<div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><span id="cekarus"> 0 </span>mA</div>
			</div>
		</div>


		<div class="daya">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:center">
					<b>Daya</b>
				</div>

				<div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"><span id="cekdaya"> 0 </span>Watt</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p class="copy">Copyright 2022, AdnanFathino,MuhamadRidwan,M.SatrioAdi</p>
	</div>




	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootsrap.min.js"></script>
</body>

</html>