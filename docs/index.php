<?php
function theInfo(){
    $json = file_get_contents('info.json');
    $obj = json_decode($json);
    return  $obj;
}
?>
<!DOCTYPE html>
<html lang="my">
<head>
    <?php include_once "head.php";?>    
</head>
<body>
    <center>
        <h1><?=theInfo()->name;?></h1>
        <p><?=theInfo()->description;?></p>
        <img src="<?=theInfo()->logo;?>" alt="" id="logo">
        <div>
            <a href="<?=theInfo()->fb_page_id;?>" target="_blank">facebook</a>
            <a href="<?=theInfo()->app_download_link;?>" target="_blank">download</a>
        </div>
    </center>
</body>
</html>