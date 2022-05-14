var _ = document.documentElement;
var mWi = window.innerWidth/2;
var mHi = window.innerHeight/2;
var div = mHi*mWi / 5000;

document.onmousemove = function()	{
	moveMouse();
}

function moveMouse() {
	let x = event.clientX;
	let y = event.clientY;
  _.style.setProperty('--deg-x', 8+((y-mHi)/(div)) + "deg");
	_.style.setProperty('--deg-y', -16-((x-mWi)/(div)) + "deg");
  _.style.setProperty('--x', -y/20 + "deg");
  _.style.setProperty('--y', x/20 + "deg");
	_.style.setProperty('--mouse-x', x + "px");
	_.style.setProperty('--mouse-y', y + "px");
}