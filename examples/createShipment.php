<?php
use Geodis\Model\Base\Model;
use Geodis\Client\Client;
use Geodis\Client\ConnectionBuilder;
use Geodis\Model\Shipment;
use Geodis\Client\Shipment;
use Geodis\Model\Expediteur;
use Geodis\Model\Destinataire;
use Geodis\Model\ListEnvoi;
use Geodis\Model\ListUmg;

$connection = new \Geodis\Client\ConnectionBuilder('DEMO', '12345678', true);
$client = new \Geodis\Client\Client($connection);
$geodis = new \Geodis\Client\Shipment($client);

$shipmentSettings = new Geodis\Model\Shipment();
$shipmentSettings->impressionEtiquette = true;
$shipmentSettings->typeImpressionEtiquette = "P";
$shipmentSettings->formatEtiquette = 1;
$shipmentSettings->validationEnvoi = true;
$shipmentSettings->suppressionSiEchecValidation = false;
$shipmentSettings->impressionBordereau = false;
$shipmentSettings->impressionRecapitulatif = false;

$shipmentData = new \Geodis\Model\ListEnvoi();
$shipmentData->dateDepartEnlevement = '2021-03-01';
$shipmentData->noRecepisse = '';
$shipmentData->noSuivi = '';
$shipmentData->horsSite = false;
$shipmentData->codeSa = '123456';
$shipmentData->codeClient = '34567';
$shipmentData->codeProduit = 'CXI';
$shipmentData->reference1 = 'ref 1';
$shipmentData->reference2 = 'ref 2';
$shipmentData->instructionEnlevement = 'Entree fournisseurs';
$shipmentData->poidsTotal = "1.23";
$shipmentData->volumeTotal = "0.45";
$shipmentData->optionLivraison = '';
$shipmentData->instructionLivraison = '5ème sans ascenseur';
$shipmentData->codeIncotermConditionLivraison = 'P';
$shipmentData->emailNotificationDestinataire = 'example@test.com';
$shipmentData->smsNotificationDestinataire = '0611111111';

$sender = new \Geodis\Model\Expediteur();
$sender->nom = 'name';
$sender->adresse1 = "rue du test";
$sender->adresse2 = '';
$sender->codePostal = "17300";
$sender->ville = "ROCHEFORT";
$sender->codePays = "FR";
$sender->nomContact = "Mr. Test";
$sender->email = "a@b.fr";
$sender->telFixe = "0200000000";
$sender->indTelMobile = "33";
$sender->telMobile = "0700000000";
$sender->codePorte = "1789";

$receiver = new \Geodis\Model\Destinataire();
$receiver->nom = 'other name';
$receiver->adresse1 = "12 avenue du roi";
$receiver->adresse2 = "2eme adr";
$receiver->codePostal = "75001";
$receiver->ville = "PARIS";
$receiver->codePays = "FR";
$receiver->nomContact = "Mr. Test";
$receiver->email = "x@y.fr";
$receiver->telFixe = "0100000000";
$receiver->indTelMobile = "33";
$receiver->telMobile = "0600000000";
$receiver->codePorte = "1515";

$parcel = [];
$parcel[0] = new \Geodis\Model\ListUmg();
$parcel[0]->palette = false;
$parcel[0]->quantite = 1;

echo '<pre>'.print_r($geodis->createShipment($shipmentSettings, $shipmentData, $sender, $receiver, $parcel), true).'</pre>';
