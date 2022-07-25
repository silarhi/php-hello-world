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
                // run container
                sh "echo 'run image'"
                
                sh "docker rm -f appcode"
                sh "docker run --name appcode --rm -d -p80:80 appcode:build"

                // unit test
                sh "echo 'unit test'"
                sh "docker exec appcode bash -c './vendor/bin/phpunit ./tests'"

                // remove container
                sh "docker rm -f appcode"
            }
        }
        stage('Push Docker Image') {
            steps {
                echo 'tag and push image'
                script {
                    try {
                        sh "docker tag appcode:build  dwlpm/appcode || \
                        docker push dwlpm/appcode"
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