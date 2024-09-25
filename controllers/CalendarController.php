<?php 
 require_once '../core/Controller.php';

class CalendarController extends Controller {
    public function index() {
        $calendarModel = $this->loadModel('Calendar');
        $calendars = $calendarModel->getAllCalendars();
        $this->render('calendar/index', ['calendars' => $calendars]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $calendarModel = $this->loadModel('Calendar');
            $data = [
                'date' => $_POST['date'],
                'time' => $_POST['time'],
                'service' => $_POST['service'],
                'barber' => $_POST['barber'],
            ];
            $calendarModel->createCalendar($data);
            header('Location: ' . BASE_URL . 'calendar/index');
        } else {
            $serviceModel =  $this->loadModel('Service');
            $services = $serviceModel->getAllServices();

            $userModel =  $this->loadModel('User');
            $barbers = $userModel->getAllBarbers();

            $this->render('calendar/create', [
                'services' => $services,
                'barbers' => $barbers
            ]);
        }
    }
}

