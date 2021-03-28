/*=================================================================================
 [No Copy]
=================================================================================*/

function clickIE()
{
	if (document.all)
	{
		(message);return false;
	}
}

function clickNS(e)
{
	if (document.layers||(document.getElementById&&!document.all))
	{
		if (e.which==2||e.which==3)
		{
			(message);return false;
		}
	}
}

if (document.layers) 
{
	document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;
}
else
{
	document.onmouseup=clickNS;document.oncontextmenu=clickIE;
}

document.oncontextmenu=new Function("return false")

/*===============================================================================*/

/*=================================================================================
 [Show/Hide]
=================================================================================*/

var hideid="main";

function showhideit(showid)
{
	if (hideid!=showid)
	{
		show=document.getElementById(showid).style;
		hide=document.getElementById(hideid).style;
		show.display="";
		hide.display="none";
		hideid = showid;
	}
}

/*===============================================================================*/

/*=================================================================================
 [SliteIT]
=================================================================================*/

function slideIT(id) {
	$(id).slideToggle("slow");
}

/*===============================================================================*/

/*=================================================================================
 [RefreshSWF]
=================================================================================*/

function refreshSWF(id, holder) {
	var clone = $(id).clone(true);
	$(id).remove();
	$(holder).html(clone);
}

/*===============================================================================*/