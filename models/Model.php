<?php
namespace Pretest\Models;

/**
 * Model 抽象クラス
 * dbConnectメソッドでデータベースとの接続処理を実装する
 * @access public
 * @author 0918nobita
 * @package Pretest\Models
 */
abstract class Model
{
    /**
     * データベースに接続しPDOオブジェクトを返す
     */
    public function dbConnect() {
        try {
            $db = new \PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
