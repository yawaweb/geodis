<?php


namespace Geodis\Client;


class Client
{
    const SERVICE_URL_GEODIS_SANDBOX = 'https://espace-client-rct.geodis.com/services/';
    const SERVICE_URL_GEODIS = 'https://espace-client.geodis.com/services/';
    const SERVICE = 'api/';

    protected $connection;
    protected $service;
    protected $service_url;

    public function __construct(ConnectionBuilder $connection)
    {
        $this->service_url = ($connection->sandbox == true) ? self::SERVICE_URL_GEODIS_SANDBOX : self::SERVICE_URL_GEODIS;
        $this->service = self::SERVICE;
        $this->connection = $connection;
    }

    public function request($model, $body)
    {
        $inlineBody = $body;
        $message = $this->connection->secretKey.';'.$this->connection->login.';'.(time() * 1000).';'.$this->connection->lang.';'.$this->service.$model.';'.$inlineBody;
        $hash = hash('sha256', $message);
        $serviceRequestHeader = $this->connection->login.';'.(time() * 1000).';'.$this->connection->lang.';'.$hash;
        $headers = array(
            'X-GEODIS-Service: '.$serviceRequestHeader,
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: '.strlen($inlineBody),
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->service_url.$this->service.$model);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $inlineBody);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 5000);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);

        $rawResult = curl_exec($ch);
        if (curl_error($ch)) {
            return ['status' => false, 'http_status' => curl_getinfo($ch, CURLINFO_HTTP_CODE), 'reason' => curl_error($ch), 'errno' => curl_errno($ch), 'url' => $this->service_url.$this->service.$model];
        }
        else{
            return ['status' => true, 'url' => $this->service_url.$this->service.$model, 'data' => json_decode($rawResult, true)];
        }
    }
}
