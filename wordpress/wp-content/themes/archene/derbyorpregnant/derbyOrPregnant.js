var quizApp = angular.module('quizApp', []);

quizApp.controller('quizController', ['$scope', '$http', function ($scope, $http) {
  $scope.score = 0;
  $scope.gameInProgress = false; // controls whether the Start Quiz button is displayed
  $scope.currentQuestion = '';
  $scope.questionAnswered = false; // controls whether button is displayed to go to next question
  $scope.quizQuestions = [];
  
  /**
   * Removes Start Quiz button
   * Loads up list of random quiz questions
   * Loads up the first question into the UI
   */
  $scope.startQuiz = function() {
    $scope.gameInProgress = true;
    $scope.loadQuizQuestions();
    $scope.currentQuestion = $scope.getNextQuestion();
  };
  
  // get random list of questions
  $scope.loadQuizQuestions = function() {
    $http.get('../derbyorpregnant/quizQuestions.json').success(function(data) {
      $scope.quizQuestions = data;
    });
  };
  
  /**
   * Check user's answer and give feedback -Correct or Wrong
   * Update overall game score
   * Display button to go to next question
   */
  $scope.checkAnswer = function() {
    
  };
  
  // load next question into UI
  $scope.getNextQuestion = function() {
    
  };
  
  /**
   * Show how many total you got right and wrong
   * Show sharing buttons
   * Show link to add new quiz questions 
   */
  $scope.showFinalScore = function() {
    
  };
}]);
