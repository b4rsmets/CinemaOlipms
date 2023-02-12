<?
namespace movies;
    class films{
        protected $connect;
        function __construct(){

            $this->connect= \DBConnect::getInstance()->getConnect();
    
        }
        function getFilm($ID){
            if ($ID) {
                $query=$this->connect->query("select * from movies where id='".$ID."'");
                if($query->num_rows) {
                    $film= $query->fetch_assoc();
                   return $film;
                }
            }
        }

    }