<?php 
 require_once '../core/Controller.php';

class UserController extends Controller {
    public function barbers() {
        $userModel = $this->loadModel('User');
        $barbers = $userModel->getAllBarbers();
        $this->render('user/barbers', ['barbers' => $barbers]);
    }
    
    public function rate($id) {
        $userModel = $this->loadModel('User');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'rating' => $_POST['rating'] ?? 0,
                'comment' => $_POST['comment']
            ];
            $userModel->createRate($id, $data);
            header('Location: ' . BASE_URL . 'user/barbers');
        } else {
            $user = $userModel->getUserById($id);
            $this->render('user/rate', ['user' => $user]);
        }
    }

    public function reviews($id) {
        $userModel = $this->loadModel('User');
        $reviews = $userModel->getReviews($id);
        $this->render('user/reviews', ['reviews' => $reviews]);
    }

    public function index() {
        $userModel = $this->loadModel('User');
        $users = $userModel->getAllUsers();
        $this->render('user/index', ['users' => $users]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->loadModel('User');
            $data = [
                'name' => $_POST['name'],
                'lastname' => $_POST['lastname'],
                'correo' => $_POST['correo'],
                'password' => $_POST['password'],
                'rol'=> $_POST['rol']
            ];
            $userModel->createUser($data);
            header('Location: ' . BASE_URL . 'user/index');
        } else {
            $this->render('user/create');
        }
    }
    public function show($id) {
        $userModel = $this->loadModel('User');
        $user = $userModel->getUserById($id);
        $this->render('user/show', ['user' => $user]);
    }
    public function edit($id) {
        $userModel = $this->loadModel('User');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'lastname' => $_POST['lastname'],
                'correo' => $_POST['correo'],
                'password' => $_POST['password'],
                'rol'=> $_POST['rol']
            ];
            $userModel->updateUser($id, $data);
            header('Location: ' . BASE_URL . 'user/index');
        } else {
            $user = $userModel->getUserById($id);
            $this->render('user/edit', ['user' => $user]);
        }
    }

    public function delete($id) {
        $userModel = $this->loadModel('User');
        $userModel->deleteUser($id);
        header('Location: ' . BASE_URL . 'user/index');
    }
}
?>
