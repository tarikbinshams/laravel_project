<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Download</title>
  </head>
  <body>
      <h2 style="text-align: center;">All Completed Order</h2>
   <table border="1" class="table table-striped"> 
      <tr>
        <td> Order ID </td>
        <td> Book ID </td>
        <td> Book Name </td>
        <td> Author Name </td>
        <td> Category </td>
        <td> Price </td>
        <td> Buyer Email </td>
        <td> Seller Email </td>
      </tr>
      @foreach($user as $u)
      <tr>
        <td>  {{$u->orderid}} </td>
        <td>  {{$u->bid}} </td>
        <td>  {{$u->bname}} </td>
        <td>  {{$u->aname}} </td>
        <td>  {{$u->category}} </td>
        <td>  {{$u->price}} </td>
        <td>  {{$u->bemail}} </td>
        <td>  {{$u->semail}} </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>