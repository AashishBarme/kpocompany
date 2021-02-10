  <?php get_template_part('template-parts/extras/breadcumb'); ?>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <?php echo kpocompany_contact_details()->map; ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
            <div class="media-body">
              <h3><?php echo kpocompany_contact_details()->location; ?></h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><?php echo kpocompany_contact_details()->phone_number; ?></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
            <div class="media-body">
              <h3><?php echo kpocompany_contact_details()->mail; ?></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->