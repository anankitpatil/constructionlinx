<?php
        $EmailTo = "info@constructionlinx.com";
        if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'rf1.constructionlinx'){
                $EmailTo = "lnoble@redfred.co.uk";
        }
        $EmailFrom = $EmailTo;
        $Subject = "Feedback form residential website";

        $questions = array(
                array('heading'=>'Our support team'
                        ,'questions'=>array(
                                array('q'=>'How well did we handle your initial enquiry?', 'type'=>'scale')
                                ,array('q'=>'How satisfied were you with how quickly we could arrange a site survey?', 'type'=>'scale')
                                ,array('q'=>'How would you rate our estimator in regard to their knowledge and professionalism?', 'type'=>'scale')
                                ,array('q'=>'How satisfied were you with the time it took to produce a quotation?', 'type'=>'scale')
                                ,array('q'=>'How was our quotation in terms of accuracy, detail and clarity?', 'type'=>'scale')
                        )
                )
                ,array('heading'=>'Our tradesmen.'
                        ,'questions'=>array(
                                array('q'=>'How was their time keeping and reliability?', 'type'=>'scale')
                                ,array('q'=>'How was their general conduct and politeness?', 'type'=>'scale')
                                ,array('q'=>'How satisfied were you with their compliance with health and safety standards?', 'type'=>'scale')
                                ,array('q'=>'How did they do with housekeeping and site cleanliness?', 'type'=>'scale')
                                ,array('q'=>'How would you rate our standard of work?', 'type'=>'scale')
                        )
                )
                ,array('heading'=>'Our final section gathers your opinion on the overall service we provided you with.'
                        ,'questions'=>array(
                                array('q'=>'Are there any other ways we could improve?', 'type'=>'textarea')
                                ,array('q'=>'Would you be happy to provide a testimonial for the service which you have recently received?', 'type'=>'yesno')
                        )
                )
        );
        
        $show = 'form';
        
        $alert = '';
        if(isset($_POST) && count($_POST)){
                $required_fields = array(
                        array('name'=>'Name', 'required'=>true)
                        ,array('name'=>'Email', 'required'=>true)
                        ,array('name'=>'Phone', 'required'=>false)
                        ,array('name'=>'Mobile', 'required'=>false)
                );
                
                $email = '';
                foreach($required_fields as $f){
                        $email .= $f['name'].': '.$_POST[$f['name']]."\r\n\r\n";
                        if($f['name'] == 'Email' && strpos('@', $_POST[$f['name']]) && filter_var($_POST[$f['name']], FILTER_VALIDATE_EMAIL)){
                                $EmailFrom = $_POST[$f['name']];
                        }
                        if($f['required'] && (!isset($_POST[$f['name']]) || !strlen($_POST[$f['name']]))){
                                $alert .= '<p class="alert">Missing field: '.$f['name'].'</p>';
                        }
                }
                
                $q_count = 0;
                $t_score = 0;
                $i = 0;
                foreach($questions as $section){
                        foreach($section['questions'] as $j => $q){
                                if($q['type'] == 'scale'){
                                        $score = is_numeric($_POST['question_'.$i]) ? $_POST['question_'.$i] : 'N/A';
                                        if(is_numeric($score)){
                                                $t_score += $score;
                                                $q_count++;
                                        }
                                        $email .= $q['q'].': '.$score."\r\n\r\n";
                                }
                                else {
                                        $email .= $q['q'].': '.$_POST['question_'.$i]."\r\n\r\n";
                                }
                                $i++;
                        }
                }
                $average_score = number_format($t_score / $q_count, 2);
                
                if(!$alert){
                        // email to office
                        $email = 'Customer feedback. Average score: '.$average_score."\r\n\r\n".$email;
                        if($average_score >= 7){
                                $show = 'good';
                        }
                        else {
                                $show = 'bad';
                        }
                        
                        $success = mail($EmailTo, $Subject, $email, "From: <$EmailFrom>");
                        
                }
        }
?><!DOCTYPE html>
<html lang="en">

<head>
<title>Feedback Construction Linx, Crewe, Cheshire</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content=" " />

<!-- ICO -->
<link rel="shortcut icon" href="favicon.ico" />



<!-- CSS -->

