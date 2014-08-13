<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    function index($id=NULL)
    {
        
        $data['links_sch'] = $this->home_model->get_links_sch();
        $data['links_pt'] = $this->home_model->get_links_pt();
		$data['links_pondok'] = $this->home_model->get_links_pondok();
        

        $jml = $this->db->get('pengumuman');

        $config["base_url"] = base_url() . "home/index";

        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = 5;
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul><!–pagination–>';
        
        $config['first_link'] = '&laquo; Awal';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Akhir &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = 'Selanjutnya &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&larr; Sebelumnya';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
         
        //buat pagination
        $data['halaman'] = $this->pagination->create_links();
        $data['homes'] = $this->home_model->c_pengumuman($config['per_page'], $id);
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/konten',$data);
        //$this->load->view('home/register');
        $this->load->view('home/footer',$data);
    }
public function halaman_ilang()
      { 
      $this->load->view('admin/admin_404');  
      }
public function tampilpengumuman()
      { 
        $segments = array('home', 'local', '1');

echo site_url($segments);
        $this->load->helper('url');
        $data['select_pengumuman']=$this->db->get_where('pengumuman',array('id_pengumuman' =>$this->uri->segmen(2)));
        $this->load->view('home/tampilpengumuman',$data);
        $data['links_sch'] = $this->home_model->get_links_sch();
        $data['links_pt'] = $this->home_model->get_links_pt();
        $data['links_pondok'] = $this->home_model->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function tentang_website()
      {  

        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/hubungi_kami');
        $this->load->view('home/widget');
        $this->load->view('home/footer',$data);
      }
public function santri_daftar()
      {  
        $this->load->library('form_validation');
		$config = array(
					   array(
							 'field'   => 'nama_lengkap', 
							 'label'   => 'nama_lengkap', 
							 'rules'   => 'required'
						  ),
					   array(
							 'field'   => 'password', 
							 'label'   => 'Password', 
							 'rules'   => 'required'
						  ),
					   array(
							 'field'   => 'email', 
							 'label'   => 'Email', 
							 'rules'   => 'required'
						  )
					);

		$this->form_validation->set_rules($config);
					if ($this->form_validation->run() == FALSE)
				  {
                    $data['option_propinsi'] = $this->home_model->getPropinsiList();
					$data['links_sch'] = $this->home_model->get_links_sch();
					$data['links_pt'] = $this->home_model->get_links_pt();
					$data['links_pondok'] = $this->home_model->get_links_pondok();  
					$this->load->view('home/header');
					$this->load->view('home/menu');
					$this->load->view('home/register',$data);
					$this->load->view('home/footer',$data);
				  }else{
                    
                  }

      }
public function kab(){
    if('IS_AJAX') {
        $data['option_kab'] = $this->home_model->getKabList();
        $this->load->view('home/kab',$data);
    }
    }
public function kec(){
    if('IS_AJAX') {
        $data['option_kec'] = $this->home_model->getKecList();
        $this->load->view('home/kec',$data);
    }
    }
public function proses_tambah()
      {  
        $data=array('id_santri_baru'=>$this->input->post('id_santri_baru'),
        'nama_lengkap'=>$this->input->post('nama_lengkap'),
        'nama_panggilan'=>$this->input->post('nama_panggilan'),
        'tempat_lahir'=>$this->input->post('tempat_lahir'),
        'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
        'kelamin'=>$this->input->post('kelamin'),
        'catatan_kesehatan'=>$this->input->post('catatan_kesehatan'),
        'warga_negara'=>$this->input->post('warga_negara'),
        'alamat'=>$this->input->post('alamat'),
        'propinsi'=>$this->input->post('propinsi'),
        'kabupaten'=>$this->input->post('kabupaten'),
        'kecamatan'=>$this->input->post('kecamatan'),
        'kode_pos'=>$this->input->post('kode_pos'),
        'pendidikan_terakhir'=>$this->input->post('pendidikan_terakhir'),
        'tahun_lulus'=>$this->input->post('tahun_lulus'),
        'sekolah_asal'=>$this->input->post('sekolah_asal'),
        'alamat_sekolah'=>$this->input->post('alamat_sekolah'),
        'nama_wali'=>$this->input->post('nama_wali'),
        'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
        'kontak_wali'=>$this->input->post('kontak_wali'),
        'alamat_wali'=>$this->input->post('alamat_wali'),
        'no_identitas'=>$this->input->post('no_identitas'),
        'nama_ibu'=>$this->input->post('nama_ibu'),
        'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
        'kontak_ibu'=>$this->input->post('kontak_ibu'),
        'alamat_ibu'=>$this->input->post('alamat_ibu'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
        'dokumen_lengkap'=>$this->input->post('dokumen_lengkap'),
        'pembayaran'=>$this->input->post('pembayaran'),
        'catatan'=>$this->input->post('catatan'),
		'last_change'=>date("Y-m-d h:i:s"),
        'id_user'=>$this->input->post('id_user'),
        'id_sekolah'=>$this->input->post('id_sekolah'),
        'id_priode'=>$this->input->post('id_priode'),
        'id_ta'=>$this->input->post('id_ta'));
        $this->home_model->insert_santri($data);
        redirect('home/daftar_oke');
      }
public function santri_lengkapi_data()
      {  
        $data['links_sch'] = $this->home_model->get_links_sch();
        $data['links_pt'] = $this->home_model->get_links_pt();
        $data['links_pondok'] = $this->home_model->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function santri_konfirmasi()
      {  
        $data['links_sch'] = $this->home_model->get_links_sch();
        $data['links_pt'] = $this->home_model->get_links_pt();
        $data['links_pondok'] = $this->home_model->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
public function daftar_oke()
      {  
        $data['links_sch'] = $this->home_model->get_links_sch();
        $data['links_pt'] = $this->home_model->get_links_pt();
        $data['links_pondok'] = $this->home_model->get_links_pondok();  
        $this->load->view('home/header');
        $this->load->view('home/menu');
        $this->load->view('home/register');
        $this->load->view('home/footer',$data);
      }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */