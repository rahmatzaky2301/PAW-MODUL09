<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rahmat Zaky Widiyanto – Web Personal</title>
  <meta name="description" content="Halaman personal Rahmat Zaky Widiyanto: tentang saya, proyek, dan kontak.">
  <link rel="stylesheet" href="style.css">
  @vite('resources/sass/app.scss')
</head>
<body>

  <header class="nav">
    <a class="logo" href="#beranda">Rahmat Zaky Widiyanto</a>
    <nav aria-label="Navigasi utama">
      <a href="#tentang">Tentang</a>
      <a href="#proyek">Proyek</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  <main>
    <section id="beranda" class="hero">
      <p class="hero-intro">Halo, saya</p>
      <h1>Rahmat Zaky Widiyanto</h1>
      <p class="hero-desc">Saya seorang Mahasiswa Sistem Informasi. Saya suka membuat hal-hal yang sederhana dan rapi .</p>
      <a class="btn" href="#kontak">Hubungi saya</a>
    </section>

    <section id="tentang" class="section">
      <h2>Tentang saya</h2>
      <p>Halo aku zaky, Aku suka olahrga terutama basket dan lari </p>
      <ul class="skills">
        <li>HTML &amp; CSS</li>
        <li>Desain</li>
        <li>Menulis</li>
        <li>Fotografi</li>
      </ul>
    </section>

    <section id="proyek" class="section">
      <h2>Proyek</h2>
      <div class="projects">
        <article class="project">
          <h3>Proyek Pertama</h3>
          <p>Deskripsi singkat tentang proyek ini dan peran kamu di dalamnya.</p>
          <a href="#">Lihat proyek</a>
        </article>
        <article class="project">
          <h3>Proyek Kedua</h3>
          <p>Jelaskan masalah yang diselesaikan dan hasil yang dicapai.</p>
          <a href="#">Lihat proyek</a>
        </article>
        <article class="project">
          <h3>Proyek Ketiga</h3>
          <p>Tambahkan tautan ke demo atau repositori kode jika ada.</p>
          <a href="#">Lihat proyek</a>
        </article>
      </div>
    </section>

    <section id="kontak" class="section">
      <h2>Kontak</h2>
      <p>Punya pertanyaan atau ingin bekerja sama? Kirim pesan lewat:</p>
      <p class="contact-links">
        <a href="mailto:email@contoh.com">email: rahmatzaky2310@gmail.com</a>
        <a href="https://instagram.com/" target="_blank" rel="noopener">instagram:rhmtza4ky </a>
        <a href="https://github.com/" target="_blank" rel="noopener">Github:Rahmatzaky</a>
      </p>
    </section>
  </main>

  <footer class="footer">
    <p>&copy; 2026 Rahmat Zaky Widiyanto</p>
  </footer>

  @vite('resources/js/app.js')
</body>
</html>
