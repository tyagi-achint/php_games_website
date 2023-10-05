<!DOCTYPE html>
<html lang="en">
<?php include 'partials/_server.php'?>

<?php include 'partials/_head.php'?>
<link rel='stylesheet' href='partials/_style.css' />

<body>
    <?php include 'partials/_navbar.php'?>

    <!-- Feedback Form Submit -->
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            
            $name = $_POST['name'];
            $message = $_POST['subject'];
            $rating = $_POST['group'];
            $email = $_POST['email'];
            date_default_timezone_set('Asia/Kolkata');
$currentTime=date('jS F Y h:i A');
              
            $Fedb_sql = "INSERT INTO `feedback` ( `name`, `email`, `message`, `rating`, `time`) VALUES ( '$name', '$email', '$message', '$rating', '$currentTime');";


            $Fedb_Result = mysqli_query($con,$Fedb_sql);
            if($Fedb_Result){
        $showAlert = true;
        if($showAlert){
            echo"
            <div id='threadAlert'>
            <span id='closeAlert'>&times;</span>
            <p><b>Success!  </b>Your Feedback has been sent!  Thankyou for your Feedback. </p>
        </div>";
        }
        echo"<script>
        let closeAlert = document.getElementById('closeAlert');
        let threadAlert = document.getElementById('threadAlert');
        closeAlert.onclick = function() {
            threadAlert.style.display = 'none';
        }
        </script>";
            }

            
        }        
        ?>


    <div id="feedback">
        <div class="col">
            <img src="images/message.webp" alt="Message" />
        </div>
        <div class="col">
            <h2>Review us...</h2>
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
                <input type="text" id="name" name="name" placeholder="Name*" required /><br />
                <input type="email" id="email" name="email" placeholder="Email*" required /><br />

                <div id="rating">
                    <input value="happy" type="radio" class="radio" id="Happy" name="group" required />
                    <input value="normal" type="radio" class="radio" id="Normal" name="group" />
                    <input value="angry" type="radio" class="radio" id="Angry" name="group" />

                    <br />
                    <label for="Happy"><span id="happy" class="material-symbols-outlined">
                            sentiment_very_satisfied
                        </span></label>
                    <label for="Normal"><span id="normal" class="material-symbols-outlined">
                            sentiment_neutral
                        </span></label>

                    <label for="Angry"><span id="angry" class="material-symbols-outlined">
                            sentiment_extremely_dissatisfied
                        </span></label>
                </div>
                <br />
                <textarea id="subject" name="subject" placeholder="Message*" required></textarea>

                <br />
                <input id="submit" type="submit" value="Submit" required />
                <input id="reset" type="reset" value="Reset" required />
            </form>
        </div>
    </div>

    <?php include 'partials/_footer.php'?>

</body>

</html>