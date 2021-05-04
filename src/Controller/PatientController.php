<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use Doctrine\ORM\EntityAdminRHInterface;
class PatientController extends AbstractController
{
    /**
     * @Route("/patient", name="patient")
     */
    public function index(): Response
    {
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
        ]);
    }
    public function AjouterPatient(): Response
    {
      
    }
    
    public function ModifierPatient(): Response 
    {


    }

    public function ConsulterPatient(): Response
    {

    } 

    public function RechercherPatient(): Response
    {


    }
}