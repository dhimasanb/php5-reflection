<?php
include_once 'Social.php';
class Twitter extends Social {
  private $tweet;
  public function __construct($username, $tweet) {
    $this->tweet = $tweet;
    parent::__construct($username);
  }

  public function tweet() {
    return $this->tweet;
  }
}


?>
