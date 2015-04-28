<?php get_header(); ?>
	
            <div class="col-xs-12 col-sm-8"><!-- container for the quiz -->                
				<div class="post" ng-app="quizApp" ng-controller="quizController">
					<?php
						/* Add in the AngularJS script to end of body */
						wp_enqueue_script( 'AngularJS', get_template_directory_uri() . '/js/angular.min.js', array(), '', true );
						wp_enqueue_script( 'DerbyOrPregnant', get_template_directory_uri() . '/js/derbyOrPregnant.js', array(), '', true );
					?>
										
					<h1>Derby or Pregnant</h1>
					
					<p ng-show="!gameInProgress">Athletes eat weird stuff when they're really hungry. It can sound like they're pregnant. See if you can guess whether each person was pregnant or just hungry from going through Babydolls summer bootcamp training.</p>
					
					<p ng-show="gameInProgress">{{ question }}</p>
							
					<div class="quizBtnContainer">
						<button type="button" ng-click="startQuiz()" ng-show="!gameInProgress" class="btn btn-primary btn-lg">Start quiz ></button>
						<button type="button" ng-click="" ng-show="gameInProgress" id="btnLeft" class="btn btn-primary btn-lg">Derby</button>
						<button type="button" ng-click="" ng-show="gameInProgress" id="btnRight" class="btn btn-primary btn-lg">Pregnant</button>
					</div>
					
					<button type="button" ng-click="getNextQuestion()" ng-show="questionAnswered" class="btn btn-primary btn-lg">></button>
				</div><!-- .post -->

            </div>
        </div><!-- .row in header.php -->
    </div><!-- container-fluid -->
    <?php get_footer(); ?>
