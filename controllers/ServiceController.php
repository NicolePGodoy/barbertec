<?php 
 require_once '../core/Controller.php';

class ServiceController extends Controller {
    public function index() {
        $serviceModel = $this->loadModel('Service');
        $services = $serviceModel->getAllServices();
        $this->render('service/index', ['services' => $services]);
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $serviceModel = $this->loadModel('Service');
            $data = [
                'description' => $_POST['description'],
                'price' => $_POST['price']
            ];
            $serviceModel->createService($data);
            header('Location: ' . BASE_URL . 'service/index');
        } else {
            $this->render('service/create');
        }
    }
    public function edit($id) {
        $serviceModel = $this->loadModel('Service');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'description' => $_POST['description'],
                'price' => $_POST['price']
            ];
            $serviceModel->updateService($id, $data);
            header('Location: ' . BASE_URL . 'service/index');
        } else {
            $service = $serviceModel->getServiceById($id);
            $this->render('service/edit', ['service' => $service]);
        }
    }

    public function delete($id) {
        $serviceModel = $this->loadModel('Service');
        $serviceModel->deleteService($id);
        header('Location: ' . BASE_URL . 'service/index');
    }
}
?>

