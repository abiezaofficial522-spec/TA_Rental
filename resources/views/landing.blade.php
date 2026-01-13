<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Rental Pacar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<nav class="navbar">
  <div class="logo">RentalPacar.id</div>
  <ul class="nav-menu">
    <li><a href="#hero">Home</a></li>
    <li><a href="#features">Katalog</a></li>
    <li><a href="#tentang">Tentang Kami</a></li>
    <li><a href="#review">Review</a></li>
    <li><a href="#kontak">Hubungi Kami</a></li>
  </ul>
</nav>

<body>
    
    <header id="hero">
        <div class="hero-content">
            <h1 id="typing-text"></h1>
            <h3>Kami hadir dengan jasa rental pacar profesional, sopan, dan terpercaya. Cocok untuk teman nongkrong, pendamping acara, atau sekadar ngobrol agar hari kamu lebih berwarna.</h3>
            <button id="cta-button">Explore Features</button>
        </div>
        <div class="hero-bg"></div>
    </header>

    <section id="features">
        <h2>Silahkan Dipilih</h2>
        <div class="features-container">
            <div class="feature-card">
              <a href="jule.php"></a>
                <img src="https://i.pinimg.com/736x/93/fe/73/93fe73024d5a05b683b18af71456f05f.jpg" alt="female" style="width: 70%";>
            <h3>Jule</h3>
            <p>Harga: Rp 100.000 / Hari</p>
            <p>Ayo ngedate bareng aku.</p>
            </div>
            <div class="feature-card">
                <img src="https://i.pinimg.com/736x/74/5e/2d/745e2d56039c63d9d18f910122d44675.jpg" alt="female" style="width: 100%";>
            <h3>Lucinta Luna</h3>
            <p>Harga: Rp 600.000 / Hari</p>
            <p>Ayo rasakan pengalaman yang indah bersamaku.</p>
            </div>
            <div class="feature-card">
                <img src="https://i.pinimg.com/736x/3d/b8/dd/3db8dd9e5a160214f63dbf7f44084d8c.jpg" alt="male" style="width: 70%";>
            <h3>Cecep Alexander</h3>
            <p>Harga: Rp 600.000 / Hari</p>
            <p>Ayo jalan-jalan barengku.</p>
            </div>
        </div>
    </section>
    
    <section id="tentang" class="section">
  <h2>Tentang Kami</h2>
  <p>
    RentalPacar.id adalah platform jasa rental pacar profesional untuk kebutuhan
    teman nongkrong, pendamping acara, atau sekadar ngobrol biar ga sendirian.
    Aman, sopan, dan nyaman.
  </p>
   </section>

    <section id="review" class="section">
        <div class="review-card">
            <h3>Karina Keisha</h3>
            <p class="stars">★★★★★</p>
            <p>"Jujur yaa, ini jasa ngebantu banget pls! vibes-nya dapet, orangnya asik, ga awkward. worth it parahhh!"</p>
        </div>
        <div class="review-card">
            <h3>Ronaldo M</h3>
            <p class="stars">★★★★☆</p>
            <p>"Overall oke banget sih, cuma sempet telat dikit, tapi sikapnya ramah dan profesional."</p>
        </div>
        <div class="review-card">
            <h3>Farisha K</h3>
            <p class="stars">★★★★★</p>
            <p>"BEST EXPERIENCE EVER!!! ga nyesel sama sekali, bakal repeat order lagi kalo butuh xixixi"</p>
        </div>
    </section>

    <section id="kontak" class="section">
  <h2>Hubungi Kami</h2>
     <p>📧 Email: rentalpacar@gmail.com</p>
     <p>📱 WhatsApp: 0862886389283</p>
     <p>📍 Instagram: RentalPacar.id</p>
    </section>
  
    <script src="{{ asset('js/rental.js') }}"></script>
    
    </div>
</body>
</html>