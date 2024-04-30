<?php

class Login extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){
        $this->load->view('login/register');
    }

    public function register(){
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $passed_data = array(
            'username' => $userName,
            'password' => $password,
            'email' => $email
        );
        $res = $this->login_model->register_user($passed_data);
        if($res == "user_exists")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>User Already Exists. Please <a href = 'login'>Login </a> Here.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "incomplete_field")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>Please fill all the mandatory fields!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "error")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>Error! Please retry.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "success")
        {
            redirect('login/login');
        }
        $this->load->view('login/register',$data);
    }

    public function login(){
        $this->load->view('login/login');
    }
    
    public function Userlogin(){
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $passed_data = array(
            'password' => $password,
            'email' => $email
        );
        $res = $this->login_model->login_user($passed_data);
        if($res == "user_not_found")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>User Not Found. Please <a href = 'index'>Register </a> Here.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "incomplete_field")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>Please fill all the mandatory fields!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "error")
        {
            $data['code'] = "
                <div class='box box-success'>
                    <div class='box-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h5>Error! Please retry.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        if($res == "success")
        {
            redirect('login/home');
        }
        $this->load->view('login/login',$data);
    }

    public function home(){
        $this->load->view('login/home');
    }
}