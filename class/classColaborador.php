<?php 

Class CLassColaborador{


    private $id;
    private $codigo;
    private $pessoa;
    private $nome;
    private $nomesocial;
    private $genero;
    private $usuario;
    private $nascimento;
    private $estato;
    private $uf;
    private $cidade;
    private $naturalidade;
    private $cor;
    private $telefone;
    private $celular;
    private $mae;
    private $pai;
    private $email;
    private $departamento;
    private $funcao;
    private $foto;
    private $cpf;
    private $cnh;
    private $cnhcat;
    private $cnhvalid;
    private $cnhemis;
    private $transporte;
    private $rg;
    private $rgemis;
    private $rguf;
    private $dataemissao;
    private $ufdoc;
    private $orgaoemissao;
    private $titulo;
    private $titulonum;
    private $titulozon;
    private $titulouf;
    private $zona;
    private $ufdocumento;
    private $municipio;
    private $numerodoc;
    private $categoria;
    private $datadoc;
    private $datavalidoc;
    private $datainfo;
    private $status;
    private $dataresci;
    private $motivo;
    private $salario;
    private $banco;
    private $agencia;
    private $conta;
    private $cepend;
    private $ufend;
    private $nend;
    private $muniend;
    private $compleend;
    private $instituto;
    private $escolaridade;
    private $curso;
    private $dataacad;
    private $deficiencia;
    private $defitipo;
    private $observacao;

    public function setID($id){
        $this->id = $id;
    }
    public function getID(){

        return $this->id;
    }
    /*
    public function setCodigo($codigo){
        $this->codigo = $codigo;

    }
    public function getCodigo(){
        return $this->codigo;

    }
    */
    public function setPessoa($pessoa){
        $this->pessoa = $pessoa;

    }
    public function getPessoa(){
        return $this->pessoa;

    }

    public function setNome($nome){
        $this->nome = $nome;

    }
    public function getNome(){
        return $this->nome;

    }

    public function setNomesocal($nomesocial){
        $this->nomesocial = $nomesocial;

    }
    public function getNomesocial(){
        return $this->nomesocial;

    }

    public function setGenero($genero){
        $this->genero = $genero;

    }
    public function getGenero(){
        return $this->genero;

    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;

    }
    public function getUsuario(){
        return $this->usuario;

    }

    public function setNascimento($nascimento){
        $this->nascimento = $nascimento;

    }
    public function getNascimento(){
        return $this->nascimento;

    }

    public function setEstato($estato){
        $this->estato = $estato;

    }
    public function getEstato(){
        return $this->estato;

    }

    public function setUf($uf){
        $this->uf = $uf;

    }
    public function getUf(){
        return $this->uf;

    }
    public function setCidade($cidade){
        $this->cidade = $cidade;

    }
    public function getCidade(){
        return $this->cidade;

    }
    public function setNaturalidade($naturalidade){
        $this->naturalidade = $naturalidade;

    }
    public function getNaturalidade(){
        return $this->naturalidade;

    }

    public function setCor($cor){
        $this->cor = $cor;

    }
    public function getCor(){
        return $this->cor;

    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;

    }
    public function getTelefone(){
        return $this->telefone;

    }
    public function setCelular($celular){
        $this->celular = $celular;

    }
    public function getCelular(){
        return $this->celular;

    }
    public function setMae($mae){
        $this->mae = $mae;

    }
    public function getMae(){
        return $this->mae;

    }
    public function setPai($pai){
        $this->pai = $pai;

    }
    public function getPai(){
        return $this->pai;

    }
    /*
    public function setEmail($email){
        $this->email = $email;

    }
    public function getEmail(){
        return $this->email;

    }
    */
    public function setDepartamento($departamento){
        $this->departamento = $departamento;

    }
    public function getDepartamento(){
        return $this->departamento;

    }
    public function setFuncao($funcao){
        $this->funcao = $funcao;

    }
    public function getFuncao(){
        return $this->funcao;

    }
    /*
    public function setFoto($foto){
        $this->foto = $foto;

    }
    public function getFoto(){
        return $this->foto;

    }
    */
    /*
    public function setCpf($cpf){
        $this->cpf = $cpf;

    }
    public function getCpf(){
        return $this->cpf;

    }
    */
    /*
    public function setCnh($cnh){
        $this->cnh = $cnh;

    }
    public function getCnh(){
        return $this->cnh;

    }
    */
    /*
    public function setCnhcat($cnhcat){
        $this->cnhcat = $cnhcat;

    }
    public function getCnhcat(){
        return $this->cnhcat;

    }*/
    /*
    public function setCnhvalid($cnhvalid){
        $this->cnhvalid = $cnhvalid;

    }
    public function getCnhvalid(){
        return $this->cnhvalid;

    }
    */
    /*
    public function setCnhemis($cnhemis){
        $this->cnhemis = $cnhemis;

    }
    public function getCnhemis(){
        return $this->cnhemis;

    }
    */
    public function setTransporte($transporte){
        $this->transporte = $transporte;

    }
    public function getTransporte(){
        return $this->transporte;

    }
    public function setRg($rg){
        $this->rg = $rg;

    }
    public function getRg(){
        return $this->rg;

    }
    /*
    public function setRgemis($rgemis){
        $this->rgemis = $rgemis;

    }
    public function getRgemis(){
        return $this->rgemis;

    }
    */
    /*
    public function setRguf($rguf){
        $this->rguf = $rguf;

    }
    public function getRguf(){
        return $this->rguf;

    }
    */
    public function setDataemissao($dataemissao){
        $this->dataemissao = $dataemissao;

    }
    public function getDataemissao(){
        return $this->dataemissao;

    }

    public function setUfdoc($ufdoc){
        $this->ufdoc = $ufdoc;

    }
    public function getUfdoc(){
        return $this->ufdoc;

    }
    public function setOrgaoemissao($orgaoemissao){
        $this->orgaoemissao = $orgaoemissao;

    }
    public function getOrgaoemissao(){
        return $this->orgaoemissao;

    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;

    }
    public function getTitulo(){
        return $this->titulo;

    }
    /*
    public function setTitulonum($titulonum){
        $this->titulonum = $titulonum;

    }
    public function getTitulonum(){
        return $this->titulonum;

    }
    */
    /*
    public function setTitulozon($titulozon){
        $this->titulozon = $titulozon;

    }
    public function getTitulozon(){
        return $this->titulozon;

    }
    */
    /*
    public function setTitulouf($titulouf){
        $this->titulouf = $titulouf;

    }
    public function getTitulouf(){
        return $this->titulouf;

    }
    */
    public function setZona($zona){
        $this->zona = $zona;

    }
    public function getZona(){
        return $this->zona;

    }
    public function setUfdocumento($ufdocumento){
        $this->ufdocumento = $ufdocumento;

    }
    public function getUfdocumento(){
        return $this->ufdocumento;

    }
    public function setMunicipio($municipio){
        $this->municipio = $municipio;

    }
    public function getMunicipio(){
        return $this->municipio;

    }
    public function setNumerodoc($numerodoc){
        $this->numerodoc = $numerodoc;

    }
    public function getNumerodoc(){
        return $this->numerodoc;

    }
    public function setCategoriac($categoria){
        $this->categoria = $categoria;

    }
    public function getCategoria(){
        return $this->categoria;

    }
    public function setDatadoc($datadoc){
        $this->datadoc = $datadoc;

    }
    public function getDatadoc(){
        return $this->datadoc;

    }
    public function setDatavalidoc($datavalidoc){
        $this->datavalidoc = $datavalidoc;

    }
    public function getDatavalidoc(){
        return $this->datavalidoc;

    }
    public function setDatainfo($datainfo){
        $this->datainfo = $datainfo;

    }
    public function getDatainfo(){
        return $this->datainfo;

    }
    public function setStatus($status){
        $this->status = $status;

    }
    public function getStatus(){
        return $this->status;

    }
    public function setDataresci($dataresci){
        $this->dataresci = $dataresci;

    }
    public function getDataresci(){
        return $this->dataresci;

    }
    public function setMotivo($motivo){
        $this->motivo = $motivo;

    }
    public function getMotivo(){
        return $this->motivo;

    }
    public function setSalario($salario){
        $this->salario = $salario;

    }
    public function getSalario(){
        return $this->salario;

    }
    public function setBanco($banco){
        $this->banco = $banco;

    }
    public function getBanco(){
        return $this->banco;

    }

    public function setAgencia($agencia){
        $this->agencia = $agencia;

    }
    public function getAgencia(){
        return $this->agencia;

    }
    public function setConta($conta){
        $this->conta = $conta;

    }
    public function getConta(){
        return $this->conta;

    }
    public function setCepend($cepend){
        $this->cepend = $cepend;

    }
    public function getCepend(){
        return $this->cepend;

    }
    public function setUfend($ufend){
        $this->ufend = $ufend;

    }
    public function getUfend(){
        return $this->ufend;

    }
    public function setNend($nend){
        $this->nend = $nend;

    }
    public function getNend(){
        return $this->nend;

    }
    public function setMuniend($muniend){
        $this->muniend = $muniend;

    }
    public function getMuniend(){
        return $this->muniend;

    }
    public function setCompleend($compleend){
        $this->compleend = $compleend;

    }
    public function getCompleend(){
        return $this->compleend;

    }

    public function setInstituto($instituto){
        $this->instituto = $instituto;

    }
    public function getInstituto(){
        return $this->instituto;

    }
    public function setEscolaridade($escolaridade){
        $this->escolaridade = $escolaridade;

    }
    public function getEscolaridade(){
        return $this->escolaridade;

    }
    public function setCurso($curso){
        $this->curso = $curso;

    }
    public function getCurso(){
        return $this->curso;

    }
    public function setDataacad($dataacad){
        $this->dataacad = $dataacad;

    }
    public function getDataacad(){
        return $this->dataacad;

    }
    public function setDeficiencia($deficiencia){
        $this->deficiencia = $deficiencia;

    }
    public function getDeficiencia(){
        return $this->deficiencia;

    }

    public function setDefitipo($defitipo){
        $this->defitipo = $defitipo;

    }
    public function getDefitipo(){
        return $this->defitipo;

    }
    public function setObservacao($observacao){
        $this->observacao = $observacao;

    }
    public function getObservacao(){
        return $this->observacao;

    }



}



?>