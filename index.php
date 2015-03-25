<?php
class Jmemcache{

  function __construct(){
    if (class_exists('Memcache')) {
            $this->Cache = new Memcache();
            $this->Enabled = true;
            if (! $this->Cache->connect('pub-memcache-19740.us-east-1-2.4.ec2.garantiadata.com', 19740))  {
                $this->Cache = null;
	                $this->Enabled = false;
	            }
	        }
  }
  
  function add_to_cache($cacheID,$cacheVal,$ttl){
  }
  
  function remove_cache($cacheID){
  }
  
}

?>