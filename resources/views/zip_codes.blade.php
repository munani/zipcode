<form action="{{url('zip_codes')}}" method="get" accept-charset="utf-8">
  
  <label for="City">City</label>
   <br>
  <input type="City" name="City" value="" id="City">
  <br>
  <label for="State">State</label>
   <br>
  <input type="State" name="State" value="" id="State">
   <br>
  <label for="Zip">Zip</label>
   <br>
  <input type="Zip" name="Zip" value="" id="Zip">
  <br>
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="">

     <p><input type="submit" value="search"></p>
</form>

<table border="0 "cellspacing="5"  cellpadding="5">

     <tr>
     	<th> City</th>
     	<th> State</th>
     	<th> Zip</th>
     </tr>
     
     	@foreach ($zip_codes as $zip_code)
     <tr>
     	<td>{{$Zip_code->City}}</td>
     	<td>{{$Zip_code->State}} </td>
     	<td>{{$Zip_code->Zip}} </td>
     </tr>

   @end foreach

</table>