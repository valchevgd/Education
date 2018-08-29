<?php

namespace SoftUniBlogBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends Controller
{
    /**
     * @Route("user/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function register(Request $request){

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());

            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("security_login");
        }

        return $this->render("user/register.html.twig",
            [
                "form" => $form->createView()
            ]);
    }

    /**
     * @Route("/profile", name="user_profile")
     * @param UserInterface
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function userProfile()
    {
        $id = $this->getUser()
        ->getId();
        $article = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findBy([
                'authorId' => $id
            ]);

        return $this->render('user/profile.html.twig',
            [
                'articles' => $article
            ]);

    }
}
