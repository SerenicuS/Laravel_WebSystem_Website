<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       

        // Insert default job records
        DB::table('jobs_available')->insert([
            [
                'sendApply_ID' => 1,
                'companyName' => 'Company A',
                'companyJobPosition' => 'Position A',
                'companyJobLocation' => 'Location A',
                'sendapply_sendApply_ID' => 2,
                'job_salary' => 50000,
                'description_text' => 'Description A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sendApply_ID' => 2,
                'companyName' => 'Company B',
                'companyJobPosition' => 'Position B',
                'companyJobLocation' => 'Location B',
                'sendapply_sendApply_ID' => 3,
                'job_salary' => 60000,
                'description_text' => 'Description B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sendApply_ID' => 3,
                'companyName' => 'Company C',
                'companyJobPosition' => 'Position C',
                'companyJobLocation' => 'Location C',
                'sendapply_sendApply_ID' => 4,
                'job_salary' => 70000,
                'description_text' => 'Description C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sendApply_ID' => 4,
                'companyName' => 'Company D',
                'companyJobPosition' => 'Position D',
                'companyJobLocation' => 'Location D',
                'sendapply_sendApply_ID' => 1,
                'job_salary' => 80000,
                'description_text' => 'Description D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('jobs_available');
    }
};
