<?php


try{
  $connect = new PDO('mysql:host=localhost; dbname=lecentsept;charset=utf8', 'root', 'root');
} catch ( Exception $e  ){
  die('Erreur : '.$e->POSTMessage() );
}
$update_title = 'UPDATE `Title` SET `title` =:title ';
$update_content = 'UPDATE `Content` SET `text`=:text ';


if(isset($_POST["title1"])){
  $title1 = $_POST["title1"];
  $update_title1 = $update_title.'WHERE id=1';
  $req_title = $connect->prepare($update_title1);
  $req_title->bindParam(':title', $title1, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title2"])){
  $title2 = $_POST["title2"];
  $update_title2 = $update_title.'WHERE id=2';
  $req_title = $connect->prepare($update_title2);
  $req_title->bindParam(':title', $title2, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title3"])){
  $title3 = $_POST["title3"];
  $update_title3 = $update_title.'WHERE id=3';
  $req_title = $connect->prepare($update_title3);
  $req_title->bindParam(':title', $title3, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title4"])){
  $title4 = $_POST["title4"];
  $update_title4 = $update_title.'WHERE id=4';
  $req_title = $connect->prepare($update_title4);
  $req_title->bindParam(':title', $title4, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title5"])){
  $title5 = $_POST["title5"];
  $update_title5 = $update_title.'WHERE id=5';
  $req_title = $connect->prepare($update_title5);
  $req_title->bindParam(':title', $title5, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title6"])){
  $title6 = $_POST["title6"];
  $update_title6 = $update_title.'WHERE id=6';
  $req_title = $connect->prepare($update_title6);
  $req_title->bindParam(':title', $title6, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title7"])){
  $title7 = $_POST["title7"];
  $update_title7 = $update_title.'WHERE id=7';
  $req_title = $connect->prepare($update_title7);
  $req_title->bindParam(':title', $title7, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title8"])){
  $title8 = $_POST["title8"];
  $update_title8 = $update_title.'WHERE id=8';
  $req_title = $connect->prepare($update_title8);
  $req_title->bindParam(':title', $title8, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title9"])){
  $title9 = $_POST["title9"];
  $update_title9 = $update_title.'WHERE id=9';
  $req_title = $connect->prepare($update_title9);
  $req_title->bindParam(':title', $title9, PDO::PARAM_STR);
  $req_title->execute();
}

if(isset($_POST["title10"])){
  $title10 = $_POST["title10"];
  $update_title10 = $update_title.'WHERE id=10';
  $req_title = $connect->prepare($update_title10);
  $req_title->bindParam(':title', $title10, PDO::PARAM_STR);
  $req_title->execute();

}

if(isset($_POST["title11"])){
  $title11 = $_POST["title11"];
  $update_title11 = $update_title.'WHERE id=11';
  $req_title = $connect->prepare($update_title11);
  $req_title->bindParam(':title', $title11, PDO::PARAM_STR);
  $req_title->execute();

}

if(isset($_POST["desc"])){
  $desc = $_POST["desc"];
  $update_desc = $update_content.'WHERE id=1';
  $req_desc = $connect->prepare($update_desc);
  $req_desc->bindParam(':text', $desc, PDO::PARAM_STR);
  $req_desc->execute();
}

if(isset($_POST['text1'])){
  $text1 = $_POST['text1'];
  $update_content2 = $update_content.'WHERE id=2';
  $req_content = $connect->prepare($update_content2);
  $req_content->bindParam(':text', $text1, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text2'])){
  $text2 = $_POST['text2'];
  $update_content3 = $update_content.'WHERE id=3';
  $req_content = $connect->prepare($update_content3);
  $req_content->bindParam(':text', $text2, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text3'])){
  $text3 = $_POST['text3'];
  $update_content4 = $update_content.'WHERE id=4';
  $req_content = $connect->prepare($update_content4);
  $req_content->bindParam(':text', $text3, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text4'])){
  $text4 = $_POST['text4'];
  $update_content5 = $update_content.'WHERE id=5';
  $req_content = $connect->prepare($update_content5);
  $req_content->bindParam(':text', $text4, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text5'])){
  $text5 = $_POST['text5'];
  $update_content6 = $update_content.'WHERE id=6';
  $req_content = $connect->prepare($update_content6);
  $req_content->bindParam(':text', $text5, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text6'])){
  $text6 = $_POST['text6'];
  $update_content7 = $update_content.'WHERE id=7';
  $req_content = $connect->prepare($update_content7);
  $req_content->bindParam(':text', $text6, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text7'])){
  $text7 = $_POST['text7'];
  $update_content8 = $update_content.'WHERE id=8';
  $req_content = $connect->prepare($update_content8);
  $req_content->bindParam(':text', $text7, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text8'])){
  $text8 = $_POST['text8'];
  $update_content9 = $update_content.'WHERE id=9';
  $req_content = $connect->prepare($update_content9);
  $req_content->bindParam(':text', $text8, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text9'])){
  $text9 = $_POST['text9'];
  $update_content10 = $update_content.'WHERE id=10';
  $req_content = $connect->prepare($update_content10);
  $req_content->bindParam(':text', $text9, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text10'])){
  $text10 = $_POST['text10'];
  $update_content11 = $update_content.'WHERE id=11';
  $req_content = $connect->prepare($update_content11);
  $req_content->bindParam(':text', $text10, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text11'])){
  $text11 = $_POST['text11'];
  $update_content12 = $update_content.'WHERE id=12';
  $req_content = $connect->prepare($update_content12);
  $req_content->bindParam(':text', $text11, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text12'])){
  $text12 = $_POST['text12'];
  $update_content13 = $update_content.'WHERE id=13';
  $req_content = $connect->prepare($update_content13);
  $req_content->bindParam(':text', $text12, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text13'])){
  $text13 = $_POST['text13'];
  $update_content14 = $update_content.'WHERE id=14';
  $req_content = $connect->prepare($update_content14);
  $req_content->bindParam(':text', $text13, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text14'])){
  $text14 = $_POST['text14'];
  $update_content15 = $update_content.'WHERE id=15';
  $req_content = $connect->prepare($update_content15);
  $req_content->bindParam(':text', $text14, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text15'])){
  $text15 = $_POST['text15'];
  $update_content16 = $update_content.'WHERE id=16';
  $req_content = $connect->prepare($update_content16);
  $req_content->bindParam(':text', $text15, PDO::PARAM_STR);
  $req_content->execute();
}

if(isset($_POST['text16'])){
  $text16 = $_POST['text16'];
  $update_content17 = $update_content.'WHERE id=17';
  $req_content = $connect->prepare($update_content17);
  $req_content->bindParam(':text', $text16, PDO::PARAM_STR);
  $req_content->execute();
}

header('Location:http://localhost/centsept/backoffice.php');


?>
