<?php


namespace Geodis\Client;

use Geodis\Model\ListEnvoi;
use Geodis\Model\ListUmg;

class Shipment
{
    const SERVICE = 'wsclient/';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function recording($data)
    {
        return $this->client->request(self::SERVICE.'enregistrement-envois', $data);
    }

    public function delete($data)
    {
        return $this->client->request(self::SERVICE.'suppression-envois', $data);
    }

    public function createShipment(\Geodis\Model\Shipment $shipmentRequest, \Geodis\Model\ListEnvoi $shipmentData, \Geodis\Model\Expediteur $sender, \Geodis\Model\Destinataire $receiver, $parcel)
    {
        $shipmentData->expediteur = $sender;
        $shipmentData->destinataire = $receiver;
        $shipmentData->listUmgs = $parcel;
        $shipmentRequest->listEnvois = [$shipmentData];

        return $this->recording($shipmentRequest->toJson());
    }

    public function deleteShipment(\Geodis\Model\SuppressionEnvois $data)
    {
        return $this->delete($data->toJson());
    }
}
