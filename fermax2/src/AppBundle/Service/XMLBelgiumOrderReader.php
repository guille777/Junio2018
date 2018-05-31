<?php

namespace AppBundle\Service;

use AppBundle\Entity\LdapUser;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Ldap\Ldap;

class XMLBelgiumOrderReader
{
    private $entityManager;


    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function readXML(string $xml)
    {


        //TODO: aqui se debe procesar el XML y generar los pedidos con sus lineas de pedido. ME FALTA UBICAR EL FLUJO DE LA APP...secuencial partiendo de la acciión
        $data = $xml;

        $objDOM = new \DOMDocument();

        $objDOM->load($data); // Cargar el fichero XML

        $cabecera = $objDOM->getElementsByTagName("Head");
        $body = $objDOM->getElementsByTagName("Line");
        // Por cada key cogemos los valores de los campos

        foreach ($cabecera as $value) {

            $documentId = $value->getElementsByTagName("DocumentID");
              $docId[] = $documentId->item(0)->nodeValue;
            $customerID = $value->getElementsByTagName("CustomerID");
              $custId[] = $customerID->item(0)->nodeValue;
            $division = $value->getElementsByTagName("Division");
              $div[] = $division->item(0)->nodeValue;
            $orderDate = $value->getElementsByTagName("OrderDate");
              $ord[] = $orderDate->item(0)->nodeValue;
            $deliveryDate;//etiqueta no cierra,no tiene value el nodo
            $reference = $value->getElementsByTagName("Reference");
              $ref[] = $reference->item(0)->nodeValue;
            $vatTypeCode = $value->getElementsByTagName("VAT_Type_Code");
              $vat[] = $vatTypeCode->item(0)->nodeValue;
            $payment_Code;//etiqueta no cierra,no tiene value el nodo
        }
        foreach ($body as $value) {

            $itemId = $value->getElementsByTagName("ItemID");
              $item[] = $itemId->item(0)->nodeValue;

            $BackorderNumber = $value->getElementsByTagName("BackorderNumber");
              $num[] = $BackorderNumber->item(0)->nodeValue;

            $dueDate = $value->getElementsByTagName("DueDate");
              $due[] = $dueDate->item(0)->nodeValue;

            $qty = $value->getElementsByTagName("Qty");
              $q[] = $qty->item(0)->nodeValue;

            $price = $value->getElementsByTagName("Price");
              $pri[] = $price->item(0)->nodeValue;


            $description = $value->getElementsByTagName("Description");
              $des[] = $description->item(0)->nodeValue;
        }

        // Mostramos los resultados
        /*
        $tam = count ($cabecera);
        for ($i = 0; $i < $tam; $i++){
            echo "<b>DocumentId</b>= ".$docId[$i].'<br>'."CustomerID=noValue ".$custId[$i].'<br>'."Division= ".$div[$i].'
                  '.'<br>'."OrderDate= ".$ord[$i].'<br>'.'DeliviryDate = noValue'.'<br>'."Reference= ".$ref[$i].'<br>'."VAT_Type_Code= ".$vat[$i]."<br>"."Payment_Code= noValue";
        }*/

        // Mostramos los resultados
        /*
        $tam2 = count ($body);
        for ($a = 0; $a < $tam2; $a++) {
            echo "ItemID=".$item[$a]."<br>";
            echo "BackorderNumber=".$num[$a]."<br>";
            echo "DueDate=".$due[$a]."<br>";
            echo "Qty=".$q[$a]."<br>";
            echo "Price=".$pri[$a]."<br>";
            echo "Description=".$des[$a]."<br>";

            echo "<br>";
        }*/
        echo ($xml);
    }
}
