<?php
$connect = mysqli_connect("localhost", "root", "", "shkola");
if(mysqli_connect_errno())
{
	echo 'Failed to connect to database'.mysqli_connect_error();
}

$query = "";
$filename = "https://sch1770.mskobr.ru/data/getNewsFeeds/10.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach($array as $row) {
    $convertdate = date('Y-m-d', strtotime($row["publish_date"]));

    $convertname = strip_tags($row["name"]);
    $convertname1 = html_entity_decode($convertname);

    $convertcontent = $row["anons"];
    $convertcontent .= "<br><br>";
    $convertcontent .= $row["content"];
    $convertcontent1 = strip_tags($convertcontent, '<br><p><img><iframe><table><th><tr><td>');

    mysqli_set_charset( $connect, 'utf8' );
    $query .= "INSERT IGNORE INTO `news`(`id`, `nw_title`, `nw_date`, `nw_text`) VALUES ('".$row["id"]."', '".$convertname1."', '".$convertdate."', '".$convertcontent1."'); ";
}

if(mysqli_multi_query($connect, $query)) {
    header('Location: /admin/news/');
}

?>
