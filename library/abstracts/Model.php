<?php

namespace Library\Abstracts;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Delete;
use Zend\Db\Sql\Where;

class Model
{
    protected $_dbAdapter;
    protected $_executeDb;


    /**
     * @param \Zend\Db\Adapter\AdapterInterface $dbAdapter
     */
    public function __construct(\Zend\Db\Adapter\AdapterInterface $dbAdapter){
        $this->_dbAdapter = $dbAdapter;
        $this->_executeDb = new Sql($this->_dbAdapter);
    }

    /**
     * @return \Zend\Db\Adapter\AdapterInterface
     */
    public function getAdapter(){
        return $this->_dbAdapter;
    }

    /**
     * @return \Zend\Db\Sql\Sql
     */
    protected function sql(){
        return new Sql($this->_dbAdapter);
    }

    /**
     * @return \Zend\Db\Sql\Select
     */
    protected function select(){
        return $this->sql()->select();
    }

    /**
     * @return \Zend\Db\Sql\Insert
     */
    protected function insert(){
        return new Insert();
    }

    /**
     * @param string $table
     * @return \Zend\Db\Sql\Update
     */
    protected function update($table){
        return new Update($table);
    }

    /**
     * @param string $table
     * @return \Zend\Db\Sql\Delete
     */
    protected function delete($table){
        return new Delete($table);
    }


    /**
     * @param string $sql
     * @return \Zend\Db\Adapter\Driver\ResultInterface
     */
    protected function execute($sql){
        $statement = $this->_executeDb->prepareStatementForSqlObject($sql);
        return $statement->execute();
    }

    /**
     * @param \Zend\Db\Sql\Select $sql
     * @return mixed
     */
    protected function fetchAll(\Zend\Db\Sql\Select $sql) {
        $statement = $this->_executeDb->prepareStatementForSqlObject($sql);
        $statement->prepare();
        $result  = $statement->execute();
        $resultSet = new ResultSet;
        $resultSet->initialize($result);
        return $resultSet->toArray();
    }

    /**
     *
     * @param \Zend\Db\Sql\Select $sql
     */
    protected function fetchRow(\Zend\Db\Sql\Select $sql){
        $statement = $this->_executeDb->prepareStatementForSqlObject($sql);
        $statement->prepare();
        $result  = $statement->execute();
        $resultSet = new ResultSet;
        $resultSet->initialize($result);
        $data = $resultSet->toArray();
        return empty($data) ? array() : $data[0];
    }

    /**
     * @param string $query
     * @param array $params
     */
    protected function query($query, array $params = []){
        return $this->_dbAdapter->query($query, $params);
    }

    /**
     * @param array $search
     * @param \Zend\Db\Sql\AbstractPreparableSql $sql
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    protected function addGridSearch(array $search, $sql, array $searchConfig = []){
        if(empty($searchConfig))
            $searchConfig = $this->_gridSearchConfig;

        foreach($searchConfig as $field => $config){
            if(isset($search[$field]) && $search[$field] != ''){
                if($config['type'] == 'like'){
                    $like = new Where();
                    $sql->where($like->like( new \Zend\Db\Sql\Expression($config['column']), "%$search[$field]%"));

                }elseif($config['type'] == 'date'){

                    $sql->where([ "CAST({$config['column']} as date) = ?" => $search[$field] ]);
                }else{
                    $sql->where([ $config['column'] => $search[$field] ]);
                }
            }
        }

        return $sql;
    }
}