<?php

    class ClassParceiro{

        private $id = null;
        private $pessoa = null;
        private $opcao = null;
        private $nome = null;
        private $cpf = null;
        private $datanasc = null;
        private $email = null;
        private $nacionalidade = null;
        private $fantasia = null;
        private $naturalidade = null;
        private $telefone = null;
        private $celular = null;
        private $atividade = null;
        private $cep2 = null;
        private $uf2 = null;
        private $numero2 = null;
        private $municipio2 = null;
        private $endereco2 = null;
        private $bairro2 = null;
        private $complemento2 = null;
        private $cep = null;
        private $uf = null;
        private $numero = null;
        private $municipio = null;
        private $endereco = null;
        private $bairro = null;
        private $complemento = null;
        private $ufexp = null;
        private $dataexp = null;
        private $cnh = null;
        private $inss = null;
        private $piss = null;
        private $rg = null;
        private $estadual = null;
        private $municipal = null;
        private $suframa = null;
        private $orgao = null;
        private $leads = null;
        private $contato = null;

        public function setID($id){
            $this->id = $id;
        }
        public function getID(){

            return $this->id;
        }

        public function setPessoa($pessoa){
            $this->pessoa = $pessoa;
        }
        public function getPessoa(){

            return $this->pessoa;
        }

        public function setOpcao($opcao){
            $this->opcao = $opcao;
        }
        public function getOpcao(){

            return $this->opcao;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome (){
            return $this->nome;
        }

        public function setFantasia($fantasia){
            $this->fantasia = $fantasia;
        }

        public function getFantasia (){
            return $this->fantasia;
        }
        public function setDatanasc($datanasc){
            $this->datanasc = $datanasc;
        }

        public function getDatanasc (){
            return $this->datanasc;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail (){
            return $this->email;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        public function getNacionalidade (){
            return $this->nacionalidade;
        }

        public function setCpf($cfp){
            $this->cpf = $cfp;
        }

        public function getCpf (){
            return $this->cpf;
        }
        public function setRg($rg){
            $this->rg = $rg;
        }

        public function getRg (){
            return $this->rg;
        }

        public function setEstadual($estadual){
            $this->estadual = $estadual;
        }

        public function getEstadual (){
            return $this->estadual;
        }
        public function setMunicipal($municipal){
            $this->municipal = $municipal;
        }

        public function getMunicipal (){
            return $this->municipal;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco (){
            return $this->endereco;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function getBairro (){
            return $this->bairro;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone (){
            return $this->telefone;
        }

        public function setCelular($celular){
            $this->celular = $celular;
        }

        public function getCelular (){
            return $this->celular;
        }
                
        public function setNaturalidade($naturalidade){
            $this->naturalidade = $naturalidade;
        }

        public function getNaturalidade (){
            return $this->naturalidade;
        }

        
        public function setSuframa($suframa){
            $this->suframa = $suframa;
        }

        public function getSuframa (){
            return $this->suframa;
        }
        
        public function setAtividade($atividade){
            $this->atividade = $atividade;
        }

        public function getAtividade (){
            return $this->atividade;
        }

        
        public function setCep($cep){
            $this->cep = $cep;
        }

        public function getCep (){
            return $this->cep;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getNumero (){
            return $this->numero;
        }

        public function setUf($uf){
            $this->uf = $uf;
        }

        public function getUf (){
            return $this->uf;
        }

        
        public function setMunicipio($municipio){
            $this->municipio = $municipio;
        }

        public function getMunicipio (){
            return $this->municipio;
        }
        
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }

        public function getComplemento (){
            return $this->complemento;
        }
        
        public function setOrgao($orgao){
            $this->orgao = $orgao;
        }

        public function getOrgao (){
            return $this->orgao;
        }

        public function setUfexp($ufexp){
            $this->ufexp = $ufexp;
        }

        public function getUfexp (){
            return $this->ufexp;
        }

        
        public function setCnh($cnh){
            $this->cnh = $cnh;
        }

        public function getCnh (){
            return $this->cnh;
        }
        
        
        public function setDataexp($dataexp){
            $this->dataexp = $dataexp;
        }

        public function getDataexp (){
            return $this->dataexp;
        }

        public function setInss($inss){
            $this->inss = $inss;
        }

        public function getInss (){
            return $this->inss;
        }

        public function setPiss($piss){
            $this->inss = $piss;
        }

        public function getPiss (){
            return $this->piss;
        }

/********************************************************* */

        public function setEndereco2($endereco2){
            $this->endereco2 = $endereco2;
        }

        public function getEndereco2 (){
            return $this->endereco2;
        }

        public function setBairro2($bairro2){
            $this->bairro2 = $bairro2;
        }

        public function getBairro2 (){
            return $this->bairro2;
        }

        public function setCep2($cep2){
            $this->cep2 = $cep2;
        }

        public function getCep2 (){
            return $this->cep2;
        }

        public function setNumero2($numero2){
            $this->numero2 = $numero2;
        }

        public function getNumero2 (){
            return $this->numero2;
        }

        public function setUf2($uf2){
            $this->uf = $uf2;
        }

        public function getUf2 (){
            return $this->uf2;
        }

        
        public function setMunicipio2($municipio2){
            $this->municipio2 = $municipio2;
        }

        public function getMunicipio2 (){
            return $this->municipio2;
        }
        
        public function setComplemento2($complemento2){
            $this->complemento2 = $complemento2;
        }

        public function getComplemento2 (){
            return $this->complemento2;
        }
        public function setLeads($leads){
            $this->leads = $leads;
        }

        public function getLeads (){
            return $this->leads;
        }
        public function setContato($contato){
            $this->contato = $contato;
        }

        public function getContato (){
            return $this->contato;
        }

    }



?>