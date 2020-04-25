<div id="printpage">  
<img alt="testing" src="print.php?text=testing" />
</div>  

<a href="#" onclick="printdiv()">Print</a>
<script>
function printdiv()
{
    //your print div data
    //alert(document.getElementById("printpage").innerHTML);
    var newstr=document.getElementById("printpage").innerHTML;

    var header='<header><div align="center"><h3 style="color:#EB5005"> Your HEader </h3></div><br></header><hr><br>'

    var footer ="Your Footer";

    //You can set height width over here
    var popupWin = window.open('', '_blank', 'width=1100,height=600');
    popupWin.document.open();
    popupWin.document.write('<html> <body onload="window.print()">'+ newstr + '</html>');
    popupWin.document.close(); 
    return false;
}
</script>
