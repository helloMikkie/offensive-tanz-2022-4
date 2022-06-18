<?php 

return function () {
    return [
    'upcomingEvents' => collection('upcoming')->sortBy('start_date', 'asc'),
   
    'pastEvents' => collection('past')->sortBy('start_date', 'desc'),



    ];
};