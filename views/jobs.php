<?php
$jobs = View::read('jobList'); 
$tweetStrJob1 = urlencode('@highfidelityinc is working on building a new virtual world and they need a Graphics Engineer! Check out http://highfidelity.io/jobs #jobs #graphics');
$tweetStrJob2 = urlencode('@highfidelityinc is building a new virtual world and they need a Marketing Coordinator! Check out http://highfidelity.io/jobs #jobs #marketing');
?>
<section id="particle-system"></section>
<h1>Jobs</h1>
<nav id="joblist">
  <a href="#physics-engineer"><span data-hover="Physics Engineer">Physics Engineer</span></a>
  <a href="#3d-graphics-engineer"><span data-hover="3D Graphics Engineer">3D Graphics Engineer</span></a>
  <a href="#cpp-generalist"><span data-hover="C++ Generalist">C++ Generalist</span></a>
  <a href="#character-animation-engineer"><span data-hover="Character Animation Engineer">Character Animation Engineer</span></a>
  <a href="#devops-engineer"><span data-hover="DevOps Engineer">DevOps Engineer</span></a>
  <a href="#technical-program-manager"><span data-hover="Technical Program Manager">Technical Program Manager</span></a>
  <a href="#technical-writer"><span data-hover="Technical Writer">Technical Writer</span></a>
</nav>

