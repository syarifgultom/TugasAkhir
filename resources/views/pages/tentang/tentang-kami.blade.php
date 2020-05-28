@extends('layouts.app')

@section('content')
<!-- <div class="container">
	<h1  align="center">Tentang Kami</h1>
</div> -->
<!-- Jumbotron -->
<div class="row justify-content-center">
	<div class="col-md-9 col-xs-12">
		<div class="bg-dark">
		  <div class="container py-5">
		    <div class="row h-100 align-items-center py-5">
		      <div class="col-md-6 col-xs-12">
		        <h1 class="display-3" style="color: white;">Tentang kami</h1><br>
		        <p class="lead text-muted mb-0">Hanya mencoba membantu Kalian dengan cara kami sendiri</p>
		      </div>
		      <div class="col-md-6 col-xs-12">
		      	<img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid" >
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>

<!-- Tentang kami -->
<section id="about" class="about">
<div class="container">
  <div class="row mb-5 pt-5 ">
    <div class="col text-center ">
      <h1 class="display-4">Misi</h1>
    </div>
  </div>

  <div class="row justify-content-center ">
    <div class="col-md-5">
      <p class="text-justify" > Kami Memiliki sebuah Tujuan untuk bisa membantu rakyat-rakyat Indonesia dalam 
      rangkan "Memutuskan Rantai Penyebaran COVID-19". Karena melonjaknya kasus terkait peningkatan jumlah orang 
      yang positif dinyatakan terkena corona. Hal ini membuat kami, anak-anak sekolah SMKN 4 BANDUNG mencoba untuk 
      ikut memutus penyebaran COVID-19</p>
    </div>
    <div class="col-md-5">
      <p class="text-justify">Dengan sajian berbasis Website, kami memberi kontribusi kepada Bangsa dan Negara dengan kompetensi yang kami miliki 
      dengan menyajikan berbagai informasi, seperti Melaporkan situasi yang ada di tiap provinsi secara up to date
      dan memberi beberapa tips yang dapat membantu para pembaca. Dengan harapan penyebaran virus COVID-19 dapat berkurang.</p>
    </div>
  </div>
       
      
</div>
</section>

<!-- Judul Para Pencipta -->
<div class="row mb-5 pt-5">
    	<div class="col text-center ">
      	<h1 class="display-4">Para Pencipta</h1>
    	</div>
  	</div>
<!-- Akhir Judul Para Pencipta -->

<!-- Founder -->
<div class="row justify-content-center">
	
	   <!-- Para Pendiri-->
    <div class="col-xs-12 col-md-5 text-center">
        <div class=" py-5 px-4"><img src="{{ url('/images/org1_new.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Haika Putra Gustiansyah</h5><span class="small text-uppercase text-muted">Back-End</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-5 text-center">
       <div class=" py-5 px-4"><img src="{{ url('/images/org2.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Risky Aditiyana</h5><span class="small text-uppercase text-muted">Tester</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-5 text-center">
         <div class=" py-5 px-4"><img src="{{ url('/images/org3.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Syarif Saurma Gultom</h5><span class="small text-uppercase text-muted">Front-End</span>
        </div>
    </div>
	
</div>


<!-- Judul Kontak -->
	<div class="row mb-5 pt-5">
    	<div class="col text-center ">
      	<h1 class="display-4">Hubungi Kami</h1>
    	</div>
  	</div>
<!-- Akhir Judul Kontak  -->

<!-- Kontak -->
<section class="Kontak" id="Kontak">

 <div class="container " >
     

      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          
          <div class="card border-success mb-3" >
          <div class="card-body text-success">
            <h5 class="card-title">Sok hubungi</h5>
            <p class="card-text">Sebenarnya ini hanya sebuah tugas besar PWPB ga lebih dan ga kurang</p>
          </div>
          </div>

          <ul class="list-group">
            <li class="list-group-item"><h1>Kantor Kita</h1></li>
            <li class="list-group-item">Jl.Kliningan 06 Buah Batu</li>
            <li class="list-group-item">Di Lengkong</li>
            <li class="list-group-item">081320005968</li>
          </ul>

        </div>


        </div>
      </div>

 </div>
</section>

     <footer class="bg-light pb-0 pt-5" >
        <div class="container text-center">
            <p class="font-italic text-muted mb-0">&copy; Copyrights Dari Perusahaan Kami.</p>
        </div>
    </footer>
      


@endsection



