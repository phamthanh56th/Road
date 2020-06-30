<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp_road79' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PL@~,[1D2ad[0Z#IU6sUZyV%%B!3shUmG@ r-pZdW_02Ol(1v()D{V+H7gQ.#O8,' );
define( 'SECURE_AUTH_KEY',  '%Rt`;LqE7t5<7~9yKRh1=<)s}y`{lxkE7Q>{]Ze5*MN%5xW!#n{3|5v|7?9g$ylE' );
define( 'LOGGED_IN_KEY',    '%9Vo87r4sap$Im^{c]Cp*sv:jR]U&>dh47#;:xQw9L+rDz!@Z5667:l{*rx}O<O@' );
define( 'NONCE_KEY',        'ds=8!V+:Kj?Rc5b%F35K_pF-!EU@^mAW&J|Y$}l?jJc2xJ>AJCctE&)HCc%eO`U4' );
define( 'AUTH_SALT',        '|k2{~*&)=jk|Qc~*>lgK=r&XjD0{|4tEg<tbYNHwu9S!2fHp_b%yn- P_{^N/,)q' );
define( 'SECURE_AUTH_SALT', '] $a`w^KdPtFM1aauCy~n>iYASA4aw7N}S+X$wPG3P=v[fHfNgwZX;p(1Dkox IB' );
define( 'LOGGED_IN_SALT',   'D!%Gu8g4rws`p|!gsZ#!Yzn:<3E#xf!cg@z>8ahM>ThOeF}6/L/AZ^:TYYw{oYfE' );
define( 'NONCE_SALT',       '37`l1wemw9e,(l#.aIiBpWY)<_ia.%|1r5fsjEG}ATeP?7ym$39;h]<|_c2Og+IL' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
