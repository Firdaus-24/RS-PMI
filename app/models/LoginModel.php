<?php

class LoginModel
{

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkLogin($data)
    {
        $query = "SELECT * FROM Users WHERE email = :email";

        try {
            // Menyiapkan statement
            $this->db->query($query);

            // Bind parameter
            $this->db->bind(':email', $data['email']);

            // Eksekusi statement
            $this->db->execute();

            // Mengambil hasil
            $user = $this->db->single();

            // Memverifikasi password
            if ($user && password_verify($data['password'], $user['password'])) {
                return $user;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            return null; // Jika terjadi kesalahan, kembalikan null
        }
    }
}
