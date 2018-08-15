@extends('layouts.main')
@section('content')
<div class="content-wrapper">
	<style type="text/css">
		th{
			font-size: 18px;
			background-color: #83b8fc;
    		color: black;
		}
		td{
			font-size: 16.5px;
		}
		p{
			color: red;
		}
		div.box-header{
			text-align: center;
			font-size:35px;


		}

	</style>

	

 <section class="content">
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
            	 {{Form::open(['url'=>'evatesting','files' => true,'enctype'=>'multipart/form-data'])}}
              <thead>
              	<tr>
              		<th colspan="10" style="text-align: center;">ด้านที่ 1 การประเมินด้านคุณสมบัติของพนักงาน (Core compentency )</th>
              	</tr>

              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >หัวข้อ</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>

              <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>
             

             </thead>

             <tbody>

             <tr>
		            <td colspan="5">1. ความซื่อสัตย์ ( Honest )</td>
		            <div class="form-group {{ $errors->has('  part1_1') ? 'has-error' : '' }}">
                    <td style="text-align: center;">{{Form::radio('part1_1', '1')}}</td>
		            <td style="text-align: center;">{{Form::radio('part1_1', '2')}}</td>
		            <td style="text-align: center;">{{Form::radio('part1_1', '3')}}</td>
		            <td style="text-align: center;">{{Form::radio('part1_1', '4')}}</td>
		            <td style="text-align: center;">{{Form::radio('part1_1', '5')}}</td>
		            <span class="text-danger">{{ $errors->first('part1_1') }}</span>
                    </div>
		            
					
	         </tr>
	         <tr><td colspan="5">2. ทัศนคติที่ดี ( Good mindset )</td>
				 <td style="text-align: center;">{{Form::radio('part1_2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_2','5')}}</td>
			 </tr>
			 <tr><td colspan="5">3. การรู้จักคุณค่าของสิ่งของ ( See Value of things, Worth )</td>
			 	<td style="text-align: center;">{{Form::radio('part1_3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_3','5')}}</td>	
			 </tr>
			 <tr><td colspan="5">4. การตั้งมั่นในการบรรลุเป้าหมาย ( Achievement )</td>
			 	 <td style="text-align: center;">{{Form::radio('part1_4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_4','5')}}</td>
			 </tr>
			 <tr><td colspan="5">5. ใฝ่เรียนรู้ ด้วยตนเอง ( Self learning )</td>
			 	 <td style="text-align: center;">{{Form::radio('part1_5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('part1_5','5')}}</td>
			 </tr>
			 <tr><td colspan="5">6. เปิดใจรับฟังสิ่งต่างๆ ( Open mind )</td>
			 	 <td style="text-align: center;">{{Form::radio('1.6', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.6', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.6', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.6', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.6','5')}}</td>
			 </tr>
			 <tr><td colspan="5">7. มีใจบริการ ( Services mind </td>
			 	 <td style="text-align: center;">{{Form::radio('1.7', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.7', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.7', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.7', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.7','5')}}</td>
			 </tr>
			 <tr><td colspan="5">8. มีความพอเพียง ( Economy sufficient )</td>
			 	 <td style="text-align: center;">{{Form::radio('1.8', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.8', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.8', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.8', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.8','5')}}</td>
			 </tr>
			 <tr><td colspan="5">9. การตั้งเป้าหมายและทำให้สำเร็จ ( Results oriented , Goals )</td>
			 	 <td style="text-align: center;">{{Form::radio('1.9', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.9', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.9', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.9', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.9','5')}}</td>

			 </tr>
			 <tr><td colspan="5">10. การมีความคิดสร้างสรรค์ ( Creativity )</td>
			 	 <td style="text-align: center;">{{Form::radio('1.10', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.10', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.10', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.10', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('1.10','5')}}</td>
			 </tr>
			 
			 	<td colspan="5">รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน :</td>
			 	<td colspan="5">{{Form::textarea('more1','',['class'=>'form-control'])}} </td>

			 </tr>
			<tr>
              		<th colspan="10" style="text-align: center;">ด้านที่ 2 การประเมินด้านภาวะผู้นำ(LEADERSHIP)</th>
			</tr>
			 
              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >หัวข้อ</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>

              <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>

             <tr><td colspan="5">1. ความสามารถสร้างแรงจูงใจและพัฒนาผู้ใต้บังคับบัญชาให้ปฏิบัติงานได้อย่างมีประสิทธิภาพ (Ability to motivate and develop subordinates.)
             	</td>
			 	 <td style="text-align: center;">{{Form::radio('2.1', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.1', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.1', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.1', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.1','5')}}</td>
             </tr>
             <tr><td colspan="5">2. ความสามารถในการทำงาน บังคับบัญชา และควบคุมระเบียบวินัย (Ability to work, manage and control rule and regulation)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.2','5')}}</td>
             </tr>
             <tr><td colspan="5">3. ความสามารถในการกำหนดแผนงานร่วมกับทีมงานในเชิงกลยุทธ (Abilty to do startegic plan with team)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.3','5')}}</td>
             </tr>
             <tr><td colspan="5">4. ความสามารถในการแก้ไขปัญหากับทีมงานได้อย่างรวดเร็วและแม่นยำ	(Ability to solve problem with team with fast and accurate decision)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.4','5')}}</td>
             </tr>
             <tr><td colspan="5">5. ความคิดสร้างสรรที่เป็นประโยชน์ในงานเพื่อต่อยอดพัฒนางาน 	(Ability to initiative in order to develop and add value)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.5','5')}}</td>
             </tr>
             <tr><td colspan="5">6. ความสามารถในการทำงานภายใต้แรงกดดัน (Ability to work under pressure)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.6', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.6', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.6', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.6', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.6','5')}}</td>
             </tr>
             <tr><td colspan="5">7. ความสามารถในการสรุปงานและการนำเสนองานได้อย่างมืออาชีพ (Ability to summarize and do report as professional	)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.7', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.7', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.7', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.7', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.7','5')}}</td>
             </tr>
             <tr><td colspan="5">8. อัตราการลาออกของพนักงาน	(Turn over rate)</td>
			 	 <td style="text-align: center;">{{Form::radio('2.8', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.8', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.8', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.8', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('2.8','5')}}</td>
             </tr>
             </tr>
			 
			 	<td colspan="5">รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน :</td>
			 	<td colspan="5">{{Form::textarea('more2','',['class'=>'form-control'])}} </td>

			 </tr>

			 <tr>
              		<th colspan="10" style="text-align: center;">ด้านที่ 3 การประเมินด้านทักษะในการทำงาน (Skill)</th>
			</tr>
              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >หัวข้อ</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>
           <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>

             <tr><td colspan="5">1. ความรู้ในระบบการทำงาน รวมถึงการบริหารจัดการ การมอบหมายงาน การควบคุมและติดตามงาน			(1. Knowledge of management assign job and follow up)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.1', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.1', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.1', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.1', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.1', '5')}}</td>
             </tr>
             <tr><td colspan="5">2. ความรู้ในผลิตภัณฑ์และสินค้า รวมถึงกระบวนการผลิต (Knowledge of products and services, include production process)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.2', '5')}}</td>
             </tr>
             <tr><td colspan="5">3. ความรู้ในเรื่องของช่องทางการจำหน่ายและลูกค้า (Knowledge of channel of distribution)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.3', '5')}}</td>
             </tr>
             <tr><td colspan="5">4. ความสามารถในการปรับตัวเพื่อรับงานได้หลายด้าน (Ability to do multi task, Multi skill				)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.4', '5')}}</td>
             </tr>
             <tr><td colspan="5">5. ความถี่ในการจัดประชุมเพื่อแจ้งนโยบายและแก้ไขปัญหาได้อย่างมีประสิทธิภาพ	(Frequency of meeting to solve problem and make understanding with team)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.5', '5')}}</td>
             </tr>
             <tr><td colspan="5">6. ความสามารถบริหารเวลากับปริมาณของงานเพื่อให้จัดส่งงานได้ตรงตามกำหนด	(Ability to manage time with quantity of work and on time delivery of works.)</td>
			 	 <td style="text-align: center;">{{Form::radio('3.6', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.6', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.6', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.6', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('3.6', '5')}}</td>
             </tr>

             </tr>
			 
			 	<td colspan="5">รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน :</td>
			 	<td colspan="5">{{Form::textarea('more3','',['class'=>'form-control'])}} </td>

			 </tr>
			 
			<tr>
				<th colspan="10" style="text-align: center;">ด้านที่ 4  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)<p>**ผู้ประเมินโปรดเลือก ข้อ A หรือ B อย่างใดอย่างหนึ่ง ในการประเมินเท่านั้น(Please select only Subject A or B for evaluation and score will be calculated only one subject) **</p>
				</th> 
			</tr>

              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >A.หัวข้อ ( สำหรับพนักงานที่ทำงานอยู่ในสังกัดเดียวกันเท่านั้น )(Subject A : ( For same company))</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>

              <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>
             <tr><td colspan="5">1. ผลกำไร ของบริษัท เพิ่มขึ้น(Profit of company increase)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.1', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '5')}}</td>
             </tr>
             <tr><td colspan="5">2. การลดค่าใช้จ่ายในการดำเนินงานโดยรวมได้อย่างยั่งยืน	(Reduce expenses in sustainable way)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '5')}}</td>
             </tr>
             <tr><td colspan="5">3. ยอดจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Increase in sales volume)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '5')}}</td>
             </tr>
             <tr><td colspan="5">4. การขยายช่องทางการจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Expand channel of sales)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '5')}}</td>
             </tr>
             <tr><td colspan="5">5. การควบคุมคุณภาพและรักษามาตรฐานของสินค้า (Quality control and maintain standard of products)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '5')}}</td>
             </tr>
             <tr><td colspan="5">6. การวางนโยบายบริหารโดยภาพรวม นำพาไปสู่ผลกำไร และการเติบโตแบบยั่งยืนของบริษัท (Initiate policy in order to align with goals of company.)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.6', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '5')}}</td>
             </tr>
             <tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >B.หัวข้อ (สำหรับพนักงานที่ทำงานอยู่ต่างสังกัด)(Subject B : (For difference company )	)</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

             </tr>

              <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>
             <tr><td colspan="5">1. ผลกำไร ของบริษัท เพิ่มขึ้น (Progress of management and overall pictures of company.)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.1', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.1', '5')}}</td>
             </tr>
             <tr><td colspan="5">2. การลดค่าใช้จ่ายในการดำเนินงานโดยรวมได้อย่างยั่งยืน	 (Overall management of subordinates and development skill for subordiates)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.2', '5')}}</td>
             </tr>
             <tr><td colspan="5">3. ยอดจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Communication skill in order to make clear of work)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.3', '5')}}</td>
             </tr>
             <tr><td colspan="5">4. การขยายช่องทางการจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Problem solving skill and lead to efficientcy solution)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.4', '5')}}</td>
             </tr>
             <tr><td colspan="5">5. การควบคุมคุณภาพและรักษามาตรฐานของสินค้า (5. Cooperation and action in order to get the work done.)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.5', '5')}}</td>
             </tr>
             <tr><td colspan="5">6. การวางนโยบายบริหารโดยภาพรวม นำพาไปสู่ผลกำไร และการเติบโตแบบยั่งยืนของบริษัท (Initiate policy in order to align with goals of company.)</td>
			 	 <td style="text-align: center;">{{Form::radio('4.6', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('4.6', '5')}}</td>
             </tr>

             </tr>
			 
			 	<td colspan="5">รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน :</td>
			 	<td colspan="5">{{Form::textarea('more3','',['class'=>'form-control'])}} </td>

			 </tr>

			  <tr>
              		<th colspan="10" style="text-align: center;">ด้านที่ 5 การประเมินด้านการให้ความร่วมมือ (Cooperation)</th>
			</tr>
              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >หัวข้อ</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>
           <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>

             <tr><td colspan="5">1. แสดงออกถึงความรับผิดชอบ และความกระตือรือร้น ความตั้งใจในการปฏิบัติงาน เมื่อได้รับมอบหมายงานไม่ว่าจะเป็นงานปัจจุบันหรืองานเพิ่มเติม / งานพิเศษจากผู้บริหารสูงสุด<br>	(Show of for responsibility, enthusiasm on routine work or when being assigned by CEO )</td>
			 	 <td style="text-align: center;">{{Form::radio('5.1', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.1', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.1', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.1', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.1', '5')}}</td>
             </tr>
             <tr><td colspan="5">2. มีส่วนร่วมในการดำเนินงานของหน่วยงานที่สังกัดอยู่เสมอ ทั้งในด้านการเสนอแนวคิด การแจ้งปัญหาและแก้ไขปัญหา หรือการลงมือปฏิบัติ โดยมีวิธีการต่างๆ ในการปฏิบัติงานที่เป็นประโยชน์ <br>(Participation on work whether by ideas, inform about problems, advise solution and doing in order to create good performance and good results	)</td>
			 	 <td style="text-align: center;">{{Form::radio('5.2', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.2', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.2', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.2', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.2', '5')}}</td>
             </tr>
             <tr><td colspan="5">3. มีพฤติกรรมการให้ความช่วยเหลือ / อำนวยความสะดวกในการปฏิบัติงานให้กับหน่วยงานที่เกี่ยวข้อง และ เพื่อนร่วมงาน (ผู้ใต้บังคับบัญชา)<br> 	(Services mind and cooperate with other functions of work and acts according to rule and regulation with colleague and subordinates.)</td>
			 	 <td style="text-align: center;">{{Form::radio('5.3', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.3', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.3', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.3', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.3', '5')}}</td>
             </tr>
             <tr><td colspan="5">4.มีการกระตุ้นความสร้างสรรค์และการจัดการบริหารงานเป็นแบบทีมเวิร์ค <br>(Stimulate for creativity and manage team work.)</td>
			 	 <td style="text-align: center;">{{Form::radio('5.4', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.4', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.4', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.4', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.4', '5')}}</td>
             </tr>
             <tr><td colspan="5">5. การเข้าร่วมกิจกรรมและร่วมทำโครงการต่างๆ ที่บริษัทจัดขึ้น<br>	(Participate in activities of company and act according to rule and regulation of company.)</td>
			 	 <td style="text-align: center;">{{Form::radio('5.5', '1')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.5', '2')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.5', '3')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.5', '4')}}</td>
				 <td style="text-align: center;">{{Form::radio('5.5', '5')}}</td>
             </tr>
             </tr>
			 
			 	<td colspan="5">รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน :</td>
			 	<td colspan="5">{{Form::textarea('more3','',['class'=>'form-control'])}} </td>

			 </tr>

             </tbody>
             <tfoot>
             	<tr>
            		<td colspan="10">{{ Form::submit('ส่งแบบประเมิน',['class'=> 'btn btn-primary'])}}</td>
             	</tr>
             </tfoot>
            {{Form::close()}}
            </table>
            <br><br>
           
            <br><br>
         </div>
        </div>
      </div>
    </div>


</section>
</div>
@endsection