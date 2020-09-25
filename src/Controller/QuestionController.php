<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("this is home page");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'make sure your cat is puurrrfectly still',
            'honestly, i like furry shoes better than my cat',
            'maybe... try saying the spell backwards'
        ];

        return $this->render('question/show.html.twig', [
            "question" => sprintf("<u>another future page to show a question '%s'!</u>", $slug),
            "answers" => $answers
        ]);

//        return new Response(sprintf("<u>future page to show a question '%s'!</u>", $slug));
    }
}
