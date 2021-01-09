<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('receipts')->insert([
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 1 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT021','amount_of_money'=>20000000,'description'=>'Thu tiền điện quận Hai bà Trưng','object'=>'Công ty Đại Dương','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 2 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT022','amount_of_money'=>25000000,'description'=>'Thu tiền điện quận Thanh Xuân','object'=>'Công ty Bình Minh','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 3 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT023','amount_of_money'=>40000000,'description'=>'Thu tiền điện phường Đồng Tâm','object'=>'UBND Đồng Tâm','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 4 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT024','amount_of_money'=>27000000,'description'=>'Thu tiền khu dân cư An Thái','object'=>'Công ty An Thái','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 5 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT025','amount_of_money'=>30000000,'description'=>'Thu tiền điện quận 1','object'=>'Công ty Sơn Nam','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 7 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT026','amount_of_money'=>26000000,'description'=>'Thu tiền điện quận 2','object'=>'Công ty Kim Sơn','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 6 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT027','amount_of_money'=>48000000,'description'=>'Thu tiền điện phường An Bình B','object'=>'UBND Đồng Tâm','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 16 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT028','amount_of_money'=>117000000,'description'=>'Thu tiền khu dân cư Vinhome','object'=>'Đại diện VinHome','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],



            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 1 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC021','amount_of_money'=>30000000,'description'=>'Chi tiền nhân viên','object'=>'Công ty Điện lực','reason'=>'Chi tiền cho nhân viên hằng tháng','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 2 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC022','amount_of_money'=>45000000,'description'=>'Chi tiền hằng tháng','object'=>'Công ty Bình Minh','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 3 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC023','amount_of_money'=>50000000,'description'=>'Chi tiền tiếp khách','object'=>'UBND Đồng Tâm','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 4 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC024','amount_of_money'=>27000000,'description'=>'Trả tiền lương nhân viên','object'=>'Anh Minh trưởng phòng','reason'=>'Chi tiền hằng tháng','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 5 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC025','amount_of_money'=>10000000,'description'=>'Chi tiền nhân viên tại quận 1','object'=>'Công ty Sơn Nam','reason'=>'Chi tiền điện hằng tháng','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 7 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC026','amount_of_money'=>25000000,'description'=>'Chi tiền nhân viên tại quận 2','object'=>'Công ty Kim Sơn','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 6 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC027','amount_of_money'=>48000000,'description'=>'Chi tiền nhân viên tại phường An Bình B','object'=>'UBND Đồng Tâm','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 9 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC028','amount_of_money'=>17000000,'description'=>'Chi tiền nhân viên tại khu dân cư Vinhome','object'=>'Đại diện VinHome','reason'=>'Chi tiền nước hằng tháng','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 8 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC029','amount_of_money'=>30000000,'description'=>'Chi tiền nhân viên','object'=>'Công ty Điện lực','reason'=>'Chi tiền đào tạo nhân viên','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],



            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 8 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT029','amount_of_money'=>20000000,'description'=>'Thu tiền điện quận Hai bà Trưng','object'=>'Công ty Đại Dương','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 9 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT030','amount_of_money'=>25000000,'description'=>'Thu tiền điện quận Thanh Xuân','object'=>'Công ty Bình Minh','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 10 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT031','amount_of_money'=>40000000,'description'=>'Thu tiền điện phường Đồng Tâm','object'=>'UBND Đồng Tâm','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 11 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT032','amount_of_money'=>27000000,'description'=>'Thu tiền khu dân cư An Thái','object'=>'Công ty An Thái','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 14 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT033','amount_of_money'=>30000000,'description'=>'Thu tiền điện quận 1','object'=>'Công ty Sơn Nam','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 15 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT034','amount_of_money'=>26000000,'description'=>'Thu tiền điện quận 2','object'=>'Công ty Kim Sơn','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 13 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT035','amount_of_money'=>54000000,'description'=>'Thu tiền điện phường An Bình B','object'=>'UBND Đồng Tâm','reason'=>'Thu tiền','receipt_type'=>true,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 12 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PT036','amount_of_money'=>127000000,'description'=>'Thu tiền khu dân cư Vinhome','object'=>'Đại diện VinHome','reason'=>'Thu tiền điện hằng tháng','receipt_type'=>true,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
        



            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 16 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC030','amount_of_money'=>45000000,'description'=>'Chi tiền hằng tháng','object'=>'Công ty Bình Minh','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 15 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC031','amount_of_money'=>50000000,'description'=>'Chi tiền tiếp khách','object'=>'UBND Đồng Tâm','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 11 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC032','amount_of_money'=>27000000,'description'=>'Trả tiền lương nhân viên','object'=>'Anh Minh trưởng phòng','reason'=>'Chi tiền lương hằng tháng','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 10 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC033','amount_of_money'=>10000000,'description'=>'Chi tiền nhân viên tại quận 1','object'=>'Công ty Sơn Nam','reason'=>'Chi tiền cung cấp thiết bị hằng tháng','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 12 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC034','amount_of_money'=>25000000,'description'=>'Chi tiền nhân viên tại quận 2','object'=>'Công ty Kim Sơn','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 13 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC035','amount_of_money'=>48000000,'description'=>'Chi tiền nhân viên tại phường An Bình B','object'=>'UBND Đồng Tâm','reason'=>'Chi tiền','receipt_type'=>false,'employee'=>'Hạnh kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
            ['user_id'=>103,'day_voucher'=>now(),'address'=>'Số 14 Tôn Thất thuyết','account_get'=>'Tài khoản Công Ty','voucher_code'=>'PC036','amount_of_money'=>17000000,'description'=>'Chi tiền nhân viên tại khu dân cư Vinhome','object'=>'Đại diện VinHome','reason'=>'Chi tiền nhân viên hằng tháng','receipt_type'=>false,'employee'=>'Hồng kế toán','accounting_date'=>now(),'created_at' => now(),'updated_at' => now(),],
        
        ]);
    }
}
