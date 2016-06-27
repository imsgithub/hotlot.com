<?php
$table = 'content_pages';
$datas = DB::table($table)->where('language','=','ru');

foreach ($datas as $data) {
    $name = $data->data_name;
    $content[$name] = $data;
}

return[
    'calculate_delivery' => '',
    'choose_sity' => '',
    'calculate_price' => '',
    'how_it_work' => '',
    'articles_list' => '',


    'auto-perevozki_title' => $content['auto-perevozki']->title,
    'auto-perevozki_content' => $content['auto-perevozki']->content,
    'auto-perevozki_alias' => $content['auto-perevozki']->alias,
    'morskie-perevozki' => $content['morskie-perevozki']->title,
    'morskie-perevozki_content' => $content['morskie-perevozki']->content,
    'morskie-perevozki_alias' => $content['morskie-perevozki']->alias,
    'perevozka-sbornih-gruzov' => $content['perevozka-sbornih-gruzov']->title,
    'perevozka-sbornih-gruzov_content' => $content['perevozka-sbornih-gruzov']->content,
    'perevozka-sbornih-gruzov_alias' => $content['perevozka-sbornih-gruzov']->alias,
    'multimodalnie-perevozki' => $content['morskie-perevozki']->title,
    'multimodalnie-perevozki_content' => $content['morskie-perevozki']->content,
    'multimodalnie-perevozki_alias' => $content['morskie-perevozki']->alias,
    'brokerskie-uslugi' => $content['multimodalnie-perevozki']->title,
    'brokerskie-uslugi_content' => $content['multimodalnie-perevozki']->content,
    'brokerskie-uslugi_alias' => $content['multimodalnie-perevozki']->alias,
    'insurance' => $content['insurance']->title,
    'insurance_content' => $content['insurance']->content,
    'insurance_alias' => $content['insurance']->alias,
    'negabaritnie-gruzoperevozki' => $content['negabaritnie-gruzoperevozki']->title,
    'negabaritnie-gruzoperevozki_content' => $content['negabaritnie-gruzoperevozki']->content,
    'negabaritnie-gruzoperevozki_alias' => $content['negabaritnie-gruzoperevozki']->alias,
    'storage' => $content['storage']->title,
    'storage_content' => $content['storage']->content,
    'storage_alias' => $content['storage']->alias,
    'kalkulator-stoimosti-perevozki' => $content['kalkulator-stoimosti-perevozki']->title,
    'kalkulator-stoimosti-perevozki_content' => $content['kalkulator-stoimosti-perevozki']->content,
    'kalkulator-stoimosti-perevozki_alias' => $content['kalkulator-stoimosti-perevozki']->alias,
    'transportnaya-kompania' => $content['transportnaya-kompania']->title,
    'transportnaya-kompania_content' => $content['transportnaya-kompania']->content,
    'transportnaya-kompania_alias' => $content['transportnaya-kompania']->alias,
    'perevozki-iz-germanii' => $content['perevozki-iz-germanii']->title,
    'perevozki-iz-germanii_content' => $content['perevozki-iz-germanii']->content,
    'perevozki-iz-germanii_alias' => $content['perevozki-iz-germanii']->alias,
    'perevozki-iz-rossii' => $content['perevozki-iz-rossii']->title,
    'perevozki-iz-rossii_content' => $content['perevozki-iz-rossii']->content,
    'perevozki-iz-rossii_alias' => $content['perevozki-iz-rossii']->alias,
    'perevozki-iz-ukrainy' => $content['perevozki-iz-ukrainy']->title,
    'perevozki-iz-ukrainy_content' => $content['perevozki-iz-ukrainy']->content,
    'perevozki-iz-ukrainy_alias' => $content['perevozki-iz-ukrainy']->alias,
    'advantages' => $content['advantages']->title,
    'advantages_content' => $content['advantages']->content,
    'advantages_alias' => $content['advantages']->alias,
];