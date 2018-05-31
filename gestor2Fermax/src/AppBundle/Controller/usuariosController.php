<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class usuariosController extends Controller
{
	 /**
   * @Route("/vistas", name="vistas")
   */
  public function vistasAction()
  {
      return $this->render('usuarios/vistas.html.twig');
  }

  /**
   * @Route("/login", name="login")
   */
  public function loginAction()
  {
       $authenticationUtils = $this->get('security.authentication_utils');

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('usuarios/login.html.twig', array(
          'last_username' => $lastUsername,
          'error'         => $error,
        ));
  }

  /**
     * @Route("/logout", name="logout")
     */
     public function logoutAction()
     {
       return $this->render('usuarios/login.html.twig');
     }

    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('vistas');
        }

        return $this->render(
            'usuarios/register.html.twig',
            array('form' => $form->createView())
        );
    }










}
