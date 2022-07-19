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

pipeline { 
agent any 
    stages { 
        stage ('Build') { 
          steps {
            sh "echo 'Build'"
            script {
                def browsers = ['chrome', 'firefox']
                def browsers.size = 2
                for (int i = 0; i < browsers.size(); ++i) {
                    echo "Testing the ${browsers[i]} browser"
                }
            }
          }
        }
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
    }           
 }

