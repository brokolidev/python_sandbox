<?php 

$genres = ["classic", "pop", "classic", "classic", "pop"];
$plays = [500, 600, 150, 800, 2500];

// 1. 속한 노래의 총 카운트가 높은 장르부터 수록
$counter = [];

foreach($genres as $key => $value):
    if(!array_key_exists($value, $counter)){
        $counter[$value] = $plays[$key];
    } else {
        $counter[$value] += $plays[$key];
    }
endforeach;

arsort($counter); // 2. 높은 장르가 무엇인지 확인

// 3. 높은 장르부터 추출하기 위해 두 배열이 합산된 토탈 배열을 생성

$total = [];

foreach($genres as $key => $value):
    $total[$value][] = [$plays[$key], $key];
endforeach;

$result = [];

// 4. 카운팅 수가 높은 배열부터 2개씩만 돌아가며 ID를 추출
foreach($counter as $genre => $count):
    arsort($total[$genre]);
    foreach(array_slice($total[$genre], 0, 2) as $temp):
        $result[] = $temp[1];
    endforeach;
endforeach;

var_dump($result);