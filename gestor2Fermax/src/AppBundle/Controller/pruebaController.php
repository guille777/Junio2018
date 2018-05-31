<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Finder\Finder;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;



class pruebaController extends Controller
{
    /**
     * @Route("/prueba1", name="prueba1")
     */
    public function prueba1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/prueba1.html.twig');
    }


    /**
     * @Route("/finder", name="finder")
     */
    public function finderAction(){

      $finder = new Finder();

        $finder->files()->in(__DIR__);

          foreach ($finder as $file) {
              // dumps the absolute path
              // print_r($file->getRealPath());
              echo "------------------------<br><br><br><br>";
              // dumps the relative path to the file, omitting the filename
              // var_dump($file->getRelativePath());
              echo "<iiiiiiiiiiiiiiiiiiiiiiii<br><br><br><br>";
              // dumps the relative path to the file
              // var_dump($file->getRelativePathname());
                echo "<ooooooooooooooo<br><br><br><br>";
            }
            $archivo = $finder->files();
            // var_dump($archivo);
            foreach ($archivo as $key => $value) {
              echo $value."<br>";
            }
            // $finder->directories();
              return $this->render('default/finder.html.twig');
          }

          /**
           * @Route("/file", name="file")
           */
          // public function filesystem(){
          //   $fileSystem = new Filesystem();
          //     try {
          //       $fileSystem->mkdir('/tmp/random/dir/'.mt_rand());
          //     }catch (IOExceptionInterface $exception) {
          //         echo "An error occurred while creating your directory at ".$exception->getPath();
          //       }
          //         return $this->render('default/file.html.twig');
          // }


}
