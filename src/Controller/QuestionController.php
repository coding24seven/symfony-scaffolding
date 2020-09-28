<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
//        $html = $twigEnvironment->render('question/homepage.html.twig');
//        return new Response($html);
//        return new Response("this is home page");
        return $this->render('question/homepage.html.twig');
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

        dump($slug, $this);

        return $this->render('question/show.html.twig', [
            "question" => sprintf("<u>another future page to show a question '%s'!</u>", $slug),
            "answers" => $answers
        ]);

//        return new Response(sprintf("<u>future page to show a question '%s'!</u>", $slug));
    }
}
