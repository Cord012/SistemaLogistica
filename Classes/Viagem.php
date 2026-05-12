<?php
class Viagem{
    public function __construct(private string $destino, private float $distanciaTotal, private Motorista $motorista, private Veiculo $veiculo) {}

    public function getDestino(): string
    {
        return $this->destino;
    }
    public function getDistanciaTotal(): float
    {
        return $this->distanciaTotal;
    }
    public function getMotorista(): Motorista
    {
        return $this->motorista;
    }
    public function getVeiculo(): Veiculo
    {
        return $this->veiculo;
    }
    public function setDestino(string $destino): void
    {
        $this->destino = $destino;
    }
    public function setDistanciaTotal(float $distanciaTotal): void
    {
        $this->distanciaTotal = $distanciaTotal;
    }
    public function setMotorista(Motorista $motorista): void
    {
        $this->motorista = $motorista;
    }
    public function setVeiculo(Veiculo $veiculo): void
    {
        $this->veiculo = $veiculo;
    }
    public function iniciarViagem(): void
    {
        if ($this->motorista->getValidade() < date('Y-m-d')) {
            echo "Motorista com CNH vencida. Viagem não pode ser iniciada.";
            return;
        }
        if ($this->veiculo->getCombustivelAtual() <= 0) {
            echo "Veículo sem combustível. Viagem não pode ser iniciada.";
            return;
        } else {
            echo "Viagem iniciada para " . $this->destino . ".";
        }
    }
    public function gerarRelatorio(): string
    {
        return "Relatório da Viagem:\nDestino: " . $this->destino . "\nDistância Total: " . $this->distanciaTotal . " km\nMotorista: " . $this->motorista->getNome() . "\nVeículo: " . $this->veiculo->getModelo();
    }
}
