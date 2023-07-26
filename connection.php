<?php
class Db_connection
{
    private $connection;

    function __construct()
    {
        $this->db_connect();
    }

    public function db_connect()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
        if (mysqli_connect_error()) {
            die ('this connection is not established' . mysqli_connect_error() . mysqli_connect_error());
        };
    }

    function create($fname, $lname, $email, $address, $city, $zip, $password)
    {
        $db_sql = "INSERT INTO Student VALUES ('$fname','$lname','$email','$address','$city','$zip','$password')";
        $res = mysqli_query($this->connection, $db_sql);
        if ($res) {
            return 'Entry created';
        } else {
            return 'Entry not created';
        }
    }

    function read($email, $password)
    {
        $sql = "SELECT * FROM Student WHERE email ='$email' AND password = '$password'";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    function fetch()
    {
        $sql = "SELECT * FROM Student";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

    function delete($id){
        $query= "DELETE FROM Student WHERE Id= '$id'";
        $res= mysqli_query($this->connection, $query);
        return "The data has been succesfully deleted";
    }
}

$database = new Db_connection();
?>