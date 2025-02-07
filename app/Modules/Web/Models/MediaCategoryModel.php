<?php

namespace App\Modules\Web\Models;

use CodeIgniter\Model;

class MediaCategoryModel extends Model
{
    protected $table            = 'media_category';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_media_category_list()
    {
        $query = $this->select("*")
            ->where('Status_3', 1);
        return $query->findAll();
    }

    public function get_media_category_by_id($id)
    {
        $query = $this->select("*")
            ->where('Id_0', $id)
            ->where('Status_3', 1);
        return $query->findAll(1);
    }

    public function get_media_category_id_by_description($category_description)
    {
        $query = $this->select("*")
            ->where('Description_1', $category_description)
            ->where('Status_3', 1);
        return $query->findAll(1);
    }
    public function get_media_category_id_by_slug($category_slug)
    {
        $query = $this->select("Id_0")
            ->where('Slug_5', $category_slug)
            ->where('Status_3', 1);
        return $query->findAll(1);
    }
    public function get_media_category_slug_list()
    {
        $query = $this->select("*")
            ->where('Status_3', 1);
        return $query->findAll();
    }
    public function get_menu_categorie_list()
    {
        $st = "Status_3=1 AND Description_1!='Direct TV' ";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll(8);
    }
}
