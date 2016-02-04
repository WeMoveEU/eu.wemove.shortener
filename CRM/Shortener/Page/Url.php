<?php

require_once 'CRM/Core/Page.php';

class CRM_Shortener_Page_Url extends CRM_Core_Page {

  public $urlId = 0;

  /**
   * Set values from request.
   *
   * @throws Exception
   */
  public function setValues() {
    $this->urlId = CRM_Utils_Request::retrieve('u', 'Positive', $this, FALSE);
  }

  public function run() {
    $this->setValues();
    $this->assign('dt', time());
    $this->assign('u', $this->urlId);

    // todo implement the same code like in extern/url.php
    parent::run();
  }
}
