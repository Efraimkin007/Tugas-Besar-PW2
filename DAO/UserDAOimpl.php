<?php


class UserDAOimpl
{
    public function login(User $user){
        $link = PDOUtil::createConnection();
        $query = "SELECT * FROM user WHERE username=? AND password = ?";
        $stmt = $link -> prepare($query);
        $stmt->bindValue(1,$user->getUsername());
        $stmt->bindValue(2,$user->getPassword());
        $stmt ->execute();
        $result = $stmt->fetch();
        PDOUtil::closeConnection($link);
        return $result;
    }
}