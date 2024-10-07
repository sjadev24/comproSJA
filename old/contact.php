<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $contact_title = $row['contact_title'];
    $contact_banner = $row['contact_banner'];
}
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $contact_map_iframe = $row['contact_map_iframe'];
    $contact_email = $row['contact_email'];
    $contact_phone = $row['contact_phone'];
    $contact_address = $row['contact_address'];
}
?>
<!-- FORM HUBUNGI
<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $contact_banner; ?>);">-->
    <!--<div class="inner">
        <h1><?php echo $contact_title; ?></h1>
    </div>-->
</div>

<div class="page" style="background: url(../sja/pxfuel2.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container" style="color:white;">
        <div class="row">            
            <!--<div class="col-md-12">
                <h3>Contact Form</h3>
                <div class="row cform">
                    <div class="col-md-8">
                        <div class="well well-sm">
                            
                            <?php
// After form submit checking everything for email sending
if(isset($_POST['form_contact']))
{
    $error_message = '';
    $success_message = '';
    $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
    foreach ($result as $row) 
    {
        $receive_email = $row['receive_email'];
        $receive_email_subject = $row['receive_email_subject'];
        $receive_email_thank_you_message = $row['receive_email_thank_you_message'];
    }

    $valid = 1;

    if(empty($_POST['visitor_name']))
    {
        $valid = 0;
        $error_message .= 'Please enter your name.\n';
    }

    if(empty($_POST['visitor_phone']))
    {
        $valid = 0;
        $error_message .= 'Please enter your phone number.\n';
    }


    if(empty($_POST['visitor_email']))
    {
        $valid = 0;
        $error_message .= 'Please enter your email address.\n';
    }
    else
    {
        // Email validation check
        if(!filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL))
        {
            $valid = 0;
            $error_message .= 'Please enter a valid email address.\n';
        }
    }

    if(empty($_POST['visitor_message']))
    {
        $valid = 0;
        $error_message .= 'Please enter your message.\n';
    }

    if($valid == 1)
    {
        
        $visitor_name = strip_tags($_POST['visitor_name']);
        $visitor_email = strip_tags($_POST['visitor_email']);
        $visitor_phone = strip_tags($_POST['visitor_phone']);
        $visitor_message = strip_tags($_POST['visitor_message']);

        // sending email
        $to_admin = $receive_email;
        $subject = $receive_email_subject;
        $message = '
<html><body>
<table>
<tr>
<td>Name</td>
<td>'.$visitor_name.'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$visitor_email.'</td>
</tr>
<tr>
<td>Phone</td>
<td>'.$visitor_phone.'</td>
</tr>
<tr>
<td>Comment</td>
<td>'.nl2br($visitor_message).'</td>
</tr>
</table>
</body></html>
';
        $headers = 'From: ' . $visitor_email . "\r\n" .
                   'Reply-To: ' . $visitor_email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion() . "\r\n" . 
                   "MIME-Version: 1.0\r\n" . 
                   "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Sending email to admin                  
        mail($to_admin, $subject, $message, $headers); 
        
        $success_message = $receive_email_thank_you_message;

    }
}
?>
                
                <?php
                if($error_message != '') {
                    echo "<script>alert('".$error_message."')</script>";
                }
                if($success_message != '') {
                    echo "<script>alert('".$success_message."')</script>";
                }
                ?>


                            <form action="" method="post">
                            <?php $csrf->echoInputField(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="visitor_name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="visitor_email" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Phone Number</label>
                                        <input type="text" class="form-control" name="visitor_phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <textarea name="visitor_message" class="form-control" rows="9" cols="25" placeholder="Enter message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary pull-right" name="form_contact">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>-->
                    <div class="col-md-4">
                        <legend style="color:white;"><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                        <address class="fa fa-home" data-aos="fade-up">
                            <?php echo nl2br($contact_address); ?>
                        </address>
                        <br>
                        <!--<address>
                            <strong>Phone:</strong><br>
                            <span style="color:white;"><?php echo $contact_phone; ?></span>
                        </address>-->
                        <address class="fa fa-envelope" data-aos="fade-up">
                            <strong>Email:</strong><br>
                            <a href="mailto:<?php echo $contact_email; ?>"><span style="color:white;"><?php echo $contact_email; ?></span></a>
                        </address>
                    </div>
                    <br>
                    <div class="col-md-4">
                    <legend style="color:white;"><span class="fa fa-phone"></span> Marketing Info </legend>
                            <strong class="fa fa-phone" style="color:white;" data-aos="fade-right"> 081915803535 -
                                    <a href="https://api.whatsapp.com/send?phone= +6281915803535&text=Hi...Dengan Karoseri Senang Jaya Abadi...?">
                                    <button style="vertical-align:center;height:35px;border-radius:5px;">Marketing 1</button></a>
                                    <img src="./assets/img/whatsapp.png" style="width: 30px;">
                            </strong><br><br>
                            <strong class="fa fa-phone" style="color:white;" data-aos="fade-right"> 085691412627 -
                                    <a href="https://api.whatsapp.com/send?phone= +6285691412627&text=Hi...Dengan Karoseri Senang Jaya Abadi...?">
                                    <button style="vertical-align:center;height:35px;border-radius:5px;">Marketing 2</button></a>
                                    <img src="./assets/img/whatsapp.png" style="width: 30px;">
                            </strong><br><br>
                            <strong class="fa fa-phone" style="color:white;" data-aos="fade-right"> 081818168119 -
                                    <a href="https://api.whatsapp.com/send?phone= +6281818168119&text=Hi...Dengan Karoseri Senang Jaya Abadi...?">
                                    <button style="vertical-align:center;height:35px;border-radius:5px;">Marketing 3</button></a>
                                    <img src="./assets/img/whatsapp.png" style="width: 30px;">
                            </strong><br><br>
                            <strong class="fa fa-phone" style="color:white;" data-aos="fade-right"> 081993118977 -
                                    <a href="https://api.whatsapp.com/send?phone= +6281993118977&text=Hi...Dengan Karoseri Senang Jaya Abadi...?">
                                    <button style="vertical-align:center;height:35px;border-radius:5px;">Marketing 4</button></a>
                                    <img src="./assets/img/whatsapp.png" style="width: 30px;">
                            </strong><br><br>
                            <strong class="fa fa-phone" style="color:white;" data-aos="fade-right"> 081265533700 -
                                    <a href="https://api.whatsapp.com/send?phone= +6281265533700&text=Hi...Dengan Karoseri Senang Jaya Abadi...?">
                                    <button style="vertical-align:center;height:35px;border-radius:5px;">Marketing 5</button></a> 
                                    <img src="./assets/img/whatsapp.png" style="width: 30px;">
                            </strong>
                    </div>
                </div>
                <br>
                <center><h3><legend style="color:white;">Find Us On Maps</legend></h3></center>
                <div data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000">
                <?php echo $contact_map_iframe; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false
        });
    </script>
<?php require_once('footer.php'); ?>