<% 
returnID=Request.Querystring("returnID")
dim anchorID
anchorID=Request.Querystring("anchorID")
dim citation
citation=Request.Querystring("citation")
if citation="all" then %>

<b>Ascott, Roy.</b> "Photography at the Interface."  <i>Electronic Culture: Technology and Visual Representation.</i>  Ed. Timothy Druckrey.  New York: Aperture, 1996: 165-171.

<p><b>Beyond.com.</b>  1 May 2000.  <a href="http://www.beyond.com">http://www.beyond.com</a></p>

<p><b>Berst, Jesse.</b>  "Browser Upstarts Take Aim."  <i>ZDNet.</i>  27 March 2000. 1 May 2000.  <a href="http://www.zdnet.com/anchordesk/story/story_4612.html">http://www.zdnet.com/anchordesk/story/story_4612.html</a></p>

<p><b>Bolter, Jay David and Richard Grusin.</b>  "Remediation."  <i>Configurations</i> 4.3 (1996) 311-358.</p>

<p><b>Burbules, Nicholas.</b>  "The rhetorics of the web: hyperreading and critical literacy."  <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  Ed. Ilana Snyder.  London and New York: Routledge, 1998.</p>

<p><a href="burnett"></a><b>Burnett, Kathleen.</b>  "Toward a Theory of Hypertextual Design."  <i>Postmodern Culture</i> Volume 3, Number 2 (January 1993)</p>

<p><b>Dayneko, Dave and Theis Barenkopf Dinesen.</b>  "Four Ways to Create a Mouseover."  <i>Webmonkey.</i> 20 June 1998. 1 May 2000.  <a href="http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design">http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design</a></p>

<p><b>Gazoontite.com.</b>  1 May 2000.  <a href="http://www.gazoontite.com">http://www.gazoontite.com</a></p>

<p><b>"Glossary."</b>  <i>Advertising.com.</i> 1 May 2000.  <a href="http://www.advertising.com/glossary/index.html">http://www.advertising.com/glossary/index.html</a></p>

<p><b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998.</p>

<p><b>Jacobson, Joseph</b>, et. al.  "The last book."  <i>Systems Journal.</i>  26 March 1997. 1 May 2000.  <a href="http://www.research.ibm.com/journal/sj/363/jacobson.html">http://www.research.ibm.com/journal/sj/363/jacobson.html</a></p>

<p><b>Johnson, Steven.</b>  <i>Interface Cutlure: How New Technology Transforms the Way we Create & Communicate.</i>  San Francisco: Harper, 1997.</p>

<p><b>Kolln, Martha.</b>  <i>Rhetorical Grammar: Grammatical Choices, Rhetorical Effects.</i>  Third Edition.  Boston: Allyn and Bacon, 1996.</p>

<p><b>"Kozmo.com Splash Page."</b>  <i>Kozmo.com.</i>  1 May 2000.  <a href="http://www.kozmo.com">http://www.kozmo.com</a></p>

<p><b>Kress, Gunther.</b> "Visual and verbal modes of representation in electronically mediated communication; the potentials of new forms of text." <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  London and New York: Routledge, 1998.</p>

<p><b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996.</p>

<p><b>Kurtz, Glenn A.</b> "The Aesthetics of Scale." <i>Artweek</i> 28:2 (February 1997): 12-13.</p>

<p><b>Landow, George P.</b>, Ed.  <i>Hyper/Text/Theory.</i>  Baltimore: The Johns Hopkins University Press, 1994.</p>

<p><b>Leonard, Andrew.</b>  "Do penguins eat apples?"  <i>Salon.com.</i>  28 September 1999, 1 May 2000.  <a href="http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html">http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html</a></p>

<p><b>Napier, Mark.</b>  "Shredder."  <i>Potatoland.org.</i>  1998.  1 May 2000.  <a href="http://www.potatoland.org/shredder/shredder.html">http://www.potatoland.org/shredder/shredder.html</a></p>

<p><b>"Say it With a Marquee."</b>  <i>CNET Help.com.</i> 1 May 2000.  <a href="http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2">http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2</a></p>

<p><b>"University of Southern California."</b>  <i>USC.edu.</i>  1 May 2000.  <a href="http://www.usc.edu">http://www.usc.edu</a></p>

<p><b>"Welcome to Deskpilot."</b> 1 May 2000.  <a href="http://www.deskpilot.com">http://www.deskpilot.com</a></p>

<% else %>

	<% if citation="johnson" then %>

	<b>Johnson, Steven.</b>  <i>Interface Cutlure: How New Technology Transforms the Way we Create & Communicate.</i>  San Francisco: Harper, 1997: 30.

	<% elseif citation="burnett" then %>
	
	<b>Burnett, Kathleen.</b>  "Toward a Theory of Hypertextual Design."  <i>Postmodern Culture</i> Volume 3, Number 2 (January 1993)
	
	<% elseif citation="landow" then %>
	
	<b>Landow, George P.</b>, Ed.  <i>Hyper/Text/Theory.</i>  Baltimore: The Johns Hopkins University Press, 1994.

	<% elseif citation="kressvl1" then %>
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996: 15-42.

	<% elseif citation="kressvl2" then %>
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996: 20.

	<% elseif citation="kressvl3" then %>
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996.
	
	<% elseif citation="horn1" then %>
	
	<b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998: 25.

	<% elseif citation="horn2" then %>
	
	<b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998.
	
	<% elseif citation="burbules" then %>
	
	<b>Burbules, Nicholas.</b>  "The rhetorics of the web: hyperreading and critical literacy."  <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  Ed. Ilana Snyder.  London and New York: Routledge, 1998.
	
	<% elseif citation="kolln" then %>
	
	<b>Kolln, Martha.</b>  <i>Rhetorical Grammar: Grammatical Choices, Rhetorical Effects.</i>  Third Edition.  Boston: Allyn and Bacon, 1996: 214.
	
	<% elseif citation="kress" then %>
	
	<b>Kress, Gunther.</b> "Visual and verbal modes of representation in electronically mediated communication; the potentials of new forms of text." <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  London and New York: Routledge, 1998.
	
	<% elseif citation="kurtz" then %>
	
	<b>Kurtz, Glenn A.</b> "The Aesthetics of Scale." <i>Artweek</i> 28:2 (February 1997): 13.

	<% elseif citation="ascott" then %>
	
	<b>Ascott, Roy.</b> "Photography at the Interface."  <i>Electronic Culture: Technology and Visual Representation.</i>  Ed. Timothy Druckrey.  New York: Aperture, 1996: 168.
	
	<% elseif citation="boltergrusin" then %>
	
	<b>Bolter, Jay David and Richard Grusin.</b>  "Remediation."  <i>Configurations</i> 4.3 (1996) 311-358.

	<% end if %>
	
	<p><img src="images/arrow_l.gif" width="10" height="10" border="0" alt="Back to text"><font size="1" face="Verdana,Arial,Helvetica"><a href="main.php?sectionID=<%=returnID%>#<%=anchorID%>">Back to text</a> |</font>
		
<% end if %>

<% if citation="all" then %>
<% else %>
<font size="1" face="Verdana,Arial,Helvetica"><a href="main.php?sectionID=<%=sectionID%>&citation=all">Full list of works cited</a></font><a href="main.php?sectionID=<%=sectionID%>&citation=all"><img src="images/arrow_r.gif" width="10" height="10" border="0" alt="Full list of works cited"></a></p>
<% end if %>