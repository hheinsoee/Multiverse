<title><?=theInfo()->name;?></title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="encoding" content="utf-8">
<link rel="icon" href="<?=theInfo()->ico;?>"/>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,user-scalable=no"/>
<link rel="apple-touch-icon" href="<?=theInfo()->logo;?>"/>

<link rel="canonical" href="<?="http://".$_SERVER['SERVER_NAME'];?>"/>

<!-- meta data -->
<meta name="description" content='<?=theInfo()->description;?>'/>
<meta name="keywords" content="<?=theInfo()->keywords;?>"/>

<!-- open graph -->
<meta property="og:image" content="<?=theInfo()->ogimage;?>"/>
<meta property="og:image:type" content="image/jpg"/>
<meta property="og:image:width" content="400"/>
<meta property="og:image:height" content="300"/>
<meta property="og:description" content="<?=theInfo()->description;?>"/>
<meta property="og:title" content="<?=theInfo()->name;?>"/>
<meta property="og:url" content="<?="http://".$_SERVER['SERVER_NAME'];?>"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?=theInfo()->name;?>"/>

<!-- twitter -->
<meta name="twitter:title" content="<?=theInfo()->ogimage;?>"/>
<meta name="twitter:description" content="<?=theInfo()->description;?>"/>
<meta name="twitter:url" content=""/>
<meta name="twitter:image" content="<?=theInfo()->ogimage;?>"/>
<meta name="twitter:card" content="summary_large_image"/>

<!-- vefifying & contact-->
<meta name="facebook-domain-verification" content=""/>
<meta property="fb:pages" content="<?=theInfo()->fb_page_id;?>" />

<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="index.js"></script>

<style>
    body{
        margin:0;
        padding:0;
        background-color: <?=theInfo()->bg_color;?>;
        color: <?=theInfo()->text_color;?>;
    }
</style>

