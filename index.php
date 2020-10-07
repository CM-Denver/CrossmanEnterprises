<?php

include('top.php');
include('intro.php');

echo "<div class='center width750'>
    <h1 class='mainFont titleFont font40'>BRAND NEW</h1>
    <p class='mainFont fontItalic'>Collection of Workers</p>
    </div>";

//create two column div to list slave info:
echo "<div class='center width750 twoColumn' id='collection-list'>";

//Create an array of all the text files (slave information):
$files = glob("./slaveinfo/" . "*");

foreach ($files as $slave) {
    $content = file_get_contents($slave);
    $contentArray = explode("-split-",$content,4);
    $image = $contentArray[0];
    $name = $contentArray[1];
    $desc = $contentArray[2];
    $price = $contentArray[3];

    echo "
        <div>
            <img class='center slaveImage' src='$image'>
            <h1 class='mainFont titleFont'>$name</h1>
            <p class='center mainFont'>$desc</p>
            <p class='mainFont fontItalic'>$price</p>
        </div>
        ";
}

//end of two column div:
echo "</div>";

echo "<div class='center hline'></div>";

?>


<?php

include('pricesheet.php');

include('bottom.php');

?>