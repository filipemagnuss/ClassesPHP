<?php
    class Filme{

        public int $id;

        public String $titulo;

        public String $diretor;

        public int $classificacao;

        public int $quantidade;

        public function __construct(
            String $titulo,
            String $diretor,
            int $classificacao,
            int $quantidade,
        )
        {
            $this->titulo = $titulo;
            $this->classificacao = $classificacao;
            $this->diretor = $diretor;
        }

        
    }

    class Cliente{

        public int $id;

        public String $nome;

        public String $endereco;

        public int $telefone;

        public int $cpf;

        public float $saldo_devedor;

        public function __construct(
            String $id,
            String $nome,
            int $endereco,
            int $telefone,
            int $cpf,
            float $saldo_devedor,
        )
        {
            $this->id = $id;
            $this-> nome= $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->saldo_devedor = $saldo_devedor;
            $this->cpf = $cpf;
        
        }
    }

    class Locacao{

        public int $id;

        public  date_time $data;

        public date_time $data_devolucao;

        public float $valor;

        public int $cliente_id;

        public function __construct(
            String $id,
            date_time $data,
            date_time $data_devolucao,
            float $valor,
            int $cliente_id,
        )
        {
            $this->id = $id;
            $this-> data= $data;
            $this->data_devolucao = $data_devolucao;
            $this->valor = $valor;
            $this->cliente_id = $cliente_id;
        }

    }
    
    echo "<pre>";
    $filme = new Filme("Resgate do soldado Ryan", "Diretor", 14, 3);
    var_dump($filme);

    $cliente = new Cliente("Filipe Hahn Magnus", "Estrada geral", 0, 0);
    var_dump($cliente);

    $locacao = new Locacao( 31, 0, 0, 12.0, 0);
    var_dump($locacao);

      

    
