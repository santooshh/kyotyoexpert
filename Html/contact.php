 <?php include("../assets/php/header-nav.html");?>
 <?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO users (username, password, email)
        VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
    }

    ?>
<section>
	<div class="contact-description">
		<img src="../img/contact.jpg">
		<h1>Contact-Us</h1>
    
	</div>
	
	 <div class="container-contact">
        <div class="contact-info">
            <h2>Kyotyo Expert</h2>
            <p><strong>Location</strong></p>
            <p>Kyotyo, Hakumanben campus<br>
               Sakyo ward, --43<br>
               Kyotyo city, Kyotyo, Japan</p>
            <p><strong>Contact Us for</strong></p>
            <p>Sharing your experience<br>
               Immediate Issue<br>
              Your Suggestion</p>
            <p><strong>Email</strong></p>
            <p>Kyotyoexper@gmail.com</p>
        </div>
        <div class="contact-form">
            <h2>Send us a message</h2>
            <textarea placeholder="Your message"></textarea>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
            <input type="tel" placeholder="Phone">
            <button type="submit">Send Message</button>
        </div>
    </div>
</section>

 
<?php include("../assets/php/footer.html");?>
