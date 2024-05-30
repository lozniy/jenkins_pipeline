/* Requires the Docker Pipeline plugin */
pipeline {
    agent any
    stages {
        stage('hello') {
            steps {
                echo "Hello!"
            }
        }
        stage('sonar') {
            steps {
                withSonarQubeEnv('MySonar') { // Will pick the global server connection you have configured
                  sh "${scannerHome}/bin/sonar-scanner"
                }
            }
        }
    }
}
