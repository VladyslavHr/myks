<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



Artisan::command('testt', function() {
    echo 'test';
    \Mail::send('emails.contact.incoming', [
        'email' => 'vlasd@asd.com',
        'name' => 'vlasdsa',
        'text' => 'asdsadasdasd',
    ],
    function ($message) {
    $message->from(env('MAIL_USERNAME', 'info@myks.cz'), env('APP_NAME'));
    $message->to('info@myks.cz', 'myks.cz');
    // $message->bcc('mykheicheva@gmail.com', 'myks.cz');
    $message->bcc('vladyslavhrebennikov@gmail.com', 'myks.cz');
    $message->replyTo('vlasd@asd.com', 'vlasdsa');
    $message->subject('Odpoved´ z kontaktního formulaře');
});
});
