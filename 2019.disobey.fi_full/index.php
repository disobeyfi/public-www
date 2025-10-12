<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php	include "inc/head.inc.php"; ?>

<body class='text-center hide-background'>
	<div class='loader hidden'><img onload="startLoader()" src='img/just_logo.png' alt="loader"></div>

	<script> var current_navi_item="" </script>
	<?php include "inc/navigation.inc.php"; ?>

	<section class='container hidden'>
		<div class='full-row top-bar'></div>
			<!--- HEADER + DATE -->
			<?php include "inc/header.inc.php";	?>


			<!-- INFO -->
			<div class='full-row info clearfix translucent'>

				<section class="grid-container cell program">

					<!--
					ANNOUNCEMENTS:
					COPY MORE BLOCK IF NEEDED
					-->

					<section class='annoucements group'>
						<i class="fas fa-bullhorn"></i> User Badges sold out - Support Badges still available. Limited amount of Tickets will be available at the door.
					</section>

					<section class='annoucements group'>
						<i class="fas fa-bullhorn"></i> Please note the <a href="https://www.hsl.fi/en/news/2018/disruptions-eastbound-metro-services-friday-evening-11-january-2019-services-lauttasaari">Helsinki Metro disruption</a> that occurs between Jan 11th-13th, 2019.
					</section>

					<section class='annoucements group'>
						<i class="fas fa-bullhorn"></i> Taking photographs and recording video at the event is prohibited. Failure to comply can result in a ban from the event.
					</section>

					<!-- Announcements end -->

					<script>
						$(".annoucements:last").addClass("last")
					</script>

					<h1>Program</h1>
					<div id='program'>
							<div class='grid-x grid-padding-x event-items'>
								<div class='cell medium-4'>
										<h4>Main event</h4>
										<p> will be filled with talks from leading security professionals, hackers and other interesting people.</p>
								</div>
								<div class='cell medium-4'>
										<h4>Workshops</h4>
										<p>will cover practical cyber security, vulnerabilities, exploits and system fortification.</p>
								</div>
								<div class='cell medium-4'>
										<h4>Parties!</h4>
										<p>For sure, we will have Disobey parties for you. Perhaps even other casual, off-program activity.</p>
								</div>
							</div>
							<br>
							<div class='grid-x grid-padding-x illustrations'>
									<div class='cell medium-4'>
											<div class='illustration lazyload' data-src='img/kuvitus_1.jpg' style='background-image:url("");'></div>
									</div>
									<div class='cell medium-4'>
										<div class='illustration lazyload'   data-src='img/kuvitus_2.jpg' style='background-image:url("");'></div>
									</div>
									<div class='cell medium-4'>
										<div class='illustration lazyload'   data-src='img/kuvitus_3.jpg' style='background-image:url("");'></div>
									</div>
							</div>
					</div>
				</section>

		</div>
		<!--- SPEAKERS  -->
		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/speakers.inc.php";	?>

		<div class='full-row clearfix divider'>&nbsp;</div>

	 <!--- SPEAKERS -->
	 <div class='full-row clearfix lazyload translucent' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
	 		<section class="grid-container cell grid-y cell location text-center" id='program-highlights' >
				<div class="cell">
					<h1>Program highlights</h1>
				</div>
				<div class="cell grid-x grid-padding-x grid-margin-x">

					<div class='cell large-4 medium-text-left'>
						<h5>TALK / Arden Meyer</h5>
						<h4>Privilege Escalation in Mechanical Master-Key Systems </h4>

						<p>The mechanical pin and tumbler locks we use on our homes, schools, and businesses have not changed much in over 100 years. Sure, there have been some exotic new designs but most are just not fiscally feasible compared to their relatively minor improvements (if any) in security.</p>

						<p><span class='open-button' data-target="program-content-1">Read more</span></p>

						<span class='program-content' id='program-content-1'>
							<p>A feature desired on large scale deployments is called Master Keying, which allows for many unique key/lock combinations while supporting multiple permission levels commonly referred to as "janitor keys" or "security keys" that can open multiple locks. While these systems are still in use around the globe in medium-to-large scale businesses, schools, and government buildings, they are also susceptible to what some consider to be the original privilege escalation attack. We will talk about an optimization attack against the most common master keyed lock systems in use today, reducing the potential attack surface from 1,000,000 permutations for an SC4 keyway system down to 42 steps to find the highest privilege key.</p>
						</span>
					</div>

					<div class='cell large-4 medium-text-left'>
						<h5>WORKSHOP / Juho Nurminen</h5>
						<h4>Let's pwn a Chinese web browser</h4>

						<p>Web browsers are technologically some of the most interesting pieces of software out there. Because of their complexity and the inherent problem of acting as a platform for untrusted scripting, web browsers are also a security nightmare. Unfortunately for the hackers, all the big names in web browsing are backed by huge orgs, massively popular bug bounty programs, and yearly competitions like Pwn2Own, which make it sure there are no low-hanging fruit to get started with. </p>

						<p><span class='open-button' data-target="program-content-2">Read more</span></p>

						<span class='program-content' id='program-content-2'>
								<p>Luckily Chrome, Firefox, and Edge aren't the only browsers out there. Have you ever heard of UC Browser of Maxthon? What about 360 Security Browser, QQ Browser, or Sogou? Did you know Baidu makes their own web browser? Google any of them, and the top hits are news of privacy and security issues—yet Maxthon, for example, claims to be "670,000,000 Users’
								Default Browser". Perfect!</p>

								<p>In this hands-on workshop you'll dive head-first into a pool of Sogou and see if you can swim in it. You might find a steaming pile of RCEs go home empty-handed, but you'll definitely learn a whole lot about browser security and get to see software you probably didn't know even existed.</p>
						</span>
					</div>


					<div class='cell large-4 medium-text-left'>
						<h5 class='text-left'>TALK / Tomi & Timo</h5>
						<h4>Ghost in the locks - Owning electronic locks without leaving a trace</h4>

						<p>A little over ten years ago, a friend of ours returned to his hotel room to find that his laptop was gone. The door to his room showed no signs of forced entry; there was no record that the electronic lock had been accessed while he was away; and there was certainly no evidence that this electronic lock, deployed on millions of doors in more than 150 countries worldwide, could have been hacked.</p>

						<p><span class='open-button' data-target="program-content-3">Read more</span></p>

						<span class='program-content' id='program-content-3'>
							<p>Sometimes hacking boils down to spending more time on something than anyone could reasonably expect. This talk is an ode to that cliché. It is the culmination of a decade-long quest to find out whether the most widely used electronic lock in the world can be bypassed without leaving a trace. And in this adventure, breaking into hotel rooms is only the beginning. But lucky for all of us, unlike most cases of theft from hotel rooms, this story has a happy ending.</p>
						</span>
					</div>


					<script>
							$(".open-button").on("click", function(){
								var target = $(this).data("target")
								$(this).hide()
								$("#"+target).toggle();
							})
					</script>

				</div>
			</section>
	</div>
	<!--	<div class='full-row clearfix divider'>&nbsp;</div>

		<!--- CFP -->
		<!-- <div class='full-row clearfix lazyload extra-padding'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
				<section class="grid-container cell grid-y cell location" id='cfp' >
							<div class="cell">
								<h1>Call for Programme</h1>
							</div>
							<div class='cell'>
										<p>Disobey is calling all able minds to share knowledge and inspire others to action. <a href='https://docs.google.com/forms/d/1yqKY6cbvV-KZI1zs5JhvKpOK3BpR7h2tyOJN3UjXqnc/viewform?edit_requested=true' target="_blank">Call for Programme is now open</a> for the event.</p>
							</div>
				</section>
		</div> -->

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!--- Puzzle -->
			<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
					<section class="grid-container cell grid-y cell location" id='puzzle' >
								<div class="cell">
									<h1>Disobey puzzle</h1>
								</div>
								<div class='cell'>
											<p>Solve the <a href='http://puzzle.disobey.fi' target="_blank">Disobey puzzle</a> and you may win a special discount hacker ticket.</p>
								</div>
					</section>
			</div>




			<!--- LOCATIION AND VENUE -->
			<div class='full-row clearfix divider'>&nbsp;</div>
			<?php include "inc/location.inc.php";	?>
			<div class='full-row clearfix divider'>&nbsp;</div>
			<?php include "inc/contact.inc.php";	?>

	</section>


</body>
</html>
