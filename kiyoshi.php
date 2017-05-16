<?php

class singer
{


public function kiyoshi()
{
    $song_list = ['ズン','ドコ'];
    $cache = "";

        $chois = $song_list[mt_rand(0,1)];
        return $chois;
  }
}

class fan
{
    private $call = "きよし";
    public $song = array();

  public function listen($chois)
{
      if(count($this->song) < 5)
      {
        array_unshift($this->song,$chois);
      }
      elseif(count($this->song)>4)
      {
        $song = array_fill(0, 5, $chois);
        array_shift($this->song);
        array_push($this->song,$chois);
      }
      else
      {
          $song = array_fill(0, 5, $chois);
          array_shift($this->song);
          array_unshift($this->song,$chois);
      }
    }

    public function Decision($kiyoshi_song)
    {
      $kiyoshi_song = 'ズンズンズンズンドコ';

      if(implode($this->song) === $kiyoshi_song)
      {
        echo $this->call;
        return true;
      }
      else
      {
        return false;
      }
    }
}

$kiyoshi_song = "ズンズンズンズンドコ";
$singer = new singer();
$fan = new fan();
for($i = 0; $i < 100; $i++)
{
  $chois = $singer->kiyoshi();
  $fan->listen($chois);
  echo $chois;
  echo " ";
  if($fan->Decision($kiyoshi_song))
  {
    break;
  }
}



?>
