<?php


// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lucky")
 */

class LuckyController extends AbstractController
{
    /**
     * @Route("/number", name="app_lucky_random", methods={"GET"})
     */

    public function number(): Response
    {
        $number = random_int(0, 100);
//
//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );

        $items =  array("Coca", "Sting", "Coffee", "Redbull");
        $rand_item = $items[array_rand($items)];

        return new Response(
            '<html><body>
                Lucky drink: '.$rand_item.'
                <br/>
                Lucky number: '.$number.'
                </body></html>'
        );

    }

    /**
     * @Route("/greeting", name="app_lucky_random", methods={"GET"})
     */
    public function greeting(): Response
    {
        $greeting = "Hi there!";
        return new Response(
            '<html lang="html"><body>Hi There!</body><html>'
        );
    }

    /**
     * @Route("/welcome", name="app_lucky_random", methods={"GET"})
     */
    public function welcome(): Response
    {
        $welcome_word = "Vut t chai oxy!";
        return $this->render('lucky/welcome.html.twig',[
            'welcome_word' => $welcome_word,
        ]);
    }
     /**
     * @Route("/hom-nay", name="app_lucky_getdate", methods={"GET"})
     */
    public function getdate(): Response
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $today = date('Y-m-d H:i:s');

        return new Response(
            '<html><body>Today is: '.$today.'</body></html>'
        );
    }

}
