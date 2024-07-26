<?php
include_once('includes/header/header.php');
pageTitle("राम गया ");?>

<?php include_once("includes/header/header-close.php"); ?>
<main>
 <!-- start ramGaya section -->
 <section class="about_section layout_padding">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <div class="detail-box">
           <div class="heading_container">
             <h2>
             राम गया 
             </h2>
             
           </div>
           <p>
           राम गया, गया जिले में स्थित है और हिंदू धर्म में पिंडदान के लिए एक प्रमुख स्थल है। यह स्थान भगवान राम से जुड़ी पौराणिक कथाओं के कारण विशेष माना जाता है। इस स्थल का इतना महत्व है कि हर साल पितृ पक्ष के दौरान लाखों श्रद्धालु यहां आते हैं और अपने पूर्वजों की आत्माओं की शांति और मोक्ष के लिए पिंडदान करते हैं।
</p>
<button class="read-more-button" >Read More</button>
<div class="read-more-content" style="display:none;">
<h3>पौराणिक कथा और राम गया का महत्व</h3>
<p>
राम गया का महत्व पौराणिक कथाओं में विस्तार से उल्लिखित है। कथा के अनुसार, भगवान राम ने लंका युद्ध के बाद अपने विजयी सेना के साथ यहां आकर अपने पिता राजा दशरथ और अन्य पूर्वजों की आत्मा की शांति के लिए पिंडदान किया था। इस अनुष्ठान में चावल, तिल और पवित्र जल का उपयोग किया गया था, जो मृतक आत्माओं को शांति और मोक्ष प्रदान करते हैं।
</p>
<h3>पितृ पक्ष और राम गया</h3>
<p>
पितृ पक्ष हिंदू धर्म में अत्यंत महत्वपूर्ण होता है, जब श्रद्धालु अपने पूर्वजों की आत्मा की शांति के लिए पिंडदान करने के लिए धार्मिक स्थलों पर जाते हैं। राम गया पितृ पक्ष के दौरान भारी संख्या में श्रद्धालुओं का संग्रह होता है, जहां वे अपने पूर्वजों को श्रद्धांजलि अर्पित करते हैं। इस समय गया शहर धार्मिक और सांस्कृतिक गतिविधियों का केंद्र बन जाता है, जहां श्रद्धालु विभिन्न धार्मिक अनुष्ठानों में भाग लेते हैं और अपने पूर्वजों की आत्माओं को शांति प्रदान करने का संकल्प लेते हैं।
</p>
<h3>धार्मिक और सामाजिक पहलू</h3>
<p>
राम गया का महत्व सिर्फ धार्मिक दृष्टिकोण से ही नहीं, बल्कि सामाजिक और सांस्कृतिक दृष्टिकोण से भी अत्यंत महत्वपूर्ण है। यहां की धार्मिक गतिविधियां समाज में समर्पितता, संवेदनशीलता और समरसता की भावना को प्रकट करती हैं। पितृ पक्ष के दौरान यहां लाखों श्रद्धालु आते हैं और इस अवसर परिवार के सभी सदस्य एकत्र होकर अपने पूर्वजों के लिए पिंडदान करते हैं। इस प्रकार, यह एकता और सामूहिक दानशीलता का अद्वितीय उदाहरण प्रस्तुत करता है।
</p>
<h3>पर्यावरणीय दृष्टिकोण</h3>
<p>
राम गया का पर्यावरणीय महत्व भी अत्यंत महत्वपूर्ण है। यह स्थल गया शहर के अंदर स्थित है, जो कि एक प्रमुख तीर्थ स्थल होने के साथ-साथ एक प्राकृतिक संसाधन केंद्र भी है। इसके जल स्रोत और पर्यावरण की संरक्षा अत्यंत आवश्यक है, ताकि यह स्थल आने वाली पीढ़ियों के लिए भी समृद्ध और सुरक्षित बना रहे।
</p>
</div>
        </div>
       </div>
       <div class="col-md-6">
         <div class="img_container">
           <div class="img-box b1">
             <img src="images/falgu_image2.jpeg" alt="" />
           </div>
           <div class="img-box b2">
             <img src="https://placehold.co/600x400" alt="" />
           </div>
         </div>

       </div>

     </div>
   </div>
 </section>

 <!-- end ramGaya section -->

 <script>
    const button = document.querySelector('.read-more-button');
    
    const content = document.querySelector('.read-more-content');
    button.addEventListener('click',()=>{
      content.style.display = 'block';
      button.style.display = 'none';
    })
  </script>
  
</main>
<?php include_once("includes/footer/footer.php"); ?>
