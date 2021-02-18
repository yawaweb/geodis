<?php

namespace Geodis\Model;

use Geodis\Model\Base\Model;

/**
 * Class ListEnvoi.
 * @property bool   horsSite                        Facultatif      Expédition depuis un autre site
 * @property int    codeSa                          Obligatoire     Code Agence GEODIS  001044
 * @property int    codeClient                      Obligatoire     Compte facturation client   074777 ou 074535
 * @property string codeProduit                     Obligatoire     Code prestation commerciale ATK ou CXI
 * @property string reference1                      Facultatif      Référence 1 client
 * @property string reference2                      Facultatif      Référence 2  client
 * @property string dateDepartEnlevement            Obligatoire     YYYY/MM/DD  Date de départ  J-30 à J+30
 * @property int    noRecepisse                     Facultatif      Numéro de cérépissé GEODIS  Défini par l'application et renvoyé dans la réponse. A renseigner si modification sur une Expédition
 * @property int    noSuivi                         Facultatif      Numéro de Suivi GEODIS  Défini par l'application et renvoyé dans la réponse. A renseigner si modification sur une Expédition
 * @property int    poidsTotal                      Facultatif      Poids total Expédition  Obligatoire si poids unitaire non renseigné
 * @property int    volumeTotal                     Facultatif      Volume total Expédition
 * @property int    longueurTotale                  Facultatif      Longueur total Expédition
 * @property int    largeurTotale                   Facultatif      Largeur Totale Expédition
 * @property int    hauteurTotale                   Facultatif      Hauteur totale Expédition
 * @property bool   animauxPlumes                   Facultatif      Animaux à plumes
 * @property string optionLivraison                 Facultatif      BRT / RDW / RDT / DSL / SAM Facultatif      Options à la livraison
 * @property int    codeSaBureauRestant             Facultatif      Code agence GEODIS de livraison A renseigner si option livraison= BRT
 * @property int    idPointRelais                   Facultatif      Identifiant du Point relais de livraison    A renseigner si code produit= RCX
 * @property string dateLivraison                   Facultatif      YYYY/MM/DD  Date souhaitée de livraison Contrôle sur calendrier Espace
 * @property string instructionEnlevement           Facultatif      Instructions à l'Enlèvement
 * @property string instructionLivraison            Facultatif      Instructions à la livraison
 * @property string periodePreferenceEnlevement     Facultatif      MAT / APM   Facultatif  MAT: Matin APM: Après-midi  Créneau Enlèvement
 * @property string natureMarchandise               Facultatif      Nature de marchandise
 * @property int    codeIncotermConditionLivraison  Facultatif      Code incoterm   Contrôle sur code incoterm espece
 * @property bool   sadSwap                         Facultatif      Service echange simple
 * @property bool   sadLivEtage                     Facultatif      Service livraison à l'étage Contrôle si service autorisé sur fiche client
 * @property bool   sadMiseLieuUtil                 Facultatif      Service mise en lieu d'utilisation  Contrôle si service autorisé sur fiche client
 * @property bool   sadDepotage                     Facultatif      Service dépotage    Contrôle si service autorisé sur fiche client
 * @property int    etage                           Facultatif      Numéro d'étage  Obligatoire si Montée à l'etage= true
 * @property string emailNotificationDestinataire   Facultatif      Adresse mail pour la notification mail au destinataire  Obligatoire si option à la livraison= RDW
 * @property int    smsNotificationDestinataire     Facultatif      Numéro portable pour la notification SMS au destinataire
 * @property string emailNotificationExpediteur     Facultatif      Adresse mail destinataire pour la notification mail au destinataire
 * @property string emailConfirmationEnlevement     Facultatif      Adresse mail destinataire pour la confirmation d'enlèvement
 * @property string emailPriseEnChargeEnlevement    Facultatif      Adresse mail destinataire pour la prise en charge d'enlèvement
 * @property int    poidsQteLimiteeMD               Facultatif      Poids qté limitée MD
 * @property int    dangerEnvQteLimiteeMD           Facultatif      Poids Qté exceptée MD
 * @property int    nbColisQteExcepteeMD            Facultatif      Nbre colis Qté exceptée
 * @property bool   dangerEnvQteExcepteeMD          Facultatif      Produit dangereux pour l'environnement
 * @property int    nosUmsAEtiqueter                Facultatif      Numero du colis à étiqueter
 * @property array  destinataire					Obligatoire		Array of destinataire datas
 * @property array  expediteur						Obligatoire		Array of expediteur datas
 * @property array  listUmgs 						Obligatoire		Array of shipping datas
 *
 *
 * * // Not sure where the following propreties go \\
 * Donnée Expédition
 * @property int    qteUniteTaxation                Facultatif      Quantité unité de taxation
 * @property int    codeUniteTaxation               Facultatif      Code unité taxation
 * @property int    montantValeurDeclaree           Facultatif      Montant de la Valeur déclarée
 * @property int    codeDeviseValeurDeclaree        Facultatif      Code devise pour la Valeur déclarée Contrôle sur devise espace
 * @property int    montantContreRemboursement      Facultatif      Montant du Contre-remboursement
 * @property int    codeDeviseCodeContreRemboursement Facultatif    Code devise du Contre-remboursement Contrôle sur devise espace
 *
 * Matières Dangereuses
 * @property int    noONU0                          Facultatif      Numéro ONU
 * @property int    groupeEmballage0                Facultatif      Groupe d'emballage
 * @property int    classeADR0                      Facultatif      Classe ADR
 * @property string codeTypeEmballage0              Facultatif      Type emballage
 * @property int    nbEmballages0                   Facultatif      Nbre d'emballage
 * @property string nomTechnique0                   Facultatif      Nom technique
 * @property string codeQuantite0                   Facultatif      Unité
 * @property int    quantite0                       Facultatif      Qté
 * @property bool   dangerEnv0                      Facultatif      Produit dangereux pour l'environnement
 *
 * Vins et Spiritueux
 * @property string regimeFiscal0                   Facultatif      Régime Fiscal
 * @property int    nbCols0                         Facultatif      Nbre colis Qté exceptée
 * @property int    contenance0                     Facultatif      Contenance
 * @property int    volumeEnDroits0                 Facultatif      Volume en droits
 * @property int    noTitreMvtRefAdmin0             Facultatif      N° titre de mouvement
 * @property int    dureeTransport0                 Facultatif      Durée transport
 */

