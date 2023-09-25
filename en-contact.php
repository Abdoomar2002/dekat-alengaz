<?php include("en-header.php") ?>


<section id="contact" class="main-color text-white ">
  <div class="container">
    <div class="row"> 
      <div style="margin: auto;width:100%">
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <form id="fupForm" name="form1" method="post">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="phone">Your Mobile Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
          <br>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <br>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea type="text" class="form-control" name="message" id="message" rows="10" required></textarea>
          </div>
          <br>
          <div class="text-center">
            <input type="button" name="save" class="btn btn-primary mb-2" value="Send Email" id="butsave">
          </div>
        </form>
      </div>
    </div>
</section>

<?php include("en-footer.php") ?>