@extends('layouts.default')

@section('content')
    {{-- Form::open() --}}
    {{-- Form::open(array('route' => array('user.update', $user->id), 'class'=>'form', 'method'=>'delete')) --}}   
    {{-- Form::open(array('route' => array('user.update', $user->id), 'class'=>'form')) --}}  
    {{ Form::model($user,(array('route' => array('user.update', $user->id), 'class'=>'form','method'=>'Put'))) }}  
        <?php //model $user to populate the whole form// although method=put but still in html its post?>
        <?php //echo 'crap'; // Form::open($options); //open a form html //$options= array('url' => 'foo/bar') //double {{}} not use escape for html?>
        <li>
              {{ Form::label('email', 'Your email') }} <!-- <label/> tag -->
              {{-- Form::text('email'); --}} <!-- name=email id=email type=text-->
              {{-- Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'email here...')); --}} <!-- name=email id=email type=email-->
              {{ Form::email('email',null, array('class'=>'form-control', 'placeholder'=>'email here...')); }}
        </li>    
         <li>
              {{ Form::label('email', 'Your Password') }} 
              {{ Form::password('password'); }} 
         </li>    
         <li>
              {{ Form::label('permission', 'Your Permission') }} 
              {{-- Form::select('permission', array('1'=>'Webmaster', '2'=>'Editor', '3'=>'Member'), 2) --}} 
              {{ Form::select('permission', array('1'=>'Webmaster', '2'=>'Editor', '3'=>'Member')) }}
              <?php //model no default value 2 since its populated from database?>
         </li> 
          <li>
              {{-- Form::submit('Save') --}}
              {{ Form::submit('Save', array('name'=>'Save', 'class'=>'save-me')) }}
       
              <!-- <input type="submit" name="save" title="save" value="Save">  -->
              <p>craaaaaaaaaaaaaaaaaaaaaap </p>
              
         </li>  
    {{ Form::close() }}
    
         <?php // Form::submit($value) button submit ?>
 @stop