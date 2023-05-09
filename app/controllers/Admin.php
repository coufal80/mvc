<?php
// Admin class
class Admin
{
    use Controller;
    public function index()
    {
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        $this->view('admin',$data);
    }

}
