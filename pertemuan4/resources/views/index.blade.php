<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Index</h1>
    <form action="/" method="post">
      @csrf
      <input type="text" name="angka[]" min="1" required>
      <input type="text" name="angka[]" min="1" required>
      <input type="text" name="angka[]" min="1" required>
      <input type="text" name="angka[]" min="1" required>
      <input type="text" name="angka[]" min="1" required>
      <input type="submit" name="calculate"></input>
    </form>

    @if(isset($prime))
      <ul>
        <li>Min : {{$min}}</li>
        <li>Max : {{$max}}</li>
        <li>Sum : {{$sum}}</li>
        <li>Count : {{$count+1}}</li>
        <li>Prime : {{$primecount}}
          <ul>
          @foreach($prime as $num)
            <li>{{$num}}</li>
          @endforeach
          </ul>
        </li>
      </ul>
    @endif

    <a href={{route('calculator')}}>Calculator</a>

  </body>
</html>
