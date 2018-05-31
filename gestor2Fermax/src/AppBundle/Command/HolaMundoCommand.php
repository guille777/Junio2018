<?php 
// src/AppBundle/Command/CreateUserCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HolaMundoCommand extends Command
{
    //variables....

    //funciones...

    //En primer lugar, debe configurar el nombre del comando en el configure() método. Luego, opcionalmente puede definir un mensaje de ayuda y las opciones y argumentos de entrada :
    protected function configure()
    {
       $this
        //el nombre del comando (la parte después de "bin/console")...
        ->setName('app:hola')
        // la breve descripción que se muestra al ejecutar "php bin/console list"...
        ->setDescription('Esto es un saludo...')
        // la descripción completa del comando que se muestra al ejecutar el comando con la opción "--help"...
        ->setHelp('Este comando te da ayuda...');
    }
    //Como era de esperar, este comando no hará nada ya que aún no escribió ninguna lógica. Agregue su propia lógica dentro del execute()método, que tiene acceso a la corriente de entrada (por ejemplo, opciones y argumentos) y la secuencia de salida (para escribir mensajes en la consola):
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    //genera múltiples líneas a la consola (agregando "\ n" al final de cada línea)
    // $output->writeln(['Hola Mundo','============','Un saludo',]);

    //muestra un mensaje seguido de un "\ n"
    // $output->writeln('Esto es un saludo...!');

    //emite un mensaje sin agregar una "\ n" al final de la línea
    $output->write('Hola Mundo');
    }


//1-Almacenado en un directorio llamado Command/
//2-Definido en una clase cuyo nombre termina con Command;
//3-Definido en una clase que se extiende desde  Command
 }
 ?>