<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<title>Live Demo</title>
<style type="text/css">
<!--
input[type="text"] { text-align : center; font-weight : bold; color : #365d95; }
// -->
</style>
<script type="text/javascript">
<!--
var counter = 0;
var getTotal = function() {
   if ( isNaN( this.value )) {
      this.value = this.value.replace( /[a-zA-Z\s]+/i, "" );
      alert( "Please enter a valid amount!" );
      this.focus(); 
      return false;
   } var index = this.id.substr( this.id.length - 1 );
     var vat = (( vat = document.all.tax ) ? vat : document.getElementById( "tax" ));
     var totA = (( totA = document.all.gtotal ) ? totA : document.getElementById( "gtotal"));
     var qty = (( qty = document.all[ "quantity_" + index ] ) ? qty : document.getElementById( "quantity_" + index ));
     var rte = (( rte = document.all[ "rate_" + index ] ) ? rte : document.getElementById( "rate_" + index ));
     var tot = (( tot = document.all[ "total_" + index ] ) ? tot : document.getElementById( "total_" + index ));
   if (( qty.value ) && ( rte.value )) { 
      tot.value = parseFloat(( this.value * 1 ) * qty.value * 1 ); 
     var tot1 = parseFloat((( tot1 = document.all.total_0 ) ? tot1 : document.getElementById( "total_0")).value );
     var tot2 = parseFloat((( tot2 = document.all.total_1 ) ? tot2 : document.getElementById( "total_1")).value );
   vat.value = (((( tot1 ) ? tot1 : 0 ) + (( tot2 ) ? tot2 : 0 )) * parseFloat( vat.defaultValue ) / 100 );
   totA.value = ((( tot1 ) ? tot1 : 0 ) + (( tot2 ) ? tot2 : 0 ) + parseFloat( vat.value ))
   }
};
var calculate = function() {
var fields = [ "rate", "quantity" ];
var forms;
var element;
var eLen = fields.length;
   if ( document.all ) {
      forms = document.form;
   } else {
      forms = document.getElementById("form");      
   } do {
      for ( var i = 0; i < eLen; i++ ) {
      element = forms[ fields[ i ] + "_" + counter ].onchange = getTotal;
      } counter++; 
   } while( element );
   calculate();
}

window.onload = calculate;
// --> 
</script>
</head>
<body>
<form id="form" name="form" action="#" onsubmit="return false;">
<table id="table_0" frame="box" rules="rows" border="1" style="width : auto;" cellpadding="6" cellspacing="3">
<tr>
<th><em>service</em></th>
<th><em>reading</em></th>
<!--<th><em>birr/reading&nbsp;</em></th>-->

<th><em>total</em></th>
</tr>
<tr>
<td>Product 1</td>
<td><input type="text" name="rate_0" id="rate_0" size="3" value="" maxlength="3"></td>
<td><input type="text" name="quantity_0" id="quantity_0" size="3" value="" maxlength="3"></td>
<td><input type="text" name="total_0" id="total_0" size="3" value="" maxlength="3"></td>
</tr>
<!--<tr>
<td>Product 2</td>
<td><input type="text" name="rate_1" id="rate_1" size="3" value="" maxlength="3"></td>
<td><input type="text" name="quantity_1" id="quantity_1" size="3" value="" maxlength="3"></td>
<td><input type="text" name="total_1" id="total_1" size="3" value="" maxlength="3"></td>
</tr>
<tr>
<td colspan="4" align="right">Tax:&nbsp;<input type="text" name="tax" id="tax" size="4" value="10%" maxlength="4"> Based on a 10% rate</td></tr>
<tr>
<td colspan="4" align="right">Grand Total:&nbsp;<input type="text" name="gtotal" id="gtotal" size="6" value="" maxlength="6"> VAT included</td></tr>-->
</table>
</form>
</div>
</body>
</html>