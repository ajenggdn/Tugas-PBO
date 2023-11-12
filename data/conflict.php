<?php
// buat namespace data\satu 
// dengan class conflict
// class sample
// class dummy
// buat namespace data\dua
// dengan class conflict
// File: Conflict.php
namespace Data\One;

class Conflict {
    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function getMessage() {
        return $this->message;
    }
}

namespace Data\Two;

class Conflict {
    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function getMessage() {
        return $this->message;
    }
}

namespace Kodok;

class Conflict {
    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function getMessage() {
        return $this->message;
    }
}
?>