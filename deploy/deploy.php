<?php
require 'recipe/symfony.php';

// デプロイ先のサーバを定義します。
server('test.server', '157.7.52.90 ', 22)
    ->user('nakamura')
    // ssh agentを使い認証します。
    ->identityFile()
    ->forwardAgent()
    ->stage('production')
    // デプロイ先のベースパスを定義します。
    ->env('deploy_path', '/var/www/your/project');

// Gitリポジトリを設定します。サーバ上にgitが必要です。
set('repository', 'https://github.com/jwd-nakamura-t/testing.git');
