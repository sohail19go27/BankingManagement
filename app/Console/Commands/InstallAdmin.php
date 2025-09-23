<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class InstallAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install System Admin';

    /**
     * Execute the console command.
     * @return int
     */
    public function handle()
    {
        $user=new User([
            'name'=>'BMS Admin',
            'email'=>'bms@yomail.com',
            'phone_no'=>'7296971876',
            'password'=>Hash::make('secret'),
            'user_type'=>1
        ]);
        if($user->save()){
            $this->info('Account Insert Successful');
        }
        else{
            $this->info('Account Insert Failed');
        }
    }
}
