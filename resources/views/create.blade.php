@extends('layout')

@section('content')
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
    <h1>create</h1>

<div>
  <a href="{{route('imprimir')}}">Imprimir PDF</a>
</div>

<form action= ""method ="post">
<p>ข้าพเจ้า : <select name="cars">
    <option value="นาย">นาย</option>    
    <option value="นางสาว">นางสาว</option>
    <option value="นาง">นาง</option>
  </select><input type="text"name="user">
  รหัสนักศึษา : <input type="password"name="password">  <br><br>
  คณะ : <input type="คณะ"name="คณะ"> สาขา : <input type="คณะ"name="คณะ"><br><br>
  โทรศัพท์ : <input type="คณะ"name="คณะ">
  <input type="radio" name="gender" value="male" checked> ระดับปริญญาตรี   
  <input type="radio" name="gender" value="female"> ระดับบัณฑิตศึกษา  
  <br><br>
  มีความประสงค์ :<br>
  <textarea rows="4" cols="50">
</textarea><br>
จึงเรียนมาเพื่อททราบ<br>
  <input type="radio" name="gender" value="male" checked> บัตรสูญหาย<br>
  <input type="radio" name="gender" value="female"> บัตรชำรุด<br>
  <input type="radio" name="gender" value="female"> เปลี่ยนรหัสนักศึกษา<br>
  <input type="radio" name="gender" value="female"> บัตรนักศึกษาชั่วคราวหมดอายุ<br>
  <input type="radio" name="gender" value="other"> อื่น ๆ <br>
  <table style="width:100%">
  <tr>
    <th>ความคิดเห็นเจ้าหน้าที่ทะเบียนกลาง</th>
    <th>นักศึกษารับเอกสาร</th> 
   
  </tr>
  <tr>
    <td><textarea rows="3" cols="50">
</textarea></td>
    <td>ได้รับเอกสารเรียบร้อยแล้ว<br>
    <input type="radio" name="gender" value="female"> รับเอกสารเอง<br>
    <input type="radio" name="gender" value="female"> รับเอกสารเอง<br>
    </td>
  </tr>
 </table>


</p>
<button type="submit">Send</button>


</form>@endsection