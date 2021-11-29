<?php

$ipk = "2.3";

if ($ipk > 0 && $ipk <= 2) {
    echo "Grade E. maaf anda harus mengulang";
}elseif ($ipk > 2.1 && $ipk <= 2.6) {
    echo "Grade D. maaf anda harus memperbaiki mata kuliah anda";
}elseif ($ipk > 2.6 && $ipk <= 2.9) {
    echo "Grade C. mau memperbaiki boleh tidak juga boleh";
}elseif ($ipk > 3 && $ipk <= 3.5) {
    echo "Grade B. mata kuliah anda baik";
}elseif ($ipk > 3.5  && $ipk <= 4) {
    echo "Grade A.mata kuliah anda super";
}else {
    echo "sistem error";
}
