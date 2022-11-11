
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body style="background-color:#343a40;">
    
  <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container">
    <a class="navbar-brand" href="user-home.php" id="nav">LAPAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active"  style="margin-left: 10px; color:grey;" aria-current="page" href="user-home.php">Beranda</a>
        <a class="nav-link active"  style="margin-left: 10px;" aria-current="page" href="user-aspirasi.php">Pengajuan</a>
        <a class="nav-link active"  style="margin-left: 10px;" aria-current="page" href="user-tentang.php">Tentang</a>

        <!-- login user -->
        <button type="button" class="btn btn-primary" style="margin-left: 900px;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><a href="logout.php" style="text-decoration: none; color:white;">LOGOUT</a></button>
      </div>
    </div>
  </div>
        </nav>

<!-- login user end -->
      
      </div>
    </div>

</nav>
    </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 1000px;" src="foto/tiga.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sosial Media<i class="fas fa-paper-plane"></i></h5>
        <p>@LAPAS</p>
      </div>
    </div>
    <div class="carousel-item">
      <img width="auto" src="foto/dua.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Email <i class="fas fa-pen    "></i></h5>
        <p>LaPaS@gmail.com</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="foto/satu.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Contact <i class="fas fa-phone    "></i></h5>
        <p>+62 857-7462-6696</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <div class="row">
    <div class="p-3 mb-2 bg-dark text-white" style="margin-top:20px;"><h2>Data Aspirasi Siswa</h2></div>
    <table class="table table-dark" id="table">
  <thead>
    <tr align="center">
      <th scope="col">No</th>
      <th scope="col">Id Aspirasi</th>
      <th scope="col">NIS</th>
      <th scope="col">Waktu</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Jenis Aspirasi</th>
      <th scope="col">Aspirasi</th>
      <th scope="col">Gambar</th>
      <th>Status</th>
      <th>Tanggapan</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		include "config.php";
    $id_pelaporan = 1;
		$sql = mysqli_query($conn, "SELECT * FROM tbaspirasi");
		while ($data = mysqli_fetch_array($sql)){				
		?>
		<div class="isi">
			<tr style="background-color:white";>
				<td><?php echo $id_pelaporan++ ?></td>
				<td><?php echo $data['id']?></td>
				<td><?php echo $data['password']?></td>
				<td><?php echo $data['tanggal']?></td>
				<td><?php echo $data['lokasi']?></td>
				<td><?php echo $data['jenis_aspirasi']?></td>
				<td><?php echo $data['laporan']?></td>
				<td><?php echo $data['gambar']?></td>
				<td><?php echo $data['status']?></td>
        <td></td>
				<td>
					<a href="update-user.php?id_pelaporan=<?php echo $data['id_pelaporan']; ?>"><i class="fas fa-pen-fancy"></i></a>
					<a href="delete.php?id_pelaporan=<?php echo $data['id_pelaporan']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		</div>
			<?php } ?>
    
  </tbody>
</table>
  </div>
</div>
    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>





