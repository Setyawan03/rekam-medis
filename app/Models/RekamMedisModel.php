<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamMedisModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'rekam_medis';
    protected $primaryKey       = array('id', 'id', 'id');
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pasien_id', 'poli_id', 'nama_dokter', 'alamat', 'tanggal', 'diagnosa', 'resep', 'keluhan'];

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

    public function getRekammedis($id = false)
    {
        if ($id == false) {
            $data = $this->db->table('rekam_medis')
                ->join('poli', 'poli.id = rekam_medis.poli_id', 'LEFT')
                ->join('pasien', 'pasien.id = rekam_medis.pasien_id', 'LEFT')
                ->select('rekam_medis.id')
                ->select('poli.nama_poli')
                ->select('pasien.alamat')
                ->select('rekam_medis.tanggal')
                ->select('rekam_medis.keluhan')
                ->select('rekam_medis.diagnosa')
                ->select('rekam_medis.resep')
                ->select('nama_dokter')
                ->select('pasien.nama_pasien')
                ->select('poli_id')
                ->select('pasien_id')
                ->get()->getResultArray();
            return $data;
        }
        // return $this->db->table('rekam_medis')
        // ->orderBy('id', 'DESC')
        // ->join('poli', 'poli.poli_id = rekam_medis.poli_id')
        // ->join('pasien', 'pasien.pasien_id = rekam_medis.pasien_id')
        // ->get()->getResultArray();
    }

    public function getRekammedisById($id)
    {
        $data = $this->db->table('rekam_medis')
            ->where('rekam_medis.id', $id)
            ->join('poli', 'poli.id = rekam_medis.poli_id', 'LEFT')
            ->join('pasien', 'pasien.id = rekam_medis.pasien_id', 'LEFT')
            ->select('rekam_medis.id')
            ->select('poli.nama_poli')
            ->select('pasien.alamat')
            ->select('rekam_medis.tanggal')
            ->select('rekam_medis.keluhan')
            ->select('rekam_medis.diagnosa')
            ->select('rekam_medis.resep')
            ->select('rekam_medis.nama_dokter')
            ->select('rekam_medis.poli_id')
            ->select('rekam_medis.pasien_id')
            ->select('pasien.nama_pasien')
            ->get()->getFirstRow();
        return $array = (array)  $data;
    }


    public function updateData($id, $data)
    {
        $builder = $this->db->table('rekam_medis');
        $builder->where('id', $id);
        $builder->update($data);
        return true;
    }
}
