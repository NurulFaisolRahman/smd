<?php
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Borang.xls');
?>
MIME-Version: 1.0
X-Document-Type: Workbook
Content-Type: multipart/related; boundary="----=_NextPart_482017781dbb413399e58e9338ebfea1"

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.htm
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

<html xmlns:v=3D"urn:schemas-microsoft-com:vml" xmlns:o=3D"urn:schemas-microsoft-com:office:office" xmlns:x=3D"urn:schemas-microsoft-com:office:excel" xmlns:dt=3D"uuid:C2F41010-65B3-11d1-A29F-00AA00C14882" xmlns=3D"http://www.w3.org/TR/REC-html40">
 <head>
  <meta name=3D"Excel Workbook Frameset"/>
  <meta http-equiv=3D"Content-Type" content=3D"text/html; charset=3Dutf-8"/>
  <meta name=3D"ProgId" content=3D"Excel.Sheet"/>
  <meta name=3D"Generator" content=3D"WPS Office ET"/>
  <link rel=3D"File-List" href=3D"Borank.files/filelist.xml"/>
  <link id=3D"shLink" href=3D"Borank.files/sheet001.htm"/>
  <link id=3D"shLink" href=3D"Borank.files/sheet002.htm"/>
  <script src=3D"Borank.files\js.js"></script>
  <script type=3D"text/javascript">window.g_iIEVer=3DfnGetIEVer();fnBuildFrameset(1);</script>
  
   <xml>
    <x:ExcelWorkbook>
     <x:ExcelWorksheets>
      <x:ExcelWorksheet>
       <x:Name>3a1</x:Name>
       <x:WorksheetSource HRef=3D"Borank.files/sheet001.htm"/>
      </x:ExcelWorksheet>
      <x:ExcelWorksheet>
       <x:Name>3a2</x:Name>
       <x:WorksheetSource HRef=3D"Borank.files/sheet002.htm"/>
      </x:ExcelWorksheet>
     </x:ExcelWorksheets>
     <x:Stylesheet HRef=3D"Borank.files/stylesheet.css"/>
     <x:ActiveSheet>1</x:ActiveSheet>
     <x:ProtectStructure>False</x:ProtectStructure>
     <x:ProtectWindows>False</x:ProtectWindows>
     <x:WindowHeight>7695</x:WindowHeight>
     <x:WindowWidth>20490</x:WindowWidth>
    </x:ExcelWorkbook>
    <x:ExcelName>
     <x:Name>diploma</x:Name>
     <x:Formula>=3D'#REF!'!#REF!</x:Formula>
    </x:ExcelName>
    <x:ExcelName>
     <x:Name>diploma</x:Name>
     <x:SheetIndex>2</x:SheetIndex>
     <x:Formula>=3D'#REF!'!#REF!</x:Formula>
    </x:ExcelName>
   </xml>
  
 </head>
 <frameset rows=3D"*,36" border=3D"0" width=3D"0" frameborder=3D"no">
  <frame src=3D"Borank.files/sheet002.htm" name=3D"frSheet" noresize/>
  <frame src=3D"Borank.files/tabstrip.htm" name=3D"frTabs" marginwidth=3D"0" marginheight=3D"0"/>
  <noframes>
   <body>
    <p>&#27492;&#39029;&#38754;&#20351;&#29992;&#20102;&#26694;&#26550;&#65292;&#32780;&#24744;&#30340;&#27983;&#35272;&#22120;&#19981;&#25903;&#25345;&#26694;&#26550;</p>
   </body>
  </noframes>
 </frameset>
</html>

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/js.js
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

var c_lTabs=3D2;
var c_rgszSh=3Dnew Array(c_lTabs);
c_rgszSh[0]=3D"3a1";
c_rgszSh[1]=3D"3a2";
var g_iShCur=3D1;
var g_rglTabX=3Dnew Array(c_lTabs+1);
var g_clrs=3Dnew Array(8);
g_clrs[0]=3D"window";
g_clrs[1]=3D"buttonface";
g_clrs[2]=3D"windowframe";
g_clrs[3]=3D"windowtext";
g_clrs[4]=3D"threedlightshadow";
g_clrs[5]=3D"threedhighlight";
g_clrs[6]=3D"threeddarkshadow";
g_clrs[7]=3D"threedshadow";

