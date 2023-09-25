    <!-- footer -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-2">
                    <h5>تواصل معنا</h5>
<p>Dekat Alengaz for Heat. Isolation س.-ت 2511107414-CR 2511107414----المملكة العربية السعودية-الدمام- هاتف جوال 0501280683</p>
<a href="tel:+0501280683" ><p>الجوال 0501280683+</p></a>
                </div>
                <div class="col-md-4 p-2">
                    <h5>ايميليلات التواصل</h5>

                    <p></p>
                    <p>admin@dekat-alengaz.com</p>
                    <a href="ar-contact.php">  <button class="btn btn-light" >ارسال بريد الكتروني</button>
                </div>
                <div class="col-md-4 p-2">
        <h5>تواصل معنا عبر</h5>
        <a href="https://www.facebook.com/dekat-alengaz" class=" m-2" style="color: green;"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="tel:+0501280683" class="text-light m-2"><i class="fas fa-phone mb-2" style="color: green;font-size:23px;"></i></a>
        <a href="https://wa.me/+9660501280683" class="text-light m-2"><i class="fab fa-whatsapp fa-2x" style="color: green;"></i></a>
      </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 - جميع الحقوق محفوظة <a href="https://dekat-alengaz.com" class="text-white text-decoration-none">Dekat-alengaz</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>
    <script>




$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    autoplay: false
  });

  function moveCarousel() {
    $('.owl-carousel').trigger('next.owl.carousel');
    setTimeout(moveCarousel, 2000);
  }

  setTimeout(moveCarousel, 2000);
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
            console.log(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html(''); 
             	scrollBy(0,5000);
              function reloadPage(){
                window.location.href = "https://dekat-alengaz.com/";
              }
              setInterval(reloadPage,10000);
			}
			else if(dataResult.statusCode==201){
                alert("حدثت مشكلة حاول مرة اخرى !");
                $("#butsave").removeAttr("disabled");

			}else  $("#butsave").removeAttr("disabled");

			
		}
	});
	}
	else{
        alert('من فضلك املأ كل البيانات !');
        $("#butsave").removeAttr("disabled");

	}
});


</script>
 

    </body>

    </html>