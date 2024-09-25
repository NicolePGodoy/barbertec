<?php
require_once '../core/Model.php';

class Service extends Model {
    public function getAllServices() {
        $result = $this->query('SELECT * FROM services');
        $services = [];
        while ($row = $result->fetch_assoc()) {
            $services[] = $row;
        }
        return $services;
    }

    public function getServiceById($id) {
        $id = $this->escape($id);
        $result = $this->query("SELECT * FROM services WHERE id = '$id'");
        return $result->fetch_assoc();
    }

    public function createService($data) {
        $description = $this->escape($data['description']);
        $price = $this->escape($data['price']);
        $sql = "INSERT INTO services ( description, price ) VALUES ('$description', '$price')";
        return $this->query($sql);
    }

    public function updateService($id, $data) {
        $id = $this->escape($id);
        $description = $this->escape($data['description']);
        $price = $this->escape($data['price']);
        $sql = "UPDATE services SET description = '$description', price = '$price' WHERE id = '$id'";
        return $this->query($sql);
    }

    public function deleteService($id) {
        $id = $this->escape($id);
        $sql = "DELETE FROM services WHERE id = '$id'";
        return $this->query($sql);
    }
}
?>
