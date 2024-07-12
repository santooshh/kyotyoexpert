 <?php include("../assets/php/header-nav.html");?>
 <section>
 	<div class="your-guide-description">
		<img src="../img/your-guide.webp">
		<h1>Your Guide</h1>
    
	</div>


        <h1 class="grid">What you need to know</h1>

	<div class="grid-container">



          
           <a href="how-to-manage-garbage.php" class="grid-item">
            <img src="../img/garbage-1.jpg" alt="Sample Image">
            <h1>How to manage garbage</h1>
            <div class="grid-text">Kyoto's garbage management system requires residents to segregate waste into burnable, non-burnable, and recyclable categories. Detailed guidelines and collection schedules ensure efficient disposal, promoting recycling and waste reduction. Non-compliance results in penalties, encouraging environmental sustainability.</div>
        </a>


        <a href="how-to-use-train.php" class="grid-item">
            <img src="../img/train-1.jpg" alt="Sample Image">
            <h1>How to use public train</h1>
            <div class="grid-text">
            Using public trains in Kyoto is efficient and convenient, with an extensive network covering major attractions. Trains are punctual and clean. Purchase an IC card for easy travel and transfer between lines. Schedules and signs are available in multiple languages.</div>
        </a>



           <a href="how-to-use-bus.php" class="grid-item">
            <img src="../img/slider-bus-1.jpg" alt="Sample Image">
            <h1>How to use public bus</h1>
            <div class="grid-text">In Kyoto, using public buses is easy and convenient. Board from the rear, pay with exact change, an IC card, or a day pass upon exiting at the front, and use the stop button before your destination. Multilingual route maps and announcements aid navigation.</div>
        </a>



            <a href="initial-office-work.php" class="grid-item">
            <img src="../img/government-1.jpg" alt="Sample Image">
            <h1>Apply for Official Documents</h1>
            <div class="grid-text">International students typically need to register at the local ward office, obtain an insurance card, and open a bank account upon arrival. They also require a passport, visa, admission letter, proof of financial support, and possibly a residence permit.</div>
        </a>



            <a href="japanese-culture.php" class="grid-item">
            <img src="../img/japanese-culture-1.jpg" alt="Sample Image">
            <h1>Japanese Culture</h1>
            <div class="grid-text">
            Japanese culture is intricate and unique, blending ancient traditions with modern innovation. This guide, part of our series, will introduce you to its key aspects, helping you understand and adapt to the distinctive lifestyle and customs in Japan.</div>
        </a>



            <a href=" affordable-living.php" class="grid-item">
            <img src="../img/affordable-1.jpg" alt="Sample Image">
            <h1>Affordable Living</h1>
            <div class="grid-text">
            The living costs in Kyoto city vary based on personal choices, yet students can cut expenses by making wise decisions in transportation, food purchases, and choosing affordable accommodation options.
</div>
        </a>

    </div>
    </div>
     </section>

<?php include("../assets/php/footer.html");?>

 <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textElements = document.querySelectorAll('.grid-item .text');

            textElements.forEach(el => {
                const originalText = el.innerText;
                const words = originalText.split(' ');

                if (words.length > 50) {
                    const truncatedText = words.slice(0, 50).join(' ') + '...';
                    el.innerText = truncatedText;
                    el.title = originalText; // Show the full text on hover
                }
            });
        });
    </script>