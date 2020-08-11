<?php
  header('Content-Type: application/xlsx');
  header('Content-Disposition: attachment; filename=Pengangkatan.xlsx');
?>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="ProgId" content="Excel.Sheet"/>
  <meta name="Generator" content="WPS Office ET"/>
  <style>
<!-- @page
	{margin:0.50in 0.50in 0.50in 0.50in;
	mso-header-margin:0.30in;
	mso-footer-margin:0.30in;
	mso-horizontal-page-align:center;}
tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}
col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
.font0
	{color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font1
	{color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font2
	{color:#000000;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font3
	{color:;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font4
	{color:#000000;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font5
	{color:;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font6
	{color:#000000;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font7
	{color:;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font8
	{color:#000000;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font9
	{color:#0000FF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font10
	{color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font11
	{color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font12
	{color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font13
	{color:#44546A;
	font-size:18.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font14
	{color:#7F7F7F;
	font-size:11.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font15
	{color:#44546A;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font16
	{color:#006100;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font17
	{color:#FA7D00;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font18
	{color:#FF0000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font19
	{color:#3F3F76;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font20
	{color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font21
	{color:#000000;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font22
	{color:#44546A;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font23
	{color:#9C0006;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font24
	{color:#9C6500;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font25
	{color:#FFFFFF;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font26
	{color:#44546A;
	font-size:15.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font27
	{color:#800080;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font28
	{color:#FA7D00;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font29
	{color:#FFFFFF;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Bookman Old Style";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.style0
	{mso-number-format:"General";
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-pattern:auto;
	mso-background-source:auto;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;
	mso-style-name:"Normal";
	mso-style-id:0;}
.style16
	{mso-pattern:auto none;
	background:#A9D08E;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent6";}
.style17
	{mso-pattern:auto none;
	background:#C6E0B4;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent6";}
.style18
	{mso-pattern:auto none;
	background:#8EA9DB;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent5";}
.style19
	{mso-pattern:auto none;
	background:#70AD47;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent6";}
.style20
	{mso-pattern:auto none;
	background:#B4C6E7;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent5";}
.style21
	{mso-pattern:auto none;
	background:#D9E1F2;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent5";}
.style22
	{mso-pattern:auto none;
	background:#FFD966;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent4";}
.style23
	{mso-pattern:auto none;
	background:#4472C4;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent5";}
.style24
	{mso-pattern:auto none;
	background:#FFE699;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent4";}
.style25
	{mso-pattern:auto none;
	background:#FFC000;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent4";}
.style26
	{color:#FA7D00;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-bottom:2.0pt double #FF8001;
	mso-style-name:"Linked Cell";}
.style27
	{mso-pattern:auto none;
	background:#DBDBDB;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent3";}
.style28
	{mso-pattern:auto none;
	background:#F4B084;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent2";}
.style29
	{mso-pattern:auto none;
	background:#A5A5A5;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent3";}
.style30
	{mso-pattern:auto none;
	background:#F8CBAD;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent2";}
.style31
	{mso-pattern:auto none;
	background:#FCE4D6;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent2";}
.style32
	{mso-pattern:auto none;
	background:#ED7D31;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent2";}
.style33
	{mso-pattern:auto none;
	background:#BDD7EE;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"40% - Accent1";}
.style34
	{mso-pattern:auto none;
	background:#DDEBF7;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent1";}
.style35
	{mso-pattern:auto none;
	background:#5B9BD5;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Accent1";}
.style36
	{mso-pattern:auto none;
	background:#FFEB9C;
	color:#9C6500;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Neutral";}
.style37
	{mso-pattern:auto none;
	background:#9BC2E6;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent1";}
.style38
	{mso-pattern:auto none;
	background:#FFC7CE;
	color:#9C0006;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Bad";}
.style39
	{mso-pattern:auto none;
	background:#FFF2CC;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent4";}
.style40
	{color:#000000;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border-top:.5pt solid #5B9BD5;
	border-bottom:2.0pt double #5B9BD5;
	mso-style-name:"Total";}
.style41
	{mso-pattern:auto none;
	background:#F2F2F2;
	color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:.5pt solid #3F3F3F;
	mso-style-name:"Output";}
.style42
	{mso-number-format:"_-\0022£\0022* \#\,\#\#0\.00_-\;\\-\0022£\0022* \#\,\#\#0\.00_-\;_-\0022£\0022* \0022-\0022??_-\;_-\@_-";
	mso-style-name:"Currency";
	mso-style-id:4;}
.style43
	{mso-pattern:auto none;
	background:#EDEDED;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent3";}
.style44
	{mso-pattern:auto none;
	background:#FFFFCC;
	border:.5pt solid #B2B2B2;
	mso-style-name:"Note";}
.style45
	{mso-pattern:auto none;
	background:#FFCC99;
	color:#3F3F76;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:.5pt solid #7F7F7F;
	mso-style-name:"Input";}
.style46
	{color:#44546A;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-style-name:"Heading 4";}
.style47
	{mso-pattern:auto none;
	background:#F2F2F2;
	color:#FA7D00;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:.5pt solid #7F7F7F;
	mso-style-name:"Calculation";}
.style48
	{mso-pattern:auto none;
	background:#C6EFCE;
	color:#006100;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Good";}
.style49
	{color:#44546A;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border-bottom:1.0pt solid #ACCCEA;
	mso-style-name:"Heading 3";}
.style50
	{color:#7F7F7F;
	font-size:11.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"CExplanatory Text";}
.style51
	{color:#44546A;
	font-size:15.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border-bottom:1.0pt solid #5B9BD5;
	mso-style-name:"Heading 1";}
.style52
	{mso-number-format:"_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@_-";
	mso-style-name:"Comma [0]";
	mso-style-id:6;}
.style53
	{mso-pattern:auto none;
	background:#E2EFDA;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"20% - Accent6";}
.style54
	{color:#44546A;
	font-size:18.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-style-name:"Title";}
.style55
	{mso-number-format:"_-\0022£\0022* \#\,\#\#0_-\;\\-\0022£\0022* \#\,\#\#0_-\;_-\0022£\0022* \0022-\0022_-\;_-\@_-";
	mso-style-name:"Currency [0]";
	mso-style-id:7;}
.style56
	{color:#FF0000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Warning Text";}
.style57
	{color:#800080;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Followed Hyperlink";
	mso-style-id:9;}
.style58
	{color:#44546A;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border-bottom:1.0pt solid #5B9BD5;
	mso-style-name:"Heading 2";}
.style59
	{mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
	mso-style-name:"Comma";
	mso-style-id:3;}
.style60
	{mso-pattern:auto none;
	background:#A5A5A5;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	border:2.0pt double #3F3F3F;
	mso-style-name:"Check Cell";}
.style61
	{mso-pattern:auto none;
	background:#C9C9C9;
	color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"60% - Accent3";}
.style62
	{mso-number-format:"0%";
	mso-style-name:"Percent";
	mso-style-id:5;}
.style63
	{color:#0000FF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-style-name:"Hyperlink";
	mso-style-id:8;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	mso-number-format:"General";
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-pattern:auto;
	mso-background-source:auto;
	color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;}
.xl65
	{mso-style-parent:style0;
	vertical-align:middle;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl66
	{mso-style-parent:style0;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl68
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl69
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl70
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl72
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl73
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl74
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl75
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl76
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl77
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl78
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl79
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl80
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl81
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl82
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl83
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;}
.xl84
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl85
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl86
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl87
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl88
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;}
.xl89
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl90
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl91
	{mso-style-parent:style0;
	text-align:center;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl92
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl93
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl94
	{mso-style-parent:style0;
	text-align:center;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl95
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl96
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl97
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl98
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-weight:700;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl99
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-weight:700;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl100
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl101
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;}
.xl102
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl103
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl104
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl105
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl106
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl107
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl108
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	color:;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl109
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl110
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl111
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl112
	{mso-style-parent:style0;
	mso-number-format:"0";
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl113
	{mso-style-parent:style0;
	mso-number-format:"0";
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl114
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl115
	{mso-style-parent:style0;
	text-align:left;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl116
	{mso-style-parent:style0;
	text-align:left;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl117
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl118
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl119
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl120
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl121
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;}
.xl122
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl123
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl124
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl125
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl126
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl127
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl128
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl129
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl130
	{mso-style-parent:style0;
	vertical-align:middle;
	font-size:12.0pt;
	font-weight:700;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl131
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-weight:700;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl132
	{mso-style-parent:style0;
	mso-number-format:"0\.00";
	text-align:center;
	vertical-align:middle;
	font-size:12.0pt;
	font-weight:700;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl133
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl134
	{mso-style-parent:style0;
	color:;
	font-family:Bookman Old Style;
	mso-font-charset:134;}
.xl135
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl136
	{mso-style-parent:style0;
	mso-number-format:"0";
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl137
	{mso-style-parent:style0;
	text-align:left;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl138
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl139
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl140
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl141
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:12.0pt;
	font-family:Bookman Old Style;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
 -->  </style>
  <!--[if gte mso 9]>
   <xml>
    <x:ExcelWorkbook>
     <x:ExcelWorksheets>
      <x:ExcelWorksheet>
       <x:Name>Pengangktan</x:Name>
       <x:WorksheetOptions>
        <x:DefaultRowHeight>330</x:DefaultRowHeight>
        <x:Selected/>
        <x:Panes>
         <x:Pane>
          <x:Number>3</x:Number>
          <x:ActiveCol>0</x:ActiveCol>
          <x:ActiveRow>0</x:ActiveRow>
         </x:Pane>
        </x:Panes>
        <x:ProtectContents>False</x:ProtectContents>
        <x:ProtectObjects>False</x:ProtectObjects>
        <x:ProtectScenarios>False</x:ProtectScenarios>
        <x:ShowPageBreakZoom/>
        <x:PageBreakZoom>100</x:PageBreakZoom>
        <x:Print>
         <x:ValidPrinterInfo/>
         <x:PaperSizeIndex>300</x:PaperSizeIndex>
         <x:Scale>75</x:Scale>
         <x:VerticalResolution>-3</x:VerticalResolution>
        </x:Print>
       </x:WorksheetOptions>
      </x:ExcelWorksheet>
     </x:ExcelWorksheets>
     <x:ProtectStructure>False</x:ProtectStructure>
     <x:ProtectWindows>False</x:ProtectWindows>
     <x:WindowHeight>7695</x:WindowHeight>
     <x:WindowWidth>20490</x:WindowWidth>
    </x:ExcelWorkbook>
    <x:ExcelName>
     <x:Name>Print_Area</x:Name>
     <x:SheetIndex>1</x:SheetIndex>
     <x:Formula>=Pengangktan!$A$1:$I$55</x:Formula>
    </x:ExcelName>
   </xml>
  <![endif]-->
 </head>
 <body link="blue" vlink="purple" class="xl66">
  <table width="1432.93" border="0" cellpadding="0" cellspacing="0" style='width:1074.70pt;border-collapse:collapse;table-layout:fixed;'>
   <col width="35.40" span="3" class="xl66" style='mso-width-source:userset;mso-width-alt:1132;'/>
   <col width="32" class="xl66" style='mso-width-source:userset;mso-width-alt:1024;'/>
   <col width="194.27" class="xl66" style='mso-width-source:userset;mso-width-alt:6216;'/>
   <col width="129.13" class="xl66" style='mso-width-source:userset;mso-width-alt:4132;'/>
   <col width="153.13" span="3" class="xl66" style='mso-width-source:userset;mso-width-alt:4900;'/>
   <col width="73.13" span="16375" class="xl66" style='mso-width-source:userset;mso-width-alt:2340;'/>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" width="35.40" style='height:16.50pt;width:26.55pt;'></td>
    <td class="xl66" width="35.40" style='width:26.55pt;'></td>
    <td class="xl66" width="35.40" style='width:26.55pt;'></td>
    <td class="xl66" width="32" style='width:24.00pt;'></td>
    <td class="xl66" width="194.27" style='width:145.70pt;'></td>
    <td class="xl66" width="129.13" style='width:96.85pt;'></td>
    <td class="xl106" width="153.13" style='width:114.85pt;' x:str>SALINAN</td>
    <td class="xl106" width="153.13" style='width:114.85pt;'></td>
    <td class="xl106" width="153.13" style='width:114.85pt;'></td>
    <td class="xl106" width="73.13" style='width:54.85pt;'></td>
    <td class="xl106" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl106" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="6" style='height:16.50pt;mso-ignore:colspan;'></td>
    <td class="xl106" x:str>LAMPIRAN III</td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="6" style='height:16.50pt;mso-ignore:colspan;'></td>
    <td class="xl106" x:str>PERATURAN BERSAMA<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="6" style='height:16.50pt;mso-ignore:colspan;'></td>
    <td class="xl106" colspan="3" style='mso-ignore:colspan;' x:str>MENTERI PENDIDIKAN DAN KEBUDAYAAN DAN</td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="6" style='height:16.50pt;mso-ignore:colspan;'></td>
    <td class="xl106" colspan="2" style='mso-ignore:colspan;' x:str>KEPALA BADAN KEPEGAWAIAN NEGARA</td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl66" height="23" colspan="6" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl107" colspan="2" style='mso-ignore:colspan;' x:str>NOMOR : 4/VIII/PB/2014<span style='mso-spacerun:yes;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl66" height="23" colspan="6" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl107" colspan="2" style='mso-ignore:colspan;' x:str>NOMOR : 24 TAHUN 2014<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="6" style='height:16.50pt;mso-ignore:colspan;'></td>
    <td class="xl106" x:str>TENTANG</td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="179" style='height:134.25pt;mso-height-source:userset;mso-height-alt:2685;'>
    <td class="xl66" height="179" colspan="6" style='height:134.25pt;mso-ignore:colspan;'></td>
    <td class="xl108" colspan="3" style='border-right:none;border-bottom:none;' x:str>KETENTUAN PELAKSANAAN PERATURAN MENTERI PENDAYAGUNAAN APARATUR NEGARA DAN REFORMASI BIROKRASI<span style='mso-spacerun:yes;'>&nbsp; </span>NOMOR 17 TAHUN 2013<span style='mso-spacerun:yes;'>&nbsp; </span>TENTANG JABATAN FUNGSIONAL DOSEN DAN ANGKA KREDITNYA, SEBAGAIMANA TELAH DIUBAH DENGAN PERATURAN MENTERI PENDAYAGUNAAN APARATUR NEGARA DAN REFORMASI BIROKRASI<span style='mso-spacerun:yes;'>&nbsp; </span>REPUBLIK INDONESIA NOMOR 46 TAHUN 2013<span style='mso-spacerun:yes;'>&nbsp;&nbsp;&nbsp;</span></td>
    <td class="xl133" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl108"></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="22" style='height:16.50pt;'>
    <td class="xl66" height="22" colspan="16" style='height:16.50pt;mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl67" height="23" colspan="9" style='height:17.25pt;border-right:none;border-bottom:none;' x:str>PENETAPAN ANGKA KREDIT</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl67" height="23" colspan="9" style='height:17.25pt;border-right:none;border-bottom:none;' x:str>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl67" height="23" colspan="9" style='height:17.25pt;border-right:none;border-bottom:none;' x:str>NOMOR :<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="9" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl69" height="23" colspan="5" style='height:17.25pt;mso-ignore:colspan;' x:str>INSTANSI : FAKULTAS EKONOMI</td>
    <td class="xl70"></td>
    <td class="xl109" x:str>MASA PENILAIAN :<span style='mso-spacerun:yes;'>&nbsp;&nbsp;&nbsp;</span></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl69" height="23" colspan="2" style='height:17.25pt;mso-ignore:colspan;' x:str><font class="font29">INSTANSI :</font><font class="font3"> UNIVERSITAS TRUNOJOYO MADURA</font></td>
    <td class="xl70"></td>
    <td class="xl70"></td>
    <td class="xl70"></td>
    <td class="xl70"></td>
    <td class="xl69"></td>
    <td class="xl82"></td>
    <td class="xl82"></td>
    <td class="xl134"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:17.25pt;'>
    <td class="xl71" height="23" style='height:17.25pt;' x:str>I</td>
    <td class="xl72" x:str>KETERANGAN PERORANGAN</span></td>
    <td class="xl73" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl90" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl111"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.250pt;'></td>
    <td class="xl75" x:num>1</td>
    <td class="xl76" colspan="3" style='border-right:none;border-bottom:.5pt solid ;' x:str>Nama</td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str><?=$Profil['Nama']?></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl75" x:num>2</td>
    <td class="xl76" colspan="3" style='border-right:none;border-bottom:.5pt solid ;' x:str>NIP</td>
    <td class="xl111"></td>
    <td class="xl112" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'><?=$Profil['NIP']?></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl78" x:num>3</td>
    <td class="xl76" colspan="2" style='mso-ignore:colspan;border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Nomor Seri Kartu Pegawai</span></td>
    <td class="xl80"></td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl78" x:num>4</td>
    <td class="xl80" colspan="2" style='mso-ignore:colspan;' x:str>Pangkat/<span style='display:none;'>Golongan Ruang/TMT</span></td>
    <td class="xl80"></td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str><?=$Profil['Pangkat'].' / '.$Profil['Golongan']?></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl78" x:num>5</td>
    <td class="xl82" colspan="2" style='mso-ignore:colspan;' x:str>Tempat dan Tanggal Lahir</span></td>
    <td class="xl114"></td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="29" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl75" x:num>6</td>
    <td class="xl76" colspan="3" style='border-right:none;border-bottom:.5pt solid ;' x:str>Jenis Kelamin</td>
    <td class="xl111"></td>
    <td class="xl115" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl75" x:num>7</td>
    <td class="xl76" colspan="3" style='border-right:none;border-bottom:.5pt solid ;' x:str>Pendidikan Terakhir</td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl78" x:num>8</td>
    <td class="xl80" colspan="2" style='mso-ignore:colspan;border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jabatan A<span style='display:none;'>kademik Dosen/TMT</span></td>
    <td class="xl80"></td>
    <td class="xl111"></td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str><?=$Profil['Jabatan']?></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:17.25pt;'>
    <td class="xl74" height="23" style='height:17.25pt;'></td>
    <td class="xl71" x:num>9</td>
    <td class="xl83" colspan="3" style='border-right:.5pt solid ;border-bottom:none;' x:str>Masa Kerja Golongan<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl118" x:str>Lama</td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl74" height="20" style='height:15.00pt;'></td>
    <td class="xl85"></td>
    <td class="xl86"></td>
    <td class="xl87"></td>
    <td class="xl119"></td>
    <td class="xl120" x:str>Baru</td>
    <td class="xl76" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl74" height="42" rowspan="2" style='height:31.50pt;border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl88" rowspan="2" style='border-right:none;border-bottom:.5pt solid ;' x:num>10</td>
    <td class="xl84" colspan="4" rowspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str><span style='mso-spacerun:yes;'>&nbsp;</span>Unit Kerja<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl121" colspan="3" style='border-right:.5pt solid ;border-bottom:none;' x:str>Fakultas Ekonomi dan Bisnis</td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl124" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Universitas Trunojoyo Madura</td>
    <td class="xl106"></td>
    <td class="xl66" colspan="6" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;mso-height-source:userset;mso-height-alt:255;'>
    <td class="xl71" height="17" style='height:12.75pt;' x:str>II</td>
    <td class="xl72" colspan="4" style='mso-ignore:colspan;' x:str>PENETAPAN ANGKA KREDIT</td>
    <td class="xl111"></td>
    <td class="xl85" x:str>LAMA</td>
    <td class="xl85" x:str>BARU</td>
    <td class="xl85" x:str>JUMLAH</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl74" height="20" style='height:15.00pt;'></td>
    <td class="xl71" x:num>1</td>
    <td class="xl76" colspan="3" style='mso-ignore:colspan;' x:str>UNSUR UTAMA</td>
    <td class="xl111"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl74" height="20" style='height:15.00pt;'></td>
    <td class="xl74"></td>
    <td class="xl71" x:str>A</td>
    <td class="xl72" colspan="2" style='mso-ignore:colspan;' x:str>Pendidikan</td>
    <td class="xl111"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:35.00pt;mso-height-source:userset;mso-height-alt:650;'>
    <td class="xl91"></td>
    <td class="xl91"></td>
    <td class="xl91"></td>
    <td class="xl92" x:str>1)<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl127" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Mengikuti pendidikan sekolah dan memperoleh gelar/ijazah</td>
    <td class="xl78" x:str>0</td>
    <td class="xl78" x:str><?=$KreditPendidikan1a['Kredit']?></td>
    <td class="xl78" x:fmla="=G33+H33">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl91"></td>
    <td class="xl85"></td>
    <td class="xl93" x:str>2)</td>
    <td class="xl90" x:str>Diklat prajabatan</td>
    <td class="xl129"></td>
    <td class="xl78" x:str>0</td>
    <td class="xl78" x:str><?=$KreditPendidikan1b['Kredit']?></td>
    <td class="xl78" x:fmla="=G34+H34">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl91"></td>
    <td class="xl78" x:str>B</td>
    <td class="xl72" colspan="2" style='mso-ignore:colspan;' x:str>Pelaksanaan pendidikan</td>
    <td class="xl129"></td>
    <td class="xl78" x:num="0">0</td>
    <td class="xl78" x:num><?=$KreditPendidikan2['Kredit']?></td>
    <td class="xl78" x:fmla="=G35+H35">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl91"></td>
    <td class="xl78" x:str>C</td>
    <td class="xl72" colspan="2" style='mso-ignore:colspan;' x:str>Pelaksanaan penelitian</td>
    <td class="xl129"></td>
    <td class="xl78" x:num="0">0</td>
    <td class="xl78" x:num><?=$KreditPenelitian['Kredit']?></td>
    <td class="xl78" x:fmla="=G36+H36">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="40" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:30.00pt;'></td>
    <td class="xl94"></td>
    <td class="xl95" x:str>D</td>
    <td class="xl96" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Pelaksanaan pengabdian kepada masyarakat</td>
    <td class="xl78" x:num="0">0</td>
    <td class="xl78" x:num><?=$KreditPengabdian['Kredit']?></td>
    <td class="xl78" x:fmla="=G37+H37">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl97"></td>
    <td class="xl98" colspan="3" style='mso-ignore:colspan;' x:str>Jumlah Unsur Utama</td>
    <td class="xl130"></td>
    <td class="xl131" x:num="0">0</td>
    <td class="xl132" x:fmla="=SUM(H35:H37)">0</td>
    <td class="xl132" x:fmla="=SUM(G38;H38)">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl71" x:num>2</td>
    <td class="xl76" colspan="3" style='mso-ignore:colspan;' x:str>UNSUR PENUNJANG</td>
    <td class="xl111"></td>
    <td class="xl78"></td>
    <td class="xl78"></td>
    <td class="xl78"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl100"></td>
    <td class="xl72" colspan="3" style='mso-ignore:colspan;' x:str>Penunjang Tugas Dosen</td>
    <td class="xl111"></td>
    <td class="xl78" x:num>0</td>
    <td class="xl78" x:num><?=$KreditPenunjang['Kredit']?></td>
    <td class="xl78" x:fmla="=G40+H40">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl91" height="23" style='height:17.25pt;'></td>
    <td class="xl97"></td>
    <td class="xl98" colspan="3" style='mso-ignore:colspan;' x:str>Jumlah Unsur Penunjang</td>
    <td class="xl130"></td>
    <td class="xl131" x:fmla="=G40*10%" x:num="0">0</td>
    <td class="xl131" x:fmla="=H40" x:num></td>
    <td class="xl131" x:fmla="=G41+H41">0</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl94" height="23" style='height:17.25pt;'></td>
    <td class="xl98" colspan="5" style='mso-ignore:colspan;border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jumlah Unsur Utama dan Unsur Penunjang</td>
    <td class="xl131" x:num="0">0</td>
    <td class="xl132" x:fmla="=SUM(H38;H41)" x:num>198</td>
    <td class="xl132" x:fmla="=SUM(G42;H42)" x:num="275,23200000000003">275</td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" class="xl65" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl71" height="21" style='height:15.75pt;' x:str>III</td>
    <td class="xl101" colspan="8" rowspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>DAPAT DIPERTIMBANGKAN UNTUK DIANGKAT/DINAIKKAN JABATAN LEKTOR (200)/ PANGKAT IIIC/ TMT ..................</td>
    <td class="xl65" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" class="xl65" style='height:17.25pt;'>
    <td class="xl97" height="23" style='height:17.25pt;'></td>
    <td class="xl65" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="9" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="5" style='height:17.25pt;mso-ignore:colspan;' x:str>ASLI disampaikan dengan hormat kepada<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="3" style='height:17.25pt;mso-ignore:colspan;' x:str>Kepala BKN</td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68" colspan="2" style='mso-ignore:colspan;' x:str>Ditetapkan di Bangkalan</td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="6" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl68" colspan="2" style='mso-ignore:colspan;' x:str>Pada tanggal .........................<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="5" style='height:17.25pt;mso-ignore:colspan;' x:str>Tembusan disampaikan kepada:</td>
    <td class="xl68"></td>
    <td class="xl68" colspan="2" style='mso-ignore:colspan;' x:str>Rektor Universitas Trunojoyo Madura,</td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl105" height="23" style='height:17.25pt;' x:str>1.</td>
    <td class="xl68" colspan="4" style='mso-ignore:colspan;' x:str>Dosen yang bersangkutan;</td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl105" height="23" style='height:17.25pt;' x:str>2.</td>
    <td class="xl68" colspan="4" style='mso-ignore:colspan;' x:str>Sekretaris Tim Penilai yang bersangkutan;</td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl105" height="23" style='height:17.25pt;' x:str>3.</td>
    <td class="xl68" colspan="4" style='mso-ignore:colspan;' x:str>Dekan Fakultas Teknik.</td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="9" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="6" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl68" colspan="2" style='mso-ignore:colspan;' x:str>Dr. Drs. Ec. H. Muh. Syarif, M.Si.</td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="23" style='height:17.25pt;'>
    <td class="xl68" height="23" colspan="6" style='height:17.25pt;mso-ignore:colspan;'></td>
    <td class="xl68" colspan="2" style='mso-ignore:colspan;' x:str>NIP 196311302001121001</td>
    <td class="xl68"></td>
    <td class="xl66" colspan="7" style='mso-ignore:colspan;'></td>
   </tr>
   <![if supportMisalignedColumns]>
    <tr width="0" style='display:none;'>
     <td width="35" style='width:27;'></td>
     <td width="32" style='width:24;'></td>
     <td width="194" style='width:146;'></td>
     <td width="129" style='width:97;'></td>
     <td width="153" style='width:115;'></td>
     <td width="73" style='width:55;'></td>
    </tr>
   <![endif]>
  </table>
 </body>
</html>