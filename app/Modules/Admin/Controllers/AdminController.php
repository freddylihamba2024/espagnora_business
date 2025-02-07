<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Cryptor;
use Cocur\Slugify\Slugify;
use Modules\Admin\Models\AdminModel;
use App\Libraries\Hush;

class AdminController extends BaseController
{
        public $clientModel;
        public $cryptor;
        public $slugify;
        public $adminModel;

        public function __construct()
        {
                parent::__construct();

                $this->cryptor = $this->data['cryptor'] = new Cryptor();
                $this->slugify = new Slugify();
                $this->adminModel = new AdminModel();
        }

        public function page($obj = Null, $id = Null)
        {
                if ($obj == "dashboards") {
                        $this->data['activeLink'] = "dashboards";
                        echo view("\Modules\Admin\Views\page\dashboards", $this->data);
                } elseif ($obj == "media") {
                        $this->data['activeLink'] = "media";
                        $this->data['medias'] = $this->adminModel->get_all_media();
                        $this->data['author'] = $this->adminModel->get_all_author();
                        $this->data['category'] = $this->adminModel->get_all_categorie();
                        echo view("\Modules\Admin\Views\page\media", $this->data);
                } elseif ($obj == "categorie") {
                        $this->data['activeLink'] = "categorie";
                        $this->data["categories"] = $this->adminModel->get_categories();
                        echo view("\Modules\Admin\Views\page\categorie", $this->data);
                } elseif ($obj == "users") {
                        $this->data["users"] = $this->adminModel->get_all_users_added();
                        $this->data['activeLink'] = "users";
                        echo view("\Modules\Admin\Views\page\users", $this->data);
                } elseif ($obj == "user") {
                        if (!is_null($id)) {
                                $param = json_decode($this->cryptor->decrypt($id));
                                if (!empty($param->userid)) {
                                        $this->data["user"] = $this->adminModel->get_user_by_id($param->userid);
                                } else {
                                        return redirect()->to(base_url("404"));
                                }
                        }
                        $this->data['activeLink'] = "users";
                        echo view("\Modules\Admin\Views\page\_user", $this->data);
                } elseif ($obj == "categ") {
                        if (!is_null($id)) {
                                $param = json_decode($this->cryptor->decrypt($id));
                                if (!empty($param->categ)) {
                                        $this->data["categorie"] = $this->adminModel->get_categorie_by_id($param->categ);
                                } else {
                                        return redirect()->to(base_url("404"));
                                }
                        }
                        $this->data['activeLink'] = "categorie";
                        echo view("\Modules\Admin\Views\page\_categorie", $this->data);
                } elseif ($obj == "newmedia") {
                        if (!is_null($id)) {
                                $param = json_decode($this->cryptor->decrypt($id));
                                if (!empty($param->media)) {
                                        $this->data["media"] = $this->adminModel->get_media_by_id($param->media);
                                } else {
                                        return redirect()->to(base_url("404"));
                                }
                        }
                        $this->data["categories"] = $this->adminModel->get_categories();
                        $this->data['activeLink'] = "media";
                        echo view("\Modules\Admin\Views\page\_media", $this->data);
                } elseif ($obj == "basic") {
                        $this->data["user"] = $this->adminModel->get_user_by_id($this->session->userdata["Id_0"]);
                        $this->data['activeLink'] = "profile";
                        echo view("\Modules\Admin\Views\page\basic", $this->data);
                } elseif ($obj == "param") {
                        $this->data['activeLink'] = "profile";
                        echo view("\Modules\Admin\Views\page\param", $this->data);
                } else {
                        return redirect()->to(base_url("404"));
                }
        }

