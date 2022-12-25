<?php
echo "Hello World !!!";
hostname:http://localhost:1234/Sample/

username:root

password: //here Password is blank

database:codeignitordb

port:"8080:80"

$mysqli->real_connect($hostname,
                      $this->username,
                      $this->password,
                      $this->database,
                      $port,
                      $socket,
                      $client_flags);