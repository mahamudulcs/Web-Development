$('document').ready(function(){
	MakeDraggable($("#hat"));
	MakeDraggable($("#eyes"));
	MakeDraggable($("#ears"));
	MakeDraggable($("#nose"));
});
function dragMouseDown(e) {
	e = e || window.event;
	e.preventDefault();
	//get the mouse cursor position at startup:
	initialX = e.clientX;
	initialY = e.clientY;
	$(document).mouseup(function(){removeHandlers()});
	// call a function whenever the cursor moves:
	$(document).mousemove(function(){mymousemove()});
}
function mymousemove(e) {
	e = e || window.event;
	e.preventDefault();
	deltaX = initialX - e.clientX;
	deltaY = initialY - e.clientY;
	initialX = e.clientX;
	initialY = e.clientY;
	$(selectedElement).css("top", (selectedElement.offset().top - deltaY) + "px");
	$(selectedElement).css("left", (selectedElement.offset().left - deltaX) + "px");	
}
function removeHandlers() {
	$(document).unbind( "mouseup" );
	$(document).unbind( "mousemove" );
}
function MakeDraggable(elmnt) {
	var deltaX = 0, deltaY = 0, initialX = 0 initialY = 0;
	$(elmnt).mousedown(function() {
		selectedElement = $(elmnt);
	dragMouseDown()});
}