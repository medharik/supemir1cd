// JavaScript Document
$(document).ready(function() {
$(".linkviewer a").on("click", function(event){
event.preventDefault();
var url = 'http://docs.google.com/viewer?url=http://vertus.ma/androidlocalisation/catalogues/'; // changer l'url par celle de votre site
url += $(this).attr('href');
url += '&amp;embedded=true';
var iframe = '<iframe src="'+url+'" width="100%" height="780" style="border: none;"></iframe>';
$('#document-viewer').html(iframe);
});
});