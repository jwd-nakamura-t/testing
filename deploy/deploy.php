<?php
require 'recipe/common.php';
require 'recipe/symfony.php';

// デプロイ先のサーバを定義します。
server('test_server', '157.7.52.90 ', 22)
    ->user('nakamura')
    // ssh agentを使い認証します。
    ->identityFile()
    ->forwardAgent()
    ->stage('develop')
    // デプロイ先のベースパスを定義します。
    ->env('branch', 'develop')
    ->env('deploy_path', '/var/www/your/project');

server('product_server', '157.7.52.90 ', 22)
    ->user('nakamura')
    ->identityFile()
    ->forwardAgent()
    ->stage('production')
    ->env('branch', 'master')
    ->env('deploy_path', '/var/www/html');

// Gitリポジトリを設定します。サーバ上にgitが必要です。
set('repository', 'https://github.com/jwd-nakamura-t/testing.git');
