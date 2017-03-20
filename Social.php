<?php
class Social {
  private $username;

  public function __construct($username) {
    $this->username = $username;
  }

  public function username() {
    return $this->username;
  }
}

?>
