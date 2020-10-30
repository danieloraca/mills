<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Exceptions\ApiErrorException;
use App\Http\Factory\MillsFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MillController extends Controller
{
    /** @var MillsFactory */
    private $millsFactory;

    public function __construct(MillsFactory $millsFactory)
    {
        $this->millsFactory = $millsFactory;
    }

    public function showMills(): ?\Illuminate\View\View
    {
        try {
            $request = Request::create('/api/mills', 'GET');
            $response = app()->handle($request);

            $mills = $response->getContent();
            if ($response->status() === 200) {
                return View::make('mills', array('mills' => json_decode($mills, true)));
            }

            throw new ApiErrorException('Invalid API call1');
        } catch (\Exception $ex) {
            throw new ApiErrorException('Invalid API call2');
        }
    }

    public function getMills(): JsonResponse
    {
        return response()->json($this->millsFactory->buildMills(), 200);
    }
}
