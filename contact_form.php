<!-- Content Modal -->

<?php
	$name = "";
	$email = "";
	$comment = "";
    $links = "";
    	
	$HasErrors="no";

    $NameErr = $EmailErr = $ComErr = "";
	
	?>
	
	<!-- clears form if cancel button pushed -->
	<script>

		$(document).ready(function() {
			$("#reset").click(function() {
				location.href = ""; 
			});
		})

	</script>
	
	
	<?php
	
		if(isset($_POST['submit'])) {
			
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
            
            
        // php mailer function
        function smtpmailer($to, $email, $name, $subject, $body) { 
            require_once('/var/www/PHPMailer/PHPMailerAutoload.php');
            define('GUSER', 'nzdzeni@gmail.com'); // GMail username
            define('GPWD', 'pqzmdthhizqcsopg'); //Gmail password. it would be a good idea to use an app specicfic password here

            $mail = new PHPMailer();  // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true;  // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465; 
            $mail->Username = GUSER;  
            $mail->Password = GPWD;  
            $mail->AddReplyTo($email, $name);
            $mail->SetFrom($email, $name);
            $mail->Subject = $subject;
            //$mail->isHTML(true);
            $mail->Body = $body;
            $mail->AddAddress($to);
            $mail ->isHTML(true);
            
            if(!$mail->Send()) {
                //$error = 'Mail error: '.$mail->ErrorInfo; 
                return false;
            } else {
                return true;
            }
        }
            
        // end php mailer function
            
            
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// get input from form and sanitise it
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$comment = test_input($_POST["comment"]);
        $links = test_input($_POST["links"]);
        
        		
		// Check that name has letters / spaces only
		if (!preg_match("/^[A-Za-z\s]{1,50}$/", $name))
		{
			$NameErr = "Name should only contain letters and spaces";
			$HasErrors = "yes";
		}
		
		// Check email is valid (works more reliably than only html5 email type)
		
		if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
		{
			$EmailErr = "Please enter a valid email address";
			$HasErrors = "yes";			
		}
        
		// Check that comment does not have at symbol etc
            
        // The Regular Expression filter
            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

                
		// Check if there is a url in the text
            if(preg_match($reg_exUrl, $comment, $url))
		{
			$ComErr = "<p class='error'>Sorry - your comment can't include any hyperlinks as 99.9% of comments which include hyperlinks are spam.  If you would like to suggest a link to a poetry generator, please use the 'links' field below.</p>";
			$HasErrors = "yes";
		}
            
        // Check for non-roman characters
        
            if(preg_match('/[А-Яа-яЁё]/u', $comment))
                
            {
                
            $ComErr = "<p class='error'>Sorry - this form does not accept comments which contain Russian characters.  Blame spammers for this restriction.</p>";
            $HasErrors = "yes";
            }
            
		
		if ($HasErrors == "no")
        {
		
        // Show user success page
        header('Location: contact_success.php');
            
		// Send Email Message
		
		$to = "nzdzeni@gmail.com";
		$subject = "Poetry Project Query";
		
		$body = 'Name:'.$name.'<br /><br />Email:'.$email.'<br /><br >Comment: '.$comment.'<br /><br />Suggested Links:'.$links;
		
        // calls function to send email
        smtpmailer($to, $from, $from_name, $subject, $body);
		
		// reset fields so they are blank the next time the contact form is clicked on.
		$name = "";
		$email = "";
		$comment = "";	
        $links = "";
        		
		}
		}
			
		}
?>

				
				<form method="post">
				
					
					<p>
						<b>Name<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $NameErr; ?></span><br />
						<input type="text" name="name" size="25" value="<?php echo $name; ?>" required />
					</p>
					
					<p>
						<b>Email<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $EmailErr; ?></span><br />
						<input type="email" name="email" size="25" value="<?php echo $email; ?>" required />
					</p>
                    
					<p>
						Comment: <span class="error">*</span>:<br /><?php echo $ComErr ?> <textarea class="comment" name="comment" required><?php echo $comment; ?></textarea>
					</p>
                    
                    <p>
                        Suggest a link / links:<br /><textarea class="links" name="links"><?php echo $links; ?></textarea>
                    </p>
					
					
					<button class="btn btn-success" type="submit" name="submit">Send</button>
					
					<button class="btn btn-warning" data-id="reset">Cancel</button>
				
				</form>
			
