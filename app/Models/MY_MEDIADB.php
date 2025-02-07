<?php

namespace App\Models;

use Config\Database;

class MY_MEDIADB extends MY_Model
{
        protected $DBGroup = 'default';
        public function __construct()
        {
                parent::__construct();
                if (isset($this->db)) {
                        $this->db->close();
                        $this->db = NULL;
                }
                $this->db = Database::connect($this->DBGroup);
        }
}