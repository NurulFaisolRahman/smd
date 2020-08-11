<?php
  header('Content-Type: application/xlsx');
  header('Content-Disposition: attachment; filename=DaftarUsulPenetapanKredit.xlsx');
?>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="ProgId" content="Excel.Sheet"/>
  <meta name="Generator" content="WPS Office ET"/>
  <style>
<!-- @page
	{margin:0.75in 0.31in 0.75in 0.31in;
	mso-header-margin:0.31in;
	mso-footer-margin:0.31in;
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
	{color:;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font2
	{color:;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font3
	{color:;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font4
	{color:#000000;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font5
	{color:#0000FF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font6
	{color:#FFFFFF;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font7
	{color:#000000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font8
	{color:#FFFFFF;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font9
	{color:#800080;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font10
	{color:#FF0000;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font11
	{color:#44546A;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font12
	{color:#FA7D00;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font13
	{color:#000000;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font14
	{color:#006100;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font15
	{color:#9C0006;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font16
	{color:#9C6500;
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
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font18
	{color:#44546A;
	font-size:18.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font19
	{color:#44546A;
	font-size:13.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font20
	{color:#3F3F76;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font21
	{color:#44546A;
	font-size:15.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:134;}
.font22
	{color:#7F7F7F;
	font-size:11.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font23
	{color:#3F3F3F;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
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
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;}
.xl66
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;}
.xl68
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl69
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl70
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl72
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl74
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl75
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl76
	{mso-style-parent:style0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl77
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl78
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl79
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl80
	{mso-style-parent:style0;
	vertical-align:middle;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl81
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl82
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl83
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl84
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl85
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl86
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl87
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl88
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl89
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl90
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl91
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl92
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl93
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl94
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl95
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl96
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl97
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl98
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl99
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl100
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl101
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl102
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl103
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl104
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl105
	{mso-style-parent:style0;
	vertical-align:top;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl106
	{mso-style-parent:style0;
	vertical-align:top;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl107
	{mso-style-parent:style0;
	vertical-align:top;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl108
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl109
	{mso-style-parent:style0;
	vertical-align:top;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl110
	{mso-style-parent:style0;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl111
	{mso-style-parent:style0;
	mso-number-format:"0";
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl112
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl113
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl114
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl115
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl116
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl117
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl118
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl119
	{mso-style-parent:style0;
	vertical-align:middle;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl120
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl121
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border:.5pt solid ;}
.xl122
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl123
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-top:.5pt solid ;}
.xl124
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl125
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;}
.xl126
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;}
.xl127
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;}
.xl128
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl129
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl130
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;
	border-right:.5pt solid ;}
.xl131
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial;
	mso-font-charset:134;
	border-left:.5pt solid ;}
.xl132
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	white-space:normal;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl133
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl134
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;}
.xl135
	{mso-style-parent:style0;
	text-align:left;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;}
.xl136
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl137
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;}
.xl138
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-bottom:.5pt solid ;}
.xl139
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-top:.5pt solid ;
	border-right:.5pt solid ;}
.xl140
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;}
.xl141
	{mso-style-parent:style0;
	text-align:left;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;}
.xl142
	{mso-style-parent:style0;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;}
.xl143
	{mso-style-parent:style0;
	text-align:left;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;}
.xl144
	{mso-style-parent:style0;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
.xl145
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;}
.xl146
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	color:;
	font-size:10.0pt;
	font-family:Arial;
	mso-font-charset:134;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;}
 -->  </style>
  <!--[if gte mso 9]>
   <xml>
    <x:ExcelWorkbook>
     <x:ExcelWorksheets>
      <x:ExcelWorksheet>
       <x:Name>xxx</x:Name>
       <x:WorksheetOptions>
        <x:Selected/>
        <x:Panes>
         <x:Pane>
          <x:Number>3</x:Number>
          <x:ActiveCol>0</x:ActiveCol>
          <x:ActiveRow>0</x:ActiveRow>
          <x:RangeSelection>A1:K1</x:RangeSelection>
         </x:Pane>
        </x:Panes>
        <x:ProtectContents>False</x:ProtectContents>
        <x:ProtectObjects>False</x:ProtectObjects>
        <x:ProtectScenarios>False</x:ProtectScenarios>
        <x:ShowPageBreakZoom/>
        <x:PageBreakZoom>100</x:PageBreakZoom>
        <x:Zoom>110</x:Zoom>
        <x:Print>
         <x:ValidPrinterInfo/>
         <x:PaperSizeIndex>9</x:PaperSizeIndex>
        </x:Print>
       </x:WorksheetOptions>
       <x:PageBreaks>
        <x:RowBreaks>
         <x:RowBreak>
          <x:Row>74</x:Row>
         </x:RowBreak>
        </x:RowBreaks>
       </x:PageBreaks>
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
     <x:Formula>=xxx!$A$1:$K$117</x:Formula>
    </x:ExcelName>
   </xml>
  <![endif]-->
 </head>
 <body link="blue" vlink="purple" class="xl66">
  <table width="995.07" border="0" cellpadding="0" cellspacing="0" style='width:746.30pt;border-collapse:collapse;table-layout:fixed;'>
   <col width="34.27" class="xl65" style='mso-width-source:userset;mso-width-alt:1096;'/>
   <col width="27.40" class="xl66" style='mso-width-source:userset;mso-width-alt:876;'/>
   <col width="26.27" class="xl66" style='mso-width-source:userset;mso-width-alt:840;'/>
   <col width="25.13" class="xl66" style='mso-width-source:userset;mso-width-alt:804;'/>
   <col width="201.13" class="xl66" style='mso-width-source:userset;mso-width-alt:6436;'/>
   <col width="61.67" class="xl66" style='mso-width-source:userset;mso-width-alt:1973;'/>
   <col width="61.67" class="xl65" style='mso-width-source:userset;mso-width-alt:1973;'/>
   <col width="68.53" class="xl65" style='mso-width-source:userset;mso-width-alt:2193;'/>
   <col width="61.67" span="2" class="xl66" style='mso-width-source:userset;mso-width-alt:1973;'/>
   <col width="73.13" class="xl66" style='mso-width-source:userset;mso-width-alt:2340;'/>
   <col width="73.13" span="16373" class="xl66" style='mso-width-source:userset;mso-width-alt:2340;'/>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl67" height="17" width="702.53" colspan="11" style='height:12.75pt;width:526.90pt;border-right:none;border-bottom:none;' x:str>DAFTAR USUL PENETAPAN ANGKA KREDIT</td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
    <td class="xl66" width="73.13" style='width:54.85pt;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl67" height="17" colspan="11" style='height:12.75pt;border-right:none;border-bottom:none;' x:str>JABATAN FUNGSIONAL DOSEN</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" style='height:12.75pt;'></td>
    <td class="xl66" colspan="5" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" colspan="11" style='height:12.75pt;border-right:none;border-bottom:none;' x:str>Masa Penilaian :<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="35" style='height:26.25pt;mso-height-source:userset;mso-height-alt:525;'>
    <td class="xl68" height="35" style='height:26.25pt;' x:str>I</td>
    <td class="xl69" x:str>No</td>
    <td class="xl70" colspan="9" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>KETERANGAN PERORANGAN</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="18" style='height:13.50pt;mso-height-source:userset;mso-height-alt:270;'>
    <td class="xl71" height="18" style='height:13.50pt;'></td>
    <td class="xl72" x:num>1</td>
    <td class="xl73" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Nama</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Selamet Joko Utomo, S.E.,M.E</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>2</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>NIP</td>
    <td class="xl111" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>197920637614741000<span style='mso-spacerun:yes;'>&nbsp; </span><br/></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>3</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Nomor seri Karpeg</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>4</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Tempat dan Tanggal Lahir</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>5</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jenis Kelamin</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>6</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Pendidikan Tertinggi</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>7</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Pangkat dan Golongan Ruang/ TMT</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Penata / IIIc</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>8</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jabatan Fungsional / TMT</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Asisten Ahli</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl71" height="20" style='height:15.00pt;'></td>
    <td class="xl72" x:num>9</td>
    <td class="xl74" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Fakultas / Jurusan</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Fakultas Ekonomi Dan Bisnis / Jurusan Ilmu Ekonomi</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;mso-height-source:userset;mso-height-alt:255;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl75" rowspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:num>10</td>
    <td class="xl73" colspan="3" rowspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Masa kerja</td>
    <td class="xl113" x:str>Lama</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="18" style='height:13.50pt;mso-height-source:userset;mso-height-alt:270;'>
    <td class="xl71" height="18" style='height:13.50pt;'></td>
    <td class="xl113" x:str>Baru</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="18" style='height:13.50pt;mso-height-source:userset;mso-height-alt:270;'>
    <td class="xl77" height="18" style='height:13.50pt;'></td>
    <td class="xl72" x:num>11</td>
    <td class="xl78" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Unit Kerja</td>
    <td class="xl78" colspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Universitas Trunojoyo Madura</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" style='height:12.75pt;'></td>
    <td class="xl66" colspan="5" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;mso-height-source:userset;mso-height-alt:255;'>
    <td class="xl70" height="17" style='height:12.75pt;' x:str>II</td>
    <td class="xl79" colspan="10" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>UNSUR YANG DINILAI</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl70" height="62" rowspan="3" style='height:46.50pt;border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>No</td>
    <td class="xl70" colspan="4" rowspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>UNSUR DAN SUB UNSUR</td>
    <td class="xl70" colspan="6" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>ANGKA KREDIT MENURUT</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl70" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>TIM PENILAI FAKULTAS</td>
    <td class="xl70" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>TIM PENILAI UNIJOYO</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl70" x:str>Lama</td>
    <td class="xl114" x:str>Baru</td>
    <td class="xl114" x:str>Jumlah</td>
    <td class="xl70" x:str>Lama</td>
    <td class="xl70" x:str>Baru</td>
    <td class="xl70" x:str>Jumlah</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl68" height="17" style='height:12.75pt;' x:num>1</td>
    <td class="xl81" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>UNSUR UTAMA</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl82" height="17" style='height:12.75pt;'></td>
    <td class="xl68" x:str>A</td>
    <td class="xl81" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>PENDIDIKAN</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl82" height="21" style='height:15.75pt;'></td>
    <td class="xl83"></td>
    <td class="xl84" x:str>a</td>
    <td class="xl78" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>PENDIDIKAN</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="36" style='height:27.00pt;mso-height-source:userset;mso-height-alt:540;'>
    <td class="xl82" height="36" style='height:27.00pt;'></td>
    <td class="xl83"></td>
    <td class="xl83"></td>
    <td class="xl85" x:num>1</td>
    <td class="xl116" x:str>Mengikuti pendidikan sekolah dan memperoleh gelar/sebutan/ijazah</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="92" style='height:69.00pt;mso-height-source:userset;mso-height-alt:1380;'>
    <td class="xl82" height="92" style='height:69.00pt;'></td>
    <td class="xl83"></td>
    <td class="xl83"></td>
    <td class="xl85" x:num>2</td>
    <td class="xl116" x:str>Mengikuti pendidikan sekolah dan memperoleh gelar/sebutan/ijazah/ akta/ tambahan yang setingkat atau lebih tinggi diluar bidang ilmunya</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="85" style='height:63.75pt;'>
    <td class="xl82" height="85" style='height:63.75pt;'></td>
    <td class="xl86"></td>
    <td class="xl86"></td>
    <td class="xl85" x:num>3</td>
    <td class="xl117" x:str>Mengikuti pendidikan dan pelatihan fungsional Dosen dan memperoleh surat Tanda Tamat Pendidikan dan Pelatihan (STTPL)</td>
    <td class="xl113"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl113"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl87" height="21" style='height:15.75pt;'></td>
    <td class="xl88"></td>
    <td class="xl89" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>JUMLAH</td>
    <td class="xl110"></td>
    <td class="xl114"></td>
    <td class="xl114"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="40" style='height:30.00pt;mso-height-source:userset;mso-height-alt:600;'>
    <td class="xl87" height="40" style='height:30.00pt;'></td>
    <td class="xl91"></td>
    <td class="xl92" rowspan="2" style='border-right:.5pt solid ;border-bottom:none;' x:str>b</td>
    <td class="xl78" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>MELAKSANAKAN PENDIDIKAN DAN PENGAJARAN</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="140" style='height:105.00pt;mso-height-source:userset;mso-height-alt:2100;'>
    <td class="xl87" height="140" style='height:105.00pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>1</td>
    <td class="xl110" x:str>Melaksanakan perkuliahan/ tutorial dan membimbing / menguji serta menyelenggarakan pendidikan di Laboratorium, praktek keguruan, bengkel/ studio/ kebun percobaan/ teknologi pengajaran dan praktek lapangan</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl87" height="17" style='height:12.75pt;'></td>
    <td class="xl93"></td>
    <td class="xl94"></td>
    <td class="xl85" x:num>2</td>
    <td class="xl110" x:str>Membimbing seminar Mahasiswa</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="77" style='height:57.75pt;mso-height-source:userset;mso-height-alt:1155;'>
    <td class="xl95" height="77" style='height:57.75pt;'></td>
    <td class="xl96"></td>
    <td class="xl97"></td>
    <td class="xl85" x:num>3</td>
    <td class="xl110" x:str>Membimbing Kuliah Kerja Nyata (KKN), Praktek Kerja Nyata (PKN), Praktek Kerja Lapang (PKL)</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="68" style='height:51.00pt;'>
    <td class="xl92" height="68" style='height:51.00pt;'></td>
    <td class="xl91"></td>
    <td class="xl98"></td>
    <td class="xl85" x:num>4</td>
    <td class="xl110" x:str>Membimbing dan ikut membimbing dalam menghasilkan laporan akhir studi/ skripsi/ thesis/desertasi</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="40" style='height:30.00pt;mso-height-source:userset;mso-height-alt:600;'>
    <td class="xl87" height="40" style='height:30.00pt;'></td>
    <td class="xl93"></td>
    <td class="xl94"></td>
    <td class="xl85" x:num>5</td>
    <td class="xl110" x:str>Bertugas sebagai penguji pada ujian akhir</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="74" style='height:55.50pt;mso-height-source:userset;mso-height-alt:1110;'>
    <td class="xl87" height="74" style='height:55.50pt;'></td>
    <td class="xl93"></td>
    <td class="xl94"></td>
    <td class="xl85" x:num>6</td>
    <td class="xl110" x:str>Membina kegiatan mahasiswa dibidang akademik dan kemahasiswaan</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl87" height="17" style='height:12.75pt;'></td>
    <td class="xl93"></td>
    <td class="xl94" rowspan="6" style='border-right:.5pt solid ;border-bottom:none;'></td>
    <td class="xl85" x:num>7</td>
    <td class="xl110" x:str>Mengembangkan program kuliah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl87" height="34" style='height:25.50pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>8</td>
    <td class="xl110" x:str>Mengembangkan bahan pengajaran</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl87" height="17" style='height:12.75pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>9</td>
    <td class="xl110" x:str>Menyampaikan orasi ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl87" height="34" style='height:25.50pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>10</td>
    <td class="xl110" x:str>Menduduki jabatan pimpinan perguruan tinggi</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl87" height="34" style='height:25.50pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>11</td>
    <td class="xl110" x:str>Membimbing dosen yang lebih rendah jabatan fungsionalnya</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="51" style='height:38.25pt;'>
    <td class="xl87" height="51" style='height:38.25pt;'></td>
    <td class="xl93"></td>
    <td class="xl85" x:num>12</td>
    <td class="xl110" x:str>Melaksanakan kegiatan detasering dan pencangkokan dosen</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="51" style='height:38.25pt;'>
    <td class="xl87" height="51" style='height:38.25pt;'></td>
    <td class="xl99"></td>
    <td class="xl100"></td>
    <td class="xl85" x:num>13</td>
    <td class="xl110" x:str>Melaksanakan<span style='mso-spacerun:yes;'>&nbsp;&nbsp;&nbsp; </span>pengembangan<span style='mso-spacerun:yes;'>&nbsp;&nbsp;&nbsp; </span>diri untuk meningkatkan kompetensi</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl87" height="17" style='height:12.75pt;'></td>
    <td class="xl90" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jumlah</td>
    <td class="xl102"></td>
    <td class="xl114"></td>
    <td class="xl114"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl87" height="207" rowspan="6" style='height:155.25pt;border-right:.5pt solid ;border-bottom:none;'></td>
    <td class="xl101" rowspan="6" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>B</td>
    <td class="xl101" x:str>c</td>
    <td class="xl102" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>MELAKSANAKAN PENELITIAN</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl94" rowspan="5" style='border-right:.5pt solid ;border-bottom:.5pt solid ;'></td>
    <td class="xl85" x:num>1</td>
    <td class="xl110" x:str>Menghasilkan karya Ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl85" x:num>2</td>
    <td class="xl110" x:str>Menerjemahkan/ menyadur buku ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl85" x:num>3</td>
    <td class="xl110" x:str>Mengedit/ menyunting karya ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl85" x:num>4</td>
    <td class="xl110" x:str>Membuat rancangan dan karya teknologi yang dipatenkan<span style='mso-spacerun:yes;'>&nbsp;&nbsp;</span></td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="68" style='height:51.00pt;'>
    <td class="xl85" x:num>5</td>
    <td class="xl110" x:str>Membuat rancangan dan karya teknologi, rancangan dan karya seni monumental/ seni pertunjukan/ karya sastra</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl87" height="17" style='height:12.75pt;'></td>
    <td class="xl90" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jumlah</td>
    <td class="xl110"></td>
    <td class="xl114"></td>
    <td class="xl114"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="36" style='height:27.00pt;mso-height-source:userset;mso-height-alt:540;'>
    <td class="xl87" height="36" style='height:27.00pt;'></td>
    <td class="xl98"></td>
    <td class="xl101" x:str>d</td>
    <td class="xl102" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>MELAKSANAKAN PENGABDIAN PADA MASYARAKAT</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="68" style='height:51.00pt;'>
    <td class="xl87" height="68" style='height:51.00pt;'></td>
    <td class="xl94"></td>
    <td class="xl105"></td>
    <td class="xl85" x:num>1</td>
    <td class="xl110" x:str>Menduduki jabatan pimpinan pada lembaga pemerintah/ pejabat negara yang dibebaskan dari jabatan organiknya</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="68" style='height:51.00pt;'>
    <td class="xl87" height="68" style='height:51.00pt;'></td>
    <td class="xl94"></td>
    <td class="xl105"></td>
    <td class="xl85" x:num>2</td>
    <td class="xl110" x:str>Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh masyarakat</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="51" style='height:38.25pt;'>
    <td class="xl87" height="51" style='height:38.25pt;'></td>
    <td class="xl94"></td>
    <td class="xl105"></td>
    <td class="xl85" x:num>3</td>
    <td class="xl110" x:str>Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="85" style='height:63.75pt;'>
    <td class="xl87" height="85" style='height:63.75pt;'></td>
    <td class="xl94"></td>
    <td class="xl105"></td>
    <td class="xl85" x:num>4</td>
    <td class="xl110" x:str>Memberi pelayanan pada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas umum pemerintahan dan pembangunan</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="51" style='height:38.25pt;'>
    <td class="xl95" height="51" style='height:38.25pt;'></td>
    <td class="xl97"></td>
    <td class="xl106"></td>
    <td class="xl85" x:num>5</td>
    <td class="xl110" x:str>Menulis / membuat karya pengabdian pada masyarakat yang tidak dipublikasikan</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="170" style='height:127.50pt;'>
    <td class="xl92" height="170" style='height:127.50pt;'></td>
    <td class="xl98"></td>
    <td class="xl107"></td>
    <td class="xl85" x:num>6</td>
    <td class="xl110" x:str>Hasil<span style='mso-spacerun:yes;'>&nbsp; </span>kegiatan<span style='mso-spacerun:yes;'>&nbsp; </span>pengabdian<span style='mso-spacerun:yes;'>&nbsp; </span>kepada<span style='mso-spacerun:yes;'>&nbsp; </span>masyarakat<span style='mso-spacerun:yes;'>&nbsp; </span>yang<span style='mso-spacerun:yes;'>&nbsp; </span>dipublikasikan<span style='mso-spacerun:yes;'>&nbsp; </span>di sebuah<span style='mso-spacerun:yes;'>&nbsp; </span>berkala/jurnal<span style='mso-spacerun:yes;'>&nbsp; </span>pengabdian<span style='mso-spacerun:yes;'>&nbsp; </span>kepada<span style='mso-spacerun:yes;'>&nbsp; </span>masyarakat<span style='mso-spacerun:yes;'>&nbsp; </span>atau<span style='mso-spacerun:yes;'>&nbsp; </span>teknologi tepat<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>guna,<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>merupakan<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>diseminasi<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>dari<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>luaran<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>program<span style='mso-spacerun:yes;'>&nbsp;&nbsp; </span>kegiatan pengabdian kepada masyarakat, tiap karya</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="34" style='height:25.50pt;'>
    <td class="xl108" height="34" style='height:25.50pt;'></td>
    <td class="xl100"></td>
    <td class="xl109"></td>
    <td class="xl85" x:num>7</td>
    <td class="xl110" x:str>Berperan serta aktif dalam pengelolaan jurnal ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl95" height="17" style='height:12.75pt;'></td>
    <td class="xl90" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jumlah</td>
    <td class="xl110"></td>
    <td class="xl114"></td>
    <td class="xl114"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl90" height="369" rowspan="11" style='height:276.75pt;border-right:.5pt solid ;border-bottom:none;' x:num>2</td>
    <td class="xl102" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>UNSUR PENUNJANG</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl91" rowspan="8" style='border-right:.5pt solid ;border-bottom:none;'></td>
    <td class="xl102" colspan="3" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>PENUNJANG TUGAS POKOK DOSEN</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="36" style='height:27.00pt;mso-height-source:userset;mso-height-alt:540;'>
    <td class="xl85" x:num>1</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Menjadi anggota dalam suatu panitia / badan pada Perguruan Tinggi</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="40" style='height:30.00pt;mso-height-source:userset;mso-height-alt:600;'>
    <td class="xl85" x:num>2</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Menjadi anggota Panitia/ badan pada lembaga pemerintah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="21" style='height:15.75pt;mso-height-source:userset;mso-height-alt:315;'>
    <td class="xl85" x:num>3</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Menjadi anggota profesi</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="52" style='height:39.00pt;mso-height-source:userset;mso-height-alt:780;'>
    <td class="xl85" x:num>4</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Mewakili perguruan tinggi / lembaga pemerintah duduk dalam panitia antar lembaga</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="36" style='height:27.00pt;mso-height-source:userset;mso-height-alt:540;'>
    <td class="xl85" x:num>5</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Menjadi anggota delegasi Nasional ke pertemuan Internasional</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="38" style='height:28.50pt;mso-height-source:userset;mso-height-alt:570;'>
    <td class="xl85" x:num>6</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Berperan serta aktif dalam pertemuan ilmiah</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="20" style='height:15.00pt;mso-height-source:userset;mso-height-alt:300;'>
    <td class="xl85" x:num>7</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Mendapat tanda jasa / penghargaan</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="52" style='height:39.00pt;mso-height-source:userset;mso-height-alt:780;'>
    <td class="xl94" rowspan="2" style='border-right:.5pt solid ;border-bottom:none;'></td>
    <td class="xl85" x:num>8</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Menulis buku pelajaran SLTA kebawah yang diterbitkan dan diedarkan secara Nasional</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="37" style='height:27.75pt;mso-height-source:userset;mso-height-alt:555;'>
    <td class="xl85" x:num>9</td>
    <td class="xl110" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Mempunyai prestastasi dibidang olahraga / humaniora</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="37" style='height:27.75pt;mso-height-source:userset;mso-height-alt:555;'>
    <td class="xl104" height="37" style='height:27.75pt;'></td>
    <td class="xl100"></td>
    <td class="xl85" x:num>10</td>
    <td class="xl120" colspan="2" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Keanggotaan dalam tim penilai jabatan akademik dosen</td>
    <td class="xl110"></td>
    <td class="xl115"></td>
    <td class="xl115"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl121" height="17" style='height:12.75pt;'></td>
    <td class="xl90" colspan="4" style='border-right:.5pt solid ;border-bottom:.5pt solid ;' x:str>Jumlah</td>
    <td class="xl110"></td>
    <td class="xl114"></td>
    <td class="xl114"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl110"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" style='height:12.75pt;'></td>
    <td class="xl66" colspan="5" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl122" height="17" style='height:12.75pt;' x:str>III</td>
    <td class="xl123" colspan="4" style='border-right:none;border-bottom:none;' x:str>BAHAN YANG DINILAI :</td>
    <td class="xl133"></td>
    <td class="xl134" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl133" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl139"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>Nama :<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>NIP :<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>Pangkat Lama/TMT :</td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>Program Studi :</td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>Mata Kuliah yang dibina :<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>Bangkalan,<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" x:str>Dekan,</td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="3" style='border-right:none;border-bottom:none;' x:str>Dr. H. Pribanus Wantara,M.M</td>
    <td class="xl142"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>NIP.<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl77" height="17" style='height:12.75pt;'></td>
    <td class="xl128"></td>
    <td class="xl129" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl136" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl129" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl144"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl130" height="17" style='height:12.75pt;' x:str>IV</td>
    <td class="xl131" colspan="5" style='mso-ignore:colspan;' x:str>PENDAPAT TIM PENILAI PUSAT/UNIVERSITAS</td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127" colspan="5" style='mso-ignore:colspan;' x:str>Telah memenuhi syarat angka kredit untuk diangkat/</td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>dinaikkan menjadi : Lektor</td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>TMT : ………………………….</td>
    <td class="xl66"></td>
    <td class="xl65" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl140"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>Bangkalan,<span style='mso-spacerun:yes;'>&nbsp;&nbsp;</span></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl137"></td>
    <td class="xl137"></td>
    <td class="xl126" colspan="4" style='mso-ignore:colspan;border-right:.5pt solid ;border-bottom:none;' x:str>Ketua Tim Penilai Angka Kredit Pusat</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;' x:str>Universitas Trunojoyo,</td>
    <td class="xl126"></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" colspan="3" style='mso-ignore:colspan;' x:str>Ir. Muhammad Fakhry., MP.</td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>NIP. 19620814 198803 1 003</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl77" height="17" style='height:12.75pt;'></td>
    <td class="xl128"></td>
    <td class="xl129" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl136"></td>
    <td class="xl138"></td>
    <td class="xl138" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl146"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl130" height="17" style='height:12.75pt;' x:str>V</td>
    <td class="xl131" colspan="5" style='mso-ignore:colspan;' x:str>PERSETUJUAN REKTOR UNIVERSITAS TRUNOJOYO</td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>Disetujui menjadi : Lektor</td>
    <td class="xl66"></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl125" colspan="4" style='border-right:none;border-bottom:none;' x:str>TMT :</td>
    <td class="xl66"></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>Bangkalan,<span style='mso-spacerun:yes;'>&nbsp;</span></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" x:str>Rektor,</td>
    <td class="xl126"></td>
    <td class="xl126"></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl135" colspan="3" style='border-right:none;border-bottom:none;' x:str>Dr. Drs. Ec. H. Muh. Syarif,M.Si</td>
    <td class="xl145"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl71" height="17" style='height:12.75pt;'></td>
    <td class="xl127"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126" colspan="4" style='border-right:.5pt solid ;border-bottom:none;' x:str>NIP. 1963113020011210012</td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl77" height="17" style='height:12.75pt;'></td>
    <td class="xl128"></td>
    <td class="xl129" colspan="4" style='mso-ignore:colspan;'></td>
    <td class="xl136"></td>
    <td class="xl138"></td>
    <td class="xl138" colspan="2" style='mso-ignore:colspan;'></td>
    <td class="xl146"></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" style='height:12.75pt;'></td>
    <td class="xl66" colspan="5" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <tr height="17" style='height:12.75pt;'>
    <td class="xl65" height="17" style='height:12.75pt;'></td>
    <td class="xl66" colspan="5" style='mso-ignore:colspan;'></td>
    <td class="xl65"></td>
    <td class="xl126"></td>
    <td class="xl126" colspan="3" style='mso-ignore:colspan;'></td>
    <td class="xl66" colspan="4" style='mso-ignore:colspan;'></td>
   </tr>
   <![if supportMisalignedColumns]>
    <tr width="0" style='display:none;'>
     <td width="34" style='width:26;'></td>
     <td width="27" style='width:21;'></td>
     <td width="26" style='width:20;'></td>
     <td width="25" style='width:19;'></td>
     <td width="201" style='width:151;'></td>
     <td width="62" style='width:46;'></td>
     <td width="62" style='width:46;'></td>
     <td width="69" style='width:51;'></td>
     <td width="62" style='width:46;'></td>
     <td width="73" style='width:55;'></td>
     <td width="73" style='width:55;'></td>
    </tr>
   <![endif]>
  </table>
 </body>
</html>