<?php

if(empty($_GET["type"])) {
    echo "타입을 선택해주세요.";
    exit();
}

$type = $_GET["type"];

$types = [
    "wwww",
    "promotions",
    "search",
    "categories",
    "vendors"
];

// 사이트맵 날짜 업데이트
function updateLastmod($type, $types)
{   
    $key = (int)array_search($type, $types);

    $sitemap = simplexml_load_file("./sitemap.xml");
    $sitemap->sitemap[$key]->lastmod = date("Y-m-d");
    $sitemap->asXML('./sitemap.xml');
}

$xml = simplexml_load_file("./base_sitemap.xml");

switch ($type) {
    case 'promotions': // 기획전, 자동으로 가져와 URL 생성 / 주기는 하루
    for($i = 0; $i < 100; $i++){ 
        $url = $xml->addChild("url");
        $url->addChild("loc", "https://google.com");
    }
    $xml->asXML("./newSitemap.xml");

    break;
    case 'search':
    // DB에서 검색결과를 가져와 생성

    break;
    case 'categories':
    // DB에서 카테고리를 가져와 생성

    break;
    case 'vendors':
    // 업채 갱신

    break;
}

updateLastmod($type, $types);