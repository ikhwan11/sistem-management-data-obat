<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $config['base_url'] = 'http://localhost/skripsi_dora/user/index';
        $config['total_rows'] = $this->dora_model->hitungDataUser();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'user' => $this->dora_model->getUser($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3),
        );

        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_data', $data);
        $this->load->view('templates/footer');
    }

    // create
    public function tambah_user()
    {
        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_tambah');
        $this->load->view('templates/footer');
    }

    public function tambah_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_user();
        } else {
            $nama_depan = $this->input->post('nama_d');
            $nama_belakang = $this->input->post('nama_b');
            $jenis_kelamin = $this->input->post('jk');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $no_hp = $this->input->post('no_hp');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kec');
            $kota = $this->input->post('kota');
            $jabatan = $this->input->post('jabatan');
            $foto = $_FILES['foto']['name'];

            if ($foto = '') {
            } else {
                $config['upload_path']     = './assets/foto_user';
                $config['allowed_types']    = 'jpg|jpeg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Foto gagal di upload!";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_depan' => $nama_depan,
                'nama_belakang' => $nama_belakang,
                'jenis_kelamin' => $jenis_kelamin,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'no_hp' => $no_hp,
                'alamat' => $alamat,
                'kecamatan' => $kecamatan,
                'kota' => $kota,
                'jabatan' => $jabatan,
                'foto' => $foto,
            );

            $this->dora_model->insert_data($data, 'tb_user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah user berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('user/');
        }
    }


    // update
    public function update_user($id)
    {
        $data = array(
            'user' => $this->dora_model->ambil_id_user($id),
        );
        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_update', $data);
        $this->load->view('templates/footer');
    }

    public function update_user_aksi()
    {

        $id_user = $this->input->post('id');
        $nama_depan = $this->input->post('nama_d');
        $nama_belakang = $this->input->post('nama_b');
        $jenis_kelamin = $this->input->post('jk');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $kecamatan = $this->input->post('kec');
        $kota = $this->input->post('kota');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'kecamatan' => $kecamatan,
            'kota' => $kota,
            'jabatan' => $jabatan,
        );
        $where = array(
            'id_user' => $id_user
        );

        $this->db->update('tb_user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Update data berhasil !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('user/');
    }

    public function update_foto()
    {
        $id                   = $this->input->post('id');
        $foto                 = $_FILES['foto']['name'];

        if ($foto = '') {
        } else {
            $config['upload_path']     = './assets/foto_user';
            $config['allowed_types']    = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Foto gagal di upload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array('foto' => $foto);
        $where = array(
            'id_user' => $id
        );

        $this->dora_model->update_data('tb_user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				 foto berhasil di update!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }

    public function update_data_akses()
    {

        $id_user = $this->input->post('id');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = array(
            'username' => $username,
            'password' => $password,
        );
        $where = array(
            'id_user' => $id_user
        );

        $this->db->update('tb_user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Update data berhasil !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('user/');
    }

    public function hapus_user($id)
    {
        $where = array('id_user' => $id);

        $this->dora_model->delete_data($where, 'tb_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data user dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }



    public function _rules()
    {
        $this->form_validation->set_rules('nama_d', 'Nama depan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('nama_b', 'Nama belakang', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('email', 'E-mail', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('no_hp', 'No hp', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('kec', 'Kecamatan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('kota', 'Kota', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('jk', 'Jenis kelamin', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
