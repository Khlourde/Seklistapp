<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us - Seklistapp</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/blog-style.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- For Font style -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <?php require('header2.php'); ?>
</head>

<body>
    
    
    <section class="contact-form">
        <div class="container">
            <div class="contact-heading">
                <h1>Contact Us</h1>
                <h3>You can send your feedback or report any issues by submitting the form.</h3>
            </div>
            <form id="form" action="" method="post">
                <h3>Leave your query here</h3>
                <fieldset>
                    <input id="name" name="name" placeholder="Your name" type="text"  required autofocus>
                </fieldset>
                <fieldset>
                    <input id="email" name="email" placeholder="Your Email Address" type="email"  required>
                </fieldset>
                <fieldset>
                    <input id="mobile" name="mobile" placeholder="Your Phone Number (optional)" type="tel"  >
                </fieldset>
                <fieldset>
                    <textarea id="message" name="message" placeholder="Type your message here...."  required></textarea>
                </fieldset>
                <fieldset>
                    <button type="submit" onclick="send_message()" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>

        </div>

    </section>
    <?php require('footer.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/owl-carousel/highlight.js"></script>
    <script src="assets/js/owl-carousel/app.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })
    </script>
<script>
    function send_message(){

	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var message=jQuery("#message").val();
	
	if(name==""){
		alert('Fields cannot be empty!');
	}else if(email==""){
		alert('Fields cannot be empty!');
	}else if(mobile==""){
		alert('Fields cannot be empty!');
	}else if(message==""){
		alert('Fields cannot be empty!');
	}else{
		jQuery.ajax({
            url:'send_message.php',
            type:'post',
            data:'&name='+name+'&email='+email+'&mobile='+mobile+'&message='+message,
            success:function(result){
                alert("Thank you, your message has been sent!");
                document.getElementById("form").reset();
            }
        });
	}	
}
</script>
</body>

</html>