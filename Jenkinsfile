/* Requires the Docker Pipeline plugin */
@Library('test_library') _
pipeline {
    agent any
    stages {
        stage('hello') {
            steps {
                hello("Eugene")
            }
        }
        stage('sonar') {
            withSonarQubeEnv() { // Will pick the global server connection you have configured
              sh './gradlew sonar'
            }
        }
    }
}
