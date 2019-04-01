 <!-- FOOTER -->
<?php
// Message Vars
$msg = '';
$msgClass = '';  

// check for the submit
if(filter_has_var( INPUT_POST,'submit' )){

  // Get Form Data
  $email = htmlspecialchars($_POST['email']);
        
  // check required fields
  if( !empty($email) ){
    // Passed
    // Check Email
    if( filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ){
      // Failed
        $msg = 'please use a valid email'; 
        $msgClass = 'alert-danger';
    } else{
        //Passed
        $toEmail = 'krystle.mensah@gmail.com';
        $subject = 'Contact Request From ';
				$body = '<h2>Contact Request</h2>
					<h4>Email</h4><p>'.$email.'</p>
				';

        //Email Headers
        $headers = "MIME-VERSION: 1.0" ."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
				$headers .= "From: " . "<".$email.">". "\r\n";
            
        if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
    }
  } else{
      // we failed
      $msg = 'please fill in field'; 
      $msgClass = 'alert-danger';
  }
}
?>
      <footer> 
        <!-- <footer class="container"> -->
          
          <div class="info-section"> 
            <div class="row"> 
              
              <div class="col-lg-6">
                <h4 class="footer-title">perfromance2</h4>
                <p id="subscribe-text">Subscribe for all the latest offers and events!</p>
                <?php if($msg != ''): ?>
    		          <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	          <?php endif; ?>

                
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          
                  <input type="text" name="email" class="form-control" 
                        value="<?php echo isset($_POST['email']) ? $email : ''; ?>" 
                        placeholder="Your email (required)"> 
                  <button type="submit" name="submit" class="btn btn-lg">Subscribe</button>

                </form>
                <p id="address"><i class="fas fa-map-marker-alt"></i> St Mark’s Church Hall
                  <br>
                  53 Rowfant Road SW17 7AP <br>Find us on Google Maps
                  <a class="btn btn-info btn-sm" id="GoogleButton"
                    href="https://www.google.co.uk/maps/place/53+Rowfant+Rd,+London+SW17+7AP/@51.4410497,
                    -0.1588499,17z/data=!3m1!4b1!4m5!3m4!1s0x487605db35e3ffff:0x30edda5b5dfed366!8m2!3d51.
                    4410464!4d-0.1566612"
                    target="_blank" role="button">here
                  </a>
                </p>
                <br>
                <span><i class="fas fa-phone"></i>07931 783 845</span>
                <br>
                <a id="footer-email" href="mailto:p2kidsclub@performance2.co.uk"><i class="far fa-envelope-open"></i> E-mail: p2kidsclub@performance2.co.uk</a>
                </p>
                
                <p>
                  <a href="#">Terms and Conditions</a>
                  <br>
                  <a href="#">Privacy Policy</a>
                </p>
              </div> <!-- col -->
              <div class="col-lg-6">
                <h4 class="footer-title">follow us</h4> 
                <div class="footer-social-icons"> 
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <a class="navbar-brand footer-logo" href="<?php echo site_url()?>">
                  <img id="logo" src="<?php echo get_bloginfo('template_url') ?>/img/P2-logo.png"/>
                </a>   
              </div>

            </div> <!-- /.row -->
          </div> <!-- /.info-section -->
          
          
        <hr class="featurette-divider">
          <div id="copyright-info"> 
            <p class="float-right"><a class="btn btn-primary btn-sm" href="#">Back to top</a></p>
            <p id="footer-copyright">&copy; 2019 Perfromance2, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </div> <!-- #copyright-info -->
        <!-- </footer> -->
        
      </div><!-- /.container marketing -->
    
      </footer>
    </main>

    <?php wp_footer(); ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>