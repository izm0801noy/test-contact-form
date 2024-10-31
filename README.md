お問い合わせフォーム（確認テスト）

環境構築

Dokerビルド
　1.git cloneリンク
    git@github.com:izm0801noy/test-contact-form.git

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
![index drawio](https://github.com/user-attachments/assets/0d00172f-9a89-49e7-b3ab-08467aafb627)
![スクリーンショット 2024-10-31 091849](https://github.com/user-attachments/assets/a80674a8-4859-4dd3-a9ae-ac10b7ee2e4c)

URL
･開発環境: http://localhost/
･phpMyAdmin: http://localhost:8080/


