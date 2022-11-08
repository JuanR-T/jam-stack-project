<?php

$indexData = file_get_contents('https://api.jikan.moe/v4/anime?q=shingeki');
$indexData = json_decode($indexData)->data;
