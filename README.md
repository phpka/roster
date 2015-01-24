## roster

勤務表のような物を作ろうとしています。

・開発環境
PHP 5.5.19
Laravel framework 4.2
MySQL 5.6.22

以下は組み込まれているので別途インストールは不要です。
BootStrap 3.3.1
BootStrap-Calendar

・開発環境作成手順
PHPをインストールします。
PHPにパスを通します。
MySQLをインストールします。
MySQLサーバーを起動します。
MySQLにデータベースを作成します。



rosterソースコードをダウンロードします。
gitがあればclone、なければzipファイルをダウンロードし解凍します。

git:ssh
git@github.com:phpka/roster.git
git:https
https://github.com/phpka/roster.git

git:sshの使用にはgithubにssh-keyの登録が必要です。

zip
https://github.com/phpka/roster/archive/master.zip



マイグレーションを使用し、テーブルを作成します。
解凍したファイルの中の、
app/config/database.php
を編集します。（下記の抜粋箇所）

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'forge',
			'username'  => 'forge',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
コマンドプロンプトやターミナルウインドウから、
php artisan migration
を実行します。
データベースにテーブルが作成されます。



phpのビルトインサーバーを使用し起動します。
cd public
php -S localhost:8000

(Apache Http Serverなどを使ってもできます)

### License

このソースコードのライセンスはMITライセンスです。 [MIT license](http://opensource.org/licenses/MIT)



