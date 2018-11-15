<?php
    $dsn = 'mysql:dbname=weakchat;host=localhost';
    $user = 'weakchat';
    $password = 'weakpa33w0rd';

    try{
      $dbh = new PDO($dsn, $user, $password);
    }catch (PDOException $e){
      print('Error:'.$e->getMessage());
      print("wehh");
      die();
    }

    if(isset($_POST)){
        $dbh->query("drop table if exists data;
        create table data(
          id integer primary key auto_increment,
          content varchar(1024) not null,
          name varchar(512) not null,
          hash varchar(10)
        );
        insert into data(content,name,hash) values
          (\"This is a super secure chat room\",\"Korry\",\"c820aa309d\"),
          (\"Trust us\",\"Aaron\",\"a0434bbffd\"),
          (\"<marquee>Don't hack us</marquee>\",\"ADMIN\",\"40a8ee5bf3\");");
    }

?>