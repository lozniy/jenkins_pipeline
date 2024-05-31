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
                script {
                    scannerHome = tool 'MySonarScanner'// must match the name of an actual scanner installation directory on your Jenkins build agent
                }
                withSonarQubeEnv('MySonar') { // Will pick the global server connection you have configured
                  sh "${scannerHome}/bin/sonar-scanner \
                    -Dsonar.projectKey=MySonarProgect1 \
                    -Dsonar.projectName=MySonarProgect1 \
                    -Dsonar.projectVersion=1.0.0 \
                    -Dsonar.sources=."
                }
            }
        }
    }
}
