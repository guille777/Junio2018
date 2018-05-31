<?php

namespace AppBundle\Command;

use AppBundle\Service\XMLBelgiumOrderReader;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Finder\Finder;


class ReadXMLBelgiumOrdersCommand extends ContainerAwareCommand
{
    private $fileSystem;
    private $XMLBelgiumOrderReader;

    public function __construct(XMLBelgiumOrderReader $XMLBelgiumOrderReader)
    {
        $this->fileSystem = new Filesystem();
        $this->XMLBelgiumOrderReader = $XMLBelgiumOrderReader;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('app:lectura-xml-pedidos-belgica')
            ->setDescription('Procesa los pedidos de Bélgica a partir de ficheros XML.')
            ->setHelp(
                <<<EOT
Lee los ficheros que haya en el directorio /web/uploads/xml_pedidos_belgica (si no existe lo crea). Los procesa y genera un pedido para cada uno de los ficheros. 
Una vez procesados los copia en /web/uploads/xml_pedidos_belgica_procesados. 
EOT
            );
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //lee todos los ficheros de un directorio y los procesa
        $finder = new Finder();
        $unprocessedXmlPath = $this->getUnprocessedXmlPath();

        $finder->files()->in($unprocessedXmlPath);

        foreach ($finder as $file) {
            $this->processFile($file);
            $this->moveFile($file);
        }

        $output->writeln("\n<info>Command result.</info>");
    }

    private function processFile(\SplFileInfo $file)
    {
        $fileContent = file_get_contents($file->getRealPath());
        $this->XMLBelgiumOrderReader->readXML($fileContent);
    }

    private function moveFile(\SplFileInfo $file)
    {
        $processedXmlPath = $this->getProcessedXmlPath();
        $this->fileSystem->copy($file->getPathname(), $processedXmlPath . '/' . uniqid() . '_' . $file->getFilename(), true);
        $this->fileSystem->remove($file->getPathname());
    }

    private function getUnprocessedXmlPath()
    {
        $xmlDirectory = $this->getContainer()->getParameter('kernel.project_dir') . '/web/uploads/xml_pedidos_belgica';

        if (!$this->fileSystem->exists($xmlDirectory)) {
            $this->fileSystem->mkdir($xmlDirectory);
        }

        return $xmlDirectory;
    }

    private function getProcessedXmlPath()
    {
        $xmlDirectory = $this->getContainer()->getParameter('kernel.project_dir') . '/web/uploads/xml_pedidos_belgica_procesados';

        if (!$this->fileSystem->exists($xmlDirectory)) {
            $this->fileSystem->mkdir($xmlDirectory);
        }

        return $xmlDirectory;
    }
}
