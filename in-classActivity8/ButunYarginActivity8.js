
$( "#birthday" ).ready(function(){$('#birthday').datepicker()});

var languages = ["ActionScript", "AppleScript", "Asp", "JavaScript", "Lisp", "Perl", "PHP", "Python"];

$("#progLang").ready(function(){
    $( "#progLang" ).autocomplete({
        source: languages
    })
});
