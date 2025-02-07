<?php

namespace Modules\Api\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table            = '';
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

    public function get_media_list()
    {
        $this->table = "media";
        $query = $this->select("*")->orderBy("Id_0 DESC");
        return $query->findAll();
    }

    public function get_media_list_by_category($category)
    {
        $this->table = "media";
        $query = $this->select("*")->orderBy("DateCreat_8 DESC")
            ->where('Media_Category_7', $category);
        return $query->findAll();
    }

    public function get_media_by_id($media_id)
    {
        $this->table = "media";
        $query = $this->select("*")->where('Id_0', $media_id);
        return $query->findAll();
    }

    public function get_media_category_list()
    {
        $this->table = "media_category";
        $query = $this->select("*")->orderBy("Id_0 DESC");
        return $query->findAll();
    }

    public function get_media_direct()
    {
        $this->table = "media";
        $st = "Media_type_10='Direct TV' AND Status_9=1 ORDER BY DateCreat_8 DESC";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll();
    }
    public function get_media_direct_list()
    {
        $this->table = "media";
        $st = "Media_type_10='Direct TV' AND Status_9=1 ORDER BY DateCreat_8 DESC";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll(8);
    }
    public function get_podcasts_list($limit = null)
    {
        $this->table = "media";
        $st = "Media_type_10='Audios' AND Status_9=1 ORDER BY DateCreat_8 DESC";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll($limit);
    }
    public function get_magazine_list($limit = null)
    {
        $this->table = "media";
        $st = "Media_type_10='Magazines' AND Status_9=1 ORDER BY DateCreat_8 DESC";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll($limit);
    }
    public function get_replays_list($limit = null)
    {
        $this->table = "media";
        $st = "Media_type_10='Replays' AND Status_9=1 ORDER BY DateCreat_8 DESC";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll($limit);
    }
}
