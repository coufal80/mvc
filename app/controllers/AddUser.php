<?php
// AddUser class
class AddUser
{
    use Controller;

    public function index()
    {
        $data = array('first_name', 'last_name', 'email', 'phone', 'address', 'zip');
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $user = new User;
            // if ($user->validate($_POST))
            
                $user->insert($_POST);
                redirect('admin');
            
            $data['errors'] = $user->errors;                
        }
        $this->view('adduser', $data);
    }

}
    