<link rel="stylesheet" media="all" href="main-style.css" />
<link rel="stylesheet" media="all" href="css/drop.css" />
<link rel="stylesheet" media="all" href="fonts/din.css" />

<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/demo.js"></script>


<!-- JS -->

<script>
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
</script>




	



</head> 








<body>


<!-- start container -->
<div id="container">



<header>

	<div id="logo-link">
    <a href="#"><img src="images/logo.png" alt="premises Maintenance Cheshire" /></a>                
    </div>

       
    <nav>
    
                         		<ul class="menu">
                            <li class="liTop"><a class="open" href="index.html"><b>Home</b><!--[if gte IE 7]><!--></a><!--<![endif]-->
                            </li>
                            <li class="close"><a href="#url"></a></li>
                        </ul>
                        
                        
                        
                        <ul class="menu">
                            <li class="liTop"><a class="open" href="trades.html"><b>Trades</b><!--[if gte IE 7]><!--></a><!--<![endif]-->
                            </li>
                            <li class="close"><a href="#url"></a></li>
                        </ul>
                        
                        
                        <ul class="menu">
                            <li class="liTop"><a class="open" href="building-maintenance.html"><b>Why Maintain?</b><!--[if gte IE 7]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                                <ul class="dropper">
                                    <li><a href="maintenance-plans.html">Maintenance Plans</a></li>
                                    <li><a href="maintenance-options.html">Available Options</a></li>
                                </ul>
                            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        
                            </li>
                            <li class="close"><a href="#url"></a></li>
                        </ul>
                        
                        
                        
                        <ul class="menu">
                            <li class="liTop"><a class="open" href="testimonial1.html"><b>Testimonials</b><!--[if gte IE 7]><!--></a><!--<![endif]-->
                            </li>
                            <li class="close"><a href="#url"></a></li>
                        </ul>
                        
                        
                        <ul class="menu">
                            <li class="liTop"><a class="open active" href="contact.html"><b>Contact us</b><!--[if gte IE 7]><!--></a><!--<![endif]-->
                            </li>
                            <li class="close"><a href="#url"></a></li>
                        </ul>

	</nav>
    
    <div id="social">
    <li><a href="cookie-policy.html" target="_blank">cookie<br>
		policy</a></li>
    <li><a href="http://www.youtube.com/watch?v=WN2CYyXzjGQ"><img src="images/youtube.png" width="19" height="18" alt="Youtube Logo"></a></li>
    <li><a href="#"><img src="images/facebook.png" width="20" height="18" alt="Facebook logo"></a></li>
    <li><a href="#"><img src="images/linkedin.png" width="20" height="18" alt="Linkedin logo"></a></li>
    <li><a href="https://twitter.com/#!/ConstructLinx"><img src="images/twitter.png" width="19" height="18" alt="Twitter logo"></a></li>
    </ul>
    
    </div>
      
         

</header>



    
	

<!-- start content -->

       
  <section id="main-wrap">
          <div id="full-width">
                <h1>Feedback</h1>
                        
                        <?php echo $alert;?>
                        <div id="feedback-wrap">
                        
