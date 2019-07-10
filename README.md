# news

使用php artisan make:controller NewsController --resorce

並以相關語法製作
Route

web.php ->
Route::resource('news', 'NewsController');

Controller

NewsController->
資料查詢刪除等 用上Eloquent::find(id)、all()、delete() 語法
回傳資料 使用上compact();


DB 測試資料語法


CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `news` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES(1, '公告一', 'testetsetset', '2019-07-10 08:06:44', '2019-07-10 08:06:44');
INSERT INTO `news` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES(2, '公告二', 'cccc', '2019-07-10 08:06:51', '2019-07-10 00:25:18');
INSERT INTO `news` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES(4, '公告公告', 'ㄟㄟㄟ 痾', '2019-07-10 00:35:04', '2019-07-10 00:35:11');

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
