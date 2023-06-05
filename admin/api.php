<?php
include "connection.php";
class Api 
{
    private $action;
    public function __construct($action) {
        $this->action = $action;
    }
    public function get_links()
    {
        $link_query = mysql_query("SELECT link,title FROM links");
        $link_url =[];
        while ($row = mysql_fetch_array($link_query, MYSQL_ASSOC)) 
        {
	
        if($row['title']=="android_app")$link_url['android_app'] =$row['link'];
        if($row['title']=="ios_app")$link_url['ios_app'] =$row['link'];
        if($row['title']=="m_customer_service")$link_url['m_customer_service'] =$row['link'];
        if($row['title']=="customer_service")$link_url['customer_service'] =$row['link'];
	
        }
        return json_encode($link_url);
        
    } 

      public function get_live_model() {
        $link_query_two = mysqli_query("SELECT *  FROM model WHERE type='live'");
        $data = array();
        while ($row = mysqli_fetch_assoc($link_query_two)) {
          $data[] = $row;
        }
       return json_encode($data);
      }


}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'get_links')
{
	
    $api = new Api($_POST['action']);
	
    echo $api->get_links();
}


if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'get_live_info')
{
    $api_two = new Api($_GET['action']);
    $api_two->get_live_model();
}


?>
