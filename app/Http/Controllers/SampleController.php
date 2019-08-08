<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SampleController extends Controller
{
    /**
     * @return int
     */
    public function index()
    {
        $a = 1280;
        $b = 2500;

        return $this->addition($a, $b);
    }

    /**
     * 加算
     * @param int $a
     * @param int $b
     * @return int
     */
    private function addition(int $a, int $b): int
    {
        return $a + $b;
    }


    /**
     * @return User
     * @throws \Exception
     */
    public function get()
    {
        // レコードは id < 10 しか存在しないのに
        $user = User::where('id', 100)->first();

        if(!$user) {
            throw new \Exception('User not found.');
        }

        return $this->userOperation($user);
    }

    /**
     * ユーザーデータを処理する（つもり）
     * @param User $user
     * @return User
     */
    private function userOperation(User $user)
    {
        /*
         * 色々な処理...
         */

        return $user;
    }
}
