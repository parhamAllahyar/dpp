<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Patterns\Factory\AccountCreator;
use App\Patterns\Factory\genAccount;
use App\Patterns\Factory\genAccountCreator;
use App\Patterns\Factory\goldAccount;
use App\Patterns\Factory\goldAccountCreator;
use App\Patterns\Factory\VipAccountFactory;
use App\Patterns\Strategy\Methods\MellatPayment;
use App\Patterns\Strategy\Methods\SammanPayment;
use App\Patterns\Strategy\Methods\ZarinPalPayment;
use App\Patterns\Strategy\PaymentService;
use Illuminate\Http\Request;
use App\Proxy\PostRepositoryInterface;

class PostController extends Controller
{
    private $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {

        $this->postRepository = $postRepository;
    }

    public function index()
    {

        return $this->postRepository->getTopTen();
    }


    public function strategy()
    {
        $payment = new PaymentService();
        $payment->setPaymentMethod($this->strategyPay('samman'));
        $payment->pay();
    }


    private function strategyPay(string $method)
    {

        switch ($method) {
            case 'samman':
                return new SammanPayment();
                break;
            case 'zarinpal':
                return new ZarinPalPayment();
                break;
            case 'Mellat':
                return new MellatPayment();
                break;
        }
    }



/////////////////////////////Factory Method /////////////////////////////


    public function factory()
    {
        
        $service = $this->createAccountService('gold');
        
         $a = $service->account();
      
    }


    private function createAccountService(string $accountType): AccountCreator
    {
       
        switch ($accountType) {
            case 'gold':
                return new goldAccountCreator();
                break;
            case 'vip':
                return new VipAccountFactory();
                break;
            case 'gen':
                return new genAccountCreator();
                break;
        }
    }



///////////////////////////////////////////////////////////////////////





}
