<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<%

'get sectionID variable from URL, make sure it is a number (not text).

dim sectionID
sectionID=Request.Querystring("sectionID")
sectionID = CInt(sectionID)

dim title
dim subtitle
dim nextpagetitle

%>

<!--#include file="titles.inc"-->

<html>
<head>
<title>Seeing the Digital: <%=title%></title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#663333" vlink="#9966CC" alink="#FF0000" marginwidth="0" marginheight="0" topmargin="0" leftmargin="0">

<div align=center>

<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CC6600">
<tr><td width="50%" align=left valign=middle>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td valign=middle><img src="images/spacer.gif" width="5" height="17" border="0" alt=""></td><td valign=middle><font face="verdana, helvetica, arial, sans-serif" size=1 color="#FFFFFF">Seeing the Digital: Emerging Visual Literacies</font></td></tr></table>
</td><td width="50%" align=right valign=middle>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td width=19 valign=middle><a href="mailto:greg@veen.com"><img src="images/email_orange.gif" width="15" height="15" border="0" alt="Email Gregory Veen"></a></td><td width=19 valign=middle><a href="main.asp?sectionID=500&citation=all"><img src="images/workscited.gif" width="14" height="15" border="0" alt="Works Cited"></a></td><td width=19 valign=middle><a href="index.html"><img src="images/home_orange.gif" width="14" height="15" border="0" alt="Home"></td></tr></table>
</td></tr>
</table>

<!-- begin content table -->

<br>
<table border=0 cellpadding=0 cellspacing=0 width=580>	
<tr>
<td width=15>&nbsp;</td>
<td valign=top width=150>

			<!-- begin navigation table -->
			
			<table cellpadding=2 cellspacing=0 border="0" width=150>
				
			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Introduction</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=101 then %><% else %><a href="main.asp?SectionID=101"><% end if %>The 'New' Visual Literacy<% if SectionID=101 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="bottom"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=102 then %><% else %><a href="main.asp?SectionID=102"><% end if %>Nothing New, Always New<% if SectionID=102 then %><% else %></a><% end if %></font></td>
			</tr>
			
			<tr><td colspan=2>&nbsp;</td></tr>

			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Digital Images</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=201 then %><% else %><a href="main.asp?SectionID=201"><% end if %>Graphics Production and Editing<% if SectionID=201 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=202 then %><% else %><a href="main.asp?SectionID=202"><% end if %>Pixels, Bits, and Meaning<% if SectionID=202 then %></a><% end if %></font></td>
			</tr>
			
			<tr><td colspan=2>&nbsp;</td></tr>
			
			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Hypermedia</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=301 then %><% else %><a href="main.asp?SectionID=301"><% end if %>Image-maps and Semantic Layers<% if SectionID=301 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=302 then %><% else %><a href="main.asp?SectionID=302"><% end if %>Visual Click-through and the Hypertext Link<% if SectionID=302 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=303 then %><% else %><a href="main.asp?SectionID=303"><% end if %>The Rhetoric of the Click-through: Possible Ways of Reading<% if SectionID=303 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=304 then %><% else %><a href="main.asp?SectionID=304"><% end if %>Beyond Metaphor: Other Tropes and their Adaptations<% if SectionID=304 then %><% else %></a><% end if %></font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=305 then %><% else %><a href="main.asp?SectionID=305"><% end if %>Emerging Technologies, Emerging Conventions<% if SectionID=305 then %><% else %></a><% end if %></font></td>
			</tr>

			<tr><td colspan=2>&nbsp;</td></tr>

			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Conclusion</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1"><% if SectionID=401 then %><% else %><a href="main.asp?SectionID=401"><% end if %>Why one cannot Conclude<% if SectionID=401 then %><% else %></a><% end if %></font></td>
			</tr>

			<tr><td colspan=2><img src="images/spacer.gif" width="150" height="1" border="0" alt=""></td></tr>
	
			</table>

			<!-- end navigation table -->
			
</td>
<td width=15><img src="images/spacer.gif" width="15" height="1" border="0" alt=""></td>
<td valign=top><font face="Verdana, Arial, Helvetica" size="2"
color="#000000"><b><%=title%></b></font><% if sectionID=500 then%><%else%><% if sectionID=600 then %><%else%><br>
<font size="1" face="Verdana,Arial,Helvetica" color="#666666"><%=subtitle%></font><%end if%><%end if%><br>
<hr size=1>
<font face="Verdana, Arial, Helvetica" size="2">
<br>

<!-- begin content include -->

<!--#include file="content.inc"-->

<!-- end content include -->

<!-- begin footer -->

<% if sectionID=500 then%><%else%><% if sectionID=401 then%><%else%><% if sectionID=600 then%><%else%><p><font size="1" face="Verdana,Arial,Helvetica"><a href="main.asp?sectionID=<%=nextpageID%>">Next: <%=nextpagetitle%></a></font><a href="main.asp?sectionID=<%=nextpageID%>"><img src="images/arrow_r.gif" width="10" height="10" border="0" alt=""></a></p><%end if%><%end if%><%end if%>

<hr size=1>

<font face="Verdana, Arial, Geneva" size=1 color="#666666"><b>Seeing the Digital: Emerging Visual Literacies</b><br>
Gregory Veen | Department of English | University of Washington</font>
<br>
<img src="images/spacer.gif" width="430" height="1" border="0" alt="">

<!-- end footer -->

</td>
<td width=15>&nbsp;</td>
</tr>
</table>

</div>
</BODY>
</HTML>

