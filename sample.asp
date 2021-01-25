<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Lightbox Slideshow</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="prototype.js"></script>
	<script type="text/javascript" src="scriptaculous.js?load=effects"></script>
	<script type="text/javascript" src="lightbox.js"></script>
</head>
<body>
	<h1>Lightbox Slideshow Gallery</h1>
	
		
<h3>Една слика </h3>
	<a href="sliki/1.jpg" title="ова мора да се види?" rel="lightbox" ><img src="sliki/1.jpg"  width="160" height="120"/></a>
	
	
	<h3>Повеќе слики </h3>
<% i=1
while i<6 
slika=i&".jpg"
 %>
<a href="sliki/<%=slika%>" title="текст" rel="lightbox[ESEN]">
<img src="sliki/<%=slika%>"  width="160" height="120"/></a>

<%
i=i+1

wend %>
	

<span style="display:none">
	<a href="sliki/2.jpg" title="убаво" rel="lightbox[ESEN]"><img src="sliki/2.jpg"  width="160" height="120"/></a>
	<a href="sliki/3.jpg" title="супер!" rel="lightbox[ESEN]"><img src="sliki/3.jpg"  width="160" height="120"/></a>
	<a href="sliki/4.jpg"  rel="lightbox[ESEN]"><img src="sliki/4.jpg"  width="160" height="120"/></a>
	<a href="sliki/5.jpg"  rel="lightbox[ESEN]"><img src="sliki/5.jpg"  width="160" height="120" /></a>
	<a href="sliki/6.jpg"  rel="lightbox[ESEN]"><img src="sliki/6.jpg"  width="160" height="120"/></a>
</span>ghf

</body>
</html>