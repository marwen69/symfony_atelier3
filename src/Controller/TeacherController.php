<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    #[Route('/teacher/test', name: 'app_teacher_test')]
    function testTeacher()
    {
        return new Response("<i>test teacher</i>");
    }
    #[Route('/teacher/list', name: 'app_teacher_list')]
    function list()
    {
        $formations = array(

            array(
                'ref' => 'form147', 'Titre' => 'Formation
        Symfony 4',
                'Description' => 'formation pratique', 'date_debut' => '12/06/2020', 'date_fin' => '19/06/2020', 'nb_participants' => 19
            ),
            array(
                'ref' => 'form177', 'Titre' => 'Formation SOA',
                'Description' => 'formation theorique', 'date_debut' => '03/12/2020', 'date_fin' => '10/12/2020', 'nb_participants' => 0
            ),
            array(
                'ref' => 'form178', 'Titre' => 'Formation Angular',
                'Description' => 'formation theorique', 'date_debut' => '10/06/2020', 'date_fin' => '14/06/2020', 'nb_participants' => 12
            )
        );
        return $this->render('teacher/list.html.twig', ['formation' => $formations]);
    }
    #[Route('/detail/{titre}', name: 'd')]
    function detail($titre)
    {
        return $this->render('teacher/detail.html.twig', ['tt' => $titre]);
    }
}