class ListEnvoi extends Model
{
    public $horsSite;
    public $codeSa;
    public $codeClient;
    public $codeProduit;
    public $reference1;
    public $reference2;
    public $dateDepartEnlevement;
    public $noRecepisse;
    public $noSuivi;
    public $poidsTotal;
    public $volumeTotal;
    public $longueurTotale;
    public $largeurTotale;
    public $hauteurTotale;
    public $animauxPlumes;
    public $optionLivraison;
    public $codeSaBureauRestant;
    public $idPointRelais;
    public $dateLivraison;
    public $instructionEnlevement;
    public $instructionLivraison;
    public $periodePreferenceEnlevement;
    public $natureMarchandise;
    public $codeIncotermConditionLivraison;
    public $sadSwap;
    public $sadLivEtage;
    public $sadMiseLieuUtil;
    public $sadDepotage;
    public $etage;
    public $emailNotificationDestinataire;
    public $smsNotificationDestinataire;
    public $emailNotificationExpediteur;
    public $emailConfirmationEnlevement;
    public $emailPriseEnChargeEnlevement;
    public $poidsQteLimiteeMD;
    public $dangerEnvQteLimiteeMD;
    public $nbColisQteExcepteeMD;
    public $dangerEnvQteExcepteeMD;
    public $nosUmsAEtiqueter;
    public $destinataire;
    public $expediteur;
    public $listUmgs;
}
