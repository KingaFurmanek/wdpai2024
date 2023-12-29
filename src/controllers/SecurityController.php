<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ .'/../models/Address.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/AddressRepository.php';

class SecurityController extends AppController {

    private $userRepository;
    private $addressRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->addressRepository = new AddressRepository();
        session_start();
    }

    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if(!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $_SESSION['name'] = $user->getName();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location:{$url}/dashboard");
    }

    public function signUp()
    {
        if (!$this->isPost()) {
            return $this->render('signUp');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $country = $_POST['country'];
        $postcode = $_POST['postcode'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $number = $_POST['number'];

        if ($this->userRepository->getUser($email)) {
            return $this->render('signUp', ['messages' => ['User with this email already exists!']]);
        }

        // Haszowanie hasła przed utworzeniem obiektu użytkownika
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User($email, $hashedPassword, $name, $surname);
        $address = new Address($country, $postcode, $city, $street, $number);

        $this->userRepository->addUser($user);
        $this->addressRepository->addAddress($address);

        return $this->render('login', ['messages' => ['You\'ve been successfully registered!']]);
    }
}