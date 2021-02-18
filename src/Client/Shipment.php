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

    public function shipmentRecording($data)
    {
        return $this->client->request(self::SERVICE.'enregistrement-envois', $data);
    }

    public function createShipment(\Geodis\Model\Shipment $shipmentRequest, \Geodis\Model\ListEnvoi $shipmentData, \Geodis\Model\Expediteur $sender, \Geodis\Model\Destinataire $receiver, $parcel)
    {
        $shipmentData->expediteur = $sender;
        $shipmentData->destinataire = $receiver;
        $shipmentData->listUmgs = $parcel;
        $shipmentRequest->listEnvois = [$shipmentData];

        return $this->shipmentRecording($shipmentRequest->toJson());
    }
}