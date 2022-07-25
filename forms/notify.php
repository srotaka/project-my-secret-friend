<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'srotaka@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = "Suscriptor";
  $contact->from_email = $_POST['email'];
  $contact->subject ="Solicitud de Notificación";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

  //$contact->smtp = array(
  //  'host' => 'smtp-relay.sendinblue.com',
  //  'username' => 'inktrance@gmail.com',
  //  'password' => 'pxsmtpsib-551551c786343f89973a3ee9d9c36deec6b0de9e3e81c92ebf7632ec9a42d535-JCjHxYqAGFS7UaEMass',
  //  'port' => '587'
  //);

  $contact->add_message( $_POST['name'], 'De');
  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();
?>