@extends('layouts.default')

@section('content')
    
    {{ Form::model($user,(array('route' => array('user.update', $user->id), 'class'=>'form','method'=>'Put'))) }}  
        <?php //model $user to populate the whole form// although method=put but still in html its post?>
        <?php //echo 'crap'; // Form::open($options); //open a form html //$options= array('url' => 'foo/bar') //double {{}} not use escape for html?>
        <li>
              {{ Form::label('email', 'Your email') }} <!-- <label/> tag -->
              {{ Form::email('email',null, array('class'=>'form-control', 'placeholder'=>'email here...')); }}
                {{ $errors->first('email') }}
        </li>    
         <li>
              {{ Form::label('email', 'Your Password') }} 
              {{ Form::password('password'); }} 
              {{ $errors->first('password') }}
         </li>    
         <li>
              {{ Form::label('active', 'Active??') }} 
              {{ Form::checkbox('active'); }} 
              {{ $errors->first('active') }}
         </li>
         <li>
              {{ Form::label('permission'   , 'Your Permission') }} 
              {{ Form::select('permission', array('1'=>'Webmaster', '2'=>'Editor', '3'=>'Member')) }}
              {{ $errors->first('permission') }}
         </li> 
          <li>
              {{ Form::submit('Save', array('name'=>'Save', 'class'=>'save-me')) }}
              <!-- <input type="submit" name="save" title="save" value="Save">  -->
         </li>  
    {{ Form::close() }}
    
         <?php // Form::submit($value) button submit ?>
 @stop