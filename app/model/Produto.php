<?php
class Produto extends TRecord{
    const TABLENAME = 'produto';
    const PRIMARYKEY = 'id';
    const IDPOLICY = 'max';

    public function __construct($id = null, $callObjectLoad = true)
    {
        parent::__construct($id, $callObjectLoad);

        parent::addAttribute('descricao');
        parent::addAttribute('estoque');
        parent::addAttribute('preco_venda');
        parent::addAttribute('unidade');
        parent::addAttribute('local_foto');
    }
}

/*
CREATE TABLE produto(
  id INTEGER PRIMARY KEY NOT NULL,
  descricao VARCHAR(200),
  estoque float,
  preco_venda float,
  unidade VARCHAR(200),
  local_foto text
);
*/