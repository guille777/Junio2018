<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use pruebaBundle\Entity\libreria;
use pruebaBundle\Form\libreriaType;


use Symfony\Component\Serializer\SerializerInterface;

class vistasController extends Controller
{
  /**
   * @Route("/", name="index")
   */
  public function indexAction()
  {
      return $this->render('vistas/index.html.twig');
  }
  /**
  * @Route("/home", name="home")
  */
  public function homeAction()
  {
      return $this->render('vistas/home.html.twig');
  }
  /**
  * @Route("/plantilla", name="plantilla")
  */
  public function plantillaAction()
  {
      return $this->render('vistas/plantilla.html.twig');
  }
  /**
  * @Route("/proyecto", name="proyecto")
  */
  public function proyectoAction()
  {
      return $this->render('vistas/proyecto.html.twig');
  }
  /**
  * @Route("/lista", name="lista")
  */
  public function listaAction()
  {
    return $this->render('vistas/lista.html.twig');
  }
  /**
  * @Route("/all{alumno}", name="all")
  */
  public function allAction(){
      $repository = $this->getDoctrine()->getRepository('pruebaBundle:libreria');
        // find *all* alumnos
        $alumnos = $repository->findAll();
          return $this->render('vistas/all.html.twig', array('tabla' => $alumnos));
      }
      /**
        * @Route("/id/{id}", name="id")
        */
        public function idAction($id){
            $repository = $this->getDoctrine()->getRepository(libreria::class);
            // find *id* alumno
            $alumno = $repository->findOneById($id);
              if(!$alumno){
                return $this->render('');
              }
              // hacer para que si esta vacio cuando llegue a id.twig
              return $this->render('vistas/id.html.twig',array("alumnoID"=>$alumno));
          }
      /**
       * @Route("/insert", name="insert")
       */
      public function insertAction(Request $request){
        //dentro de la función añadimos un objeto de nuestra Entity:
        $entity = new libreria();
        $form= $this->createForm(libreriaType::class,$entity);/*Aquí le añadimos la variable del objeto*/
        $form->handleRequest($request);
          //A continuación viene una comprobación si se aprieta el botón de enviar:
            if ($form->isSubmitted() && $form->isValid()) {
              // $form->getData() holds the submitted values
              // but, the original `$task` variable has also been updated
              $entity = $form->getData();
              // ... perform some action, such as saving the task to the database
              // for example, if Task is a Doctrine entity, save it!
              $DB = $this->getDoctrine()->getManager();
              $DB->persist($entity);
              $DB->flush();
              return $this->render('vistas/ok.html.twig' );
            }
        //en el caso de que no haya validacion se mostrara el formulario
        return $this->render('vistas/insert.html.twig',array('form' => $form->createView() ));
    }










}
