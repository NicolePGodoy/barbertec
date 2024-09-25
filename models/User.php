<?php
require_once '../core/Model.php';

class User extends Model {
    public function getAllBarbers() {
        $result = $this->query("SELECT * FROM users WHERE rol = 'barber'");
        $barbers = [];
        while ($row = $result->fetch_assoc()) {
            $barbers[] = $row;
        }
        return $barbers;
    }

    public function getUserById($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM users WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function createRate($id, $data) {
        $id = $this->escape($id);
        $rating = $this->escape($data['rating']);
        $comment = $this->escape($data['comment']);
        $sql = "INSERT reviews (id_user, rating, comment) VALUES ($id, $rating, '$comment')";
        return $this->query($sql);
    }

    public function getReviews($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM reviews WHERE id_user = $id");
        $reviews = [];
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
        return $reviews;
    }
    public function getAllUsers() {
        $result = $this->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
    public function createUser($data) {
        $name = $this->escape($data['name']);
        $lastname = $this->escape($data['lastname']);
        $correo = $this->escape($data['correo']);
        $password = $this->escape($data['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $rol = $this->escape($data['rol']);
        $sql = "INSERT INTO users ( name, lastname, correo, password, rol ) VALUES ('$name', '$lastname','$correo','$hashed_password','$rol')";
        return $this->query($sql);
    }

    public function deleteUser($id) {
        $id = $this->escape($id);
        $sql = "DELETE FROM users WHERE id = '$id'";
        return $this->query($sql);
    }
}
?>

