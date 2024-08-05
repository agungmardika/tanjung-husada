<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Klinik Tabalong Husada</title>
  <link rel="shortcut icon" href="../dist/img/logo.jpeg" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./output.css" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
  <style>
    .hero {
      background-image: url("../dist/img/image.png");
      background-size: cover;
      background-position: center;
      color: #ffffff;
    }

    .modal {
      display: none;
    }

    .modal.active {
      display: flex;
    }

    .modal .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: none;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .modal-content {
      width: 100%;
      max-width: 500px;
      margin: auto;
      padding: 1rem;
      box-sizing: border-box;
    }

    @media (min-width: 769px) {
      .modal-content {
        max-width: 600px;
      }
    }
  </style>
</head>

<body class="bg-gray-100 font-body">
  <!-- Navbar -->
  <nav class="bg-[#16365d] text-white py-3 shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <img src="../dist/img/logo.jpeg" alt="Logo" class="h-20" />
        <div class="text-white uppercase">
          <h1 class="text-3xl font-bold leading-tight">Klinik</h1>
          <h1 class="text-2xl font-bold leading-tight">Tabalong Husada</h1>
        </div>
      </div>
      <ul class="hidden md:flex space-x-6">
        <li>
          <a href="" class="hover:text-[#6f8e30] transition duration-300">Beranda</a>
        </li>
        <li>
          <a href="#layanan-kami" class="hover:text-[#6f8e30] transition duration-300">Layanan Kami</a>
        </li>
        <li>
          <a href="#pendaftaran" class="hover:text-[#6f8e30] transition duration-300">Pendaftaran Online</a>
        </li>
        <li>
          <a href="#hubungi-kami" class="hover:text-[#6f8e30] transition duration-300">Kontak Kami</a>
        </li>

        <li>
          <a href="#tentang-kami" class="hover:text-[#6f8e30] transition duration-300">Tentang Kami</a>
        </li>
      </ul>
      <div class="md:hidden">
        <button id="menu-btn" class="text-black focus:outline-none">
          Menu
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero h-[630px] flex items-center justify-center text-center bg-black bg-opacity-50">
    <div class="p-6 rounded-lg bg-black bg-opacity-50">
      <h2 class="text-3xl md:text-5xl font-bold mb-4">
        Klinik Tabalong Husada
      </h2>
      <p class="text-lg md:text-xl">Pelayanan Kesehatan Terbaik Untuk Anda</p>
    </div>
  </header>
  <div class="group fixed bottom-0 right-0 p-2 flex items-end justify-end w-24 h-24 mr-24 mb-20">
    <div class="text-white flex items-center justify-center p-3 absolute w-32 h-32 rounded-full">
      <a href="whatsapp://phone=628134686 4988">
        <img
          src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
          alt="" class="w-24 h-24 rounded-full"> <!-- Ubah ukuran di sini -->
      </a>
    </div>
  </div>


  <section class="bg-white" id="layanan-kami">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
        Layanan Kami
      </h2>
      <p class="text-gray-500 sm:text-xl text-center">
        Berikut adalah layanan yang kami sediakan di Klinik Tabalong Husada.
      </p>

      <div class="space-y-12">

        <div class="flex justify-center">
          <!-- Layanan 1 -->
          <div class="flex flex-col md:flex-row items-center justify-center md:space-x-8 space-y-4 md:space-y-0 mt-5">
            <div class="flex-shrink-0 order-1 md:order-1 ">
              <img src="../dist/img/dokterumum.jpg" alt="dokter umum"
                class="w-full h-48 md:h-72 object-cover mr-10 rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left md:max-w-lg order-2 md:order-2">
              <h3 class="mb-2 text-2xl font-bold text-gray-900">Dokter Umum</h3>
              <p class="text-gray-500">
                Pelayanan dokter umum untuk berbagai keluhan kesehatan.
              </p>
            </div>
          </div>

          <!-- Layanan 2 -->
          <div class="flex flex-col md:flex-row items-center justify-center md:space-x-8 space-y-4 md:space-y-0 mt-5">
            <div class="flex-shrink-0 order-2 md:order-1">
              <img src="../dist/img/gigi1.jpeg" alt="dokter umum"
                class="w-full h-48 md:h-72 object-cover rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left md:max-w-lg order-1 md:order-2">
              <h3 class="mb-2 text-2xl font-bold text-gray-900">Dokter Gigi</h3>
              <p class="text-gray-500">
                Pelayanan kesehatan gigi dan mulut dari dokter gigi berpengalaman.
              </p>

            </div>
          </div>
        </div>
        <div class="flex justify-center">

          <!-- Layanan 3 -->
          <div class="flex flex-col md:flex-row items-center justify-center md:space-x-8 space-y-4 md:space-y-0 mt-5">
            <div class="flex-shrink-0 order-1 md:order-1">
              <img src="../dist/img/doc1.png" alt="Rontgen"
                class="w-full h-48 md:h-72 object-cover rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left md:max-w-lg order-2 md:order-2">
              <h3 class="mb-2 text-2xl font-bold text-gray-900">Rontgen</h3>
              <p class="text-gray-500">
                Layanan radiologi untuk membantu diagnosis medis melalui gambar rontgen.
              </p>
            </div>
          </div>

          <!-- Layanan 4 -->
          <div class="flex flex-col md:flex-row items-center justify-center md:space-x-8 space-y-4 md:space-y-0 mt-5">
            <div class="flex-shrink-0 order-2 md:order-1">
              <img src="../dist/img/doc2.jpeg" alt="Medical Check Up"
                class="w-full h-48 md:h-72 object-cover rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left md:max-w-lg order-1 md:order-2">
              <h3 class="mb-2 text-2xl font-bold text-gray-900">Medical Check Up</h3>
              <p class="text-gray-500">
                Pemeriksaan kesehatan menyeluruh untuk memastikan kondisi kesehatan Anda.
              </p>

            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <!-- Layanan 5 -->
          <div class="flex flex-col md:flex-row items-center justify-center md:space-x-8 space-y-4 md:space-y-0 mt-5">
            <div class="flex-shrink-0 order-1 md:order-1">
              <img src="../dist/img/lab1.jpg" alt="Laboratorium"
                class="w-full h-48 md:h-72 object-cover rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left md:max-w-lg order-2 md:order-2">
              <h3 class="mb-2 text-2xl font-bold text-gray-900">Laboratorium</h3>
              <p class="text-gray-500">
                Layanan laboratorium untuk pemeriksaan darah, urin, dan sampel lainnya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Dokter Section -->
  <section class="bg-white" id="tim-kami">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Tim Kami</h2>
        <p class="font-light text-gray-500 lg:mb-16 sm:text-xl">Temui tim kami yang berdedikasi dan profesional
          dalam bidangnya masing-masing.</p>
      </div>
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
        <div class="items-center bg-gray-50 rounded-lg shadow-lg sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Dr. Heldina Sofia</a>
            </h3>
            <span class="text-gray-500">Pemilik</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Dr. Heldina Sofia adalah pemilik dan kepala medis,
              yang mengawasi semua operasi dan memastikan kualitas perawatan yang terbaik.</p>
          </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow-lg sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Dr. H. Hari Oktavian MM, Sp. PK</a>
            </h3>
            <span class="text-gray-500">Spesialis Medis</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Dr. H. Hari Oktavian adalah seorang spesialis
              medis yang terkenal dengan pengalaman luas di bidangnya, memberikan perawatan medis terbaik.
            </p>
          </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow-lg sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Drg. Agung Budiarto</a>
            </h3>
            <span class="text-gray-500">Dokter Gigi</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Drg. Agung Budiarto mengkhususkan diri dalam
              perawatan gigi, berkomitmen untuk meningkatkan kesehatan mulut dan kepuasan pasien.</p>
          </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow-lg sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Dr. Yusriza Febri Ramadhan</a>
            </h3>
            <span class="text-gray-500">Dokter Umum</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Dr. Yusriza Febri Ramadhan adalah dokter umum yang
              menyediakan layanan medis komprehensif dan perawatan pasien.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pendaftaran Online Section -->
  <section id="pendaftaran" class="p-6 bg-white">
    <div class="container mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold mb-6">Pendaftaran Online</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 border rounded-lg hover:bg-gray-100 transition duration-300">
          <h3 class="text-xl font-semibold mb-2">Pasien Umum</h3>
          <p>Daftarkan diri Anda sebagai pasien umum secara online.</p>
          <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded" onclick="openModal('modalUmum')">
            Daftar Pasien Umum
          </button>
        </div>
        <div class="p-6 border rounded-lg hover:bg-gray-100 transition duration-300">
          <h3 class="text-xl font-semibold mb-2">Medical Check Up (MCU)</h3>
          <p>Daftarkan diri Anda untuk Medical Check Up (MCU) secara online.</p>
          <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded" onclick="openModal('modalMCU')">
            Daftar Medical Check Up
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- hubungi-kami & Hours Section -->
  <section id="hubungi-kami " class="p-6 bg-white">
    <div class="container mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center">
        Kontak & Jam Layanan
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- hubungi-kami Information -->
        <div class="bg-[#f8f9fa] p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4">Kontak Kami</h3>
          <p class="mb-2">
            <span class="font-bold">No HP:</span> 0813-4686-4988
          </p>
          <p class="mb-2">
            <span class="font-bold">Email:</span>
            <a href="mailto:info@klinik-tabalonghusada.com"
              class="text-[#6f8e30] hover:underline">info@klinik-tabalonghusada.com</a>
          </p>
          <p>
            <span class="font-bold">Alamat:</span> Jalan Ir. PHM Noor RT.01
            No. 71 Kota Tanjung Kabupaten Tabalong
          </p>
        </div>
        <!-- Hours of Operation -->
        <div class="bg-[#f8f9fa] p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4">Jam Layanan</h3>
          <p class="mb-2"><span class="font-bold">Senin s/d Jumat:</span></p>
          <p>Pagi 08.00 – 12.00</p>
          <p>Sore 16.00 – 21.00</p>
          <p class="mt-4"><span class="font-bold">Sabtu:</span></p>
          <p>Pagi 08.00 – 12.00</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white" id="tentang-kami">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="font-light text-gray-500 sm:text-lg">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
          Tentang Kami
        </h2>
        <p class="mb-4 text-justify">
          Klinik Tabalong Husada didirikan pada tanggal 1 Januari 2000 dan
          berlokasi di Jalan Ir. PHM Noor RT.01 No. 71 Kota Tanjung, Kabupaten
          Tabalong. Klinik kami terletak di pusat kota yang strategis dengan
          akses mudah dijangkau. Kami menyediakan layanan kesehatan
          berkualitas untuk memudahkan warga Kabupaten Tabalong.
        </p>
      </div>
      <img class="w-full rounded-lg mt-5" src="../dist/img/team.png" alt="team picture" />
    </div>
  </section>

  <!-- Visi dan Misi Section -->
  <section class="bg-white" id="vision-mission">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg">
        <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 text-center">
          Visi & Misi Kami
        </h2>
        <h3 class="mb-4 text-3xl tracking-tight font-bold text-gray-900">
          Visi
        </h3>
        <p class="mb-4 font-light">
          Menjadikan Klinik Utama yang memberikan pelayanan profesional dan
          berkualitas yang terjangkau bagi masyarakat.
        </p>
        <h3 class="mb-4 text-3xl tracking-tight font-bold text-gray-900">
          Misi
        </h3>
        <ul class="mb-4 font-light list-disc pl-5">
          <li>
            Pengelolaan klinik secara profesional untuk efisiensi dan
            efektivitas tinggi.
          </li>
          <li>
            Pelayanan dasar dan spesialistik yang profesional dan terjangkau.
          </li>
          <li>Upaya berkelanjutan untuk meningkatkan mutu pelayanan.</li>
          <li>
            Partisipasi dalam pelayanan sosial untuk masyarakat miskin dan
            sekitar klinik.
          </li>
          <li>
            Pelayanan kesehatan perorangan dan sosial bagi masyarakat miskin.
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="mb-10 bg-white">
    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 text-center">
      Kunjungi Kami
    </h2>
    <div class="flex justify-center mx-4 md:mx-12">

      <div class="w-full max-w-screen-lg">

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3986.9500001932824!2d115.3946782!3d-2.1727057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfab3937f0417d3%3A0x8540ad920867532d!2sKlinik%20Tabalong%20Husada!5e0!3m2!1sid!2sid!4v1722776455797!5m2!1sid!2sid"
          class="w-full h-64 md:h-96" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <footer class="bg-[#16365d] text-white py-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h4 class="text-xl font-bold mb-4">Tentang Klinik</h4>
          <p>
            Klinik Tabalong Husada berkomitmen untuk memberikan pelayanan
            kesehatan yang profesional dan berkualitas.
          </p>
        </div>
        <div>
          <h4 class="text-xl font-bold mb-4">Link Cepat</h4>
          <ul>
            <li>
              <a href="" class="hover:text-[#6f8e30] transition duration-300">Beranda</a>
            </li>
            <li>
              <a href="#layanan-kami" class="hover:text-[#6f8e30] transition duration-300">Layanan Kami</a>
            </li>
            <li>
              <a href="#tim-kami" class="hover:text-[#6f8e30] transition duration-300">Dokter</a>
            </li>
            <li>
              <a href="#pendaftaran" class="hover:text-[#6f8e30] transition duration-300">Pendaftaran Online</a>
            </li>
            <li>
              <a href="#hubungi-kami" class="hover:text-[#6f8e30] transition duration-300">Kontak Kami</a>
            </li>
            <li>
              <a href="#tentang-kami" class="hover:text-[#6f8e30] transition duration-300">Tentang Kami</a>
            </li>
            <li>
              <a href="#vision-mission" class="hover:text-[#6f8e30] transition duration-300">Visi & Misi</a>
            </li>
          </ul>
        </div>
        <!-- hubungi-kami Information -->
        <div>
          <h4 class="text-xl font-bold mb-4">Kontak Kami</h4>
          <p>No HP: 0813-4686-4988</p>
          <p>
            Email:
            <a href="mailto:info@klinik-tabalonghusada.com"
              class="hover:text-[#6f8e30] transition duration-300">info@klinik-tabalonghusada.com</a>
          </p>
          <p>
            Alamat: Jalan Ir. PHM Noor RT.01 No. 71 Kota Tanjung Kabupaten
            Tabalong
          </p>
        </div>
      </div>
      <div class="mt-8 border-t border-gray-700 pt-4 text-center">
        <p>&copy; 2024 Klinik Tabalong Husada. All rights reserved.</p>
        <div class="mt-2 flex justify-center space-x-4">
          <a href="#" class="text-white hover:text-[#6f8e30] transition duration-300">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-white hover:text-[#6f8e30] transition duration-300">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-white hover:text-[#6f8e30] transition duration-300">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <div id="modalUmum" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div
      class="modal-content bg-white p-6 rounded-lg shadow-lg relative w-full max-w-2xl h-auto max-h-full mx-4 overflow-y-auto">
      <button class="close-btn">&times;</button>
      <h2 class="text-xl font-bold mb-4">Form Pendaftaran Pasien Umum</h2>
      <form action="pendaftaran_umum.php" method="POST">
        <div class="mb-4">
          <label class="block mb-2">Nama</label>
          <input type="text" name="nama" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Nama Orang Tua</label>
          <input type="text" name="nama_orang_tua" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">NIK</label>
          <input type="text" name="nik" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="w-full p-2 border rounded" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Alamat</label>
          <textarea name="alamat" class="w-full p-2 border rounded" required></textarea>
        </div>
        <div class="mb-4">
          <label class="block mb-2">No. Telepon</label>
          <input type="text" name="no_telepon" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Perusahaan</label>
          <input type="text" name="perusahaan" class="w-full p-2 border rounded" required>
        </div>
        <div class="flex justify-end">
          <button type="button" class="mr-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600"
            onclick="closeModal('modalUmum')">Batal</button>
          <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Daftar</button>
        </div>
      </form>
    </div>
  </div>
  <div id="modalMCU" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div
      class="modal-content bg-white p-6 rounded-lg shadow-lg relative w-full max-w-2xl h-auto max-h-full mx-4 overflow-y-auto">
      <button class="close-btn">&times;</button>
      <h2 class="text-xl font-bold mb-4">Form Pendaftaran Medical Check Up (MCU)</h2>
      <form action="pendaftaran_mcu.php" method="POST">
        <div class="mb-4">
          <label class="block mb-2">Nama</label>
          <input type="text" name="nama" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">NIK</label>
          <input type="text" name="nik" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="w-full p-2 border rounded" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Umur</label>
          <input type="number" name="umur" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Alamat</label>
          <textarea name="alamat" class="w-full p-2 border rounded" required></textarea>
        </div>
        <div class="mb-4">
          <label class="block mb-2">Telepon</label>
          <input type="text" name="telepon" class="w-full p-2 border rounded" required>
        </div>
        <div class="flex justify-end">
          <button type="button" class="mr-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600"
            onclick="closeModal('modalMCU')">Batal</button>
          <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Daftar</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

  <script>
    document.getElementById("menu-btn").addEventListener("click", () => {
      const menu = document.querySelector("nav ul");
      menu.classList.toggle("hidden");
    });

    function openModal(modalId) {
      document.getElementById(modalId).classList.add('active');
    }

    function closeModal(modalId) {
      document.getElementById(modalId).classList.remove('active');
    }

    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.close-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          const modal = e.target.closest('.modal');
          modal.classList.remove('active');
        });
      });

      window.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal')) {
          e.target.classList.remove('active');
        }
      });
    });

  </script>
</body>

</html>