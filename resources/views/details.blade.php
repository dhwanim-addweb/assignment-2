<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<table align="center" border="1">
      <tr>
        <th colspan="2">User Credentials</th>
      </tr>
      <tr>
        <td>ID:</td>
        <td>{{Auth::user()->id}}</td>
      </tr>
      <tr>
        <td>Name:</td>
        <td>{{Auth::user()->name}}</td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>{{Auth::user()->email}}</td>
      </tr>
</table>

  </body>
</html>
