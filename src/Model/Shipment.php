<?php

namespace Geodis\Model;

use Geodis\Model\Base\Model;

/**
 * Class Shipment.
 *
 * @property bool   impressionEtiquette             Facultatif      Impresion étiquette Valeur false par défaut si non renseigné
 * @property string typeImpressionEtiquette         Facultatif      P: PDF 2 par page T: PDF A4 Z: Thermique Zpl E: Thermique Epl   Format étiquette
 * @property int    formatEtiquette                 Facultatif      1: 135, 2: 150
 * @property bool   validationEnvoi                 Facultatif      Validation vers GEODIS
 * @property bool   suppressionSiEchecValidation    Facultatif
 * @property bool   impressionBordereau             Facultatif      Impression du Bordereau chauffeur PDF
 * @property bool   impressionRecapitulatif         Facultatif      Impression du récapitulatif des Expéditions PDF
 *
 *
 *
 * Colis a étiqueter
 * @property array  listEnvois
 * @property array  listNosSuivis
 */
class Shipment extends Model
{
    public $impressionEtiquette;
    public $typeImpressionEtiquette;
    public $formatEtiquette;
    public $validationEnvoi;
    public $suppressionSiEchecValidation;
    public $impressionBordereau;
    public $impressionRecapitulatif;

    public $listEnvois;
    public $listNosSuivis;
}
