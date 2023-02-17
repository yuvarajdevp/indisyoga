
<!doctype html>
<html lang="en">

<head>
  <title>IndisYoga</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./images/image-removebg-preview (24) 1.png" sizes="96x96">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./media.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
 
<!-- Add the slick-theme.css if you want default styling -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>
  <header class="text-center mt-3 mt-md-3 mb-md-3 position-relative">
    <img src="./images/image-removebg-preview (24) 1.png" alt="">
    <div class=" blur-2 position-absolute top-0 end-0">
      <img src="./images/Group (6).png" alt="">
    </div>
  </header>
  <main>
    <div class="container mb-4 mt-md-5 hiding">

      <div class="row">

        <div class=" col-12 col-md-6">
          <h1 class="yoga-control text-center">Yoga Can Control <br>Whats Going Inside</h1>
          <p class="yoga-content text-center">A good day Need A good start</p>
          <!-- <img src="./images/women-doing-yoga 1.png" class="img-fluid" alt="">  -->
          <lottie-player src="./women-doing-yoga.json" speed="1" style="width: 100%; height: 455px; margin: auto;" loop
            autoplay>
          </lottie-player>
        </div>
        <div class="col-12 col-md-6  ps-md-5 pe-md-5 position-relative">
          <div class="form-contain ">
            <h1 class=" bookcls text-center pt-3">Book Your Class </h1>
            <form class="form" action="./contact.php" method="post" autocomplete="off">       
              <div class="pt-1">
                <label for="fname" class="form-label">Name</label>
               
                <input type="text" name="user_name" class="form-control shadow-none" id="fname">
              </div>
              <div>
                <label for="numb" class="form-label">Mobile Number</label>
                <input type="numb" class="form-control shadow-none" id="numb" name="user_numb" required>
              </div>
              <div>
                <label for="fdate" class="form-label">Date</label>
                <input type="date" name="user_date" class="form-control shadow-none" id="fdate">
              </div>
                
            
               <div>
                <label for="user_time" class="form-label">Time</label>
             
              </div>
             <div class="container ">
                <ul class="ks-cboxtags  text-center text-md-left">
                  <li><input type="checkbox" class="" id="checkboxOne" name="time[]" value="6.00 Am to 7.00 Am" ><label for="checkboxOne">6.00 Am to 7.00 Am</label></li>
                  <li><input type="checkbox" id="checkboxTwo" name="time[]" value="7.00 Am to 8.00 Am" ><label for="checkboxTwo">7.00 Am to 8.00 Am</label></li>
                  <li><input type="checkbox" id="checkboxFour" name="time[]" value="10.30 Am to 11.30 Am"><label for="checkboxFour">10.30 Am to 11.30 Am</label></li>
                  <li><input type="checkbox" id="checkboxThree"name="time[]"  value="6.00 Pm to 7.00 Pm" ><label for="checkboxThree">6.00 Pm to 7.00 Pm</label></li>

                </ul>
                             
         
              
              </div> 
            
              <div>
                <label for="fname" class="form-label">Select your Classes</label><br>
                <select   name="typeclass" id="typeclass" class="form-label border-0 shadow-none" required="true">  

                  <option class="form-label d-none shadow-none"  value = ""  > Rehab Yoga
                  </option>  
                  <option value="Rehab Yoga">Rehab Yoga</option>
                  <option value="Beginners">Beginners</option>
                  <option value="intermediate">intermediate</option>
                  <option value="Prenatal Yoga">Prenatal Yoga</option>
                
                  </select>  
               
              
                
             
              </div>
              <div class=" text-center m-md-3 mt-3 mb-3 pb-2">
        
                <button type="submit" name="" class="form-btn text-center">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid position-relative mt-md-5 ">
      <div class="blur-2 position-absolute top-0 start-0 ">
        <img src="./images/Group (5).png" alt="">
      </div>
      <div class=" container-fluid mt-md-5  ">
        <div class="row">




          <div class=" col-12 col-md-5 text-md-end " data-aos="fade-right" 
          data-aos-duration="2000">


            <img src="./images/Mask group (6).jpg" class="img-fluid " alt="">

          </div>
          <div class="col-12 col-md-7 mt-4 ps-md-5">
            <h1 class="about-content"  data-aos="fade-up" 
            data-aos-duration="1300">About</h1>
            <h2 class="about-content2 "  data-aos="fade-up" 
            data-aos-duration="1500">The Indis Yoga</h2>
            <p class="about-desc "  data-aos="fade-up" 
            data-aos-duration="2000">Indis Yoga is online yoga designed for real people—whether you’re a busy mom in need
              of a quick morning energy boost, or a traveler looking to relax with a yoga nidra before sleep. Work up a
              sweat with an advanced vinyasa flow, or brush up on the basics in our accessible beginner classes.
              Whatever your level of experience, life stage, and aspirations—from prenatal strength to mid-workday
              calm—we’ll help you create an online yoga practice that’s uniquely your own.</p>
          </div>
        </div>
      </div>



    </div>
    <div class="container-fluid position-relative mt-md-5">
      <div class="blur-2 position-absolute top-0 end-0">
        <img src="./images/Group (6).png" class="img-fluid " alt="">
      </div>
      <h1 class=" practice-head text-center" data-aos="fade-up" 
      data-aos-duration="1000">Practice wherever you<br> want, Whereever you need </h1>
      <p class=" practice-desc text-center " data-aos="fade-up" 
      data-aos-duration="1500">With over 4,000 classes on demand you can experience the benefits of your
        practice at home or on the go on any device. you can even download your facorite classes</p>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3 pt-4 pb-4 text-center" data-aos="fade-up" 
          data-aos-duration="1000">
            <img src="./images/Mask group.jpg" class="img-fluid " alt="">
            <h1 class="yogatype-title">Iyengar yoga</h1>
            <p class="yogatype-desc">yengar yoga was founded by B.K.S. Iyengar and focuses on alignment as well as
              detailed and precise movements.</p>
            <button class="yogaBookNow">Book Now</button>
          </div>
       
          <div class="col-12 col-md-3 pt-4 pb-4 text-center" data-aos="fade-up" 
          data-aos-duration="1500">
            <img src="./images/Mask group-1.jpg" class="img-fluid " alt="">
            <h1 class="yogatype-title">Yin yoga</h1>
            <p class="yogatype-desc">Yin yoga is a slow-paced style of yoga with seated postures that are held for
            longer periods of time.</p>
            <button class="yogaBookNow">Book Now</button>
          </div>
          <div class="col-12 col-md-3 pt-4 pb-4 text-center" data-aos="fade-up" 
          data-aos-duration="2000">
            <img src="./images/Mask group-2.jpg" class="img-fluid " alt="">
            <h1 class="yogatype-title">Prenatal yoga
            </h1>
            <p class="yogatype-desc">Prenatal yoga is carefully adapted for moms-to-be, and is tailored to women in
            all trimesters</p>

            <button class="yogaBookNow">Book Now</button>
          </div>
          <div class="col-12 col-md-3 pt-4 pb-4 text-center" data-aos="fade-up" 
          data-aos-duration="2500">
            <img src="./images/Mask group-3.jpg" class="img-fluid " alt="">
            <h1 class="yogatype-title">Anusara yoga</h1>
            <p class="yogatype-desc">Anusara is a modern-day version of hatha yoga, most similar to vinyasa in that
            it focuses on alignment, </p>
            <button class="yogaBookNow">Book Now</button>
          </div>
        </div>

      </div>
    </div>
    <div class="container mt-5 ">
      <h2 class="yogaBenf-title1"  data-aos="fade-up" 
      data-aos-duration="1000">Yoga Benefits</h2>
      <h1 class="yogaBenf-title2"  data-aos="fade-up" 
      data-aos-duration="1000">Yoga Can Help You</h1>
      <p class="yogaBenf-desc"  data-aos="fade-up" 
      data-aos-duration="1000">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no.</p>
    <div class="container-fluid position-relative">
      <div class="row yogapose">
        <div class="col-12 col-md-4">
          <div class=" d-flex justify-content-center align-items-center" data-aos="fade-up-left" 
          data-aos-duration="2000">
         
            
         
         
          <div class="pe-3 pt-0 ps-md-5 pt-md-5 ">
            <h1 class="benefit4 text-md-end">Ease & Reduce Pain</h1>
            <p class="text-md-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="pb-3 pb-md-4">
            <img src="./images/image 5.png" width="50" alt="">
          </div>
        </div>
        <div class="mt-4 me-md-5 d-flex justify-content-center align-items-center" data-aos="fade-up-left" 
        data-aos-duration="2000">
            <div class="pe-3 pt-0 ps-md-5 pt-md-5 ">
              <h1 class="benefit4 text-md-end">Reduce Strees & Anxiety</h1>
              <p class="text-md-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="pb-3 pb-md-4">
              <img src="./images/image 7.png" width="50" alt="">
            </div>
          </div>
          <div class="mt-4 d-flex justify-content-center align-items-center" data-aos="fade-up-left" 
          data-aos-duration="2000">
              <div class="pe-3 pt-0 ps-md-5 pt-md-5 ">
                <h1 class="benefit4 text-md-end">Sleep Better</h1>
                <p class="text-md-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="pb-3 pb-md-4">
                <img src="./images/image 9.png" width="50" alt="">
              </div>
            </div>
    
         
         
          
        </div>
        <div class="col-12 col-md-4 ">
          <lottie-player src="./gril chackra.json" speed="1" style="width: 100%; height: 455px; margin: auto;" loop
          autoplay>
        </lottie-player> 
     
        </div>
        <div class="col-12 col-md-4 mt-n5">
          <div class=" d-flex justify-content-center align-items-center" data-aos="fade-up-right" 
          data-aos-duration="2000">
         
          <div class="pb-3 pb-md-4">
            <img src="./images/image 6.png" width="50" alt="">
          </div>
          <div class="ps-3 pt-0 ps-md-4 pt-md-5"  >
            <h1 class="benefit4">Improve Flexibility</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="mt-4 ms-md-5 d-flex justify-content-center align-items-center" data-aos="fade-up-right" 
        data-aos-duration="2000">
         
          <div class="pb-3 pb-md-4">
            <img src="./images/image 8 (1).png" width="50" alt="">
          </div>
          <div class="ps-3 pt-0 ps-md-4 pt-md-5 ">
            <h1 class="benefit4">Incase Muscle Strength</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="mt-4 d-flex justify-content-center align-items-center" data-aos="fade-up-right" 
        data-aos-duration="2000">
         
          <div class="pb-3 pb-md-4">
            <img src="./images/image 10.png" width="50" alt="">
          </div>
          <div class="ps-3 pt-0 ps-md-4 pt-md-5 ">
            <h1 class="benefit4">And So much More</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid position-relative mt-md-5">
    <!-- <div class="position-absolute top-0 start-0">
      <img src="./images/Group (5).png" alt="">
    </div> -->
    <h1 class=" practice-head text-center">Our Experienced Instructors </h1>
    <p class=" practice-desc text-center">With over 4,000 classes on demand you can experience the benefits of your practice at home or on the go on any device. you can even download your facorite classes</p>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 text-center">
          <img src="./images/Mask group (8).png" class="img-fluid " alt="">
          <h1 class="yogatype-title">Iyengar yoga</h1>
          
        </div>
     
        <div class="col-12 col-md-3 text-center">
          <img src="./images/Mask group (9).png" class="img-fluid " alt="">
          <h1 class="yogatype-title">Yin yoga</h1>
      
        </div>
        <div class="col-12 col-md-3 text-center">
          <img src="./images/Mask group (7).png" class="img-fluid " alt="">
          <h1 class="yogatype-title">Prenatal yoga
          </h1>
     
        </div>
        <div class="col-12 col-md-3 text-center">
          <img src="./images/Mask group.jpg" class="img-fluid " alt="">
          <h1 class="yogatype-title">Anusara yoga</h1>
        
        </div>
      </div>

    </div>
  </div>
  <div class="container mt-5 mb-3 ">
    <h1 class="text-center practice-head mb-5" >
      Our Testimonial
    </h1>
    <div class="row responsive  ">

  <div class="col-12 col-4 card  position-relative " >
    <img class="card-img-top" src="./images/Flat_bubble_for_quote_with_yellow_banner 2.png" alt="Card image" style="width:100%">
    <div class="card-body position-absolute top-50 start-50">
     
    </div>
  </div>
   <div class="col-12 col-4 card " >
    <img class="card-img-top" src="./images/Flat_bubble_for_quote_with_yellow_banner 4.png"alt="Card image" style="width:100%">
    <div class="card-body">
     
    </div>
  </div>
  <div class="col-12 col-4 card " >
    <img class="card-img-top" src="./images/Flat_bubble_for_quote_with_yellow_banner 6.png"alt="Card image" style="width:100%">
    <div class="card-body">
   
    </div>
  </div>
  
  <div class="col-12 col-4 card " >
    <img class="card-img-top" src="./images/Flat_bubble_for_quote_with_yellow_banner 7.png"alt="Card image" style="width:100%">
    <div class="card-body">
 
    </div>
  </div>
 