        public function save($obj = Null, $id = Null)
        {
                if ($obj == "user") {
                        $data = array();
                        $name = $this->request->getPost("name");
                        $first_name = $this->request->getPost("first_name");
                        $last_name = $this->request->getPost("last_name");
                        $status = $this->request->getPost("status");
                        $role = $this->request->getPost("role");
                        $phone = $this->request->getPost("phone");
                        $email = $this->request->getPost("email");
                        $username = $this->request->getPost("username");
                        $userid = ($this->request->getPost("id") != 0) ? $this->request->getPost("id") : Null;
                        $check = $this->adminModel->get_user_by_identifiant($username, $email);
                        if (is_null($check) || (!is_null($check) && $userid == $check->Id_0)) {
                                $data["Id_0"] = $userid;
                                $data["FirstName_1"] = $first_name;
                                $data["LastName_2"] = $last_name;
                                $data["Name_3"] = $name;
                                $data["Email_4"] = $email;
                                $data["Phone_5"] = $phone;
                                $data["Username_6"] = $username;
                                $data["Role_8"] = $role;
                                $data["Status_9"] = $status;
                                if (is_null($userid)) {
                                        $data["Password_7"] = Hush::make("12345*");
                                        $data["Creatime_10"] = date("Y-m-d H:i:s");
                                } else {
                                        $data["Updatime_11"] = date("Y-m-d H:i:s");
                                }

                                $save = $this->adminModel->save_data("users", $data, $userid);

                                if ($save) {
                                        echo json_encode(array("save" => true));
                                } else {
                                        echo json_encode(array("save" => false, "info" => "Erreur d'enregistrement"));
                                }
                        } else {
                                echo json_encode(array("save" => false, "info" => "Le nom d'utilisateur ou email existe déjà"));
                        }
                } elseif ($obj == "categorie") {
                        $data = array();
                        $Parent_4 = $this->request->getPost("Parent_4");
                        $Description_1 = $this->request->getPost("Description_1");
                        $categ = ($this->request->getPost("id") != 0) ? $this->request->getPost("id") : Null;
                        $check = $this->adminModel->get_categorie_by_id($categ);
                        if (is_null($check) || (!is_null($check) && $categ == $check->Id_0)) {
                                $data["Id_0"] = $categ;
                                $data["Description_1"] = $Description_1;
                                $data["Status_3"] = 1;
                                $data["Parent_4"] = $Parent_4;
                                if (is_null($categ)) {
                                        $data["DateCreat_2"] = date("Y-m-d H:i:s");
                                }

                                $save = $this->adminModel->save_data("media_category", $data, $categ);

                                if ($save) {
                                        echo json_encode(array("save" => true));
                                } else {
                                        echo json_encode(array("save" => false, "info" => "Erreur d'enregistrement"));
                                }
                        } else {
                                echo json_encode(array("save" => false, "info" => "Bien vérifier les valeurs inserés"));
                        }
                } elseif ($obj == "login") {
                        $password = $this->request->getPost('password');
                        $username = $this->request->getPost('username');
                        $user_connected = array();
                        $users = $this->adminModel->get_all_users();
                        foreach ($users as $user) {
                                if (($user['Username_6'] == $username || $user['Email_4'] == $username) && Hush::verify($password, $user['Password_7'])) {
                                        if ($user['Status_9'] == 0) {
                                                echo json_encode(array("login" => false, "info" => "Utilisateur non autorisé à accèder"));
                                        } else {
                                                $user_connected = $user;
                                        }
                                }
                        }

                        if (count($user_connected) == 0) {
                                echo json_encode(array("login" => false, "info" => "Identifiant ou mot de passe incorrecte"));
                        } else {
                                $this->session->set(['userdata' => $user_connected]);
                                echo json_encode(array("login" => true, "redirect" => base_url('admin/page/media')));
                        }
                } elseif ($obj == "delete_user") {
                        $data = array();
                        $userid = $this->request->getPost("userid");
                        $data["Status_9"] = 0;
                        $update = $this->adminModel->save_data("users", $data, $userid);
                        if ($update) {
                                echo json_encode(array("delete" => true));
                        } else {
                                echo json_encode(array("delete" => false, "info" => "Erreur de suppression"));
                        }
                } elseif ($obj == "delete_categ") {
                        $data = array();
                        $categ = $this->request->getPost("categ");
                        $data["Status_3"] = 0;
                        $update = $this->adminModel->save_data("media_category", $data, $categ);
                        if ($update) {
                                echo json_encode(array("delete" => true));
                        } else {
                                echo json_encode(array("delete" => false, "info" => "Erreur de suppression"));
                        }
                } elseif ($obj == "delete_media") {
                        $data = array();
                        $Id_0 = $this->request->getPost("media");
                        $data["Status_9"] = 0;
                        $update = $this->adminModel->save_data("media", $data, $Id_0);
                        if ($update) {
                                echo json_encode(array("delete" => true));
                        } else {
                                echo json_encode(array("delete" => false, "info" => "Erreur de suppression"));
                        }
                } elseif ($obj == "media") {
                        $data = array();
                        $Media_Image_4 = $this->request->getFile("Media_Image_4");
                        $Title_2 = $this->request->getPost("Title_2");

                        $Media_Link_5 = ($this->request->getPost("Media_type_10") == "Actualites" || $this->request->getPost("Media_type_10") == "Direct TV" || $this->request->getPost("Media_type_10") == "Direct Radio") ? $this->request->getPost("Media_Link_5") : $this->request->getFile("Media_Link_5");

                        $Id_0 = ($this->request->getPost("Id_0") != 0) ? $this->request->getPost("Id_0") : Null;
                        $check = $this->adminModel->get_media_by_id($Id_0);

                        if (is_null($check) || (!is_null($check) && $Id_0 == $check->Id_0)) {

                                $fileName = (!is_null($check)) ? $check->Media_Image_4 : Null;
                                if ($Media_Image_4->isValid() && !$Media_Image_4->hasMoved()) {
                                        // if(file_exists( ROOTPATH . 'uploads/'.$fileName) || is_file(ROOTPATH . 'uploads/'.$fileName)){
                                        //         unlink( ROOTPATH . 'uploads/'.$fileName);
                                        // }
                                        // else{
                                        //         rmdir(ROOTPATH . 'uploads/'.$fileName);
                                        // }
                                        $filePath = ROOTPATH . 'uploads/';
                                        $fileName = $Media_Image_4->getRandomName();
                                        $Media_Image_4->move($filePath, $fileName);
                                }

                                if ($this->request->getPost("Media_type_10") == "Audios" || $this->request->getPost("Media_type_10") == "Videos" || $this->request->getPost("Media_type_10") == "Magazines") {
                                        if ($Media_Link_5->isValid() && !$Media_Link_5->hasMoved()) {
                                                // if(file_exists( ROOTPATH . 'uploads/'.$fileName) || is_file(ROOTPATH . 'uploads/'.$fileName)){
                                                //         unlink( ROOTPATH . 'uploads/'.$fileName);
                                                // }
                                                // else{
                                                //         rmdir(ROOTPATH . 'uploads/'.$fileName);
                                                // }
                                                $filePath = ROOTPATH . 'uploads/';
                                                $media_link = $Media_Link_5->getRandomName();
                                                $Media_Link_5->move($filePath, $media_link);
                                        }
                                }



                                $data['Id_0'] = $id;
                                // if (empty($Media_Link_5)) {
                                $data['Media_Id_1'] = $this->slugify->slugify($Title_2);
                                $data['Media_Link_5'] = ($this->request->getPost("Media_type_10") == "Audios" || $this->request->getPost("Media_type_10") == "Videos" || $this->request->getPost("Media_type_10") == "Magazines") ? $media_link : $this->request->getPost("Media_Link_5");
                                // } else {
                                //         $data['Media_Link_5'] = $Media_Link_5;
                                //         $data['Media_Id_1'] =  Null;
                                // }
                                $data['Title_2'] = $Title_2;
                                $data['Description_3 '] = $this->request->getPost("Description_3");
                                $data['Media_Image_4'] = $fileName;
                                $data['Author_Id_6'] = $this->session->userdata['Id_0'];
                                $data['Media_Category_7'] = $this->request->getPost("Media_Category_7");
                                $data['Status_9'] = 1;
                                $data['Media_type_10'] = $this->request->getPost("Media_type_10");
                                $data['prix_magazine'] = $this->request->getPost("prix_magazine");

                                if (is_null($Id_0)) {
                                        $data["DateCreat_8"] = date("Y-m-d H:i:s");
                                }

                                $save = $this->adminModel->save_data("media", $data, $Id_0);

                                if ($save) {
                                        echo json_encode(array("save" => true));
                                } else {
                                        echo json_encode(array("save" => false, "info" => "Erreur d'enregistrement"));
                                }
                        } else {
                                echo json_encode(array("save" => false, "info" => "Bien vérifier les valeurs inserés"));
                        }
                } elseif ($obj == "param") {
                        $userid = $this->session->userdata["Id_0"];
                        $password = $this->request->getPost('password');
                        if (Hush::verify($password, $this->session->userdata["Password_7"]) && $this->request->getPost('newpass') == $this->request->getPost('confirm')) {
                                $data = array();
                                $data["Password_7"] = Hush::make($this->request->getPost('newpass'));
                                $update = $this->adminModel->save_data("users", $data, $userid);
                                if ($update) {
                                        $userdata = $this->adminModel->get_array_user_connected($userid);
                                        $this->session->set(['userdata' => $userdata]);
                                        echo json_encode(array("save" => true));
                                } else {
                                        echo json_encode(array("save" => false, "info" => "Erreur d'enregistrement"));
                                }
                        } else {
                                echo json_encode(array("save" => false, "info" => "Vérifiez vos mot de passe svp"));
                        }
                } elseif ($obj == "basic") {
                        $userid = $this->session->userdata["Id_0"];
                        $data = array();
                        $name = $this->request->getPost("name");
                        $first_name = $this->request->getPost("first_name");
                        $last_name = $this->request->getPost("last_name");
                        $phone = $this->request->getPost("phone");
                        $email = $this->request->getPost("email");
                        $username = $this->request->getPost("username");
                        $check = $this->adminModel->get_user_by_identifiant($username, $email);
                        if (is_null($check) || (!is_null($check) && $userid == $check->Id_0)) {
                                $data["Id_0"] = $userid;
                                $data["FirstName_1"] = $first_name;
                                $data["LastName_2"] = $last_name;
                                $data["Name_3"] = $name;
                                $data["Email_4"] = $email;
                                $data["Phone_5"] = $phone;
                                $data["Username_6"] = $username;
                                $data["Updatime_11"] = date("Y-m-d H:i:s");
                                $save = $this->adminModel->save_data("users", $data, $userid);
                                if ($save) {
                                        $userdata = $this->adminModel->get_array_user_connected($userid);
                                        $this->session->set(['userdata' => $userdata]);
                                        echo json_encode(array("save" => true));
                                } else {
                                        echo json_encode(array("save" => false, "info" => "Erreur d'enregistrement"));
                                }
                        } else {
                                echo json_encode(array("save" => false, "info" => "Le nom d'utilisateur ou email existe déjà"));
                        }
                }
        }

        public function data($obj = Null, $id = Null)
        {
                if ($obj = "OBJ") {
                }
        }
}
