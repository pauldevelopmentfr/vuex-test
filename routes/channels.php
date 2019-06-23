<?php

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

Broadcast::channel('newBlock', function () {
    return true;
});

Broadcast::channel('blockClicked', function () {
    return true;
});

Broadcast::channel('leaderboardRefreshed', function () {
    return true;
});
