//Do hzntl navbar first. Share btns much better fit.

<html>
<head>
<title>CalcBee</title>

<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="question.css" />

</head>
<body>
<style>
#left-wrap{
position:fixed;
left:0px;width:20%;
top:0px;
bottom:0px;
background-color:gray;
padding:20px;
}
#nav-ul{
list-style:none;
margin:0;
padding:0;
}
#nav-ul li{
display:block;
margin:0;
padding:0;
}


#right-wrap{
position:fixed;
right:0px;width:20%;
top:0px;
bottom:0px;
background-color:gray;
}
</style>

<div id="left-wrap">
<div style="width:100px;height:100px;border:solid 1px black;"></div>
<ul id="nav-ul">
<li>asdf</li>
<li>asdf</li>
</ul>
</div>

<div id="middle-wrap">

<div id="leftarrow">
&#9664;
</div>

<div class="floater">
<div class="question">

	<div class="questiontext">
	<h2>POTW 6/9/14: Additivity</h2>
	<h4>By Clive Chan</h4>
	<br>
	<div>If \(1+1=2\), and \(2+2=4\), what is \(7+7\)?</div>
	</div>

<div class="inputarea">
	<div>
	<textarea class="mathjaxpreview-input" onblur="refreshMathjaxPreview(this);">To delimit TeX/LaTeX code, use double dollar signs like $$4+7$$ for displayed mathematics, and escaped parens like \(7+4\) for inline.</textarea>
	<div class="mathjaxpreview-wrap">
	<div class="mathjaxpreview">
	</div>
	</div>
	</div>
</div>

</div>

<div id="rightarrow">
&#x25B6;
</div>

</div>

<div id="right-wrap">
news
</div>
<script>
function refreshMathjaxPreview(thiselem){
	$(thiselem).siblings('.mathjaxpreview-wrap').children('.mathjaxpreview').html($(thiselem).val());
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}
$(function(){
	$('.mathjaxpreview-input').blur();
});
</script>
</body>
</html>



