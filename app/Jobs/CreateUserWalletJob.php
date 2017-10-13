<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Wallet;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateUserWalletJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param Wallet $wallet
     */
    public function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        User::orderBy('id')->chunk(100, function ($users) {
            foreach($users as $user){
                $user->wallets()->attach($this->wallet->id, [
                    'balance' => 0,
                    'status' => 'active'
                ]);
            }
        });
    }
}
