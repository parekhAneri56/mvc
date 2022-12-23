<?php 
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
        // insert or store data in contact us
        if(isset($_POST["addcontact"]))
        {

            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';  

 // email sending packages of php mailer
 $mail = new PHPMailer(true);

 try {
//Server settings
$mail->SMTPDebug = true;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'parekhaneri56@gmail.com';                     //SMTP username
$mail->Password   = 'wnjffxfffcgtuhad';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress('parekhaneri56@gmail.com', 'Aneri Parekh');     //Add a recipient
//$mail->addAddress('ellen@example.com');               //Name is optional

// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Contact us Enquiry customers details';
$mail->Body    = "<img src='https://email.uplers.com/blog/wp-content/uploads/2022/07/1-Signatures-blog.gif'>"."<p><b>Name :</b>".$_POST['name']."</p>"."<p><b>Email :</b>".$_POST['email']."</p>"."</p>"."<p><b>Subject :</b>".$_POST['subject']."</p>"."<p><b>Message :</b>".$_POST['message']."</p>"."<p><b>Company address :</b>"."Tops technology pvt ltd near jalaramplot-2<br> near indira circle above sbi bank<br> 1st floor Rajkot-36005"."</p>"."<p><b>Email us :</b>"."<a href='mailto:info@tops-int.com'>info@tops-int.com</a>"."</p>";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();

echo "<script>
alert('Thanks for contact with us get your email will contact with you Soon!')

window.location='Contact-us';
</script>";
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

       date_default_timezone_set("Asia/calcutta");
       $nm=$_POST["name"];
       $em=$_POST["email"];
       $sub=$_POST["subject"];
       $msg=$_POST["message"];
       $datetime=date("d/m/Y H:i:s a");
       $data=array("txt_name"=>$nm,"txt_email"=>$em,"txt_subject"=>$sub,"txt_message"=>$msg,"added_date_time"=>$datetime);
       $chk=$this->insertalldata('tbl_contact',$data);
       // if($chk)
       // {
       //     echo "<script>
       //     alert('Thanks for contact with us we will topuch with you soon')
       //     window.location='contact-us';
       //     </script>";
       // }
       // else 
       // {
       //     echo "<script>
       //     alert('Something went wrong please contact with our admin')
       //     window.location='feedback-us';
       //     </script>";

       // }
   }

   // insert or store data in register or create account of customer
   if(isset($_POST["reg"]))
   {
       require 'PHPMailer/Exception.php';
       require 'PHPMailer/PHPMailer.php';
       require 'PHPMailer/SMTP.php';  

// email sending packages of php mailer
$mail = new PHPMailer(true);

 try {
//Server settings
$mail->SMTPDebug = true;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'parekhaneri56@gmail.com';                     //SMTP username
$mail->Password   = 'wnjffxfffcgtuhad';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//Recipients
$mail->setFrom($_POST["email"], 'Mailer');
$mail->addAddress('parekhaneri56@gmail.com', 'Aneri Parekh');     //Add a recipient
//$mail->addAddress('ellen@example.com');               //Name is optional

// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Thanks Note Message for Creating account with MVC app';
$mail->Body    = "<img src='https://media.tenor.com/9a0QBLnMWaEAAAAM/cute-bear.gif'>"."<p><b>Thanks for creating account with us  :</b>"."1. Thanks for signing up/ joining us

This is the quintessential Thank you email. Whatever you do, make sure you set this one up before any other type.<br>

When someone registers for your product/service, they engage with your business.
<br>
This is why you should be there on Day 1 to thank them for signing up or joining you.
<br>
Use this email as an opportunity to say something that does not require further action from them.
<br>
At the beginning of the joint journey with your customers, make sure that you thank them for being there. So, this first email also works as a welcome email"."</p>";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();

//echo "<script>
//alert('Thanks for contact with us get your email will contact with you Soon!')

//window.location='Contact-us';
//</script>";
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

            date_default_timezone_set("Asia/calcutta");
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $sub=$_POST["subject"];
            $msg=$_POST["message"];
            $datetime=date("d/m/Y H:i:s a");
            $data=array("txt_name"=>$nm,"txt_email"=>$em,"txt_subject"=>$sub,"txt_message"=>$msg,"added_date_time"=>$datetime);
            $chk=$this->insertalldata('tbl_contact',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for contact with us we will topuch with you soon')
                window.location='Contact-us';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Something went wrong please contact with our admin')
                window.location='Contact-us';
                </script>";

            }
        }
       
 // insert or store data in register or create account of customer
 if(isset($_POST["reg"]))
 {
     date_default_timezone_set("Asia/calcutta");
     $em=$_POST["email"];
     $pass=base64_encode($_POST["pass"]);
     $cpass=base64_encode($_POST["cpass"]);
     $dob=$_POST["dob"];
     $fnm=$_POST["fname"];
     $lnm=$_POST["lname"];
     $g=$_POST["gender"];
     $h=implode(",",$_POST["chk"]);
     // upload phpoto
     $tmp_name=$_FILES["img"]["tmp_name"]; 
     $path="uploads/customers/".$_FILES["img"]["name"];
     move_uploaded_file($tmp_name,$path);  
     $phone=$_POST["phone"];
     $add=$_POST["address"];
     $st=$_POST["state"];
     $ct=$_POST["city"];
     $datetime=date("d/m/Y H:i:s a");
     
     if($pass==$cpass)
     {
    
     $data=array("email"=>$em,"password"=>$pass,"dob"=>$dob,"firstname"=>$fnm,"lastname"=>$lnm,"gender"=>$g,"hobby"=>$h,"photo"=>$path,"phone"=>$phone,"address"=>$add,"state_id"=>$st,"city_id"=>$ct,"date_time"=>$datetime);
     $chk=$this->insertalldata('tbl_register',$data);
          if($chk)
          {
         echo "<script>
         alert('Thanks for create Your account  with us!')
         window.location='login-us';
         </script>";
          }
     }
     else 
     {
         echo "<script>
         alert('Your password and confirmed password does not macthed try again')
         window.location='Create-account';
         </script>";

     }
 }
        //fetch a state in register form dropdown
        $state=$this->selectalldata('tbl_state'); 
         //fetch a city in register form dropdown
         $city=$this->selectalldata('tbl_city'); 
       
        //load view or templated 
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch ($_SERVER["PATH_INFO"])
             {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("Carousel.php");
                    require_once("Content.php");
                    require_once("footer.php");
                    break;

                    case '/login-us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("footer.php");
                        break;

                        case '/Create-account':
                            require_once("index.php");
                            require_once("header.php");
                            require_once("navbar.php");
                            require_once("register.php");
                            require_once("footer.php");
                            break;

                            case '/forgetpassword':
                                require_once("index.php");
                                require_once("header.php");
                                require_once("navbar.php");
                                require_once("forgetpassword.php");
                                require_once("footer.php");
                                break;
        
                         case '/Contact-us':
                                require_once("index.php");
                                require_once("header.php");
                                require_once("navbar.php");
                                require_once("contact.php");
                                require_once("footer.php");
                                break;

                                case '/About-us':
                                    require_once("index.php");
                                    require_once("header.php");
                                    require_once("navbar.php");
                                    require_once("about.php");
                                    require_once("footer.php");
                                    break;

                                    case '/Job-list':
                                        require_once("index.php");
                                        require_once("header.php");
                                        require_once("navbar.php");
                                        require_once("job_list.php");
                                        require_once("footer.php");
                                        break;

                                        case '/Job-detail':
                                            require_once("index.php");
                                            require_once("header.php");
                                            require_once("navbar.php");
                                            require_once("job-detail.php");
                                            require_once("footer.php");
                                            break;

                                            case '/Job-category':
                                                require_once("index.php");
                                                require_once("header.php");
                                                require_once("navbar.php");
                                                require_once("job-category.php");
                                                require_once("footer.php");
                                                break;

                                                case '/Testimonial':
                                                    require_once("index.php");
                                                    require_once("header.php");
                                                    require_once("navbar.php");
                                                    require_once("testimonial.php");
                                                    require_once("footer.php");
                                                    break;
                default:
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("404.php");
                    break;
            }
        } 
    }
}
$obj=new controller;
?>