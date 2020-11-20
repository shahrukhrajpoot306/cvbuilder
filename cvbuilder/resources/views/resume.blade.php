<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume</title>
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

</head>
<body>


     <div class="resume">
        <div class="resume_leftt">
     </div>
    <div class="resume">
        <div class="resume_left">
     <div class="resume_profile">
       <img src="pic.jpg" style="height: 200px; width: 200px"  alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Contact</p>
         </div>
         <ul>
           <li>
             <div class="data">
               <p><b>Address</b></p>
             <p>{{$user->details->address}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p><b>Contact</b></p>
                 <p>{{$user->details->phone}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p><b>Email</b></p>
                 <p>{{$user->details->email}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p><b>Linkedin</b></p>
                 <p>https://www.linkedin.com/in/shahrukh-rajpoot-9194201a8/</p>
             </div>
           </li>
         </ul>
       </div>

       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Professional</p>
         </div>
         <ul>
           <li>
             <div class="data">

               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div>
           </li>
           <li>
             <div class="data">

               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
             </div>
           </li>
           <li>
             <div class="data">

               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
             </div>
           </li>
           <li>
             <div class="data">

               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
             </div>
           </li>
         </ul>
       </div>
         <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">References</p>
         </div>
         <ul>
           <li>
             <div class="data">

               <p>On Demand</p>
             </div>
           </li>

         </ul>
       </div>
     </div>
  </div>

  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">{{$user->details->fullname}}</p>
           <p class="regular">Web Developer</p>
         </div>
        <div class="title">
           <p class="bold"><u>Profile</u></p>
         </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis illo fugit officiis distinctio culpa officia totam atque exercitationem inventore repudiandae?</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold"><u>Career</u></p>
         </div>
        <ul>
            @foreach ( $user->careers as $work )
            <li>
              <div class="date"> {{$work->start_date}} - {{$work->end_date}} </div>
              <div class="info">
                     <p class="semi-bold">{{$work->company}}</p>
                  <p class="degree">{{$work->job_title}}</p>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold"><u>Academic</u></p>
         </div>
      <ul>
        @foreach ( $user->education as $edu )
            <li>
                <div class="date">{{$edu->graduation_start_date}} - {{$edu->graduation_end}}</div>
                <div class="info">
                     <p class="semi-bold" >{{$edu->schoolname}}</p>
                  <p class="degree">{{$edu->degree}}</p>
                </div>
            </li>
            <li>
              <div class="date">2000 - 2010</div>
              <div class="info">
                     <p class="semi-bold">Punjab Group Of colleges</p>
                  <p class="degree">FSC Pre-Engeenring</p>
                </div>
            </li>
            @endforeach
        </ul>
         <div class="title">
           <p class="bold"><u>Skills</u></p>
         </div>
         <Div>
            @foreach ( $user->skills as $sk )
        <p class="skills-p">{{$sk->name}} </p>
        @endforeach
    </Div>
    </div>
    </div>

</div>
</body>
</html>
