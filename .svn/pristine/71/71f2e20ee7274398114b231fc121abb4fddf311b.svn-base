<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Akhi Bahtiar
 */

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_m');
    }

    function index()
    {
        if ($data['mahasiswas'] = $this->mahasiswa_m->get_all()) {
            $data['mahasiswas'] = $this->mahasiswa_m->get_all();

        } else {
            $data['mahasiswas'] = array();

        }
        $this->load->view('header');
        $this->load->view('mahasiswa_input');
        $this->load->view('mahasiswa_table', $data);
        $this->load->view('footer');
    }

    function insert()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        );

        $this->mahasiswa_m->insert($data);
        redirect('mahasiswa');

    }

    function ubah()
    {
        $id = $this->uri->segment(3);
        $data['mahasiswa'] = $this->mahasiswa_m->get_by_id($id);
        $data['mahasiswas'] = $this->mahasiswa_m->get_all();
        $this->load->view('header');
        $this->load->view('mahasiswa_update', $data);
        $this->load->view('mahasiswa_table');
        $this->load->view('footer');

    }

    function update()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        );

        $this->mahasiswa_m->update($data);
        redirect('mahasiswa');
    }

    function delete(){
        if ($data['mahasiswas'] = $this->mahasiswa_m->get_all()) {
            $data['mahasiswas'] = $this->mahasiswa_m->get_all();

        } else {
            $data['mahasiswas'] = array();

        }
        $id = $this->uri->segment(3);
        $this->mahasiswa_m->delete($id);
        $data['mahasiswas'] = $this->mahasiswa_m->get_all();
        $this->load->view('header');
        $this->load->view('mahasiswa_input', $data);
        $this->load->view('mahasiswa_table');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */