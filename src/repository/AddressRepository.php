<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/Address.php';

class AddressRepository extends Repository{

    public function getAddress(string $street, string $number, string $city): ?Address
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.address WHERE street = :street AND number = :number AND city = :city
        ');
        $stmt->bindParam(':street', $street, PDO::PARAM_STR);
        $stmt->bindParam(':number', $number, PDO::PARAM_STR);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->execute();

        $address = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($address == false) {
            return null;
        }

        return new Address(
            $address['country'],
            $address['postcode'],
            $address['city'],
            $address['street'],
            $address['number']
        );
    }

    public function addAddress(Address $address)
    {
        $stmt = $this->database->connect()->prepare('
        INSERT INTO public.address (id_user, country, postcode, city, street, number)
        VALUES ((SELECT id_user FROM public.users ORDER BY id_user DESC LIMIT 1), ?, ?, ?, ?, ?)
    ');

        $stmt->execute([
            $address->getCountry(),
            $address->getPostCode(),  // Tutaj zmieniłem na getPostCode zamiast getPostcode
            $address->getCity(),
            $address->getStreet(),
            $address->getNumber()
        ]);
    }
}
