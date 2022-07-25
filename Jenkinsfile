pipeline { 
  agent any
    stages { 
        stage ('Build') {
            steps {
                sh "echo 'Build'"
                sh 'id'
                sh 'pwd'
                sh 'docker build . -f Dockerfile -t appcode:build'
            }
        }
        stage('Test') {

            steps {
                sh "echo 'Testing..'"
                // run image
                sh "echo 'run image'"
                sh "docker run --name appcode --rm -d -p80:80 appcode:build"
                // unit test
                sh "echo 'unit test'"
                sh "docker exec appcode bash -c './vendor/bin/phpunit ./tests'"
            }
        }
        stage('Push Docker Image') {
            steps {
                echo 'push image'
                script {
                    try {
                        sh "docker tag appcode:latest-1 appcode:latest-2 ; \
                        docker tag appcode:latest appcode:latest-1 ; \
                        docker tag appcode:build appcode:latest"
                    } catch (err) {
                        echo err.getMessage()
                    }
                }
            }
        }
        stage('Deploy to ECS/EKS') {
            steps {
                echo 'deploy manifest'
            }
        }
    }
}
