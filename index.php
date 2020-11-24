 <!DOCTYPE html> 
 <html> 
 <style> 
 * { 
	box-sizing: border-box; 
}
 h1 { 
 text-align: center;
}
 h2  { 
 text-align: center;
} 
body {
  background-color: lightblue;
}
div {
  background-color: beige;
}
.outer-grid { 
	display: flex; 
	flex-wrap: wrap3; 
	padding: 0 4px; 
} 
 .inner-grid {
	flex: 25%;
	max-width: 25%;
	18 padding: 0 4px;
	} 
 .inner-grid img { 
	margin-top: 8px; 
	width: 100%;
	padding: 10px; 
} 
@media screen and (max-width: 800px) {
 .inner-grid {
	flex: 50%; 
	max-width: 50%;
	} 
}
@media screen and (max-width: 600px) { 
. inner-grid { 
	flex: 100%;
	max-width 100%;
	}
}
</style>
 <body> 
 <h1>Glenn Japitana's Photo Gallery</h1>
 <div class="outer-grid"> 
 <div class="inner-grid"> 
 <h2>Elementary</h2>
 <a href="Picture1.html">
 <img src="elementary1.jpg"alt="elem1"></a> 
 <img src="elementary2.jpg"alt="elem2"/> 
 <img src="elementary.jpg"alt="elem"/>
 <img src="elementary3.jpg"alt="elem3"/> 
 <img src="elementary4.jpg"alt="elem4"/> 
 </div> 
 <div class="inner-grid"> 
 <h2>Junior high school</h2>
 <img src="high school2.jpg"alt="hs2"/> 
 <img src="high school3.jpg"alt="hs3"/> 
 <img src="high school1.jpg"alt="hs1"/> 
 <img src="high school4.jpg"alt="hs4"/>
 <img src="high school.jpg"alt="hs"/> 
 </div> 
 <div class="inner-grid"> 
 <h2>Senior high school</h2>
 <img src="senior high.jpg"alt="shs"/> 
 <img src="senior high1.jpg"alt="shs1"/> 
 <img src="senior high2.jpg"alt="shs2"/>
 <img src="senior high3.jpg"alt="shs3"/>
 <img src="senior high4.jpg"alt="shs4"/>  
 </div>
  <div class="inner-grid"> 
  <h2>College</h2>
 <img src="college.jpg"alt="col"/> 
 <img src="college1.jpg"alt="col1"/> 
 <img src="college2.jpg"alt="col2"/>
 <img src="college3.jpg"alt="col3"/> 
 <img src="college4.jpg"alt="col4"/> 
 </div>
 </div>
 </div>
 </body>
 </html>