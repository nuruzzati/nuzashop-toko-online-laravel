

   <link href="{{ asset('style.css') }}" rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- font googgle -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk Kategori </title>
  </head>
  <body>
    <header>
      <a href="#" class="logo"><i class='bx bxs-t-shirt'></i>Nuza<span>shop</span></a>
      <ul class="navlist">
        <li><a href="/">Home</a></li>
        <li><a href="/">Featured</a></li>
        <li><a href="/">New</a></li>
        <li><a href="/">Contact</a></li>
      </ul>
  
      <div class="header-icons">
        <a href="keranjang.php"><i class='bx bx-shopping-bag'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
  
  <section class="new" id="new" style="text-transform: capitalize;">
      <div class="new">
          <div class="center-text">
              <!-- Output nama kategori di sini -->
              <h2>{{ $kategori->nama }}<span> collection</span></h2>
          </div>
  
          <div class="new-content">
            @foreach($produk as $p)
                  <div class="box">
                      <img width="90%" src="{{ asset('uploads/' .$p->foto_produk)}}" alt=""></a>
                      <h5>{{ $p->nama_produk }}</h5>
                      <h6>Rp{{ $p->harga_produk }}</h6>
                      <div class="sale">
                          <h4>Sale</h4>
                      </div>
                  </div>
             @endforeach
          </div>
      </div>
  </section>
  
    <section class="contact" id="contact">
          <div class="main-contact">
            <h3>Nuza</h3>
            <h5>Let's Connect With Us</h5>
            <div class="icons">
              <a href="#"><i class='bx bxl-instagram-alt'></i></a>
              <a href="#"><i class='bx bxl-whatsapp-square' ></i></a>
              <a href="#"><i class='bx bxl-facebook-square'></i></a>
            </div>
          </div>
          <div class="main-contact">
            <h3>Explore</h3>
              <li><a href="#home">Home</a></li>
              <li><a href="#featured">Featured</a></li>
              <li><a href="#new">New</a></li>
              <li><a href="#contact">Contact</a></li>
          </div>
  
          <div class="main-contact">
            <h3>Our Services</h3>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Free Shipping</a></li>
            <li><a href="#">Gift Cards</a></li>
          </div>
          <div class="main-contact">
            <h3>Shopping</h3>
            <li><a href="#">Clothing Store</a></li>
            <li><a href="#">Trending Shoes</a></li>
            <li><a href="#">Accesories</a></li>
            <li><a href="#">Sale</a></li>
          </div>
        </section>
  
  
  
  <script src="https://unpkg.com/scrollreveal"></script>
    <!-- javascript -->
  <script>
  const header = document.querySelector('header');
  
  window.addEventListener('scroll', function () {
    header.classList.toggle('sticky', window.scrollY > 0);
  });
  
  let menu = document.querySelector('#menu-icon');
  let navlist = document.querySelector('.navlist');
  
  menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
  }
  
  window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
  };
  
  const sr = ScrollReveal ({
    distance: '30px',
    duration:2600,
    reset:true
  })
  
  sr.reveal('.home-text',{delay:200, origin:'right'})
  // sr.reveal('.featured,.cta,.new,.brand,.contact',{delay:200, origin:'bottom'})
  </script>
    
  </body>
  </html>


