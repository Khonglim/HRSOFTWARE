@extends('layouts.test')
@section('content')
<style>
body {

  font-size: 15px;
}
</style>
<?php $x=0; $h=0;  $d=0;  $i=0;  $s=0;   $c=0; $r=1; $v=1;?>
<?php $resultArray = array(); ?>
@foreach($_POST as $choice => $answer)             
@if($choice != '_token' && $choice != 'name' && $choice != 'lastname' && $choice != 'id_personal')
  <?php array_push($resultArray,$answer); ?>
@endif 

@endforeach
@for ($j =0 ; $j <=44; $j+=4)
<?php $d+=$resultArray[$j] ?> 
@endfor

@for ($k=1 ; $k <=45; $k+=4)
<?php $i+=$resultArray[$k] ?> 
@endfor

@for ($l=2 ; $l <=46; $l+=4)
<?php $s+=$resultArray[$l] ?> 
@endfor

@for ($m=3 ; $m <=47; $m+=4)
<?php $c+=$resultArray[$m] ?> 
@endfor



<div class="container">
    <br>
    
        <center>
            <div class="panel panel-success" style="width:100%">
                <div class="panel-heading">การทดสอบบุคลิกภาพ</div>
                <div class="panel-body">
                    {{Form::open(['url'=>'disc',])}}
                    {{ csrf_field() }}
                    @isset($_POST['id_personal'])
                   
                    <input type="text" name="id_personal" value="{{$id_personal= $_POST['id_personal']}}" hidden/>
              
                    @endisset
  
                    @isset($_POST['name'])
                    <label> ชื่อ:: {{$name= $_POST['name']}}</label> 
                    <input type="text" name="name" value="{{$name= $_POST['name']}}" hidden/>
              
                    @endisset
             
                    @isset($_POST['lastname'])
                    <label> นามสกุล::{{$lastname= $_POST['lastname']}}</label> 
                    <input type="text" name="lastname" value="{{$lastname= $_POST['lastname']}}" hidden/>
                   
                    @endisset
  
  
                      <h3>คะแนนที่คุณเลือก:</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="text-align:center">D</th>
                          <th style="text-align:center">I</th>
                          <th style="text-align:center">S</th>
                          <th style="text-align:center">C</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $col=4; $u=0;?>   
                    @foreach($_POST as $choice => $answer) 
                    @if($choice != '_token' && $choice != 'name' && $choice != 'lastname' && $choice != 'id_personal')
                               @if($u==0) 
                                    <?php echo "<tr align=center>"; ?>
                                 @endif
                           <?php $u++; ?>
                                       @if($u <=  $col) 
                                       <input type="hidden" name="choice{{$r++}}"  value="{{$answer}}" />
                                               <td>ข้อ:{{$v++}} {{$answer}}  คะแนน  </td>   
                                      @endif
                                             @if($u==$col)
                                                    <?php $u=0; ?>
                                    <?php echo "</tr>"; ?>
                              @endif
                         @endif
                       @endforeach
                         
                       <tr>
                        <td align ="center">
                         รวมคะแนน "D" {{$d}} คะแนน
                         <input type="text" name="scoreD" value="{{$d}}" hidden/>
                        </td>
                        <td align = "center">
                           รวมคะแนน "I" {{$i}} คะแนน
                           <input type="text" name="scoreI" value="{{$i}}" hidden />
                        </td>
                        <td align="center">
                           รวมคะแนน "S" {{$s}} คะแนน
                           <input type="text" name="scoreS" value="{{$s}}" hidden/>
                        </td>
                        <td align="center">
                           รวมคะแนน "C" {{$c}} คะแนน
                           <input type="text" name="scoreC" value="{{$c}}" hidden/>
                        </td>
                      </tr>
                      </tbody>
                    
                    </table>
  
                    <h2>สรุปผล:</h2>
                    <ul class="list-group">
                      <li class="list-group-item">
                        @if ( ($i >=30) && ($s >=30) && ($d<30) && ($c < 30 ) )
                             @if ( $i>=$s || $i<=$s )
                             IS or SI
                              RELATER: Advisor/Merciful/Counselor
                                 Warm, sympathetic, understanding; good listener, stable, 
                                 dependable; won’t force ideas on others; criticism of his/her work a personal affront; 
                                 can overuse the indirect approach; goal is maintaining friendships; fears social rejection.
                                 <input type="text" name="meaning" value="IS or SI
                                 RELATER: Advisor/Merciful/Counselor
                                    Warm, sympathetic, understanding; good listener, stable, 
                                    dependable; won’t force ideas on others; criticism of his/her work a personal affront; 
                                    can overuse the indirect approach; goal is maintaining friendships; fears social rejection." hidden/>
                             @endif 
  
                            
  
                        @endif
                         
  
                        @if ( ($i >=30) && ($s >=30) && ($c >=30) )
                           @if ( ($s>=$c && $s>=$i && $c>=$i) ||  ($s>=$i && $s>=$c && $i>=$c) )
                        SCI or SIC
                        SUPPORTER: Advocate/Peacemaker/Agent
                        Can be very detail-oriented; moderate, thorough, dependable; steady, sociable, independent, individualistic; 
                        tends to support underdog; goal is acceptance from other; fear dissension, conflict.
  
                        <input type="text" name="meaning" value=" SCI or SIC
                        SUPPORTER: Advocate/Peacemaker/Agent
                        Can be very detail-oriented; moderate, thorough, dependable; steady, sociable, independent, individualistic; 
                        tends to support underdog; goal is acceptance from other; fear dissension, conflict." hidden/>
  
                           @endif 
                        @endif 
  
                     @if ( ($i >=30)  && ($c >=30) && ($s<30) && ($d < 30 ) )
                        @if ( ($i>=$c) ||  ($c>=$i) )
                        IC or CI
                     PROMOTER/ANALYZER: Assessor/Teacher/Appraiser
                    Outgoing, at home with strangers, develops friends easily; 
                    promotes projects of others and his/her own; seeks freedom from control; 
                    goal is approval, popularity; fears loss of social recognition.
                    <input type="text" name="meaning" value=" IC or CI
                    PROMOTER/ANALYZER: Assessor/Teacher/Appraiser
                   Outgoing, at home with strangers, develops friends easily; 
                   promotes projects of others and his/her own; seeks freedom from control; 
                   goal is approval, popularity; fears loss of social recognition." hidden/>
                        @endif 
                     @endif 
  
                @if ( ($d >=30)  && ($s >=30) && ($c >=30) && ($i<30))
                    @if ($d>=$s && $d>=$c && $s>=$c)
                     DS; DSC; SD
                     CONDUCTOR/COORDINATOR: Attainer/Achiever/Perseveres
                     Objective, analytical, determined, task-oriented; independent, 
                     questioning, practical; may appear blunt and non-demonstrative; 
                     goal is personal accomplishment (sometimes at expense of the group); 
                     fears those with different or inferior work standards.
                     <input type="text" name="meaning" value=" DS; DSC; SD
                     CONDUCTOR/COORDINATOR: Attainer/Achiever/Perseveres
                     Objective, analytical, determined, task-oriented; independent, 
                     questioning, practical; may appear blunt and non-demonstrative; 
                     goal is personal accomplishment (sometimes at expense of the group); 
                     fears those with different or inferior work standards." hidden/>
                     @endif 
                  @endif 
                  @if ( ($d >=30)  && ($s >=30) && ($c<30) && ($i<30))
                  @if ( ($d>=$s) ||  ($s>=$d) )
                  DS; DSC; SD
                  CONDUCTOR/COORDINATOR: Attainer/Achiever/Perseveres
                  Objective, analytical, determined, task-oriented; independent, 
                  questioning, practical; may appear blunt and non-demonstrative; 
                  goal is personal accomplishment (sometimes at expense of the group); 
                  fears those with different or inferior work standards.
                  <input type="text" name="meaning" value="  DS; DSC; SD
                  CONDUCTOR/COORDINATOR: Attainer/Achiever/Perseveres
                  Objective, analytical, determined, task-oriented; independent, 
                  questioning, practical; may appear blunt and non-demonstrative; 
                  goal is personal accomplishment (sometimes at expense of the group); 
                  fears those with different or inferior work standards." hidden/>
                  @endif 
               @endif 
  
  
                @if ( ($d >=30)  && ($i >=30) && ($s<30) && ($c < 30 ) )
                  @if ( ($d>$i)  )
                  DI
                  PERSUADER: Concluder/Doer/Gets results
                  Forceful, direct, individualistio; can be impatient, competitive; 
                  good leadership abilities; high standards, critical when standards 
                  not met; goal is dominance and independence; fears slowness or being 
                  seen as too jovial.
                  <input type="text" name="meaning" value=" DI
                  PERSUADER: Concluder/Doer/Gets results
                  Forceful, direct, individualistio; can be impatient, competitive; 
                  good leadership abilities; high standards, critical when standards 
                  not met; goal is dominance and independence; fears slowness or being 
                  seen as too jovial." hidden/>
                   @endif 
                @endif 
  
                
                @if (($i >=30) && (($d <30)) && (($s <30)) && (($c <30)) )
  
                I PROMOTER: Convincer/Persuader/Promoter
                Enthusiastic, optimistic, articulate in communication; 
                can become careless, inconsistent and disorganized, 
                but tries to look good and please others; goal is social 
                approval and prestige; fears loss of social approval, conflict.
  
                <input type="text" name="meaning" value="I PROMOTER: Convincer/Persuader/Promoter
                Enthusiastic, optimistic, articulate in communication; 
                can become careless, inconsistent and disorganized, 
                but tries to look good and please others; goal is social 
                approval and prestige; fears loss of social approval, conflict." hidden/>
                
              @endif 
  
              @if ( ($d >=30)  && ($c >=30) && ($s>=30) && ($i<30) )
                  @if ( ($d>=$c) ||  ($c>=$d) || ($d>=$c && $d>=$s && $c>=$s) )
  
                  DC; DCS; CD
                  IMPLEMENTTOR/CONDUCTOR: Designer/Administrator/Creator
                  Sensitive to problems, creative in finding solutions; high in foresight, 
                  often quite intelligent; can overuse bluntness and criticism; 
                  bored with routine, unique solutions; fears not being influential.
                  
                  <input type="text" name="meaning" value=" DC; DCS; CD
                  IMPLEMENTTOR/CONDUCTOR: Designer/Administrator/Creator
                  Sensitive to problems, creative in finding solutions; high in foresight, 
                  often quite intelligent; can overuse bluntness and criticism; 
                  bored with routine, unique solutions; fears not being influential." hidden/>
                  
                   @endif 
                @endif 
  
                @if ( ($d >=30)  && ($c >=30) && ($s<30) && ($i<30) )
                @if ( ($d>=$c) ||  ($c>=$d) )
  
                DC; DCS; CD
                IMPLEMENTTOR/CONDUCTOR: Designer/Administrator/Creator
                Sensitive to problems, creative in finding solutions; high in foresight, 
                often quite intelligent; can overuse bluntness and criticism; 
                bored with routine, unique solutions; fears not being influential.
  
                <input type="text" name="meaning" value=" DC; DCS; CD
                IMPLEMENTTOR/CONDUCTOR: Designer/Administrator/Creator
                Sensitive to problems, creative in finding solutions; high in foresight, 
                often quite intelligent; can overuse bluntness and criticism; 
                bored with routine, unique solutions; fears not being influential." hidden/>
  
                
                 @endif 
              @endif 
  
              
  
         
                @if (($d >=30) && (($i <30)) && (($s <30)) && (($c <30)) )
  
                D CONDUCTOR: Establisher/Visionary/Developer
                High ego strength, high standards; approaches issues alone rather than drawing others into the process; 
                can be manipulative, controlling; has vision of “big picture”; very direct, 
                forceful; goal is new challenges, opportunities; fears loss of control, lack challenge.
  
                 <input type="text" name="meaning" value=" 
                 D CONDUCTOR: Establisher/Visionary/Developer
                 High ego strength, high standards; approaches issues alone rather than drawing others into the process; 
                 can be manipulative, controlling; has vision of “big picture”; very direct, 
                 forceful; goal is new challenges, opportunities; fears loss of control, lack challenge." hidden/>
  
  
              @endif 
  
              @if ( ($d >=30)  && ($i >=30) && ($s<30) && ($c < 30 ) )
              @if ( ($d==$i)  )
              D=I
              PERSUADER: Influencer/Implement/Inspires
              High energy, optimistic, aggressive, confident; goal-minded, harnesses people to accomplish goals; 
              can be impatient having little time for details; loses interest once challenge is gone; goal is control of 
              environment; fears losing, failing, loss of prestige.
              
              <input type="text" name="meaning" value="  D=I
              PERSUADER: Influencer/Implement/Inspires
              High energy, optimistic, aggressive, confident; goal-minded, harnesses people to accomplish goals; 
              can be impatient having little time for details; loses interest once challenge is gone; goal is control of 
              environment; fears losing, failing, loss of prestige." hidden/>
               @endif 
            @endif 
  
            
  
                @if ( ($d >=30)  && ($c >=30) && ($s>=30) && ($i < 30) )
                @if (($s>=$d && $s>=$d && $d>=$c) || ($s>=$c && $s>=$d && $c>=$d)  )
  
                SDC; SCD
                COORDINATOR/SUPPORT: Inquirer/Investigator/Consistent
                Patient, controlled, enjoys digging for clues and facts; 
                easy-going and amiable; consistent, loyal, 
                accommodating; slow to take in itiative, 
                doesn’t adapt quickly to change; holds
                 grudges, internalizes conflict; goal is maintaining clear systems; 
                 fears change, disorganization.
                 <input type="text" name="meaning" value=" 
                   SDC; SCD
  COORDINATOR/SUPPORT: Inquirer/Investigator/Consistent
  Patient, controlled, enjoys digging for clues and facts; 
  easy-going and amiable; consistent, loyal, 
  accommodating; slow to take in itiative, 
  doesn’t adapt quickly to change; holds
   grudges, internalizes conflict; goal is maintaining clear systems; 
   fears change, disorganization." hidden/>
  
                 @endif 
              @endif 
              @if (($c >=30) && ($i <30) && ($s <30) && ($d <30))
  
             C ANALYZER: Logical Thinker/Analytical/Objective
             Practical, proper, discrete, accurate; self-evaluating, 
             critical of self and others; enjoys detail and logic; makes 
             decisions slowly from logic rather than emotion; can over-analyze, 
             be hurt easily; goal is to develop control, correctness; fears criticism, 
             ridicule.
  
             <input type="text" name="meaning" value=" 
             C ANALYZER: Logical Thinker/Analytical/Objective
             Practical, proper, discrete, accurate; self-evaluating, 
             critical of self and others; enjoys detail and logic; makes 
             decisions slowly from logic rather than emotion; can over-analyze, 
             be hurt easily; goal is to develop control, correctness; fears criticism, 
             ridicule." hidden/>
            @endif 
  
            @if ( ($c >=30)  && ($i >=30) && ($s>=30) &&  ($d<30) )
            @if (($c>=$i && $c>=$s && $i>=$s) || ($c>=$s && $c>=$i && $s>=$i)  
                 || ($i>=$s && $i>=$c && $s>=$c) || ($i>=$c && $i>=$s && $c>=$s))
             CIS; CSI; ISC; ICS
              COORDINATOR/ANALYZER: Practitioner/Realist/Steadfast
              Results-oriented, verbally fluent, loyal; friendly, enthusiastic, informal, talkative; 
              may worry too much about what others think; 
              can intellectualize and become restless and 
              impatient; goal is to accomplish results through others; 
              fears rejection, loss of security.
  
              <input type="text" name="meaning" value=" 
              CIS; CSI; ISC; ICS
              COORDINATOR/ANALYZER: Practitioner/Realist/Steadfast
              Results-oriented, verbally fluent, loyal; friendly, enthusiastic, informal, talkative; 
              may worry too much about what others think; 
              can intellectualize and become restless and 
              impatient; goal is to accomplish results through others; 
              fears rejection, loss of security." hidden/>
             @endif 
          @endif   
  
          @if ( ($c >=30)  && ($s >=30) && ($d<30) && ($i < 30 ) )
          @if ($c>=$s  || $c<=$s)
          CS; SC
          COORDINATOR: Precisionist/Traditionalist/Perfectionist
                 Orderly, systematic, precise, attentive to detail; tactful, highly diplomatic, 
             extremely conscientious; can become bogged down in details, dislikes sudden change; 
              prefer protected, secure environment; goal is security; fears antagonism.
  
              <input type="text" name="meaning" value=" 
              CS; SC
              COORDINATOR: Precisionist/Traditionalist/Perfectionist
                     Orderly, systematic, precise, attentive to detail; tactful, highly diplomatic, 
                 extremely conscientious; can become bogged down in details, dislikes sudden change; 
                  prefer protected, secure environment; goal is security; fears antagonism." hidden/>
  
           @endif 
        @endif 
   
  
  
          @if ( ($i >=30)  && ($d >=30) && ($s<30) && ($c < 30 ) )
          @if ($i>$d  )
          ID
          COORDINATOR: Precisionist/Traditionalist/Perfectionist
          Orderly, systematic, precise, attentive to detail; tactful, highly diplomatic, 
          extremely conscientious; can become bogged down in details, dislikes sudden change; 
          prefer protected, secure environment; goal is security; fears antagonism.
          <input type="text" name="meaning" value=" 
          ID
          COORDINATOR: Precisionist/Traditionalist/Perfectionist
          Orderly, systematic, precise, attentive to detail; tactful, highly diplomatic, 
          extremely conscientious; can become bogged down in details, dislikes sudden change; 
          prefer protected, secure environment; goal is security; fears antagonism." hidden/>
  
           @endif 
        @endif 
  
        @if (($s >=30) && (($i <30)) && (($c <30)) && (($d <30)) )
  
        C ANALYZER: Logical Thinker/Analytical/Objective
        Practical, proper, discrete, accurate; self-evaluating, 
        critical of self and others; enjoys detail and logic; makes 
        decisions slowly from logic rather than emotion; can over-analyze, 
        be hurt easily; goal is to develop control, correctness; fears criticism, 
        ridicule.
  
        <input type="text" name="meaning" value=" 
        C ANALYZER: Logical Thinker/Analytical/Objective
        Practical, proper, discrete, accurate; self-evaluating, 
        critical of self and others; enjoys detail and logic; makes 
        decisions slowly from logic rather than emotion; can over-analyze, 
        be hurt easily; goal is to develop control, correctness; fears criticism, 
        ridicule." hidden/>
       @endif 
  
  
  
  
  
                      </li> 
                    </ul>
                    {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
                    {{Form::close()}}
                  </div>
                   
                    
                   
  
  
   
  
  
                    
                <div class="box-footer">
                   
                </div>
                    </div>
                </div>
             
         
        </center>
      </div>

















































@endsection