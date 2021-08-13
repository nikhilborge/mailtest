

<html>
    <body>
        <form method="post" action="<?php echo $_SERVEr['PHP_SELF']; ?>">
        Email: <input name="email" type="text"/> <br/><br/>
        Subject: <input name="subject" type="text"/><br/><br/>
        Message:<br/>
        <textarea name="message" rows="15" cols="40"></textarea><br/><br/>
        <input type="submit" type="submit"/>
        </form>
    </body>
</html>



<?php
if(isset($_POST['esubmit'])){
    $to ="nikhilborge3439.nb@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];;
    $header = "From : $from";

}

mail($to, $subject, $message, $headers);

echo "Mail Sent."

?>

