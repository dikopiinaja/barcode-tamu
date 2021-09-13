<?php 
class Laporan_model extends CI_Model 
{
    public function Laporan_all()
    {
        $this->db->get('tamu')->result();
    }

    public function laporan_by_date($date)
    {
        $this->db->select('*');
		$this->db->from('tamu');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan');

        $this->db->where('DATE(tgl_berkunjung)', $date);

        return $this->db->get()->result();
    }

    public function laporan_by_month($month, $year)
    {
        $this->db->select('*');
		$this->db->from('tamu');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan');

		$this->db->where('MONTH(tgl_berkunjung)', $month);
		$this->db->where('YEAR(tgl_berkunjung)', $year);

        return $this->db->get()->result();
    }

    public function laporan_by_year($year)
    {
        $this->db->select('*');
		$this->db->from('tamu');
		$this->db->join('tamu_detail', 'tamu_detail.nik = tamu.nik', 'left');
		$this->db->join('karyawan', 'karyawan.id_karyawan = tamu.id_karyawan');

        $this->db->where('YEAR(tgl_berkunjung)', $year);

        return $this->db->get()->result();
    }

    public function option_tahun()
    {
        $this->db->select('YEAR(tgl_berkunjung) AS tahun');
        $this->db->from('tamu');
        $this->db->order_by('YEAR(tgl_berkunjung)');
        $this->db->group_by('YEAR(tgl_berkunjung)');

        return $this->db->get()->result();
    }
}

?>