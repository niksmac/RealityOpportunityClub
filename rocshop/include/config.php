<?php
//-----------------------------------------------------------------------------------
// PARAMETRI DI CONFIGURAZIONE GENERALE
//-----------------------------------------------------------------------------------
$emailAdmin = "support@ropclub.com";  // email admin where notices are sent
$urlWebSite = "www.ropclub.com"; //Website URL that is added to the bottom of emails sent from contact form

$headers_mail = "From: Company Name <support@ropclub.com>\nReply-to:support@ropclub.com";

########################################################################
/*#################		TEMPLATE MAIL		##########################*/
########################################################################
$str_contenuto_email = "
You are receiving this email because someone used the card of contacts on your website.

Here the personal information that we have contacted:

-------------------------------------------------------------
Name and Surname: {name}
E-mail: {mail}
IP Address: {ip}
-------------------------------------------------------------

This is the user's request:

-------------------------------------------------------------
Message: {corpo}
-------------------------------------------------------------

{url}";

?>