<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WalletsController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 'trader') {
            return view('trader.wallets.index', [
                'wallets' => Wallet::where('user_id', Auth::user()->id)->latest()->get(),
                'balance' => wallet::where('user_id', Auth::user()->id)->latest()->first()
            ]);
        }
    }
    public function payment(Request $request)
    {
        //// Test /////
        $apiURL = "https://api.myfatoorah.com/";
        $apiToken = "G_Y5QaxAVcvt6AYnZXZng68O6pJ5HJJfRFXY-o5cOxA_PR8W5EZUjrGlY845k5TTv8j8lBqwtAH6hCaYVRUQp6F_GoFN7p8rRr04smKe60Wqq50-aZG5d_AthZ8mrWc2qzRW7bVUjOA0jAq0RYvmn3_9C46FwvGW5bDna9lgfOab1gfV0uXQ2flD786SXD0bQJgNzylsPF2Im89PRYZ2J4VlutrbdkuQ_3GOwK80DkGlLn91EukRtF2oQ_4HafZ2CpkQNC5kC2c1hja__N5IvQIgNI1XPQQJ9wGrQ5Wz1Hbxljce8l6NDjNJo36XTm9svjnhi4tSH-oKY1xtAb0mTRY1C1Wxnav8zBMBI4Ivwtr5BXfIvauaxVynEAwSDfhUzZ_3h9z8MW8tdHKMCm4GgqJ5OKAMyZeXLCKl4FaIzdFHrB9yenb6_JU3k4j_dH6AAmZO0-5NxGyfdgcuJrwIWpH7pG7YnaJPeFgReEytWaq6loALwwW3E3C4OS8iQjtsODLXqGSQAG8uzkZHiL0_fHbjOS1xHfNUVhUp3hMYvAt0u5i3HOiRuKKISQ7y3lOhjAqt9LHFvqseOfbH4MQDzDJ0J-zNGWxjrTESlGatz1YtHio582joCA2F-KFoDAZETlGT8aymxDvZBiBr3ZHTGQ4fPKdQP59ToAfu18HxXUl8d9uFiWp-dCXfYVyh8arjZdhekQ21_dseLYXpHWEh_eNxCss";

        // Live /////
        // $apiURL = "https://api.myfatoorah.com";
        // $apiToken = 'rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn';

        $data = [
            'PaymentMethodId' => 1,
            'CustomerName' => Auth::user()->name,
            'DisplayCurrencyIso' => "EGY",
            'CurrencyIso' => "EGY",
            'MobileCountryCode' => '+966',
            'CustomerMobile' => "",
            'CustomerEmail' => Auth::user()->email,
            'InvoiceValue' => $request->amount + 1 + ($request->amount * (2.75 / 100)),
            'InvoiceAmount' => $request->amount + 1 + ($request->amount * (2.75 / 100)),
            'CallBackUrl' => turl('payment/callback'),
            'ErrorUrl' => turl('payment/error'),
            'Language' => lang(),
            'CustomerReference' => Auth::user()->id,
            'CustomerCivilId' => 12345678,
            'UserDefinedField' => Auth::user()->id,
            'ExpireDate' => '',
            // 'CustomerAddress' => [
            //     'Block' => '',
            //     'Street' => $order->street,
            //     'HouseBuildingNo' => $order->area,
            //     'Address' => $order->address,
            //     'AddressInstructions' => $order->city,
            // ],
            // 'InvoiceItems' => $items,
        ];
        $response = Http::withToken($apiToken)->post("$apiURL/v2/ExecutePayment", $data);
        dd($response);
        $paymentURL = $response->json('Data')["Data"]["PaymentURL"];
        if ($response->successful() && $response->json('IsSuccess')) {
            return redirect()->away($paymentURL);
        }
    }


    public function callback(Request $request)
    {
        // //// Test /////
        // $apiURL = "https://apitest.myfatoorah.com/";
        // $apiToken = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL";

        //// Live /////
        $apiURL = "https://api.myfatoorah.com";
        $apiToken = 'G_Y5QaxAVcvt6AYnZXZng68O6pJ5HJJfRFXY-o5cOxA_PR8W5EZUjrGlY845k5TTv8j8lBqwtAH6hCaYVRUQp6F_GoFN7p8rRr04smKe60Wqq50-aZG5d_AthZ8mrWc2qzRW7bVUjOA0jAq0RYvmn3_9C46FwvGW5bDna9lgfOab1gfV0uXQ2flD786SXD0bQJgNzylsPF2Im89PRYZ2J4VlutrbdkuQ_3GOwK80DkGlLn91EukRtF2oQ_4HafZ2CpkQNC5kC2c1hja__N5IvQIgNI1XPQQJ9wGrQ5Wz1Hbxljce8l6NDjNJo36XTm9svjnhi4tSH-oKY1xtAb0mTRY1C1Wxnav8zBMBI4Ivwtr5BXfIvauaxVynEAwSDfhUzZ_3h9z8MW8tdHKMCm4GgqJ5OKAMyZeXLCKl4FaIzdFHrB9yenb6_JU3k4j_dH6AAmZO0-5NxGyfdgcuJrwIWpH7pG7YnaJPeFgReEytWaq6loALwwW3E3C4OS8iQjtsODLXqGSQAG8uzkZHiL0_fHbjOS1xHfNUVhUp3hMYvAt0u5i3HOiRuKKISQ7y3lOhjAqt9LHFvqseOfbH4MQDzDJ0J-zNGWxjrTESlGatz1YtHio582joCA2F-KFoDAZETlGT8aymxDvZBiBr3ZHTGQ4fPKdQP59ToAfu18HxXUl8d9uFiWp-dCXfYVyh8arjZdhekQ21_dseLYXpHWEh_eNxCss';


        $response = Http::withToken($apiToken)->post("$apiURL/v2/getPaymentStatus", [
            'Key' => $request->paymentId,
            'KeyType' => 'paymentId',
        ]);

        $wallet = Wallet::where('user_id', $response->json('Data')["Data"]["UserDefinedField"])->latest()->first();
        $total = 0;
        if ($wallet) {
            $total = $wallet->grand_total;
        }
        Wallet::create([
            'user_id'           => $response->json('Data')["Data"]["UserDefinedField"],
            'grand_total'       => (int)$response->json('Data')["Data"]["InvoiceTransactions"][0]["PaidCurrencyValue"] + $total,
            'balance'           => (int)$response->json('Data')["Data"]["InvoiceTransactions"][0]["PaidCurrencyValue"],
            'description_ar'    => 'عملية شحن المحفظة',
            'description_en'    => 'Wallet Charge Operation',
            'operation'         => 1,
        ]);

        return redirect(turl('wallets'))->with('success', 'Wallet Charge Success');
        // return $response->json('Data')["Data"];
    }

    public function error(Request $request)
    {
        // Show error actions
        return redirect(turl('wallets'))->with('faild', 'Wallet Has Not Been Charge ');
    }
}
