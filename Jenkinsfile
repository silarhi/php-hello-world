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

