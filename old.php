<a href="https://mirva.truroschool.com">
<div id="mview">
 <div id="mframe" class="head">
  <div class="mface mone"></div>
  <div class="mface mtwo"></div>
  <div class="mface mthree"></div>
  <div class="mface mfour"></div>
  <div class="mface mfive"></div>
  <div class="mface msix"></div>
 </div>
</div>
</a>
<script>
 var _ = document.documentElement;
 var h = window.innerHeight;
 var w = window.innerWidth;
 var div = h*w / 20000;

 document.onmousemove = function()	{
  moveMouse();
 }

 function moveMouse() {
  let x = event.clientX;
  let y = event.clientY;
  _.style.setProperty("--x", -y/40 + "deg");
  _.style.setProperty("--y", x/40 + "deg");
  _.style.setProperty("--x2", (h-y)/40 + "deg");
  _.style.setProperty('--deg-y', ((x-(w/2))/(div)) + "deg");
}
</script>

<style>
	
:root  {
  --x: 0deg;
  --y: 0deg;
  --x2: 0deg;
  --deg-y: 0deg;
}

.site-logo {
	opacity: 0;
}

#mframe .mone  {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/s1.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: rotateX(90deg) translateZ(30px);
}

#mframe .mtwo {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/front.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: translateZ(30px);
}

#mframe .mthree {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/s3.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: rotateY(90deg) translateZ(30px);
}

#mframe .mfour {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/m.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: rotateY(180deg) translateZ(-25px);
}

#mframe .mfive {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/5.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: rotateY(-90deg) translateZ(30px);
}

#mframe .msix {
  height: 60px;
  width: 60px;
  background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/s1.png);
  background-repeat: no-repeat;
  background-size: 60px 60px;
  transform: rotateX(-90deg) rotate(180deg) translateZ(30px);
}
@media (min-width: 1000px) {
#mview {
  perspective: 1000px;
  perspective-origin: 50% 100px;
  margin-left: calc(-100vw + 155px);
  margin-top: 20px;
  margin-bottom: -98px;
  z-index: 50;
}
#mframe.head {
  position: relative;
  margin: 0 auto;
  height: 68px;
  width: 68px;
  transform-style: preserve-3d;
  transform: rotateX(var(--x)) rotateY(var(--y));
}
}
#nview {
  perspective: 1000px;
  perspective-origin: 50% 100px;
  z-index: 50;
}

.header-inner {
	max-width: 400rem!important;
}

#mframe.foot {
  position: relative;
  margin: 0 auto;
  height: 80px;
  width: 60px;
  transform-style: preserve-3d;
  transform: rotateX(calc(var(--x2) - 6deg)) rotateY(calc(var(--y) - 10deg));
}
@media (max-width: 1220px) {
#mframe.foot {
  position: relative;
  margin: 0 auto;
  height: 80px;
  width: 60px;
  transform-style: preserve-3d;
  transform: rotateX(calc(var(--x2) - 2deg)) rotateY(calc(var(--y) - 2deg));
}
}
@media (max-width: 1000px) {	
#mview {
  perspective: 1000px;
  perspective-origin: 50% 100px;
/*   margin-left: calc(-100vw + 155px); */
  margin-top: 10px;
  margin-bottom: -40px;
  margin-left: 5px;
  z-index: 50;
}
#mframe.head {
  position: relative;
  margin: 0 auto;
  height: 68px;
  width: 68px;
  transform-style: preserve-3d;
  transform: rotateX(var(--x)) rotateY(var(--deg-y));
}
.site-logo {
	display: none;
}
}
@media (max-width: 700px) {
#mview {
	margin-bottom: -65px;
}
}

.mface {
  position: absolute;
  padding: 5px;
}
	
#site-header	{
	background-color: rgba(0,0,0,0)!important;
}
.custom-logo	{
	opacity:0;
}
	

a:hover .mfour {
	background: url(https://mirva.truroschool.com/wp-content/uploads/2021/09/m2.png)!important;
	background-repeat: no-repeat!important;
  background-size: 60px 60px!important;
}
	
</style>