<!--Ahmad Hilmi Dwi Setiawan-->
<!--5026221147-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ets prep</title>
  <style>
    .body {
      margin: 0;
      padding: 0;
      background-color: white;
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100vw;
      font-family: "Montserrat", sans-serif;
    }
    .profil {
      position: absolute;
      top: 50%;
      width: 50px;
      height: 100px;
      ;
    }

    .full-height {
      min-height: 100vh;
    }

    .text-container p {
      text-align: justify;
      color: white;
    }

    /* Media Queries untuk tampilan lebih kecil */
    @media (max-width: 768px) {
      .text-container {
        text-align: center;
      }

      .container.full-height.d-flex {
        flex-direction: column;
      }

      img {
        margin-bottom: 20px;
      }

      h2 {
        font-size: 1.5rem;
      }
    }

    .textjudul {
      color: white;
      text-align: center;
    }

    /* CSS untuk efek fade-in */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* Navbar styling */
/* Navbar styling */
.navbar {
    margin: auto;
    color: #ffffff;
}

/* Default nav-link styling */
.navbar .nav-link {
    text-align: center;
    margin-left: 20px; /* Space between nav items */
    color: #ffffff !important; /* Default text color with !important */
    transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
}

/* Nav-link hover effect */
.navbar .nav-link:hover {
    color: #000000 !important; /* Force text color to black on hover */
    background-color: white !important; /* Ensure background change on hover */
    border-radius: 5px; /* Rounded corners */
}

/* Adjustments for mobile view */
@media (max-width: 576px) {
    .navbar .nav-link {
        margin-left: 10px; /* Reduced space for smaller screens */
    }
}

.timeline {
    position: relative;
    padding: 20px 0;
  }

  .timeline-item {
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }

  .timeline-item.show {
    opacity: 1;
    transform: translateY(0);
  }

  .timeline-year {
    position: absolute;
    left: 0;
    text-align: right;
    font-weight: bold;
    color: black;
  }

  .timeline-content {
    margin-left: 120px;
    padding: 20px;
    border-radius: 8px;
    color: #fff;
    background-color: rgb(17, 16, 16);
  }

  .timeline-content h4 {
    margin-bottom: 10px;
  }

  .timeline-content p {
    margin: 0;
    text-align: justify;
  }

  .card:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease-in-out;
  background-color: #1c1c1c;
}



  </style>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>

