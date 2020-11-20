<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('asset/css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>
    <div class="print_area">
      <div class="header">
        <img src="profile.png">
        <div class="header_text">
          <h1>{{$user->details->fullname}}</h1>
          <p>Web Developer</p>
        </div>
      </div>
      <div class="content">
        <div class="left_area">
          <div class="contact">
            <h4>CONTACT</h4>
            <h5>Phone</h5>
            <p>{{$user->details->phone}}</p>
            <h5>Email</h5>
            <p>{{$user->details->email}}</p>
            <h5>Linkedin</h5>
            <p>0313123124sdgyaysfder52375417</p>
            <h5>Address</h5>
            <p>{{$user->details->address}}</p>
          </div>
          <div class="skills">
            <h1>Skills</h1>
            <div class="bars">
              <div class="bar">
                @foreach ( $user->skills as $sk )
                <p>{{$sk->name}}</p>
                <span></span>
                @endforeach
              </div>
            </div>

            <div class="follow">
              <h1>Folllow Me</h1>
              <h4>FaceBook</h4>
              <p>FaceBook/UserName</p>
              <h4>FaceBook</h4>
              <p>FaceBook/UserName</p>
              <h4>FaceBook</h4>
              <p>FaceBook/UserName</p>
              <h4>FaceBook</h4>
              <p>FaceBook/UserName</p>
            </div>

          </div>

        </div>

        <div class="right_area">
          <div class="about">
            <h1><span><i class="far fa-user"></i></span>About Me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
               ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="work">
            <h1><span><i class="fas fa-suitcase-rolling"></i></span>
            Work</h1>
            <div class="work-group">
                @foreach ( $user->careers as $work )
              <h3>{{$work->job_title}}</h3>
              <h4>{{$work->company}}</h4>
              <span>{{$work->start_date}} - {{$work->end_date}}</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                @endforeach
            </div>
            <div class="education">
              <h1><span><i class="fas fa-suitcase-book"></i></span>
              Education</h1>
              <div class="edu-group">
                @foreach ( $user->education as $edu )
                <h4>{{$edu->schoolname}}</h4>
                <span>{{$edu->graduation_start_date}} - {{$edu->graduation_end}}</span>
                <p>{{$edu->degree}}</p>
                @endforeach
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </body>
</html>