</div>
</div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <footer id="footer">
     <div class="footer-newsletter"> 
      <div class="container">
         <div class="row"> 
        <div class="col-md-6 text-center">
        <img src="./images/image-removebg-preview (24) 1.png" alt="">
           </div>
            <div class="col-md-6"> 
              <form action="" method="post"> 
                <input  type="email" name="email" class="form-control2 shadow-none" placeholder="Enter Your Email">
                <input type="submit" value="subscription"> 
              </form>
             </div> 
            </div>
           </div>
           </div>
        
</footer>
<script>
  let doctitle = document.title;
  window.addEventListener("blur", ()=>{
    document.title = "Come Back 🥺  ";

  });
  window.addEventListener("focus",()=> {
document.title = doctitle;
  })
</script>
<script>
  $(function () {
                 $('#select1').click(function () {
                     $('#select2 option').hide();
                     $('#select2 option[value="' + $(this).val() + '"]').prop("selected",true).show();
                 });
             });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script type="text/javascript" src="./js/ajax.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$('.responsive').slick({
  dots: true,
  // infinite: true,
  speed: 500,
  // autoplaySpeed:1000,
  // autoplay:true,
  slidesToShow: 3,
  slidesToScroll: 1,
 
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
      arrows: true,      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

<script>
AOS.init();
</script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

</body>

</html>

