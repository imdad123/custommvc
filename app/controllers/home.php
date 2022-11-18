<?php 

class Home extends Controller{
    function index()
    {
        echo "Index";
    }
    function test($name)
    {
        $user = $this->model("Movies");
        //$user->name = $name;
        //$this->view("home/index",["name"=>$user->name]);
        $user::Create(
            [
                "moviename" => "imdad 123",
                "releasedate" => "2022-10-20"
            ]
        );
    }
}
?>