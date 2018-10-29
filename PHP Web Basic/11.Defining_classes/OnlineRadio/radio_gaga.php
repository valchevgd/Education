<?php

spl_autoload_register();

$n = intval(readline());

$playlist = 0;
$count_of_songs = 0;

while ($n-- > 0) {
    $tokens = (explode(';', readline()));

    $artist = $tokens[0];
    $song_name = $tokens[1];
    $song_length = $tokens[2];

    try {
        $song = new Song($artist, $song_name, $song_length);
        echo 'Song added.'.PHP_EOL;
        $playlist += $song->getLength();
        $count_of_songs++;
    } catch (InvalidSongException $exception) {
        echo $exception->getMessage().PHP_EOL;
        continue;
    }
}

$hours = $playlist / 3600;
$minutes = ($playlist % 3600) / 60;
$seconds = ($playlist % 3600) % 60;

echo 'Songs added: '.$count_of_songs.PHP_EOL;
echo sprintf("Playlist length: %dh %02dm %02ds", $hours, $minutes, $seconds);