<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('voucher_m');
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role']  = $this->session->userdata('id_role');
        if(!isset($this->data['username']) && $this->data['id_role'] != 2)
        {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('id_role');
            $this->session->unset_userdata('status');
            $this->flashmsg('<i class="fa fa-warning"></i> You must login first!', 'warning');
            redirect('login');
            exit;
        }
    }

    public function index()
    {
        $this->data['title'] ='Admin | ';
        $this->data['content'] = 'admin/main';
        $this->data['active'] = 0;
        $this->load->view('admin/template/template', $this->data);
    }

    public function generate() {
        if(isset($this->data['username'])) {
            $unique = md5(uniqid(rand(), true));
            $key = substr($unique, strlen($unique) - 10, strlen($unique));
            echo json_encode(array('key' => $key, 'status' => 'success'));
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

    public function saveKey()
    {
        if(isset($this->data['username'])) {
            $data = array(
                'id_voucher' => $this->POST('keys'),
                'jumlah' => $this->POST('jumlah'),
                'status' => 0
            );
            $this->voucher_m->insert($data);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

    public function key_data()
    {
        if(isset($this->data['username'])) {
            $data = $this->voucher_m->get();
            echo json_encode($data);
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

    public function finalis()
    {
        $this->load->model('Data_finalis_m');
        $this->data['finalis'] = $this->Data_finalis_m->get();
        $this->data['content'] = 'admin/finalis';
        $this->data['title'] = 'Admin | Finalis';
        $this->data['active'] = 1;
        $this->load->view('admin/template/template',$this->data);
    }

    public function input_finalis(){
        $this->load->model('Data_finalis_m');
        
        if($this->POST('submit'))
        {
            $config['upload_path'] = './assets/';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar');
            $data = $this->upload->data();
            $gambar = file_get_contents($data['full_path']);
            unlink($data['full_path']);
            $data = array(
                'id_finalis' => $this->POST('id_finalis'),
                'nama' => $this->POST('nama'),
                'jurusan' => $this->POST('jurusan'),
                'jk' => $this->POST('jk'),
                'foto' => $gambar,
                'jml_vote' => 0
            );
            $cek = $this->Data_finalis_m->get("id_finalis = ".$this->POST('id_finalis'));
            if(count($cek)>0){
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">No Finalis yang disimpan sudah ada!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }else{
                $this->Data_finalis_m->insert($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Admin/finalis');
            }
            
        }
        $this->data['content'] = 'admin/input_finalis';
        $this->data['title'] = 'Admin | Input Finalis';
        $this->data['active'] = 1;
        $this->load->view('admin/template/template',$this->data);
    }

    public function edit_finalis($id)
    {
        $this->load->model('Data_finalis_m');
        $this->data['data'] = $this->Data_finalis_m->get_row(array('id_finalis'=>$id));
        if($this->POST('submit'))
        {   
            $config['upload_path'] = './assets/';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->upload->initialize($config);
            $gambar = $this->data['data']->foto;
            if($this->upload->do_upload('gambar'))
            {
                $data = $this->upload->data();
                $gambar = file_get_contents($data['full_path']);
                unlink($data['full_path']);
            }
            
            $data = array(
                'id_finalis' => $this->POST('id_finalis'),
                'nama' => $this->POST('nama'),
                'jurusan' => $this->POST('jurusan'),
                'jk' => $this->POST('jk'),
                'foto' => $gambar,
            );
            $cek = $this->Data_finalis_m->get("id_finalis = ".$this->POST('id_finalis')." and id_finalis != ".$id);
            if(count($cek)>0){
                $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">No Finalis yang disimpan sudah ada!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }else{
                $this->Data_finalis_m->update($id,$data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Admin/finalis');
            }
        }
        $this->data['content'] = 'admin/edit_finalis';
        $this->data['title'] = 'Admin | edit Finalis';
        $this->data['active'] = 1;
        // print_r($this->data['data']);
        $this->load->view('admin/template/template',$this->data);
    }

    public function hapus_finalis($id)
    {
        $this->load->model('Data_finalis_m');
        $this->Data_finalis_m->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Admin/finalis');
    }

}

/* End of file Admin.php */
