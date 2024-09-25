<?php
require_once '../core/Model.php';
session_start();

class Calendar extends Model {
    public function getAllCalendars() {
        $result = $this->query("SELECT 
                cc.id AS id,
                cc.date AS date,
                cc.hour AS hour,
                ser.description AS service,
                CONCAT(barber.name, ' ', barber.lastname) AS barber,
                CONCAT(customer.name, ' ', customer.lastname) AS customer
            FROM calendar AS cc
            INNER JOIN services AS ser ON cc.service_id = ser.id
            INNER JOIN users AS barber ON cc.barber_id = barber.id
            INNER JOIN users AS customer ON cc.customer_id = customer.id");
        $calendars = [];
        while ($row = $result->fetch_assoc()) {
            $calendars[] = $row;
        }
        return $calendars;
    }
    public function createCalendar($data) {
        $date = $this->escape($data['date']);
        $time = $this->escape($data['time']);
        $service = $this->escape($data['service']);
        $barber = $this->escape($data['barber']);
        $sql = "INSERT INTO calendar (date, hour, customer_id, service_id , barber_id) VALUES ('$date', '$time', {$_SESSION['id']}, $service, $barber)";
        return $this->query($sql);
    }      
}
