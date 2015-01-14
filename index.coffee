console.clear()

$(document).ready ->
  console.log("doc reaady")

  $('#btnSubmit').click ->
    console.log("clicky!!!")
    $('#btnSubmit').disabled = true

    v = $('#emailAddress')[0].value

    $('#emailResponse').html('<img src="ajax-loader.gif" border="0" />').css('backgroundColor', 'ffffd0')

    $.getJSON 'php/notify.php', { email : v }, (d) -> console.log d


