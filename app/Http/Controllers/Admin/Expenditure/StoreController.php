<?php

namespace App\Http\Controllers\Admin\Expenditure;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;

use App\Models\Expenditure;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Expenditure\StoreRequest $request)
    {
        $data = $request->validated();

        $suma = $data['sum'];
        unset($data['sum']);
        $expenditure = Expenditure::create($data);
        Transaction::create([
            'sum' => $suma,
            'expenditure_id' => $expenditure->id,
        ]);
        return redirect()->route('admin.expenditure.index');

    }
}
