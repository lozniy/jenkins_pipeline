/* Requires the Docker Pipeline plugin */
pipeline {
    agent any
    stages {
        stage('hello') {
            steps {
                hello("Eugene")
            }
        }
        stage('sonar') {
            steps {
                withSonarQubeEnv() { // Will pick the global server connection you have configured
                  sh './gradlew sonar'
                }
            }
        }
    }
}
