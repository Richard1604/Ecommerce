<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/contact.css">
	<title>Contact Us</title>

</head>

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                    <form action="process.php" method="post">

                            <label for="name">Your Name</label>
                            <input type="text" name="FName" placeholder="Full Name" class="form-control mb-2">
	                        
                            <label for="email">Email</label>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">

                            <label for="subject">Subject</label>
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            
                            <label for="message">Message</label>
                            <textarea name="msg" class="form-control mb-2" placeholder="Write a Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</body>
</html>