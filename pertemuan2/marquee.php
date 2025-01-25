<style>
    body{
        background-color: magenta;
        
    }
    div{
        display: flex;
        justify-content: center;
    }
    marquee {
        width: 50%;
        background-color :skyblue; 
    }
</style>

<h1>Ini adalah Heading 1</h1>
<h2>Ini adalah Heading 2</h2>
<h3>Ini adalah Heading 3</h3>
<h4>Ini adalah Heading 4</h4>
<h5>Ini adalah Heading 5</h5>
<h6>Ini adalah Heading 6</h6>

<div >
<?php
    echo "<marquee>";
    echo "Ini adalah marquee";
    echo "</marquee>";
?>
</div>

