<?php
$scoreboard = [];
$team_score = [];
$player_score = [];

while (true) {
    $str = readline();

    if ($str === 'Result') {
        break;
    }

    $input = explode('|', $str);
    $first = str_split($input[0]);
    $second = str_split($input[1]);
    $first_temp = '';
    $second_temp = '';
    $player = '';
    $team = '';
    $points = intval($input[2]);

    for ($i = 0; $i < count($first); $i++) {
        if (ctype_alpha($first[$i])) {
            $first_temp .= $first[$i];
        }
    }

    for ($i = 0; $i < count($second); $i++) {
        if (ctype_alpha($second[$i])) {
            $second_temp .= $second[$i];
        }
    }


    if ($first_temp === strtoupper($first_temp)) {
        $team = $first_temp;
        $player = $second_temp;
    } else {
        $team = $second_temp;
        $player = $first_temp;
    }

    if (!array_key_exists($team, $scoreboard)) {
        $scoreboard[$team] = [];
    }

    $scoreboard[$team][$player] = $points;


}

foreach ($scoreboard as $team => $value) {
    $sum = array_sum($value);
    $team_score[$team] = $sum;
}
arsort($team_score);

foreach ($scoreboard as $team => $value) {
    arsort($value);

    foreach ($value as $player => $points) {
        $player_score[$team] = $player;
        break;
    }
}

foreach ($team_score as $team => $score) {
    echo $team . ' => ' . $score . PHP_EOL;
    foreach ($player_score as $team_ => $player){
        if ($team === $team_){
            echo "Most points scored by $player".PHP_EOL;
            break;
        }
    }
}