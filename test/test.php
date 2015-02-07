<?php

while($n < 3333 && $i < 1500) {
    $i++;
    $i = "$i";
    if ($i[1] == false && $i[1] !== "0") {
        $n += 1;
    }
    elseif ($i[2] == false && $i[2] !== "0") {
        $n += 2;
    }
    elseif ($i[3] == false && $i[3] !== "0") {
        $n += 3;
    }
    elseif ($i[4] == false && $i[4] !== "0") {
        $n += 4;
    }
    echo "i = $i;n = $n <br>";
    /*if ($i/10 < 1 && $i >= 0.1) {
        $n += 1;
    }
    elseif ($i/100 < 1 && $i >= 0.1) {
        $n += 2;
    }
    elseif ($i/1000 < 1 && $i >= 0.1) {
        $n += 3;
    }
    elseif ($i/10000 < 1 && $i >= 0.1) {
        $n += 4;
    }*/
}
echo $i;
?>

<script>
    console.log("start");
    //for (var i=0; i<255; i++){
        for (var j=0; j<255; j++){
            for (var k=0; k<255; k++) {
                for (var l = 0; l < 255; l++) {
                    for (var m = 0; m < 255; m++) {
                        for (var n = 0; n < 255; n++) {
                            var word = String.fromCharCode(j)+String.fromCharCode(k)+String.fromCharCode(l)+String.fromCharCode(m)+String.fromCharCode(n);
                            if (hash("a"+word) == "мВаеюи") console.log(word + " Yraaa");
                        }
                    }
                }
            }
        }
    //}
    console.log("finish");
</script>