function fnGetIEVer() 
{
	var ua =3D window.navigator.userAgent;
	var msie =3D ua.indexOf("MSIE");
	if (msie > 0 && window.navigator.platform =3D=3D "Win32")
		return parseInt(ua.substring(msie+5, ua.indexOf(".",msie)));
	else
		return 0;
}
function fnMouseOverTab(event, iTab)
{
	if (iTab !=3D g_iShCur){
		if (parent.window.g_iIEVer>=3D4){
			frames['frTabs'].event.srcElement.style.background=3Dg_clrs[5];
		}
		else{
			event.target.style.background=3Dg_clrs[5];		}
	}
}
function fnMouseOutTab(event, iTab)
{
	if (iTab >=3D 0 && iTab !=3D g_iShCur){
		if (parent.window.g_iIEVer >=3D 4)
			frames['frTabs'].event.srcElement.style.background=3Dg_clrs[1];
		else
			target=3Devent.target.style.background=3Dg_clrs[1];
	}
}
function fnSetTabProps(iTab, fActive)
{
	if (iTab>=3D0){
		with (frames['frTabs'].document.all.aTab[iTab].style){
			background =3D fActive ? "#B0E0E6" : g_clrs[1];
			cursor =3D (fActive ? "default" : "pointer");
		}
	}
}
function fnSetActiveSheet(iSh)
{
	if (iSh !=3D g_iShCur){
		fnSetTabProps(g_iShCur, false);
		fnSetTabProps(iSh, true);
		g_iShCur =3D iSh;
	}
}
function fnInit()
{
	g_rglTabX[0] =3D 0;
	var row =3D frames['frTabs'].document.all.tbTabs.rows[0];
	for (var i =3D 1; i <=3D c_lTabs; ++i)
		g_rglTabX[i] =3D row.cells[i-1].offsetLeft + row.cells[i-1].offsetWidth;
	fnSetTabProps(g_iShCur, true);
}
function fnUpdateTabs(index)
{
	if (index < 0)
		return;
	if (document.readyState =3D=3D "complete")
		fnSetActiveSheet(index);
	else
		window.setTimeout("fnUpdateTabs("+index+");",150);
}
function fnBuildFrameset(index)
{
	var szHTML =3D "<frameset rows=3D\"*,18px\" border=3D0 width=3D0 frameborder=3Dno framespacing=3D0>" + "<frame src=3D\""+document.all.item("shLink")[index].href+"\" name=3D\"frSheet\" noresize>" + "<frameset cols=3D\"80px,*\" border=3D0 width=3D0 frameborder=3Dno framespacing=3D0>"+"<frame name=3D\"frScroll\" marginwidth=3D0 marginheight=3D0 scrolling=3Dno noresize>"+"<frame name=3D\"frTabs\" marginwidth=3D0 marginheight=3D0 scrolling=3Dno noresize>"+"</frameset></frameset>";
	with (document){
		open('text/html', 'replace');
		write(szHTML);
		close();
	}
	fnBuildTabStrip();
}
function fnNextTab(fDir)
{
	var iNextTab =3D -1;
	var i;
	with (frames['frTabs'].document.body){
		if (fDir =3D=3D 0){
			if (scrollLeft > 0){
				for (i =3D 0; i < c_lTabs && g_rglTabX[i] < scrollLeft; ++i);
				if ( i < c_lTabs)
					iNextTab =3D i - 1;
			}
		}
		else{
			if (g_rglTabX[c_lTabs] > offsetWidth + scrollLeft){
				for (i =3D 0; i < c_lTabs && g_rglTabX[i] <=3D scrollLeft; ++i);
				if (i < c_lTabs)
					iNextTab=3Di;
			}
		}
	}
	return iNextTab;
}
function fnScrollTabs(fDir)
{
	var iNextTab =3D fnNextTab(fDir);
	if (iNextTab >=3D 0){
		frames['frTabs'].scroll(g_rglTabX[iNextTab], 0);
		return true;
	}
	else
		return false;
}
function fnFastScrollTabs(fDir)
{
	if (c_lTabs > 16)
		frames['frTabs'].scroll(g_rglTabX[fDir ? c_lTabs-1 : 0], 0);
	else if (fnScrollTabs(fDir) > 0)
		window.setTimeout("fnFastScrollTabs("+fDir+");", 5);
}
function fnMouseOverScroll(iCtl)
{
	frames['frScroll'].document.all.tdScroll[iCtl].style.color =3D g_clrs[7];
}
function fnMouseOutScroll(iCtl)
{
	frames['frScroll'].document.all.tdScroll[iCtl].style.color =3D g_clrs[6];
}
function fnBuildTabStrip()
{
	var szHTML =3D "<html><head><style>.clScroll{font:8pt Courier New;cursor:default;line-height:10pt;}"+".clScroll2{font:10pt Arial;cursor:default;line-height:11pt;}</style></head>"+"<body topmargin=3D0 leftmargin=3D0><table border=3D1 cellpadding=3D0 cellspacing=3D0 width=3D100%>"+"<tr>"+"<td valign=3Dtop id=3DtdScroll class=3D\"clScroll\" onclick=3D\"parent.fnFastScrollTabs(0);\" ondblclick=3D\"parent.fnFastScrollTabs(0);\" onmouseover=3D\"parent.fnMouseOverScroll(0);\" onmouseout=3D\"parent.fnMouseOutScroll(0);\">&nbsp;&#171;&nbsp;</td>"+"<td valign=3Dtop id=3DtdScroll class=3D\"clScroll2\" onclick=3D\"parent.fnScrollTabs(0);\" ondblclick=3D\"parent.fnScrollTabs(0);\" onmouseover=3D\"parent.fnMouseOverScroll(1);\" onmouseout=3D\"parent.fnMouseOutScroll(1);\">&nbsp;&lt;&nbsp;</td>"+"<td valign=3Dtop id=3DtdScroll class=3D\"clScroll2\" onclick=3D\"parent.fnScrollTabs(1);\" ondblclick=3D\"parent.fnScrollTabs(1);\" onmouseover=3D\"parent.fnMouseOverScroll(2);\" onmouseout=3D\"parent.fnMouseOutScroll(2);\">&nbsp;&gt;&nbsp;</td>"+"<td valign=3Dtop id=3DtdScroll class=3D\"clScroll\" onclick=3D\"parent.fnFastScrollTabs(1);\" ondblclick=3D\"parent.fnFastScrollTabs(1);\" onmouseover=3D\"parent.fnMouseOverScroll(3);\" onmouseout=3D\"parent.fnMouseOutScroll(3);\">&nbsp;&#187;&nbsp;</td>"+"</tr></table></body></html>";
	with (frames['frScroll'].document){
		open("text/html","replace");
		write(szHTML);
		close();
	}
	szHTML =3D "<html><head>"+"<style>A:link,A:visited,A:active{text-decoration:none;"+"color:#000000;}"+".clTab{cursor:hand;background:"+g_clrs[1]+";font:9pt \"&#23435;&#20307;\";padding-left:3px;padding-right:3px;text-align:center;}"+"</style></head><body onload=3D\"parent.fnInit();\" topmargin=3D0 leftmargin=3D0><table id=3DtbTabs border=3D1 cellpadding=3D0 cellspacing=3D0><tr>"; 
	for (i =3D 0; i < c_lTabs; ++i){
		szHTML+=3D"<td id=3DtdTab height=3D1 nowrap class=3D\"clTab\" "+"onmouseover=3D\"parent.fnMouseOverTab(event," + i + ");\" onmouseout=3D\"parent.fnMouseOutTab(event,"+i+");\">"+"<a href=3D\""+document.all.item("shLink")[i].href+"\" target=3D\"frSheet\" id=3DaTab>&nbsp;"+c_rgszSh[i]+"&nbsp;</a></td>"; 
	}
	szHTML +=3D "</tr></table></body></html>";
	with (frames['frTabs'].document){
		open('text/html','replace');
		write(szHTML);
		close();
	}
}

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/tabstrip.htm
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

