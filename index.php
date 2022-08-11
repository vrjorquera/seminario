<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
	  <meta charset="utf-8"> 
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	  <meta name="keywords" content="WTOUR" />
        <meta name="description" content="WTOUR" />
	  <link rel="canonical" href="WTOUR" />
	  <meta name="author" content="Victor Jorquera Escobar" />
        <meta name="robots" content="index" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	
	  <title>WTOUR</title>
	
	  <!-- css -->
	  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
      .mySlides {display:none;}
    </style>

    <!-- favicon -->
	  <link rel="icon" type="image/vnd.microsoft.icon" href="./src/assets/images/favicon.ico"/>
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="./src/assets/images/favicon.ico"/>

    <!-- font -->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">

  </head>

  <body>

    </br>
    <div style="text-align: center;">
      <a href="previa.php">Saltar al Proyecto</a>
    </div>
    </br>

    <div class="w3-content w3-display-container">
      <img class="mySlides" src="presentacion/img_1.jpg" style="width:100%">
      <img class="mySlides" src="presentacion/img_2.jpg" style="width:100%">
      <img class="mySlides" src="presentacion/img_3.jpg" style="width:100%">
      <img class="mySlides" src="presentacion/img_4.jpg" style="width:100%">

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }
    </script>

</body>
</html>