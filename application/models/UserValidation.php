<?php

class UserValidation extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validate()
    {
        $accountType = $this->input->post('accountType');
        if ($accountType == "applicant") {
            $this->validateApplicant();
        } else if ($accountType == "user") {
            $this->verifyUser();
        }
    }

    //checking login credentials for applicants
    public function validateApplicant()
    {

        $email = $this->input->post('username');
        $password = $this->input->post('password');

        if ($email != null && $password != null) {
            $this->load->database();
            $this->db->select("PASSWORD");
            $this->db->select("EMAIL");
            $this->db->from("applicants");
            $this->db->where("EMAIL", $email);
            $query = $this->db->get();

            $rowcount = $query->num_rows();

            if ($rowcount == 0) {
                redirect(base_url() . "login?error=errorUsername");
                //echo "we are her now";
//                redirect(base_url() . "ApplicantLogin/errorUsername");
            } else {

                foreach ($query->result() as $row) {
                    if ($row->PASSWORD == md5($password)) {

                        $this->load->library('session');

                        $data = array(
                            'email' => $row->EMAIL,
//                            'usertype' => $row->USER_TYPE,
                            'logged_in' => TRUE,
                            'accountType' => 'Applicant'
                        );

                        $this->session->set_userdata($data);

//                        $usertype = $this->session->userdata($data);
//                        echo $this->session->userdata('email');
//                        redirect(base_url() . "ApplicantLogin/applicant");
                        redirect(base_url() . "main");
                    } else {
//                        redirect(base_url() . "ApplicantLogin/wrongPassword");
                        redirect(base_url() . "login?error=errorPassword");
                    }
                    break;
                }
                redirect(base_url() . "login?error=error");
            }
            //redirect(base_url()."?login=false", 'location');

        } else {
            //redirect or show appropriate message
            redirect(base_url() . "login?error=error");
        }
    }

    //method to check whether an account exists already from that email. used in registration
    public function checkValidity()
    {

        $email = $this->testInput($_POST['email']);
        $password = $this->testInput($_POST['psw']);
        $repeat = $this->testInput($_POST['psw-repeat']);

        if ($email != null && $password != null && $repeat != null) {

            $this->load->database();
            $this->db->select("EMAIL");
            $this->db->from("applicants");
            $this->db->where("EMAIL", $email);
            $query = $this->db->get();
            $rowcount = $query->num_rows();

            if ($rowcount == 0) {
                /*register();*/
            } else {
//                redirect(base_url() . "ApplicantLogin/errorUsername");
                redirect(base_url() . "login?error=errorUsername");
                //echo "in herer";

            }
        }
    }

    public function verifyUser()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username != null && $password != null) {
            $this->load->database();
            $this->db->select("PASSWORD");
            $this->db->select("USERNAME");
            $this->db->from("users");
            $this->db->where("USERNAME", $username);
            $query = $this->db->get();

            $rowcount = $query->num_rows();

            if ($rowcount == 0) {
//                redirect(base_url() . "UsersLogin/errorUsername");
                redirect(base_url() . "login?error=errorUsername");
            } else {

                foreach ($query->result() as $row) {
                    if ($row->PASSWORD == md5($password)) {

                        $this->load->library('session');

                        $data = array(
                            'email' => $row->EMAIL,
                            'username' => $row->USERNAME,
                            'logged_in' => TRUE,
                            'accountType' => 'User'
                        );

                        $this->session->set_userdata($data);

                        $usertype = $this->session->userdata($data);

                        //redirect(base_url()."ApplicantLogin/applicant");
                        redirect(base_url() . "main");

                        if ($username == 'operator') {
//                            redirect(base_url() . "OperatorDashboard");

                        } else if ($username == 'SAR') {
                            //yet to implement
                        } else {

                        }

                    } else {
                        //show error message
//                        redirect(base_url() . "UsersLogin/errorPassword");
                        redirect(base_url() . "login?error=errorPassword");
                    }

                    break;
                }
                redirect(base_url() . "login?error=error");
            }
        } else {
            redirect(base_url() . "login?error=error");
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect(base_url() . "login");
        //redirect(base_url()."?logout=true", 'location');
    }

}

?>
