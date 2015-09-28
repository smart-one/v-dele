<?php 
function dd($str)
{
  echo "<pre>";
  var_dump($str);
  echo "</pre>";
  die();
}

function site_header(array $options = [])
{
  $defaults = [
    'title' => 'Мы вбизнесе',
    'description' => '',
    'keywords' => '',
    'extraStyles' => '',
  ];
  extract(array_replace($defaults, $options));
  require_once('inc/header.php');
}

function is_active($page, $activeClass = "over")
{
  if($page === "/"){
    return $_SERVER["REQUEST_URI"] === "/" ? $activeClass : null;
  }

  return stristr($_SERVER["REQUEST_URI"], $page) ? $activeClass : null;
}