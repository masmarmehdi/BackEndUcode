<?php   
    function get_anonymous($name, $alias, $affiliation){
        
        return new class($name, $alias, $affiliation){ 
            function __construct($name, $alias, $affiliation){
                $this->name = $name;
                $this->alias =  $alias;
                $this->affiliation = $affiliation;
            }
            function getName(){
                return $this->name;
            }
            function getAlias(){
                return $this->alias;
            }
            function getAffiliation(){
                return $this->affiliation;
            }
        };
    }
?>