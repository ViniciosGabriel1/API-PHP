<?php


class BaseController{


    public function __call($name, $arguments)
    {
        $this->sendOutput('', array('HTTP/1.1 404 Not Found'));

    }

    protected function getStringParams() : array{
        parse_str($_SERVER['QUERY_STRING'], $query);
        return $query;

    }

    protected function sendOutput($data, $httpHeader = array()){
        header_remove('Set-Cookie');
    
        if(is_array($httpHeader) && count($httpHeader)){
            foreach ($httpHeader as $header){
                header($header);
            }
        }
    
        echo $data;
    }
    
        
    }

