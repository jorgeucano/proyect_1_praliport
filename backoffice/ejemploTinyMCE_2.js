function cargarTinyMCE()
{
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		theme_advanced_buttons1 : "bold, italic, underline, separator, justifyleft, justifycenter, justifyright, justifyfull ",
		theme_advanced_buttons2 : "bullist,numlist",
		theme_advanced_buttons3 : "",
		theme_advanced_toolbar_location: "top",
		theme_advanced_toolbar_align: "left"
	});
  }