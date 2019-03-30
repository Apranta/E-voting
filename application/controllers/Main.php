<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_finalis_m');
    }
    

    public function index()
    {
        $this->data['bujang'] = $this->Data_finalis_m->get(array('jk' => 1));
        $this->data['gadis'] = $this->Data_finalis_m->get(array('jk' => 2));
        $this->data['title'] ='Home | Vote';
        $this->data['content'] = 'main';
        $this->data['active'] = 0;
        $this->load->view('template/template', $this->data);
    }

    public function chart()
    {
        $this->data['bujang'] = $this->Data_finalis_m->get(array('jk' => 1));
        $this->data['gadis'] = $this->Data_finalis_m->get(array('jk' => 2));
        $this->data['title'] ='Home | Vote';
        $this->data['content'] = 'vote';
        $this->data['active'] = 1;
        $this->load->view('template/template', $this->data);
    }

    public function do_vote()
    {
        $this->load->model('voucher_m');
        $id = $this->POST('id');
        if($this->POST('submit'))
        {
            if($this->post('captcha')!='Captcha: '.$this->post('cek'))
            {
                echo "<script>captcha()</script>";
                exit;
            }

            if($this->voucher_m->get_num_row(array('id_voucher'=>$this->POST('voucher'))) > 0)
            {
                $cek = $this->voucher_m->get_row(array('id_voucher'=>$this->POST('voucher')));
                if($cek->status == 0)
                {
                    $finalis = $this->Data_finalis_m->get_row(array('id_finalis'=>$id));
                    $vote = array(
                        'jml_vote' => $finalis->jml_vote + $cek->jumlah
                    );

                    $expVoucher = array(
                        'status'=>1
                    );
                    $this->voucher_m->update($cek->id_voucher,$expVoucher);
                    $this->Data_finalis_m->update($id,$vote);
                    echo "<script>berhasil()</script>";
                    exit;
                }else{
                    echo "<script>salah()</script>";
                    exit;
                }
            }
            
        }
        echo "Access denied";
    }
}

/* End of file Main.php */
?>
<script>
    function berhasil()
    {
        alert('Vote Berhasil');
        window.location = 'index';
    }

    function salah()
    {
        alert('Voucher yang diinputkan salah');
        window.location = 'index';
    }

    function captcha()
    {
        alert('Captcha salah');
        window.location = 'index';
    }
</script>