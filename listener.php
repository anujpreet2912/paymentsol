<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 require "PHPMailer/PHPMailer.php";
 require "PHPMailer/Exception.php";



  if($_SERVER['REQUEST_METHOD'] != 'POST') {
     header(string:'LOCATION: main.php');
      exit();
  }
   $ch=curl_init();
    curl_setopt($ch, option: CURLOPT_URL, value: ' https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
    curl_setopt($ch, OPTION: CURLOPT_RETURNTRANSFER,value: 1);
    curl_setopt($ch, OPTION:CURLOPT_SSL_VERIFYHOST, value: 0);
    curl_setopt($ch, OPTION:CURLOPT_SSL_VERIFYPEER, value: 0);
    curl_setopt($ch, OPTION:CURLOPT_POST, value: 1);
    curl_setopt($ch, VALUE: CURLOPT_POSTFIELDS, value: 'cmd=_notify-validate&' .http_build_query($_POST));
    $response= curl_exec($ch);
    curl_close($ch);

    if($respone=="VERIFIED" && $_POST['receiver_email'] == anuj55455@gmail.com)  {
       $name= $_POST['first_name']. " " . $_POST['last_name'];
       $price= $_POST['mc_gross'];
       $currency = $_POST['mc_currency'];
       $item= $_POST['item_number'];
       $cEmail = $_POST['payer_email'];
       $paymentStatus=$_POST['payment_status'];

       if($item == "WordpressPlugin" && $currency == "USD" && $paymentStatus== "Completed" && $price == 99) {
       $mail=new PHPMailer();
       $mail=>setForm(address:"anuj55455@gmail.com" , name="Purchase Details");
       $mail=>addAttachment(path: "attachment/wordpress-plugin.zip", name ="Wordpress Plugin");
       $mail=>addAddress($cEmail,$name);
       $mail=>isHTML( isHtml:true);
       $mail=> Subject= "Your Purchase Details";
       $mail=>body= "
         Hi! <br><br>
         Thank You for Purchase.In the aattachment you will find my amazing Wordpress Plugin.<br>
         Kind Regards 
         Anujpreet Singh
       ";
       $mail=>send();
       } 
       

    }
      
 
?>