<?php

namespace Modules\Admin\Models;

use stdClass;
use App\Models\MY_MEDIADB;

class AdminModel extends MY_MEDIADB {

        /* Presentation: Gestion des points de perception (Guichets,..)
         * Last update
         * By Donald  on the 02.11.2024
         *  *************************************************************************************************************************SECTION 1
        */

        /*
         * Protected and public variables
         * Use: forms validation constraintes, dropdowns static array, contextual variable etc
         * Get Information: return a single item
         * Use: for creation, for display, for updates
         * P.S: Ajoutez vous variables ci-dessous, si necessaire!!
         * *************************************************************************************************************************SCETION 2
        */
        protected $_table_name = '';
        protected $_primary_key = '';
        protected $_order_by = '';
        protected $_timestamps = FALSE;
        protected $_date_created = '';
        protected $_date_modified = '';


        public function __construct()
        {
            parent::__construct();
        }

        /*
         * Get Information: returns an array
         * Use: for indexation, for dropdon etc
         * P.S: Ajoutez vous methodes ci-dessous!!
         *  *************************************************************************************************************************SECTION 4
        */

        public function get_categories()
        {
                $builder = $this->db->table('media_category')
                        ->select('media_category.*')
                        ->where("Status_3 = '1'")
                        ->get();
                return $builder->getResult();
        }

        public function get_categorie_by_id($id)
        {
                $builder = $this->db->table('media_category')
                        ->select('media_category.*')
                        ->where("Id_0 = '".$id."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_all_categorie()
        {
                $builder = $this->db->table('media_category')
                    ->select('media_category.*')
                    ->get();
                $categ = array();
                foreach($builder->getResult() as $categorie)
                {
                        $categ[$categorie->Id_0] = $categorie->Description_1;
                }
                return $categ;
        }

        public function get_all_media()
        {
                $builder = $this->db->table('media')
                        ->select('media.*')
                        ->where("Status_9 = '1'")
                        ->orderBy('Id_0', "DESC")
                        ->get();
                return $builder->getResult();
        }

        public function get_all_publicity()
        {
                $builder = $this->db->table('publicity')
                        ->select('publicity.*')
                        ->orderBy('Id_0', "DESC")
                        ->get();
                return $builder->getResult();
        }

        public function get_all_media_by_category($categ)
        {
                $builder = $this->db->table('media')
                        ->select('media.*')
                        ->where("Media_category_7 = '".$categ."'")
                        ->orderBy('Id_0', "DESC")
                        ->get();
                return $builder->getResult();
        }

        public function get_media_by_id($id)
        {
                $builder = $this->db->table('media')
                        ->select('media.*')
                        ->where("Id_0 = '".$id."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_publicity_by_id($id)
        {
                $builder = $this->db->table('publicity')
                        ->select('publicity.*')
                        ->where("Id_0 = '".$id."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_media_by_mediaId($Media_Id_1)
        {
                $builder = $this->db->table('media')
                        ->select('media.*')
                        ->where("Media_Id_1 = '".$Media_Id_1."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_count_media_by_categ($categ)
        {
                $builder = $this->db->table('media')
                        ->select('count(Id_0) as total')
                        ->where("Media_Category_7 = '".$categ."'")
                        ->orderBy('Id_0', "DESC")
                        ->get();
                $result = $builder->getRow();
                return $result->total;
        }

        public function get_all_author()
        {
                $builder = $this->db->table('users')
                    ->select('users.*')
                    ->get();
                $author = array();
                foreach($builder->getResult() as $user)
                {
                        $author[$user->Id_0] = $user->FirstName_1." ".$user->Name_3;
                }
                return $author;
        }

        public function get_all_users_added()
        {
                $builder = $this->db->table('users')
                        ->select('users.*')
                        ->where("Role_8 <> 'Admin' AND Status_9 = '1'")
                        ->get();
                return $builder->getResult();
        }

        public function get_all_users()
        {
                $builder = $this->db->table('users')
                        ->select('users.*')
                        ->where("Status_9 = '1'")
                        ->get();
                return $builder->getResultArray();
        }

        public function get_user_by_identifiant($username,$email)
        {
                $builder = $this->db->table('users')
                        ->select('users.*')
                        ->where("Username_6 = '".$username."' OR Email_4 = '".$email."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_user_by_id($userid)
        {
                $builder = $this->db->table('users')
                        ->select('users.*')
                        ->where("Id_0 = '".$userid."'")
                        ->get();
                return $builder->getRow();
        }

        public function get_array_user_connected($userid)
        {
                $builder = $this->db->table('users')
                        ->select('users.*')
                        ->where("Id_0 = '".$userid."'")
                        ->get();
                return $builder->getRowArray();
        }

        /*
         * Save Information: insert or update an array
         * Use: inserting or updating 
         * P.S: Ajoutez vous methodes ci-dessous!!
         *  *************************************************************************************************************************SECTION 5
        */

        public function save_data($table, $data, $Id_0)
        {
                $this->set_table($table, 'Id_0', 'Id_0 DESC');
                return $this->saveData($data, $Id_0);
        }

        public function delete_line($table,$Id_0)
        {
                $this->set_table($table, 'Id_0', 'Id_0 DESC');
                return $this->delete($Id_0);
        }
}