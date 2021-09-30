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
    <video autoplay muted loop download="false" id="myVideo"
            style="
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100vw;
            min-height: 100vh;
            ">
            <source src="media/bg.webm" type="video/mp4">
    </video>
    <div style="
        display: flex;
        align-items: center;
		justify-content:center;
        min-height: 100vh;
        background-color: rgb(0 14 106 / 35%);
        position: relative;
        backdrop-filter:blur(3px);
        ">
		<div style="
                display:flex;
				flex:1;
				color:#fff;
                max-width:400px;
                margin:10px;
				">
            <center>
                <img src="<?=theInfo()->logo;?>" alt="" id="logo">
                <h1><?=theInfo()->name;?></h1>
                <div class="flex _ce">
                    <img src="media/Flag_of_Myanmar.svg" alt="" id="ico">
                    <div>&nbsp;မြန်မာစာတန်းထိုး အကြည် ဇတ်ကားများ</div>
                </div>
                <p id="description"><?=theInfo()->description;?></p>
                <div class="flex _ce">
                    <a id="icoBtn" href="https://fb.com/<?=theInfo()->fb_page_id;?>" target="_blank">
                        <img src="media/Facebook_icon_2013.svg" alt="" id="ico">
                    </a>
                    <a id="icoBtn" href="<?=theInfo()->app_download_link;?>" target="_blank">
                        <img src="media/android.svg" alt="" id="ico">&nbsp;download
                    </a>
                </div>
            </center>
        </div>
    </div>
</body>
</html>