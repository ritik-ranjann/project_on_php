<?php include_once("includes/header/header.php"); 
pageTitle("Homepage");
?>
<?php include_once("includes/header/header-close.php"); 

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO contacts (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
  if ($conn->query($sql)) {
    echo " <script> alert('Thank you for filling the form, we will contact you soon')
    window.location.href = '" . $_SERVER['PHP_SELF'] . "'
    </script>
    ";
    exit();
  } else {
    echo "<script> alert('Error,Invalid Entry, try again')</script> : ";
  }
}

$conn->close();
?>

<main>
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <img src="" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="" method="post">
            <div>
              <input type="text" placeholder="Name" name="name"/>
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" name="phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" name="message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7243.892425817114!2d84.99182329274086!3d24.797295251520275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39f32bd6df06c737%3A0xf490d884886c90ea!2sGaya%20ji%20pind%20dan%20and%20tirth%20sthal%2C%20Chand%20Chaura%2C%20Gaya%2C%20Bihar!3m2!1d24.7912052!2d84.9973546!4m5!1s0x39f32a6c7e00510f%3A0x6534eaf386ddf4f3!2sGaya%20Junction%2C%20823002%2C%20Station%20Rd%2C%20Gol%20Bagicha%2C%20Gaya%2C%20Bihar%20823001!3m2!1d24.803755499999998!2d84.9994495!5e0!3m2!1sen!2sin!4v1719408871325!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  
</main>

<?php include_once("includes/footer/footer.php");?>
