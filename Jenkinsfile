pipeline { 
agent any 
    stages { 
        stage('Pre-build') {
            steps {
              echo 'Pre-build, check environment ..'
              sh 'php -v'
              sh 'id'
              sh 'pwd'
              sh 'ls -al'
              script {
                def browsers = ['chrome', 'firefox']
                for (int i = 0; i < browsers.size(); ++i) {
                    echo "Testing the ${browsers[i]} browser"
                }
              }
            }
        }
        stage ('Build') {
            agent {
                docker {
                        image 'dwlpm/lpmm2:v1.0.2'
                        args '-v /home/jenkins:/home/jenkins'
                        args '-v /root/.composer/auth.json:/root/.composer/auth.json'
                }
            }
            steps {
                sh "echo 'Build'"
                sh 'id'
                sh 'pwd'
                sh "git clone https://github.com/dwlpm/appcode.git"
                sh 'cd appcode; composer install'
                // sh 'php bin/magento'
            }
        }
        stage('Test') {
            steps {
                sh "echo 'Testing..'"
                sh "cd appcode; ./vendor/bin/phpunit ./tests"
            }
        }
        stage('Build Docker Image') {
            steps {
                echo 'build image'
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

