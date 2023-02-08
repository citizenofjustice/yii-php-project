<?php

namespace app\models;

class Articles extends generated\Articles {
    public function __construct() {
        parent::__construct();
    }

    static function formatCreationDate($date) {
        $formatedDate = substr($date, 0, -3);
        // return gettype($formatedDate);
        return $formatedDate;
    }
}
?>