<?php
        if($show == 'good'){
                ?>
                        <h2>You rated us: <?php echo $average_score ?></h2>
                        <p>Good score lipsum....</p>
                <?php
                
        }
        else if($show == 'bad'){
                ?>
                        <h2>You rated us: <?php echo $average_score ?></h2>
                        <p>We're sorry score lipsum....</p>
                <?php
        }
        else {
                ?>                                
                <div id="feedback">
                         <form  method="POST" action="feedback.php">
                         

                            <fieldset class="ranges">
                                    <p>Thank you for taking the time to complete this Customer Satisfaction Document, 
                                    we use a points system to monitor the major parts of our business which is measured 
                                    against the company Ethos of offering a Simple, Efficient &amp; Competitive service.</p>
                                <p>Please select a rating from 1 to 10, where 1 is poor and 10 is excellent, for each of the following questions
                                        relating to the job completed by Construction Linx.
                                </p>
                            <ul>
                        <?php
                                $i = 0;
                                foreach($questions as $k => $section){
                                        ?>
                                        <li class="section_heading"><?php echo $section['heading']?></li>
                                        <?php
                                        foreach($section['questions'] as $q){
                                                ?>
                                                <li>
                                                <label for="question_<?php echo $i;?>"><?php echo $q['q'];?></label>
                                                <?php
                                                        switch($q['type']){
                                                                case 'scale':
                                                                        for($j=1; $j < 11; $j++){
                                                                                $checked = isset($_POST['question_'.$i]) && $_POST['question_'.$i] == $j ? ' checked="checked"' : '';
                                                                                ?>
                                                                                <label class="range" for="question_<?php echo $i.'_'.$j;?>"><?php echo $j;?></label>
                                                                                <input type="radio" id="question_<?php echo $i.'_'.$j;?>" name="question_<?php echo $i?>" value="<?php echo $j;?>"<?php echo $checked;?> />
                                                                                <?php
                                                                        }
                                                                        break;
                                                                case 'textarea':
                                                                        ?>
                                                                        <textarea id="question_<?php echo $i.'_'.$j;?>" name="question_<?php echo $i?>"></textarea>
                                                                        <?php
                                                                        break;
                                                                case 'yesno':
                                                                        ?>
                                                                        <label class="range" for="question_<?php echo $i;?>">No</label>
                                                                        <input type="radio" id="question_<?php echo $i;?>" name="question_<?php echo $i?>" value="No" />
                                                                        <label class="range" for="question_<?php echo $i;?>">Yes</label>
                                                                        <input type="radio" id="question_<?php echo $i;?>" name="question_<?php echo $i?>" value="Yes" />
                                                                        <?php
                                                                        break;
                                                        }
                                                ?>
                                                </li>
                                                <?php
                                                $i++;
                                        }
                                }
                        ?>
                                            
                            </ul>
                            </fieldset>
                            <fieldset class="details">
                                 <p><span class="required"> *</span> Required fields</p>
                                 <ul>
                                    <li><label for="Name">Name</label>
                                    <input class="full" maxlength="60" name="Name" size="40" type="text" /></li>
                                    
                                    <li><label for="Phone">Phone</label>
                                    <input class="full" maxlength="60" name="Phone" size="40" type="text" /></li>
                                    
                                    <li><label for="Mobile">Mobile</label>
                                    <input class="full" maxlength="60" name="Mobile" size="40" type="text" /></li>
                                    
                                    <li><label for="Email">Email <span class="required">*</span></label>
                                    <input class="full" maxlength="60" name="Email" size="40" type="text" /></li>
                                                                                
                                 </ul>
                                    <div class="submit">
                                    <button type="submit" class="positive">Send feedback</button>
                                    </div>
                        </fieldset>	
                                            
                        </form>
                                
                </div>
        <?php
        }
        ?>
                                                        
                </div>
        </div>
</section> 
  
  
  
          <section id="lower">
          
         
                      <div id="icons">
                      <ul>
                      <li class="fmb"><a class="main" href="#"><span>FMB</span></a></li>
                      <li class="trusted"><a class="main" href="#"><span>Trusted Trader</span></a></li>
                      <li class="safe"><a class="main" href="#"><span>Safe Contractor</span></a></li>
                      <li class="cibse"><a class="main" href="#"><span>CIBSE</span></a></li>
                      <li class="chas"><a class="main" href="#"><span>CHAS</span></a></li>
                      <li class="sovereign"><a class="main" href="#"><span>Sovereign</span></a></li>
                      
                      </div>
          
  
 		 </section>
                

<!-- end content -->




<!-- start footer -->

  
<footer>
         
	<div id="footer_l">
    <p>Unit 8, Crewe Hall Enterprise Park, Crewe, Cheshire CW1 6UA<br>
<strong>T 01270 848700  F 01270 848701  E info@constructionlinx.co.uk</strong></p>

<span class="subtext">&copy; Copyright Construction Linx 2012</span>
     </div>
     
     <div id="footer_r">
    <p>Premises <strong>Maintenance</strong> Made <strong>Easy</strong><br>
	0844 848 2981</p>
    <span class="subtext"><a href="http://www.redfred.co.uk">Web design</a> Red Fred Ltd.</span>
     </div>
    

</footer>

<!-- end footer --> 




	

</div>
<!-- end container -->



<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9088243-1");
pageTracker._trackPageview();
} catch(err) {}</script>
	

</body>
</html>