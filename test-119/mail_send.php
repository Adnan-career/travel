<?php

// function generateRandomString($length = 10) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }


 require 'vendor/autoload.php';
  use \Mailjet\Resources;

function send_email_($email,$fname,$id){
  $mj = new \Mailjet\Client('6f9432fc2cfb6f947346af7036452fbc','34b38e6286f31bbbde89cb0aff81e61f',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "adnanmirza9688@gmail.com",
          'Name' => "Adnan"
        ],
        'To' => [
          [
            'Email' => $email,
            'Name' => $fname
          ]
        ],
        'Subject' => "Mail from Local host.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' =>  "<h3>Dear User Please Confirm this Message By clicking on this button <a href='http://localhost/php/Myproject/confirm_email.php?email=".$email."'>Travelers</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());

}
?>
