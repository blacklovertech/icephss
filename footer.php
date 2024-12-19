<?php ?>
<footer class="footer"><br>
  <div class="copy-right_text">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <h3 class="copy_right text-center wow fadeInDown"
            style="text-align: center; font-family: 'Monoton', cursive; font-size: 30px; text-transform: uppercase; font-weight: 400; color: #fff; line-height: 1;">
            ICEPHSS’25
          </h3>

          <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s"
            style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
            Copyright &copy;

            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | Made with
            &#10084; by
            <a href="https://blacklovertech.in" target="_blank" aria-label="blacklovertech">BLT</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer_end  -->
<script>
  // Countdown script
  function updateCountdown() {
    const eventDate = new Date('2025-02-22T23:59:59'); // End date
    const now = new Date();
    const timeDiff = eventDate - now;

    if (timeDiff > 0) {
      const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

      document.getElementById('days').textContent = days;
      document.getElementById('hours').textContent = hours;
      document.getElementById('minutes').textContent = minutes;
      document.getElementById('seconds').textContent = seconds;
    } else {
      // Countdown complete
      document.getElementById('countdown').innerHTML = '<div>Event is Live!</div>';
    }
  }

  // Update countdown every second
  setInterval(updateCountdown, 1000);
</script>
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/gijgo.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/plugins.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
<? php ?>