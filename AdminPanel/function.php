<?php

function connectioninfo()
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("construction",$con);
	return $con;
}
function executequery($qry)
{
	$status="";
	$rs=mysql_query($qry,connectioninfo());
	if(!$rs)
	{
		$status.="Error".mysql_error();
	}
	else
	{
		$status.="Success";
		
	}
	return $status;
}
function readrecord($qry)
{
	$rs=mysql_query($qry,connectioninfo());
	return $rs;
}
function galleryinfo($qry,$pagename,$coltext,$colindex)
{
	$status="";
	$rs=readrecord($qry);
	$col=mysql_num_fields($rs);
	while(mysql_fetch_array($rs))
	{
		$status="<div><center>< /br>";
	{
		for($p=0;$p<$col;$p++)
		{
			$status="$row[$p]";
		}
		$status.="<a href='$pagename?id=row[$colindex]'>$coltext</a></ br>";
	}
	$status.="</center></div>";
}
	return $rs;
}
/* function tableinfo($qry)
{
	$status="";
	$rs=readrecord($qry);
	if(mysql_num_rows($rs)>0)
	{
		$status.="<table border='1'>";
		$col=mysql_num_fields($rs);
		$status.="<tr>";
		for($p=0;$p<$col;$p++)
		{
			$status.="<th>".mysql_num_fields($rs,$p)."</th>";
		}
		$status.="</tr>";
		while(mysql_fetch_array($rs)>0)
		{
			$status.="<tr>";
			for($p=0;$p<$col;$p++)
			{
			$status.="<td>"$row[$p]"</td>";	
			}
			$status.="</tr>";
		}
		$status.="</table>";
	}
			

	else
	{
		$status.="sorry record not found";
	}
} */
/* function tableinfo_select($qry)
	{
		$status="";
		$rs=readrecord($qry);
		if(mysql_num_rows($rs)>0)
		{
			$status.="<table border='1'>";
			$col=mysql_num_fields($rs);
			
			for($p=0;$p<$col;$p++)
			{
				$status.="<th>mysql_num_fields($rs,$p).</th>";
			}
		}
		$status.="</table>";
		}	
		else
		{
	$status.="sorry record not found";
		}	
	} */
?>


















