pipeline { 
  agent any
    stages { 
        stage ('Build') {
            steps {
                sh "echo 'Build'"
                sh 'id'
                sh 'pwd'
                sh 'docker build . -f Dockerfile -t appcode'
            }
        }
        stage('Test') {
            steps {
                sh "echo 'Testing..'"
                // run image
                sh "docker run --name appcode --rm -d -p80:80 appcode"
                // unit test
                sh "docker exec appcode bash -c './vendor/bin/phpunit ./tests'"
            }
        }
        stage('Push Docker Image') {
            steps {
                echo 'push image'
            }
        }
        stage('Deploy to ECS/EKS') {
            steps {
                echo 'deploy manifest'
            }
        }
    }
}
