<?php
include('connect.php');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$std=$_POST['std'];


if($password!=$cpassword){
    echo '<script>
    alert("Password do not match");
    window.location="../voter/vsignup.php";
    </script>';
}


else{
    $hash= password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO `userdata` (username,email,password,standard,status,votes) values('$username','$email','$hash','voter',0,0)";
    $sql2="INSERT INTO `cdetails` (username,email,password,standard,status,votes) values('$username','$email','$hash','voter',0,0)";

    $result=mysqli_query($con,$sql);
    $result=mysqli_query($con,$sql2);

    if($result){

        require '../PHPMailer-5.2-stable/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'gulshankumar060102@gmail.com';                 // SMTP username
        $mail->Password = 'qebbjioaujeglluc';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        
        $mail->setFrom('gulshankumar060102@gmail.com', 'Gulshan');
        $mail->addAddress($_POST['email'], $_POST['email']);     // Add a recipient
        // $mail->addAddress('ellen@example.com');              
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        
        //$mail->addAttachment('/var/tmp/file.tar.gz');         Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');     Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Hello!';
        $mail->Body    = 'Welcome to the  <b>Voting Portal</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            
            echo '<script>
        alert("Registeration Successful. Check your E-mail!!");
        window.location="../candidate/clogin.php";
        </script>';

        }
        


        
    }

}





?>