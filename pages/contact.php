<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap" async defer></script>

<div id="google-map-canvas"></div>
    
<div class="row">

  <div class="col-lg-8 col-lg-offset-2">
    <h1 class="text-center">Contact us</h1>
    <hr>

    <form id="contact-form" method="post" action="thank-you.php">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="form-name">Firstname*</label>
            <input id="form-name" type="text" name="firstname" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form-lastname">Lastname*</label>
            <input id="form-lastname" type="text" name="lastname" class="form-control" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="form-email">Email*</label>
            <input id="form-email" type="email" name="email" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form-phone">Phone*</label>
            <input id="form-phone" type="text" name="phone" class="form-control" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="form-message">Message*</label>
            <textarea id="form-message" name="message" class="form-control" rows="10" required></textarea>
          </div>
        </div>
      </div>

      <button type="submit" id="send-message" class="btn btn-primary pull-right">Send Message</button>

      <p class="text-danger"><strong>*</strong> Required fields</p>

    </form>

  </div>

</div>
