<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Emergency Medical Help</title>
        <!-- Bootstrap Core CSS -->
         <link href="EMH.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    </head>

    <body style="padding-top: 50px;">
        <!-------------------------------------------------------------- Header ------------------------------------------------------>

    
    <?php
        include 'includes/header.php';
        ?>

       
    
        <!-------------------------------------------------------------- Header ---------------------------------------------------------->

<div id="Data">
        <h3>What exactly is Ayurveda?</h3>
        <h4>Vata, pitta, and kapha—collectively known as the doshas—are one of the most foundational concepts in the tradition of Ayurveda. But what are they, exactly? In essence, the doshas are energetic forces of nature, functional principles that help us to better understand ourselves, and the world around us. </h4>
        <div id="identity">
            <img src="img/Ayurveda-banner-800x533.png" alt="Bridge-Yoga-Position-Bandha-Sarvangasana"  class="center">
            <p class="center">Vata, pitta, and kapha are each essential to our physiology in some way, so no one dosha is better than, or superior to, any other. Each of them has a very specific set of functional roles to play in the body. That said, when the doshas are out of balance, they can wreak havoc on our health. But before we get into the specifics of each of the three doshas, it is helpful to understand their elemental composition, and their broader role in the natural world.</p>
            <p>
                In Ayurveda, the most basic building blocks of the material world are the five elements: ether (space), air, fire, water, and earth.Vata is characterized by the mobile nature of Wind (Air) energy.

Pitta embodies the transformative nature of Fire energy.

And Kapha reflects the binding nature of Water energy.
            </p><div class="table-responsive">
            <table width="pixels|%" class="center">
  <tr>
    <th>Dosha:</th>
    <th>Primary Elements
</th>
  </tr>
  <tr>
    <td>Vata:</td>
    <td>Air + Ether</td>
     </tr>
  
  <tr>
    <td>Pitta:</td>
    <td>Fire + Water</td>
 </tr>
  
   <tr>
    <td>Kapha:</td>
    <td>Water + Earth</td>
  </tr></div>
<p>As with the elements, all three of the doshas can be found in everyone and everything, but in different proportions. They combine to create different climates, different foods, different species, and even different individuals within the same species. In fact, the particular ratio of vata, pitta, and kapha within each of us provides us with a blueprint for optimal health (otherwise known as our constitution), and garners a significant influence on our individual physical, mental, and emotional character traits—as well as our unique strengths and vulnerabilities.</p>
</table>
        </div>
        



         <h3>The Qualitative Nature of the Doshas</h3>
        <h4>Each dosha is characterized by a collection of qualities that support its particular energetic: </h4>
        <div id="identity">
            <img src="img/ayurveda_oils.jpg" alt="#"  class="center">
            <p class="center">These qualities make balancing the doshas very intuitive because, according to Ayurveda, like increases like and opposites balance. When any one of the doshas is aggravated, we can generally promote a return to balance by reducing the influence of that dosha’s qualities, while favoring their opposites. And if we know which specific qualities are aggravated, we can focus on pacifying those qualities in particular, while favoring foods, herbs, and experiences that amplify their opposing energies. The following table shows the ten pairs of opposites most commonly referenced in Ayurveda.</p>
            <div class="table-responsive">
  <table width="pixels|%" class="center">
  <tr>
    <th>Dosha</th>
    <th>Qualities</th>
  </tr>
  <tr>
    <td>Vata:</td>
    <td>Dry, Light, Cold, Rough, Subtle, Mobile, Clear</td>
     </tr>
  
  <tr>
    <td>Pitta:</td>
    <td>Hot, Sharp, Light, Liquid, Spreading, Oily</td>
 </tr>
  
   <tr>
    <td>Kapha:</td>
    <td>Heavy, Slow, Cool, Oily, Smooth, Dense, Soft, Stable, Gross, Cloudy (Sticky)</td>
  </tr>

</table></div>
<p>These qualities make balancing the doshas very intuitive because, according to Ayurveda, like increases like and opposites balance. When any one of the doshas is aggravated, we can generally promote a return to balance by reducing the influence of that dosha’s qualities, while favoring their opposites. And if we know which specific qualities are aggravated, we can focus on pacifying those qualities in particular, while favoring foods, herbs, and experiences that amplify their opposing energies. The following table shows the ten pairs of opposites most commonly referenced in Ayurveda.</p>
                  <h3>The Doshas and Their Functions</h3>
                  <h4>Each of the three doshas has a unique personality determined by its particular combination of elements and qualities. At the end of the day, each dosha naturally governs specific physiological functions:</h4>
         <div class="table-responsive">
          <table width="pixels|%" class="center">
  <tr>
    <th>Dosha</th>
    <th>Qualities</th>
  </tr>
  <tr>
    <td>Vata:</td>
    <td>Movement and Communication</td>
     </tr>
  
  <tr>
    <td>Pitta:</td>
    <td>Digestion and Transformation</td>
 </tr>
  
   <tr>
    <td>Kapha:</td>
    <td>Cohesiveness, Structure, and Lubrication</td>
  </tr>

</table></div>
<p>Vata governs Movement and Communication.

Pitta oversees Digestion and Transformation.

Kapha provides Cohesiveness, Structure, and Lubrication.

While the doshas can be observed everywhere in nature, they are particularly supportive in understanding living organisms—specifically ourselves. For this reason, we will explore their primary functions in the context of human physiology.</p>
<h4>Vata</h4>
<p>Vata embodies the energy of movement and is therefore often associated with wind (and the air element). Vata is linked to creativity and flexibility; it governs all movement—the flow of the breath, the pulsation of the heart, all muscle contractions, tissue movements, cellular mobility—and communication throughout the mind and the nervous system.</p>

<h4>Pitta</h4>
<p>Pitta represents the energy of transformation and is therefore closely aligned with the fire element. But in living organisms, pitta is largely liquid, which is why water is its secondary element. Pitta is neither mobile nor stable, but spreads—much as the warmth of a fire permeates its surroundings, or as water flows in the direction dictated by the terrain. Pitta is closely related to intelligence, understanding, and the digestion of foods, thoughts, emotions, and experiences; it governs nutrition and metabolism, body temperature, and the light of understanding.</p>


<h4>Kapha</h4>
<p>Kapha lends structure, solidity, and cohesiveness to all things, and is therefore associated primarily with the earth and water elements. Kapha also embodies the watery energies of love and compassion. This dosha hydrates all cells and systems, lubricates the joints, moisturizes the skin, maintains immunity, and protects the tissues.</p>
</div>
</div>

         <!--............................................................Footer.............................................................................-->
       


        <?php
        include 'includes/footer.php';
        ?>

        <!--Footer end-->
    </body>
    </html>