<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelurahan Temas</title>
    <link rel="shortcut icon" href="Assets/Logo_Kota_Batu,_Jawa_Timur_(Seal_of_Batu,_East_Java).svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/hover.css"/>

    <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

      body {
        font-family: "Poppins", sans-serif;
      }

      .carousel-item img {
        filter: brightness(65%); /* Apply initial brightness for the image */
        transition: filter 0.5s ease; /* Smooth transition */
      }

      .carousel-item:hover img {
        filter: brightness(80%); /* Slightly brighter on hover */
      }

      .map-responsive {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
      }

      .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

    </style>

  </head> 
  <body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header id="header"> 
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <table>
            <tr>
              <td>
                <a href="/">
                  <img height="40" data-sticky-top="33" src="../../Assets/Logo_Kota_Batu,_Jawa_Timur_(Seal_of_Batu,_East_Java).svg"/>
                </a>
              </td>
              <td>
                <h6 class="ms-2 mt-1">
                  <a href="/" class="text-dark">
                    <strong class="fs-6" >Kelurahan Temas</strong>
                      <br/><span class="fs-6">Kota Batu</span> 
                    </a>
                </h6>
              </td>
            </tr>
          </table>
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
                    <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                    <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                    <li><a class="dropdown-item" href="/demografi">Demografi</a></li>
                    <li><a class="dropdown-item" href="/geografis">Geografis</a></li>
                    <li><a class="dropdown-item" href="/peta">Peta</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kelembagaan
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/lpmk">LPMK</a></li>
                    <li><a class="dropdown-item" href="/bkm">BKM</a></li>
                    <li><a class="dropdown-item" href="/linmas">Linmas</a></li>
                    <li><a class="dropdown-item" href="/kim">KIM</a></li>
                    <li><a class="dropdown-item" href="/pkk">PKK</a></li>
                    <li><a class="dropdown-item" href="/karang-taruna">Karang Taruna</a></li>
                    <li><a class="dropdown-item" href="/fa">Forum Anak</a></li>
                    <li><a class="dropdown-item" href="/pokdarwis">POKDARWIS</a></li>
                    <li><a class="dropdown-item" href="/fprb">FPRB</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pengembangan Lokal
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/sarana-prasarana">Sarana Prasarana</a></li>
                    <li><a class="dropdown-item" href="/umkm">UMKM</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi Publik
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/berita">Berita</a></li>
                    <li><a class="dropdown-item" href="/agenda">Agenda</a></li>
                    <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                    <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
                  </ul>
              </li>
              <li class="nav-item ms-3">
                <a style="margin-top: -2px;", class="nav-link active" href="/kontak">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">     
        <div class="carousel-item active" style="max-height: 600px">
          <img src="Assets\carousel1.png" class="d-block w-100 img-fluid" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h2>Selamat Datang</h2>
            <p>di Website Kelurahan Temas Kota Batu Jawa Timur</p>
          </div>
        </div>
        <div class="carousel-item" style="max-height: 600px">
          <img src="Assets\carousel2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h2>Selamat Datang</h2>
            <p>di Website Kelurahan Temas Kota Batu Jawa Timur</p>
          </div>
        </div>
        <div class="carousel-item" style="max-height: 600px">
          <img src="Assets\carousel3.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h2>Selamat Datang</h2>
            <p>di Website Kelurahan Temas Kota Batu Jawa Timur</p>
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
    <section id="berita">
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>Berita Terkini</h2>
          </div>
        </div>
        <div class="row mt-5">
          @foreach ($news as $post)
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
              <div style="max-height: 200px; overflow: hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a class="link-dark link-offset-2 link-underline-opacity-0 link-opacity-75-hover" href="/berita/{{ $post->slug }}">{{ $post->title }}</a>
                </h5>
                <p class="card-text">{{ $post->excerpt }}</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <a href="/berita">
          <button type="button" class="btn btn-outline-dark mt-3">Selengkapnya</button>
        </a>
      </div>
    </section>
    <section id="event">
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>Pengumuman</h2>
          </div>
        </div>
        <div class="row mt-5">
          @foreach ($announcement as $post)
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
              <div style="max-height: 200px; overflow: hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="..." />
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <a class="link-dark link-offset-2 link-underline-opacity-0 link-opacity-75-hover" href="/berita/{{ $post->slug }}">{{ $post->title }}</a>
                </h5>
                <p class="card-text">{{ $post->excerpt }}</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <a href="/pengumuman">
          <button type="button" class="btn btn-outline-dark mt-3">Selengkapnya</button>
        </a>
      </div>
    </section>
    <!-- <section>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
            <h6>Kontak Temas</h6>
                <p><i class="bi bi-telephone-fill">Telepon</p></i>
                <p>08123456789</p>
          </div>
          <div class="col">
            <h5 class="fw-bold text-start">TEMAS</h5>
            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur adipisci veritatis esse soluta at nostrum odio incidunt et mollitia dolore iste quam omnis iusto quo exercitationem, accusantium quos voluptate?</p>
          </div>
        </div>
      </div>
    </section> -->
    <section id="galeri">
      <div class="container">
        <div class="row text-center mt-5 mb-5">
          <div class="col">
            <h2>Galeri Foto dan Video</h2>
          </div>
        </div>
        <div class="container">
          <div class="row mb-4 gx-3 gy-3">
          @foreach ($galleries as $gallery)
          <div class="col-lg-3">
            <div class="card mx-auto" style="height: 200px; width: 300px; overflow: hidden">
              <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top rounded img-fluid" alt="galeri1"/>
            </div>
          </div>
          @endforeach
          </div>
        </div>    
      </div>
    </section>
    
    <section>
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>Peta Wilayah</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15808.507284268053!2d112.52692229408387!3d-7.881797374249114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7880d9c33a06b1%3A0xe13ff8ae351bb29e!2sTemas%2C%20Kec.%20Batu%2C%20Kota%20Batu%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1719404438669!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <table class="table table-bordered border-black">
              <tbody>
                <tr>
                  <th>Kode Pos</th>
                  <td>65315</td>
                </tr>
                <tr>
                  <th>Tahun Pembentukan</th>
                  <td>6 Maret 1993</td>
                </tr>
                <tr>
                  <th>Tipologi</th>
                  <td>Petani dan Pedagang</td>
                </tr>
                <tr>
                  <th>Klasifikasi</th>
                  <td>Swakarya</td>
                </tr>
                <tr>
                  <th>Jumlah Penduduk</th>
                  <td>18.284 Jiwa</td>
                </tr>
                <tr>
                  <th>Luas Wilayah</th>
                  <td>323 Ha</td>
                </tr>
                <tr>
                  <th>Batas Utara</th>
                  <td>Kelurahan Pandanrejo</td>
                </tr>
                <tr>
                  <th>Batas Selatan</th>
                  <td>Kelurahan Oro-Oro Ombo</td>
                </tr>
                <tr>
                  <th>Batas Timur</th>
                  <td>Kelurahan Torongrejo dan Kelurahan Beji</td>
                </tr>
                <tr>
                  <th>Batas Barat</th>
                  <td>Kelurahan Sisir</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
      
    <footer id="footer" class="mt-5">
      <div class="text-bg-dark">
        <div class="container pt-4">
          <div class="row justify-content-between">
    
            <div class="col-lg-3 col-md-6 mb-4">
              <div>
                <h3>Temas</h3>
                <p>
                  Temas adalah sebuah kelurahan di Kecamatan Batu, Kota Batu, Provinsi Jawa Timur, Indonesia.
                  <br>
                  <strong>Jalan Wukir No 709
                  Kode Pos 65315</strong><br>
                </p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
              <h4>Kontak Temas</h4>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-telephone text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h5>Telepon</h5>
                  <p><a class="link-underline-opacity-0" href="#" target="_blank">+62 812-3351-548</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-envelope text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Email</h6>
                  <p><a href="mailto:lurah_temas@gmail.com" target="_blank">lurah_temas@gmail.com</a></p>
                </div>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
              <h4>Media Sosial</h4>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-facebook text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Facebook</h6>
                  <p><a href="#" target="_blank">Temas</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-instagram text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Instagram</h6>
                  <p><a href="https://www.instagram.com/temas_sae/" target="_blank">temas_sae</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-youtube text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Youtube</h6>
                  <p><a href="https://www.youtube.com/@temassaetvdesa537" target="_blank">@temassaetvdesa537</a></p>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>
      <div class="text-center bg-black text-light p-2">
        <span><i class="bi bi-c-circle"></i> Copyright. All Rights Reserved</span> <br>
        <span>Temas</span>
      </div>
    </footer>
    
  </body>
</html>
