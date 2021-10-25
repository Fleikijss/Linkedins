<?php
include_once('Request.php');            // vienu reizi ievieto kontentu no cita faila šeit.
class Random
{
    private $sec_in_day = 24 * 60 * 60;     // private --> taisa īpašību tādu lai viņa būtu tikai redzama esošajā klasē

    public function getFollowerCount() {    // tiek izveidota funkcija ar nosaukumu, kura ģenrēs random skaitli un atgriezīs to skaitli.
        return rand(30, 1000);
    }
    // getCreateAt atgriež nejaušu laiku no 1 līdz 25 dienām atpakaļ
    public function getCreateAt() {
        return time() - rand($this->sec_in_day, 25 * $this->sec_in_day);
        /*
        time - sekunžu skaits no 1970gada 1 janvāra
        rand - atgriež nejaušu skaitli
        timestamp --> [86400: 86400 * 25]
        
        
        */
    }

    public function getLikesCount() {
        return rand(2, 50);
    }

    public function getCommentCount() {
        return rand(1, 14);
    }

    public function getContent() {
        $paras = rand(1, 3);
        $output = Request::get("https://baconipsum.com/api/?type=meat-and-filler&paras=$paras&format=text"); // Request::get??
        if ($output) {
            return $output;
        } 
        else {
             return $output = "This is post content";
        }
    }

    public function getImage() {
        $output = Request::get("https://dog.ceo/api/breeds/image/random");
        $data = json_decode($output, true);
        return $data['message'];
    }

    public function getName() {
        $output = Request::get("https://api.namefake.com/");
        $data = json_decode($output, true);
        return $data['name'];
    }
}