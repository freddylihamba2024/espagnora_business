<?php

namespace Modules\Web\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table            = 'media';
    protected $primaryKey       = 'Id_0';
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

    public function get_direct_tv()
    {
        $query = $this->select("*")
            ->where('Status_9', 1)
            ->where('Media_Category_7', 2);
        return $query->find();
    }
    public function get_latest_news($limit = null)
    {
        $query = $this->select("*")
            ->where("Media_type_10 IN('Actualites') ")
            ->where('Status_9', 1)
            ->orderBy('DateCreat_8 DESC');
        return $query->findAll($limit);
    }

    public function get_latest_news_by_media_type($media_type, $limit = null, $category = null)
    {
        $st = "Media_type_10 = '" . $media_type . "' AND Status_9=1";
        if ($category != null) {
            $st .= " AND Media_Category_7 = $category";
        }
        $query = $this->select("*")
            ->where($st)
            ->orderBy('DateCreat_8 DESC');
        return $query->findAll($limit);
    }
    public function get_latest_news_by_media_category($category, $limit = null)
    {
        $st = "Media_Category_7  = '" . $category . "' AND Status_9=1";
        $query = $this->select("*")
            ->where($st);
        return $query->findAll($limit);
    }

    public function get_media_by_slug($media_slug = null)
    {
        $query = $this->select("*")
            ->where('Media_Id_1', $media_slug);
        return $query->findAll(1);
    }

    public function get_media_list_by_media_type($media_type, $category = null, $limit = null, $start = 0)
    {
        $st = "Media_type_10 IN(" . $media_type . ") AND Status_9=1";
        if ($category != null) {
            $st .= " AND Media_Category_7=$category";
        }
        $query = $this->select("*")
            ->where($st);
        return $query->findAll($limit, $start);
    }
    
}
