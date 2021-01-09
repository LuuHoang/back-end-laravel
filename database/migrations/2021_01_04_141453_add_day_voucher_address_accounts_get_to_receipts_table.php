<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDayVoucherAddressAccountsGetToReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            //
            $table->date('day_voucher');
            $table->text('address');
            $table->text('account_get');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            //
            $table->dropColumn('day_voucher');
            $table->dropColumn('address');
            $table->dropColumn('account_get');
        });
    }
}
