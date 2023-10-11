<?php
//echo 
$text = "Bài cũ";
echo "Ôn lại" . $text . "<br>";

//if else , else if
$point = 90;
if ($point < 100) {
    echo "chưa đủ điểm tiếp tục học lớp DEV Squad <br>";
} elseif ($point == 100) {
    echo "vừa đủ điểm để hoc lớp Dev Squad <br>";
} else {
    echo "Bạn đã được tham gia lớp Dev Squad <br>";
}

//switch
$movie = "Doraemon";
switch ($movie) {
    case "Tom jerry":
        echo "You like Tom jerry <br>";
        break;
    case "Doraemon":
        echo "You like Doraemom <br>";
        break;
    case "dragon":
        echo "You like dragon <br>";
        break;
    case "elsa":
        echo "You like elsa <br>";
        break;
        case "naruto":
            echo"You like naruto <br>";
            break;
            default:
            echo"you don't like the movie";
}

//vòng lặp
for($i = 0 ; $i <10; $i++){
    echo"the number is : $i <br>";
}

