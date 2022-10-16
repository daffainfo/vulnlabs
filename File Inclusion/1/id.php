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
<a href="#about" class="w3-bar-item w3-button">Tentang</a>
<a href="#menu" class="w3-bar-item w3-button">Menu</a>
<a href="#contact" class="w3-bar-item w3-button">Kontak</a>
<a href="index.php?lang=en.php" class="w3-bar-item w3-button">English Language</a>
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
<h1 class="w3-center">Tentang Katering</h1><br>
<h5 class="w3-center">Tradisi sejak 1889</h5>
<p class="w3-large">
Katering didirikan pada blabla oleh Mr. Smith di lorem ipsum dolor sit amet, consectetur adipiscing elite, consectetur adipiscing elite, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p class="w3-large w3-text-grey w3-hide-medium">
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua.</p>
</div>

</div>
</div>

<!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<h1 class="w3-center">Menu</h1>
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Keranjang Roti</h4>
<p class="w3-text-grey">
Aneka roti buah panggang segar dan muffin 5,50</p><br>

<h4>Wafel Belgia</h4>
<p class="w3-text-grey">
Adonan rasa vanilla dengan tepung malt 7.50</p><br>

<h4>Orak-arik telur</h4>
<p class="w3-text-grey">
Orak-arik telur, paprika merah panggang dan bawang putih, dengan bawang hijau 7.50</p><br>

<h4>Panekuk blueberry</h4>
<p class="w3-text-grey">
Dengan sirup, mentega, dan banyak buah beri 8.50</p>    

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="images/img_tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>

</div>

<div class="w3-container w3-text-grey">
<p>Kami menawarkan katering layanan lengkap untuk acara apa pun, besar atau kecil. Kami memahami kebutuhan Anda dan kami akan melayani makanan untuk memenuhi kriteria terbesar dari semuanya, baik tampilan maupun rasa. Jangan ragu untuk menghubungi kami.</p>
</div>

</div>

<!-- Contact -->
<div id="contact" class="w3-container w3-padding-64">
<h1>Kontak</h1>

<p class="w3-text-blue-grey w3-large">
<b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
<p>Anda juga dapat menghubungi kami melalui telepon 00553123-2323 atau email catering@catering.com, atau kirimkan pesan kepada kami di sini:</p>

<form action="/action_page.php" target="_blank">
<p><input class="w3-input w3-padding-16" type="text" placeholder="Nama" required name="Name"></p>
<p><input class="w3-input w3-padding-16" type="number" placeholder="Berapa orang" required name="People"></p>
<p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Tanggal dan Waktu" required name="date" value="2020-11-16T20:00"></p>
<p><input class="w3-input w3-padding-16" type="text" placeholder="Pesan / Permintaan spesial" required name="Message"></p>
<p><button class="w3-button w3-light-grey w3-section" type="submit">KIRIM PESAN</button></p>
</form>

<img src="images/map.jpg" class="w3-image" style="width:100%">
<p class="w3-center w3-padding">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank">w3.css</a></p>
</div>  

<!-- End Content -->
</div>

</body>
</html> 
