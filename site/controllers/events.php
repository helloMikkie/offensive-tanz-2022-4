<?php 

return function () {
    return [
    'upcomingEvents' => collection('upcoming')->sortBy('end_date', 'asc'),
   
    'pastEvents' => collection('past')->sortBy('end_date', 'desc'),



    ];
};