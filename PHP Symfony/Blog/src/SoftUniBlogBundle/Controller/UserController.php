<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @Route("register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()){

            $userByEmail = $this->getDoctrine()->getRepository(User::class)->findBy(['email' => $form->getData()->getEmail()]);

            if ($userByEmail){
                $this->addFlash('message','Already register user with email '.$form->getData()->getEmail());
                return $this->render("default/register.html.twig");
            }

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());

            $user->setPassword($password);

            $roleRepository = $this->getDoctrine()->getRepository(Role::class);
            $userRole = $roleRepository->findOneBy(['name' => 'ROLE_USER']);
            $user->addRole($userRole);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("security_login");
        }

        return $this->render("default/register.html.twig");
    }

    /**
     * @Route("profile", name="user_profile")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profile()
    {
        $id = $this->getUser()->getId();
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['authorId' => $id]);

        return $this->render('profile.html.twig', ['articles' => $articles]);
    }
}
