<HTML>
<HEAD>

<TITLE>Submit Service</TITLE>


</HEAD>
<BODY BGCOLOR="#FFFFFF">
<CFMAIL SERVER=207.5.44.2
	FROM="#Form.email#"
	TO="chevchic64@cs.com"
	SUBJECT="Malins Service E-mail">
Hi! My name is #Form.firstname# #Form.lastname# and I used your online contact form to send you
the following Comments:

#Form.comments#

You can reach me at:

Address:	#Form.address#
			#Form.city#, #Form.state# #Form.zip#

Phone:		#Form.phone#
Email:		#Form.email#
</CFMAIL>
<H1>Thanks!</H1>
<HR>
<FONT SIZE="4">Your form has been successfully submitted.<br>
Someone will be contacting you shortly.<br><br><br>
Back to <A HREF="index.html">Home</A>
</FONT>

</BODY>
</HTML>
