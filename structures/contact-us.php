    <!-- ======= Contact Section ======= -->
    <section id="contact" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>You Can Contact Us.</p>
        </div>

        <form action="account.php" method="POST" role="form">

          
          <div class="form-group">
            <input type="hidden" name="customer_id" value="<?php echo $userid;?>">
            <textarea class="form-control" name="message" rows="3" placeholder="Type your message" required></textarea>
            <div class="validate"></div>
          </div>
          
          <div class="text-center"><button class="btn btn-primary mt-4" type="submit" name="contact">Send</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
    <br><br><br>