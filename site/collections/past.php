<?php 

return function (){
    return page('events')
        ->children()
        ->filter(function($child){
            return $child->end_date() < date('Y-m-d');
        });
};