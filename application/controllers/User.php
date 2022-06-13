<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
            $data['title'] = 'Main Page';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        
    }

    public function editprofile()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit My Profile';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editprofile', $data);
            $this->load->view('templates/footer');
        } else {

            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            // $returnresults = $this->db->get_where('user', array('id' => $id));
            // $user_id = $this->session->userdata('id');
            // $query = $this->db->select('id')->from('user')->where('id', $user_id)->get();
            // $id = $this->db->get_where('user', ['id']);

            $this->db->set('name', $name);
            $this->db->set('address', $address);
            $this->db->set('phone', $phone);
            $this->db->set('email', $email);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your data has been updated!</div>');
            redirect('user/editprofile');
        }
    }

    public function liatuser()
    {
        $data['title'] = 'Look at User List';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load the database  
        $this->load->database();
        //load the model  
        $this->load->model('select');
        //load the method of model  
        $data['h'] = $this->select->select();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/liatuser', $data);
        $this->load->view('templates/footer');
    }

    public function edituser()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
            $data['title'] = 'Edit User List';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edituser');
            $this->load->view('templates/footer');


    }

    public function tambah(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

            $data['title'] = 'Tambah User';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambah');
            $this->load->view('templates/footer');

    }

    public function hapus()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Konfirmasi Hapus User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/hapus');
        $this->load->view('templates/footer');
    }
}
