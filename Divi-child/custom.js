
/*__rekai.ready(function() {
  var rekAutocomplete = rekai_autocomplete('#rek-search-input');
});*/

window.rek_viewclick = true;

(function( $ ){
  $( document ).ready(function() {
    // add rek.ai data about user
    if (hksupport_js_object['rekcsf1'] != null) {
      localStorage.setItem('rekcsf1', hksupport_js_object['rekcsf1']);
    }
    if (hksupport_js_object['rekcsf2'] != null) {
      localStorage.setItem('rekcsf2', hksupport_js_object['rekcsf2']);
    }
    if (hksupport_js_object['rekcsf3'] != null) {
      localStorage.setItem('rekcsf3', hksupport_js_object['rekcsf3']);
    }
    if (hksupport_js_object['rekcsf4'] != null) {
      localStorage.setItem('rekcsf4', hksupport_js_object['rekcsf4']);
    }

  });
})( jQuery );