<div role="main" id="main">
  <article class="radius-border-top no-border-bottom">
    <p class="lead"><a name="physics-engineer">Physics Engineer</a></p>
    <p>
      How do you simulate rigid body collisions in a VR environment containing
      too many objects to be simulated by any one CPU at one time, using multiple
      overlapping simulations running on many client machines? In a shared VR
      environment where two or more people are playing a game like ping pong or
      sword fighting, how do you minimize the latency between action and apparent
      reaction, while keeping the outcome very similar for all participants? If
      these questions are interesting and relevant for you, we'd love to talk.
    </p>
    <div class="requirements">
      <h3>Skills / Requirements</h3>
      <ul>
        <li>
          <span>
            Experience with using a physics engine for simulation or games (e.g. Bullet, Havok, ODE)
          </span>
        </li>
        <li>
          <span>
            Fluent in C++
          </span>
        </li>
        <li>
          <span>
            Dangerous 3D math skills
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Javascript
          </span>
        </li>
        <li>
          <span>
            Loves quaternions
          </span>
        </li>
        <li>
          <span>
            Wrote your own physics engine
          </span>
        </li>
        <li>
          <span>
            Deep OpenGL experience
          </span>
        </li>
        <li>
          <span>
            Experience with physics on the GPU
          </span>
        </li>
        <li>
          <span>
            Experience with low-latency networking
          </span>
        </li>
        <li>
          <span>
            Experience developing in Git environments
          </span>
        </li>
      </ul>
      <h3>Professional Qualities</h3>
      <ul>
        <li>
          <span>
            Ability to switch between different projects quickly and easily while rapidly prototyping
          </span>
        </li>
        <li>
          <span>
            Autonomous in setting work priorities within product plans
          </span>
        </li>
        <li>
          <span>
            Comfortable as both perpetrator and victim of rigorous code reviews
          </span>
        </li>
        <li>
          <span>
            Appetite for sharing technical knowledge with other engineers
          </span>
        </li>
        <li>
          <span>
            Good at explaining, good at thinking out loud, hard to frustrate, and fun to work with
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="3d-graphics-engineer">3D Graphics Engineer</a></p>
    <p>
      We're looking for a 3D graphics engineer to help build our virtual 
      world's 3D graphics engine, working closely with us to create something 
      astonishing. We are creating an open source rendering engine that can 
      display a very large user-created environment at high FPS, using data 
      streaming at low latency from multiple simultaneous servers.
    </p>
    <div class="requirements">
      <h3>Skills / Requirements</h3>
      <ul>
        <li>
          <span>
            Expert in designing and building graphics engine componentry
          </span>
        </li>
        <li>
          <span>
            Deep knowledge of rendering systems, with experience working on multiple pieces 
            of high performance visual systems&mdash;e.g., shaders, animation, lighting, particle 
            systems, and/or procedural routines
          </span>
        </li>
        <li>
          <span>
            Experience developing and maintaining multi-threaded code; skilled in optimizing 
            around CPU and GPU architectures
          </span>
        </li>
        <li>
          <span>
            Fluent in C++, and OpenGL
          </span>
        </li>
        <li>
          <span>
            Dangerous 3D math skills
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Experience with low-latency networking
          </span>
        </li>
        <li>
          <span>
            Experience with physics engines / simulation
          </span>
        </li>
        <li>
          <span>
            Experience developing in Git environments
          </span>
        </li>
        <li>
          <span>
            Experience with scripting languages (e.g., Javascript)
          </span>
        </li>
      </ul>
      <h3>Professional Qualities</h3>
      <ul>
        <li>
          <span>
            Demonstrable history of designing/building rendering engines/components
          </span>
        </li>
        <li>
          <span>
            Ability to switch between different projects quickly and easily while rapidly prototyping
          </span>
        </li>
        <li>
          <span>
            Autonomous in setting work priorities within product plans
          </span>
        </li>
        <li>
          <span>
            Comfortable as both perpetrator and victim of rigorous code reviews
          </span>
        </li>
        <li>
          <span>
            Appetite for sharing technical knowledge with other engineers
          </span>
        </li>
        <li>
          <span>
            Good at explaining, good at thinking out loud, hard to frustrate, and fun to work with
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="cpp-generalist">C++ Generalist</a></p>
    <p>
      An online shared Virtual Reality platform has a lot of moving
      parts: high performance networking with low latency requirements
      using connectionless protocols and dynamic broadcast trees; 3D audio,
      including live mixing and room reflections; head-mounted displays;
      head, body, and hand tracking hardware API's; Physics engines; high
      end 3D rendering, including complex character avatars with both dynamic
      and offline lighting.
    </p>
    <p>
      We're looking for developers with a demonstrated ability to connect the
      dots across multiple disciplines, a willingness to learn new things,
      resilience, a curious personality, and great communication skills that
      make you fun to work with.
    </p>
    <div class="requirements">
      <h3>Requirements</h3>
      <ul>
        <li>
          <span>
            C++ fluency
          </span>
        </li>
        <li>
          <span>
            Esprit de corps
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Strong 3D math skills
          </span>
        </li>
        <li>
          <span>
            Javascript
          </span>
        </li>
        <li>
          <span>
            Git
          </span>
        </li>
        <li>
          <span>
            A track record of working on similarly complex projects
          </span>
        </li>
        <li>
          <span>
            Ping-pong affinity
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="character-animation-engineer">Character Animation Engineer</a></p>
    <p>
      High Fidelity is breaking new ground using new and upcoming
      hardware like HMD's, depth cameras, and hand/body trackers to
      bring avatars to life with low-latency data streams.  We are
      looking for a developer with passion, skills, and experience in
      creating avatar characters with physics and animation driven by
      these inputs. We want to enable people to shake hands across the
      internet, read each other's body language, and sword fight. Is 
      that too much to ask?
    </p>
    <div class="requirements">
      <h3>Requirements</h3>
      <ul>
        <li>
          <span>
            Fluency in C++
          </span>
        </li>
        <li>
          <span>
            A proven history working on character animation and physics
          </span>
        </li>
        <li>
          <span>
            Strong graphics math skills
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Experience with varied facial rigging techniques
          </span>
        </li>
        <li>
          <span>
            Real-time cloth and hair simulation
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="devops-engineer">DevOps Engineer</a></p>
    <p>
      We’re looking for a unique blend of talents to help us design, develop and provision
      cross platform infrastructure for building, testing and running our open source virtual
      reality platform. If you’re a fast learner, passionate about cloud environments and continuous
      integration, and comfortable with cross platform application releasing, keep reading.
    </p>
    <div class="requirements">
      <h3>Skills / Requirements</h3>
      <ul>
        <li>
          <span>
            AWS Cloud expertise (EC2, RDS, Route53, S3)
          </span>
        </li>
        <li>
          <span>
            Demonstrable experience writing automated deployment and configuration
            management scripts
          </span>
        </li>
        <li>
          <span>
            Experience building C++/Qt code, and supporting multi-platform development
            and release environments
          </span>
        </li>
        <li>
          <span>
            Experience with Continuous Integration systems
          </span>
        </li>
        <li>
          <span>
            Experience with application release packaging and distribution on Linux, OS X
            and Windows
          </span>
        </li>
        <li>
          <span>
            Strong Linux experience
          </span>
        </li>
        <li>
          <span>
            Experience supporting Windows and OS X
          </span>
        </li>
        <li>
          <span>
            Strong Python, Ruby on Rails and PHP skills
          </span>
        </li>
        <li>
          <span>
            Understanding of C++ code, dynamic libraries, linking, compiling and other processes
            associated with building and releasing binary GUI and console applications
          </span>
        </li>
        <li>
          <span>
            Firm understanding of network concepts, and the ability to diagnose and troubleshoot
            connectivity issues
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Ansible specific experience
          </span>
        </li>
        <li>
          <span>
            Experience implementing and managing cross platform Jenkins build farms
          </span>
        </li>
        <li>
          <span>
            Experience with database administration on both MySQL and PostgreSQL
          </span>
        </li>
        <li>
          <span>
            Ubuntu specific skills
          </span>
        </li>
      </ul>
      <h3>Professional Qualities</h3>
      <ul>
        <li>
          <span>
            Fast learner
          </span>
        </li>
        <li>
          <span>
            Constant researcher
          </span>
        </li>
        <li>
          <span>
            Able to effectively deal with rapidly changing priorities and requirements
          </span>
        </li>
        <li>
          <span>
            Self-motivated, and always knowing what needs to get done
          </span>
        </li>
        <li>
          <span>
            Effective communicator, maintaining open communication with other DevOps team members
            as well as development staff
          </span>
        </li>
        <li>
          <span>
            Capable of translating development requirements into systems and infrastructure
          </span>
        </li>
        <li>
          <span>
            Ruthless automator
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="technical-writer">Technical Writer</a></p>
    <p>
      High Fidelity seeks a master technical writer to develop and organize its online documentation, targeting a
      broad range of audiences including casual end users, content developers, and programmers.
    </p>
    <div class="requirements">
      <h3>Skills / Requirements</h3>
      <ul>
        <li>
          <span>
            Strong technical understanding of Javascript
          </span>
        </li>
        <li>
          <span>
            Ability to understand and explain concepts like scripting and technical architecture through prose and
            diagrams
          </span>
        </li>
        <li>
          <span>
            Ability to gear content to both technical and non-technical audiences
          </span>
        </li>
        <li>
          <span>
            Ability to tame the beast, organizing an extremely broad body of content in a navigable format 
          </span>
        </li>
      </ul>
        <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Experience with gaming technology
          </span>
        </li>
        <li>
          <span>
            Experience documenting Git-based open source software
          </span>
        </li>
        <li>
          <span>
            Experience with tools and processes to capture user community edit suggestions
          </span>
        </li>
        <li>
          <span>
            C++ literacy
          </span>
        </li>
        <li>
          <span>
            Experience with tools and processes to auto-generate documentation from source code
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <p class="lead"><a name="technical-program-manager">Technical Program Manager</a></p>
    <p>
      High Fidelity is looking for a Technical Program Manager to plan and drive technology initiatives.
    </p>
    <div class="requirements">
      <h3>Skills / Qualifications</h3>
      <ul>
        <li>
          <span>
            Ability to understand complex and competing product development priorities, and sequence/distribute tasks
            across engineers to meet milestone dates
          </span>
        </li>
        <li>
          <span>
            Ability to revise workplans on the fly based on new information and effectively communicate changes to
            team members
          </span>
        </li>
        <li>
          <span>
            Ability to continuously track progress of all project team members and keep people (often peers) on task
          </span>
        </li>
        <li>
          <span>
            Working knowledge of software engineering, networking protocols, and web application development
          </span>
        </li>
        <li>
          <span>
            Experience with Windows, OSX, and Linux
          </span>
        </li>
        <li>
          <span>
            Experience with defect management tools, test management tools and software development environments
          </span>
        </li>
        <li>
          <span>
            Bachelor's degree in Computer Science, EE, or a related technical degree and/or relevant experience
          </span>
        </li>
      </ul>
      <h3>Bonus Points</h3>
      <ul>
        <li>
          <span>
            Experience with Github and open-source projects
          </span>
        </li>
        <li>
          <span>
            Comfortable with 3D model formats
          </span>
        </li>
        <li>
          <span>
            Strong interest in helping out users
          </span>
        </li>
        <li>
          <span>
            Ability to articulate and prioritize user requirements/feature requests
          </span>
        </li>
        <li>
          <span>
            Passion for Virtual Reality 
          </span>
        </li>
      </ul>
      <h3>Professional Qualities</h3>
      <ul>
        <li>
          <span>
            Pathological attention to detail
          </span>
        </li>
        <li>
          <span>
            Good at explaining, good at thinking out loud, hard to frustrate, and fun to work with
          </span>
        </li>
      </ul>
    </div>
  </article>
  <article class="no-border-bottom no-border-top">
    <div id="apply">
      <h3>Apply</h3>
      <p>
        Email us your resume or LinkedIn profile. 
        Sample code and links to things you’ve built are most welcome.
      </p>
      <p>
        <a href="mailto:hiring@highfidelity.io">hiring@highfidelity.io</a>
      </p>
    </div>
    <a class="tweetthis" target="_blank"
      href="http://twitter.com/home/?status=<?php echo $tweetStrJob1; ?>">
      <i class="icon-twitter"></i>
      <span>Tweet this job</span>
    </a>
  </article>
  <article class="radius-border-bottom get-our-attention">
    <p><span class="strong">We are seeing lots of great applicants!</span> If you'd like to get our attention and also have
    more fun than sitting in an interview, do the following:</p>
    <p>Checkout our code on <a href="https://github.com/highfidelity/hifi">GitHub</a>, build the Interface client, and see if you
    can login to Hifi. Then, take a look at <a href="https://worklist.net">Worklist</a> and see if there's a job you can do
    to show us your work skills.</p>
  </article>
  <article class="radius-border-top radius-border-bottom">
    <p>
      Our distributed development system, 
      <a href="<?php echo WORKLIST_URL; ?>">Worklist</a>, is ready
      for new developers proficient in <strong>C, C++, OpenGL, iOS, Android, PHP,</strong> 
      and more. Hop in and do some work.
    </p>
    <?php if (!empty($jobs)): ?>
      <div id="jobs">
        <span>You can bid on these jobs right now:</span>
        <ul>
          <?php foreach ($jobs as $job): ?>
            <li><a href="<?php echo $job['link']; ?>"><?php echo $job['title']; ?></a></li>
          <?php endforeach; ?>
          <li><a href="<?php echo WORKLIST_URL; ?>">View them all</a></li>
        </ul>
      </div>
    <?php endif; ?>
  </article>
</div>
