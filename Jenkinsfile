pipeline { 
agent any 
    stages { 
        stage ('Build') { 
          agent { 
              docker { 
                    image 'dwlpm/lpmm2:v1.0.2'
                    args '-v /home/jenkins/agent:/home/jenkins/agent'
              }
          }  
          steps {
            sh "echo 'Build'"
            script {
                def browsers = ['chrome', 'firefox']
                for (int i = 0; i < browsers.size(); ++i) {
                    echo "Testing the ${browsers[i]} browser"
                }
            }
            sh 'id'
            sh 'pwd'
            sh 'ls -al'
            sh 'php -v'
            sh 'composer install'
            // sh 'php bin/magento'
          }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
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

