<?php
require_once("Parsedown.php");
require_once("ParsedownExtra.php");

class Section {
  private $content;
  
  function __construct($c) {
    $this->content = $c;
  }
  
  public function SetContent($c) {
    $this->content = $c;
  }
  
  public function GetContent() {
    return $this->content;
  }
  
  public function GetMarkdown() {
    $Parsedown = new ParsedownExtra();
    return $Parsedown->text(file_get_contents($this->content));
  }
}
?>