<?php
namespace App\Models;
use CodeIgniter\Model;

class MY_Model extends Model
{
        protected $DBGroup = '';
        protected $table     = '';
        protected $returnType     = 'object';

        // Dates
        protected $useTimestamps = false;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'Date_1';
        protected $updatedField  = '';

        //Config
        public $session;
        protected $db;
        protected $builder;
        public $curl;

        public function __construct()
        {
                parent::__construct();
                $this->session = \Config\Services::session();
                $this->curl = \Config\Services::curlrequest();
        }

        public function get_all($id = NULL, $single = FALSE)
        {
                if ($id != NULL) {
                        $this->db->table($this->table)->where($this->primaryKey, $id)->get()->getRow();
                }

                if ($single == TRUE) {
                        return $this->db->table($this->table)->limit(1)->get()->getRow();
                } else {
                        return $this->db->table($this->table)->get()->getResult();
                }
        }

        public function get_by($where, $single = FALSE)
        {
                if ($single == TRUE) {
                        return $this->db->table($this->table)->where($where)->limit(1)->get()->getRow();
                } else {
                        return $this->db->table($this->table)->where($where)->get()->getResult();
                }
        }

        public function saveData($data, $id = NULL, $escape = FALSE)
        {
                //Set timestamps
                if ($this->useTimestamps == TRUE) {
                        $now = date('Y-m-d H:i:s');
                        $id || $data[$this->createdField] = $now;
                        (empty($this->updatedField)) || $data[$this->updatedField] = $now;
                }

                // Échapper les données
                if ($escape) {
                        foreach ($data as $key => $value) {

                                if(!$this->is_json($value))
                                {
                                        $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8');
                                }
                        }
                }

                //Insert
                if ($id === NULL) {
                        !isset($data[$this->primaryKey]) || $data[$this->primaryKey] = NULL;
                        $this->db->table($this->table)->insert($data);
                        $id = $this->db->insertID();
                }

                //Update
                else {
                        unset($data[$this->primaryKey]);
                        $this->db->table($this->table)->update($data, [$this->primaryKey => $id]);
                }

                //return ($id > 0);
                return $id;
        }

        public function set_table($tableName, $primaryKey, $orderby, $timestamp = FALSE, $date_created = NULL, $date_modified = NULL)
        {
                $this->table = $tableName;
                $this->primaryKey = $primaryKey;
                $this->useTimestamps = $timestamp;
                $this->builder = $this->db->table($tableName);
                // $this->_order_by = $orderby;
                if (!empty($date_created)) $this->createdField = $date_created;
                if (!empty($date_modified)) $this->updatedField = $date_modified;
        }

        public function array_from_post($fields)
        {
                $data = array();
                foreach ($fields as $field => $value) {
                        $data[$field] = $this->input->post($value);
                }
                return $data;
        }

        public function array_msort($array, $cols)
        {
                $colarr = array();
                foreach ($cols as $col => $order) {
                        $colarr[$col] = array();
                        foreach ($array as $k => $row) {
                                $colarr[$col]['_' . $k] = strtolower($row[$col]);
                        }
                }
                $eval = 'array_multisort(';
                foreach ($cols as $col => $order) {
                        $eval .= '$colarr[\'' . $col . '\'],' . $order . ',';
                }
                $eval = substr($eval, 0, -1) . ');';
                eval($eval);
                $ret = array();
                foreach ($colarr as $col => $arr) {
                        foreach ($arr as $k => $v) {
                                $k = substr($k, 1);
                                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                                $ret[$k][$col] = $array[$k][$col];
                        }
                }
                return $ret;
        }

        function is_json($string) 
        {
                json_decode($string);
                return (json_last_error() === JSON_ERROR_NONE);
        }
}