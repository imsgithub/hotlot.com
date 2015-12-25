<?php
namespace Evth;
use Mail;
use User;
use View;
use Confirmation;
class ConfirmationMailer {
  public static function sayHi(){
    return 'Hi!';
  }
  public static function randomString($length = 30) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  public static function send(User $user){
    if (!$user->confirmation) {
      $confirmation = new Confirmation([
        'content'=> ConfirmationMailer::randomString()
      ]);
      $user->confirmation()->save($confirmation);
    } else {
      $confirmation = $user->confirmation;
      $confirmation->content = ConfirmationMailer::randomString();
      $confirmation->save();
    }
    $data = [
      'email'=>$user->email,
      'confirmation_link'=>url('confirmate/'.$confirmation->content),
      'url'=>url(),
    ];
    Mail::send('emails.confirmation', $data, function($message) use ($user){
      $message->to($user->email)->subject('Подтверждение регистрации на сайте rate-and-go.com');
    });    
  }
}
