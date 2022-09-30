<?php
$validGenerateAttributes = 'private $codSitAluno;
private $codTpSituacao;
private $ativo;
private $dtMatricula;
private $codOrigem;
private $mediaGlobal;
private $qtdParcelas;
private $mediaGlobalSerie;
private $dtInscricao;
';

$validGenerateGetters = 'public function getCodSitAluno() {return $this->codSitAluno;}
public function getCodTpSituacao() {return $this->codTpSituacao;}
public function getAtivo() {return $this->ativo;}
public function getDtMatricula() {return $this->dtMatricula;}
public function getCodOrigem() {return $this->codOrigem;}
public function getMediaGlobal() {return $this->mediaGlobal;}
public function getQtdParcelas() {return $this->qtdParcelas;}
public function getMediaGlobalSerie() {return $this->mediaGlobalSerie;}
public function getDtInscricao() {return $this->dtInscricao;}
';

$validGenerateSetters = 'public function setCodSitAluno($codSitAluno) {$this->codSitAluno = $codSitAluno;}
public function setCodTpSituacao($codTpSituacao) {$this->codTpSituacao = $codTpSituacao;}
public function setAtivo($ativo) {$this->ativo = $ativo;}
public function setDtMatricula($dtMatricula) {$this->dtMatricula = $dtMatricula;}
public function setCodOrigem($codOrigem) {$this->codOrigem = $codOrigem;}
public function setMediaGlobal($mediaGlobal) {$this->mediaGlobal = $mediaGlobal;}
public function setQtdParcelas($qtdParcelas) {$this->qtdParcelas = $qtdParcelas;}
public function setMediaGlobalSerie($mediaGlobalSerie) {$this->mediaGlobalSerie = $mediaGlobalSerie;}
public function setDtInscricao($dtInscricao) {$this->dtInscricao = $dtInscricao;}
';
