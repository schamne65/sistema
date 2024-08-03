<?php
function connection(){
    try{
        $base = new PDO('mysql:host=localhost;dbname=sistema','root','mysql');
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $base;
    }catch (PDOException $e){
        echo 'Error de conexion ' . $e->getMessage();
        return null;
    }
};

const METHOD="AES-256-CBC";
const SECRET_KEY='%SISTEMA24$';
const SECRET_IV='100620';