<?php

class ContaBanco
{
    // atributos
    public $nunConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // metodos
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function FecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "Conta ainda tem dinheiro, não posso fecha-lá!";
        }elseif ($this->getSaldo() < 0) {
            echo "Conta está em debito impossivel fecha-la!";
        }else{
            $this->setStatus(false);
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        }else{
            echo "Conta fechada. Não e possivel depositar";
        }
    }

    public function sacar()
    {
    }

    public function pagarMensal()
    {
    }


    // metodos especiais
    public function __construct()
    {
    }


    public function getNumConta()
    {
        return $this->nunConta;
    }
    public function setNumConta($nunConta)
    {
        $this->nunConta = $nunConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