<html>
 <head>
  <meta http-equiv=3D"Content-Type" content=3D"text/html; charset=3DUTF-8"/>
  <meta name=3D"ProgId" content=3D"Excel.Sheet"/>
  <meta name=3D"Generator" content=3D"WPS Office ET"/>
  <link id=3D"Main-File" rel=3D"Main-File" href=3D"../Borank.mhtml"/>
  <style>A:link,A:visited,A:active{text-decoration:none;color:#000000;font-size:9pt;}		 table{cursor:hand;background:buttonface;font:9pt &#23435;&#20307;;text-align:center;}		 td{white-space:nowrap}</style>
  <script language=3D"JavaScript">if(window.name!=3D'frTabs')
 	window.location.replace(document.getElementById('Main-File').href);</script>
 </head>
 <body style=3D'margin:"0";'>
  <table border=3D"1" cellspacing=3D"0">
   <tr>
    <td><a href=3D"sheet001.htm" target=3D"frSheet">&nbsp;3a1&nbsp;</a></td>
    <td><a href=3D"sheet002.htm" target=3D"frSheet">&nbsp;3a2&nbsp;</a></td>
   </tr>
  </table>
 </body>
</html>

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/sheet001.htm
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

<html xmlns:v=3D"urn:schemas-microsoft-com:vml" xmlns:o=3D"urn:schemas-microsoft-com:office:office" xmlns:x=3D"urn:schemas-microsoft-com:office:excel" xmlns=3D"http://www.w3.org/TR/REC-html40">
 <head>
  <meta http-equiv=3D"Content-Type" content=3D"text/html; charset=3DUTF-8"/>
  <meta name=3D"ProgId" content=3D"Excel.Sheet"/>
  <meta name=3D"Generator" content=3D"WPS Office ET"/>
  <link id=3D"Main-File" rel=3D"Main-File" href=3D"../Borank.mhtml"/>
  <link rel=3D"File-List" href=3D"filelist.xml"/>
  <link rel=3D"Stylesheet" href=3D"stylesheet.css"/>
  <style>
 @page
	{margin:0.75in 0.70in 0.75in 0.70in;
	mso-header-margin:0.30in;
	mso-footer-margin:0.30in;}
   </style>
  
   <xml>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:StandardWidth>2274</x:StandardWidth>
     <x:FreezePanes/>
     <x:FrozenNoSplit/>
     <x:SplitHorizontal>13</x:SplitHorizontal>
     <x:TopRowBottomPane>13</x:TopRowBottomPane>
     <x:SplitVertical>1</x:SplitVertical>
     <x:LeftColumnRightPane>1</x:LeftColumnRightPane>
     <x:ActivePane>0</x:ActivePane>
     <x:Panes>
      <x:Pane>
       <x:Number>0</x:Number>
       <x:ActiveCol>0</x:ActiveCol>
       <x:ActiveRow>1</x:ActiveRow>
       <x:RangeSelection>A2</x:RangeSelection>
      </x:Pane>
      <x:Pane>
       <x:Number>1</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>2</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>3</x:Number>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
     <x:PageBreakZoom>100</x:PageBreakZoom>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:HorizontalResolution>300</x:HorizontalResolution>
      <x:VerticalResolution>300</x:VerticalResolution>
     </x:Print>
    </x:WorksheetOptions>
   </xml>
  
  <script language=3D"JavaScript">
	if (window.name!=3D"frSheet")
		window.location.replace("../Borank.mhtml");
	else
		parent.fnUpdateTabs(0);
</script>
 </head>
 <body link=3D"blue" vlink=3D"purple" class=3D"xl77">
  <table width=3D"1519.07" border=3D"0" cellpadding=3D"0" cellspacing=3D"0" style=3D'width:1139.30pt;border-collapse:collapse;table-layout:fixed;'>
   <col width=3D"44.47" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:1422;'/>
   <col width=3D"155.53" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:4977;'/>
   <col width=3D"84.47" span=3D"2" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:2702;'/>
   <col width=3D"95.07" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3042;'/>
   <col width=3D"100.47" span=3D"2" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3214;'/>
   <col width=3D"84.47" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:2702;'/>
   <col width=3D"92.47" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:2958;'/>
   <col width=3D"91.53" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:2929;'/>
   <col width=3D"104.87" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3355;'/>
   <col width=3D"115.53" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3697;'/>
   <col width=3D"106.67" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3413;'/>
   <col width=3D"116.47" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:3726;'/>
   <col width=3D"71.07" span=3D"16370" class=3D"xl77" style=3D'mso-width-source:userset;mso-width-alt:2274;'/>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl77" height=3D"19" width=3D"284.47" colspan=3D"3" style=3D'height:14.25pt;width:213.35pt;mso-ignore:colspan;' x:str>Tabel 3.a.1) Dosen Tetap Perguruan Tinggi</td>
    <td class=3D"xl77" width=3D"84.47" style=3D'width:63.35pt;'></td>
    <td class=3D"xl77" width=3D"95.07" style=3D'width:71.30pt;'></td>
    <td class=3D"xl77" width=3D"100.47" style=3D'width:75.35pt;'></td>
    <td class=3D"xl77" width=3D"100.47" style=3D'width:75.35pt;'></td>
    <td class=3D"xl77" width=3D"84.47" style=3D'width:63.35pt;'></td>
    <td class=3D"xl77" width=3D"92.47" style=3D'width:69.35pt;'></td>
    <td class=3D"xl77" width=3D"91.53" style=3D'width:68.65pt;'></td>
    <td class=3D"xl77" width=3D"104.87" style=3D'width:78.65pt;'></td>
    <td class=3D"xl77" width=3D"115.53" style=3D'width:86.65pt;'></td>
    <td class=3D"xl77" width=3D"106.67" style=3D'width:80.00pt;'></td>
    <td class=3D"xl90" width=3D"116.47" style=3D'width:87.35pt;'></td>
    <td class=3D"xl77" width=3D"71.07" style=3D'width:53.30pt;'></td>
    <td class=3D"xl77" width=3D"71.07" style=3D'width:53.30pt;'></td>
   </tr>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl77" height=3D"19" colspan=3D"16" style=3D'height:14.25pt;mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"6" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" x:str>Check</td>
    <td class=3D"xl77" x:str>JA</td>
    <td class=3D"xl77" colspan=3D"8" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"16" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"6" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" x:str>V</td>
    <td class=3D"xl77" colspan=3D"2" style=3D'mso-ignore:colspan;' x:str>Tenaga Pengajar</td>
    <td class=3D"xl77" colspan=3D"7" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"7" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" x:str>Asisten Ahli</td>
    <td class=3D"xl77" colspan=3D"8" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"7" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" x:str>Lektor</td>
    <td class=3D"xl77" colspan=3D"8" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"7" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" colspan=3D"2" style=3D'mso-ignore:colspan;' x:str>Lektor Kepala</td>
    <td class=3D"xl77" colspan=3D"7" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"7" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
    <td class=3D"xl77" x:str>Guru Besar</td>
    <td class=3D"xl77" colspan=3D"8" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"0" style=3D'height:0.00pt;display:none;'>
    <td class=3D"xl77" height=3D"0" colspan=3D"16" style=3D'height:0.00pt;mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl78" height=3D"87" rowspan=3D"2" style=3D'height:65.25pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>No.</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Nama Dosen</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>NIDN/NIDK</td>
    <td class=3D"xl79" colspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Pendidikan Pasca Sarjana</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Bidang Keahlian</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Kesesuaian dengan Kompetensi Inti PS</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Jabatan Akademik</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Sertifikat Pendidik Profesional</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Sertifikat<span style=3D'mso-spacerun:yes;'>&nbsp; </span>Kompetensi/ Profesi/<span style=3D'mso-spacerun:yes;'>&nbsp; </span>Industri</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Mata Kuliah yang Diampu pada PS yang Diakreditasi</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</td>
    <td class=3D"xl78" rowspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Mata Kuliah yang Diampu pada PS Lain</td>
    <td class=3D"xl77" colspan=3D"3" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"68" style=3D'height:51.00pt;'>
    <td class=3D"xl81" x:str>Magister/ Magister Terapan/ Spesialis</td>
    <td class=3D"xl81" x:str>Doktor/ Doktor Terapan/ Spesialis</td>
    <td class=3D"xl77" colspan=3D"3" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl68" height=3D"19" style=3D'height:14.25pt;' x:num>1</td>
    <td class=3D"xl68" x:num>2</td>
    <td class=3D"xl68" x:num>3</td>
    <td class=3D"xl82" colspan=3D"2" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:num>4</td>
    <td class=3D"xl68" x:num>5</td>
    <td class=3D"xl68" x:num>6</td>
    <td class=3D"xl68" x:num>7</td>
    <td class=3D"xl68" x:num>8</td>
    <td class=3D"xl68" x:num>9</td>
    <td class=3D"xl68" x:num>10</td>
    <td class=3D"xl68" x:num>11</td>
    <td class=3D"xl68" x:num>12</td>
    <td class=3D"xl77" colspan=3D"3" style=3D'mso-ignore:colspan;'></td>
   </tr>
	 <?php $No = 1; foreach ($Dosen as $key) { ?>
    <tr height=3D"19" style=3D'height:14.25pt;'>
			<td class=3D"xl83" height=3D"19" style=3D'height:14.25pt;' x:num><?=$No++?></td>
			<td class=3D"xl84" x:str><?=$key['Nama']?></td>
			<td class=3D"xl84" x:str><?=$key['NIDN']?></td>
			<td class=3D"xl84" x:str><?=$key['S2']?></td>
			<td class=3D"xl70" x:str><?=$key['S3']?></td>
			<td class=3D"xl70" x:str><?=$key['BidangKeahlian']?></td>
			<td class=3D"xl71"><?=$key['KesesuaianKompetensi']==1?'V':''?></td>
			<td class=3D"xl71"><?=$key['Jabatan']?></td>
			<td class=3D"xl71"><?=$key['SertifikatPendidik']?></td>
			<td class=3D"xl71" x:str><?=$key['SertifikatKompetensi']?></td>
			<td class=3D"xl70"><?=$key['MengajarPS']?></td>
			<td class=3D"xl71"><?=$key['KesesuaianBidang']==1?'V':''?></td>
			<td class=3D"xl70"><?=$key['MengajarPSLain']?></td>
		</tr>
	 <?php } ?>
  </table>
 </body>
</html>

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/sheet002.htm
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

<html xmlns:v=3D"urn:schemas-microsoft-com:vml" xmlns:o=3D"urn:schemas-microsoft-com:office:office" xmlns:x=3D"urn:schemas-microsoft-com:office:excel" xmlns=3D"http://www.w3.org/TR/REC-html40">
 <head>
  <meta http-equiv=3D"Content-Type" content=3D"text/html; charset=3DUTF-8"/>
  <meta name=3D"ProgId" content=3D"Excel.Sheet"/>
  <meta name=3D"Generator" content=3D"WPS Office ET"/>
  <link id=3D"Main-File" rel=3D"Main-File" href=3D"../Borank.mhtml"/>
  <link rel=3D"File-List" href=3D"filelist.xml"/>
  <link rel=3D"Stylesheet" href=3D"stylesheet.css"/>
  <style>
 @page
	{margin:0.75in 0.70in 0.75in 0.70in;
	mso-header-margin:0.30in;
	mso-footer-margin:0.30in;}
   </style>
  
   <xml>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:StandardWidth>2274</x:StandardWidth>
     <x:Selected/>
     <x:FreezePanes/>
     <x:FrozenNoSplit/>
     <x:SplitHorizontal>6</x:SplitHorizontal>
     <x:TopRowBottomPane>6</x:TopRowBottomPane>
     <x:SplitVertical>1</x:SplitVertical>
     <x:LeftColumnRightPane>1</x:LeftColumnRightPane>
     <x:ActivePane>0</x:ActivePane>
     <x:Panes>
      <x:Pane>
       <x:Number>0</x:Number>
       <x:ActiveCol>0</x:ActiveCol>
       <x:ActiveRow>1</x:ActiveRow>
       <x:RangeSelection>A2</x:RangeSelection>
      </x:Pane>
      <x:Pane>
       <x:Number>1</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>2</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>3</x:Number>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
     <x:PageBreakZoom>100</x:PageBreakZoom>
     <x:Print>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
     </x:Print>
    </x:WorksheetOptions>
   </xml>
  
  <script language=3D"JavaScript">
	if (window.name!=3D"frSheet")
		window.location.replace("../Borank.mhtml");
	else
		parent.fnUpdateTabs(1);
</script>
 </head>
 <body link=3D"blue" vlink=3D"purple" class=3D"xl65">
  <table width=3D"1163.47" border=3D"0" cellpadding=3D"0" cellspacing=3D"0" style=3D'width:872.60pt;border-collapse:collapse;table-layout:fixed;'>
   <col width=3D"44.47" class=3D"xl65" style=3D'mso-width-source:userset;mso-width-alt:1422;'/>
   <col width=3D"184" class=3D"xl65" style=3D'mso-width-source:userset;mso-width-alt:5888;'/>
   <col width=3D"60.47" span=3D"4" class=3D"xl65" style=3D'mso-width-source:userset;mso-width-alt:1934;'/>
   <col width=3D"62.20" span=3D"4" class=3D"xl65" style=3D'mso-width-source:userset;mso-width-alt:1990;'/>
   
   <col width=3D"71.07" span=3D"16372" class=3D"xl65" style=3D'mso-width-source:userset;mso-width-alt:2274;'/>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl66" height=3D"19" width=3D"349.40" colspan=3D"4" style=3D'height:14.25pt;width:262.05pt;mso-ignore:colspan;' x:str>Tabel 3.a.2) Dosen Pembimbing Utama Tugas Akhir</td>
    <td class=3D"xl65" width=3D"60.47" style=3D'width:45.35pt;'></td>
    <td class=3D"xl65" width=3D"60.47" style=3D'width:45.35pt;'></td>
    <td class=3D"xl65" width=3D"62.20" style=3D'width:46.65pt;'></td>
    <td class=3D"xl65" width=3D"62.20" style=3D'width:46.65pt;'></td>
    <td class=3D"xl65" width=3D"62.20" style=3D'width:46.65pt;'></td>
    <td class=3D"xl65" width=3D"62.20" style=3D'width:46.65pt;'></td>
   </tr>
   <tr height=3D"19" style=3D'height:14.25pt;'>
    <td class=3D"xl66" height=3D"19" style=3D'height:14.25pt;'></td>
    <td class=3D"xl65" colspan=3D"14" style=3D'mso-ignore:colspan;'></td>
   </tr>
   <tr height=3D"29.20" style=3D'height:21.90pt;mso-height-source:userset;mso-height-alt:438;'>
    <td class=3D"xl67" height=3D"88.20" rowspan=3D"3" style=3D'height:66.15pt;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>No.</td>
    <td class=3D"xl67" rowspan=3D"3" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Nama Dosen</td>
    <td class=3D"xl67" colspan=3D"<?=(($TS*2)+2)?>" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Jumlah Mahasiswa yang Dibimbing</td>
    <td class=3D"xl67" width=3D"100" rowspan=3D"3" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>Rata-rata Jumlah Bimbingan di semua Program/ Semester</td>
   </tr>
   <tr height=3D"40" style=3D'height:30.00pt;mso-height-source:userset;mso-height-alt:600;'>
    <td class=3D"xl67" colspan=3D"<?=($TS+1)?>" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>pada PS yang Diakreditasi</td>
    <td class=3D"xl67" colspan=3D"<?=($TS+1)?>" style=3D'border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;' x:str>pada PS Lain pada Program yang sama di PT</td>
   </tr>
	 <tr height=3D"19" style=3D'height:14.25pt;'>
		<?php for ($i = $TS; $i > 1; $i--) { ?>
			<td class=3D"xl67" x:str>TS-<?=($i-1)?></td>
		<?php } ?>
			<td class=3D"xl67" x:str>TS</td>
			<td class=3D"xl67" x:str>Rata-rata</td>
		<?php for ($i = $TS; $i > 1; $i--) { ?>
			<td class=3D"xl67" x:str>TS-<?=($i-1)?></td>
		<?php } ?>
			<td class=3D"xl67" x:str>TS</td>
			<td class=3D"xl67" x:str>Rata-rata</td>
   </tr>
	 <tr height=3D"19" style=3D'height:14.25pt;'>
		<?php for ($i = 1; $i <= (5+($TS*2)); $i++) { ?>
			<td class=3D"xl68" x:num><?=$i?></td>
		<?php } ?>
	 </tr>
	 <?php $No = 1; foreach ($DPU as $key) { $A = $B = 0;?>

		<tr height=3D"19" style=3D'height:14.25pt;'>
			<td class=3D"xl69" height=3D"19" style=3D'height:14.25pt;' x:num><?=$No++?></td>
			<td class=3D"xl70" x:str><?=$key[0]?></td>
			<?php for ($i = 1; $i <= $TS; $i++) { ?>
				<td class=3D"xl71" x:num><?=$key[$i]?></td>
			<?php $A += $key[$i]; } ?>
			<td class=3D"xl74"><?=round(($A/$TS),2)?></td>
			<?php for ($i = 1; $i <= $TS; $i++) { ?>
				<td class=3D"xl71" x:num><?=$key[$i+$TS]?></td>
			<?php $B += $key[$i+$TS]; } ?>
			<td class=3D"xl74"><?=round(($B/$TS),1)?></td>
			<td class=3D"xl74"><?=round(((round(($A/$TS),1)+round(($B/$TS),1))/2),1)?></td>
		</tr>
	 <?php } ?>
  </table>
 </body>
</html>

------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/stylesheet.css
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset="us-ascii"

tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}
col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
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
	border-left:none;
	border-top:none;
	border-right:none;
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
	border-left:none;
	border-top:.5pt solid #5B9BD5;
	border-right:none;
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
	{mso-number-format:"_-\0022\00A3\0022* \#\,\#\#0\.00_-\;\\-\0022\00A3\0022* \#\,\#\#0\.00_-\;_-\0022\00A3\0022* \0022-\0022??_-\;_-\@_-";
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
	border-left:none;
	border-top:none;
	border-right:none;
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
	border-left:none;
	border-top:none;
	border-right:none;
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
	{mso-number-format:"_-\0022\00A3\0022* \#\,\#\#0_-\;\\-\0022\00A3\0022* \#\,\#\#0_-\;_-\0022\00A3\0022* \0022-\0022_-\;_-\@_-";
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
	border-left:none;
	border-top:none;
	border-right:none;
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
	{color:#0563C1;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:134;
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
	mso-font-charset:134;}
.xl66
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	mso-font-charset:134;}
.xl67
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#ACB9CA;
	font-size:10.0pt;
	font-weight:700;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl68
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto gray-125;
	background:#D9D9D9;
	font-size:9.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl69
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl70
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#FFFF00;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl71
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#FFFF00;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl72
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;}
.xl73
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;}
.xl74
	{mso-style-parent:style0;
	mso-number-format:"0\.0";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#FFFF00;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl75
	{mso-style-parent:style0;
	mso-number-format:"0\.0";
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;}
.xl76
	{mso-style-parent:style63;
	vertical-align:middle;
	color:#0563C1;
	text-decoration:underline;
	text-underline-style:single;
	mso-font-charset:134;}
.xl77
	{mso-style-parent:style0;
	vertical-align:middle;
	mso-font-charset:134;}
.xl78
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#8DB4E2;
	font-size:10.0pt;
	font-weight:700;
	mso-font-charset:134;
	border-left:.5pt solid windowtext;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;}
