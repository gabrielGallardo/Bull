pipeline {
  agent {
    docker {
      image 'cli_php71:latest'
    }
  }
  stages {
    stage('Build') {
      steps {
        sh 'php --version'
      }
    }
    stage('Composer') {
      steps {
        sh 'composer install'
      }
    }
    stage('Test') {
      steps {
        sh './vendor/bin/simple-phpunit'
      }
    }
  }
}
