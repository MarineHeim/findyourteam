
$('#research').autocomplete({
    source : '/findyourteam/public/api/users',

    focus: function( event, ui ) {
        $( "#research" ).val( ui.item.username );
        return false;
    },

    select: function( event, ui ) {
        $( "#research" ).val( ui.item.username);
        window.location = ui.item.url;
        return false;
    }


}).
autocomplete( "instance" )._renderItem = function( ul, user ) {
    return $( "<li>" )
        .append( "<div>" + "<a href=\""+user.url+"\">" +user.username + "</a></div>" )
        .appendTo( ul );
}
