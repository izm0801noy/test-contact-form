お問い合わせフォーム（確認テスト）

環境構築

Dokerビルド
　1.git cloneリンク

  2.docker-compose up d -build

Laravel環境構築
　1.docer-compose exec php bash
  2.composer install
  3..env.exampleファイルから.envを作成し、環境変数を変更
  4.php artisan key:generate
  5.php artisan migratte
  6.php artisan db:seed

使用技術
･PHP v8.3.12
･Laravel　8.83.27
･MySQL8.0

ER図



URL
･開発環境: http://localhost/
･phpMyAdmin: http://localhost:8080/


