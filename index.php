<?php include_once("includes/header/header.php"); 
pageTitle("Homepage");
?>
<?php include_once("includes/header/header-close.php"); 
?>
<main>
  <div class="hero_area">
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
              पिंडदान-2024
              </h1>
              <p>

पिंडदान वेबसाइट पर आपका हार्दिक स्वागत है। हम यहाँ पवित्र पिंडदान अनुष्ठानों को सम्पूर्ण श्रद्धा और विधि-विधान से सम्पन्न कराने के लिए प्रतिबद्ध हैं। हमारे लिए यह महत्त्वपूर्ण है कि हम अपने पूर्वजों का सम्मान करें और उनकी आत्माओं को शांति प्रदान करें।</p>

<p>हमारा उद्देश्य इस प्राचीन परंपरा को पूरी दुनिया में विस्तारित करना है, ताकि हर परिवार को पिंडदान की महत्ता को समझते हुए इसका लाभ मिल सके। हम सुनिश्चित करते हैं कि हर परिवार इन अनुष्ठानों को सम्मान और श्रद्धा के साथ सम्पन्न कर सके।</p>

<p>हमारे द्वारा दी जाने वाली सेवाएं और विशेषज्ञ मार्गदर्शन पिंडदान की पवित्रता को बनाए रखते हैं और इसे एक निर्बाध और प्रामाणिक अनुभव बनाते हैं। हमारी सेवाएं इस परंपरा को जीवंत बनाए रखने और दिवंगत आत्माओं को शांति प्रदान करने में सहायक हैं।</p>
              
              <a href="contact.php" class="">Book Your Schedule</a>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="https://placehold.co/600x400" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="https://placehold.co/600x400" alt="">
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <div class="img-box">
                        <img src="https://placehold.co/600x400" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  
  <!-- service section -->

  <?php include_once('service.php');
  pageTitle("Services");
   ?>

  <!-- end service section -->

  <!-- about section -->
    <?php include_once('about.php');
    pageTitle("About");
    ?>

  <!-- end about section -->

  <!-- contact section -->
     <?php include_once('contact.php');
     pageTitle("Contact");
    ?>

  <!-- end contact section -->

   
</main>
<?php include_once('includes/footer/footer.php'); ?>
