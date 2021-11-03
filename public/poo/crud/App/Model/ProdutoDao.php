<?php

namespace App\Model;

class ProdutoDao
{
  // DAO: Data Access Object
  // In computer software, a data access object (DAO) is a pattern
  // that provides an abstract interface to some type of database
  // or other persistence mechanism. By mapping application calls 
  // to the persistence layer, the DAO provides some specific data 
  // operations without exposing details of the database.
  public function create(Produto $p)
  {
    $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?);';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $p->getNome());
    $stmt->bindValue(2, $p->getDescricao());

    $stmt->execute();
  }

  public function read()
  {
    $sql = 'SELECT * FROM produtos;';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0):
      $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $res;
    else:
      return [];
    endif;
  }

  public function update(Produto $p)
  {
    $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $p->getNome());
    $stmt->bindValue(2, $p->getDescricao());
    $stmt->bindValue(3, $p->getId());

    $stmt->execute();
  }

  public function delete($id)
  {
    $sql = 'DELETE FROM produtos WHERE id = ?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();
  }
}

?>
