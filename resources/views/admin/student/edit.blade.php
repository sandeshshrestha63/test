<!DOCTYPE html>
<html>
<head>
	<title>edit Student </title>
</head>
<body>
	<form method="POST" action="{{route('students.update',[$student->id])}}">
		@csrf
		@method('put')
		<input type="text" name="first_name" value="{{old('first_name',$student->first_name ?? '')}}"><br>
		<input type="text" name="middle_name" value="{{old('middle_name',$student->middle_name ?? '')}}"><br>
		<input type="text" name="last_name" value="{{old('last_name',$student->last_name ?? '')}}"><br>
		<input type="text" name="address" value="{{old('address',$student->address ?? '')}}"><br>
		<input type="text" name="city" value="{{old('city',$student->city ?? '')}}"><br>
		<input type="text" name="email" value="{{old('email',$student->email ?? '')}}"><br>
		<input type="text" name="phone" value="{{old('phone',$student->phone ?? '')}}"><br>
		<input type="text" name="parents_name" value="{{old('parents_name',$student->parents_name ?? '')}}"><br>
		<button type="submit">Update</button>

	</form>
</body>
</html>