.xl79
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#8DB4E2;
	font-size:10.0pt;
	font-weight:700;
	mso-font-charset:134;
	border-left:.5pt solid windowtext;
	border-top:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;}
.xl81
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#8DB4E2;
	font-size:10.0pt;
	font-weight:700;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl82
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto gray-125;
	background:#D9D9D9;
	font-size:9.0pt;
	mso-font-charset:134;
	border-left:.5pt solid windowtext;
	border-top:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;}
.xl83
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl84
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	mso-pattern:auto none;
	background:#FFFF00;
	font-size:10.0pt;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl85
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;}
.xl86
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;
	font-size:10.0pt;
	mso-font-charset:134;}
.xl89
	{mso-style-parent:style0;
	mso-pattern:auto none;
	background:#FFFF00;
	mso-font-charset:134;
	border:.5pt solid windowtext;}
.xl90
	{mso-style-parent:style63;
	vertical-align:middle;
	color:#800080;
	text-decoration:underline;
	text-underline-style:single;
	mso-font-charset:134;}


------=_NextPart_482017781dbb413399e58e9338ebfea1
Content-Location: file:///C:/ksoet/Borank.files/filelist.xml
Content-Transfer-Encoding: quoted-printable
Content-Type: text/xml; charset="us-ascii"

<xml xmlns:o=3D"urn:schemas-microsoft-com:office:office">
 <o:MainFile href=3D"../Borank"/>
 <o:File href=3D"js.js"/>
 <o:File href=3D"tabstrip.htm"/>
 <o:File href=3D"sheet001.htm"/>
 <o:File href=3D"sheet002.htm"/>
 <o:File href=3D"stylesheet.css"/>
 <o:File href=3D"filelist.xml"/>
</xml>
------=_NextPart_482017781dbb413399e58e9338ebfea1--