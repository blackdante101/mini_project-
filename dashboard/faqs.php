<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../templates/stylesheet.php';?>
	<link href="../css/bootstrap5.css" rel="stylesheet">
  <link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/main.css">
	<title>Frequently Asked Questions</title>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class="banner faqs-img">
		<h1>Frequently Asked Questions</h1>
	</div>
	<div class="container mt-5">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       <h4>I am not very technology savvy…what do I do?</h4>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        It is not meant to be for technology savvy people only. The underlying experience that we have focussed on is the ease of use. So if you can operate a simple website/email then you should be able to use the site without any hassle.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h4>I have a question and I can’t see that here. What can I do?</h4>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Sorry about it. Please send an email to healthchatbot@gmail.com and we will respond back to you on the same.
      </div>
    </div>
  </div>
</div>
</div>
<script src="../js/bootstrap5.min.js" ></script>
<script>
 $( function() {
 $( "#accordion" ).accordion();
  } );
</script>
</body>
</html>