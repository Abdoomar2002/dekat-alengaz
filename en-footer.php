<!-- footer -->
<footer class="bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 p-2">
        <h5>Contact Us</h5>
        <p>Dekat Alengaz for Heat. Isolation S.T.   2511107414-CR 2511107414----Kingdom of Saudi Arabia-Dammam-Tel Mobile +0501280683</p>
        <p>Mobile</p>
        <p> landline number : <a href="tel:+0501280683"> +0501280683</a> </p>
      </div>
      <div class="col-md-4 p-2">
        <h5>Emails</h5>
        <p>admin@dekat-alengaz.com</p>
      <a href="en-contact.php">  <button class="btn btn-light" >send email</button>
</a>
      </div>
      <div class="col-md-4 p-2">
        <h5>Connect with us on</h5>
        <a href="https://www.facebook.com/dekat-alengaz" class=" m-2" style="color: green;"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="tel:+0501280683" class="text-light m-2"><i class="fas fa-phone mb-2" style="color: green;font-size:23px;"></i></a>
        <a href="https://wa.me/+9660501280683" class="text-light m-2"><i class="fab fa-whatsapp fa-2x" style="color: green;"></i></a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 - All rights reserved <a href="https://dekat-alengaz.com" class="text-white text-decoration-none">Dekat-alengaz</a></p>
      </div>
    </div>
  </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.js"></script>
    <script>
  





  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      items: 2, // Show 2 items on mobile screens
      responsiveClass:true,
      responsive:{
          0:{
              items:2 // Show 1 item on screens smaller than 576px
          },
          576:{
              items:2 // Show 2 items on screens between 576px and 768px
          },
          768:{
              items:3 // Show 3 items on screens larger than 768px
          }
      },
      loop: true,
      margin: 30,
      autoplay: true
    });
  });


  new WOW().init();
  // Get the element to apply the animation to
  const myElement = document.querySelector('.wow');

  // Define the class to apply
  const myClass = 'wow';

  // Add an event listener for the scroll event
  window.addEventListener('scroll', function() {
      // Get the viewport height
      const windowHeight = window.innerHeight;

      // Get the element's position relative to the viewport
      const elementPosition = myElement.getBoundingClientRect();

      // Check if the element is in the viewport
      if (elementPosition.top < windowHeight && elementPosition.bottom >= 0) {
          // Add the class to the element
          myElement.classList.add(myClass);
      }
  });

// first counter

 // Get the counter elements
 var counters = document.querySelectorAll('.counter');
  
  // Loop through the counters and add a listener to each one
  counters.forEach(function(counter) {
    var target = +counter.getAttribute('data-target');
    var count = 0;
    var step = target / 100;
    function animateCounter() {
      count += step;
      if (count >= target) {
        count = target;
      } else {
        setTimeout(animateCounter, 10);
      }
      counter.querySelector('.count').textContent = Math.floor(count);
    }
    animateCounter();
  });

// end counter

$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var email = $('#email').val();
var phone = $('#phone').val();
var subject = $('#subject').val();
var message = $('#message').val();
if(email!="" && subject!="" && message!=""){
	$.ajax({
		url: "contact.php",
		type: "POST",
		data: {
			email: email,
            phone: phone,
			subject: subject,
			message: message				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html('تم ارسال ايميلك بنجاح !'); 
             	scrollBy(0,5000);
              function reloadPage(){
                window.location.href = "https://dekat-alengaz.com/";
              }
              setInterval(reloadPage,10000);
			}
			else if(dataResult.statusCode==201){
        alert(" something was wrong please try again !");
			
        $("#butsave").removeAttr("disabled");
			}
			
		}
	});
	}
	else{
    alert('please fill all the data!');
	
    $("#butsave").removeAttr("disabled");
	}
});

</script>
 

    </body>

    </html>