var top_form, from, where;
   if (document.querySelector('.top-form')) {
       top_form = document.querySelector('.top-form');
       from = top_form.querySelector('.from input');
       where = top_form.querySelector('.where input');
       from = new google.maps.places.Autocomplete(from,{types: ['(cities)']});
       where = new google.maps.places.Autocomplete(where,{types: ['(cities)']});       
   };