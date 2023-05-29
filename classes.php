<?php
class celular{
    var $modelo;
    var $marca;
    var $cor;
    var $Ligado;
    var $carga;

    function Ligar(){
        $this->Ligado = true;
    }

    function Desligar(){
        $this->Ligado = false;
    }

    function AcessarRedesSociais(){
            if($this->Ligado == true && $this->marca === "iphone"){
         echo "Oba, o seu dispositivo está pronto para acessar as redes sociais! Acesse o App Store do seu dispositivo iOS para baixar os aplicativos.";
            }
            elseif ($this->Ligado == true && $this->marca != "iphone"){
                echo "Oba, o seu dispositivo está pronto para acessar as redes sociais! Acesse o Play Store do seu dispositivo Android para baixar os aplicativos.";
            }
            else{
                echo "ERRO!";
            }

           
    }
}
?>