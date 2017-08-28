<?php

namespace Model;

class AdminModel extends \W\Model\Model
{
    public function addGames($addjeuxbdd)
    {
        $query = $this->dbh->prepare("INSERT INTO games (`name`, `description`, `picture`)
        VALUES (:name, :description, :picture)");
        $query->bindValue(':name', $addjeuxbdd['name']);
        $query->bindValue(':description', $addjeuxbdd['description']);
        $query->bindValue(':picture', $addjeuxbdd['picture']);

        $query->execute();

        return $this->lastInsertId();
    }
    // public function deleteGames()
    // {
    //     $query = $this->dbh->prepare("DELETE FROM games WHERE xxxx = xxxx");
    //
    // }
    // public function updateGames()
    // {
    //     $query = $this->dbh->prepare("UPDATE games
    //         SET name = 'xxxx',
    //             description = 'xxxx'
    //             picture ='xxxx'
    //         WHERE xxxx= xxxx");
    // }
}
