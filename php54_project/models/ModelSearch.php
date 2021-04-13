<?php

trait ModelSearch
{
    public function modelAjaxSearch()
    {
        $conn = Connection::getInstance();
        $key = isset($_GET["key"]) ? $_GET["key"] : "";
        $query = $conn->query("select id,name,photo from products where name like '%$key%'");
        return $query->fetchAll();
    }

    public function modelRead($recordPerPage)
    {
        $minamount = isset($_GET["minamount"]) ? $_GET["minamount"] : 0;
        $maxamount = isset($_GET["maxamount"]) ? $_GET["maxamount"] : 0;
        // lay bien page truyen tu url
        $page = isset($_GET["page"]) && $_GET["page"] > 0 ? $_GET["page"] - 1 : 0;
        // lay tu ban ghi nao
        $from = $page * $recordPerPage;
        $conn = Connection::getInstance();
        // thuc hien truy van
        $query = $conn->query("select * from products where price >= $minamount and price <= $maxamount order by id desc limit $from, $recordPerPage");
        // tra ve nhieu ban ghi
        return $query->fetchAll();
    }

    // tinh tong so ban ghi
    public function modelTotalRecord()
    {
        $minamount = isset($_GET["minamount"]) ? $_GET["minamount"] : 0;
        $maxamount = isset($_GET["maxamount"]) ? $_GET["maxamount"] : 0;
        $conn = Connection::getInstance();
        // thuc hien truy van
        $query = $conn->query("select id from products where price >= $minamount and price <= $maxamount");
        // tra ve so ban ghi
        return $query->rowCount();
    }
}

?>
