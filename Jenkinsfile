/*
pipeline {
  agent {
    docker {
      image 'php:8.1.0-alpine'
    }

  }
  
  stages {
    stage('build') {
      steps {
        sh 'php --version'
      }
    }



  }
}
*/
/*
        stage ('Test') { 
          steps {
            sh "echo 'Test'"
          }
        }
        stage ('QA') { 
          steps {
            sh "echo 'QA'"
          }
        }
        stage ('Deploy') { 
          steps {
            sh "echo 'Deploy'"
          }
        }
        stage ('Monitor') { 
          steps {
            sh "echo 'Monitor'"
          }
        }
*/

pipeline { 
agent any 
    stages { 
        stage ('Build') { 
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

