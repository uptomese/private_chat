<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;
use App\Session_jsg;
use App\Message;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat', function ($user) {
    return Auth::check();
});

// ย้ายไป socket
// Broadcast::channel('chat.{session}', function ($user, $session) { //mongodb ยังไม่ดีพอ
//     // if ($user->id == $session->user_id1 || $user->id == $session->user_id2) {
//     //     return true;
//     // }
//     // return false;
//     return Auth::check();
// });

//ย้ายไป socket
// Broadcast::channel('online', function ($user) {
//     return $user;
// });

//ย้ายไป socket
// Broadcast::channel('unRead', function ($user) {
//     return Auth::check();
// });

//ย้ายไป socket
// Broadcast::channel('toChat.{session}', function ($user, $session) {
//     // if ($user->id == $session->user_id1 || $user->id == $session->user_id2) {
//     //     return true;
//     // }
//     // return false;
//     return Auth::check();
// });


Broadcast::channel('room.{session}', function ($user, Session $session) {
    if ($user->id == $session->user_id1 || $user->id == $session->user_id2) {
        return true;
    }
    return false;
});
