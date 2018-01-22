<?php

class MysqlConfiguration
{
    private $host;

    private $port;

    private $username;

    private $password;

    private $db_name;

    public function __construct(string $host, string $username, string $password, string $db_name, string $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getDbName(): string
    {
        return $this->db_name;
    }


}


class Mysql
{
    private $configuration;

    public function __construct(MysqlConfiguration $config)
    {
        $this->configuration = $config;
    }


    public function connect()
    {
        return mysqli_connect($this->configuration->getHost(),
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getDbName(),
            $this->configuration->getPort());
    }
}


$config = new MysqlConfiguration('localhost', 'root', '', 'test', 3306);
$db = new Mysql($config);
$con = $db->connect();