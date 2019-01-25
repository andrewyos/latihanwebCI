<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

    public function getBuku()
    {
        $query_str = "SELECT * FROM buku";
        $query = $this->db->query($query_str)->result_array();

        return $query;
    }    

public function tambah_data($data)
{
    $this->db->insert('buku', $data);
}

public function edit_form($where)
{
    $query = $this->db->get_where('buku', $where)->row_array();
    return $query;
}

public function edit_data($where, $data)
{
    $this->db->where($where);
    //$this->db->where('id_buku', $data['id_buku']);
    //return $this->db->update('buku', $data);
    $this->db->update('buku',$data);
}

public function hapus($id)
{
    $query = array('id_buku' => $id);
    $this->db->delete('buku', $query);
}

public function hapus_data($where)
{
    $this->db->where($where);
    $this->db->delete('buku');
}

public function search($keyword)
{
    $this->db->like('judul', $keyword);
    $this->db->or_like('penulis', $keyword);
    $this->db->or_like('tahun_terbit', $keyword);

    $query = $this->db->get('buku')->result_array();

    return $query;
}

public function getBukuId($id)
{
    $query = $this->db->get_where('buku', array('id_buku' => $id))->row_array();
    return $query;
}

public function getBukuById($where)
{
    $this->db->join('genre', 'buku.id_genre = genre.id_genre');
    

    $query = $this->db->get_where('buku', $where)->row_array();
    return $query;
}

public function getGenre()
{
    $query = $this->db->get('genre')->result_array();
    return $query;
}
}


?>