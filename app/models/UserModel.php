<?php

class UserModel
{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM users");
        return $this->db->resultSet();
    }

    public function tambahUser($data)
    {
        $query = "INSERT INTO Users (name, email, nik, alamat, msisdn, username, password) VALUES (:name, :email, :nik, :alamat, :msisdn,  :username, :password)";
        try {
            // Menyiapkan statement
            $this->db->query($query);

            $phash = password_hash($_POST['password'],  PASSWORD_BCRYPT);
            // Bind parameter
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':nik', $data['nik']);
            $this->db->bind(':alamat', $data['alamat']);
            $this->db->bind(':msisdn', $data['msisdn']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $phash);

            // Eksekusi statement
            $this->db->execute();

            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0; // Jika terjadi kesalahan, kembalikan 0 (tidak berhasil)
        }
    }
}
