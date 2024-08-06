<!DOCTYPE html>
<html lang="en"> 
  <head> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMKM | Kelurahan Temas</title>
    <link rel="shortcut icon" href="../../../Assets/Logo_Kota_Batu,_Jawa_Timur_(Seal_of_Batu,_East_Java).svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/CSS/hover.css"/>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

      body {
        overflow-x: hidden; /* Mencegah scroll horizontal */
        font-family: "Poppins", sans-serif;
      }      
      .image-container {
        position: relative;
        width: 100%;
      }
       
      .image-container img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        filter: brightness(85%);
      }
      
      .text-overlay2 {
        position: absolute;
        top: 10px;
        left: 10px;
        color: white;
        padding: 2px;
      }
      
      .text-overlay2 h5 {
        font-size: 32px;
      }
      
      .text-overlay {
        position: absolute;
        bottom: 0;
        left: 150px;
        color: white;
        padding: 2px;
        font-size: 13px;
        text-align: right;
        margin: 0 10px 16px 0;
      }
      
      .btn-overlay {
        position: absolute;
        bottom: 14px;
        left: 22px;
        font-size: 12px;
      }
      
      .deskripsi-wisata {
        margin-top: 20px;
        font-size: 16px;
        line-height: 1.5;
        text-align: center;
        margin-bottom: 40px;
      }

      .mt-5 {
        overflow: hidden; /* Pastikan container tidak menampilkan konten yang tersembunyi */
        transform: translateY(100px);
        opacity: 0;
        transition: transform 0.5s ease-out, opacity 0.5s ease-out;
      }
      
      .mt-5.visible {
        transform: translateY(0);
        opacity: 1;
      }

      .content-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 20px;
        opacity: 0;
        /* Hilangkan transform yang menyebabkan pergeseran */
        transition: opacity 0.5s ease-out;
      }
      
      /* Hapus transformasi dari child even */
      .content-row:nth-child(even) {
        flex-direction: row-reverse;
      }
      
      .content-row img {
        flex: 1;
        max-width: 100%;
        border-radius: 12px;
      }
      
      .content-row .text-content {
        flex: 1;
        padding: 20px;
      }
      
      .content-row.visible {
        opacity: 1;
      }
      
      
      /* Gaya Kotak Tumpul */
      .rounded-box {
        background-color: #f8f9fa; /* Warna latar belakang kotak tumpul, bisa diubah sesuai kebutuhan */
        border-radius: 12px; /* Radius sudut kotak tumpul */
        padding: 20px; /* Jarak di dalam kotak tumpul */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan kotak tumpul */
      }

      /* Media Query untuk perangkat tablet dan lebih kecil */
      @media (max-width: 768px) {
        body {
        font-family: "Poppins", sans-serif;
        }

        .content-row {
          display: flex;
          flex-direction: row-reverse;
          align-items: center;
          margin-bottom: 20px;
          border: 1px solid #ddd;
          border-radius: 5px;
          overflow: hidden;
          background-color: white;
        }
        
        .content-row img {
          width: 100%;
          height: auto;
          display: block;
        }
        
        .text-content {
          padding: 15px;
          text-align: center;
        }               
        
        .content-row img {
          display: grid;
          place-items: center;
          flex: auto;
        }

        .content-row .text-content {
          flex: auto;
        }
      }

    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const containers = document.querySelectorAll('.mt-5');
        const contentRows = document.querySelectorAll('.content-row');
        let delay = 0;
      
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
              }, delay);
              delay += 200; // Penundaan 200ms antara setiap konten
            }
          });
        }, {
          threshold: 0.1 // Elemen dianggap visible jika 10% terlihat
        });
      
        containers.forEach(container => {
          observer.observe(container);
        });
      
        contentRows.forEach(row => {
          observer.observe(row);
        });
      });      
    </script>

    <header id="header">
      <div class="bg-light">
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
                      <a href="/" class="text-dark link-underline link-underline-opacity-0">
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
      </div>
    </header>

    <nav class="container mt-0" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ul class="breadcrumb py-1" >
          <li class="breadcrumb-item"><a href="/"><i class="bi bi-house text-primary"></i></a></li>
          <li class="breadcrumb-item">UMKM</li>
      </ul>
    </nav> 

    <div class="container mt-5">
      <h2 class="text-center" style="font-size: 34px; margin-bottom: 20px;">UMKM</h2>
      <h4 class="deskripsi-wisata" style="font-size: 22px; margin: auto;">Di Kelurahan Temas terdapat berbagai sektor UMKM, diantaranya
        pertanian dan peternakan, jasa yang beragam, perdagangan hasil pertanian, kuliner, bahan pokok, serta pakaian. </h4>
      
        <br><br>

      <div class="content-row rounded-box">
        <img src="Assets/Usaha Pertanian.png" alt="Pertanian" style="width: 0;"/>
        <div class="text-content">
          <h5>PERTANIAN</h5>
          <p>Pengunaan lahan di Kelurahan Temas sebagian besar sebagai area pertanian dan pemukiman penduduk, 
            sebagian yang lainnya terbagi sesuai penggunaannya seperti sawah, pekarangan, ladang, perkebunan, hutan, perikanan, pemukiman, dan lain-lain. 
            Lahan pertanian di wilayah perencanaan dibedakan menjadi lahan pertanian dengan irigasi teknis, semi teknis dan sederhana. 
            Lahan irigasi teknis merupakan lahan yang hanya boleh difungsikan sebagai lahan pertanian dan 
            sudah terdapat pengadaan pengairan pada lahan pertanian tersebut. </p>
        </div>
      </div>
      
      <br><br>

      <div class="content-row rounded-box">
        <img src="Assets/peternakan_temas.png" alt="Peternakan" style="width: 0;"/>
        <div class="text-content">
          <h5>PETERNAKAN</h5>
          <p>Sektor peternakan di Kelurahan Temas juga menjadi salah satu sektor unggulan selain sektor pertanian. 
            Jenis ternak besar maupun ternak kecil yang dikembangkan oleh penduduk diantaranya 
            ternak besar (sapi potong, sapi perah dan kambing) dan ternak kecil (domba, kelinci, ayam dan itik). 
            Potensi peternakan yang sedang dirintis penduduk Kelurahan Temas yakni ternak kambing dan kelinci. 
            Adapun pada ternak ayam di Kelurahan Temas lebih cenderung ke penggemukan hewan ternak untuk pemenuhan 
            kebutuhan komoditas daging ayam terutama pemenuhan kebutuhan di Pasar Besar Kota Batu.</p>
        </div> 
      </div>

      <br><br>

      <div class="content-row rounded-box">
        <img src="Assets/Usaha Jasa 2.jpg" alt="Jasa" style="width: 0;"/>
        <div class="text-content">
          <h5>JASA</h5>
          <p>Usaha Jasa juga merupakan salah satu penggerak sektor perekonomian penduduk Kelurahan Temas. 
            Usaha Jasa yang dikembangkan diantaranya Jasa Pertukangan, bengkel las, kaca/aluminium, 
            usaha percetakan/ advertising, kerajinan ukir dan Jasa Pengiriman Barang /Kurir Barang. 
            Pengembangan sektor Usaha Jasa  akan sangat membantu menyerap banyak tenaga kerja terutama 
            pemuda namun dibutuhkan perhatian khusus dari pemerintah Kota Batu dan pihak Swasta sehingga 
            sektor usaha jasa bisa betul-betul berkembang pesat dan menjadi pendukung perkembangan ekonomi Kepariwisataan, 
            khususnya masyarakat Kelurahan Temas dan warga sekitar Kelurahan Temas pada umumnya.</p>
        </div>        
      </div>
      
      <br><br>

      <div class="content-row rounded-box">
        <img src="Assets/Perdagangan & Industri.jpg" alt="Perdagangan dan Industri" style="width: 0;"/>
        <div class="text-content">
          <h5>PERDAGANGAN & INDUSTRI</h5>
          <p>Industri kecil di Kelurahan Temas mencakup berbagai UKM dan home industri, termasuk ecoprint yang menghasilkan kain, 
            udeng, tas, dan kaos khas Temas. Selain itu, ada juga kerajinan rajutan seperti tas, 
            gantungan kunci, sarung bantal, dan baju rajut. Produk olahan makanan dan minuman juga beragam, 
            meliputi camilan kering, krupuk, brambang goreng, kripik kentang dan tahu, pabrik tahu, serta jamu tradisional. 
            Perdagangan terpusat di Pasar Besar Kota Batu serta di kawasan sepanjang Jalan Patimura, Jalan Dewi Sartika, 
            dan sekitar Lokasi Wisata Jatim Park 1 dan Jatim Park 2, yang turut memberikan kontribusi positif terhadap 
            perekonomian masyarakat Kelurahan Temas dan sekitarnya.</p>
        </div>       
      </div>
    </div>

    <br>

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