<body>
  <div class="container-fluid bg-dark">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid bg-dark">
          <a class="navbar-brand" href="#"><h1 style="margin: auto;"><span id="typed-output"></span></h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#tentang-saya">
                    Tentang Saya
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#skill">
                    Skill
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#experience">
                    Experience
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Projects
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactform">Contact form</a>
                </li>
              </ul>
            </div>
            </div>
        </nav>
      </div>
      <div class="mt-0 p-3 text-white" style="background-image: url(kebutuhan/backgroundprofil.jpg);">
        <div class="container text-center">
          <img src="kebutuhan/profilgambar.jpg" class="rounded-circle" alt="Profil" width="200" height="200">
          <h1 class="mt-3" style="font-style: italic;">Ahmad Hilmi Dwi Setiawan</h1>
          <div style="margin-top: 30px;">
            <i class="fa-solid fa-person-rays" style="font-size: 50px;"></i>
            <h3>"No one said it's fair"</h3>
          </div>
        </div>
      </div>


      <div id="tentang-saya" class="container-fluid bg-dark py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 text-center">
              <img class="fade-in img-fluid" src="kebutuhan/gambartentangsaya.jpg" alt="Tentang Saya" style="width: 300px;">
            </div>
            <div class="col-md-8 text-container">
              <h2 class="fade-in text-white text-center mb-4">ABOUT ME</h2>
              <p class="fade-in">
                Halo, perkenalkan nama saya Ahmad Hilmi Dwi Setiawan. Saat ini, saya sedang menempuh pendidikan di jurusan
                Sistem Informasi di Institut Teknologi Sepuluh Nopember (ITS). Saya tinggal di kota Mojokerto, sebuah kota
                yang menjadi tempat tinggal saya selama menjalani masa perkuliahan. Saya memiliki beberapa hobi yang sangat
                saya gemari, di antaranya adalah bermain futsal dan menonton pertandingan sepak bola. Dalam hal sepak bola,
                saya merupakan penggemar setia klub ternama asal Spanyol, FC Barcelona.
              </p>
              <p class="fade-in">
                Selain hobi, saya juga dikenal sebagai pribadi yang sangat antusias dalam hal belajar. Saya memiliki
                ketertarikan khusus terhadap dunia pemrograman dan selalu bersemangat untuk mempelajari hal-hal baru di
                bidang tersebut. Bagi saya, belajar bukan sekadar kewajiban, tetapi sebuah proses yang saya nikmati
                sepenuhnya demi mengasah kemampuan dan terus berkembang menjadi lebih baik di setiap kesempatan yang ada.
                Saya selalu berupaya untuk meningkatkan keterampilan dan pengetahuan, dengan tujuan mencapai prestasi yang
                lebih tinggi di masa depan.
              </p>
            </div>
          </div>
        </div>
      </div>


  <div id="skill" class="container-fluid"
    style="background-image: url(kebutuhan/backgroundskill.jpeg); background-size: cover; background-repeat: no-repeat;">
    <div class="container full-height d-flex justify-content-between align-items-center text-light"
      style="padding: 30px;">


      <div class="col-md-6 d-flex flex-column justify-content-center" style="margin-right: 30px;">
        <h2 class="text-center fade-in">SKILL</h2>
        <p class="fade-in" style="text-align: justify;">
          Berikut adalah skill yang saya miliki. Sebagai seorang mahasiswa Sistem Informasi di Institut Teknologi
          Sepuluh Nopember (ITS), saya telah mengembangkan berbagai keterampilan yang berkaitan dengan pemrograman,
          analisis sistem, dan teknologi informasi. Dengan antusiasme yang tinggi terhadap dunia teknologi, saya terus
          berupaya meningkatkan kemampuan teknis dan non-teknis saya untuk menjadi lebih baik dan siap menghadapi
          tantangan di industri teknologi.
        </p>

        <p>HTML</p>
        <div class="progress fade-in">
          <div class="progress-bar" style="width:100%">100%</div>
        </div><br>

        <p>CSS3</p>
        <div class="progress fade-in">
          <div class="progress-bar bg-success" style="width:95%">95%</div>
        </div><br>

        <p>XML</p>
        <div class="progress fade-in">
          <div class="progress-bar bg-info" style="width:50%">50%</div>
        </div><br>


        <p>SQL</p>
        <div class="progress fade-in">
          <div class="progress-bar bg-warning" style="width:85%">85%</div>
        </div><br>

        <p>Java</p>
        <div class="progress fade-in">
          <div class="progress-bar bg-danger" style="width:75%">75%</div>
        </div><br>
      </div>

      <div class="col-md-6 d-flex justify-content-end fade-in" style="margin-left: 20px;">
        <img src="kebutuhan/gambarskill.jpg" class="img-thumbnail"
          alt="Cinque Terre" width="500px">
      </div>

    </div>
  </div>


  <!--Experience-->
  <div id="experience" class="container-fluid" style="background-color: #ffffff;">
    <div class="container">
      <h2 class="text-center fade-in" style="color: #000000; padding: 40px;">EXPERIENCE</h2>
      <div class="timeline">
        <div class="timeline-item fade-in">
          <div class="timeline-year">2024</div>
          <div class="timeline-content">
            <h4 class="fade-in"><i class="fa-solid fa-people-group"></i> Badan Pengawas Kepengurusan</h4>
            <p class="fade-in">Pada tahun 2024, saya bergabung dengan organisasi BPK HMSI dan menjabat di departemen HRD. Dalam posisi ini, saya bertanggung jawab untuk mengawasi kepengurusan HMSI, memastikan bahwa semua kegiatan dan program yang dijalankan sesuai dengan tujuan organisasi. Pengalaman ini memungkinkan saya untuk mengembangkan keterampilan kepemimpinan, manajemen sumber daya manusia, dan kolaborasi dengan berbagai pihak dalam organisasi.</p>
          </div>
        </div>

        <div class="timeline-item fade-in">
          <div class="timeline-year">2023</div>
          <div class="timeline-content">
            <h4 class="fade-in"><i class="fa-solid fa-people-group"></i> Information System Expo 2023</h4>
            <p class="fade-in">Pada tahun 2023, saya menjadi anggota panitia Information System Expo 2023 di divisi kamzin. Dalam peran ini, saya bertanggung jawab untuk mengelola peminjaman ruangan dan barang, termasuk peralatan yang diperlukan oleh peserta dan pembicara. Saya juga bekerja sama dengan tim keamanan untuk memastikan keselamatan dan kenyamanan semua peserta selama acara berlangsung. Pengalaman ini sangat berharga karena memberi saya wawasan tentang manajemen acara, kerja tim, dan pentingnya koordinasi dalam menjalankan tugas yang kompleks.</p>
          </div>
        </div>

        <div class="timeline-item fade-in">
          <div class="timeline-year">2023</div>
          <div class="timeline-content">
            <h4 class="fade-in"><i class="fa-solid fa-people-group"></i> Basic Media Schooling</h4>
            <p class="fade-in">Saya juga pernah mengikuti Basic Media Schooling, sebuah program pelatihan yang bertujuan untuk membekali peserta dengan keterampilan dasar dalam bidang media. Di sana, saya mempelajari berbagai aspek terkait produksi media, mulai dari teknik dasar fotografi, videografi, hingga editing konten. Program ini juga mencakup pemahaman tentang manajemen media sosial dan cara mengoptimalkan platform digital untuk menyampaikan pesan dengan efektif. Melalui pelatihan ini, saya memperoleh wawasan tentang bagaimana media berperan dalam membentuk opini publik dan bagaimana memanfaatkan alat-alat teknologi untuk berkomunikasi secara kreatif. Pengalaman ini sangat membantu dalam meningkatkan keterampilan teknis saya dalam bidang media dan memperluas perspektif saya tentang strategi komunikasi digital.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="projects" class="container-fluid bg-dark py-5">
    <div class="container">
      <h2 class="text-center text-light mb-4">PROJECTS</h2>
      <div class="row">

        <!-- Project 1 -->
        <div class="col-md-4 mb-4">
          <div class="card bg-dark text-light border-light" style="height: 610px;">
            <img src="kebutuhan/proyekassigne.png" class="card-img-top img-fluid" alt="Project 1" style="height: 250px;">
            <div class="card-body">
              <h5 class="card-title text-center">Assignee</h5>
              <p class="card-text" style="text-align: justify;">Saya telah menyelesaikan proyek pengembangan aplikasi **Assignee**, yang dirancang khusus untuk memenuhi kebutuhan pelajar. Aplikasi ini menyediakan fitur-fitur yang lebih mudah dipahami dan digunakan, dengan fokus utama pada kesederhanaan dan kemudahan akses bagi para pelajar. Aplikasi Assignee menghindari fitur yang terlalu beragam, yang dapat membingungkan pengguna, dan sebaliknya memberikan alat-alat produktivitas yang relevan dengan kebutuhan belajar sehari-hari.</p>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="col-md-4 mb-4">
          <div class="card bg-dark text-light border-light" style="height: 610px;">
            <img src="kebutuhan/projectbpmn.png" class="card-img-top img-fluid" alt="Project 2" style="height: 250px;">
            <div class="card-body">
              <h5 class="card-title text-center"> Diagram BPMN Pendaftaran Bionix</h5>
              <p class="card-text" style="text-align: justify;">Saya telah membuat BPMN diagram untuk proses Pendaftaran Bionix, yang bertujuan untuk memetakan setiap tahapan yang terlibat dalam registrasi peserta secara detail. Diagram ini mencakup alur mulai dari pendaftaran awal hingga validasi, konfirmasi, dan penerimaan peserta. Melalui BPMN, proses pendaftaran dapat divisualisasikan dengan lebih jelas dan sistematis, memudahkan analisis dan optimasi untuk memastikan setiap langkah berjalan efisien dan sesuai prosedur yang ditetapkan. Diagram ini juga membantu memastikan koordinasi yang lebih baik antar tim dalam pelaksanaan pendaftaran.</p>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="col-md-4 mb-4">
          <div class="card bg-dark text-light border-light" style="height: 610px;">
            <img src="kebutuhan/proyekguidofiks.png" class="card-img-top img-fluid" alt="Project 3" style="height: 250px;">
            <div class="card-body">
              <h5 class="card-title text-center">GuidoFiks</h5>
              <p class="card-text" style="text-align: justify;">Saya memiliki proyek pengembangan UI untuk aplikasi Guidofiks yang berfokus pada menciptakan antarmuka yang intuitif dan ramah pengguna. Proyek ini bertujuan untuk memudahkan pengguna dalam mengakses dan memahami data sensor serta kode kesalahan dari kendaraan. Dengan antarmuka yang jelas dan informatif, pengguna dapat dengan mudah memantau kondisi kendaraan dan mendapatkan informasi mengenai potensi masalah serta solusi perbaikannya.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--Contact Form-->
  <div id="contactform" class="container-fluid py-5" style="background-color: #000000;">
    <div class="container">
      <h2 class="text-center text-light mb-4">CONTACT FORM</h2>
      <form id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="name" class="form-label text-light">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Isi namamu" required>
            <div id="nameError" class="text-danger"></div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label text-light">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Isi email kamu" required>
            <div id="emailError" class="text-danger"></div>
          </div>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label text-light">Pesan</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Isi pesanmu" required></textarea>
          <div id="messageError" class="text-danger"></div>
        </div>
        <button type="submit" class="btn btn-light">Kirim Pesan</button>
      </form>
    </div>
  </div>


