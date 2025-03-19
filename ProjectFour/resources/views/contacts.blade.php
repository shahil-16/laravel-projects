<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>Time: {{ time() }}</h2> 
    

    @if($nm == 'Shahil')
  <h2>Hello {{$nm}}</h2>
 @endif 

@if($nm == 'Shhill')
  <h2>Helllo {{$nm}}</h2>
 @else 
  <h2>Hello Guest</h2>
 @endif 

   @if($nm == 'Sonam')
  <h2>Helllo {{$nm}}</h2>
 @elseif($nm == 'Rahul')
  <h2>Hello {{$nm}}</h2>
 @else 
  <h2>Hello Guest</h2>
 @endif  

 @unless($nm == 'Shhill')
  <h2>You are not Admin</h2>
 @endunless 

 @isset($nm)
  <h2>{{$nm}}</h2>
 @endisset 

@empty($nm )
  <h2>Hello</h2>     
 @endempty 

  @production
  <h2>Production Code</h2>
 @endproduction 


  @env('local')
  <h2>Local Environment</h2>     
 @endenv 

  @env(['local', 'staging'])
  <h2>Local or Staging Environment</h2>     
 @endenv 

 @switch(2)
  @case(1)
   <h2>First</h2>
   @break
  @case(2)
   <h2>Second</h2>
   @break
  @case(3)
   <h2>Thrid</h2>
   @break
  @default
   <h2>Any</h2>
 @endswitch 

 @for($i = 0; $i<4; $i++)
  <h2>{{$i}}</h2>
 @endfor 

 <!-- @foreach($students as $stu)
  <h2>{{$stu}}</h2>
 @endforeach   -->
<!-- 
 @forelse($students as $stu)
  <h2>{{$stu}}</h2>
 @empty
  <h2>No Students</h2>
 @endforelse  -->

 
 <!-- @foreach ($students as $stu)
  @if ($stu == 'Raj')
   @break      
  @endif
  <h2>{{$stu}}</h2>    
 @endforeach  -->

 <!-- @foreach ($students as $stu)
  @if ($stu == 'Raj')
   @continue 
  @endif
  <h2>{{$stu}}</h2>    
 @endforeach   -->


 

<!-- @foreach ($students as $stu)
 @break($stu == 'Raj')
 <h2>{{$stu}}</h2>
 @endforeach -->

  <!-- @foreach ($students as $stu)
  @continue($stu == 'Raj')      
  <h2>{{$stu}}</h2>    
 @endforeach   -->


   @foreach($students as $stu)
  <h2>{{$stu}}</h2>
  @if ($loop->first)
   <h3>This is First Loop</h3>      
  @endif
  @if ($loop->last)
   <h3>This is Last Loop</h3>      
  @endif
 @endforeach  

</body>
</html>