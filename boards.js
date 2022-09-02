function expandboard(img)
{
	$(img).attr('class', 'zoomedin');
	document.getElementById('boardcontents').className = "darker";
}
function zoomout(img)
{
	$(img).attr('class', 'cornerimage');
	document.getElementById('boardcontents').className = "";
}
$('body').click((e) => {
  const target = $(e.target);
  var img = $("#boardlayout");
  if (target.is(img)) {
    expandboard(img);
  } else {
	  zoomout(img);
  }
});
var audio = document.getElementById('audio');
audio.onended = function() {
	audio.currentTime = parseFloat(document.getElementById('looptime').innerHTML);
	audio.play();
}