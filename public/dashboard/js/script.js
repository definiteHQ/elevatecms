// init dropdown js
$('.ui.dropdown').dropdown();

// init accordion
$('.ui.accordion')
  .accordion()
;

// for button remove featured image
$('.special.cards .image').dimmer({
  on: 'hover'
});

// init checkbox
$('.ui.checkbox')
  .checkbox()
;

//init JS calendar
$('#sort-calendar').calendar({
  type: 'date'
});

// tiny MCE
tinymce.init({ 
		selector:'#wysiwyg',
		theme: 'modern',
		plugins: [
		    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks visualchars code fullscreen',
		    'insertdatetime media nonbreaking save table contextmenu directionality',
		    'template paste textcolor colorpicker textpattern imagetools codesample toc'
	 	 ],
		  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
		  image_advtab: true
});