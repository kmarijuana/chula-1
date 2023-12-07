<?php
session_start();
// $_SESSION["current_url"] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $baseurl = "https://$_SERVER[HTTP_HOST]";
// if (empty($_COOKIE['section_index'])) {
//   // if (empty($_COOKIE['section_index']) || empty($_COOKIE["path"])) {
//   if ($baseurl == 'https://invirtualevent.com') {
//     header("Location: ../Index");
//   } else {
//     header("Location: https://whatthefood.club/wtfood3/index/register");
//   }
// } else {
  // setcookie('section_ar09', true, time() + (3600 * 24 * 365), '/');
  // include("./templates/" . $_COOKIE["path"] . ".html");
  // include("./templates/android.html");
  // clearstatcache();
  
  include("./templates/".(empty($_GET['d'])?"ios":$_GET['d']).".html");
  unset($_SESSION["current_url"]);
// }
