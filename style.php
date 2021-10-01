<style>
/* ============================ */
@font-face {
    font-family: "Dragraces Demo";
    src: url(/DragracesDemoRegular.ttf) format("embedded-opentype"), url(/DragracesDemoRegular.ttf) format("opentype")
}
body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: <?=theInfo()->bg_color;?>;
    color: <?=theInfo()->text_color;?>;
}
h1{
    font-size:50pt;
    line-height:25pt;
}
.flex{
    display: flex;
}
._ce{
    justify-content: center;
    align-items: center;
}

#brandName{
    font-family: "Dragraces Demo"!important;
    font-weight: 100;
    letter-spacing: 2pt;
}

#logo{
    height:120px;
    width:120px;
    border-radius:50%;
}
#description{
    opacity: 0.7;
}
#ico{
    height: 29px;
    object-fit: contain;
}
#icoBtn {
    background-color:  <?=theInfo()->theme_color;?>;
    color:<?=theInfo()->text_color;?>;
    text-decoration: none;
    padding:5px;
    margin:10px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}
#icoBtn #ico{
    height:25px;
}
</style>
