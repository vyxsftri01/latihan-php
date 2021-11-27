<?php
$helm = "bawa";
$stnk = "tidak";
$sim = "bawa";

if ($helm = "bawa"){
    echo "Kami cek perlengkapan stnk anda";
} else if($helm == "bawa" && $stnk == "tidak" && $sim == "bawa"){
    echo "boleh kami cek sim nya?";
} else if($helm == "bawa" && $stnk == "bawa" && $sim == "bawa"){
    echo  "Selamat berkendara,hati hati dijalan";
}else{
    echo "anda ditilang.";
}