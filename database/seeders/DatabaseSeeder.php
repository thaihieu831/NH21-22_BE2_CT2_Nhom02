<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::table('products')->insert([
            'product_id' => '1',
            'product_name' => 'iPhone 13 Pro Max 128GB',
            'type_id' => '1',
            'manu_id' => '1', 
            'description' => 'iPhone 13 Pro Max 256 GB - siêu phẩm mang trên mình bộ vi xử lý Apple A15 Bionic hàng đầu, màn hình Super Retina XDR 120 Hz, cụm camera khẩu độ f/1.5 cực lớn, tất cả sẽ mang lại cho bạn những trải nghiệm tuyệt vời chưa từng có.',
            'image' => 'iphone-13-pro-max-xanh-la-thumb-600x600.jpg', 
            'price' => '31190000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '2',
            'product_name' => 'Laptop MacBook Pro 14 M1 Max 2021',
            'type_id' => '2',
            'manu_id' => '1',
            'description' => 'Khoác lên mình vẻ ngoài mới lạ so với các dòng Mac trước đó, thiết kế màn hình tai thỏ ấn tượng, bắt mắt cùng bộ hiệu năng đỉnh cao M1 Max mạnh mẽ, MacBook Pro 14 inch M1 Max 2021 xứng tầm là chiếc laptop cao cấp chuyên dụng dành cho dân kỹ thuật - đồ họa, sáng tạo nội dung.',
            'image' => 'macbook-pro-14-m1-max-2021-10-core-cpu-600x600.jpg',
            'price' => '72900000',
            'feature' => '0',
        ]);
        DB::table('products')->insert([
            'product_id' => '3',
            'product_name' => 'iPad Pro M1 11 inch 5G',
            'type_id' => '3',
            'manu_id' => '1', 
            'description' => 'Máy tính bảng iPad Pro M1 11 inch WiFi Cellular 1TB (2021) thiết kế hình hộp vát cạnh vuông vức, hiện đại với thân máy bằng kim loại chắc chắn, hoàn thiện tỉ mỉ và sang trọng, trọng lượng nhẹ, kích cỡ hợp lý thuận tiện sử dụng và mang theo.',
            'image' => 'pad-pro-m1-11-inch-wifi-cellular-1tb-2021-bac-thumb-600x600.jpeg', 
            'price' => '46990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '4',
            'product_name' => 'Apple Watch Series 7 LTE 41mm viền thép',
            'type_id' => '4',
            'manu_id' => '1', 
            'description' => 'Apple Watch S7 LTE 41 mm viền thép có thiết kế tươi trẻ, hiện đại. Khung viền thép bền bỉ, cứng cáp cùng mặt kính Sapphire giúp bảo vệ an toàn cho đồng hồ trước những va đập không mong muốn. Màn hình OLED 1.61 inch hiển thị hình ảnh sống động, sắc nét, dây đeo silicone êm nhẹ, không thấm nước, cho bạn cảm giác dễ chịu suốt ngày dài.',
            'image' => 'apple-watch-series-7-lte-41mm-vien-thep-tim-thumb-660x600.jpg', 
            'price' => '19990000',                     
            'feature' => '0',
        ]);
        DB::table('products')->insert([
            'product_id' => '5',
            'product_name' => 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 Trắng',
            'type_id' => '5',
            'manu_id' => '1', 
            'description' => 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 trắng được chế tác với vẻ ngoài tinh giản, gam màu trắng trẻ trung, sáng đẹp, phối hợp tuyệt vời với mọi trang phục từ đời thường đến công sở, dự tiệc của bạn. ',
            'image' => 'bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-thumb-600x600.jpg', 
            'price' => '5190000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '6',
            'product_name' => 'Samsung Galaxy Z Fold3 5G',
            'type_id' => '1',
            'manu_id' => '2', 
            'description' => 'Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.',
            'image' => 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', 
            'price' => '33990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '7',
            'product_name' => 'Samsung Galaxy Book Pro',
            'type_id' => '2',
            'manu_id' => '2', 
            'description' => 'Samsung Galaxy Book Pro là siêu phẩm máy tính xách tay dành cho người ưu tiên tính di động, có yêu cầu cao về thiết kế và cấu hình của máy. Ngay sau khi ra mắt Samsung Galaxy Book Pro, rất nhiều diễn đàn công nghệ quan tâm và đánh giá bởi những tính năng ưu việt đến từ ông lớn Samsung.',
            'image' => 'uploaded_aa51b20b0184c8b7fb19da91711dc734.jpg', 
            'price' => '22714955',                     
            'feature' => '0',
        ]);
        DB::table('products')->insert([
            'product_id' => '8',
            'product_name' => 'Máy tính bảng Samsung Galaxy Tab S8+',
            'type_id' => '3',
            'manu_id' => '2', 
            'description' => 'Trong sự kiện Galaxy Unpacked 2022 Samsung đã chính thức cho ra mắt Samsung Galaxy Tab S8+ mẫu máy tính bảng được giới công nghệ chú ý đến với những nâng cấp sáng giá với thế hệ tiền nhiệm.',
            'image' => 'Samsung-Galaxy-tab-s8-black-thumb-600x600.jpg', 
            'price' => '25990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '9',
            'product_name' => 'Samsung Galaxy Watch Active 2 44mm viền thép dây da',
            'type_id' => '4',
            'manu_id' => '2', 
            'description' => 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 44mm là phiên bản có sự cải tiến về công nghệ để mang đến những trải nghiệm tốt nhất cho người dùng với nhiều tính năng chăm sóc sức khỏe, nhận cuộc gọi trực tiếp cũng như nhiều tính năng tiện ích khác.',
            'image' => 'samsung-galaxy-watch-active-2-44-mm-day-da-thumb-1-1-600x600.jpg', 
            'price' => '9990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '10',
            'product_name' => 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2',
            'type_id' => '5',
            'manu_id' => '2', 
            'description' => 'Bao phủ bên ngoài mỗi hộp sạc Galaxy Buds 2 R177N là gam màu trắng thuần khiết, khi mở hộp ra, tràn khắp mặt trong hộp và housing là những màu sắc độc đáo, tuyệt đẹp gồm đen Graphite, tím Lavender và xanh Olive.',
            'image' => 'samsung-galaxy-buds-2-r177n-600x600.jpg', 
            'price' => '2990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '11',
            'product_name' => 'Điện thoại Xiaomi 12',
            'type_id' => '1',
            'manu_id' => '3', 
            'description' => 'Xiaomi đang dần khẳng định chỗ đứng của mình trong phân khúc điện thoại flagship bằng việc ra mắt Xiaomi 12 với bộ thông số ấn tượng, máy có một thiết kế gọn gàng, hiệu năng mạnh mẽ, màn hình hiển thị chi tiết cùng khả năng chụp ảnh sắc nét nhờ trang bị ống kính đến từ Sony.',
            'image' => 'Xiaomi-12-xam-thumb-mau-600x600.jpg', 
            'price' => '19990000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '12',
            'product_name' => 'Laptop Xiaomi Mi Notebook Air 13.3 Core i7',
            'type_id' => '2',
            'manu_id' => '3', 
            'description' => 'Mi Notebook Air 13.3 có thể được coi là một đối thủ canh tranh trực tiếp với các sản phẩm Macbook của Apple vẫn giữ được tiêu chí tạo ra các sản phẩm ngon – bổ nhưng lại rẻ những thứ đã tạo nên thương hiệu cho Xiaomi đến từ Trung Quốc và chiếc Mi Notebook Air 13.3 được ra với tiêu chí trên cấu hình khủng nhưng giá cực “mềm”',
            'image' => 'Laptop-Xiaomi-Mi-Notebook-Air-13.3-Core-i7.jpg', 
            'price' => '10490000',                     
            'feature' => '1',
        ]);
        DB::table('products')->insert([
            'product_id' => '13',
            'product_name' => 'Máy tính bảng Xiaomi Pad 5 256GB ',
            'type_id' => '3',
            'manu_id' => '3', 
            'description' => 'Xiaomi cho ra mắt Xiaomi Pad 5 256GB, chiếc máy tính bảng có thiết kế mỏng nhẹ, thời trang cùng cấu hình hàng đầu đáp ứng hết các nhu cầu của bạn, dù là học tập, giải trí hay làm việc đều trở nên vô cùng trơn tru.',
            'image' => 'xiaomi-pad-5-grey-600x600.jpg', 
            'price' => '21950000',                     
            'feature' => '0',
        ]);
        DB::table('products')->insert([
            'product_id' => '14',
            'product_name' => 'Xiaomi Watch S1',
            'type_id' => '4',
            'manu_id' => '3', 
            'description' => 'Bên ngoài hộp đựng của Xiaomi Watch S1 có thiết kế vuông vức giống như các hộp đựng đồng hồ khác, vỏ hộp có màu đen là chủ đạo trông khá mạnh mẽ và cá tính. Ở mặt trước, vỏ hộp thiết kế đơn giản với phần tên sản phầm XIAOMI WATCH S1 được in nổi trông cũng khá ấn tượng, nổi bật.',
            'image' => 'xiaomi-watch-s1-nau-thumb-mau-600x600.jpg', 
            'price' => '5990000',                     
            'feature' => '0',
        ]);
        DB::table('products')->insert([
            'product_id' => '15',
            'product_name' => 'Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi',
            'type_id' => '5',
            'manu_id' => '3', 
            'description' => 'Tai nghe Bluetooth TWS Earphones 2 Basic Xiaomi BHR4089GL có hộp đựng cũng là hộp sạc hình vuông cho cảm giác cầm nắm vừa tay, cùng gam màu trắng thời thượng tạo nên phong cách cho bạn. Tai nghe đi kèm với chiếc hộp đựng được làm bằng nhựa, mặt trước có đèn Led thông báo thời lượng pin, mặt sau hộp có cổng sạc USB Type C.',
            'image' => 'tai-nghe-true-wireless-earphones-2-basic-xiaomi-thumb-600x600.png', 
            'price' => '1351000',                     
            'feature' => '1',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' => '1',
            'manu_name' => 'Apple',
        ]);

        DB::table('manufactures')->insert([
            'manu_id' => '2',
            'manu_name' => 'Samsung',
        ]);

        DB::table('manufactures')->insert([
            'manu_id' => '3',
            'manu_name' => 'Xiaomi',
        ]);
        DB::table('protypes')->insert([
            'type_id' => '1',
            'type_name' => 'Điện thoại',
        ]);
        DB::table('protypes')->insert([
            'type_id' => '2',
            'type_name' => 'Laptop',
        ]);
        DB::table('protypes')->insert([
            'type_id' => '3',
            'type_name' => 'Máy tính bảng',
        ]);
        DB::table('protypes')->insert([
            'type_id' => '4',
            'type_name' => 'Smartwatch',
        ]);
        DB::table('protypes')->insert([
            'type_id' => '5',
            'type_name' => 'Tai nghe',
        ]);
        DB::table('sales')->insert([
            'product_id' => '1',
            'sell_number' => '100',
            'import_quantity' => '500',
        ]);
        DB::table('sales')->insert([
            'product_id' => '2',
            'sell_number' => '150',
            'import_quantity' => '300',
        ]);
        DB::table('sales')->insert([
            'product_id' => '3',
            'sell_number' => '50',
            'import_quantity' => '150',
        ]);
        DB::table('sales')->insert([
            'product_id' => '4',
            'sell_number' => '150',
            'import_quantity' => '300',
        ]);
        DB::table('sales')->insert([
            'product_id' => '5',
            'sell_number' => '80',
            'import_quantity' => '200',
        ]);
        DB::table('sales')->insert([
            'product_id' => '6',
            'sell_number' => '120',
            'import_quantity' => '200',
        ]);
        DB::table('sales')->insert([
            'product_id' => '7',
            'sell_number' => '20',
            'import_quantity' => '200',
        ]);
        DB::table('sales')->insert([
            'product_id' => '8',
            'sell_number' => '120',
            'import_quantity' => '220',
        ]);
        DB::table('sales')->insert([
            'product_id' => '9',
            'sell_number' => '90',
            'import_quantity' => '250',
        ]);
        DB::table('sales')->insert([
            'product_id' => '10',
            'sell_number' => '15',
            'import_quantity' => '250',
        ]);
        DB::table('sales')->insert([
            'product_id' => '11',
            'sell_number' => '78',
            'import_quantity' => '180',
        ]);
        DB::table('sales')->insert([
            'product_id' => '12',
            'sell_number' => '236',
            'import_quantity' => '250',
        ]);
        DB::table('sales')->insert([
            'product_id' => '13',
            'sell_number' => '90',
            'import_quantity' => '278',
        ]);
        DB::table('sales')->insert([
            'product_id' => '14',
            'sell_number' => '130',
            'import_quantity' => '250',
        ]);
        DB::table('sales')->insert([
            'product_id' => '15',
            'sell_number' => '90',
            'import_quantity' => '250',
        ]);
        DB::table('orders')->insert([
            'user_id' => '1',
            'product_id' => '1',
            'quantity' => '1',
            'total' => '31190000',
            'phone' => '123456',
            'note' => 'abc',
            'address' => 'Thu Duc',
        ]);
        DB::table('wishlists')->insert([
            'wish_id' => '1',
            'user_id' => '1',
            'product_id' => '1',
            'created_at' => '2022-05-30 09:23:13',
            'updated_at' => '2022-05-30 09:23:13',
        ]);
        // DB::table('carts')->insert([
        //     'id' => '1',
        //     'product_id' => '1',
        //     'user_id' => '1',
        //     'total' => '19900000',
        //     'quantity' => '1',
        //     'created_at' => '2022-05-30 09:23:13',
        //     'updated_at' => '2022-05-30 09:23:13',
        // ]);
    }
}
