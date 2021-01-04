<?php




function findHoroscope($month, $day)
{
    if ($month == 3 && $day >= 21 || $month == 4 && $day <= 19) {
        return "Väduren";
    } else if ($month == 4 && $day >= 20 || $month == 5 && $day <= 20) {
        return "Oxen";
    } else if ($month == 5 && $day >= 21 || $month == 6 && $day <= 21) {
        return "Tvillingarna";
    } else if ($month == 6 && $day >= 22 || $month == 7 && $day <= 22) {
        return "Kräftan";
    } else if ($month == 7 && $day >= 23 || $month == 8 && $day <= 22) {
        return "Lejonet";
    } else if ($month == 7 && $day >= 23 || $month == 8 && $day <= 22) {
        return "Lejonet";
    } else if ($month == 8 && $day >= 23 || $month == 9 && $day <= 22) {
        return "Jungfrun";
    } else if ($month == 9 && $day >= 23 || $month == 10 && $day <= 22) {
        return "Vågen";
    } else if ($month == 10 && $day >= 23 || $month == 11 && $day <= 21) {
        return "Skorpionen";
    } else if ($month == 11 && $day >= 22 || $month == 12 && $day <= 21) {
        return "Skytten";
    } else if ($month == 12 && $day >= 22 || $month == 1 && $day <= 19) {
        return "Stenbocken";
    } else if ($month == 1 && $day >= 20 || $month == 2 && $day <= 18) {
        return "Vattumannen";
    } else if ($month == 2 && $day >= 19 || $month == 3 && $day <= 20) {
        return "Vattumannen";
    }
}
?>
