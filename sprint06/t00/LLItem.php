<?php
    class LLItem{
        public $data;
        public $next;
        public function __construct($data = NULL) {
            $this->data = $data;
            $this->next = null;
        }

        public function setData($data): void {
            $this->data = $data;
        }

        public function getData(): int {
            return $this->data;
        }

        public function setNext($next): void {
            $this->next = $next; 
        }

        public function getNext() {
            return $this->next;
        }
    }
?>