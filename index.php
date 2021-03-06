<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<link rel="stylesheet" href="/resources/demos/style.css"> -->


	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="./style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script type="text/javascript">
  	$(document).ready(function(){
			if($(window).width() >= 992){

			var $gallery1 = $('#gallery1');

			$gallery1.hover(function(){
				$('.description').text('A simple turn of events where participants challenge themselves by advocating for unpopular motions or views against the vox populi in both written as well as speech formats.');
				$gallery1.stop().animate({
					'left' : '-3vw',
					'z-index' : 8
				},{
					duration : 250,
					complete : function() {
						$gallery1.stop().animate({
							'left' : '0vw',
							'z-index' : 8
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$gallery1.stop().animate({
					'left' : '-3vw',
					'z-index' : 5
				},{
					duration : 250,
					complete : function(){
						$gallery1.stop().animate({
							'left' : '0vw',
							'z-index' : 4
						},250);
					}
				});
			});

			$('#gallery2').hover(function(){
				$('.description').text('Making Paintings on a given topic. The Topic will either be based on AOG or INDIA AGAINST Negativity. ');
				$('#gallery2').stop().animate({
					'left' : '10vw',
					'top' : '-2vh',
					'z-index' : 7
				},{
					duration : 250,
					complete : function() {
						$('#gallery2').stop().animate({
							'left' : '12vw',
							'top' : '8vh',
							'z-index' : 8
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery2').stop().animate({
					'left' : '10vw',
					'top':'-2vh',
					'z-index' : 6
				},{
					duration : 250,
					complete : function(){
						$('#gallery2').stop().animate({
							'left' : '12vw',
							'top' : '8vh',
							'z-index' : 5
						},250);
					}
				});
			});


			$('#gallery3').hover(function(){
				$('.description').text('Online short film submission in association with KIIT film society .');
				$('#gallery3').stop().animate({
					'top' : '30vh',
					'z-index' : 8
				},{
					duration : 250,
					complete : function() {
						$('#gallery3').stop().animate({
							'top' : '22vh',
							'z-index' : 8
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery3').stop().animate({
					'top' : '30vh',
					'z-index' : 6
				},{
					duration : 250,
					complete : function(){
						$('#gallery3').stop().animate({
							'top' : '22vh',
							'z-index' : 6
						},250);
					}
				});
			});


			$('#gallery4').hover(function(){
				$('.description').text('Got Talent is an extraordinary platform for likewise participants who can showcase their passion and talent in fields of on stage performances like dance, drama, music and art etc. Each performing art talent would be judged based on certain rules and regulations given by their classification of the field.');
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
			});

			$('#gallery5').hover(function(){
				$('.description').text('The Konvergence is a fashion show event, focusing on the social issue of gender equality and empowerment of women. Teams from several colleges will take part in the event and will put up a fashion show according to the given theme.');
				$('#gallery5').stop().animate({
					'top' : '40vh',
					'z-index' : 6
				},{
					duration : 250,
					complete : function() {
						$('#gallery5').stop().animate({
							'top' : '32vh',
							'z-index' : 6
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery5').stop().animate({
					'top' : '40vh',
					'z-index' : 3
				},{
					duration : 250,
					complete : function(){
						$('#gallery5').stop().animate({
							'top' : '32vh',
							'z-index' : 3
						},250);
					}
				});
			});



			$('#gallery6').hover(function(){
				$('.description').text('Test your knowledge about marketing and the skills associated with it in "Rocket Singh". This is a fun filled activity that will test the live selling skills of the participants.');
				$('#gallery6').stop().animate({
					'top' : '35vh',
					'left' : '35vw',
					'z-index' : 8
				},{
					duration : 250,
					complete : function() {
						$('#gallery6').stop().animate({
							'top' : '30vh',
							'left':'30vw',
							'z-index' : 8
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery6').stop().animate({
					'top' : '35vh',
					'left' : '35vw',
					'z-index' : 2
				},{
					duration : 250,
					complete : function(){
						$('#gallery6').stop().animate({
							'top' : '30vh',
							'left' : '30vw',
							'z-index' : 2
						},250);
					}
				});
			});



			$('#gallery7').hover(function(){
				$('.description').text('It shall consist of a picture story series with each picture connected to the other. The themes shall be given on spot during the event. The winning entry will be decided accordingly.');
				$('#gallery7').stop().animate({
					'left' : '-6vw',
					'z-index' : 7
				},{
					duration : 250,
					complete : function() {
						$('#gallery7').stop().animate({
							'left':'0vw',
							'z-index' : 7
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery7').stop().animate({
					'left' : '-6vw',
					'z-index' : 2
				},{
					duration : 250,
					complete : function(){
						$('#gallery7').stop().animate({
							'left' : '0vw',
							'z-index' : 2
						},250);
					}
				});
			});



			$('#gallery8').hover(function(){
				$('.description').text('Here\'s a chance for all the adventurous people out there to have a glace of the medical world and test your insight.  We bring you a fun filled event which will definitely help you at some point in life.');
				$('#gallery8').stop().animate({
					'left' : '20vw',
					'top':'54vh',
					'z-index' : 7
				},{
					duration : 250,
					complete : function() {
						$('#gallery8').stop().animate({
							'left':'16vw',
							'top':'49vh',
							'z-index' : 7
						},250)
					}
				});
			},function(){
				$('.description').text('Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world\'s your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil\'s views too and if you believe you have any talent, don\'t wait, register! ');
				$('#gallery8').stop().animate({
					'left' : '20vw',
					'top':'54vh',
					'z-index' : 2
				},{
					duration : 250,
					complete : function(){
						$('#gallery8').stop().animate({
							'left' : '16vw',
							'top':'49vh',
							'z-index' : 2
						},250);
					}
				});
			});
		}

		$('#close-d').click(function() {
			var parent = document.getElementById('rules');
			var child = document.getElementById('rule1');
			parent.removeChild(child);
			$('#evename').text(" ");
			$('.venue').text(" ");
			$('.event-desc').css('visibility','hidden');
		});

		$('#gallery1').click(function() {
			$('.picture').css('background-image','url(./img/da_1.jpg)');
			$('#evename').text("Devil's Advocate");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<h4>Category 1 (2nd years to Final years) by KIIT Wordsmith</h4>').appendTo('#rule1');
			$('<p> •	The prelims will be a written round based on a common crucial topic/case study. The participants have to draft an essay, convincing the judges and advocating the case topic with strong arguments in not more than 600 words, supporting all your arguments.</p>').appendTo('#rule1');
			$('<p> •	The participants advocate an unpopular view by speaking about the same for 3 minutes.</p>').appendTo('#rule1');
			$('<h4>Category 2 (School students to 1st years) by Kronicle</h4>').appendTo('#rule1');
			$('<p>Each student takes part in event as an individual participant. The vent is divided into 3 rounds. After every round the names of the qualifying participants will be announced and they will then move to the next round.</p>').appendTo('#rule1');
			$('<p> •	The first round is an extempore where each participant gets a minute to prepare and a minute to speak on a particular topic.</p>').appendTo('#rule1');
			$('<p> •	The final round consists of the Presidential format of debating, which includes speech and rebuttal by each participant justifying the side he/she is on.</p>').appendTo('#rule1');
			$('<p> •	The second round is a one on one debate, where a participant is pitted against another and has to give speeches (integrating the rebuttals) to prove his/her of the motion.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 20,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Kartikeya(7328837503)</h5>').appendTo('#rule1');
			$('<h5>Koustav(9776006932)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});

		$('#gallery2').click(function() {
			$('.picture').css('background-image','url(./img/kanvassing_1.jpg)');
			$('#evename').text("Kanvassing (Khwaab)");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> •	Max 2 members can be in a team during participation. Individual registration to be done by the members.</p>').appendTo('#rule1');
			$('<p> •	Topic will be given on spot before the beginning of the competition.</p>').appendTo('#rule1');
			$('<p> •	Time allotted to each team will be 60 minutes.</p>').appendTo('#rule1');
			$('<p> •	Canvas (Chart papers) will be provided to the participants.</p>').appendTo('#rule1');
			$('<p> •	USE of mobile phones and the internet is strictly prohibited.</p>').appendTo('#rule1');
			$('<p> •	Participants need to bring their own materials needed for painting. Any type of colour is allowed (oil/water etc.)</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 5,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Harshit(7077100951)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});

		$('#gallery3').click(function() {
			$('.picture').css('background-image','url(./img/kausative.jpg)');
			$('#evename').text("Kausative");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> 1. Theme-Art of giving, India against negativity</p>').appendTo('#rule1');
			$('<p> 2. Maximum length : 15 min</p>').appendTo('#rule1');
			$('<p> 3. No unparliamentary contents.</p>').appendTo('#rule1');
			$('<p> 4. Format of video  :  .AVI or .MP4</p>').appendTo('#rule1');
			$('<p> 5. Last date for film submission (1 day before event)</p>').appendTo('#rule1');
			$('<p> 6. Every  cast must be registered for “ KRITARTH ”</p>').appendTo('#rule1');
			$('<p> 7. Organizers decision will be final.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 10,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Ritesh(7809273093)</h5>').appendTo('#rule1');
			$('<h5>Shahnawaz(8093136349)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});



		$('#gallery4').click(function() {
			$('.picture').css('background-image','url(./img/kgt.jpg)');
			$('#evename').text("KRITARTH'S GOT TALENT");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> •	Participation: Solo, Duet, Trio and Teams (no size limit for teams)	</p>').appendTo('#rule1');
			$('<p> •	Two rounds:</p>').appendTo('#rule1');
			$('<p> 	        1.	Day 0 (for KIIT Students)- Minimum: 90 Sec & Maximum: 3 min</p>').appendTo('#rule1');
			$('<p>					2.	Day 1(for non KIIT Students) - Minimum: 90 Sec & Maximum: 3 min</p>').appendTo('#rule1');
			$('<p>					3.	Finals - Minimum: 3 min & Maximum: 10+2 min.</p>').appendTo('#rule1');
			$('<p> •	You can showcase any talent that you have decided to perform but within the given time limit.</p>').appendTo('#rule1');
			$('<p> •	Use of fire, water and any obscenity or portraying indecency in any form will straight-up lead to disqualification.</p>').appendTo('#rule1');
			$('<p> •  Judging Criteria: Creativity, Technique, Stage Presence, connection with the audience and portrayal of theme, Props usage.</p>').appendTo('#rule1');
			$('<p> •  A person is bound to stop the performance midway if directed by the judge.</p>').appendTo('#rule1');
			$('<p> •	Props and instruments are to be brought by the performers.</p>').appendTo('#rule1');
			$('<p> •	Theme for Prelims round – None.</p>').appendTo('#rule1');
			$('<p> •	Theme for Finals – To be revealed soon.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 40,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Daniel(9937591865)</h5>').appendTo('#rule1');
			$('<h5>Snigdhadeep(7064666462)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});

		$('#gallery5').click(function() {
			$('.picture').css('background-image','url(./img/konvergence_1.jpg)');
			$('#evename').text("Konvergence");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('<p>Theme - "Androgyny- a step towards gender equality"</p>').appendTo('#rule1');
			$('<p>	The main goal of this event is to create awareness among the youth about the trending social issues such as gender equality, Women empowerment, acceptance of LGBT community, and issues of such genre through the ramp show.</p>').appendTo('#rule1');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> •	A team must consist of 12-15 members</p>').appendTo('#rule1');
			$('<p> •	All students of the team must belong to the same college</p>').appendTo('#rule1');
			$('<p> •	The fashion show must be performed strictly in accordance with the theme; the team shall be disqualified if the judges find the performance irrelevant to the theme.</p>').appendTo('#rule1');
			$('<p> •  Any sort of obscenity or indecency shall lead to immediate disqualification .</p>').appendTo('#rule1');
			$('<p> •  No fireworks or dangerous items are allowed on the ramp</p>').appendTo('#rule1');
			$('<p> •  The song must be of a duration of 8-10 minutes.</p>').appendTo('#rule1');
			$('<p> •	The team shall be judged upon the costume, the relevance to the theme. the social message conveyed and the song selection.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 25,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Varun(9439802866)</h5>').appendTo('#rule1');
			$('<h5>Nitish(9040159455)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});

		$('#gallery6').click(function() {
			$('.picture').css('background-image','url(./img/rocket_1.jpg)');
			$('#evename').text("Rocket Singh");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> •	Participants are allowed to participate in a team of two or three.</p>').appendTo('#rule1');
			$('<p> •	The 1st round will be an elimination round and it will be in the form of a quiz.</p>').appendTo('#rule1');
			$('<p> •	Participants will have to answer 15 questions.</p>').appendTo('#rule1');
			$('<p> •  Time duration for the 1st round- 20 minutes.</p>').appendTo('#rule1');
			$('<p> •  Only one team member will be allowed to sit for the first round.</p>').appendTo('#rule1');
			$('<p> •  Top 10 teams will qualify for the next round on the basis of their score.</p>').appendTo('#rule1');
			$('<p> •	In the 2nd round, each qualifying team will be given various kinds of products and they have to bid for the given products.</p>').appendTo('#rule1');
			$('<p> •  There will be a minimum bidding price (base price) for a particular product and participants have to bid above that price and the one who bids the highest will have to sell that product with that bidding price being the base price.</p>').appendTo('#rule1');
			$('<p> •  Teams that will sell the product below their new bid price will be disqualified.</p>').appendTo('#rule1');
			$('<p> •  Winners will be decided based on the price margin between the base price and the price in which the product is sold in the least span of time.</p>').appendTo('#rule1');
			$('<p> •  Each team will be given a limited time to sell their product failing which they will be disqualified.</p>').appendTo('#rule1');
			$('<p> •  Participants able to sell the product in the least amount of time will have an advantage.</p>').appendTo('#rule1');
					$('</br><h5>Prize: Rs. 20,000/-</h5></br>').appendTo('#rule1');
					$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
					$('<h5>Siba(8763658509)</h5>').appendTo('#rule1');
					$('<h5>Adarsh(8093518102)</h5>').appendTo('#rule1');

			$('.event-desc').css('visibility','visible');
		});

		$('#gallery7').click(function() {
			$('.picture').css('background-image','url(./img/storyfie_1.jpg)');
			$('#evename').text("Storyfie");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('<p>On Spot event</p>').appendTo('#rule1');
			$('<p> It shall consist of a picture story series with each picture connected to the other. The themes shall be given on spot during the event. The winning entry will be decided accordingly.</p>').appendTo('#rule1');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> •	All modes and devices for photography are allowed (Including DSLR, Point and Shoot Camera, Mobile Phones, etc.).</p>').appendTo('#rule1');
			$('<p> •	No Photoshop Editing is allowed.</p>').appendTo('#rule1');
			$('<p> •  The story may consist of pictures ranging from 3-5 in quantity.</p>').appendTo('#rule1');
			$('<p> •  The pictures shall be of the same day of the event, else shall be disqualified.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 20,000/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Rahul(7064024112)</h5>').appendTo('#rule1');
			$('<h5>Subhasis(7064267637)</h5>').appendTo('#rule1');

			$('.event-desc').css('visibility','visible');
		});

		$('#gallery8').click(function() {
			$('.picture').css('background-image','url(./img/galapagos_1.jpg)');
			$('#evename').text("GALAPAGOS ISLAND");
			$('<div id="rule1"></div>').appendTo('#rules');
			$('</br><h5>Rules</h5>').appendTo('#rule1');
			$('<p> • 	Participation: The team will consist of 2-3 members.</p>').appendTo('#rule1');
			$('<p> •	There will be three rounds.</p>').appendTo('#rule1');
			$('<h4> Round 1 - 30 mins  </h4>').appendTo('#rule1');
			$('<p> •  A set of questions will be given to the teams (APTITUDE, REASONING AND CREATIVITY).</p>').appendTo('#rule1');
			$('<p> •  Participants will be judged on creativity and score.</p>').appendTo('#rule1');
			$('<p> •  Top 10 teams will be qualified for the next round.</p>').appendTo('#rule1');
			$('<h4> Round 2 - 90 mins</h4>').appendTo('#rule1');
			$('<p> •  Teams will be provided with riddles to solve as fast as they can, 1 volunteer will guide each team to the spots according to the clue.</p>').appendTo('#rule1');
			$('<p> •  2 volunteers will be present on each spot, who will give the next clue if you answer their question correctly. If failed to do so, 5 minutes will be added to your time.</p>').appendTo('#rule1');
			$('<p> •  The fastest and intuitive 5 teams will go to the final round.</p>').appendTo('#rule1');
			$('<h4> Round 3 - 15 mins (Final stage round)</h4>').appendTo('#rule1');
			$('<p> •  The final 5 teams selected will participate in it.</p>').appendTo('#rule1');
			$('<p> •  This is the final stage round, the jury round.</p>').appendTo('#rule1');
			$('<p> •  Each team will be given a medical situation and a set of medical and non-medical stuff, using which they have to answer judiciously and impress the judges.</p>').appendTo('#rule1');
			$('<p> •  Marks will be given on creativity and insight.</p>').appendTo('#rule1');
			$('<p> •  10 mins will be given for preparation and 5 mins for presentation.</p>').appendTo('#rule1');
			$('<p> •  Any kind of external help in the form of phone, chits, internet surfing will not be entertained.</p>').appendTo('#rule1');
			$('<p> <b>FINAL ROUND:</b> Winners will be decided by highest score in all the three rounds.</p>').appendTo('#rule1');
			$('</br><h5>Prize: Rs. 2,500/-</h5></br>').appendTo('#rule1');
			$('<h5>Contacts:<h5/></br>').appendTo('#rule1');
			$('<h5>Mudit(8802728680)</h5>').appendTo('#rule1');
			$('<h5>Abinash(8763333487)</h5>').appendTo('#rule1');
			$('.event-desc').css('visibility','visible');
		});

		var aud = document.getElementById("videoH");

		aud.addEventListener("timeupdate", function () {
			 if (aud.currentTime > 15) {

			 }
	 }, false);
	});
  </script>
	<title>Kritarth 2k17</title>
</head>
<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body data-hijacking="on" data-animation="parallax">
	<section class="cd-section visible">
		<div>
			<img class="kiitlogo" src="./KIIT_logo.svg" alt="logo">
			<img class="ksaclogo" src="./img/ksac.png" alt="logo">
			<video id="videoH" class="hero" loop muted autoplay preload="auto">
				<source src="./homepage_2.mp4" type="video/mp4">
			</video>


		</div>
	</section>

	<section class="cd-section">
		<div>
			<h2 class="about">About</h2>
			<p class="textabout">Inspired by the philosophy of 'Art of Giving' preached and promoted by our dear Founder Sir KIIT & KISS Prof Achyuta Samanta. Kritarth 2017, a social empowerment event bringing together all spheres of talent from KIIT and across the Globe , aims at championing the messages of 'Art of Giving' , 'Kompassion', 'India against negativity'. and 'Unity in Equality' in this edition. A plethora of events await.</p>
		</div>
	</section>

	<section class="cd-section">
		<div style="position:relative;margin-top:0;">
			<div class="cont">
				<h2>Events</h2>
				<div id="gallery1" class="gallery">
	    		<img src="./img/da.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Devil's Advocate</div>
				</div>
				<div id="gallery2" class="gallery">
	    		<img src="./img/kanvassing.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Kanvassing</div>
				</div>
				<div id="gallery3" class="gallery">
	    		<img src="./img/kausative_1.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Kausative</div>
				</div>
				<div id="gallery4" class="gallery">
	    		<img src="./img/kgt_1.jpg" alt="event" width="300" height="200">
	  			<div class="desc">KGT</div>
				</div>
				<div id="gallery5" class="gallery">
	    		<img src="./img/konvergence.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Konvergence</div>
				</div>
				<div id="gallery6" class="gallery">
	    		<img src="./img/rocket.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Rocket Singh</div>
				</div>
				<div id="gallery7" class="gallery">
	    		<img src="./img/storyfie.jpg" alt="event" width="300" height="200">
	  			<div class="desc">Storyfie</div>
				</div>
				<div id="gallery8" class="gallery">
	    		<img src="./img/galapagos.jpg" alt="event" width="300" height="200">
	  			<div class="desc">GALAPAGOS ISLAND</div>
				</div>

				<div class="description">
					Presenting Kritharth 2017 which comes with a plethora of events. Have talents that you want to showcase? This is your stage and the world's your audience. Dance to dazzle and sing to amaze, act to escape  and walk the ramp with grace, click to frame it, sell your ideas and products and sometimes the devil's views too and if you believe you have any talent, don't wait, register!
				</div>


			</div>
			<div class="event-desc">
				<i id="close-d" class="fa fa-close" style="font-size:36px;color:lightgrey;position:absolute;top:3vh;right:3vw;cursor:pointer"></i>
				<div class="eve-cont">
						<div class="picture">

						</div>
						<div class="contev">
							<div id="evename"></div>
							<div id="rules">

							</div>
							<div class="venue">

							</div>
						</div>
				</div>
			</div>
	</section>

	<section class="cd-section">
		<div>
			<h2>Gallery</h2>
		</div>
	</section>
	<section class="cd-section">
		<div class="register">



		</div>
	</section>

	<section class="cd-section">
		<div>
			<h2>Contact us</h2>
		</div>
	</section>

	
		<ul class="cd-vertical-nav">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	 <!-- .cd-vertical-nav -->
<script src="js/velocity.min.js"></script>
<script src="js/velocity.ui.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=29827282"></script>

</body>
</html>
