@extends('layouts.app')

@section('content')

<!-- Jumbotron -->
<div class="row justify-content-center">
  <div class="col-md-9 col-xs-12">
    <div class="bg-secondary">
      <div class="jumbotron">
        <div class="container text-center py-3">


              <h1 class="display-3" align="center" style="color: black;">Tips Kami</h1><br>
              <p class=" text-center lead text-muted mb-0">COVID-19 yang disebabkan virus corona SARS-CoV-2 telah menyebar ke seluruh dunia. Dampaknya, sebagian besar aktivitas diberhentikan sementara untuk memutus mata rantai penyebaran virus ini.</p>
              <p class=" text-center lead text-muted mb-0">Secara khusus ada berbagai cara untuk menjaga kesehatan fisik dan mental Anda dan keluarga selama pandemi virus corona. Oleh sebab itu kami akan menyajikan beberapa <i> <b>TIPS</b> </i> yang mungkin berguna untuk Anda dalam mencegah Penyebaran COVID-19</p>


        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lebih Sering Mencuci Tangan</h2>
        <p class="font-italic text-muted mb-4">Cobalah membersihkan tangan Anda secara rutin. Pakai sabun dan air, ataupun cairan pembersih tangan berbahan alkohol. </p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ url('/images/cuci-tangan.jpg') }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div><br>

    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="{{ url('/images/social.jpg') }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-car fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Jaga Jarak Aman</h2>
        <p class="font-italic text-muted mb-4">Usahakan untuk selalu menjaga jarak yang aman dengan orang yang batuk atau bersin.</p>
      </div>
    </div><br>

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Tutup Mulut Saat Batuk</h2>
        <p class="font-italic text-muted mb-4">Saat Anda batuk atau bersin, cobalah tutup mulut dan hidung dengan lengan Anda<b>(Bagian siku)</b>  atau tisu.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ url('/images/batuk.png') }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div><br>  

    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="{{ url('/images/diam.jpg') }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-car fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Usahakan Tinggal di Rumah</h2>
        <p class="font-italic text-muted mb-4">Tetaplah di rumah Anda masing-masing bila tidak ada keperluan yang sangat penting. apalagi jika anda sedang merasa tidak enak badan.</p>
      </div>
    </div><br>

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lihat Tubuh Anda Sendiri</h2>
        <p class="font-italic text-muted mb-4">Jika Anda demam, batuk, atau kesulitan bernapas segera cari bantuan medis. Ingat! hubungi terlebih dahulu dan jangan langsung pergi keluar. </p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ url('/images/lihat-tubuh-anda.jpg') }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>

  </div>
</div>


@endsection