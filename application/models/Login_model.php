<?php
class Login_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * This function checks if the user exists in the table. This is
     * used before registering a user, and before logging in.
     * 
     * For Registering, check if the user exists. If the user already exists,
     * do not register that user. Display a message notifying that the user already exists,
     * and ask them to login instead. If the user does not exist, register them.
     * 
     * For Logging in, check if the user exists. If the user already exists, login them.
     * If the user does not exist, ask them to register first and then try logging in.
     * 
     * @param
     * $data => an associative array consisting of three fields.
     * $data => (
     *          'username' => $username,
     *          'email' => $email,
     *          'password' => $password
     *          )
     * 
     * Queries are written using QueryBuilder syntax.
     * $this->db->select('count(*) as count')->where($data)->get('users') is equivalent to
     * "SELECT count(*) as count FROM users WHERE $data";
     */

    public function check_user_exists($data)
    {
        $result = $this->db->select('count(*) as count')
                        ->where($data)
                        ->get('users')
                        ->row_array();
        if($result['count'] > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Function is used to register a user. First, check if the
     * user exists in the database. If the user exists, return a
     * message prompting the user to login instead of registering.
     * If the user does not exist, check if any field is empty. If
     * a field is empty, return a message informing the user to fill
     * the field. If all the above conditions are met, add the data 
     * into the database.
     * 
     * @param
     * $data => an associative array consisting of three fields.
     * $data => (
     *          'username' => $username,
     *          'email' => $email,
     *          'password' => $password
     *          )
     * @return
     * error_message -> "User Exists" if the user exists in the table
     * error_message -> "Fields incomplete" if a field is not filled
     * error_message -> "Error!" in case of a database error
     * status -> "Success!" in case of successful entry in the database.
     */
    public function register_user($data)
    {
        $res = $this->check_user_exists($data);
        if($res == true)
        {
            return "user_exists";
        }
        else
        {
            if(!isset($data['password']) || !isset($data['email']))
            {
                return "incomplete_field";
            }
            else
            {
                $query = $this->db->insert('users',$data);
                if(!$query)
                {
                    return "error";
                }
                else
                {
                    return "success";
                }
            }
        }
    }

    /**
     * Function is used to login a user. Check if the user already exists in
     * the database. If the user exists, then login. If not, then prompt the user to
     * register first. Also, check if all the passed fields are filled correctly,
     * and proceed further if there are no null fields present in the array.
     * 
    * @param
     * $data => an associative array consisting of two fields.
     * $data => (
     *          'email' => $email,
     *          'password' => $password
     *          )
     * @return
     * error_message -> "User Does Not Exist" if the user does not exists in the table
     * error_message -> "Fields incomplete" if a field is not filled
     * error_message -> "Error!" in case of a database error
     * status -> "Success!" in case of successful entry in the database.
     * 
     */
    public function login_user($data)
    {
        $res = $this->check_user_exists($data);
        if($res == false)
        {
            return "user_not_found";
        }
        else
        {
            if(!isset($data['password']) || !isset($data['email']))
            {
                return "incomplete_field";
            }
            else
            {
                $query = $this->check_user_exists($data);
                if(!$query)
                {
                    return "error";
                }
                else
                {
                    return "success";
                }
            }
        }
    }
}