<div class="container my-5">
    <h2 class="text-center">Pertemuan 1-7</h2>
    <div class="text-center my-4">
      <a href="{{url('hello')}}" class="btn btn-dark m-2 text-white">Hello</a>
      <a href="{{url('style')}}" class="btn btn-dark m-2 text-white">Style</a>
      <a href="{{url('style2')}}" class="btn btn-dark m-2 text-white">Style 2</a>
      <a href="{{url('responsive1')}}" class="btn btn-dark m-2 text-white">Responsive</a>
      <a href="{{url('form')}}" class="btn btn-dark m-2 text-white">form</a>
      <a href="{{url('tugas1')}}" class="btn btn-dark m-2 text-white">Linktree</a>
      <a href="{{url('5026221147')}}" class="btn btn-dark m-2 text-white">Our testimoni</a>
    </div>
  </div>


  <div class="container-fluid bg-dark py-5">
    <div class="container text-center">
      <h2 class="text-light mb-4">Connect with Me</h2>
      <div class="social-links">
        <a href="https://www.instagram.com/ahilmi_9/" class="text-light me-4" target="_blank">
          <i class="fab fa-instagram fa-2x"></i>@ahilmi_9
        </a>
        <a href="https://www.linkedin.com/in/yourusername" class="text-light me-4" target="_blank">
          <i class="fab fa-linkedin fa-2x"></i>Ahmad Hilmi Dwi Setiawan
        </a>
      </div>
      <p class="text-dark mt-3">Email: hilmiahmad930@gmail.com</p>
    </div>
  </div>




  <script>


    var typed = new Typed('#typed-output', {
      strings: ["Welcome!!!"],
      typeSpeed: 100,
      backSpeed: 30,
      loop: true
    });


  function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();

  const topVisible = rect.top <= (window.innerHeight || document.documentElement.clientHeight) && rect.top >= 0;
  const bottomVisible = rect.bottom >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);

  // Cek apakah bagian atas atau bawah elemen sudah terlihat
  return topVisible || bottomVisible;
}


    // Fungsi untuk menambahkan kelas "show" saat elemen terlihat
    function checkVisibility() {
      const fadeElements = document.querySelectorAll('.fade-in');

      fadeElements.forEach((el) => {
        if (isElementInViewport(el)) {
          el.classList.add('show');
        } else {
          el.classList.remove('show');
        }

      });
    }

    // Jalankan checkVisibility saat halaman di-scroll atau di-resize
    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    // Jalankan sekali ketika halaman dimuat
    window.addEventListener('load', checkVisibility);

    document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form from submitting

    // Clear previous error messages
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("messageError").textContent = "";

    let isValid = true;

    // Validate Name
    const name = document.getElementById("name").value.trim();
    if (name === "") {
      document.getElementById("nameError").textContent = "Isi kolom namamu.";
      isValid = false;
    }

    // Validate Email
    const email = document.getElementById("email").value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      document.getElementById("emailError").textContent = "Isi alamat email yang valid.";
      isValid = false;
    }

    // Validate Message
    const message = document.getElementById("message").value.trim();
    if (message === "") {
      document.getElementById("messageError").textContent = "Isi pesanmu.";
      isValid = false;
    }


    if (isValid) {
      alert("Pesan berhasil dikirim!");
      document.getElementById("contactForm").reset();
    }
  });

  </script>
</body>

</html>
