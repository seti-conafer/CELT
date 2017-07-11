<?php
require_once 'mailchimp/src/Mandrill.php';
$mandrill = new Mandrill('QqiE4UQVpHfIBS08tV6bJA');
 
$message = new stdClass();
/* $message = array(
        'html' => '<p>Example HTML content</p>',
        'text' => 'Example text content',
        'subject' => 'any message',
        'from_email' => 'sourabh.akash0123@gmail.com',
        'from_name' => 'Example Name',
        'to' => array(
            array(
                'email' => 'sourabh.akash0123@gmail.com',
                'name' => 'Recipient Name',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'sourabh.akash0123@gmail.com'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => 'message.bcc_parinayks@gmail.com',
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
        'global_merge_vars' => array(
            array(
                'name' => 'merge1',
                'content' => 'merge1 content'
            )
        ),
        'merge_vars' => array(
            array(
                'rcpt' => 'ssamal32@gmail.com',
                'vars' => array(
                    array(
                        'name' => 'merge2',
                        'content' => 'merge2 content'
                    )
                )
            )
        ),
        'tags' => array('password-resets'),
        'subaccount' => 'customer-123',
        'google_analytics_domains' => array('example.com'),
        'google_analytics_campaign' => 'message.from_email@example.com',
        'metadata' => array('website' => 'www.celtindia.org'),
        'recipient_metadata' => array(
            array(
                'rcpt' => 'recipient.email@example.com',
                'values' => array('user_id' => 123456)
            )
        ),
        
    );
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = 'example send_at';
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123abc123
            )
    
    )
    
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}*/

$message->html = "<html><body background="http://www.pulsarwallpapers.com/data/media/3/Alien%20Ink%202560X1600%20Abstract%20Background.jpg">";
$message->html .= "<img src='https://lh3.googleusercontent.com/2DrzXLnjmXn7pQvabHTMPDvJfTFZyEow64idOFXHlfCFUusgmwPajPVmDaRHrezJnSqLgA=s85' alt='PHP Gang' />";
$message->html .= "<center>Dear ".$email.",<br /><br />We thank you for registering at CELT <br></center><br>";
$message->html .= "<center><a href=".$token." style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" >Click Me </a></center>
    <br>";
    $message->html .= " <I>CELT India 2K16<br>KIIT University :)</I>"
 
 $message->html .= "</body></html>";
$message->text = "text body";
$message->subject = "email subject";
$message->from_email = "sourabh@celtindia.org";
$message->from_name  = "From Name";
$message->to = array(array("email" => "sourabh@celtindia.org"));
$message->track_opens = true;

$response = $mandrill->messages->send($message);


?>