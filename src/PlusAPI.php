<?php

namespace ofarukbicer\PlusAPI;

class PlusAPI
{
    private $token;
    public $bilgi;

    /**
     * 
     * PlusAPI | Piyasa Verileri Sınıfı
     *   
     * Gereksinimler
     * -------------
     *  $token = XXXX
     *  
     * Methodlar
     * ---------
     *  hisse_ver($sembol) -> İstenilen Sembolün Bilgilerini Çevirir
     * 
     *  hisse_sepet() -> BIST Top-10 Çevirir
     * 
     *  kripto_ver($sembol) -> İstenilen Sembolün Bilgilerini Çevirir
     * 
     *  kripto_haber() -> Kriptolar Hakkında Güncel Haberleri Çevirir
     * 
     *  kripto_sepet() -> Kripto Top-10 Çevirir
     *
     * @param string $token Bizim tarafızdan size verilen token
     * @return mixed
     */
    public function __construct($token)
    {
        $bilgi = explode("\\", static::class);
        $this->bilgi = $bilgi[1] . " | Piyasa Verileri Sınıfı";
        $this->token = $token;
    }

    /**
     * 
     * İstenilen Sembolün Bilgilerini Çevirir
     *
     * @param string $sembol Sembol belirterek o sembolun verisini alabilirsiniz
     * @return object
     */
    public function hisse_ver($sembol = "")
    {
        $istek = $this->istek_at("/hisse", $sembol);
        if ($istek["code"] == 200){
            return json_decode(json_encode($istek['data']));
        }else{
            return (object) [
                "code" => $istek["code"],
                "text" => $istek["text"]
            ];
        }
    }

    /**
     * 
     * BIST Top-10 Çevirir
     *
     * @return object
     */
    public function hisse_sepet()
    {
        $istek = $this->istek_at("/hisse/sepet");
        if ($istek["code"] == 200){
            return json_decode(json_encode($istek['data']));
        }else{
            return (object) [
                "code" => $istek["code"],
                "text" => $istek["text"]
            ];
        }
    }

    /**
     * 
     * İstenilen Sembolün Bilgilerini Çevirir
     *
     * @param string $sembol Sembol belirterek o sembolun verisini alabilirsiniz
     * @return object
     */
    public function kripto_ver($sembol = "")
    {
        $istek = $this->istek_at("/kripto", $sembol);
        if ($istek["code"] == 200){
            return json_decode(json_encode($istek['data']));
        }else{
            return (object) [
                "code" => $istek["code"],
                "text" => $istek["text"]
            ];
        }
    }

    /**
     * 
     * Kriptolar Hakkında Güncel Haberleri Çevirir
     *
     * @return object
     */
    public function kripto_haber()
    {
        $istek = $this->istek_at("/kripto/haber");
        if ($istek["code"] == 200){
            return json_decode(json_encode($istek['data']));
        }else{
            return (object) [
                "code" => $istek["code"],
                "text" => $istek["text"]
            ];
        }
    }

    /**
     * 
     * Kripto Top-10 Çevirir
     *
     * @return object
     */
    public function kripto_sepet()
    {
        $istek = $this->istek_at("/kripto/sepet");
        if ($istek["code"] == 200){
            return json_decode(json_encode($istek['data']));
        }else{
            return (object) [
                "code" => $istek["code"],
                "text" => $istek["text"]
            ];
        }
    }
    
    /**
     * 
     * PlusAPI'nin API hizmetine istek atar
     *
     * @param string $endpoint İstek atmak istediğiniz endpoint
     * @param string $sembol Eğer istek atmak istediğiniz endpoint sembol isterse doldurulması gerekir
     * @return object
     */
    private function istek_at($endpoint, $sembol = null)
    {
        $api = "https://plusapi.org/api" . $endpoint . "?token=" . $this->token . ($sembol != null ? "&sembol=".urlencode($sembol) : null);
        $opts = array('http' => [
            'method' => 'GET',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "User-Agent: ".$_SERVER["HTTP_USER_AGENT"]
        ]);
        $context  = stream_context_create($opts);
        $result = file_get_contents($api, false, $context);

        return json_decode($result, true);
    }
}