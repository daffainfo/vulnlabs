<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Catering</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family:"Times New Roman", serif}
h1,h2,h3,h4,h5,h6 {font-family:serif; letter-spacing:5px}
</style>
<body>

<!-- Navigation (Sits on top) -->
<div class="w3-top w3-bar w3-white w3-padding w3-card w3-wide">
<a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>

<!-- Right-sided navbar links. Hide them on small screens -->
<div class="w3-right w3-hide-small">
<a href="#about" class="w3-bar-item w3-button">About</a>
<a href="#menu" class="w3-bar-item w3-button">Menu</a>
<a href="#contact" class="w3-bar-item w3-button">Contact</a>
<a href="index.php?lang=id.php" class="w3-bar-item w3-button">Bahasa Indonesia</a>
</div>
</div>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Image in Display Container -->
<div class="w3-padding-top-48">
<div class="w3-display-container">
<img src="images/img_hamburger.jpg" alt="Catering" style="width:100%">

<div class="w3-display-bottomleft w3-padding-small w3-opacity w3-hide-small">
<h2>Le Catering</h2>
</div>

</div>
</div>

<!-- About -->
<div id="about" class="w3-padding-top-64">
<div class="w3-row">

<div class="w3-half w3-padding-large w3-hide-small">
<img src="images/img_tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table" style="width:100%">
</div>

<div class="w3-half w3-padding-large">
<h1 class="w3-center">About Catering</h1><br>
<h5 class="w3-center">Tradition since 1889</h5>
<p class="w3-large">
The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p class="w3-large w3-text-grey w3-hide-medium">
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua.</p>
</div>

</div>
</div>

<!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<h1 class="w3-center">Our Menu</h1>
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Bread Basket</h4>
<p class="w3-text-grey">
Assortment of fresh baked fruit breads and muffins 5.50</p><br>

<h4>Belgian Waffle</h4>
<p class="w3-text-grey">
Vanilla flavored batter with malted flour 7.50</p><br>

<h4>Scrambled eggs</h4>
<p class="w3-text-grey">
Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

<h4>Blueberry Pancakes</h4>
<p class="w3-text-grey">
With syrup, butter and lots of berries 8.50</p>    

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="images/img_tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>

</div>

<div class="w3-container w3-text-grey">
<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
</div>

</div>

<!-- Contact -->
<div id="contact" class="w3-container w3-padding-64">
<h1>Contact</h1>

<p class="w3-text-blue-grey w3-large">
<b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
<p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or send us a message here:</p>

<form action="/action_page.php" target="_blank">
<p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
<p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
<p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
<p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
<p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
</form>

<img src="images/map.jpg" class="w3-image" style="width:100%">
<p class="w3-center w3-padding">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank">w3.css</a></p>
</div>  

<!-- End Content -->
</div>

</body>
</html> 
