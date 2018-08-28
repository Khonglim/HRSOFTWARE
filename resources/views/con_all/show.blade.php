
@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">
        
                <input type="radio" name="r1" id="r1" value="N" checked="checked" onclick='this.checked = false;'>N</input>
                <input type="radio" name="r1" id="r1" value="Y" onclick='this.checked = false;'>Y</input>

    </div>
  </div>

    @endsection
