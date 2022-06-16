<?php 

return function (){
    return page('events')
        ->children()
        ->filter(function($child){
            return $child->end_date()->toDate() < date('d.m.Y');
        });
};