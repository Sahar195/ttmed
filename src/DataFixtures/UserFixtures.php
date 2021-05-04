<?php
 
namespace App\DataFixtures;
 
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class UserFixtures extends Fixture
{
    private $encoder;
 
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
 
    public function load(ObjectManager $manager)
    {
        $tilisateur = new Utilisateur();
        $utilisateur->setEmail('admin@mediaforce.com');
        $utilisateur->setPassword($this->encoder->encodePassword($utilisateur,'Password'));
        $manager->persist($utilisateur);
 
        $manager->flush();
    }
}